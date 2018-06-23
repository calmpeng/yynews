
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
function register($user,$pwd,$qq,$sex,$iphone){
$link = db_connect();
	if(!$link){
		//报告错误信息
	}
$regtime = time();

$insert = " insert into t_user values(null,'$user','$pwd','$qq',$regtime,'1','$sex','$iphone') ";
	if(!@mysqli_query($link,$insert)){
		echo $insert;
		exit('插入数据失败'.mysqli_error($link));
		return false;
	}
return true;
}
function insert($catname){
	$link = db_connect();
	if(!$link){
		//
	}
	$regtime = time();
	$insert = "insert into t_categoty values(null,'$catname',$regtime)";
	if(!@mysqli_query($link,$insert)){
		exit('67'.mysqli_error($link));
		return false;
	}
	return true;
}
function insertnews($catid,$title,$content,$operator){
	$link = db_connect();
	if(!$link){
		//
	}
	$newtime = time();
	$insert ="insert into t_news values(null,$catid,'$title','$content',$newtime,$operator) ";
	if(!@mysqli_query($link,$insert)){
		exit('67'.mysqli_error($link));
		return false;
	}
	return true;


}

 ?>
<?php 
 $user = $_POST['username'];
 $pwd = $_POST['password'];
 $qq = $_POST['qq'];
 $sex = $_POST['sex'];
 //echo $sex;
 $iphone = $_POST['iphone'];
 //echo $user;
$catname = $_POST['catname'];
$table = $_GET['table'];
$catid =$_POST['newcatid'];
$title = $_POST['title'];
$content = $_POST['content'];

$operator = $_POST['operator'];

if($table=='t_user'){
$reg_result = register($user,$pwd,$qq,$sex,$iphone);
if($reg_result){
	echo '注册成功';
	echo "<p><a href='javascript:history.go(-1)'> 返回</a></p>";
	// echo "<p><a href='http://localhost/yynews/index.php'> 返回首页</a></p>";
// header('Location:main.php');
}else{
	echo '注册失败';
}
}
if($table=='t_categoty'){
	$result = insert($catname);
	if($result){
		echo '新闻类别插入成功';
		echo "<p><a href='javascript:history.go(-1)'> 返回</a></p>";

	}
}
if($table=='t_news'){
	//var_dump($catid,$title,$content,$operator);

	$result = insertnews($catid,$title,$content,$operator);

	if($result){
		echo '新闻插入成功';
		echo "<p><a href='javascript:history.go(-1)'> 返回</a></p>";
	}
}


