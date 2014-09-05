<?php
/* States Test cases generated on: 2014-09-03 06:55:30 : 1409752530*/
App::import('Controller', 'States');

class TestStatesController extends StatesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StatesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.state');

	function startTest() {
		$this->States =& new TestStatesController();
		$this->States->constructClasses();
	}

	function endTest() {
		unset($this->States);
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
