<?php
App::uses('AppController', 'Controller');
/**
 * DevolutionsUsers Controller
 *
 * @property DevolutionsUser $DevolutionsUser
 * @property PaginatorComponent $Paginator
 */
class DevolutionsUsersController extends AppController {

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
		$this->DevolutionsUser->recursive = 0;
		$this->set('devolutionsUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DevolutionsUser->exists($id)) {
			throw new NotFoundException(__('Invalid devolutions user'));
		}
		$options = array('conditions' => array('DevolutionsUser.' . $this->DevolutionsUser->primaryKey => $id));
		$this->set('devolutionsUser', $this->DevolutionsUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DevolutionsUser->create();
			if ($this->DevolutionsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The devolutions user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devolutions user could not be saved. Please, try again.'));
			}
		}
		$devolutions = $this->DevolutionsUser->Devolution->find('list');
		$this->set(compact('devolutions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DevolutionsUser->exists($id)) {
			throw new NotFoundException(__('Invalid devolutions user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DevolutionsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The devolutions user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devolutions user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DevolutionsUser.' . $this->DevolutionsUser->primaryKey => $id));
			$this->request->data = $this->DevolutionsUser->find('first', $options);
		}
		$devolutions = $this->DevolutionsUser->Devolution->find('list');
		$this->set(compact('devolutions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DevolutionsUser->id = $id;
		if (!$this->DevolutionsUser->exists()) {
			throw new NotFoundException(__('Invalid devolutions user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DevolutionsUser->delete()) {
			$this->Session->setFlash(__('The devolutions user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The devolutions user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
