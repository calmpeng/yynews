<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./css/reset.css">
	<title>后台管理</title>
	<style>
		#content{
			width: 1190px;
			margin:0px auto;
			background-color: #bad7df;

			

		}
		#header{
			width: 1190px;
			height: 100px;
			font-size: 30px;
			line-height: 100px;
			text-align: center;
			background-color: #53bdf8 ;
		}
		#main{
			width: 1190px;
			height: 500px;
		}
		#left {
			float: left;
			width: 170px;
			height: 490px;
			margin: 5px 0px;
		}
		/*#left ul{
			
			width:170px;
			height: 70px;
		}
*/		#left ul li a{
		font-size: 16px;

		line-height: 70px;
		font-family: 微软雅黑, 黑体, sans-serif;
		color:#363636;
		display: block;
		width:170px;
		height: 70px;
		text-align: center;
		background-color: #60bfff;

		}
		#left ul li a:hover{
			background-color: #e6eef5;
		}
		#right{
			width: 1015px;
			height: 490px;
			background-color: #a8e6cf;
			float: left;
			margin: 5px 0px 5px 5px ;

		}
		#info1 input{
			width: 100px;
			margin-right: 198px;
		}

		#footer{
			height: 30px;

		}
		#over{
			text-align: center;
			font-size: 16px;
			line-height: 30px;
		}
		#info{
			font-size:16px;
		}


		

	</style>
</head>
<body>
	<div id="content" >
		<div id="header" >
			<p>后台管理</p>
			
		</div>
		<div id="main">
			<div id="left" >
				
						<ul>
							<li><a href="" onclick="return t_user('t_user');">系统用户管理</a></li>
							<li><a href="" onclick="return t_user('t_categoty');">新闻类别管理</a></li>
							<li><a href=""onclick="return t_user('t_news');">新闻内容管理</a></li>
							<li><a href="" onclick="return t_user('t_comment');">评论管理</a></li>
							<li><a href="">管理5</a></li>
							<li><a href="">管理6</a></li>
							<li><a href="">管理7</a></li>
						</ul>
					
				
			</div>

			<div id="right">
				<!-- <div><input  type="button" value ="增加" onclick="revise(this.value)">
				<input type="button" value="删除" onclick="revise(this.value)">
			<input type="button" value="修改" onclick="revise(this.value)">
		<input type="button" value="查看" onclick="revise(this.value)" style="margin-right: 0px;"></div> -->
				<div id="info1"></div>				<div id="info"> 内容展示，你不戳一下左边吗</div>

				
			</div>
		</div>

			<div id="footer">
				<p id="over">copyright&nbsp;计科1604&nbsp;201602030222&nbsp;&nbsp;&nbsp;彭翔</p>
				
			</div>
			


		


	</div>
	
</body>
</html>

<script>
	function t_user(i) {
		// body...
		var info = ''+i;
		var xmlhttp = null;
		if(window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}else{
			xmlhttp = new ActionXObject("Microsoft.XMLHTTP");
		}
		url = './sql/guanli.php?info='+info;
		xmlhttp.open("get",url,true);
		xmlhttp.send(null);
		xmlhttp.onreadystatechange = function(){
			
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){

				//alert('fasd');
				var info = xmlhttp.responseText.replace(/^\s+|\s+$/g,"");
				console.log(info);
				var info1 = '<div ><input  type="button" value ="增加" name='+i+'  onclick="revise(this.value,this.name)"><input type="button" value="删除" name='+i+' onclick="revise(this.value,this.name)"><input type="button" value="修改" name='+i+' onclick="revise(this.value,this.name)"><input type="button" value="查看" name='+i+' onclick="revise(this.value,this.name)" style="margin-right: 0px;"></div>';


				document.getElementById('info1').innerHTML = info1;

				document.getElementById('info').innerHTML = info;


			}
		}
		return false;

	}
</script>
<script type="text/javascript">
	function revise(i,name) {
		var info = i;
		//alert(typeof(info));
		//alert(name);
		if(name=='t_user'){
		if(info == '增加'){
			var html = '<div id="reg"><form method="post" action="./sql/registered.php?table='+name+'"><fieldset><legend>添加用户</legend>用户名：<input type="text" id="newusername"  name="username" ></td></tr><tr><td>密码：<input type="text"   name="password"></td></tr><tr><td>重复密码：<input type="text"  name="password"></td></tr>性别：<input type="radio" name="sex" value="男">男<input type="radio" name="sex" value="女">女 电话：<input type="text" name="iphone"> QQ:<input type="text"name="qq"><input type="submit"id="submit1" value="提交"onclick="return registered();"><input type="reset"value="重置"><p id="loginnameinfo"></p></fieldset></form></div>';
			document.getElementById('info').innerHTML = html;



		}else if(info == '删除'){
			var html ='<form action="./sql/delete.php?table'+name+'" method="post"><fieldset><legend>根据用户名删除</legend><tr><td>用户名：<input type="text" name="username"></td></tr><input type="submit"id="submit1" value="提交"onclick="return registered();"></fieldset></form>';
			document.getElementById('info').innerHTML = html;



		}else if(info == '修改'){


			var html = '<form  method="post" action="./sql/update.php?table='+name+'" ><fieldset><legend>根据用户名修改</legend> 用户名：<input type="text" id="newusername"  name="username" ></td></tr><tr><td>密码：<input type="text"   name="password"></td></tr><tr><td>重复密码：<input type="text"  name="password"></td></tr>性别：<input type="radio" name="sex" value="男">男<input type="radio" name="sex" value="女">女 电话：<input type="text" name="iphone"> QQ:<input type="text"name="qq"><input type="submit" value="提交""><input type="reset"value="重置"><p id="loginnameinfo"></p></fieldset></form></div>';
			document.getElementById('info').innerHTML = html;

		}if(info == '查看'){
			var html ='<form action="./sql/select.php?table='+name+'" method="post"><fieldset><legend>根据用户名查看</legend><tr><td>用户名：<input type="text" name="username"></td></tr><input type="submit"value="提交"></fieldset></form>';
			document.getElementById('info').innerHTML = html;

		}
	}if(name=='t_categoty'){
		if(info == '增加'){
			// var html = '<div ><form method="post" action="./sql/registered.php"><fieldset><legend>添加新闻类别</legend>新闻类别<input type="text" name ="catname">已选中表<input type="text" name ="table" value="'+name+'"><input type="submit" value="提交"><input type="reset"value="重置"><p id="loginnameinfo"></p></fieldset></form></div>';
			// document.getElementById('info').innerHTML = html;
			var html = '<div ><form method="post" action="./sql/registered.php?table='+name+'"><fieldset><legend>添加新闻类别</legend>新闻类别<input type="text" name ="catname">已选中表<input type="text" name ="table" value="'+name+'"><input type="submit" value="提交"><input type="reset"value="重置"><p id="loginnameinfo"></p></fieldset></form></div>';
			document.getElementById('info').innerHTML = html;



		}else if(info =='删除'){
		//alert('fasdf');
				var html ='<form method="post" action="./sql/delete.php?table='+name+'"><fieldset><legend>根据新闻类别名删除</legend><tr><td>新闻类别名：<input type="text" name="catname"></td></tr><input type="submit"id="submit1" value="提交"onclick="return registered();"></fieldset></form>';
			document.getElementById('info').innerHTML = html;

		}else if(info=='修改'){
			var html = '<form method="post" action="./sql/update.php?table='+name+'" ><fieldset><legend>根据新闻类别表修改</legend> 旧新闻类别名：<input type="text" name="oldname"  >新新闻类别名：<input type="text" name="newname"  ><input type="submit" value="提交" "><input type="reset" value="重置"><p id="loginnameinfo"></p></fieldset></form></div>';
			document.getElementById('info').innerHTML = html;
		}


	}else if(name='t_news'){
		if(info =='增加'){
			var html = '<div ><form method="post" action="./sql/registered.php?table='+name+'"><fieldset><legend>添加新闻</legend>新闻类别id：<input type="text" name="newcatid"  >标题：<input type="text"   name="title">内容<textarea name="content" id="content1" cols="160" rows="6"></textarea></textarea>添加人id <input type="text" name="operator">	   <input type="submit"id="submit1" value="提交"onclick="return registered();"><input type="reset"value="重置"><p id="loginnameinfo"></p></fieldset></form></div>';
			document.getElementById('info').innerHTML = html;

		}else if(info =='删除'){
			var html ='<form method="post" action="./sql/delete.php?table='+name+'"><fieldset><legend>根据新闻id删除</legend><tr><td>新闻id：<input type="text" name="newid"></td></tr><input type="submit"id="submit1" value="提交"onclick="return registered();"></fieldset></form>';
			document.getElementById('info').innerHTML = html;


		}else if(info=='修改'){
			var html = '<form method="post" action="./sql/update.php?table='+name+'" ><fieldset><legend>根据新闻id修改</legend> 新闻类别id：<input type="text" name="newcatid"  >标题：<input type="text"   name="title">内容<textarea name="content" id="content1" cols="160" rows="6"></textarea></textarea>添加人id <input type="text" name="operator">	   <input type="submit"id="submit1" value="提交"onclick="return registered();"><input type="reset"value="重置"><p id="loginnameinfo"></p></fieldset></form></div>';
			document.getElementById('info').innerHTML = html;
		}

	}

	
	}


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
	}
</script>


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

