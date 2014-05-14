<?php
App::uses('AppController', 'Controller');
/**
 * Userprofiles Controller
 *
 * @property Userprofile $Userprofile
 * @property PaginatorComponent $Paginator
 */
class UserprofilesController extends AppController {

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
		$this->Userprofile->recursive = 0;
		$this->set('userprofiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Userprofile->exists($id)) {
			throw new NotFoundException(__('Invalid userprofile'));
		}
		$options = array('conditions' => array('Userprofile.' . $this->Userprofile->primaryKey => $id));
		$this->set('userprofile', $this->Userprofile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Userprofile->create();
			if ($this->Userprofile->save($this->request->data)) {
				$this->Session->setFlash(__('The userprofile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userprofile could not be saved. Please, try again.'));
			}
		}
		$users = $this->Userprofile->User->find('list');
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
		if (!$this->Userprofile->exists($id)) {
			throw new NotFoundException(__('Invalid userprofile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Userprofile->save($this->request->data)) {
				$this->Session->setFlash(__('The userprofile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The userprofile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Userprofile.' . $this->Userprofile->primaryKey => $id));
			$this->request->data = $this->Userprofile->find('first', $options);
		}
		$users = $this->Userprofile->User->find('list');
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
		$this->Userprofile->id = $id;
		if (!$this->Userprofile->exists()) {
			throw new NotFoundException(__('Invalid userprofile'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Userprofile->delete()) {
			$this->Session->setFlash(__('The userprofile has been deleted.'));
		} else {
			$this->Session->setFlash(__('The userprofile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
