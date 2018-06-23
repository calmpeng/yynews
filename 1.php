<?php 
include('./config.php');

function db_connect(){	
$conn =@ mysqli_connect(HOST,USER,PWD);
	if(!$conn){
		die('连接mysql服务器失败'.mysqli_connect_error());
		return false;
	}
	if(!@mysqli_select_db($conn,DB)){
		die('选择数据库失败'.mysqli_error($conn));
		return false;
	}
	if(!@mysqli_set_charset($conn,CHARSET)){
		die('设置字符集失败'.mysqli_error($conn));
		return false;
	}
	return $conn;
}
function outto(){
$link = db_connect();
	if(!$link){
		//报告错误信息
		echo "为连接成功";
	}
$select = "select * from t_categoty";
$result = mysqli_query($link,$select);
$row = mysqli_fetch_array($result);
if(!$row){
	//echo $select;
	exit('插入数据失败'.mysqli_error($link));
	return false;

}
else{
	var_dump($row);
}
}
?>



