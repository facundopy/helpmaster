<?php
/* Precedences Test cases generated on: 2014-09-03 07:30:08 : 1409754608*/
App::import('Controller', 'Precedences');

class TestPrecedencesController extends PrecedencesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PrecedencesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.precedence');

	function startTest() {
		$this->Precedences =& new TestPrecedencesController();
		$this->Precedences->constructClasses();
	}

	function endTest() {
		unset($this->Precedences);
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
