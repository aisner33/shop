<?php
App::uses('AppController', 'Controller');
/**
 * Dealstypes Controller
 *
 * @property Dealstype $Dealstype
 * @property PaginatorComponent $Paginator
 */
class DealstypesController extends AppController {

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
		$this->Dealstype->recursive = 0;
		$this->set('dealstypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dealstype->exists($id)) {
			throw new NotFoundException(__('Invalid dealstype'));
		}
		$options = array('conditions' => array('Dealstype.' . $this->Dealstype->primaryKey => $id));
		$this->set('dealstype', $this->Dealstype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dealstype->create();
			if ($this->Dealstype->save($this->request->data)) {
				$this->Session->setFlash(__('The dealstype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dealstype could not be saved. Please, try again.'));
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
		if (!$this->Dealstype->exists($id)) {
			throw new NotFoundException(__('Invalid dealstype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dealstype->save($this->request->data)) {
				$this->Session->setFlash(__('The dealstype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dealstype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dealstype.' . $this->Dealstype->primaryKey => $id));
			$this->request->data = $this->Dealstype->find('first', $options);
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
		$this->Dealstype->id = $id;
		if (!$this->Dealstype->exists()) {
			throw new NotFoundException(__('Invalid dealstype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dealstype->delete()) {
			$this->Session->setFlash(__('The dealstype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dealstype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
