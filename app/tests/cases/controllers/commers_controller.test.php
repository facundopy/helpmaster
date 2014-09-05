<?php
/* Commers Test cases generated on: 2014-09-04 12:28:26 : 1409858906*/
App::import('Controller', 'Commers');

class TestCommersController extends CommersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CommersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.commer');

	function startTest() {
		$this->Commers =& new TestCommersController();
		$this->Commers->constructClasses();
	}

	function endTest() {
		unset($this->Commers);
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
