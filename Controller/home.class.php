<?php
class home extends Controller{
	public function construct(){
		
	}
	public function index(){
		$data = array(
			"page_title"=>"我是首页"
			);
		$template = "home.tpl";
		$this->view($data,$template);
	}
}
?>