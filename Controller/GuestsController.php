<?php
App::uses('AppController', 'Controller');
/**
 * Guests Controller
 *
 * @property Guest $Guest
 * @property PaginatorComponent $Paginator
 */
class GuestsController extends AppController {

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
		$this->Guest->recursive = 0;
		$this->set('guests', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Guest->exists($id)) {
			throw new NotFoundException(__('Invalid guest'));
		}
		$options = array('conditions' => array('Guest.' . $this->Guest->primaryKey => $id));
		$this->set('guest', $this->Guest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Guest->create();
			if ($this->Guest->save($this->request->data)) {
				$this->Session->setFlash(__('The guest has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guest could not be saved. Please, try again.'));
			}
		}
		$users = $this->Guest->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Guest->exists($id)) {
			throw new NotFoundException(__('Invalid guest'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Guest->save($this->request->data)) {
				$this->Session->setFlash(__('The guest has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guest could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Guest.' . $this->Guest->primaryKey => $id));
			$this->request->data = $this->Guest->find('first', $options);
		}
		$users = $this->Guest->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Guest->id = $id;
		if (!$this->Guest->exists()) {
			throw new NotFoundException(__('Invalid guest'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Guest->delete()) {
			$this->Session->setFlash(__('The guest has been deleted.'));
		} else {
			$this->Session->setFlash(__('The guest could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
