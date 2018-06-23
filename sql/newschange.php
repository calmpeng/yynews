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
function news($catid)
 {
 	$link = db_connect();
 	$sql = 'select title,newtime,newsid from t_news where catid = '.$catid;
 	//echo $sql;
 	$result = mysqli_query($link,$sql);
 	// $row = mysqli_fetch_array($result);
 	// if(!$row){
 	// 	echo '无';

 	// }else{
 	// 	while()
 	// 	echo $row[0];
 	// }

	//echo '<ul id="newstitle">';
	$i = 0;
	 $row = mysqli_fetch_array($result);
	 echo '<li><a id ="numberone" name ="'.$row[2].' "href="javascript:void(0)"onclick = " comment('.$row[2].');" >'.$row[0].'</a><li>'.$row[1].'</li>';
 	
 	while(($row = mysqli_fetch_array($result))&&$i<9){
 		$i++;
 		echo '<li><a name ="'.$row[2].' "href="javascript:void(0)"onclick = " comment('.$row[2].');" >'.$row[0].'</a><li>'.$row[1].'</li>';
 	}
 	//echo '</ul>';

 } ?><?php 
$catid = $_GET['catid'];
//echo '<br>'.$catid;
news($catid);





 ?>