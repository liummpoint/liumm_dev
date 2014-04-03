<?php
class Testing
{
	final public static function foo()
	{
		return;
	}
	public function bar()
	{
		return;
	}
}

$foo = new ReflectionMethod('Testing', 'foo');

echo "Modifiers for method foo():\n";
echo $foo->getModifiers() . "\n";
echo implode(' ', Reflection::getModifierNames($foo->getModifiers())) . "\n";

echo "<br>";

$adapter = Zend_Db::factory();
