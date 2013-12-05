<?php
/**
 * 提醒事项操作类
 * @author sup.rod
 */
class noteAction extends Action {
    /** note提交方法 */
    public function submit(){
	$db = M("note");
	$_POST['uid'] = $_SESSION['user']['id'];
	$_POST['addtime'] = time();
	$_POST['state'] = '1';
	$result = $db->create();
	$id = $db->add();
	if($id){
	    return true; 
	}else{
	    return false;
	}
    }
    /** note添加方法 */
    public function add(){
	$db = M('note');
	$_POST['addtime'] = time();
	$_POST['uid'] = $_SESSION['user']['id'];
	$_POST['state'] = 1;
	$db->create();
	$id = $db->add();
	if($id){
	    return true; 
	}else{
	    return false; 
	}
    }
    
    /** note检索数据方法 */
    public function select(){
	$db = M("note");
	$where['id'] = $_POST['id'];
	$result = $db->where($where)->select();
	//dump($result);
	if($result){
	    echo json_encode($result);
	}else{
	    return false;
	}
    }
}
