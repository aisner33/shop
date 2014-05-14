<?php
/**
 * DeliverysSaleFixture
 *
 */
class DeliverysSaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'sale_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'delivery_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('sale_id', 'delivery_id'), 'unique' => 1),
			'fk_deliverys_sales_sales1_idx' => array('column' => 'sale_id', 'unique' => 0),
			'fk_deliverys_sales_deliverys1_idx' => array('column' => 'delivery_id', 'unique' => 0)
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
			'sale_id' => 1,
			'delivery_id' => 1
		),
	);

}
