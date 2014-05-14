<?php
App::uses('AppController', 'Controller');
/**
 * Fathersections Controller
 *
 * @property Fathersection $Fathersection
 * @property PaginatorComponent $Paginator
 */
class FathersectionsController extends AppController {

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
		$this->Fathersection->recursive = 0;
		$this->set('fathersections', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fathersection->exists($id)) {
			throw new NotFoundException(__('Invalid fathersection'));
		}
		$options = array('conditions' => array('Fathersection.' . $this->Fathersection->primaryKey => $id));
		$this->set('fathersection', $this->Fathersection->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fathersection->create();
			if ($this->Fathersection->save($this->request->data)) {
				$this->Session->setFlash(__('The fathersection has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fathersection could not be saved. Please, try again.'));
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
		if (!$this->Fathersection->exists($id)) {
			throw new NotFoundException(__('Invalid fathersection'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fathersection->save($this->request->data)) {
				$this->Session->setFlash(__('The fathersection has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fathersection could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fathersection.' . $this->Fathersection->primaryKey => $id));
			$this->request->data = $this->Fathersection->find('first', $options);
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
		$this->Fathersection->id = $id;
		if (!$this->Fathersection->exists()) {
			throw new NotFoundException(__('Invalid fathersection'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fathersection->delete()) {
			$this->Session->setFlash(__('The fathersection has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fathersection could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
