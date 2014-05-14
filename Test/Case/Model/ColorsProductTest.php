<?php
App::uses('ColorsProduct', 'Model');

/**
 * ColorsProduct Test Case
 *
 */
class ColorsProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.colors_product',
		'app.color',
		'app.cart',
		'app.size',
		'app.product',
		'app.user',
		'app.sale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ColorsProduct = ClassRegistry::init('ColorsProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ColorsProduct);

		parent::tearDown();
	}

}
