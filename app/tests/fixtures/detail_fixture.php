<?php
/* Detail Fixture generated on: 2014-09-04 06:25:40 : 1409837140 */
class DetailFixture extends CakeTestFixture {
	var $name = 'Detail';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'ticket_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'ticket_id' => 1
		),
	);
}
