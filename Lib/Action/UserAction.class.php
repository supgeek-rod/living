<?php
/**
 * 用户模块操作类 
 * author: sup.rod 
 */
class UserAction extends Action {
    public $app = __APP__;

    /** 登录页面 */
    public function signin(){
		if($_SESSION['user']){
			header("location:{$this->app}/index/index");
		}else{
			$this->display("signin");
		}
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
		$_POST['regtime'] = time();
		$_POST['state'] = 1;
		$info = $db->create();
		$id = $db->add();
		if($id){
			header("location:{$this->app}/index/index");
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

	/** 用户密码修改 */
	public function updatePasswd(){
		$db = M('user');
		$where['id'] = $_SESSION['user']['id'];
		$data['password'] = md5($_POST['password']);
		$result = $db->where($where)->data($data)->save();
		if($result){
			unset($_SESSION['user']);
			echo 'ture';
		}else{
			echo null;
		}
	}

}
