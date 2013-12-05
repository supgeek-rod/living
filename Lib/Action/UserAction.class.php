<?php
/**
 * 用户模块操作类 
 * author: sup.rod 
 */
class UserAction extends Action {
    public $app = __APP__;
    /** 登录页面 */
    public function signin(){
		$this->display("signin");
    }
    
    /** 注册页面 */
    public function register(){
		$this->display("register");
    }

    /** 注册处理方法 */
    public function adduser(){
		$db = M('user');
		$_POST['email'] = strtolower($_POST['email']);
		$_POST['password'] = md5($_POST['password']);
		$info = $db->create();
		$info['regtime'] = time();
		$info['state'] = 1;
		$id = $db->add();
		if($id){
			header("location:{$this->app}/index/index");
			echo '<script>alert("ok")</script>';
		}else{
			header("location:{$this->app}/user/register");
		}
    }

    /** 登录处理方法 */
    public function login(){
		$db = M('user');
		$_POST['password'] = md5($_POST['password']);
		$result = $db->where($_POST)->select();
		if($result){
			$result[0]['password'] = null;
			$_SESSION['user'] = $result[0];
			dump($_SESSION);
			header("location:{$this->app}/index/index");
		}else{
			echo 'nono';
			header("location:{$this->app}/user/signin");
		}
    }

    /** 登出处理方法 */
    public function signout(){
		session_unset($_SESSION);
		header("location:{$this->app}/index/index");
    }

    /** 个人中心 */
    public function center(){
		$this->display('center');
    }

    /** 个人中心 提醒事项 */
    public function task(){
		$db = M('task');
		$task_total = $db->where("uid={$_SESSION['user']['id']}")->count();
		$task_ok = $db->where("uid={$_SESSION['user']['id']} and state=3")->count();
		$task_no = $task_total - $task_ok;
		$this->assign("taskNo",$task_no);				// 未完成数量
		$this->assign("taskTotal",$task_total);			// 总数量
		$this->assign("taskOk",$task_ok);				// 完成数量
		$this->display('center');
    }

	/** 人人中心 json处理 */
	public function taskJson(){
		$db = M('task');
		import('ORG.Util.Page');
		$where['uid'] = $_SESSION['user']['id'];
		if($_POST['state']){
			$where['state'] = $_POST['state'];
		}
		$count = $db->where($where)->count();
		$page = new Page($count,10);
		$result = $db->where($where)->select();
		echo json_encode($result);
	}

    /** 个人中心 备忘录 */
    public function note(){
		$this->display('center');
    }

    /** 个人中心 日历 */
    public function menology(){
		$this->display('center');
    }

}
