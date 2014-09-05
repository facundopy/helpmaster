<?php
/* Employees Test cases generated on: 2014-09-04 08:31:55 : 1409844715*/
App::import('Controller', 'Employees');

class TestEmployeesController extends EmployeesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EmployeesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.employee', 'app.ticket', 'app.commers', 'app.realization', 'app.precedences', 'app.detail');

	function startTest() {
		$this->Employees =& new TestEmployeesController();
		$this->Employees->constructClasses();
	}

	function endTest() {
		unset($this->Employees);
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
