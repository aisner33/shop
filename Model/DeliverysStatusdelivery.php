<?php
App::uses('AppModel', 'Model');
/**
 * DeliverysStatusdelivery Model
 *
 * @property Statusdelivery $Statusdelivery
 */
class DeliverysStatusdelivery extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'deliverys_statusdeliverys';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'delivery_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'statusdelivery_id' => array(
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
		'Statusdelivery' => array(
			'className' => 'Statusdelivery',
			'foreignKey' => 'statusdelivery_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
