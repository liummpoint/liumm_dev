<?php
$phoneNumber = '13812345678';
$message = 'This　message　was　generated　by　curl　and　php';
$curlPost = 'phone='.urlencode($phoneNumber).'&message='.urlencode($message);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8090/zf001/liumm_test/test5.php');
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
$data = curl_exec($ch);
curl_close($ch);

//var_dump($data);

$rc = urldecode($data);
$arrTmp = explode('&',$rc);
$arrTmp1 = array();
$myArr = array();
for($i=0; $i<count($arrTmp);$i++){
	$arrTmp1 = explode('=',$arrTmp[$i]);
	$myArr[$arrTmp1[0]] = $arrTmp1[1];
}

var_dump($myArr);
echo "<br>";
echo $myArr['phone'];
echo "<br>";
echo $myArr['message'];



