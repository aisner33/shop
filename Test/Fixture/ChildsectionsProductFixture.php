<?php
/**
 * ChildsectionsProductFixture
 *
 */
class ChildsectionsProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'childSection_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'fk_childSections_products_childSections1_idx' => array('column' => 'childSection_id', 'unique' => 0),
			'fk_childSections_products_products1_idx' => array('column' => 'product_id', 'unique' => 0)
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
			'childSection_id' => 1,
			'product_id' => 1
		),
	);

}
