
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
//注册时，要先检查新用户名$user是否已经存在于$table中
function check_username($user,$table='t_user'){
	$link = db_connect();
	if (!$link) {
		return false;
	}
$select = "select * from $table	where username = '$user'";
$rs = @mysqli_query($link,$select);
	if(!$rs){
	exit('查询出错'.mysqli_error($link));
		return false;
	}
	if(mysqli_num_rows($rs)==0){
		return true;//该用户名可用
	}else{
		return false;//该用户名不可用
	} 
}
?>

<?php 
 $user = $_GET['username'];
 //echo $_GET['username'];
if(check_username($user)){
	echo 1;
}else{
	echo 0;
}
?>



