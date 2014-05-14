<?php
App::uses('AppController', 'Controller');
/**
 * ChildsectionsProducts Controller
 *
 * @property ChildsectionsProduct $ChildsectionsProduct
 * @property PaginatorComponent $Paginator
 */
class ChildsectionsProductsController extends AppController {

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
		$this->ChildsectionsProduct->recursive = 0;
		$this->set('childsectionsProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ChildsectionsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid childsections product'));
		}
		$options = array('conditions' => array('ChildsectionsProduct.' . $this->ChildsectionsProduct->primaryKey => $id));
		$this->set('childsectionsProduct', $this->ChildsectionsProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ChildsectionsProduct->create();
			if ($this->ChildsectionsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The childsections product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The childsections product could not be saved. Please, try again.'));
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
		if (!$this->ChildsectionsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid childsections product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ChildsectionsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The childsections product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The childsections product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ChildsectionsProduct.' . $this->ChildsectionsProduct->primaryKey => $id));
			$this->request->data = $this->ChildsectionsProduct->find('first', $options);
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
		$this->ChildsectionsProduct->id = $id;
		if (!$this->ChildsectionsProduct->exists()) {
			throw new NotFoundException(__('Invalid childsections product'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ChildsectionsProduct->delete()) {
			$this->Session->setFlash(__('The childsections product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The childsections product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
