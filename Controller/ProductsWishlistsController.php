<?php
App::uses('AppController', 'Controller');
/**
 * ProductsWishlists Controller
 *
 * @property ProductsWishlist $ProductsWishlist
 * @property PaginatorComponent $Paginator
 */
class ProductsWishlistsController extends AppController {

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
		$this->ProductsWishlist->recursive = 0;
		$this->set('productsWishlists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductsWishlist->exists($id)) {
			throw new NotFoundException(__('Invalid products wishlist'));
		}
		$options = array('conditions' => array('ProductsWishlist.' . $this->ProductsWishlist->primaryKey => $id));
		$this->set('productsWishlist', $this->ProductsWishlist->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductsWishlist->create();
			if ($this->ProductsWishlist->save($this->request->data)) {
				$this->Session->setFlash(__('The products wishlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products wishlist could not be saved. Please, try again.'));
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
		if (!$this->ProductsWishlist->exists($id)) {
			throw new NotFoundException(__('Invalid products wishlist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductsWishlist->save($this->request->data)) {
				$this->Session->setFlash(__('The products wishlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products wishlist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductsWishlist.' . $this->ProductsWishlist->primaryKey => $id));
			$this->request->data = $this->ProductsWishlist->find('first', $options);
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
		$this->ProductsWishlist->id = $id;
		if (!$this->ProductsWishlist->exists()) {
			throw new NotFoundException(__('Invalid products wishlist'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductsWishlist->delete()) {
			$this->Session->setFlash(__('The products wishlist has been deleted.'));
		} else {
			$this->Session->setFlash(__('The products wishlist could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
