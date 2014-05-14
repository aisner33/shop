<?php
App::uses('AppController', 'Controller');
/**
 * Categorystores Controller
 *
 * @property Categorystore $Categorystore
 * @property PaginatorComponent $Paginator
 */
class CategorystoresController extends AppController {

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
		$this->Categorystore->recursive = 0;
		$this->set('categorystores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categorystore->exists($id)) {
			throw new NotFoundException(__('Invalid categorystore'));
		}
		$options = array('conditions' => array('Categorystore.' . $this->Categorystore->primaryKey => $id));
		$this->set('categorystore', $this->Categorystore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Categorystore->create();
			if ($this->Categorystore->save($this->request->data)) {
				$this->Session->setFlash(__('The categorystore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categorystore could not be saved. Please, try again.'));
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
		if (!$this->Categorystore->exists($id)) {
			throw new NotFoundException(__('Invalid categorystore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categorystore->save($this->request->data)) {
				$this->Session->setFlash(__('The categorystore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categorystore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Categorystore.' . $this->Categorystore->primaryKey => $id));
			$this->request->data = $this->Categorystore->find('first', $options);
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
		$this->Categorystore->id = $id;
		if (!$this->Categorystore->exists()) {
			throw new NotFoundException(__('Invalid categorystore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categorystore->delete()) {
			$this->Session->setFlash(__('The categorystore has been deleted.'));
		} else {
			$this->Session->setFlash(__('The categorystore could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
