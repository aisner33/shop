<?php
/**
 * CartFixture
 *
 */
class CartFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'added' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 4),
		'color_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'size_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_carts_products_colors1_idx' => array('column' => 'color_id', 'unique' => 0),
			'fk_carts_products_sizes1_idx' => array('column' => 'size_id', 'unique' => 0),
			'fk_carts_products1_idx' => array('column' => 'product_id', 'unique' => 0),
			'fk_carts_users1_idx' => array('column' => 'user_id', 'unique' => 0)
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
			'added' => '2014-04-22 01:45:24',
			'quantity' => 1,
			'color_id' => 1,
			'size_id' => 1,
			'product_id' => 1,
			'user_id' => 1
		),
	);

}
