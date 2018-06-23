<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="./css/reset.css">
	<title>后台管理
	</title>
	<style>
	#top{
		width: 1190px;
		height: 200px;
		background: #4aa0f9;

	}
		#login{
			
			font-size: 20px;
			height: 400px;
			width: 1190px;
			background-color: beige;

		}
		.button{
			/*background-color: #4aa0f9;
			*/
			color: black;
			/*padding: 15px 32px;*/
			text-align: center;
			/*display: inline-block;*/
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div align="center">
		<div id="top"> <div style="text-align: center;    line-height: 200px;
    font-size: 40px;">后台管理登录</div></div>
		<div id="login" style="margin-top: 100px;">
			<form action="" method="post" onsubmit="return login();">
				<table border="0px" >
					<tr>
						<td>用户名：</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>密码：</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="button" type="submit" value="登录"><input class="button"  type="reset" value="重置">	</td>
					</tr>
				</table>
			</form>

			<div id="logininfo" 
			style="margin-top: 20px;">
				<!-- <?php  
				@$i=$_GET['i'];
				//var_dump($i == 'false');
				if($i == 'false'){
					echo '账号密码错误，请重新输入!';
				}
				?>		 -->
			</div>	
		</div>
	</div>
</body>
</html>

<script>

	function login() {
		// body...
		var name = /^[a-zA-Z0-9]{1,11}$/;
		var password = /^[a-zA-Z0-9]{6,11}$/;
		if(!name.test(document.getElementsByName('username')[0].value)){
			alert("名字格式错误，字母数字11位以内");
			return false;			
		}if(!password.test(document.getElementsByName('password')[0].value)){
			alert("密码格式错误，字母数字6到11位");
			return false;
		}
		return true;
	}
</script>

<?php 
include('./sql/config.php');
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
//登录
function login($user,$pwd){
$link = db_connect();
$select = " select * from t_user where username = '$user' and password = '$pwd' and Role='0' ";
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

 $user = $_POST['username'];
 //var_dump($_POST['username']);
 $pwd = $_POST['password'];
 if(!isset($_POST['username'])||!isset($_POST['password'])||$_POST['username']==''){
 	
 		return ;
 }
 // if($user==null){
 // 		echo '<script>document.getElementById("logininfo").innerHTML="";</script>';
 // 		return false;
 // }
 	

 if(login($user,$pwd)){
 	console.log('成功登录') ;

 	echo '<meta http-equiv="refresh" content="0;URL=\'http://localhost/yynews/backgroundmanage.php\'" >';

 }else{
 	console.log('失败登录');
 	// echo '<meta http-equiv="refresh" content="0;URL=\'http://localhost/yynews/background.php?i=false\'" >';
 	echo '<script>alert(\'账号密码错误，请重新输入!\');</script>';
 	//echo '<script>document.getElementById("logininfo").innerHTML="账号密码错误，请重新输入!";</script>';
 }
$user = null;
$pwd = null;
$_POST['username']=null;
$_POST['password']=null;

	


 ?>



