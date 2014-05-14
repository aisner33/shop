<?php
App::uses('Childsection', 'Model');

/**
 * Childsection Test Case
 *
 */
class ChildsectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.childsection',
		'app.fathersection',
		'app.freaturedproduct',
		'app.mastersection',
		'app.product',
		'app.childsections_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Childsection = ClassRegistry::init('Childsection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Childsection);

		parent::tearDown();
	}

}
