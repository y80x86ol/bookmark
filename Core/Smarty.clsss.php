<?php
	//引入模板引擎文件
	include("./Smarty/libs/Smarty.class.php");
	//实例化
	$smarty = new Smarty();
	//设置模板存放文件夹
	$smarty->template_dir = "./Views";      //模板存放在views文件夹中
	$smarty->compile_dir = "./Smarty/templates_c";
	//设置变量在模板中的变形形式

?>