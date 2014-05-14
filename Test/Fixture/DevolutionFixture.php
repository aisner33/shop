<?php
/**
 * DevolutionFixture
 *
 */
class DevolutionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'devolutionDate' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'acceptanceDate' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'devolutionsreason_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_devolutions_devolutionsReasons1_idx' => array('column' => 'devolutionsreason_id', 'unique' => 0)
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
			'devolutionDate' => '2014-04-22 01:45:41',
			'acceptanceDate' => '2014-04-22 01:45:41',
			'devolutionsreason_id' => 1
		),
	);

}
