<?php
App::uses('AppController', 'Controller');
/**
 * DevolutionsReasons Controller
 *
 * @property DevolutionsReason $DevolutionsReason
 * @property PaginatorComponent $Paginator
 */
class DevolutionsReasonsController extends AppController {

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
		$this->DevolutionsReason->recursive = 0;
		$this->set('devolutionsReasons', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DevolutionsReason->exists($id)) {
			throw new NotFoundException(__('Invalid devolutions reason'));
		}
		$options = array('conditions' => array('DevolutionsReason.' . $this->DevolutionsReason->primaryKey => $id));
		$this->set('devolutionsReason', $this->DevolutionsReason->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DevolutionsReason->create();
			if ($this->DevolutionsReason->save($this->request->data)) {
				$this->Session->setFlash(__('The devolutions reason has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devolutions reason could not be saved. Please, try again.'));
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
		if (!$this->DevolutionsReason->exists($id)) {
			throw new NotFoundException(__('Invalid devolutions reason'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DevolutionsReason->save($this->request->data)) {
				$this->Session->setFlash(__('The devolutions reason has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devolutions reason could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DevolutionsReason.' . $this->DevolutionsReason->primaryKey => $id));
			$this->request->data = $this->DevolutionsReason->find('first', $options);
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
		$this->DevolutionsReason->id = $id;
		if (!$this->DevolutionsReason->exists()) {
			throw new NotFoundException(__('Invalid devolutions reason'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DevolutionsReason->delete()) {
			$this->Session->setFlash(__('The devolutions reason has been deleted.'));
		} else {
			$this->Session->setFlash(__('The devolutions reason could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
