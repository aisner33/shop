<?php
App::uses('Realsize', 'Model');

/**
 * Realsize Test Case
 *
 */
class RealsizeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.realsize',
		'app.product',
		'app.store',
		'app.brand',
		'app.season',
		'app.gallerie',
		'app.offer',
		'app.dealstype',
		'app.sale',
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
		$this->Realsize = ClassRegistry::init('Realsize');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Realsize);

		parent::tearDown();
	}

}
