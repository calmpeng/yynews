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
function select($t_info){
$link = db_connect();
	if(!$link){
		//报告错误信息
	}
$select = " select * from  $t_info ";
$result = mysqli_query($link,$select);

// echo '<div ><input  type="button" value ="增加" onclick="revise(this.value)">
// 				<input type="button" value="删除" onclick="revise(this.value)">
// 			<input type="button" value="修改" onclick="revise(this.value)">
// 		<input type="button" value="查看" onclick="revise(this.value)" style="margin-right: 0px;"></div>';
if($t_info=='t_user'){
$j = 0;
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
while(($row = mysqli_fetch_array($result)) && $j<18){
	echo '<tr><td>'.$row[0].'</td>';
	echo '<td>'.$row[1].'</td>';
	echo '<td>'.$row[2].'</td>';
	echo '<td>'.$row[3].'</td>';
	echo '<td>'.$row[4].'</td>';
	echo '<td>'.$row[5].'</td>';
	echo '<td>'.$row[6].'</td>';
	echo '<td>'.$row[7].'</td></tr>';
	$j++;

}
echo '</table>';
}


if($t_info == 't_categoty'){
	$j = 0;
echo '<table border="1px" align ="center"><caption align="top"> 新闻类别表</caption>';
echo '<tr>
		<th>catid</th>
		<th>catname</th>
		<th>cattime</th>
		
	</tr>';
while(($row = mysqli_fetch_array($result)) && $j<8){
	echo '<tr><td>'.$row[0].'</td>';
	echo '<td>'.$row[1].'</td>';
	echo '<td>'.$row[2].'</td></tr>';
	$j++;
}
echo '</table>';

}


if($t_info == "t_news"){
echo '<script>alert("fasdf");</script>';
$j = 0;
echo '<table border="1px" align ="center">';
echo '<caption align="top"> 新闻表</caption>';
echo '<tr>
		<th>newsid</th>
		<th>catid</th>
		<th>title</th>
		<th>content</th>
		<th>newtime</th>
		<th>operator</th>
		
	</tr>';
while(($row = mysqli_fetch_array($result)) && $j<8){
	echo '<tr><td>'.$row[0].'</td>';
	echo '<td>'.$row[1].'</td>';
	echo '<td>'.$row[2].'</td>';
	echo '<td>'.$row[3].'</td>';
	echo '<td>'.$row[4].'</td>';
	echo '<td>'.$row[5].'</td></tr>';
	$j++;

}
echo '</table>';
}

}
 ?>
 <?php 
 $i = $_GET['info'];
 $info = select($i);
 //echo $i;
 // var_dump($i);
 // var_dump("t_news");
 // var_dump($t_info == "t_news");
//echo $i;
 //var_dump($i);




  ?>
