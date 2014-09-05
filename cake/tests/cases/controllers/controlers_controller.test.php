<?php
/* Controlers Test cases generated on: 2014-09-02 13:13:18 : 1409688798*/
App::import('Controller', 'Controlers');

class TestControlersController extends ControlersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ControlersControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Controlers =& new TestControlersController();
		$this->Controlers->constructClasses();
	}

	function endTest() {
		unset($this->Controlers);
		ClassRegistry::flush();
	}

}
