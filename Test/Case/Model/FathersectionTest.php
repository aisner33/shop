<?php
App::uses('Fathersection', 'Model');

/**
 * Fathersection Test Case
 *
 */
class FathersectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fathersection',
		'app.childsection',
		'app.freaturedproduct',
		'app.mastersection',
		'app.product',
		'app.childsections_product',
		'app.father_sections_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fathersection = ClassRegistry::init('Fathersection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fathersection);

		parent::tearDown();
	}

}
