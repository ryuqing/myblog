<?php 
class ArticleAction extends Action{
	public function index(){
		$this->display();
	}

	public function postAdd(){
		$data['post_title'] = $_POST['post_title'];
		$data['post_content'] = $_POST['editorValue'];
		$data['post_parent'] = $_POST['post_parent'];

	}
}


?>