<?php /* Smarty version Smarty-3.1.6, created on 2013-12-20 15:02:22
         compiled from "./Tpl/readme.html" */ ?>
<?php /*%%SmartyHeaderCode:92912862552b3eb7ebf47d5-99013667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '761de4e9f58b5b0cdd47ee7b25eb5da147c90942' => 
    array (
      0 => './Tpl/readme.html',
      1 => 1387468766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92912862552b3eb7ebf47d5-99013667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52b3eb7ecada5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b3eb7ecada5')) {function content_52b3eb7ecada5($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/github/living/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>Readme&nbsp;&nbsp;&nbsp;&nbsp;- Living. <?php echo smarty_modifier_date_format(time(),'%m-%d');?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Boot include -->
<link href="<?php echo @__ROOT__;?>
/Tpl/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo @__ROOT__;?>
/Tpl/css/font-awesome.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="<?php echo @__ROOT__;?>
/Tpl/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo @__ROOT__;?>
/Tpl/js/bootstrap.min.js"></script>

<!-- 样式重写 -->
<style>
	body { background:#EEE; }
	.jumbotron { margin:0 12%; }
</style>
</head>

<body>
<div class="jumbotron">
	<h1>This is living!	<span class="pull-right"><a href="__APP__/index/index" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;返回living</a></span>
</h1>
	<p>
		这是一个<span class="label label-primary">生活</span>和<span class="label label-primary">工作</span>的&nbsp;&nbsp;<span class="label label-default">计划</span> <span class="label label-default">整理</span> <span class="label label-default">记录</span>工具<br />
		释放大脑中琐碎零乱的事物，让你全身心投入其中，以更高效更轻松更便捷地完成你的任务。
	</p>
	<div class="panel panel-default hidden">
		<div class="panel-heading" style="font-size:18px">给living一个评价吧 <span class="caret"></span></div>
		<div class="panel-body hidden">
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-star"></span> 很酷的玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-star"></span> 棒极了
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-star"></span> 很酷有玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-hand-down"></span> 很酷有玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<hr />
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-hand-down"></span> 糟糕透了
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-hand-down"></span> 很酷有玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-hand-down"></span> 很酷有玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-hand-down"></span> 很酷有玩意儿
			</button>&nbsp;&nbsp;&nbsp;
			<hr />
			<p>写上你的评语</p>
			<textarea class="form-control" rows="3"></textarea>
			<button style="margin:12px 0 0" type="submit" class="btn btn-primary" role="button">提交</button>

		</div>
	</div>

	<div class="well">
		<h2><i class="icon-spinner icon-spin"></i>&nbsp;&nbsp;follow Rod</h2>
		<hr />
		<address>
			<h3>Contact supgeek.rod</h3>
			<p><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp; supgeek.rod@gmail.com</p>
			<p><i class="icon-home"></i>&nbsp;&nbsp; <a href="http://supgeek-rod.com" target="_blank">supgeek-rod.com</a></p>
			<p><i class="icon-google-plus-sign"></i>&nbsp;&nbsp; <a href="" target="_blank">张小天真</a></p>
			<p><i class="icon-github"></i>&nbsp;&nbsp; <a href="" target="_blank">@supgeek-rod</a></p>
		</address>

		<h3>Project at github</h3>
		<p><i class="icon-github"> living:</i>&nbsp;&nbsp; <a href="" target="_blank">pages</a> | <a href="https://github.com/supgeek-rod/living.git" target="_blank">clone git</a></p>
		<!-- 
		<p><i class="icon-github"> web catch:</i>&nbsp;&nbsp; <a href="" target="_blank">pages</a> | <a href="https://github.com/supgeek-rod/web-catch.git" target="_blank">clone git</a></p>
		<p><i class="icon-github"> sb fengqing:</i>&nbsp;&nbsp; <a href="" target="_blank">pages</a> | <a href="https://github.com/supgeek-rod/web-catch.git" target="_blank">clone git</a></p>
		-->

	</div>
</div>

</body>
</html>
<?php }} ?>