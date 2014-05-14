<?php
App::uses('Userprofile', 'Model');

/**
 * Userprofile Test Case
 *
 */
class UserprofileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.userprofile',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Userprofile = ClassRegistry::init('Userprofile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Userprofile);

		parent::tearDown();
	}

}
