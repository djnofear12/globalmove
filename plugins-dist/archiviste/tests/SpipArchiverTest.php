<?php

namespace Spip\Archiver\Tests;

use PHPUnit\Framework\TestCase;
use Spip\Archiver\SpipArchiver;

/**
 * @covers \Spip\Archiver\AbstractArchiver
 * @covers \Spip\Archiver\SpipArchiver
 * @covers \Spip\Archiver\ZipArchive
 * @covers \Spip\Archiver\TarArchive
 * @covers \Spip\Archiver\TgzArchive
 * @covers \Spip\Archiver\NoDotFilterIterator
 *
 * @internal
 */
class SpipArchiverTest extends TestCase
{
	public static function setUpBeforeClass(): void
	{
		@mkdir(__DIR__ . '/../var/tmp/directory');
		@file_put_contents(__DIR__ . '/../var/tmp/directory/test.txt', 'contenu de test');

		// setup Zip
		$test_retirer_zip = new \ZipArchive();
		$test_retirer_zip->open(__DIR__ . '/../var/tmp/retirer.zip', \ZipArchive::CREATE);
		$test_retirer_zip->addFromString('test.txt', 'contenu de test');
		$test_retirer_zip->addFromString('sub_directory/test2.txt', 'contenu de test2');
		$test_retirer_zip->close();

		$test_commenter_zip = new \ZipArchive();
		$test_commenter_zip->open(__DIR__ . '/../var/tmp/commenter.zip', \ZipArchive::CREATE);
		$test_commenter_zip->addFromString('test.txt', 'contenu de test');
		$test_commenter_zip->setArchiveComment('A beautiful comment');
		$test_commenter_zip->close();

		$test_commenter_zip2 = new \ZipArchive();
		$test_commenter_zip2->open(__DIR__ . '/../var/tmp/commenter2.zip', \ZipArchive::CREATE);
		$test_commenter_zip2->addFromString('test.txt', 'contenu de test');
		$test_commenter_zip2->setArchiveComment('A beautiful comment');
		$test_commenter_zip2->close();

		// setup Tar
		@mkdir(__DIR__ . '/../var/tmp/tar/directory');
		@file_put_contents(__DIR__ . '/../var/tmp/tar/directory/test.txt', 'contenu de test');
		@mkdir(__DIR__ . '/../var/tmp/tar/directory/sub_directory');
		@file_put_contents(__DIR__ . '/../var/tmp/tar/directory/sub_directory/test2.txt', 'contenu de test2');
		$test_retirer_tar = new \Spip\Archiver\TarArchive();
		$test_retirer_tar->open(__DIR__ . '/../var/tmp/tar/retirer.tar', 'creation');
		$test_retirer_tar->compress(__DIR__ . '/../var/tmp/tar/directory', [
			__DIR__ . '/../var/tmp/tar/directory/test.txt' => 'directory/test.txt',
			__DIR__ . '/../var/tmp/tar/directory/sub_directory/test2.txt' => 'directory/sub_directory/test2.txt',
		]);
	}

	public static function tearDownAfterClass(): void
	{
		@unlink(__DIR__ . '/../var/tmp/test.txt');
		@unlink(__DIR__ . '/../var/tmp/tar/directory/test.txt');
		@rmdir(__DIR__ . '/../var/tmp/tar/directory');
		@unlink(__DIR__ . '/../var/tmp/tgz/directory/test.txt');
		@rmdir(__DIR__ . '/../var/tmp/tgz/directory');
		@unlink(__DIR__ . '/../var/tmp/directory/test.txt');
		@rmdir(__DIR__ . '/../var/tmp/directory');
		@unlink(__DIR__ . '/../var/tmp/emballer.zip');
		@unlink(__DIR__ . '/../var/tmp/emballer2.zip');
		@unlink(__DIR__ . '/../var/tmp/emballer3.zip');
		@unlink(__DIR__ . '/../var/tmp/tar/emballer.tar');
		@unlink(__DIR__ . '/../var/tmp/tar/emballer2.tar');
		@unlink(__DIR__ . '/../var/tmp/retirer.zip');
		@unlink(__DIR__ . '/../var/tmp/tar/retirer.tar');
		@unlink(__DIR__ . '/../var/tmp/commenter.zip');
		@unlink(__DIR__ . '/../var/tmp/commenter2.zip');
		@unlink(__DIR__ . '/../var/tmp/tar/directory/test.txt');
		@unlink(__DIR__ . '/../var/tmp/tar/directory/sub_directory/test2.txt');
		@rmdir(__DIR__ . '/../var/tmp/tar/directory/sub_directory');
		@rmdir(__DIR__ . '/../var/tmp/tar/directory');
	}

	public function dataInformer()
	{
		return [
			'empty-string' => [
				3,
				[
					'proprietes' => [],
					'fichiers' => [],
					'commentaire' => '',
				],
				'',
				'',
			],
			'unknown' => [
				2,
				[
					'proprietes' => [],
					'fichiers' => [],
					'commentaire' => '',
				],
				__DIR__ . '/../var/tmp/file.unknown',
				'',
			],
			'exotic' => [
				2,
				[
					'proprietes' => [],
					'fichiers' => [],
					'commentaire' => '',
				],
				__DIR__ . '/../var/tmp/file.unknown',
				'exotic',
			],
			'zip' => [
				0,
				[
					'proprietes' => [
						'racine' => '',
					],
					'fichiers' => [
						[
							'filename' => 'test.txt',
							'size' => 16,
						],
					],
					'commentaire' => ''
				],
				__DIR__ . '/../var/tmp/test.zip',
				'',
			],
			'zip-with-comment' => [
				0,
				[
					'proprietes' => [
						'racine' => '',
					],
					'fichiers' => [
						[
							'filename' => 'test.txt',
							'size' => 15,
						],
					],
					'commentaire' => 'A beautiful comment'
				],
				__DIR__ . '/../var/tmp/commenter2.zip',
				'zip',
			],
			'tar' => [
				0,
				[
					'proprietes' => [
						'racine' => '/directory/',
					],
					'fichiers' => [
						[
							'filename' => '/directory/test.txt',
							'size' => 16,
						],
					],
					'commentaire' => ''
				],
				__DIR__ . '/../var/tmp/tar/test.tar',
				'',
			],
			'tgz' => [
				0,
				[
					'proprietes' => [
						'racine' => '/directory/',
					],
					'fichiers' => [
						[
							'filename' => '/directory/test.txt',
							'size' => 16,
						],
					],
					'commentaire' => ''
				],
				__DIR__ . '/../var/tmp/tgz/test.tar.gz',
				'',
			],
		];
	}

	/**
	 * @dataProvider dataInformer
	 */
	public function testInformer($expected, $expectedList, $file, $extension)
	{
		// Given
		$archiver = new SpipArchiver($file, $extension);

		// When
		$actual = $archiver->informer();

		//Then
		$this->assertEquals($expectedList, $actual);
		$this->assertEquals($expected, $archiver->erreur());
	}

	public function dataDeballer()
	{
		return [
			'zip' => [
				true,
				0,
				__DIR__ . '/../var/tmp/test.zip',
				__DIR__ . '/../var/tmp',
				[],
				__DIR__ . '/../var/tmp/test.txt',
			],
			'destination-not-exists' => [
				false,
				5,
				__DIR__ . '/../var/tmp/test.zip',
				'',
				[__DIR__ . '/../var/tmp/directory/test.txt'],
				__DIR__ . '/../var/tmp/directory' . md5(mt_rand()),
			],
			'tar' => [
				true,
				0,
				'var/tmp/tar/test.tar',
				'var/tmp/tar',
				[],
				'var/tmp/tar/directory/test.txt',
			],
			'tgz' => [
				true,
				0,
				__DIR__ . '/../var/tmp/tgz/test.tar.gz',
				__DIR__ . '/../var/tmp/tgz',
				['directory/test.txt'],
				__DIR__ . '/../var/tmp/tgz/directory/test.txt',
			],
		];
	}

	/**
	 * @dataProvider dataDeballer
	 */
	public function testDeballer($expected, $expectedErreur, $file, $target, $files, $testFile)
	{
		// Given
		@\unlink($testFile);
		$archiver = new SpipArchiver($file);

		// When
		$actual = $archiver->deballer($target, $files);

		//Then
		$this->assertEquals($expected, $actual, 'decompress ok');
		$this->assertEquals($expectedErreur, $archiver->erreur(), 'error code');
		$this->assertTrue($expectedErreur === 5 || file_exists($testFile), 'decompressed file exists');
	}

	public function dataEmballer()
	{
		return [
			'exists' => [
				false,
				6,
				__DIR__ . '/../var/tmp/test.zip',
				'',
				[__DIR__ . '/../var/tmp/directory/test.txt'],
				__DIR__ . '/../var/tmp/directory',
			],
			'source-not-exists' => [
				false,
				7,
				__DIR__ . '/../var/tmp/dummy.zip',
				'',
				[__DIR__ . '/../var/tmp/directory/test.txt'],
				__DIR__ . '/../var/tmp/directory' . md5(mt_rand()),
			],
			'zip' => [
				true,
				0,
				__DIR__ . '/../var/tmp/emballer.zip',
				'',
				[__DIR__ . '/../var/tmp/directory/test.txt'],
				__DIR__ . '/../var/tmp/directory',
			],
			'zip2' => [
				true,
				0,
				__DIR__ . '/../var/tmp/emballer2.zip',
				'',
				[__DIR__ . '/../var/tmp/directory/test.txt'],
				null,
			],
			'zip3' => [
				true,
				0,
				__DIR__ . '/../var/tmp/emballer3.zip',
				'',
				[__DIR__ . '/../var/tmp/directory' => 'directory'],
				null,
			],
			'tar' => [
				true,
				0,
				'var/tmp/tar/emballer.tar',
				'',
				['var/tmp/tar/directory/test.txt'],
				'var/tmp/tar/directory',
			],
			'tar2' => [
				true,
				0,
				__DIR__ . '/../var/tmp/tar/emballer2.tar',
				'',
				[__DIR__ . '/../var/tmp/directory/test.txt' => 'flat.txt'],
				__DIR__ . '/../var/tmp/directory',
			],
		];
	}

	/**
	 * @dataProvider dataEmballer
	 */
	public function testEmballer($expected, $expectedErreur, $file, $extension, $files, $target)
	{
		// Given
		$archiver = new SpipArchiver($file, $extension);

		// When
		$actual = $archiver->emballer($files, $target);

		//Then
		$this->assertEquals($expected, $actual, 'compress ok');
		$this->assertEquals($expectedErreur, $archiver->erreur(), 'error code');
		// $this->assertTrue(file_exists($file), 'compressed file exists');
	}

	public function dataRetirer()
	{
		return [
			'not-exists' => [
				false,
				3,
				md5(mt_rand()),
				'zip',
				['test.txt'],
			],
			'zip' => [
				true,
				0,
				__DIR__ . '/../var/tmp/retirer.zip',
				'',
				['test.txt'],
			],
			'vider' => [
				false,
				8,
				__DIR__ . '/../var/tmp/retirer.zip',
				'',
				['test.txt', 'sub_directory/test2.txt'],
			],
			'tar' => [
				true,
				0,
				__DIR__ . '/../var/tmp/tar/retirer.tar',
				'',
				['directory/test.txt'],
			],
		];
	}

	/**
	 * @dataProvider dataRetirer
	 */
	public function _testRetirer($expected, $expectedErreur, $file, $extension, $files)
	{
		// Given
		$archiver = new SpipArchiver($file, $extension);

		// When
		$actual = $archiver->retirer($files);

		//Then
		$this->assertEquals($expected, $actual, 'remove ok');
		$this->assertEquals($expectedErreur, $archiver->erreur(), 'error code');
	}

	public function dataCommenter()
	{
		return [
			'zip' => [
				true,
				0,
				[
					'proprietes' => [
						'racine' => '',
					],
					'fichiers' => [
						[
							'filename' => 'test.txt',
							'size' => 15,
						],
					],
					'commentaire' => 'A beautiful comment'
				],
				__DIR__ . '/../var/tmp/commenter.zip',
				'zip',
				'A beautiful comment',
			],
			'zip-edit' => [
				true,
				0,
				[
					'proprietes' => [
						'racine' => '',
					],
					'fichiers' => [
						[
							'filename' => 'test.txt',
							'size' => 15,
						],
					],
					'commentaire' => 'An edited comment'
				],
				__DIR__ . '/../var/tmp/commenter.zip',
				'zip',
				'An edited comment',
			],
		];
	}

	/**
	 * @dataProvider dataCommenter
	 */
	public function testCommenter($expected, $expectedErreur, $expectedInformer, $file, $extension, $comment)
	{
		// Given
		$archiver = new SpipArchiver($file, $extension);

		// When
		$actual = $archiver->commenter($comment);

		//Then
		$this->assertEquals($expected, $actual, 'comment ok');
		$this->assertEquals($expectedErreur, $archiver->erreur(), 'error code ok');
		$this->assertEquals($expectedInformer, $archiver->informer(), 'error informer ok');
	}

}
