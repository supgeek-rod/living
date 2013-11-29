<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public $app = __APP__;

    public function index(){
	// 检测登录
	if($_SESSION['user']){
	    $this->task();
	    $this->display(TMPL_PATH."index.html");
	}else{
	    header("location:{$this->app}/user/signin");
	}
    }

    public function readme(){
	$this->display(TMPL_PATH."readme.html");
    }

    public function task(){
	$db = M("task");
	$result = $db->where("uid = {$_SESSION['user']['id']} and state != 3")->select();
	$this->assign("taskList",$result);
    }
}
