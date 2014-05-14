<?php
App::uses('AppController', 'Controller');
/**
 * StatusDeliveries Controller
 *
 * @property StatusDelivery $StatusDelivery
 * @property PaginatorComponent $Paginator
 */
class StatusDeliveriesController extends AppController {

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
		$this->StatusDelivery->recursive = 0;
		$this->set('statusDeliveries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StatusDelivery->exists($id)) {
			throw new NotFoundException(__('Invalid status delivery'));
		}
		$options = array('conditions' => array('StatusDelivery.' . $this->StatusDelivery->primaryKey => $id));
		$this->set('statusDelivery', $this->StatusDelivery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StatusDelivery->create();
			if ($this->StatusDelivery->save($this->request->data)) {
				$this->Session->setFlash(__('The status delivery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status delivery could not be saved. Please, try again.'));
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
		if (!$this->StatusDelivery->exists($id)) {
			throw new NotFoundException(__('Invalid status delivery'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StatusDelivery->save($this->request->data)) {
				$this->Session->setFlash(__('The status delivery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status delivery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StatusDelivery.' . $this->StatusDelivery->primaryKey => $id));
			$this->request->data = $this->StatusDelivery->find('first', $options);
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
		$this->StatusDelivery->id = $id;
		if (!$this->StatusDelivery->exists()) {
			throw new NotFoundException(__('Invalid status delivery'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->StatusDelivery->delete()) {
			$this->Session->setFlash(__('The status delivery has been deleted.'));
		} else {
			$this->Session->setFlash(__('The status delivery could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
