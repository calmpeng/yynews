<?php 
//引入配置常量文件
//echo $_SERVER['DOCUMENT_ROOT']."<br>";
//echo $$_SERVER['DOCUMENT_ROOT']."yynews/class/Db.conf.php";
require_once("./Db.conf.php");
//require_once($_SERVER['DOCUMENT_ROOT']."yynews/class/Db.conf.php");
//echo "fa";
//设置用在脚本中所有日期/时间函数的默认时区
date_default_timezone_set(TIMEZONE);

//echo "fa";

//开始写类
class DbConnect{
	private $host;
	private $username;
	private $password;
	private $dbname;
	public $conn;

//构造函数 会默认执行
	public function __construct($host = DB_HOST,$username = DB_USER,$password = DB_PASSWORD,$dbname = DB_NAME){
		$this->host = $host;
	   	$this->username = $username;
	 	$this->password = $password;
	   	$this->dbname = $dbname;   

	}

//连接数据库
	public function db_connect(){
		$this->conn = mysqli_connect($this->host,$this->username,$this->password);
		mysqli_select_db($this->conn,$this->dbname);
		mysqli_query($this->conn,"set name utf8");

}


}


?><!-- 
<?php 


//测试本类的代码
$db =new DbConnect();
$db->db_connect();
//查看变量具体信息
var_dump($db);
//echo "fdsa";
 ?> -->