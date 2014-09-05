<?php
class Employee extends AppModel {
	var $name = 'Employee';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $displayField = 'nombre';
	var $hasMany = array(
		'Ticket' => array(
			'className' => 'Ticket',
			'foreignKey' => 'employee_id',
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
