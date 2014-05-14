<?php
App::uses('AppController', 'Controller');
/**
 * FatherSectionsProducts Controller
 *
 * @property FatherSectionsProduct $FatherSectionsProduct
 * @property PaginatorComponent $Paginator
 */
class FatherSectionsProductsController extends AppController {

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
		$this->FatherSectionsProduct->recursive = 0;
		$this->set('fatherSectionsProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FatherSectionsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid father sections product'));
		}
		$options = array('conditions' => array('FatherSectionsProduct.' . $this->FatherSectionsProduct->primaryKey => $id));
		$this->set('fatherSectionsProduct', $this->FatherSectionsProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FatherSectionsProduct->create();
			if ($this->FatherSectionsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The father sections product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The father sections product could not be saved. Please, try again.'));
			}
		}
		$products = $this->FatherSectionsProduct->Product->find('list');
		$fathersections = $this->FatherSectionsProduct->Fathersection->find('list');
		$this->set(compact('products', 'fathersections'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FatherSectionsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid father sections product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FatherSectionsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The father sections product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The father sections product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FatherSectionsProduct.' . $this->FatherSectionsProduct->primaryKey => $id));
			$this->request->data = $this->FatherSectionsProduct->find('first', $options);
		}
		$products = $this->FatherSectionsProduct->Product->find('list');
		$fathersections = $this->FatherSectionsProduct->Fathersection->find('list');
		$this->set(compact('products', 'fathersections'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FatherSectionsProduct->id = $id;
		if (!$this->FatherSectionsProduct->exists()) {
			throw new NotFoundException(__('Invalid father sections product'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FatherSectionsProduct->delete()) {
			$this->Session->setFlash(__('The father sections product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The father sections product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
