<?php
App::uses('Store', 'Model');

/**
 * Store Test Case
 *
 */
class StoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.store',
		'app.gallerie',
		'app.state',
		'app.mailingadress',
		'app.country',
		'app.user',
		'app.categorystore',
		'app.product',
		'app.brand',
		'app.season',
		'app.offer',
		'app.dealstype',
		'app.sale',
		'app.color',
		'app.cart',
		'app.size',
		'app.products_size',
		'app.colors_product',
		'app.promotioncode',
		'app.codetype',
		'app.delivery',
		'app.deliverys_sale',
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
		$this->Store = ClassRegistry::init('Store');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Store);

		parent::tearDown();
	}

}
