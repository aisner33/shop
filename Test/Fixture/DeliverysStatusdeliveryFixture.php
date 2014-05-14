<?php
/**
 * DeliverysStatusdeliveryFixture
 *
 */
class DeliverysStatusdeliveryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'deliverys_statusdeliverys';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'modification' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'delivery_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'statusdelivery_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('delivery_id', 'statusdelivery_id'), 'unique' => 1),
			'fk_deliverys_statusDeliverys_deliverys1_idx' => array('column' => 'delivery_id', 'unique' => 0),
			'fk_deliverys_statusDeliverys_statusDeliverys1_idx' => array('column' => 'statusdelivery_id', 'unique' => 0)
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
			'modification' => '2014-04-22 01:45:39',
			'delivery_id' => 1,
			'statusdelivery_id' => 1
		),
	);

}
