<?php
/* User Fixture generated on: 2014-09-03 07:30:16 : 1409754616 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => true, 'length' => 1),
		'password' => array('type' => 'string', 'null' => true, 'length' => 1),
		'email' => array('type' => 'string', 'null' => true, 'length' => 1),
		'role' => array('type' => 'string', 'null' => true, 'length' => 1),
		'created' => array('type' => 'date', 'null' => true),
		'modified' => array('type' => 'date', 'null' => true),
		'status' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit ame',
			'password' => 'Lorem ipsum dolor sit ame',
			'email' => 'Lorem ipsum dolor sit ame',
			'role' => 'Lorem ipsum dolor sit ame',
			'created' => '2014-09-03',
			'modified' => '2014-09-03',
			'status' => 1
		),
	);
}
