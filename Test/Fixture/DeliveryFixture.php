<?php
/**
 * DeliveryFixture
 *
 */
class DeliveryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'deliverys';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'recibeDay' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'fecha en la que se recibe el pedido'),
		'sendDay' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'fecha en la que se envía el paquete'),
		'service' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => 'Servicio de mensajería', 'charset' => 'utf8'),
		'codeGuide' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'Usuario que autoriza la venta'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_deliverys_users1_idx' => array('column' => 'user_id', 'unique' => 0)
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
			'recibeDay' => '2014-04-22 01:45:36',
			'sendDay' => '2014-04-22 01:45:36',
			'service' => 'Lorem ipsum dolor sit amet',
			'codeGuide' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1
		),
	);

}
