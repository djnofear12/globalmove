<?php

namespace Spip\Archiver;

/**
 * {@inheritDoc}
 * Implémentation spécifique au fichier .tar.
 */
class TarArchive implements ArchiveInterface
{
	protected \PharData $tar;

	protected ?string $filename = null;

	protected NoDotFilterIterator $source;

	protected bool $gzCompress = false;

	public function open(string $filename, string $mode): int {
		$this->filename = $filename;

		$this->tar = new \PharData(
			$this->filename,
			\FilesystemIterator::SKIP_DOTS | \FilesystemIterator::UNIX_PATHS,
			null,
			2
		);

		return 1;
	}

	/**
	 * {@inheritDoc}
	 */
	public function list(): array {
		$files = [];

		if ('' === $this->tar->getPathname()) {
			return $files;
		}
		$root_dir = dirname($this->tar->getPathname());
		$source = new NoDotFilterIterator(
			new \RecursiveIteratorIterator(
				new \RecursiveDirectoryIterator($root_dir)
			)
		);
		foreach ($source as $file) {
			$files[] = [
				'filename' => str_replace($root_dir, '', $file->getPathname()),
				'size' => $file->getSize(),
			];
		}

		return $files;
	}

	/**
	 * {@inheritDoc}
	 */
	public function compress(string $source = '', array $files = []): bool {
		foreach ($files as $source => $destination) {
			try {
				$this->tar->addFile($source, $destination);
			} catch(\Exception $e) {
				dump($this->filename, var_export($e->getMessage(), true));
				die();
			}
		}

		return true;
	}

	/**
	 * {@inheritDoc}
	 */
	public function extractTo(string $target = '', array $files = []): bool {
		if (empty($files)) {
			$files = null;
		}

		return $this->tar->extractTo($target, $files);
	}

	/**
	 * {@inheritDoc}
	 */
	public function remove(array $files = []): bool {
		foreach ($files as $file) {
			unset($this->tar[$file]);
		}

		return true;
	}

	/**
	 * {@inheritDoc}
	 */
	public function close(): bool {
		return true;
	}
	/**
	 * {@inheritDoc}
	 */
	public function setComment(string $comment): bool {
		return true;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getComment() {
		return '';
	}
}
