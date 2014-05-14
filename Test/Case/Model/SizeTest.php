<?php
App::uses('Size', 'Model');

/**
 * Size Test Case
 *
 */
class SizeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.size',
		'app.country',
		'app.cart',
		'app.color',
		'app.sale',
		'app.product',
		'app.store',
		'app.brand',
		'app.season',
		'app.gallerie',
		'app.offer',
		'app.dealstype',
		'app.realsize',
		'app.freaturedproduct',
		'app.childsection',
		'app.fathersection',
		'app.father_sections_product',
		'app.mastersection',
		'app.section',
		'app.childseccion',
		'app.products_section',
		'app.mastersections_product',
		'app.childsections_product',
		'app.review',
		'app.user',
		'app.colors_product',
		'app.products_size',
		'app.wishlist',
		'app.products_wishlist',
		'app.promotioncode',
		'app.codetype',
		'app.delivery',
		'app.deliverys_sale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Size = ClassRegistry::init('Size');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Size);

		parent::tearDown();
	}

}
