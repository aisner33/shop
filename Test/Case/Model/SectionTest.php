<?php
App::uses('Section', 'Model');

/**
 * Section Test Case
 *
 */
class SectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.section',
		'app.childseccion',
		'app.freaturedproduct',
		'app.product',
		'app.store',
		'app.brand',
		'app.season',
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
		'app.review',
		'app.childsection',
		'app.fathersection',
		'app.father_sections_product',
		'app.mastersection',
		'app.mastersections_product',
		'app.childsections_product',
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
		$this->Section = ClassRegistry::init('Section');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Section);

		parent::tearDown();
	}

}
