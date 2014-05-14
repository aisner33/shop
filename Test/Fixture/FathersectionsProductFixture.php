<?php
/**
 * FatherSectionsProductFixture
 *
 */
class FatherSectionsProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'fathersection_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'fk_fatherSections_products_products1_idx' => array('column' => 'product_id', 'unique' => 0),
			'fk_fatherSections_products_fatherSections1_idx' => array('column' => 'fathersection_id', 'unique' => 0)
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
			'product_id' => 1,
			'fathersection_id' => 1
		),
	);

}
