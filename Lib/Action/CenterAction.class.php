<?php
/**
 * 个人中心模块操作类 
 * author: sup.rod 
 */
class CenterAction extends Action {

    /** 个人中心 */
    public function index(){
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

	/** 个人中心 json处理 */
	public function taskJson(){
		$db = M('task');
		import('ORG.Util.Page');
		$where['uid'] = $_SESSION['user']['id'];
		if($_REQUEST['state']){
			$where['state'] = $_REQUEST['state'];
			$state = $_REQUEST['state'];
		}
		$count = $db->where($where)->count();
		$page = new Page($count,8);
		$result = $db->where($where)->limit($page->firstRow.','.$page->listRows)->select();
		$taskTP = ceil($count/8);
		$data = array('state'=>$state,'taskTP'=>$taskTP,'result'=>$result);
		echo json_encode($data);
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
