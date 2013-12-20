<?php
/**
 * 首页操作类
 *
 * @author sup.rod
 */
class IndexAction extends Action {
    public $app = __APP__;

    public function index(){
		// 检测登录（未登录者重定向到登录页）
		if($_SESSION['user']){
			$this->task();
			$this->note();
			$this->display(TMPL_PATH."index.html");
		}else{
			header("location:{$this->app}/user/signin");
		}
    }
    
    /** living介绍页面 */
    public function readme(){
		$this->display(TMPL_PATH."readme.html");
    }
    
    /** task版块初始数据 */
    public function task(){
		$db = M("task");
		$result = $db->where("uid = {$_SESSION['user']['id']} and state != 3")->order('id desc')->select();
		$this->assign("taskList",$result);
    }
    
    /** note版块初始数据 */
    public function note(){
		$db = M("note");
		$result = $db->where("uid = {$_SESSION['user']['id']} and state != 3")->select();
		$this->assign("notelist",$result);
    }
}
