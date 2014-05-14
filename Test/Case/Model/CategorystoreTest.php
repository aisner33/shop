<?php
App::uses('Categorystore', 'Model');

/**
 * Categorystore Test Case
 *
 */
class CategorystoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categorystore',
		'app.store'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categorystore = ClassRegistry::init('Categorystore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categorystore);

		parent::tearDown();
	}

}
