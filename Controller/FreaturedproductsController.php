<?php
App::uses('AppController', 'Controller');
/**
 * Freaturedproducts Controller
 *
 * @property Freaturedproduct $Freaturedproduct
 * @property PaginatorComponent $Paginator
 */
class FreaturedproductsController extends AppController {

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
		$this->Freaturedproduct->recursive = 0;
		$this->set('freaturedproducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Freaturedproduct->exists($id)) {
			throw new NotFoundException(__('Invalid freaturedproduct'));
		}
		$options = array('conditions' => array('Freaturedproduct.' . $this->Freaturedproduct->primaryKey => $id));
		$this->set('freaturedproduct', $this->Freaturedproduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Freaturedproduct->create();
			if ($this->Freaturedproduct->save($this->request->data)) {
				$this->Session->setFlash(__('The freaturedproduct has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The freaturedproduct could not be saved. Please, try again.'));
			}
		}
		$products = $this->Freaturedproduct->Product->find('list');
		$childsections = $this->Freaturedproduct->Childsection->find('list');
		$sections = $this->Freaturedproduct->Section->find('list');
		$fathersections = $this->Freaturedproduct->Fathersection->find('list');
		$mastersections = $this->Freaturedproduct->Mastersection->find('list');
		$this->set(compact('products', 'childsections', 'sections', 'fathersections', 'mastersections'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Freaturedproduct->exists($id)) {
			throw new NotFoundException(__('Invalid freaturedproduct'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Freaturedproduct->save($this->request->data)) {
				$this->Session->setFlash(__('The freaturedproduct has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The freaturedproduct could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Freaturedproduct.' . $this->Freaturedproduct->primaryKey => $id));
			$this->request->data = $this->Freaturedproduct->find('first', $options);
		}
		$products = $this->Freaturedproduct->Product->find('list');
		$childsections = $this->Freaturedproduct->Childsection->find('list');
		$sections = $this->Freaturedproduct->Section->find('list');
		$fathersections = $this->Freaturedproduct->Fathersection->find('list');
		$mastersections = $this->Freaturedproduct->Mastersection->find('list');
		$this->set(compact('products', 'childsections', 'sections', 'fathersections', 'mastersections'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Freaturedproduct->id = $id;
		if (!$this->Freaturedproduct->exists()) {
			throw new NotFoundException(__('Invalid freaturedproduct'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Freaturedproduct->delete()) {
			$this->Session->setFlash(__('The freaturedproduct has been deleted.'));
		} else {
			$this->Session->setFlash(__('The freaturedproduct could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
