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
<!-- 
<?php 
$link = db_connect();
var_dump($link);
echo "ok"
 ?>  -->



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

<!-- 
<?php 
$a = $_POST['username'];
echo "13465";
echo $a;
if(check_username($_POST['username'])){
	echo '该用户名可用';
}else{
	echo '该用户名不可用';
}
 ?> 
 -->


 <?php 
//注册执行操作
//即把用户注册信息插入到user表里
function register($user,$pwd,$qq,$role = '0'){
$link = db_connect();
	if(!$link){
		//报告错误信息
	}
$regtime = time();
$insert = " insert into t_user values(null,'$user','$pwd','$qq',$regtime,$role) ";
	if(!@mysqli_query($link,$insert)){
		echo $insert;
		exit('插入数据失败'.mysqli_error($link));
		return false;
	}
return true;
}
 ?>


<!-- 
 <?php 
$reg_result = register('lisi','999','999@qq.com');
if($reg_result){
	echo '注册成功';
// header('Location:main.php');
}else{
	echo '注册失败';
}
 ?>  -->





<?php 
//登录
function login($user,$pwd){
$link = db_connect();
$select = " select * from t_user where username = '$user' and password = '$pwd' ";
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
$select = " select * from t_user where username = '$user' ";
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
<!-- 
<?php 
echo find_pwd('pengxiang');
 ?> 

 -->
