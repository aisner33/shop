<?php
App::uses('ProductsSize', 'Model');

/**
 * ProductsSize Test Case
 *
 */
class ProductsSizeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.products_size',
		'app.size',
		'app.product',
		'app.store',
		'app.brand',
		'app.season',
		'app.gallerie',
		'app.offer',
		'app.dealstype',
		'app.sale',
		'app.realsize',
		'app.cart',
		'app.color',
		'app.colors_product',
		'app.user',
		'app.freaturedproduct',
		'app.childsection',
		'app.fathersection',
		'app.father_sections_product',
		'app.mastersection',
		'app.section',
		'app.mastersections_product',
		'app.childsections_product',
		'app.review',
		'app.products_section',
		'app.wishlist',
		'app.products_wishlist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductsSize = ClassRegistry::init('ProductsSize');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductsSize);

		parent::tearDown();
	}

}
