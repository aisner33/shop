<?php
App::uses('GuestsUser', 'Model');

/**
 * GuestsUser Test Case
 *
 */
class GuestsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guests_user',
		'app.guest',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->GuestsUser = ClassRegistry::init('GuestsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GuestsUser);

		parent::tearDown();
	}

}
