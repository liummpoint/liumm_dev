<?php
require __DIR__.'/YCL_CreditCardRequired.php';

$credit = new YCL_CreditCardRequired(71);
$convert = $credit->convertToItems();
var_dump($convert);

