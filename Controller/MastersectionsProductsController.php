<?php
App::uses('AppController', 'Controller');
/**
 * MastersectionsProducts Controller
 *
 * @property MastersectionsProduct $MastersectionsProduct
 * @property PaginatorComponent $Paginator
 */
class MastersectionsProductsController extends AppController {

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
		$this->MastersectionsProduct->recursive = 0;
		$this->set('mastersectionsProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MastersectionsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid mastersections product'));
		}
		$options = array('conditions' => array('MastersectionsProduct.' . $this->MastersectionsProduct->primaryKey => $id));
		$this->set('mastersectionsProduct', $this->MastersectionsProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MastersectionsProduct->create();
			if ($this->MastersectionsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The mastersections product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mastersections product could not be saved. Please, try again.'));
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
		if (!$this->MastersectionsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid mastersections product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MastersectionsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The mastersections product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mastersections product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MastersectionsProduct.' . $this->MastersectionsProduct->primaryKey => $id));
			$this->request->data = $this->MastersectionsProduct->find('first', $options);
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
		$this->MastersectionsProduct->id = $id;
		if (!$this->MastersectionsProduct->exists()) {
			throw new NotFoundException(__('Invalid mastersections product'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MastersectionsProduct->delete()) {
			$this->Session->setFlash(__('The mastersections product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mastersections product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
