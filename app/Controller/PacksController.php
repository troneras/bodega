<?php
App::uses('AppController', 'Controller');
/**
 * Packs Controller
 *
 * @property Pack $Pack
 * @property PaginatorComponent $Paginator
 */
class PacksController extends AppController {

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
		$this->Pack->recursive = 0;
		$this->set('packs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pack->exists($id)) {
			throw new NotFoundException(__('Invalid pack'));
		}
		$options = array('conditions' => array('Pack.' . $this->Pack->primaryKey => $id));
		$this->set('pack', $this->Pack->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pack->create();
			if ($this->Pack->save($this->request->data)) {
				$this->Session->setFlash(__('The pack has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pack could not be saved. Please, try again.'));
			}
		}
		$products = $this->Pack->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pack->exists($id)) {
			throw new NotFoundException(__('Invalid pack'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pack->save($this->request->data)) {
				$this->Session->setFlash(__('The pack has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pack could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pack.' . $this->Pack->primaryKey => $id));
			$this->request->data = $this->Pack->find('first', $options);
		}
		$products = $this->Pack->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pack->id = $id;
		if (!$this->Pack->exists()) {
			throw new NotFoundException(__('Invalid pack'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pack->delete()) {
			$this->Session->setFlash(__('The pack has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pack could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
