<?php
/**
 * 提醒事项操作类
 * @author sup.rod
 */
class noteAction extends Action {
	/** note初始数据 */
	public function start(){
		$db = M("note");
		$result = $db->where("uid = {$_SESSION['user']['id']} and state != 3")->order('utime desc')->select();
		echo json_encode($result);
	}

    /** note提交方法 */
    public function submit(){
		$db = M("note");
		$_POST['uid'] = $_SESSION['user']['id'];
		$_POST['addtime'] = time();
		$_POST['utime'] = time();
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
		$_POST['utime'] = time();
		$_POST['state'] = 1;
		$db->create();
		$id = $db->add();
		if($id){
			return true; 
		}else{
			return false; 
		}
    }

	/** note修改方法 */
	public function update(){
		$db = M('note');
		$where['id'] = $_POST['id'];
		$data = $db->create();
		$data['utime'] = time();
		$db->where($where)->data($data)->save();
		if($result){
			return true;
		}else{
			return false;
		}
	}

	/** note删除方法 */
	public function remove(){
		$db = M('note');
		$where = $db->create();
		$data['state'] = 3;
		$result = $db->where($where)->data($data)->save();
		if($result){
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
