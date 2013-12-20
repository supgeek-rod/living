<?php /* Smarty version Smarty-3.1.6, created on 2013-12-20 15:23:08
         compiled from "tpl/center/nav.html" */ ?>
<?php /*%%SmartyHeaderCode:98661721652b3e37566fae1-08291635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad18e617ca247e37516e0a1ff831ccff88662d19' => 
    array (
      0 => 'tpl/center/nav.html',
      1 => 1387524185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98661721652b3e37566fae1-08291635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52b3e37571157',
  'variables' => 
  array (
    'taskTotal' => 0,
    'taskNo' => 0,
    'taskOk' => 0,
    'noteTotal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b3e37571157')) {function content_52b3e37571157($_smarty_tpl) {?><div class="col-sm-2">
	<div class="btn-group menu btn-block">
		<button class="btn btn-block btn-success dropdown-toggle" type="button" data-toggle="dropdown">
			<span class="glyphicon glyphicon-th"></span>
				&nbsp;
				<?php if (@ACTION_NAME=='index'){?>通知与提醒 <?php }?>
				<?php if (@ACTION_NAME=='task'){?>提醒事项 <?php }?>
				<?php if (@ACTION_NAME=='note'){?>备忘录 <?php }?>
				<?php if (@ACTION_NAME=='menology'){?>日历 <?php }?>
				&nbsp;
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
		    <li><a href="__APP__/center/index"><span class="glyphicon glyphicon-bell"></span> 通知与提醒</a></li>
		    <li><a href="__APP__/center/task"><span class="glyphicon glyphicon-th-list"></span> 提醒事项</a></li>
		    <li><a href="__APP__/center/note"><span class="glyphicon glyphicon-book"></span> 备忘录</a></li>
		    <li><a href="__APP__/center/menology"><span class="glyphicon glyphicon-calendar"></span> 日历</a></li>
		    <li class="divider"></li>
		    <li><a href="__APP__/account/index">帐户管理与设置</a></li>
		</ul>
	</div>
	<ul class="nav2 nav nav-pills nav-stacked">
		<!-- nav -->
		<?php if (@ACTION_NAME=='index'){?>
		<li class="active">
			<a href="javascript:bellRemind()"><span class="badge pull-right"></span><span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;提醒</a>
		</li>
		<li>
			<a href="javascript:bellInform()"><span class="badge pull-right"></span><span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通知</a>
		</li>
		<?php }?>

		<!-- task nav -->
		<?php if (@ACTION_NAME=='task'){?>
		<li class="task">
			<a href="javascript:taskAdd()"><span class="badge pull-right"></span><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;新增提醒 <span class="badge hidden">+1</span></a>
		</li>
		<li class="taskall">
			<a href="javascript:taskAll()"><span class="task-alls badge pull-right"><?php echo $_smarty_tpl->tpl_vars['taskTotal']->value;?>
</span><span class="glyphicon glyphicon-bookmark"></span> 所有提醒</a>
		</li>
		<li class="taskno">
			<a href="javascript:taskNo()"><span class="task-nos badge pull-right"><?php echo $_smarty_tpl->tpl_vars['taskNo']->value;?>
</span><span class="glyphicon glyphicon-bookmark"></span> 未完成提醒</a>
		</li>
		<li class="taskok">
			<a href="javascript:taskOk()"><span class="task-oks badge pull-right"><?php echo $_smarty_tpl->tpl_vars['taskOk']->value;?>
</span><span class="glyphicon glyphicon-bookmark"></span> 已完成提醒</a>
		</li>
		<?php }?>

		<!-- note nav -->
		<?php if (@ACTION_NAME=='note'){?>
		<li class="noteall">
			<a href="javascript:noteAdd()"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新增备忘录 <span class="badge hidden">+1</span></a>
		</li>
		<li class="noteall active">
			<a href="__APP__/center/note"><span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['noteTotal']->value;?>
</span><span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;备忘录列表</a>
		</li>
		<?php }?>
	</ul>
	<hr />
	<div style="height:180px; background:#F1F1F1; padding-top:80px; text-align:center;">AD   W:col-sm-2 / H:180px</div>
</div><?php }} ?>