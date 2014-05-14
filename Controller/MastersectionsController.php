<?php
App::uses('AppController', 'Controller');
/**
 * Mastersections Controller
 *
 * @property Mastersection $Mastersection
 * @property PaginatorComponent $Paginator
 */
class MastersectionsController extends AppController {

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
		$this->Mastersection->recursive = 0;
		$this->set('mastersections', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mastersection->exists($id)) {
			throw new NotFoundException(__('Invalid mastersection'));
		}
		$options = array('conditions' => array('Mastersection.' . $this->Mastersection->primaryKey => $id));
		$this->set('mastersection', $this->Mastersection->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mastersection->create();
			if ($this->Mastersection->save($this->request->data)) {
				$this->Session->setFlash(__('The mastersection has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mastersection could not be saved. Please, try again.'));
			}
		}
		$sections = $this->Mastersection->Section->find('list');
		$childsections = $this->Mastersection->Childsection->find('list');
		$products = $this->Mastersection->Product->find('list');
		$this->set(compact('sections', 'childsections', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mastersection->exists($id)) {
			throw new NotFoundException(__('Invalid mastersection'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mastersection->save($this->request->data)) {
				$this->Session->setFlash(__('The mastersection has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mastersection could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mastersection.' . $this->Mastersection->primaryKey => $id));
			$this->request->data = $this->Mastersection->find('first', $options);
		}
		$sections = $this->Mastersection->Section->find('list');
		$childsections = $this->Mastersection->Childsection->find('list');
		$products = $this->Mastersection->Product->find('list');
		$this->set(compact('sections', 'childsections', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mastersection->id = $id;
		if (!$this->Mastersection->exists()) {
			throw new NotFoundException(__('Invalid mastersection'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mastersection->delete()) {
			$this->Session->setFlash(__('The mastersection has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mastersection could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
