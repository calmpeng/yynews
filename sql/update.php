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
?><?php 
//注册执行操作
//即把用户注册信息插入到user表里
function register($user,$pwd,$qq,$sex,$iphone){
$link = db_connect();
	if(!$link){
		//报告错误信息
	}
$regtime = time();

$update = " update  t_user set password='$pwd' , qq='$qq',regtime= '$regtime',sex='$sex',iphone='$iphone' where username='$user' ";
//var_dump($updata);
	if(!@mysqli_query($link,$update)){
		echo $update;
		exit('修改数据失败'.mysqli_error($link));
		return false;
	}
return true;
}

function updatecategoty($oldname,$newname){
	$link = db_connect();
	if(!$link){
		//
		//echo "errro";
	}
	$regtime  = time();
	$sql = "update t_categoty set catname='$newname',catime='$regtime' where catname='$oldname'";
	if(!@mysqli_query($link,$sql)){
		exit('修改数据失败'.mysqli_error($link));
		return false;
	}
	return true;
}

function updatetnews($catid,$title,$content,$operator){
	$link = db_connect();
	if(!$link){
		//
	}
	$newtime = time();
	$update ="update  t_news set title='$title',
	content ='$content',$operator=$operator ,newtime=$newtime where catid = $catid";
	
	if(!@mysqli_query($link,$insert)){
		exit('67'.mysqli_error($link));
		return false;
	}
	return true;


}

 ?>
<?php 

 $pwd = $_POST['password'];
 $qq = $_POST['qq'];
 $sex = $_POST['sex'];
 //echo $sex;
 $iphone = $_POST['iphone'];
 //echo $user;
$table = $_GET['table'];
$catid =$_POST['newcatid'];
$title = $_POST['title'];
$content = $_POST['content'];

$operator = $_POST['operator'];
$oldname = $_POST['oldname'];
$newname = $_POST['newname'];

if($table=='t_user'){
$reg_result = register($user,$pwd,$qq,$sex,$iphone);
if($reg_result){
	echo '修改成功';
	echo "<p><a href='javascript:history.go(-1)'> 返回</a></p>";
	// echo "<p><a href='http://localhost/yynews/index.php'> 返回首页</a></p>";
// header('Location:main.php');
}else{
	echo '修改失败';
}
}
// var_dump($table);
// var_dump('t_categoty');
// var_dump($tabel=='t_categoty');
if($tabel=='t_categoty'){
	if(updatecategoty($oldname,$newname)){
		echo '修改成功';
	echo "<p><a href='javascript:history.go(-1)'> 返回</a></p>";
	// echo "<p><a href='http://localhost/yynews/index.php'> 返回首页</a></p>";
// header('Location:main.php');
}else{
	echo '修改失败';
}
}

if($table=='t_news'){
	$result = updatetnews($catid,$title,$content,$operator);

	if($result){
		echo '新闻修改成功';
		echo "<p><a href='javascript:history.go(-1)'> 返回</a></p>";
	}

}


?>
