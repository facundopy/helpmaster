<?php
/* Priority Test cases generated on: 2014-09-03 06:33:53 : 1409751233*/
App::import('Model', 'Priority');

class PriorityTestCase extends CakeTestCase {
	var $fixtures = array('app.priority', 'app.case');

	function startTest() {
		$this->Priority =& ClassRegistry::init('Priority');
	}

	function endTest() {
		unset($this->Priority);
		ClassRegistry::flush();
	}

}
