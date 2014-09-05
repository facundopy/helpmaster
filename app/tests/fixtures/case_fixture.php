<?php
/* Case Fixture generated on: 2014-09-03 06:53:01 : 1409752381 */
class CaseFixture extends CakeTestFixture {
	var $name = 'Case';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'commers_id' => array('type' => 'integer', 'null' => false),
		'status_id' => array('type' => 'integer', 'null' => false),
		'priority_id' => array('type' => 'integer', 'null' => false),
		'date' => array('type' => 'date', 'null' => true),
		'user_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'commers_id' => 1,
			'status_id' => 1,
			'priority_id' => 1,
			'date' => '2014-09-03',
			'user_id' => 1
		),
	);
}
