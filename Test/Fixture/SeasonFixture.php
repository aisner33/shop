<?php
/**
 * SeasonFixture
 *
 */
class SeasonFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 145, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'startValidity' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'endValidity' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 4),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'startValidity' => '2014-04-22 01:46:15',
			'endValidity' => '2014-04-22 01:46:15',
			'status' => 1
		),
	);

}
