<?php
App::uses('Dvd', 'Model');

/**
 * Dvd Test Case
 */
class DvdTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dvd',
		'app.format',
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
		$this->Dvd = ClassRegistry::init('Dvd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dvd);

		parent::tearDown();
	}

}
