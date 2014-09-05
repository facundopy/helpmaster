<?php
/* Ticket Test cases generated on: 2014-09-04 08:51:18 : 1409845878*/
App::import('Model', 'Ticket');

class TicketTestCase extends CakeTestCase {
	var $fixtures = array('app.ticket', 'app.commers', 'app.realization', 'app.precedences', 'app.employee', 'app.detail');

	function startTest() {
		$this->Ticket =& ClassRegistry::init('Ticket');
	}

	function endTest() {
		unset($this->Ticket);
		ClassRegistry::flush();
	}

}
