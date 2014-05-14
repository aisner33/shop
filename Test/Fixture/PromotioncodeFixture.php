<?php
/**
 * PromotioncodeFixture
 *
 */
class PromotioncodeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'validityStart' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'validityEnd' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'value' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'origin' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codeType_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_promotionCodes_codeType1_idx' => array('column' => 'codeType_id', 'unique' => 0)
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
			'code' => 'Lorem ipsum dolor sit amet',
			'validityStart' => '2014-04-22 01:46:09',
			'validityEnd' => '2014-04-22 01:46:09',
			'value' => 'Lorem ipsum d',
			'origin' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit amet',
			'codeType_id' => 1
		),
	);

}
