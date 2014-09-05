<?php
/* Commer Test cases generated on: 2014-09-04 08:36:46 : 1409845006*/
App::import('Model', 'Commer');

class CommerTestCase extends CakeTestCase {
	var $fixtures = array('app.commer');

	function startTest() {
		$this->Commer =& ClassRegistry::init('Commer');
	}

	function endTest() {
		unset($this->Commer);
		ClassRegistry::flush();
	}

}
