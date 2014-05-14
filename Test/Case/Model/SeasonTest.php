<?php
App::uses('Season', 'Model');

/**
 * Season Test Case
 *
 */
class SeasonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.season',
		'app.product',
		'app.store',
		'app.brand',
		'app.gallerie',
		'app.offer',
		'app.dealstype',
		'app.sale',
		'app.color',
		'app.cart',
		'app.size',
		'app.user',
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
		'app.mastersections_product',
		'app.childsections_product',
		'app.review',
		'app.products_section',
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
		$this->Season = ClassRegistry::init('Season');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Season);

		parent::tearDown();
	}

}
