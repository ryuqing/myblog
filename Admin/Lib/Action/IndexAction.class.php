<?php
class IndexAction extends Action {
    public function index(){
    	$this->display();
    }
    public function top(){
        //$this->assign('name',$_SESSION['username']);
        $this->display();
    }
    public function left(){
        $this->display();
    }
    public function right(){
        $this->display();
    }
    
    public function article(){
    	$this->display();
    }
}


