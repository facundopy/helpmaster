<?php
/* Precedence Test cases generated on: 2014-09-03 12:35:08 : 1409772908*/
App::import('Model', 'Precedence');

class PrecedenceTestCase extends CakeTestCase {
	var $fixtures = array('app.precedence');

	function startTest() {
		$this->Precedence =& ClassRegistry::init('Precedence');
	}

	function endTest() {
		unset($this->Precedence);
		ClassRegistry::flush();
	}

}
