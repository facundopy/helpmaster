<?php
/* Tickets Test cases generated on: 2014-09-07 12:01:10 : 1410116470*/
App::import('Controller', 'Tickets');

class TestTicketsController extends TicketsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TicketsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ticket', 'app.commer', 'app.realization', 'app.precedence', 'app.employee', 'app.detail');

	function startTest() {
		$this->Tickets =& new TestTicketsController();
		$this->Tickets->constructClasses();
	}

	function endTest() {
		unset($this->Tickets);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
