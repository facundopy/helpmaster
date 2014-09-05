<?php
class Realization extends AppModel {
	var $name = 'Realization';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $displayField = 'description';
	var $hasMany = array(
		'Ticket' => array(
			'className' => 'Ticket',
			'foreignKey' => 'realization_id',
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
