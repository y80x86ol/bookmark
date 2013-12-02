<?php
class Router{
	//public router_type;
	public function run($router_type){
		switch($router_type){
			case 0:
				//获取控制器与方法
				$control = isset($_GET['control'])?$_GET['control']:'home';
				$action = isset($_GET['action'])?$_GET['action']:'index';
				break;
			case 1:
				$url = trim($_SERVER["REQUEST_URI"],"/");
				if(empty($url)){
					$router = array();
				}else{
					$router = explode("/",$url);
				}
				$control = isset($router[0])?$router[0]:'home';
				$action = isset($router[1])?$router[1]:'index';
				break;
		}
		//获取控制器路径
		$controlFile = ROOT_PATH.'/Controller/'.$control.'.class.php';
		//判断该控制器是否存在，如果不存在就终止运行并提示错误，如果存在就引入该文件继续执行
		if(!file_exists($controlFile)){
			Header("Location: http://".$_SERVER['HTTP_HOST']."/wrong");
			exit('控制器不存在'.$controlFile);
		}
		include($controlFile);
		//获取该类名，如果类名不存在则提升错误
		$class = ucwords($control);
		if(!class_exists($class)){
			Header("Location: http://".$_SERVER['HTTP_HOST']."/wrong");
			exit('未定义的控制器类'.$class);
		}
		//判断该方法是否存在
		$instance = new $class();
		if(!method_exists($instance, $action)){
			Header("Location: http://".$_SERVER['HTTP_HOST']."/wrong");
			exit('不存在的方法:'.$action);
		}
		
		//执行路由结果
		$instance->$action();
	}
}
?>