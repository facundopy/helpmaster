<?php
/* Detail Test cases generated on: 2014-09-04 06:25:40 : 1409837140*/
App::import('Model', 'Detail');

class DetailTestCase extends CakeTestCase {
	var $fixtures = array('app.detail', 'app.ticket', 'app.commers', 'app.realization', 'app.precedences', 'app.user');

	function startTest() {
		$this->Detail =& ClassRegistry::init('Detail');
	}

	function endTest() {
		unset($this->Detail);
		ClassRegistry::flush();
	}

}
