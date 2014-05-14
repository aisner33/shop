<?php
App::uses('AppController', 'Controller');
/**
 * ProductsSections Controller
 *
 * @property ProductsSection $ProductsSection
 * @property PaginatorComponent $Paginator
 */
class ProductsSectionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProductsSection->recursive = 0;
		$this->set('productsSections', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductsSection->exists($id)) {
			throw new NotFoundException(__('Invalid products section'));
		}
		$options = array('conditions' => array('ProductsSection.' . $this->ProductsSection->primaryKey => $id));
		$this->set('productsSection', $this->ProductsSection->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductsSection->create();
			if ($this->ProductsSection->save($this->request->data)) {
				$this->Session->setFlash(__('The products section has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products section could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductsSection->exists($id)) {
			throw new NotFoundException(__('Invalid products section'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductsSection->save($this->request->data)) {
				$this->Session->setFlash(__('The products section has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products section could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductsSection.' . $this->ProductsSection->primaryKey => $id));
			$this->request->data = $this->ProductsSection->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductsSection->id = $id;
		if (!$this->ProductsSection->exists()) {
			throw new NotFoundException(__('Invalid products section'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductsSection->delete()) {
			$this->Session->setFlash(__('The products section has been deleted.'));
		} else {
			$this->Session->setFlash(__('The products section could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
