<?php

class Controller{

	public function __constrcuct(){
		header('Content-type:text/html;chartset=utf-8');
	}

	final protected function menu(){
		$menu = array(
			array("首页","/"),
			array("个人中心","/user/index"),
			array("后台管理","/admin"),
			);
		return $menu;
	}

	/**使用smarty模板引擎，使用该方法进行模板的获取
	*@ $data 为传递过来的值
	*@ $template 为指定输出的模板
	*/
	final protected function view($data,$template){
		//引入模板引擎文件
		require "./Core/Smarty.clsss.php";

		//设置变量
		//系统预留变量user与menu
		$smarty->assign("user",isset($_SESSION['user'])?$_SESSION['user']:NULL);
		$smarty->assign("menu",$this->menu());
		//自定义变量
		$smarty->assign("data",$data);
		//指定显示的模板
		$smarty->display($template);
	}

	/**
	*@ $model 为指定的model名
	*@ #class 为指定的class类名
	*/
	final protected function model($model,$class){
		//引入对应的model
		require "./Model/".$model.".php";
		$instantiation = new $class();
		return $instantiation;
	}
}
?>