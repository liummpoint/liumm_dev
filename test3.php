<?php
include('init.inc.php');
require_once '../library/Zend/Application.php';

class TestRequestLmm extends Zend_Controller_Action{
	
	public function __construct() {
		parent::__construct();
	}
	
	function testGetParams(){
		$params = $this->getRequest()->getParams();
		return $params;
	}
}

$testRequestLmm = new TestRequestLmm();
var_dump($testRequestLmm->testGetParams());

class Test_Db_Table extends Zend_Db_Table{
	
}

class Test_Db_Table extends Zend_Db_Table_Abstract{

}