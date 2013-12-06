<?php /* Smarty version Smarty-3.1.6, created on 2013-12-06 19:36:00
         compiled from "./Tpl/center/center.html" */ ?>
<?php /*%%SmartyHeaderCode:212321258052a1b60d51a121-95433733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586e5ffb8f0b1b643cb057feff343b297ea05dc4' => 
    array (
      0 => './Tpl/center/center.html',
      1 => 1386329743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212321258052a1b60d51a121-95433733',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52a1b60d6845e',
  'variables' => 
  array (
    'taskTotal' => 0,
    'taskNo' => 0,
    'taskOk' => 0,
    'taskList' => 0,
    'i' => 0,
    'task' => 0,
    'state' => 0,
    'show' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a1b60d6845e')) {function content_52a1b60d6845e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Start 主体部分 -->
<div id="center">
	<div class="panel panel-default">
		<div class="panel-heading">
			<ol class="breadcrumb">
			  <li><a href="__APP__"><span class="glyphicon glyphicon-home"></span> living</a></li>
			  <li><a href="__APP__/center/index"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user']['name'];?>
的个人中心</a></li>
			  <?php if (@ACTION_NAME=='center'){?>
			  <li class="active"><span class="glyphicon glyphicon-bell"></span> 提醒与通知</li>
			  <?php }?>
			  <?php if (@ACTION_NAME=='task'){?>
			  <li><a href="#"><span class="glyphicon glyphicon-th-list"></span> 提醒事项</a></li>
			  <li class="active">所有提醒事项</li>
			  <?php }?>
			  <?php if (@ACTION_NAME=='note'){?>
			  <li><a href="#"><span class="glyphicon glyphicon-book"></span> 备忘录</a></li>
			  <li class="active">所有备忘录记录</li>
			  <?php }?>
			  <?php if (@ACTION_NAME=='menology'){?>
			  <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> 日历</a></li>
			  <li class="active">所有日历记录</li>
			  <?php }?>
			</ol>
		</div>
		<div class="panel-body row center_main">
			<div class="col-sm-2">
				<div class="btn-group menu btn-block">
					<button class="btn btn-block btn-success dropdown-toggle" type="button" data-toggle="dropdown">
						<span class="glyphicon glyphicon-th"></span>
							<?php if (@ACTION_NAME=='center'){?>通知与提醒 <?php }?>
							<?php if (@ACTION_NAME=='task'){?>提醒事项 <?php }?>
							<?php if (@ACTION_NAME=='note'){?>备忘录 <?php }?>
							<?php if (@ACTION_NAME=='menology'){?>日历 <?php }?>
						&nbsp;&nbsp;&nbsp;
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
					    <li><a href="__APP__/center/index"><span class="glyphicon glyphicon-bell"></span> 通知与提醒</a></li>
					    <li><a href="__APP__/center/task"><span class="glyphicon glyphicon-th-list"></span> 提醒事项</a></li>
					    <li><a href="__APP__/center/note"><span class="glyphicon glyphicon-book"></span> 备忘录</a></li>
					    <li><a href="__APP__/center/menology"><span class="glyphicon glyphicon-calendar"></span> 日历</a></li>
					    <li class="divider"></li>
					    <li><a href="#">帐户管理与设置</a></li>
					</ul>
				</div>
				<ul class="nav2 nav nav-pills nav-stacked">
					<?php if (@ACTION_NAME=='task'){?>
					<li class="taskall">
						<a href="javascript:taskAll()"><span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['taskTotal']->value;?>
</span><span class="glyphicon glyphicon-bookmark"></span> 所有提醒事项</a>
					</li>
					<li class="taskno">
						<a href="javascript:taskNo()"><span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['taskNo']->value;?>
</span><span class="glyphicon glyphicon-bookmark"></span> 未完成提醒事项</a>
					</li>
					<li class="taskok">
						<a href="javascript:taskOk()"><span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['taskOk']->value;?>
</span><span class="glyphicon glyphicon-bookmark"></span> 已完成提醒事项</a>
					</li>
					<?php }?>
				</ul>
			</div>
			<div class="col-sm-10">
				<?php if (@ACTION_NAME=='task'){?>
				<script type="text/javascript">
					$(function(){
						taskAll();
					});
				</script>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>序号</th>
							<th>标题</th>
							<th>事项内容</th>
							<th>提醒时间</th>
							<th>当前状态</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['task'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['task']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taskList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['task']->key => $_smarty_tpl->tpl_vars['task']->value){
$_smarty_tpl->tpl_vars['task']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['task']->value['title'];?>
</td>
							<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['task']->value['content'])===null||$tmp==='' ? 'null' : $tmp);?>
</td>
							<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['task']->value['date'])===null||$tmp==='' ? 'null' : $tmp);?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['state']->value[$_smarty_tpl->tpl_vars['task']->value['state']];?>
</td>							
							<td>
								<?php if ($_smarty_tpl->tpl_vars['task']->value['state']==3){?>
								<button type="button" class="btn btn-xs btn-default">取消完成</button>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['task']->value['state']==1){?>
								<button type="button" class="btn btn-xs btn-success">标记完成</button>
								<?php }?>
								<button type="button" class="btn btn-xs btn-primary">修改</button>
								&nbsp;
								<button type="button" class="btn btn-xs btn-danger">彻底删除</button>
							</td>
						</tr>
						<?php } ?>
					</tbody>	
				</table>
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['show']->value;?>

				<ul class="pagination">
				<!--	<li><a href="javascript:taskPage(-1)">&laquo;</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="javascript:taskPage()">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="javascript:taskPage(1)">&raquo;</a></li>
				-->	
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="__ROOT__/Tpl/js/liv_center.js"></script>
<!-- End 主体部分 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>