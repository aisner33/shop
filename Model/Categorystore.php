<?php
App::uses('AppModel', 'Model');
/**
 * Categorystore Model
 *
 * @property Store $Store
 */
class Categorystore extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Store' => array(
			'className' => 'Store',
			'foreignKey' => 'categorystore_id',
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

}
