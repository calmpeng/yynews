<!--数据库表sql    qqnews
 mysql -u root -p
use yynews;

create table t_user(
id int auto_increment primary key,
username char(12) not null,
password char(32) not null,
qq char(30) not null,
regtime int,
Role  char(1) not null

 )charset=utf8;

 insert into user values(null,'pengxiang','6554725','1723792756',12345678,'0'); 
insert into user values(null,'pengguang','6554725','451946155',123456789,'1');
insert into user values(null,'penglu','6554725','945310072',1234567890,'1');


-->

<!-- <?php 

define('HOST','localhost');
define('USER','root');
define('PWD',';');
define('CHARSET','utf8');
define('DB','yynews');
define('TIMEZONE','PRC');
?> -->

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
$link = db_connect();
var_dump($link);
 ?> 





 
<!-- 
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
if(check_username($_POST['username'])){
	echo '该用户名可用';
}else{
	echo '该用户名不可用';
}
?>




 <?php 
//注册执行操作
//即把用户注册信息插入到user表里
function register($user,$pwd,$email){
$link = db_connect();
	if(!$link){
		//报告错误信息
	}
$regtime = time();
$insert = " insert into user values(null,'$user','$pwd','$email',$regtime) ";
	if(!@mysqli_query($link,$insert)){
		echo $insert;
		exit('插入数据失败'.mysqli_error($link));
		return false;
	}
return true;
}
 ?>

<!--测试
 <?php 
$reg_result = register('lisi','999','999@qq.com');
if($reg_result){
	echo '注册成功';
// header('Location:main.php');
}else{
	echo '注册失败';
}
 ?> -->

<?php 
//登录
function login($user,$pwd){
$link = db_connect();
$select = " select * from user where username = '$user' and password = '$pwd' ";
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
//找回密码
function find_pwd($user){
$link = db_connect();
$select = " select * from user where username = '$user' ";
$rs =@mysqli_query($link,$select);
	if(!$rs){
exit('查询失败'.mysqli_error($link));	return false;
	}
	if(mysqli_num_rows($rs)==0){
		return false;
	}
$arr = mysqli_fetch_row($rs);
return $arr[2]; 
}

?>

<!--测试 <?php 
echo find_pwd('zhangsan');
 ?> -->
 -->