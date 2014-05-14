<?php
/**
 * ProductFixture
 *
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'smallDescription' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'largeDescription' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'otherText' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Cualquier otro texto que se requiera', 'charset' => 'utf8'),
		'creationDate' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modificationDate' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'userPrice' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => 'Precio que se muestra al usuario', 'charset' => 'utf8'),
		'storePrice' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => 'Precio real del producto', 'charset' => 'utf8'),
		'stock' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 4),
		'barCode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'store_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'brand_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'season_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'gallerie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'offer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'realsize_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'vegano' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_products_stores1_idx' => array('column' => 'store_id', 'unique' => 0),
			'fk_products_brands1_idx' => array('column' => 'brand_id', 'unique' => 0),
			'fk_products_seasons1_idx' => array('column' => 'season_id', 'unique' => 0),
			'fk_products_galleries1_idx' => array('column' => 'gallerie_id', 'unique' => 0),
			'fk_products_deals1_idx' => array('column' => 'offer_id', 'unique' => 0),
			'fk_products_realSizes1_idx' => array('column' => 'realsize_id', 'unique' => 0)
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
			'smallDescription' => 'Lorem ipsum dolor sit amet',
			'largeDescription' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'otherText' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'creationDate' => '2014-04-22 01:46:03',
			'modificationDate' => '2014-04-22 01:46:03',
			'userPrice' => 'Lorem ip',
			'storePrice' => 'Lorem ip',
			'stock' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'barCode' => 'Lorem ipsum do',
			'store_id' => 1,
			'brand_id' => 1,
			'season_id' => 1,
			'gallerie_id' => 1,
			'offer_id' => 1,
			'realsize_id' => 1,
			'vegano' => 1
		),
	);

}
