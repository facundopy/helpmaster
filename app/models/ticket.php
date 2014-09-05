<?php
class Ticket extends AppModel {
	var $name = 'Ticket';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Commer' => array(
			'className' => 'Commer',
			'foreignKey' => 'commer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Realization' => array(
			'className' => 'Realization',
			'foreignKey' => 'realization_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Precedence' => array(
			'className' => 'Precedence',
			'foreignKey' => 'precedence_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Detail' => array(
			'className' => 'Detail',
			'foreignKey' => 'ticket_id',
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
