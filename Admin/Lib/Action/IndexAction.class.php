<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$this->display();
    }

    public function cateadd(){
    	$m = M('Category');
    	$cate = $m->select();
    	$this->assign('cate',$cate);
    	$this->display();
    	if($_POST['act']=="add"){
	    	$data['cat_name'] = $_POST['cat_name'];
	    	$data['parent_id'] = $_POST['parent_id'];
	    	$data['intro'] = $_POST['intro'];
	    	$newid = $m->add($data);
	    	if($newid){
	    		$this->success("新增的ID号为$newid");
	    	}else{
	    		$this->error("添加失败3秒后跳转");
	    		$this->display();
	    	}
    	}
    }

    public function catelist(){
    	$m = M('Category');
    	$cate = $m->select();
        $this->assign('cate',$cate);
    	$this->display();
    }

    public function catedete(){
    	$m = M('Category');
/*    	print_r($_GET);
    	exit();*/
    	$id = $_GET['cate_id'];
    	$test = $m->delete($id);
    	print_r($test);
    	($test)?$this->success("删除成功"):$this->error("删除失败");
    }
}