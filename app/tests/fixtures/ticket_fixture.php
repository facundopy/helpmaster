<?php
/* Ticket Fixture generated on: 2014-09-04 08:38:30 : 1409845110 */
class TicketFixture extends CakeTestFixture {
	var $name = 'Ticket';

	var $fields = array(
		'commers_id' => array('type' => 'integer', 'null' => true),
		'realization_id' => array('type' => 'integer', 'null' => true),
		'precedences_id' => array('type' => 'integer', 'null' => true),
		'date' => array('type' => 'date', 'null' => true),
		'Descripcion' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'commers_id' => 1,
			'realization_id' => 1,
			'precedences_id' => 1,
			'date' => '2014-09-04',
			'Descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'id' => 1,
			'employee_id' => 1
		),
	);
}
