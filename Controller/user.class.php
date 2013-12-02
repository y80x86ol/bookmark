<?php
	//require "./Model/user.model.php";
class user extends Controller{
	public function construct(){
		
	}
	#首页
	public function index(){
		$data = array(
			"page_title"=>"用户中心"
			);
		$template = "user/index.tpl";
		$this->view($data,$template);
	}
	#登录
	public function login(){
		if(!empty($_POST)){
			//使用model
			//$this->model(user.model);
			$user_model = $this->model("user.model","user_model");
			if($user_model->login()){
				$data = array(
					"page_title"=>"登录"
				);
				$template = "user/index.tpl";
				$this->view($data,$template);
			}
		}else{
			if(isset($_SESSION['user']['userid'])){
				Header("Location: http://".$_SERVER['HTTP_HOST']);
				exit;
			}else{
				$data = array(
					"page_title"=>"登录"
				);
				$template = "user/login.tpl";
				$this->view($data,$template);
			}
		}
	}
	#注册
	public function register(){
		if(!empty($_POST)){
			$user_model = new user_model();
			if($user_model->register()){
				echo "注册成功";
			}
		}else{
			$data = array(
					"page_title"=>"注册"
				);
			$template = "user/register.tpl";
			$this->view($data,$template);
		}
	}
	#退出登录
	public function logout(){
		//注销登录
    	unset($_SESSION['user']);
    	echo '注销登录成功！点击此处 <a href="/user/login">登录</a>';
    	exit;
	}
}
?>