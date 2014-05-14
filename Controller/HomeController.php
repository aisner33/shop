<?php
/**
 * Static content controller.
 *
 * This file will render views from views/home/
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController {
var $helpers = array('Html');
/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	public function home() {
		$home = new HomeController();
		$this->pageTitle = 'Tienda online';
		$this->description = 'Kimiwa';
	}

	public function beforeRender() {
    $this->set('title_for_layout', $this->pageTitle);
    $this->set('cakeDescription', $this->description);
}
}
