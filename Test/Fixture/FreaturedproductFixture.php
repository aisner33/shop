<?php
/**
 * FreaturedproductFixture
 *
 */
class FreaturedproductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'order' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'childsection_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'section_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'fathersection_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'mastersection_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_freaturedProducts_products1_idx' => array('column' => 'product_id', 'unique' => 0),
			'fk_freaturedProducts_childSections1_idx' => array('column' => 'childsection_id', 'unique' => 0),
			'fk_freaturedProducts_sections1_idx' => array('column' => 'section_id', 'unique' => 0),
			'fk_freaturedProducts_fatherSections1_idx' => array('column' => 'fathersection_id', 'unique' => 0),
			'fk_freaturedProducts_masterSections1_idx' => array('column' => 'mastersection_id', 'unique' => 0)
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
			'order' => 1,
			'product_id' => 1,
			'childsection_id' => 1,
			'section_id' => 1,
			'fathersection_id' => 1,
			'mastersection_id' => 1
		),
	);

}
