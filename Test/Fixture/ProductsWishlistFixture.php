<?php
/**
 * ProductsWishlistFixture
 *
 */
class ProductsWishlistFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'wishlists_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'products_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('wishlists_id', 'products_id'), 'unique' => 1),
			'fk_products_wishlists_wishlists1_idx' => array('column' => 'wishlists_id', 'unique' => 0),
			'fk_products_wishlists_products1_idx' => array('column' => 'products_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'wishlists_id' => 1,
			'products_id' => 1
		),
	);

}
