<?php
App::uses('ChildsectionsProduct', 'Model');

/**
 * ChildsectionsProduct Test Case
 *
 */
class ChildsectionsProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.childsections_product',
		'app.childsection',
		'app.fathersection',
		'app.freaturedproduct',
		'app.mastersection',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ChildsectionsProduct = ClassRegistry::init('ChildsectionsProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ChildsectionsProduct);

		parent::tearDown();
	}

}
