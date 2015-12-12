<?php
App::uses('AppController', 'Controller');
/**
 * Sales Controller
 *
 * @property Sale $Sale
 * @property PaginatorComponent $Paginator
 */
class SalesController extends AppController {

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
		$this->Sale->recursive = 0;
		$this->set('sales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sale->exists($id)) {
			throw new NotFoundException(__('Invalid sale'));
		}
		$options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
		$this->set('sale', $this->Sale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->loadModel('Pack');
		$this->loadModel('Client');

		if ($this->request->is('post')) {
			$this->Sale->create();
			if ($this->Sale->save($this->request->data)) {
				$this->Session->setFlash(__('The sale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.'));
			}
		}

		// Packs disponibles
		$packs = $this->Pack->getPacks();
		// Clientes disponibles		
		$clientes = $this->Client->find('list');
		// Payment options 
		$payment_options =  $this->getEnumValues('Sale.payment'); 
		$this->set(compact('packs','clientes','payment_options'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sale->exists($id)) {
			throw new NotFoundException(__('Invalid sale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sale->save($this->request->data)) {
				$this->Session->setFlash(__('The sale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sale.' . $this->Sale->primaryKey => $id));
			$this->request->data = $this->Sale->find('first', $options);
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
		$this->Sale->id = $id;
		if (!$this->Sale->exists()) {
			throw new NotFoundException(__('Invalid sale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sale->delete()) {
			$this->Session->setFlash(__('The sale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
