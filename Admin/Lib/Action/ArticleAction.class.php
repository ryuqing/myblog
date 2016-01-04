<?php 
class ArticleAction extends Action{
	public function index(){
		$this->display();
	}
	public function postNew(){
		$cate = M('Category');
		$catelist = $cate->field('cat_id,cat_name')->select();
		$this->assign('catelist',$catelist);
		$this->display();
	}
	public function postAdd(){
		$m = M('Content');
		$this->upload();
		if($_POST['addnew'] == 'addnew'){
			$data['post_title'] = $_POST['post_title'];
			$data['post_parent'] = $_POST['post_parent'];
			$data['post_content'] = $_POST['editorValue'];
			$data['post_parent'] = $_POST['post_parent'];
			$newId = $m->add($data);
			if($newId){
				$this->success('发布成功');
			}
		}
	}
	public function postList(){
		$model = new Model();
		//thinkphp做连接查询把post_parent换成文本而不是数字 ps：连接查询还是用原生sql 速度要快一些 用法很简单new 一个空的model就可以 
		$sql = 'select blog_category.cat_name,blog_content.* from blog_content join blog_category on blog_category.cat_id = blog_content.post_parent';
		$posts = $model->query($sql);
		$this->assign('posts',$posts);
		$this->display();
	}

	//上传图片
	public function upload(){
		$upload = new Think\Upload();
		$upload->maxSize = 3145728;
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');
		$upload->savePath  =      '__URL__/Uploads/img/';
		$info = $upload->upload();
		if(!$info){
			$this->error($upload->getError());
		}else{
			print_r($info);
		}

	}


}

?>