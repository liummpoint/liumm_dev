<?php
error_reporting(E_ALL|E_STRICT);
function __autoload($clazz) {
	$lib = __DIR__ . '/../library';

	$file = str_replace('_', '/', $clazz);
	if(is_file("$lib/$file.php")){
		require "$lib/$file.php";
	}
		
}