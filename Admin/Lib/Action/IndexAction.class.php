<?php
class IndexAction extends Action {
    public function index(){
    	$this->display();
    }
    
    public function article(){
    	$this->display();
    }

    public function cateadd(){
    	$m = M('Category');
    	$cate = $m->select();
    	assign('cate',$cate);
    	$this->display();
    }
}
