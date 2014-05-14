<?php
App::uses('AppController', 'Controller');
/**
 * Codetypes Controller
 *
 * @property Codetype $Codetype
 * @property PaginatorComponent $Paginator
 */
class CodetypesController extends AppController {

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
		$this->Codetype->recursive = 0;
		$this->set('codetypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Codetype->exists($id)) {
			throw new NotFoundException(__('Invalid codetype'));
		}
		$options = array('conditions' => array('Codetype.' . $this->Codetype->primaryKey => $id));
		$this->set('codetype', $this->Codetype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Codetype->create();
			if ($this->Codetype->save($this->request->data)) {
				$this->Session->setFlash(__('The codetype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The codetype could not be saved. Please, try again.'));
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
		if (!$this->Codetype->exists($id)) {
			throw new NotFoundException(__('Invalid codetype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Codetype->save($this->request->data)) {
				$this->Session->setFlash(__('The codetype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The codetype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Codetype.' . $this->Codetype->primaryKey => $id));
			$this->request->data = $this->Codetype->find('first', $options);
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
		$this->Codetype->id = $id;
		if (!$this->Codetype->exists()) {
			throw new NotFoundException(__('Invalid codetype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Codetype->delete()) {
			$this->Session->setFlash(__('The codetype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The codetype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
