<?php
App::uses('Devolution', 'Model');

/**
 * Devolution Test Case
 *
 */
class DevolutionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.devolution',
		'app.devolutionsreason',
		'app.user',
		'app.devolutions_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Devolution = ClassRegistry::init('Devolution');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Devolution);

		parent::tearDown();
	}

}
