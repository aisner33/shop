<?php
App::uses('AppController', 'Controller');
/**
 * Promotioncodes Controller
 *
 * @property Promotioncode $Promotioncode
 * @property PaginatorComponent $Paginator
 */
class PromotioncodesController extends AppController {

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
		$this->Promotioncode->recursive = 0;
		$this->set('promotioncodes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Promotioncode->exists($id)) {
			throw new NotFoundException(__('Invalid promotioncode'));
		}
		$options = array('conditions' => array('Promotioncode.' . $this->Promotioncode->primaryKey => $id));
		$this->set('promotioncode', $this->Promotioncode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Promotioncode->create();
			if ($this->Promotioncode->save($this->request->data)) {
				$this->Session->setFlash(__('The promotioncode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promotioncode could not be saved. Please, try again.'));
			}
		}
		$codeTypes = $this->Promotioncode->CodeType->find('list');
		$this->set(compact('codeTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Promotioncode->exists($id)) {
			throw new NotFoundException(__('Invalid promotioncode'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Promotioncode->save($this->request->data)) {
				$this->Session->setFlash(__('The promotioncode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The promotioncode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Promotioncode.' . $this->Promotioncode->primaryKey => $id));
			$this->request->data = $this->Promotioncode->find('first', $options);
		}
		$codeTypes = $this->Promotioncode->CodeType->find('list');
		$this->set(compact('codeTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Promotioncode->id = $id;
		if (!$this->Promotioncode->exists()) {
			throw new NotFoundException(__('Invalid promotioncode'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Promotioncode->delete()) {
			$this->Session->setFlash(__('The promotioncode has been deleted.'));
		} else {
			$this->Session->setFlash(__('The promotioncode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
