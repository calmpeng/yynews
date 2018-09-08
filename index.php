<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>云影新闻网</title>
	<link rel="stylesheet" href=./css/reset.css>
	<style>
	#container{
		width:1190px;
		margin: 0 auto;
		
	}
	#nav{
		width: 1190px;
	}

	#nav li {
		
		float:left;
	}

	#nav li a {


		font-size: 16px;

		line-height: 37px;
		font-family: 微软雅黑, 黑体, sans-serif;
		color:#363636;
		display: block;
		width:170px;
		height: 37px;
		text-align: center;
		background-color: #74d5f2;
	}

	#nav  li a:hover {
		
		background: url(./images/1.gif);
	}

	.clr {
		clear: both;
		width: 0px;
		height: 0px;
		overflow: hidden;
	}

	#main{
		height: 505px;
		width: 1190px;
		background: white;
		margin-top: 10px;

	}
	#left{
		float: left;
		height: 500px;
		width: 830px;
		background: gray;
	}
	#right{
		font-size: 16px;
		float: right;
		height:500px;
		width:350px;
		background: white;
	}
	#news{
		color: #3199fa;
		float:left;
		margin: 5px 5px;
		width: 475px;
		height: 490px;
		background: #e9f0f3;


	}
	#news p{
		height:30px;
		width: 475px;
		background:url(./images/bar.jpg);
		font-size: 16px;
		color: #2b3233;
		line-height:30px;
		text-align: atuo;

		

	}
	#news p a{
		float: right;
	}
	#news img{
		float: left;
		margin:0px 1px;
	}

	#newstitle{
		margin-top: 5px;
		float: left;
		margin:1px 0px 10px 1px;
		color: black;
	}
	#newstitle li {
		font-size: 12px;
		margin-right: 30px;

	}
	#summary{
		height: 300px;


	}
	#comment{
		height: 190px;

	}	

	#jianjie{
		float: right;
		width: 330px;
		height: 490px;	
		margin: 5px 5px;

		
		background: #bbe5f1;
		font-size: 16px;
		color: #2b3233;
		line-height:30px;
		text-align: atuo;
	}
	#jianjie p{
		height:30px;
		
		background:url(./images/bar.jpg);
		font-size: 16px;
		color: #2b3233;
		line-height:30px;
		text-align: atuo;


	}
	#right{
		float:right;
		width: 345px;
		height: 495px;
		background:  #73bce5;

	}

	#login{
		/*float:right;
		width: 345px;
		height: 495px;
		background:  green;*/


	}
	#logininfo{
		text-align: center;
		

	}
	#loginnameinfo{
		float: right;
		text-align: center;

	}
	#right p{
		/*font:16px/30px;
		text-align: atuo;*/
		line-height: 30px;
		text-align: atuo;
		height:30px;
		width:345px ;
		margin: 0px;
		/*background: #ace0de;*/
		/*dd*/
		background: url(./images/yhdl.jpg);
	}
	#login p{
		/*font:16px/30px;
		text-align: atuo;*/
		line-height: 30px;
		text-align: atuo;
		height:30px;
		width:345px ;
		margin: 0px;
		/*background: #ace0de;*/
		background: url(./images/yhdl.jpg);
	}


	#footer ul li{
		float: left;

	}
	#footer ul li a {


		font-size: 16px;
		line-height: 37px;
		font-family: 微软雅黑, 黑体, sans-serif;
		color:#363636;
		display: block;
		width:170px;
		height: 37px;
		text-align: center;
		background-color: #74d5f2;
	}
	#footer ul li a:hover{
		background: url(./images/1.gif);
	}

	#over{
		text-align:center;
		font-size: 16px;

		height: 20px;
		/*background: #1069b4;*/
		background: url(./images/1.gif);
	}


	
</style>
</head>


<body>

	<div id = "container">
		<div id="header">
			<img src="./images/logo1.jpg" alt="erro">
			<ul id="nav">
				<li><a href="#">首页</a></li>
				<li><a href="#" onclick="return newschange(1);">校园新闻</a></li>
				<li><a href="#" onclick="return newschange(2);">体育新闻</a></li>
				<li><a href="#"onclick="return newschange(3);">社会新闻 </a></li>
				<li><a href="#" onclick="return newschange(4);">国际新闻</a></li>
				<li><a href="#">在线评论</a></li>
				<li><a href="./background.php">后台管理</a></li>
			</ul>
		</div>

		
		<div class="clr"></div>

		<div id="main" >
			<div id ="left" >


				<div id="news" >
					<div id="summary">	
					<p>校园新闻<a href="">更多></a></p>
					<div>
						<div><img src="./images/xyxy.jpg" alt="erro"></div>
						<div>
							<ul id="newstitle">
								<!-- <li><a href="" >新闻标题1</a></li><li>time</li>
								<li><a href="">新闻标题2</a></li><li>time</li>
								<li><a href="">新闻标题3</a></li><li>time</li>
								<li><a href="">新闻标题3</a></li><li>time</li>
								<li><a href="">新闻标题3</a></li><li>time</li> -->
							</ul>
						</div>			

					</div>
					</div>
					<div id="comment">
					<p>内容</p>
				</div>	



				</div>

				
				<div id="jianjie" >
					<p>网站简介<a href="">更多>></a></p>
					<h3>这是一个练习网站。</h3>


				</div>


				
			</div>
			<!-- <div class="clr"></div> -->
			<div id="right">
				<div id ="login">
					<?php 
					session_start();
					//var_dump($_SESSION['username']);
					if(!isset($_SESSION['username'])){
						echo '<p >用户登录</p>
					<form >
						<table align="center" border="0px"  cellspacing="10px" cellpadding="5px"
						>
						<!-- <caption>用户登录</caption>
						--><tr>
							
							<td>用户名：</td>
							<td><input type="text" name="userid"></td>
						</tr>
						<tr>
							
							<td>密码：</td>
							<td><input type="password" name="password">
							</td>
						</tr>
						<tr><td></td>
							<td><input type="button" value="登录" onclick="login();">

								<input type="reset" value="重置">
							</td>
						</tr>
					</table>
					
				</form>';

					}else{
						echo '<p>你已成功登录&nbsp;&nbsp;	<a  href="#"onclick=\'return sessiondie();\'>注销</a></p> <div style=\'width:345px; height:66px; background:pink;text-align: center;line-height:66px;font-size:20px;\'>欢迎你的到来！</div>';

  	 				}

					


					 ?>

					
				

				</div>
				<div id="logininfo"></div>
				<hr style="margin:0px">
				<!-- " -->
				<form  action="./sql/registered.php" method="post"onsubmit="return registered();">


				<div id="reg">

					<p>用户注册</p>
					<table border="0px" align="center">
						<!-- <caption>用户注册</caption> -->
						<tr >
							<td >用户名：</td>
							<td ><input type="text" id="newusername" name="username" onkeyup ="loginname()"></td>
							<div id="loginnameinfo" ></div>

						</tr>
						<tr>
							<td >密码：
							</td>
							<td><input type="text" name="password"></td>
						</tr>
						<tr>
							<td >重复密码：
							</td>
							<td><input type="text" name="password"></td>
						</tr>
						<tr>
							<td>性别：</td>
							<td><input type="radio" name = "sex" value="男">男
								<input type="radio" name="sex" value="女">女</td>
							</tr>
							<tr>
								<td>电话：</td>
								<td><input type="text" name="iphone"></td>
							</tr>
							<tr>
								<td>QQ:</td>
								<td><input type="text" name="qq"></td>
							</tr>


							<tr>
								<td></td>
								<td><input type="submit" id="submit1" value = "提交" onclick = "return registered();" >
									<input type="reset" value="重置"></td>
								</tr>

							</table>

						</form>
						<hr style="margin:0px">
						</div>


						<!-- <div class="clr"></div>	 -->
						<div>
							<p>系统公告</p>

						</div>
					</div>



				</div>
				<div class='clr'></div>
				<div id="footer">
					<ul>
						<li><a href="">结束1</a></li>
						<li><a href="">结束2</a></li>
						<li><a href="">结束3</a></li>
						<li><a href="">结束4</a></li>
						<li><a href="">结束5</a></li>
						<li><a href="">结束6</a></li>
						<li><a href="">结束7</a></li>
					</ul>
					<div class="clr"></div>	
					<p id="over">copyright&nbsp;计科1604&nbsp;201602030222&nbsp;&nbsp;&nbsp;彭翔</p>
				</div>
			</div>



		</body>
		<script>
			function loginname() {
		//alert("---");
		var username = document.getElementById("newusername").value;
		
		var xmlhttp = null;
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest;
		}
		else{
			xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
		}
		url = './sql/registeredname.php?username='+username;
		xmlhttp.open('get',url,true);
		xmlhttp.send(null);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 &&xmlhttp.status ==200){
				//console.log(xmlhttp.responseText);
				if(xmlhttp.responseText == true){
					document.getElementById("loginnameinfo").innerHTML = '可用';
				}else{
					document.getElementById("loginnameinfo").innerHTML = "不可用";
				}
				
				  //alert( xmlhttp.responseText);
				 // alert('不可用');
				 // alert(typeof	(xmlhttp.responseText=='不可用') );
				if(xmlhttp.responseText==false
					){document.getElementById("submit1").disabled=true;}else{document.getElementById("submit1").disabled=false;}
			}
		}

	}
	
</script>

</html>

<script>

	(function(i){
		//alert('fdsa');
		newschange(i);

	})(1);

	function newschange(i) {
		// body...
	 //alert(i);

	var xmlhttp = null;
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = ActiveObject('Microsoft.XMLHTTP');
	}
	url = './sql/newschange.php?catid='+i;
	xmlhttp.open('get',url,true);
	xmlhttp.send(null);

	xmlhttp.onreadystatechange = function(){

		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			
			//alert(xmlhttp.responseText);
			var info = xmlhttp.responseText.replace(/^\s+|\s+$/,"");

			//alert(info);

			document.getElementById('newstitle').innerHTML = info;
			comment(document.getElementById('numberone').name);



			
		}
	}


	}



	function comment(i){

		var xmlhttp = null;
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		url = './sql/comment.php?i='+i;
		xmlhttp.open('get',url,true);
		xmlhttp.send(null);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.status==200 && xmlhttp.readyState ==4){
				var info = xmlhttp.responseText.replace(/^\s+|\s+$/g,"");
				document.getElementById('comment').innerHTML = '<p>内容</p>'+info;

			}
		}




	}
</script>
<script>
	
	function login(){
	// var str = document.getElementsByName('userid')[0].value+"#"+document.getElementsByName('password')[0].value;

	var username = document.getElementsByName('userid')[0].value;
	var password = document.getElementsByName('password')[0].value;
	var xmlhttp = null;    
	if (window.XMLHttpRequest)
  	{//主流浏览器

  		xmlhttp=new XMLHttpRequest();
  	}
  	else
  	{
  		//早期ie
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
  	url = './sql/login.php';
  	//url = './sql/login.php?username='+username+'&password='+password;
	xmlhttp.open("post", url, true);
  	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  	var param = 'username='+username+'&password='+password;
  	xmlhttp.send(param);
  	 //事件 事件回调函数
  	 xmlhttp.onreadystatechange=function()
  	 {
  	 	if (xmlhttp.readyState==4 && xmlhttp.status==200)
  	 	{
  	 		//alert('fdas');
  	 		//document.getElementById("logininfo").innerHTML=xmlhttp.responseText.replace(/^\s+|\s+$/,"");
  	 		console.log(xmlhttp.responseText.replace(/^\s+|\s+$/g,""));
  	 		//console.log('fdsaf');
  	 		console.log(xmlhttp.responseText.replace(/^\s+|\s+$/g,""));
  	 		if('false'==xmlhttp.responseText.replace(/^\s+|\s+$/g,"")){
  	 			document.getElementById("logininfo").innerHTML='账号密码错误，请重试！';
  	 		}else{
  	 		
  	 		
  	 		//console.log('fdsaf');

  	 		document.getElementById("login").innerHTML="<p>你已成功登录&nbsp;&nbsp;	<a href=\'http://localhost/yynews/index.html\' onclick='return sessiondie();'>注销</a></p> <div style='width:345px; height:66px; background:pink;text-align: center;line-height:66px;font-size:20px;'>欢迎你的到来！</div>";
  	 		document.getElementById("logininfo").innerHTML='';
  	 	}

  	 	}
  	 }

  	}





  </script>

<script>
	
</script>




  <script>
  	function registered(){

  		var Name=/^[a-zA-Z0-9]{1,11}$/;
		var Password=/^[a-zA-Z0-9]{6,11}$/;
		var Num=/^[0-9]{11}$/;
		var QQ = /^[0-9]{9,13}$/;
		if(!Name.test(document.getElementById('newusername').value)){
			alert("名字格式错误，字母数字11位以内");
			return false;}
		if(!Password.test(document.getElementsByName('password')[1].value)){
			alert("密码格式错误，字母数字6到11位");
			return false;}
		if(document.getElementsByName('password')[1].value!=document.getElementsByName('password')[2].value){
			alert("密码第一次和第二次不符");
			return false;}
		if(document.getElementsByName('sex')[0].checked!=true&&document.getElementsByName('sex')[1].checked!=true){
			alert("请选择性别");
			return false;
		}
		if(!Num.test(document.getElementsByName('iphone')[0].value)){
			alert("电话号码格式错误,正确示例15729881612");
			return false;
		}
		if(!QQ.test(document.getElementsByName("qq")[0].value)){
			alert("qq号码格式错误，9到13位")
			return false;
		}



	// var username = document.getElementById("newusername").value;
	// var password = document.getElementsByName("password")[1].value;
	// var sex =null;

	// if(document.getElementsByName("sex")[0].checked==true){	 sex = document.getElementsByName("sex")[0].value }else{sex = document.getElementsByName("sex")[1].value};
	// var iphone = document.getElementsByName("iphone")[0].value;
	// var qq = document.getElementsByName("qq")[0].value;
	// var xmlhttp = null;

	// if(window.XMLHttpRequest){
	// 	xmlhttp = new XMLHttpRequest();
	// }else{
	// 	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	// }

	// url = './sql/registered.php';
	// xmlhttp.open("post",url,true);
	// xmlhttp.setRequestHeader('COntent-Type','application/x-www-form-urlencoded');
	// var param = 'username='+username+'&password='+password+'&sex='+sex+'&iphone='+iphone+'qq='+qq;
	// xmlhttp.send(param);
	

	// xmlhttp.onreadystatechange = function(){
		
	// 	if(xmlhttp.readyState==4 && xmlhttp.status==200){
	// 		alert("fasdfsadfasdfdsa");
	// 		document.getElementById("reg").innerHTML = "<p>lsfkadjl</p>";
			
	// 	}
	// }


		}
  	


  </script>
<script>
	function sessiondie() {
	var xmlhttp = null;    
	if (window.XMLHttpRequest)
  	{//主流浏览器

  		xmlhttp=new XMLHttpRequest();
  	}
  	else
  	{
  		//早期ie
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
  	url = './sql/sessiondie.php';
  	//url = './sql/login.php?username='+username+'&password='+password;
	xmlhttp.open("get", url, true);
	xmlhttp.send();
 
  	 //事件 事件回调函数
  	 xmlhttp.onreadystatechange=function()
  	 {
  	 	if (xmlhttp.readyState==4 && xmlhttp.status==200)
  	 	{
			//alert('fds');
  	 		//document.getElementById("logininfo").innerHTML=xmlhttp.responseText.replace(/^\s+|\s+$/g,"");
  	 		console.log(xmlhttp.responseText.replace(/^\s+|\s+$/g,""));
  	 		console.log();
  	 		var html =' <p >用户登录</p><form >					<table align="center" border="0px"  cellspacing="10px" cellpadding="5px"			><!-- <caption>用户登录</caption>--><tr>	<td>用户名：</td><td><input type="text" name="userid"></td></tr><tr>	<td>密码：</td><td><input type="password" name="password">		</td></tr><tr><td></td><td><input type="button" value="登录" onclick="login();">	<input type="reset" value="重置"></td></tr></table>		</form>';


  	 		document.getElementById('login').innerHTML=html;
  	 		//alert('fds');
  	 		// document.getElementById("login").innerHTML="<p>你已成功登录&nbsp;&nbsp;	<a href=\'http://localhost/yynews/index.php\' onclick='return sessiondie();'>注销</a></p> <div style='width:345px; height:66px; background:pink;text-align: center;line-height:66px;font-size:20px;'>欢迎你的到来！</div>";
  	 		//location.href = 'http://localhost/yynews/index.php';
  	 		return false;

  	 	}
  	 

  	}
  	return false;



	}
</script>
<script>
		
// setTimeout（'comment(document.getElementById('numberone').name)',1000）;

	// 	(function(i){
	// 	//alert('fdsa');
	// 	alert(i);
	// 	comment(i);

	// })(document.getElementById('numberone').name);



</script>
