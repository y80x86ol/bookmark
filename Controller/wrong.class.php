<?php
class wrong extends Controller{
	public function construct(){
		
	}
	public function index(){
		$data = array(
			"page_title"=>"页面没有找到"
			);
		$template = "404.tpl";
		$this->view($data,$template);
	}

	public function no_permission(){
		$data = array(
			"page_title"=>"页面没有找到"
			);
		$template = "403.tpl";
		$this->view($data,$template);
	}
}
?>