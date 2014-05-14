<?php
App::uses('Dealstype', 'Model');

/**
 * Dealstype Test Case
 *
 */
class DealstypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dealstype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dealstype = ClassRegistry::init('Dealstype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dealstype);

		parent::tearDown();
	}

}
