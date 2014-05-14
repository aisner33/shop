<?php
/**
 * ColorsProductFixture
 *
 */
class ColorsProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'color_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'fk_colors_products_colors1_idx' => array('column' => 'color_id', 'unique' => 0),
			'fk_colors_products_products1_idx' => array('column' => 'product_id', 'unique' => 0)
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
			'color_id' => 1,
			'product_id' => 1
		),
	);

}
