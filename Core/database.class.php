<?php
class database{
	public function __construct(){

	}
	#数据库连接
	public function connect(){
		//引入配置文件
		require_once "./Core/config.php";
		#进行数据库连接
		$con = @mysql_connect($db_config['hostname'],$db_config['username'],$db_config['password']);
		if(!$con){
			die("数据库连接失败".mysql_error());
		}
		//返回连接的数据库
		return mysql_select_db($db_config['database'],$con);
	}
}
?>