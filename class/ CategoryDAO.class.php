<?php 
require_once("./DbConnext.class.php");

//开始写类
class  CategoryDAO{
	private $conn;

	//构造函数
	public function __construct(){
		//数据库连接
		$db = new DbConnext();
		$db->db_connect();
	}
	//取出所有的新闻分类，返回二维数组
	public function getCategories()
	{
		$rs = @mysqli_query($this->conn,"select * from t_category");

		if(!$rs){
			return false;
		}
		$catsNum = @mysqli_num_rows($rs);
		if($catsNum == 0){
			return false;
		}
		$rs_arry = arry();
		while ($row = mysqli_fetch_assoc($rs)) {
			$rs_arry[] = $row;
		}
		return $rs_arry;
		mysqli_close($this->conn);
	}

	//用ul>li带a>连接的形式显示全部类别列表
	public function displayCategories($rs_arry)
	{
		if(!$rs_arry){
			echo "error!";
			return ;
		}

		echo "<ul>";

		foreach ($rs_arry as $row) {
			$id = $row["catid"];
			$name = $row["catname"];
			ehco "<li><a href=\"show_cat.php?catId=$id\">$name</a></li>"
		}

		echo "</ul>"
		mysqli_close($this->conn);
	}

	public function optionCategories($rs_array){
		if (!$rs_array) {
			echo "error!";return;
		}
		echo '<select name="catname">';
		foreach ($rs_array as  $row) {
			$id=$row["catid"];
			$name=$row["catname"];
			echo "<option value=\" $id \">$name</option>";
		}
		echo "</select>";
		mysqli_close($this->conn);		
	}
//5. insertCategory（）功能：在类别表中插入新的类别
	public function insertCategory($catName){
		$bool= false;
		$sql = "insert into t_category(catname) values('$catname')";
		mysqli_query($this->conn,$sql);
		$id = mysqli_insert_id($this->conn); 
		return $id;
		mysqli_close($this->conn);
	}




 ?>