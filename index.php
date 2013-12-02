<?php
session_start();
 require "Core/init.php";

 $router = new Router();
 $router->run(1);
?>