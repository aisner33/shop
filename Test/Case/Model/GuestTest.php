<?php
App::uses('Guest', 'Model');

/**
 * Guest Test Case
 *
 */
class GuestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guest',
		'app.user',
		'app.guests_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Guest = ClassRegistry::init('Guest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Guest);

		parent::tearDown();
	}

}
