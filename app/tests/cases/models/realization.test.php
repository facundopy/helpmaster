<?php
/* Realization Test cases generated on: 2014-09-03 07:14:05 : 1409753645*/
App::import('Model', 'Realization');

class RealizationTestCase extends CakeTestCase {
	var $fixtures = array('app.realization');

	function startTest() {
		$this->Realization =& ClassRegistry::init('Realization');
	}

	function endTest() {
		unset($this->Realization);
		ClassRegistry::flush();
	}

}
