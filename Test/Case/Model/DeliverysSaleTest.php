<?php
App::uses('DeliverysSale', 'Model');

/**
 * DeliverysSale Test Case
 *
 */
class DeliverysSaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deliverys_sale',
		'app.delivery',
		'app.user',
		'app.sale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DeliverysSale = ClassRegistry::init('DeliverysSale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DeliverysSale);

		parent::tearDown();
	}

}
