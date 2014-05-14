<?php
App::uses('StatusDelivery', 'Model');

/**
 * StatusDelivery Test Case
 *
 */
class StatusDeliveryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.status_delivery'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StatusDelivery = ClassRegistry::init('StatusDelivery');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StatusDelivery);

		parent::tearDown();
	}

}
