<?php
App::uses('AppController', 'Controller');
/**
 * Childsections Controller
 *
 * @property Childsection $Childsection
 * @property PaginatorComponent $Paginator
 */
class ChildsectionsController extends AppController {

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
		$this->Childsection->recursive = 0;
		$this->set('childsections', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Childsection->exists($id)) {
			throw new NotFoundException(__('Invalid childsection'));
		}
		$options = array('conditions' => array('Childsection.' . $this->Childsection->primaryKey => $id));
		$this->set('childsection', $this->Childsection->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Childsection->create();
			if ($this->Childsection->save($this->request->data)) {
				$this->Session->setFlash(__('The childsection has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The childsection could not be saved. Please, try again.'));
			}
		}
		$fathersections = $this->Childsection->Fathersection->find('list');
		$products = $this->Childsection->Product->find('list');
		$this->set(compact('fathersections', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Childsection->exists($id)) {
			throw new NotFoundException(__('Invalid childsection'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Childsection->save($this->request->data)) {
				$this->Session->setFlash(__('The childsection has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The childsection could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Childsection.' . $this->Childsection->primaryKey => $id));
			$this->request->data = $this->Childsection->find('first', $options);
		}
		$fathersections = $this->Childsection->Fathersection->find('list');
		$products = $this->Childsection->Product->find('list');
		$this->set(compact('fathersections', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Childsection->id = $id;
		if (!$this->Childsection->exists()) {
			throw new NotFoundException(__('Invalid childsection'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Childsection->delete()) {
			$this->Session->setFlash(__('The childsection has been deleted.'));
		} else {
			$this->Session->setFlash(__('The childsection could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
