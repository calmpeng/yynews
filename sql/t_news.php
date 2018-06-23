f<?php 
include('./config.php');

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
function into($catid,$title,$content,$operrator){
$link = db_connect();
	if(!$link){
		//报告错误信息
		echo "为连接成功";
	}
$newtime = time();
$insert = " insert into t_news values(null,$catid,'$title','$content',$newtime,$operrator) ";
	if(!@mysqli_query($link,$insert)){
		echo $insert;
		exit('插入数据失败'.mysqli_error($link));
		return false;
	}
return true;
}
?>
<?php 
$intoinfo = into(1,'“竹质桥梁”结构设计竞赛夺冠','自重110克 承重40公斤

“竹质桥梁”结构设计竞赛夺冠

华声在线5月13日讯(湖南日报·华声在线记者 左丹 通讯员 喻玲)5月11日至13日，“湖南路桥杯”第六届湖南省大学生结构设计竞赛在长沙理工大学云塘校区举行，来自中南大学、湖南大学等28所高校的77支队伍参与本次角逐。最终，长沙理工大学城南学院代表队设计的桥梁自重110克，承重40公斤，获得竞赛冠军。

全国大学生结构设计竞赛每年举办一次，是教育部确定的全国九大大学生学科竞赛之一。大学生结构设计竞赛也是纳入中国高校创新人才培养暨学科竞赛评估的19个竞赛项目之一，省赛是全国赛的分区赛，也称国赛初赛，成绩优秀的队伍才有资格参加全国总决赛。

本次竞赛题目是：竹质双车道桥梁结构设计与制作。赛题以桥梁结构为背景，主要目的是考察桥梁结构在小车移动荷载作用下的承载能力和跨中极限承载能力，使学生通过竞赛活动能运用专业知识做出合理桥梁结构设计。区别于其他的学科竞赛，结构模型大赛，既具学术性与又具观看性，比赛通过建模、结构设计和施工三个环节，既考验理论基础，又考验动手能力。

经过激烈角逐，长沙理工大学城南学院、吉首大学、长沙理工大学、南华大学、湖南科技大学、中南林业科技大学、南华大学、南华大学船山学院等8支代表队获一等奖，前四名的队伍获参加国赛资格。长沙理工大学自2009年通过土木工程专业评估，连续9年参加全国大学生结构设计竞赛，2016年、2017年连续两次夺得全国大赛总冠军，近5年总赛绩全国第一。

',1);
if(!$intoinfo){
	echo '插入失败';
}else{
	echo '成功';
}

?>



