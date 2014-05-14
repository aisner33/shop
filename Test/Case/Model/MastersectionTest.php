<?php
App::uses('Mastersection', 'Model');

/**
 * Mastersection Test Case
 *
 */
class MastersectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mastersection',
		'app.section',
		'app.childsection',
		'app.fathersection',
		'app.father_sections_product',
		'app.product',
		'app.freaturedproduct',
		'app.childsections_product',
		'app.mastersections_product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mastersection = ClassRegistry::init('Mastersection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mastersection);

		parent::tearDown();
	}

}
