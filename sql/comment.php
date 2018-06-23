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
function getcomment($i){
$link = db_connect();
	if(!$link){
		//报告错误信息
	}
$sql = " select content from t_news where newsid=$i ";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result);
//echo $row[0];
echo '<div style="overflow:auto; height:150px;width:470px;">'.$row[0].'</div>';

}
?>
<?php 
$i = $_GET['i'];
getcomment($i);

 ?>









