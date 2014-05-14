<?php
/**
 * MastersectionsProductFixture
 *
 */
class MastersectionsProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'mastersections_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'products_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'fk_masterSections_products_masterSections1_idx' => array('column' => 'mastersections_id', 'unique' => 0),
			'fk_masterSections_products_products1_idx' => array('column' => 'products_id', 'unique' => 0)
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
			'mastersections_id' => 1,
			'products_id' => 1
		),
	);

}
