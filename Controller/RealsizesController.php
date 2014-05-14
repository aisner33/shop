<?php
App::uses('AppController', 'Controller');
/**
 * Realsizes Controller
 *
 * @property Realsize $Realsize
 * @property PaginatorComponent $Paginator
 */
class RealsizesController extends AppController {

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
		$this->Realsize->recursive = 0;
		$this->set('realsizes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Realsize->exists($id)) {
			throw new NotFoundException(__('Invalid realsize'));
		}
		$options = array('conditions' => array('Realsize.' . $this->Realsize->primaryKey => $id));
		$this->set('realsize', $this->Realsize->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Realsize->create();
			if ($this->Realsize->save($this->request->data)) {
				$this->Session->setFlash(__('The realsize has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The realsize could not be saved. Please, try again.'));
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
		if (!$this->Realsize->exists($id)) {
			throw new NotFoundException(__('Invalid realsize'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Realsize->save($this->request->data)) {
				$this->Session->setFlash(__('The realsize has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The realsize could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Realsize.' . $this->Realsize->primaryKey => $id));
			$this->request->data = $this->Realsize->find('first', $options);
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
		$this->Realsize->id = $id;
		if (!$this->Realsize->exists()) {
			throw new NotFoundException(__('Invalid realsize'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Realsize->delete()) {
			$this->Session->setFlash(__('The realsize has been deleted.'));
		} else {
			$this->Session->setFlash(__('The realsize could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
