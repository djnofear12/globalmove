<?php

/*
 * TextWheel 0.1
 *
 * let's reinvent the wheel one last time
 *
 * This library of code is meant to be a fast and universal replacement
 * for any and all text-processing systems written in PHP
 *
 * It is dual-licensed for any use under the GNU/GPL2 and MIT licenses,
 * as suits you best
 *
 * (c) 2009 Fil - fil@rezo.net
 * Documentation & http://zzz.rezo.net/-TextWheel-
 *
 * Usage: $wheel = new TextWheel(); echo $wheel->text($text);
 *
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


// Pour choisir le JSON ou le YAML
if (!defined('_WHEELS_FORMAT_DEFAUT')) {
	define('_WHEELS_FORMAT_DEFAUT', 'json');
}

require_once __DIR__ . '/textwheelrule.php';

abstract class TextWheelDataSet {
	# list of data
	protected $data = [];

	/**
	 * file finder : can be overloaded in order to use application dependant
	 * path find method
	 *
	 * @param string $file
	 * @param string $path
	 * @return string
	 */
	protected function findFile(&$file, $path = '') {
		static $default_path;

		// absolute file path ?
		if (file_exists($file)) {
			return $file;
		}

		// file embed with texwheels, relative to calling ruleset
		if ($path and file_exists($f = $path . $file)) {
			return $f;
		}

		// textwheel default path ?
		if (!$default_path) {
			$default_path = __DIR__ . '/../wheels/';
		}
		if (file_exists($f = $default_path . $file)) {
			return $f;
		}

		return false;
	}

	/**
	 * Load a YAML/JSON file describing data
	 *
	 * @param string $file
	 * @param string $default_path
	 * @return array
	 */
	protected function loadFile(&$file, $default_path = '') {
		if (!preg_match(',[.](yaml|json)$,i', $file, $matches)) {
			// Le fichier est fourni sans son extension, on essaie avec le json puis le yaml sinon.
			$formats = (_WHEELS_FORMAT_DEFAUT === 'json') ? ['json', 'yaml'] : ['yaml', 'json'];
			$name = $file;
			foreach ($formats as $format) {
				$file = $name . '.' . $format;
				if ($file = $this->findFile($file, $default_path)) {
					break;
				}
			}
		} else {
			$format = $matches[1];
		}

		if (
			!$file
			or (!$file = $this->findFile($file, $default_path))
		) {
			return [];
		}

		defined('_YAML_EVAL_PHP') || define('_YAML_EVAL_PHP', false);
		if ($format == 'json') {
			$dataset = json_decode(file_get_contents($file), true, 512, JSON_THROW_ON_ERROR);
		} elseif (defined('_DIR_PLUGIN_YAML')) {
			include_spip('inc/yaml');
			$dataset =  yaml_decode(file_get_contents($file));
		} else {
			$dataset = [];
		}

		if (is_null($dataset)) {
			$dataset = [];
		}
#			throw new DomainException('rule file is empty, unreadable or badly formed: '.$file.var_export($dataset,true));

		// if a php file with same name exists
		// include it as it contains callback functions
		if (
			$f = preg_replace(',[.](yaml|json)$,i', '.php', $file)
			and file_exists($f)
		) {
			$dataset[] = ['require' => $f, 'priority' => -1000];
		}

		return $dataset;
	}
}

class TextWheelRuleSet extends TextWheelDataSet {
	# sort flag
	protected $sorted = true;

	/**
	 * Constructor
	 *
	 * @param array|string $ruleset
	 * @param string $filepath
	 */
	public function __construct($ruleset = [], $filepath = '') {
		if ($ruleset) {
			$this->addRules($ruleset, $filepath);
		}
	}

	/**
	 * public static loader
	 * can be overloaded to use memoization
	 *
	 * @param array $ruleset
	 * @param string $callback
	 * @param string $class
	 * @return TextWheelRuleSet
	 */
	public static function &loader($ruleset, $callback = '', $class = 'TextWheelRuleSet') {

		$ruleset = new $class($ruleset);
		if ($callback) {
			$callback($ruleset);
		}

		return $ruleset;
	}

	/**
	 * Get an existing named rule in order to override it
	 *
	 * @param string $name
	 * @return string
	 */
	public function &getRule($name) {
		if (isset($this->data[$name])) {
			return $this->data[$name];
		}
		$result = null;

		return $result;
	}

	/**
	 * get sorted Rules
	 *
	 * @return array
	 */
	public function &getRules() {
		$this->sort();

		return $this->data;
	}

	/**
	 * add a rule
	 *
	 * @param TextWheelRule $rule
	 */
	public function addRule($rule) {
		# cast array-rule to object
		if (is_array($rule)) {
			$rule = new TextWheelRule($rule);
		}
		$this->data[] = $rule;
		$this->sorted = false;
	}

	/**
	 * add an list of rules
	 * can be
	 * - an array of rules
	 * - a string filename
	 * - an array of string filename
	 *
	 * @param array|string $rules
	 * @param string $filepath
	 */
	public function addRules($rules, $filepath = '') {
		// rules can be an array of filename
		if (is_array($rules) and is_string(reset($rules))) {
			foreach ($rules as $i => $filename) {
				$this->addRules($filename);
			}

			return;
		}

		// rules can be a string : yaml or json filename
		if (is_string($rules)) {
			$file = $rules; // keep the real filename
			$rules = $this->loadFile($file, $filepath);
			$filepath = dirname($file) . '/';
		}

		// rules can be an array of rules
		if (is_array($rules) and count($rules)) {
			# cast array-rules to objects
			foreach ($rules as $i => $rule) {
				if (is_array($rule)) {
					$rules[$i] = new TextWheelRule($rule);
				}
				// load subwheels when necessary
				if ($rules[$i]->is_wheel) {
					// subruleset is of the same class as current ruleset
					$class = get_class($this);
					$rules[$i]->replace = new $class($rules[$i]->replace, $filepath);
				}
			}
			$this->data = array_merge($this->data, $rules);
			$this->sorted = false;
		}
	}

	/**
	 * Sort rules according to priority and
	 * purge disabled rules
	 *
	 */
	protected function sort() {
		if (!$this->sorted) {
			$rulz = [];
			foreach ($this->data as $index => $rule) {
				if (!$rule->disabled) {
					$rulz[intval($rule->priority)][$index] = $rule;
				}
			}
			ksort($rulz);
			$this->data = [];
			foreach ($rulz as $rules) {
				$this->data += $rules;
			}

			$this->sorted = true;
		}
	}
}
