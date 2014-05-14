<?php
App::uses('Freaturedproduct', 'Model');

/**
 * Freaturedproduct Test Case
 *
 */
class FreaturedproductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.freaturedproduct',
		'app.product',
		'app.childsection',
		'app.fathersection',
		'app.father_sections_product',
		'app.mastersection',
		'app.childsections_product',
		'app.section'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Freaturedproduct = ClassRegistry::init('Freaturedproduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Freaturedproduct);

		parent::tearDown();
	}

}
