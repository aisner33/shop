<?php
App::uses('ProductsSection', 'Model');

/**
 * ProductsSection Test Case
 *
 */
class ProductsSectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.products_section',
		'app.section',
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
		'app.size',
		'app.user',
		'app.freaturedproduct',
		'app.childsection',
		'app.fathersection',
		'app.father_sections_product',
		'app.mastersection',
		'app.mastersections_product',
		'app.childsections_product',
		'app.review',
		'app.products_size',
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
		$this->ProductsSection = ClassRegistry::init('ProductsSection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductsSection);

		parent::tearDown();
	}

}
