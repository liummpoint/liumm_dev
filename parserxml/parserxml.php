<?php
//$xml = file_get_contents(__DIR__.'/xml/parser.xml');

$parser = simplexml_load_file(__DIR__.'/xml/parser.xml');
var_dump($parser);
$xml = $parser->xpath("/MSG/Request/Memo");
var_dump($xml);
