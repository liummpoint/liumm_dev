<?php
/*
//创建对象并打开连接，最后一个参数是选择的数据库名称
$mysqli = new mysqli('192.168.226.128','root','root','mst_slv');
//检查连接是否成功
if (mysqli_connect_errno()){
	//注意mysqli_connect_error()新特性
	die('Unable to connect!'). mysqli_connect_error();
}
$sql = "select * from user";
//执行sql语句，完全面向对象的
$result = $mysqli->query($sql);
while($row = $result->fetch_array()){
	echo $row[0];
}
*/

 //生成一个连接
$db_connect=mysql_connect('192.168.226.128','root','root') or die("Unable to connect to the MySQL!");

//选择一个需要操作的数据库
mysql_select_db('mst_slv',$db_connect);

//执行MySQL语句
$result=mysql_query("SELECT * FROM user");

 //提取数据
$row=mysql_fetch_row($result);
var_dump($row);
