<?php
/**
 * 用户设置模块操作类 
 * author: sup.rod 
 */
class AccountAction extends Action {
	// index
	public function index(){
		$db = M('note');
		$id = $_SESSION['user']['id'];
		$note[0] = $db->field('count(note.id) sumNote')->where('note.uid='.$id)->select();
		$task[0] = $db->table('task')->field('count(task.id) sumTaskOk')->where('task.uid='.$id.' and state=3')->select();
		$task[1] = $db->table('task')->field('count(task.id) sumTaskNo')->where('task.uid='.$id.' and state=1')->select();

		$this->assign('sumNote',$note[0][0]['sumNote']);
		$this->assign('sumTaskOk',$task[0][0]['sumTaskOk']);
		$this->assign('sumTaskNo',$task[1][0]['sumTaskNo']);
		$this->display("index");
	}

	public function updatename(){
		$db = M('user');
		$data = $db->create();
		$where['id'] = $_SESSION['user']['id'];
		$result = $db->where($where)->data($data)->save();
		if($result){
			$user = $db->where($where)->select();
			$_SESSION['user'] = $user[0];
			return true;
		}else{
			return false;
		}
	}
}
