<?php
/* Priorities Test cases generated on: 2014-09-03 06:33:55 : 1409751235*/
App::import('Controller', 'Priorities');

class TestPrioritiesController extends PrioritiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PrioritiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.priority', 'app.case');

	function startTest() {
		$this->Priorities =& new TestPrioritiesController();
		$this->Priorities->constructClasses();
	}

	function endTest() {
		unset($this->Priorities);
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
