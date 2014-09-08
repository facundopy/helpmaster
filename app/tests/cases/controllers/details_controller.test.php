<?php
/* Details Test cases generated on: 2014-09-08 09:39:35 : 1410194375*/
App::import('Controller', 'Details');

class TestDetailsController extends DetailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DetailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.detail', 'app.ticket', 'app.commer', 'app.realization', 'app.precedence', 'app.employee');

	function startTest() {
		$this->Details =& new TestDetailsController();
		$this->Details->constructClasses();
	}

	function endTest() {
		unset($this->Details);
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
