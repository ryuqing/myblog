<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
<<<<<<< HEAD
    	$m = new Model('User');
    	$arr = $m->select();
    	//print_r($arr);
    	$this->assign('data',$arr);//这样可以在view页面动态的输出$data
    	$this->display();
=======
>>>>>>> 601398f79e2c589b0d0a33d81fc8855ac52741b7
    }
}