<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$m = new Model('User');
    	$arr = $m->select();
    	//print_r($arr);
    	$this->assign('data',$arr);//这样可以在view页面动态的输出$data
    	$this->display();
    }
}