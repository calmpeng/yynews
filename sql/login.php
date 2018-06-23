<?php 
header("Content-type:text/html;charset=utf-8");

include('./config.php');
/*
*连接mysql服务器
*/
function db_connect(){	
$conn =mysqli_connect(HOST,USER,PWD);
	if(!$conn){
		die('连接mysql服务器失败'.mysqli_connect_error());
		return false;
	}
	if(!@mysqli_select_db($conn,DB)){
		die('选择数据库失败'.mysqli_error($conn));
		return false;
	}
	if(!mysqli_set_charset($conn,CHARSET)){
		die('设置字符集失败'.mysqli_error($conn));
		return false;
	}
	//echo "数据库连接ok";
	return $conn;
}
?>
<?php 
//登录
function login($user,$pwd){
$link = db_connect();
// $select_name = "select * from t_user where username = '$user";
// $rs =@mysqli_query($link,$select_name);
// 	if(!$rs){
// 		echo "用户名错误，请重新输入！";
		//exit('查询失败'.mysqli_error($link));
		//return false;
	//}
// 	if(mysqli_num_rows($rs)==0){
// 		echo "用户名错误，请重新输入！"
// 		return false;
// 	}
$select = " select * from t_user where username = '$user' and password = '$pwd' ";
$rs =mysqli_query($link,$select);
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
session_start();
	


	// $users = $_GET['username'];
	// $pwd =  $_GET['password'];



	$users = $_POST['username'];

	$pwd =  $_POST['password'];
	// echo $users;
	// echo $pwd;
	console.log("fasdf");
	//echo '--';
	if(login($users,$pwd)){
		echo "登入成功";
		$_SESSION['username'] = $users;
		console.log($_SESSION['username']);
		
	// 	if(setcookie("username",$users))
	// 	echo "以创建cookie";

	// 	echo "<br>".$_COOKIE['username'];
	// }else{
	// 	echo "登入失败,";
	}else{
		echo 'false';

	}
 ?>

