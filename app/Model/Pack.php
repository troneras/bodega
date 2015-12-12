<?php
App::uses('AppModel', 'Model');
/**
 * Pack Model
 *
 * @property Product $Product
 */
class Pack extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'product_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'quantity' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	// Crea un array que se puede pasar a un select para generar un select con optgroups
	public function getPacks()
	{
		$packs = $this->find('all');

		$result = array();
		foreach ($packs as $pack) {
			$product = $pack['Product'];
			$pack = $pack['Pack'];
			if (isset($result[$product['name']])){
				$result[$product['name']][$pack['id']] = $pack['name'];
			}else{
				$result[$product['name']] = array($pack['id'] => $pack['name']);
			}
		}		
		return $result;

	}
}
