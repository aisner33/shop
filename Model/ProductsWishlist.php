<?php
App::uses('AppModel', 'Model');
/**
 * ProductsWishlist Model
 *
 * @property Products $Products
 */
class ProductsWishlist extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'wishlists_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'Products' => array(
			'className' => 'Products',
			'foreignKey' => 'products_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
