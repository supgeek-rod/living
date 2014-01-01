<?php
/**
 * 个人中心模块操作类 
 * author: sup.rod 
 */
class CenterAction extends Action {

    /** 个人中心 */
    public function index(){
		$this->display('index');
    }


/* ----------------------------------------- */
// task
    /** task/center 起始页  */
    public function task(){
		$db = M('task');
		$task_total = $db->where("uid={$_SESSION['user']['id']}")->count();
		$task_ok = $db->where("uid={$_SESSION['user']['id']} and state=3")->count();
		$task_no = $task_total - $task_ok;
		$this->assign("taskNo",$task_no);				// 未完成数量
		$this->assign("taskTotal",$task_total);			// 总数量
		$this->assign("taskOk",$task_ok);				// 完成数量
		$this->display('task');
    }

	/** task 分页 */
	public function taskPage(){
		$db = M('task');
		import('ORG.Util.Page');
		$where['uid'] = $_SESSION['user']['id'];
		if($_REQUEST['state']){
			$where['state'] = $_REQUEST['state'];
			$state = $_REQUEST['state'];		// 数据状态
		}
		$count = $db->where($where)->count();
		//$page = new Page($count,8);
		//$result = $db->where($where)->order('utime desc')->limit($page->firstRow.','.$page->listRows)->select();		// 分页后数据
		$result = $db->where($where)->order('utime desc')->select();		// 分页后数据
		$taskTP = ceil($count/8);		// 总页数
		$data = array('state'=>$state,'taskTP'=>$taskTP,'result'=>$result);			// 组装 task状态、task总页数、task分页数据
		echo json_encode($data);
	}


/* -------------------------------------------------------------- */
// note
    /** note/center 起始页 */
    public function note(){
		$this->display('note');
    }

	/** note 数据初始化 */
	public function noteStart(){
		$db = M('note');
		$where['uid'] = $_SESSION['user']['id'];
		$where['state'] = 1;
		$result = $db->where($where)->order('utime desc')->select();
		if($result){
			foreach($result as $k=>$v){
				$result[$k]['utime'] = date('m-d H:i',$result[$k]['utime']);
			}
			echo json_encode($result);
		}else{
			return false;
		}
	}

	/** note 数据删除 */
	public function noteRemove(){
		$db = M('note');
		$where = $db->create();
		$result = $db->where($where)->delete();
		if($result){
			return true;
		}else{
			return false;
		}
	}


/* -------------------------------------------------------------- */
// menology
    /** 个人中心 日历 */
    public function menology(){
		$this->display('menology');
    }

}
