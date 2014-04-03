<?php
require 'ParamsChecker.php';
$rule = array(
		'recharge_transaction_id' => '',
		'user_id' => 'int',
		'amount' => '',
		'old_card_id' => '',
		'card_no_suffix' => '',
		'pin' => ''
);

$param = array(
	'recharge_transaction_id' => 101090,
	'user_id' => 8,
	'amount' => 10,
	'pay_source' => 1,
	'action' =>1,
	'old_card_id' => '13874738743',
	'card_no_suffix' => '3099',
	'pin' => '330',
	'operator' => 'system',
	'service_order_ids' => '200007765'
);

ParamsChecker::check($param, $rule);