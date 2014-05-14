<?php
App::uses('DeliverysStatusdelivery', 'Model');

/**
 * DeliverysStatusdelivery Test Case
 *
 */
class DeliverysStatusdeliveryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deliverys_statusdelivery',
		'app.statusdelivery'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DeliverysStatusdelivery = ClassRegistry::init('DeliverysStatusdelivery');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DeliverysStatusdelivery);

		parent::tearDown();
	}

}
