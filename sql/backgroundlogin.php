<?php 
include('./config.php');
/*
*连接mysql服务器
*/
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
?>
<?php 
//登录
function login($user,$pwd){
$link = db_connect();
$select = " select * from t_user where username = '$user' and password = '$pwd' and Role='0' ";
$rs =@mysqli_query($link,$select);
	if(!$rs){
		exit('查询失败'.mysqli_error($link));
		return false;
	}
	if(mysqli_num_rows($rs)==0){
		return false;
	}
return true; 
}
?>
<?php 
 $user = $_POST['username'];
 $pwd = $_POST['password'];
 if(login($user,$pwd)){
 	console.log('成功登录') ;
 	echo '<meta http-equiv="refresh" content="0;URL=\'http://localhost/yynews/backgroundmanage.php\'" >';

 }else{
 	console.log('失败登录');
 	echo '<meta http-equiv="refresh" content="0;URL=\'http://localhost/yynews/background.php?i=false\'" >';
 }

 ?>

