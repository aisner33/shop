<?php
App::uses('AppModel', 'Model');
/**
 * Childsection Model
 *
 * @property Fathersection $Fathersection
 * @property Freaturedproduct $Freaturedproduct
 * @property Mastersection $Mastersection
 * @property Product $Product
 */
class Childsection extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'fathersection_id' => array(
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
		'Fathersection' => array(
			'className' => 'Fathersection',
			'foreignKey' => 'fathersection_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Freaturedproduct' => array(
			'className' => 'Freaturedproduct',
			'foreignKey' => 'childsection_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Mastersection' => array(
			'className' => 'Mastersection',
			'foreignKey' => 'childsection_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Product' => array(
			'className' => 'Product',
			'joinTable' => 'childsections_products',
			'foreignKey' => 'childsection_id',
			'associationForeignKey' => 'product_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
