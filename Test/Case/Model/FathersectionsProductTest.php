<?php
App::uses('FatherSectionsProduct', 'Model');

/**
 * FatherSectionsProduct Test Case
 *
 */
class FatherSectionsProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.father_sections_product',
		'app.product',
		'app.fathersection'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FatherSectionsProduct = ClassRegistry::init('FatherSectionsProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FatherSectionsProduct);

		parent::tearDown();
	}

}
