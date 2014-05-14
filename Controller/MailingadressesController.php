<?php
App::uses('AppController', 'Controller');
/**
 * Mailingadresses Controller
 *
 * @property Mailingadress $Mailingadress
 * @property PaginatorComponent $Paginator
 */
class MailingadressesController extends AppController {

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
		$this->Mailingadress->recursive = 0;
		$this->set('mailingadresses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mailingadress->exists($id)) {
			throw new NotFoundException(__('Invalid mailingadress'));
		}
		$options = array('conditions' => array('Mailingadress.' . $this->Mailingadress->primaryKey => $id));
		$this->set('mailingadress', $this->Mailingadress->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mailingadress->create();
			if ($this->Mailingadress->save($this->request->data)) {
				$this->Session->setFlash(__('The mailingadress has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mailingadress could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Mailingadress->Country->find('list');
		$states = $this->Mailingadress->State->find('list');
		$users = $this->Mailingadress->User->find('list');
		$this->set(compact('countries', 'states', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mailingadress->exists($id)) {
			throw new NotFoundException(__('Invalid mailingadress'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mailingadress->save($this->request->data)) {
				$this->Session->setFlash(__('The mailingadress has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mailingadress could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mailingadress.' . $this->Mailingadress->primaryKey => $id));
			$this->request->data = $this->Mailingadress->find('first', $options);
		}
		$countries = $this->Mailingadress->Country->find('list');
		$states = $this->Mailingadress->State->find('list');
		$users = $this->Mailingadress->User->find('list');
		$this->set(compact('countries', 'states', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mailingadress->id = $id;
		if (!$this->Mailingadress->exists()) {
			throw new NotFoundException(__('Invalid mailingadress'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mailingadress->delete()) {
			$this->Session->setFlash(__('The mailingadress has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mailingadress could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
