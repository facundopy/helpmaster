<?php
class Commer extends AppModel {
	var $name = 'Commer';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $displayField = 'name';
	var $hasMany = array(
		'Ticket' => array(
			'className' => 'Ticket',
			'foreignKey' => 'commer_id',
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
