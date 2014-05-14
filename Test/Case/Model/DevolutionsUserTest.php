<?php
App::uses('DevolutionsUser', 'Model');

/**
 * DevolutionsUser Test Case
 *
 */
class DevolutionsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.devolutions_user',
		'app.devolutions'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DevolutionsUser = ClassRegistry::init('DevolutionsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DevolutionsUser);

		parent::tearDown();
	}

}
