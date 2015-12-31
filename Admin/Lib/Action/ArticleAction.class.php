<?php 
class ArticleAction extends Action{
	public function index(){
		$this->display();
	}
	public function postNew(){
		$this->display();
	}
	public function postAdd(){
		$data['post_title'] = $_POST['post_title'];
		$data['post_parent'] = $_POST['post_parent'];
		$data['post_content'] = $_POST['editorValue'];
	}
	public function postList(){
		$m = M('post');
		$posts = $m->select();
		$this->assign('posts',$posts);
		$this->display();
	}


}

?>