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
//注册执行操作
//即把用户注册信息插入到user表里
function register($user){
$link = db_connect();
	if(!$link){
		//报告错误信息
	}
$update = "select * from t_user where username='$user'";
$result = mysqli_query($link,$update);
echo '<table border="1px" align ="center"><caption align="top"> 系统用户表</caption>';
echo '<tr>
		<th>id</th>
		<th>username</th>
		<th>password</th>
		<th>qq</th>
		<th>regtime</th>
		<th>role</th>
		<th>sex</th>
		<th>iphone</th>
	</tr>';
	while($row = mysqli_fetch_array($result))
	//var_dump($row);
	echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td></tr>';
echo '</table>';
	

}
 ?>
<?php 
 $user = $_GET['username'];
 $reg_result = register($user);
 echo '<p><a href="javascript:history.go(-1)">返回</a></p>';
?>

