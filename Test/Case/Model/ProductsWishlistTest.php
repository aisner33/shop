<?php
App::uses('ProductsWishlist', 'Model');

/**
 * ProductsWishlist Test Case
 *
 */
class ProductsWishlistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.products_wishlist',
		'app.products'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductsWishlist = ClassRegistry::init('ProductsWishlist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductsWishlist);

		parent::tearDown();
	}

}
