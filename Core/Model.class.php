<?php
class Model{
	public function _construct(){
		header('Content-type:text/html;chartset=utf-8');
	}

	final protected function db_connect(){
		require './Core/database.class.php';
		//数据库连接
		$database = new database();
		$database->connect();
		return;
	}
}
?>