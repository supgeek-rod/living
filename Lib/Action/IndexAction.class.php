<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	$this->display(TMPL_PATH."index.html");
    }

    // 登录方法
    public function signin(){
	$this->display(TMPL_PATH."signin.html");
    }

    public function register(){
	$this->display(TMPL_PATH."register.html");
    }
}
