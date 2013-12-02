<?php

class user_model extends Model{
	#登录
	public function login(){
		$this->db_connect();
		$username = trim($_POST['username']);
		$password = md5(trim($_POST['password']));
		if(empty($username) || empty($password)){
			die("不能为空");
		}
		$query = "SELECT uid FROM users WHERE name = '$username' AND pass = '$password' limit 1";
		$user = mysql_query($query);
		//从结果集中取得一行作为关联数组或索引数组，或二者兼有
		$result = mysql_fetch_array($user);
		//判断
		if($result){
			$_SESSION['user'] = array(
				'userid' => $result['uid'],
				'username' => $username,
				);
		}else{
			die("登录失败");
		}
		return " ";
	}

	#注册
	public function register(){
		$username = trim($_POST['username']);
		$pass = md5(trim($_POST['password']));
		$created = time();

		$query = "INSERT INTO users (name,pass,created) VALUES ('$username','$pass','$created')";
		if(mysql_query($query)){
			echo '<a href="?control=user&action=login">请登录</a>';
			return '注册成功';
		}else{
			return "注册失败";
		}
	}
}
?>