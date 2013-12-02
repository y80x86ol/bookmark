<?php
define('SYSTEM_PATH',dirname(__FILE__));    //为带有/Core的路径，比如：D:\Workspace\new_bookmark\Core
define ('ROOT_PATH', dirname(dirname(__FILE__)));   //最基本ROOT路径，比如：D:\Workspace\new_bookmark

//require '/core/Config.php';    //配置文件引入
require '/core/Router.class.php';   //路由文件引入
require '/core/Controller.class.php';   //控制器文件引入
require '/core/Model.class.php';   //模型文件引入
require '/core/View.class.php';    //视图文件引入

?>