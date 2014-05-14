<?php
App::uses('AppController', 'Controller');
/**
 * DeliverysSales Controller
 *
 * @property DeliverysSale $DeliverysSale
 * @property PaginatorComponent $Paginator
 */
class DeliverysSalesController extends AppController {

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
		$this->DeliverysSale->recursive = 0;
		$this->set('deliverysSales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DeliverysSale->exists($id)) {
			throw new NotFoundException(__('Invalid deliverys sale'));
		}
		$options = array('conditions' => array('DeliverysSale.' . $this->DeliverysSale->primaryKey => $id));
		$this->set('deliverysSale', $this->DeliverysSale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DeliverysSale->create();
			if ($this->DeliverysSale->save($this->request->data)) {
				$this->Session->setFlash(__('The deliverys sale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deliverys sale could not be saved. Please, try again.'));
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
		if (!$this->DeliverysSale->exists($id)) {
			throw new NotFoundException(__('Invalid deliverys sale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DeliverysSale->save($this->request->data)) {
				$this->Session->setFlash(__('The deliverys sale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deliverys sale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DeliverysSale.' . $this->DeliverysSale->primaryKey => $id));
			$this->request->data = $this->DeliverysSale->find('first', $options);
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
		$this->DeliverysSale->id = $id;
		if (!$this->DeliverysSale->exists()) {
			throw new NotFoundException(__('Invalid deliverys sale'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DeliverysSale->delete()) {
			$this->Session->setFlash(__('The deliverys sale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The deliverys sale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
