<?php
class  fuc {        //定义一个类
	static function ec() {
		echo '我是一个类';
	}
}
$class=new  ReflectionClass('fuc');    //建立 fuc这个类的反射类

echo $class; //输出这反射类
//Class [ class A ] { @@  F:\phpweb\myPHP\test.php 23-30 - Constants [0] { } - Static properties [0] { } -  Static methods [0] { } - Properties [0] { } - Methods [1] { Method [ public method __construct ] { @@ F:\phpweb\myPHP\test.php 26 - 29 } }  }
echo "<br>";

$fuc=$class->newInstance();  //相当于实例化 fuc  类
$fuc->ec(); //执行  fuc 里的方法ec
/*最后输出:我是一个类*/
echo "<br>";
//其中还有一些更高级的用法

$ec=$class->getmethod('ec');  //获取fuc  类中的ec方法
$fuc=$class->newInstance();  //实例化
$ec->invoke($fuc);      //执行ec 方法