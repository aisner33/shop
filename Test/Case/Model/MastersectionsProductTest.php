<?php
App::uses('MastersectionsProduct', 'Model');

/**
 * MastersectionsProduct Test Case
 *
 */
class MastersectionsProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mastersections_product',
		'app.mastersections',
		'app.products'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MastersectionsProduct = ClassRegistry::init('MastersectionsProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MastersectionsProduct);

		parent::tearDown();
	}

}
