<?php
App::uses('AppController', 'Controller');
/**
 * Devolutions Controller
 *
 * @property Devolution $Devolution
 * @property PaginatorComponent $Paginator
 */
class DevolutionsController extends AppController {

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
		$this->Devolution->recursive = 0;
		$this->set('devolutions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Devolution->exists($id)) {
			throw new NotFoundException(__('Invalid devolution'));
		}
		$options = array('conditions' => array('Devolution.' . $this->Devolution->primaryKey => $id));
		$this->set('devolution', $this->Devolution->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Devolution->create();
			if ($this->Devolution->save($this->request->data)) {
				$this->Session->setFlash(__('The devolution has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devolution could not be saved. Please, try again.'));
			}
		}
		$devolutionsreasons = $this->Devolution->Devolutionsreason->find('list');
		$users = $this->Devolution->User->find('list');
		$this->set(compact('devolutionsreasons', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Devolution->exists($id)) {
			throw new NotFoundException(__('Invalid devolution'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Devolution->save($this->request->data)) {
				$this->Session->setFlash(__('The devolution has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devolution could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Devolution.' . $this->Devolution->primaryKey => $id));
			$this->request->data = $this->Devolution->find('first', $options);
		}
		$devolutionsreasons = $this->Devolution->Devolutionsreason->find('list');
		$users = $this->Devolution->User->find('list');
		$this->set(compact('devolutionsreasons', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Devolution->id = $id;
		if (!$this->Devolution->exists()) {
			throw new NotFoundException(__('Invalid devolution'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Devolution->delete()) {
			$this->Session->setFlash(__('The devolution has been deleted.'));
		} else {
			$this->Session->setFlash(__('The devolution could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
