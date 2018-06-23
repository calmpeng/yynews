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
function delete($username){
	$link = db_connect();
	$sql = "delete from t_user where username='$username'";
	if(!@mysqli_query($link,$sql)){
		exit('删除数据失败'.mysqli_erro($link));
		return false;
	}
	return true;

}

function deletecategoty($catname){
	$link = db_connect();
	$sql  = "delete from t_categoty where catname='$catname'";
	if(!@mysqli_query($link,$sql)){
		exit('删除数据失败'.mysqli_erro($link));
		return false;
	}
	return true;


}
function deletenew($newid){
	$link = db_connect();
	$sql  = "delete from t_news where newsid='$newid'";
	if(!@mysqli_query($link,$sql)){
		exit('删除数据失败'.mysqli_erro($link));
		return false;
	}
	return true;

}
 ?>
<?php 
$USER = $_POST['username'];
$table=$_GET['table'];
$catname = $_POST['catname'];
$newid = $_POST['newid'];

if($table=='t_user'){
if(delete($USER)){
	echo '删除成功';
	echo "<p><a href='javascript:history.go(-1)'> 返回</a></p>";
}else{
	echo '删除失败';
}
}
// var_dump($table);
//var_dump('t_categoty');
//var_dump($table=='t_categoty');
if($table=='t_categoty'){
	if(deletecategoty($catname)){
		echo '删除成功';
	echo "<p><a href='javascript:history.go(-1)'> 返回</a></p>";
	}else{
	echo '删除失败';
}
}
var_dump($table);
var_dump('t_news');
var_dump($tabel=='t_news');
if($tabel=='t_news'){
	if(deletenews($newid)){
		echo '删除成功';
		echo "<p><a href='javascript:history.go(-1)'> 返回</a></p>";
	}else{
	echo '删除失败';

	}
}

 ?>




