<?php
App::uses('AppController', 'Controller');
/**
 * DeliverysStatusdeliveries Controller
 *
 * @property DeliverysStatusdelivery $DeliverysStatusdelivery
 * @property PaginatorComponent $Paginator
 */
class DeliverysStatusdeliveriesController extends AppController {

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
		$this->DeliverysStatusdelivery->recursive = 0;
		$this->set('deliverysStatusdeliveries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DeliverysStatusdelivery->exists($id)) {
			throw new NotFoundException(__('Invalid deliverys statusdelivery'));
		}
		$options = array('conditions' => array('DeliverysStatusdelivery.' . $this->DeliverysStatusdelivery->primaryKey => $id));
		$this->set('deliverysStatusdelivery', $this->DeliverysStatusdelivery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DeliverysStatusdelivery->create();
			if ($this->DeliverysStatusdelivery->save($this->request->data)) {
				$this->Session->setFlash(__('The deliverys statusdelivery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deliverys statusdelivery could not be saved. Please, try again.'));
			}
		}
		$statusdeliveries = $this->DeliverysStatusdelivery->Statusdelivery->find('list');
		$this->set(compact('statusdeliveries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DeliverysStatusdelivery->exists($id)) {
			throw new NotFoundException(__('Invalid deliverys statusdelivery'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DeliverysStatusdelivery->save($this->request->data)) {
				$this->Session->setFlash(__('The deliverys statusdelivery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deliverys statusdelivery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DeliverysStatusdelivery.' . $this->DeliverysStatusdelivery->primaryKey => $id));
			$this->request->data = $this->DeliverysStatusdelivery->find('first', $options);
		}
		$statusdeliveries = $this->DeliverysStatusdelivery->Statusdelivery->find('list');
		$this->set(compact('statusdeliveries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DeliverysStatusdelivery->id = $id;
		if (!$this->DeliverysStatusdelivery->exists()) {
			throw new NotFoundException(__('Invalid deliverys statusdelivery'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DeliverysStatusdelivery->delete()) {
			$this->Session->setFlash(__('The deliverys statusdelivery has been deleted.'));
		} else {
			$this->Session->setFlash(__('The deliverys statusdelivery could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
