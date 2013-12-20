<?php /* Smarty version Smarty-3.1.6, created on 2013-12-20 14:28:05
         compiled from "tpl/center/head.html" */ ?>
<?php /*%%SmartyHeaderCode:203230353052b3e3756202f0-62047108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a84099d2d38c387b4425e45a50b1c23098c728ce' => 
    array (
      0 => 'tpl/center/head.html',
      1 => 1387268258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203230353052b3e3756202f0-62047108',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52b3e37566abe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b3e37566abe')) {function content_52b3e37566abe($_smarty_tpl) {?><div class="panel-heading">
	<ol class="breadcrumb">
		<li><a href="__APP__"><span class="glyphicon glyphicon-home"></span> living</a></li>
		<li><a href="__APP__/center/index"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user']['name'];?>
的个人中心</a></li>
		<?php if (@ACTION_NAME=='index'){?>
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
</div><?php }} ?>