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

}
