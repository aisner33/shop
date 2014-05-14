<?php
App::uses('AppController', 'Controller');
/**
 * ColorsProducts Controller
 *
 * @property ColorsProduct $ColorsProduct
 * @property PaginatorComponent $Paginator
 */
class ColorsProductsController extends AppController {

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
		$this->ColorsProduct->recursive = 0;
		$this->set('colorsProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ColorsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid colors product'));
		}
		$options = array('conditions' => array('ColorsProduct.' . $this->ColorsProduct->primaryKey => $id));
		$this->set('colorsProduct', $this->ColorsProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ColorsProduct->create();
			if ($this->ColorsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The colors product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The colors product could not be saved. Please, try again.'));
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
		if (!$this->ColorsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid colors product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ColorsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The colors product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The colors product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ColorsProduct.' . $this->ColorsProduct->primaryKey => $id));
			$this->request->data = $this->ColorsProduct->find('first', $options);
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
		$this->ColorsProduct->id = $id;
		if (!$this->ColorsProduct->exists()) {
			throw new NotFoundException(__('Invalid colors product'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ColorsProduct->delete()) {
			$this->Session->setFlash(__('The colors product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The colors product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
