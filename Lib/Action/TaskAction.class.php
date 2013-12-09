<?php
/*
 * 提醒事项操作类
 */
class TaskAction extends Action {
	//获取初始数据
    public function start(){
	$db = M("task");
	$result = $db->where("uid = {$_SESSION['user']['id']} and state != 3")->order('id desc')->select();
	echo json_encode($result);
    }

    // 添加方法
    public function add(){
	$db = M('task');
	$_POST['addtime'] = time();
	$_POST['uid'] = $_SESSION['user']['id'];
	$_POST['state'] = 1;
	$db->create();
	$id = $db->add();
	if($id){
	    echo json_encode($id);
	}else{
	    die('fail');
	}
    }

    // 修改方法
    public function update(){
	$db = M('task');
	$where['id'] = $_POST['id'];
	$data['title'] = $_POST['title'];
	if($_POST['title']){
	    $result = $db->where($where)->data($data)->save();
	}else{
	    $result = $db->where($where)->delete();
	}
	if($result){
	    return true;
	}else{
	    return false;
	}
    }

    // 完成方法
    public function over(){
	$db = M('task');
	$where['id'] = $_POST['id'];
	$data['state'] = 3;
	$result = $db->where($where)->data($data)->save();
	if($result){
	    return true;
	}else{
	    return false;
	}
    }

}
