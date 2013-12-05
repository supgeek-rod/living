<?php /* Smarty version Smarty-3.1.6, created on 2013-12-05 09:52:55
         compiled from "./Tpl/user/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1955500864529fd9fbb98743-34249302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc275a6b424ee01ec022e03f2081245b15cb5d5e' => 
    array (
      0 => './Tpl/user/index.html',
      1 => 1386208098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1955500864529fd9fbb98743-34249302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_529fd9fbc7e44',
  'variables' => 
  array (
    'taskList' => 0,
    'i' => 0,
    'v' => 0,
    'state' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529fd9fbc7e44')) {function content_529fd9fbc7e44($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Start 主体部分 -->
<div id="mainer" class="center">
	<div class="panel panel-default">
		<div class="panel-heading">
			<ol class="breadcrumb">
			  <li><a href="__APP__"><span class="glyphicon glyphicon-home"></span> living</a></li>
			  <li><a href="__APP__/user/center"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user']['name'];?>
的个人中心</a></li>
			  <li class="active"><span class="glyphicon glyphicon-bell"></span>  通知与提醒</li>
			</ol>
		</div>
		<div class="panel-body row">
			<div class="col-sm-2">
				<div class="btn-group">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
						<span class="glyphicon glyphicon-th"></span> 选择你要查阅的项目 <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
					    <li><a href="#"><span class="glyphicon glyphicon-bell"></span> 通知与提醒</a></li>
					    <li><a href="#"><span class="glyphicon glyphicon-th-list"></span> 提醒事项</a></li>
					    <li><a href="#"><span class="glyphicon glyphicon-book"></span> 备忘录</a></li>
					    <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> 日历</a></li>
					    <li class="divider"></li>
					    <li><a href="#">帐户管理与设置</a></li>
					</ul>
				</div>
				<br /><br />
				<ul class="list-group nav2">
					<li class="list-group-item btn btn-default">
						<span class="badge">141</span>所有提醒事项
					</li>
					<li class="list-group-item btn btn-default">
						<span class="badge">4</span>未完成提醒事项
					</li>
					<li class="list-group-item btn btn-default">
						<span class="badge">14</span>已完成提醒事项
					</li>
				</ul>
			</div>
			<div class="col-sm-10">
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
						<?php $_smarty_tpl->tpl_vars['state'] = new Smarty_variable(array(1=>'<span class="label label-default">未完成</span>',2=>'',3=>'<span class="label label-success">已完成</span>'), null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taskList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
							<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['content'])===null||$tmp==='' ? 'null' : $tmp);?>
</td>
							<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['v']->value['date'])===null||$tmp==='' ? 'null' : $tmp);?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['state']->value[$_smarty_tpl->tpl_vars['v']->value['state']];?>
</td>							
							<td>
								<button type="button" class="btn btn-xs btn-default">取消完成</button>
								<button type="button" class="btn btn-xs btn-success">标记完成</button>
								<button type="button" class="btn btn-xs btn-primary">修改</button>
								&nbsp;
								<button type="button" class="btn btn-xs btn-danger">彻底删除</button>
							</td>
						</tr>
						<?php } ?>
					</tbody>	
				</table>
				<ul class="pagination">
					<li class="disabled"><a href="#">&laquo;</a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End 主体部分 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>