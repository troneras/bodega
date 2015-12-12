<?php
App::uses('AppController', 'Controller');
/**
 * Sales Controller
 *
 * @property Sale $Sale
 * @property PaginatorComponent $Paginator
 */
class ResumenController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

var $paginate = array(
		    'Sale' => array(
		        'limit' => 10, 
		        'recursive' => 0, 
		        'model' => 'Sale', 
		        'order' => array('quantity' => 'DESC')
		    ),      
		);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->loadModel('Product');
		$this->loadModel('Client');
		$this->loadModel('Pack');
		$this->loadModel('Sale');
		$products = $this->Product->find('list');
		$clients = $this->Client->find('list');
		$packs = $this->Pack->find('all');
		
		$sales = $this->paginate('Sale');
	    if ($sales) {
	        $this->set('sales', $sales);
	    }
	    // Packs disponibles
		$packs_venta = $this->Pack->getPacks();
		// Clientes disponibles		
		$clientes_venta = $this->Client->find('list');
		// Payment options 
		$payment_options =  $this->getEnumValues('Sale.payment'); 
		$this->set(compact('packs_venta','clientes_venta','payment_options'));

		$this->set(compact('products','clients','packs'));
	}



}
