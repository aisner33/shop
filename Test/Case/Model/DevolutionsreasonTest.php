<?php
App::uses('DevolutionsReason', 'Model');

/**
 * DevolutionsReason Test Case
 *
 */
class DevolutionsReasonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.devolutions_reason'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DevolutionsReason = ClassRegistry::init('DevolutionsReason');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DevolutionsReason);

		parent::tearDown();
	}

}
