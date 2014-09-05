<?php
/* Realizations Test cases generated on: 2014-09-03 08:20:31 : 1409757631*/
App::import('Controller', 'Realizations');

class TestRealizationsController extends RealizationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RealizationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.realization', 'app.ticket');

	function startTest() {
		$this->Realizations =& new TestRealizationsController();
		$this->Realizations->constructClasses();
	}

	function endTest() {
		unset($this->Realizations);
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
