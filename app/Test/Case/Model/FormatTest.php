<?php
App::uses('Format', 'Model');

/**
 * Format Test Case
 */
class FormatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.format',
		'app.dvd',
		'app.type',
		'app.location',
		'app.rating',
		'app.genre',
		'app.genres_dvd'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Format = ClassRegistry::init('Format');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Format);

		parent::tearDown();
	}

}
