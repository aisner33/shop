<?php
App::uses('AppModel', 'Model');
/**
 * Devolution Model
 *
 * @property Devolutionsreason $Devolutionsreason
 * @property User $User
 */
class Devolution extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'devolutionsreason_id' => array(
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
		'Devolutionsreason' => array(
			'className' => 'Devolutionsreason',
			'foreignKey' => 'devolutionsreason_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'devolutions_users',
			'foreignKey' => 'devolution_id',
			'associationForeignKey' => 'user_id',
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
