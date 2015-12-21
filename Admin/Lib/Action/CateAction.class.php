<?php 

class CateAction extends Action{
    public function catelist(){
    	$m = M('Category');
    	$cate = $m->select();
        $this->assign('cate',$cate);
    	$this->display();
    }

	public function cateadd(){
    	$m = M('Category');
    	$cate = $m->select();
    	$this->assign('cate',$cate);
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
        $this->display();
	}
    public function catedete(){
    	$m = M('Category');
    	$id = $_GET['cate_id'];
    	$test = $m->delete($id);
    	print_r($test);
    	($test)?$this->success("删除成功"):$this->error("删除失败");
    }
    public function cateupdate(){
        $m = M('Category');
        $cate = $m->select();
        $this->assign('cate',$cate);
        $catethis = $m->find($_GET['cate_id']);
        $this->assign('catethis',$catethis);
        if($_POST['act']=='update'){
            $data['cat_id'] = $_POST['cate_id'];
            $data['cat_name'] = $_POST['cat_name'];
            $data['parent_id'] = $_POST['parent_id'];
            $data['intro'] = $_POST['intro'];
            $count = $m->save($data);
            var_dump($count);
            if($count){
                $this->success('catelist');
            }else{
                echo 'xiugaishibai';
                $this->display();
            }
        }
        $this->display();

    }
    
} 

?>