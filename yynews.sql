-- MySQL dump 10.13  Distrib 5.7.21, for macos10.13 (x86_64)
--
-- Host: localhost    Database: yynews
-- ------------------------------------------------------
-- Server version	5.7.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `t_categoty`
--

DROP TABLE IF EXISTS `t_categoty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_categoty` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` char(30) NOT NULL,
  `catime` int(11) DEFAULT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_categoty`
--

LOCK TABLES `t_categoty` WRITE;
/*!40000 ALTER TABLE `t_categoty` DISABLE KEYS */;
INSERT INTO `t_categoty` VALUES (1,'校园新闻',20180607),(2,'体育新闻',20180607),(3,'社会新闻',20180607),(4,'国际新闻',20180607);
/*!40000 ALTER TABLE `t_categoty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_comment`
--

DROP TABLE IF EXISTS `t_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_comment` (
  `commid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `newsid` int(11) DEFAULT NULL,
  `commtime` int(11) NOT NULL,
  `content` char(200) NOT NULL,
  PRIMARY KEY (`commid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_comment`
--

LOCK TABLES `t_comment` WRITE;
/*!40000 ALTER TABLE `t_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_news`
--

DROP TABLE IF EXISTS `t_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_news` (
  `newsid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `title` char(50) NOT NULL,
  `content` text NOT NULL,
  `newtime` int(11) NOT NULL,
  `operator` int(11) NOT NULL,
  PRIMARY KEY (`newsid`),
  KEY `catid` (`catid`),
  KEY `operator` (`operator`),
  CONSTRAINT `t_news_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `t_categoty` (`catid`),
  CONSTRAINT `t_news_ibfk_2` FOREIGN KEY (`operator`) REFERENCES `t_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_news`
--

LOCK TABLES `t_news` WRITE;
/*!40000 ALTER TABLE `t_news` DISABLE KEYS */;
INSERT INTO `t_news` VALUES (1,1,'6666666','1234567890',1528349238,1),(2,2,'骑士必胜','3-0 勇士大比分领先',1528349325,1),(3,3,'高考','高考状元是我',1528349415,1),(4,4,'和平','世界和平',1528349430,1),(5,1,'保研事件','保研事件上的福利卡解放了',1528356258,1),(6,1,'搬迁宿舍','好多ssdfjksflsad',1528356655,1),(7,1,'邹勇松事迹引起热烈反响','　长沙理工大学学生邹勇松身患尿毒症仍坚持学习和科研的先进事迹被各媒体报道后，引起了社会各界的热烈反响。省委教育工委书记、省教育厅厅长蒋昌忠，共青团湖南省委书记汤立斌来到学校看望慰问邹勇松。\n\n',1528718485,1),(8,1,'湖南省第六届大学生结构设计竞赛','　新华网长沙5月14日电（秦鑫）13日，为期三天的“湖南路桥杯”湖南省第六届大学生结构设计竞赛在长沙理工大学落下帷幕。来自中南大学、湖南大学等28所院校的77支代表队，经过激烈角逐，长沙理工大学城南学院代表队夺得桂冠，此外还有长沙理工大学、吉首大学和南华大学共四所院校也将代表湖南省参加全国大学生结构设计竞赛。\n\n',1528718565,1),(10,1,'“竹质桥梁”结构设计竞赛夺冠','自重110克 承重40公斤\n\n“竹质桥梁”结构设计竞赛夺冠\n\n华声在线5月13日讯(湖南日报·华声在线记者 左丹 通讯员 喻玲)5月11日至13日，“湖南路桥杯”第六届湖南省大学生结构设计竞赛在长沙理工大学云塘校区举行，来自中南大学、湖南大学等28所高校的77支队伍参与本次角逐。最终，长沙理工大学城南学院代表队设计的桥梁自重110克，承重40公斤，获得竞赛冠军。\n\n全国大学生结构设计竞赛每年举办一次，是教育部确定的全国九大大学生学科竞赛之一。大学生结构设计竞赛也是纳入中国高校创新人才培养暨学科竞赛评估的19个竞赛项目之一，省赛是全国赛的分区赛，也称国赛初赛，成绩优秀的队伍才有资格参加全国总决赛。\n\n本次竞赛题目是：竹质双车道桥梁结构设计与制作。赛题以桥梁结构为背景，主要目的是考察桥梁结构在小车移动荷载作用下的承载能力和跨中极限承载能力，使学生通过竞赛活动能运用专业知识做出合理桥梁结构设计。区别于其他的学科竞赛，结构模型大赛，既具学术性与又具观看性，比赛通过建模、结构设计和施工三个环节，既考验理论基础，又考验动手能力。\n\n经过激烈角逐，长沙理工大学城南学院、吉首大学、长沙理工大学、南华大学、湖南科技大学、中南林业科技大学、南华大学、南华大学船山学院等8支代表队获一等奖，前四名的队伍获参加国赛资格。长沙理工大学自2009年通过土木工程专业评估，连续9年参加全国大学生结构设计竞赛，2016年、2017年连续两次夺得全国大赛总冠军，近5年总赛绩全国第一。\n\n',1528726394,1),(11,1,'asdf','asdffads',231123,1),(12,1,'qwer','qwerrew',1529247701,1);
/*!40000 ALTER TABLE `t_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(12) NOT NULL,
  `password` char(32) NOT NULL,
  `qq` char(30) NOT NULL,
  `regtime` int(11) DEFAULT NULL,
  `Role` char(1) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `iphone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_user`
--

LOCK TABLES `t_user` WRITE;
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` VALUES (1,'pengxiang','6554725','12345678902',1529233705,'0','女','13237488568'),(2,'pengguang','6554725','451946155',123456789,'1','男',NULL),(3,'penglu','6554725','945310072',1234567890,'1','男',NULL),(42,'fdsds','123456','123456789',1528191102,'1','男','13580143245'),(43,'fdsdss','123456','123456789',1528191133,'1','男','13580143245'),(44,'fdsdss','123456','123456789',1528191159,'1','男','13580143245'),(45,'fdsdw','123456','123456789',1528191173,'1','男','13580143245'),(46,'fdsdw','123456','123456789',1528191215,'1','男','13580143245'),(47,'132374','sfdasd','fds',1528203854,'1','男','13580143245'),(48,'13','sfdasd','fds',1528203865,'1','男','13580143245'),(49,'pengxian','6554725','1723792756',1528204162,'1','女','13580143245'),(50,'fdsj','','',1528205434,'1','女','qq='),(84,'fds9','6554725','1234567890',1529239554,'1','女','13580143245');
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-17 23:48:35
