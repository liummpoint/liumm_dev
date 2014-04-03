<?php
require 'Car.php';
class Test{
	public function test(){
		$car = new Car();
		$car->getCar();
	}
}

$test = new Test();
$test->test();