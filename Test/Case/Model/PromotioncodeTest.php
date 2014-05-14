<?php
App::uses('Promotioncode', 'Model');

/**
 * Promotioncode Test Case
 *
 */
class PromotioncodeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promotioncode',
		'app.codetype',
		'app.sale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Promotioncode = ClassRegistry::init('Promotioncode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Promotioncode);

		parent::tearDown();
	}

}
