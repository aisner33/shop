<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.cart',
		'app.color',
		'app.sale',
		'app.size',
		'app.country',
		'app.product',
		'app.store',
		'app.gallerie',
		'app.state',
		'app.mailingadress',
		'app.categorystore',
		'app.brand',
		'app.season',
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
		'app.colors_product',
		'app.products_size',
		'app.wishlist',
		'app.products_wishlist',
		'app.promotioncode',
		'app.codetype',
		'app.delivery',
		'app.deliverys_sale',
		'app.userprofile',
		'app.devolution',
		'app.devolutions_reason',
		'app.devolutions_user',
		'app.guest',
		'app.guests_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
