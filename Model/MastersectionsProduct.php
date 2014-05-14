<?php
App::uses('AppModel', 'Model');
/**
 * MastersectionsProduct Model
 *
 * @property Mastersections $Mastersections
 * @property Products $Products
 */
class MastersectionsProduct extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'mastersections_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'products_id' => array(
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
		'Mastersections' => array(
			'className' => 'Mastersections',
			'foreignKey' => 'mastersections_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Products' => array(
			'className' => 'Products',
			'foreignKey' => 'products_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
