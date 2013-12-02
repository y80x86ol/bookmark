<?php
class admin extends Controller{
	public function index(){
		$data = array(
			"page_title"=>"后台管理"
			);
		$template = "admin/index.tpl";
		$this->view($data,$template);
	}
}
?>