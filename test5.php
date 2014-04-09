<?php
/*
class Test {
	private $name = "";
    private $age = 0;

    public function setName($name){
    	$this->name = $name;
    }
    
    public function getName(){
    	return $this->name;
    }
}

$test1 = new Test();
$test2 = new Test();

$test1->setName('liumingming');
$test2->setName("donglei");

echo $test1->getName();
echo "<br>";
echo $test2->getName();
*/

/*
$host = 'http://localhost:8090/';
echo $host;
$host = trim($host, '/');
echo "<br>";
echo $host;
*/
/*
class Test2{
	const GETNAME = 'liumingming';
	
	public function getName(){
		
	}
}

echo "<br>";
echo Test2::GETNAME;
*/

/*
$server = array(
                'h7-vm2.corp.yongche.org:27017',
                'h7-vm1.corp.yongche.org:27017'
            );
$ccc = join( $server, ',' );
*/
/*
$server = array(
		'h7-vm2.corp.yongche.org:27017',
		'h7-vm1.corp.yongche.org:27017'
);
$ccc = join(  ',', $server );

var_dump($ccc);

echo "<br>";
var_dump(getdate(time()));

echo "<br>";
$required = array(
		'id',
		'user_id',
);

foreach( $required as $key ){
	echo "<br>key=".$key;
}
echo "<br>";
$pushData = array(
		'aps' => array(
				'alert' => 'hello',
		),
);

$maxLen = 210;
var_dump(json_encode($pushData,JSON_UNESCAPED_UNICODE));
*/

//echo date("m月d日",strtotime('-1 day'));

/*
$ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
var_dump($ua);
$r = get_browser();
echo "<br>";
var_dump($r);
echo "<br>";
echo PATH_SEPARATOR;
echo "<br>";
echo get_include_path();
*/

/*
echo log(2,10);
echo "<br>";
echo round(12.23284,2);
*/

/*
$ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
var_dump($ua);
*/
//$str = 'Android 4.2';


/*
$timestr = 1393004059;

echo date('Y-m-d H:i:s', $timestr);
*/

/*
class Order_Test{
	const ORDER_TYPE_PASSENGER = 1;
	const ORDER_TYPE_DRIVER = 2;
	static $typeList = array(
		self::ORDER_TYPE_DRIVER => '司机端',
		self::ORDER_TYPE_PASSENGER => '乘客端'
	);
	
	public static function getTypeList(){
		return self::$typeList;
	}
}


var_dump(Order_Test::$typeList);
echo "<br>";
var_dump(Order_Test::getTypeList());
*/

/*
$mc = new Memcached();
$mc->setOption ( Memcached::OPT_LIBKETAMA_COMPATIBLE, true );
$mc->addServers ( array (
		array (
				'192.168.1.224',
				'11211' 
		) 
) );

var_dump($mc);
*/

/*
$memcache = new Memcache; //创建一个memcache对象
$memcache->connect('192.168.1.224', 11211) or die ("Could not connect"); //连接
var_dump($memcache);
*/

/*
$crm_host = 'testing.be.yongche.org';
echo strpos($crm_host, ".", -5);
echo "<br>";
echo strrpos($crm_host, ".", -5);
echo "<br>";
$domain = substr($crm_host, strrpos($crm_host, ".", -5) + 1);
echo $domain;
echo "<br>";
*/

/*
$params['where'] = array('isHas'=>'true','isBuy'=>'false');

var_dump($params);
class TestParames {
	
	public function driverfindone($params)
	{
		foreach($params['where'] as &$v) {
			if($v == 'true') {
				$v = true;
			}
			if($v == 'false') {
				$v = false;
			}
		}
		return $params;
	}

}

$testParames = new TestParames();
$res = $testParames->driverfindone($params);
var_dump($res);
*/

/*
$a = 10;
function demo(&$a){
	$a +=5;
	return $a;
}
function test($b){
	$b +=10;
	return $b;
}

echo demo($a);
echo "<br>";
echo test($a);
echo "<br>";
echo $a;
*/

//echo date("Ym");

/*
$strarr = array(
	'name'=>'tony',
	'key'=>'YDJUHDGHD',
	'secret'=>'Hjd7HD93jd'
);

while (list($k,$v) = each($strarr)){
	echo $k.'='.$v."<br>";
	echo $strarr[$k]."<br>";
}
*/


/*
$propertyName = 'expireDate';
//$propertyName = 'name';
preg_match_all( '/^[a-z]+|[A-Z][a-z]+/', $propertyName, $words );
var_dump($words);
$words = $words[0];
array_walk($words, function(&$value){
	$value = mb_strtolower($value, 'UTF-8');
});

	echo  implode( '_', $words );
*/

/*
$_shortMap = array(
		'c' => 'cardNo',
		'e' => 'expireDate',
		'v' => 'pin',
		'n' => 'name',
		'p' => 'cellphone',
		'i' => 'identityCard',
		'cc'=> 'cardCountry',
);

var_dump(array_flip($_shortMap));
*/

/*
$arr = array('Hello','World!','Beautiful','Day!');
var_dump(join($arr));
*/
//echo 'time='.strtotime('2014-03-03 15:23:58');

/*
$_shortMap = array(
		'c' => 'cardNo',
		'e' => 'expireDate',
		'v' => 'pin',
		'n' => 'name',
		'p' => 'cellphone',
		'i' => 'identityCard',
		'cc'=> 'cardCountry',
);

error_log(print_r($_shortMap, true));
*/

/*
$paramsQ = array(
		'service_order_id' => 0,
		'user_id' => 0,
		'corporate_id' => 0,
		'status' => 0,
		'pay_status' => 0,
		'payable' => 0,
		'balance_status' => 0,
		'abnormal_mark' => 0
);
var_dump($paramsQ);
$paramsQ = (object) $paramsQ;
echo "<br>";
var_dump($paramsQ);
*/

/*
$phone = $_POST['phone'];
$message = $_POST['message'];

echo '&phone='.$phone.'&message='.$message;
*/
/*
$options = getopt("abc");
var_dump($options);
*/

/*
$ret =array('name'=>'liumingming');

$result['ext'] = isset($result['ext'])? $result['ext']:array();
$ret = array_merge($ret,$result['ext']);
var_dump($ret);
*/

/*
$arr = array(2,6,1,3);
echo array_search(max($arr), $arr);
echo "<br>";
echo max($arr);
*/

/*
$a = array (1, 2, array ("a", "b", "c"));
var_export ($a);
echo "<br>";
var_dump($a);
*/

/*
$xmlMsg = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<note>
<to>George</to>
<from>John</from>
<heading>Reminder</heading>
<body>Don't forget the meeting!</body>
</note>
XML;

$result = simplexml_load_string($xmlMsg);
var_dump($result);
echo "<br>";
echo "from ".$result->from;
*/

/*
$amount = 189;
$amount = str_pad( $amount, 12, '0', STR_PAD_LEFT );
echo $amount;
*/

/*
$_shortMap = array(
		'c' => 'cardNo',
		'e' => 'expireDate',
		'v' => 'pin',
		'n' => 'name',
		'p' => 'cellphone',
		'i' => 'identityCard',
		'cc'=> 'cardCountry',
);
var_dump($_shortMap);
ksort($_shortMap);
var_dump($_shortMap);
*/

//单引号,双引号转换
/*
$str = "John & 'Adams'";
echo $str = htmlentities($str, ENT_QUOTES);
echo "<br>";
echo html_entity_decode($str, ENT_QUOTES, 'UTF-8');
*/

/*
$fields = array(
		'user_id',
		'total_amount',
		'start_position',
		'end_position',
		'expect_start_time',
		'pass_position',
		'time_length',
		'passenger_name',
		'passenger_phone',
		'car_type_id',
		'vehicle_number',
		'driver_phone',
		'total_distance',
		'operator_id',
		'rent_rate_id',
		'driver_id',
		'driver_name',
		'car_brand',
		'car_id',
		'comment',
		'msg',
		'start_time',
		'end_time',
		'sharing_amount',
		'type',
		'dependable_distance',
		'city',
		'pay_amount',
		'pay_status',
		'product_type_id',
		'corporate_id',
		'coupon_member_id',
		'origin_amount'
);
var_dump($fields);
$fields = array_flip($fields);
var_dump($fields);
*/

/*
$params['comment'] = '请司机速来接我';
if (isset($params['comment'])) {
	$params['comment'] = filter_input(INPUT_POST, 'comment', FILTER_UNSAFE_RAW);
	$params['comment'] = $params['comment'] ?: filter_input(INPUT_GET, 'comment', FILTER_UNSAFE_RAW);
}

echo $params['comment'];
*/

/*
$value = 'have';

$str = $value ? : 'to here';
echo $str;
*/

/*
echo sprintf("%d%012d", 4, 2);
*/

/*
preg_match('/^([^\/]+)\/([^\s\/]+)(?:\/([\S]+))?\s\(([^;]+);\s([^;]+)(?:;\s([^\)]+))?\)(?:\s(\S+))?(?:\s(\S+))?/',
		 'iWeidao/1.0.0 (iPhone; iOS 7.0.1; Scale/2.00)',$match);
var_dump($match);
*/


/*
$params['fields'] = 'column';
$fields = isset($params['fields']) ? filter_input(INPUT_POST, "fields", FILTER_UNSAFE_RAW) : '';
echo $fields;
*/


//声明一个类
/*
class dog {

	var $name;
	var $age;
	var $owner;

	function dog($in_name="unnamed",$in_age="0",$in_owner="unknown") {
		$this->name = $in_name;
		$this->age = $in_age;
		$this->owner = $in_owner;
	}

	function getage() {
		return ($this->age * 365);
	}

	function getowner() {
		return ($this->owner);
	}

	function getname() {
		return ($this->name);
	}
}
//实例化这个类
$ourfirstdog = new dog("Rover",12,"Lisa and Graham");
//用serialize函数将这个实例转化为一个序列化的字符串
$dogdisc = serialize($ourfirstdog);
print $dogdisc; //$ourfirstdog 已经序列化为字符串 O:3:"dog":3:

$usedog = unserialize($dogdisc);
echo $usedog->getowner();
*/


/*
$fields = array('name','age');
var_dump($fields);
$fields = array_filter(is_array($fields) ? $fields : array($fields));
var_dump($fields);
*/


//echo strpos('is_auto_dispatch', 'is_auto_dispatch');

//echo 11 & 13;

/*
$str = 'abcd';
echo $str{0};
echo "<br>";
echo $str[0];
*/

/*
$result = strpos('liumingming', 'liu');
echo json_encode($result);
*/

/*
$arr = array(
		'service_order_id','type','info','time'
);
$arr2 = array(
		'service_order_id','type','info'
);
$interArr = array_intersect($arr,$arr2);
var_dump($interArr);
*/

/*
echo strstr('liumingming', 'ming');
*/


/*
$A="10.50002";
$B="10.50001";

echo bccomp($A, $B, 5);
echo "<br>";
echo "$A.$B";
*/

/*
function simulateTime($distance) {
	//hardcode estimated paramters
	$base_params = array(
			0 => array(8, 2.4, 1.5),
			7 => array(8, 2.4, 1.3),
			11 => array(8, 2.4, 1.2),
			16 => array(8, 2.4, 1.1),
			31 => array(60, 0.75, 1),
	);

	$distance_km = round((double)$distance/1000);
	$time_span = array_keys($base_params);

	$level = 0;
	foreach($time_span as $span_point) {
		if ($distance_km >= $span_point) {
			$level = $span_point;
		} else {
			break;
		}
	}

	//计算模拟时长
	$param = $base_params[$level];
	$time_minute = $param[0] + $distance_km * $param[1] * $param[2];
	$time_minute = round($time_minute);

	return $time_minute * 60;
}


simulateTime(10000);
*/


/*
$params = array(
	'name' => '刘明明',
	'address' => '北京市海淀区中关村',
	'state' => 'china'
);

$encodeArr = array();
foreach ($params as $key=>$value){
	$encodeArr[urlencode($key)] = urlencode($value);
}
var_dump($params);
echo "<br>";
var_dump($encodeArr);
*/

/*
function test(&$i){
	static $var=0;
	$var += $i++;
	echo $var;
}

$i=1;
test($i);
test($i);
echo $i;
*/

#两个数组$arr = array('a','b','c');$arr2 = array('apple','orange','banana');要求将两数组合并为
#array('c'=>'apple','b'=>'orange','a'=>'banana'); 然后从合并后数组中得到键值数组array('c','a','b')
#以及值数组array('banana','orange','apple').(注意顺序)
/*
$arr = array('a','b','c');
$arr2 = array('apple','orange','banana');

#(1)
rsort($arr);
$arr3 = array();

$arr = array_flip($arr);
var_dump($arr);
foreach ($arr as $key=>$var){
	$arr3[$key] = $arr2[$var];
}

for ($i=0; $i<count($arr);$i++){
	$arr3[$arr[$i]] = $arr2[$i];
}
var_dump($arr3);
#(2)
asort($arr3);
$arr4 = array_keys($arr3);
var_dump($arr4);

#(3)
ksort($arr3);
$arr5 = array_values($arr3);
var_dump($arr5);
*/

/*
function test(&$i){
	static $var = 0 ;
	$var += ++$i;
	echo $var;
}
$i=1;
test($i);
test($i);
echo $i;
*/

# make_by_id

/*
$str = 'make_by_id';
function getStrOfFirstUp($str){
	$str1 = explode('_', $str);
	$str2='';
	foreach ($str1 as $val){
		$str2 .= ucfirst($val);
	}
	return $str2;
}
echo getStrOfFirstUp($str);
*/
/*
$str = 1;
echo "$str";
echo "<br>";
echo '$str';
*/

/*
for ($i=100; $i<=1000; $i++){
	if($i%10 == 9 && $i%9 == 8 && $i%8 == 7){
		echo $i;
	}
}
*/

/*
$str = 'name=liumingming&age=30&';
$str = substr($str, 0, count($str)-2);
echo $str;
*/

/*
$params = array(
	'status' => 1,
	'name' =>'liumm'
);
$checkStrVaild = true;

if($params['status'] == 1 && $params['name'] == 'liumm' && 
	$checkStrVaild == true)
{
	echo "OK";
}
*/

/*
 
 ($flag & 0x04 != 0x04)
	这个按位与怎么求出$flag?
 
 	位运算是1＆1=1
	4=100
	只要第3位=1就行
	比如567
	
echo 567 & 0x04;
echo "<br>";
echo 0x04;
echo "<br>";

if((567 & 0x04 == 0x04)){
	echo 'OK';
}else{
	echo 'NO';
}
 */


$flag = 567;
echo $flag & 0x04;
echo "<br>";
echo 0x04;
echo "<br>";

if(($flag & 0x04) == 0x04){
	echo 'OK';
}else{
	echo 'NO';
}
echo "<br>";



