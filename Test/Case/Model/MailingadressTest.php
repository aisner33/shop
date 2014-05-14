<?php
App::uses('Mailingadress', 'Model');

/**
 * Mailingadress Test Case
 *
 */
class MailingadressTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mailingadress',
		'app.country',
		'app.state',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mailingadress = ClassRegistry::init('Mailingadress');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mailingadress);

		parent::tearDown();
	}

}
