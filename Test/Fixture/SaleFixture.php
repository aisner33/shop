<?php
/**
 * SaleFixture
 *
 */
class SaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'saleDate' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 4),
		'color_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'size_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'totalCost' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'promotioncode_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'offer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'subTotal' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_carts_products_colors1_idx' => array('column' => 'color_id', 'unique' => 0),
			'fk_carts_products_sizes1_idx' => array('column' => 'size_id', 'unique' => 0),
			'fk_carts_products1_idx' => array('column' => 'product_id', 'unique' => 0),
			'fk_carts_users1_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_sales_promotionCodes1_idx' => array('column' => 'promotioncode_id', 'unique' => 0),
			'fk_sales_offers1_idx' => array('column' => 'offer_id', 'unique' => 0)
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
			'id' => 1,
			'saleDate' => '2014-04-22 01:46:14',
			'quantity' => 1,
			'color_id' => 1,
			'size_id' => 1,
			'product_id' => 1,
			'user_id' => 1,
			'totalCost' => 'Lorem ipsum dolor sit amet',
			'promotioncode_id' => 1,
			'offer_id' => 1,
			'subTotal' => 'Lorem ipsum dolor sit amet'
		),
	);

}
