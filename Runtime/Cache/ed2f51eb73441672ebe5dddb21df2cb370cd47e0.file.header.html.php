<?php /* Smarty version Smarty-3.1.6, created on 2013-11-26 16:23:37
         compiled from "./Tpl/header.html" */ ?>
<?php /*%%SmartyHeaderCode:309301862529202c0752896-49651327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed2f51eb73441672ebe5dddb21df2cb370cd47e0' => 
    array (
      0 => './Tpl/header.html',
      1 => 1385454216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309301862529202c0752896-49651327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_529202c076c49',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529202c076c49')) {function content_529202c076c49($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>living</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Boot include -->
<link href="<?php echo @__ROOT__;?>
/Tpl/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo @__ROOT__;?>
/Tpl/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo @__ROOT__;?>
/Tpl/css/living.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="<?php echo @__ROOT__;?>
/Tpl/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo @__ROOT__;?>
/Tpl/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo @__ROOT__;?>
/Tpl/js/bootstrap-datetimepicker.min.js"></script>
</head>

<body>
<!-- Start 头部 -->
<div id="header" class="">
	<span class="navbar-text pull-left" style="margin:-2px 0 0 20px;"><span class="h1"><a href="__APP__/index/index">living</a> <span class="small" style="font-size:18px;">high efficiency life for everyday.</span></span></span> 
	<ul class="nav nav-tabs pull-right">
	    <!-- <span class="navbar-text pull-left" style="width:70%;margin:6px 0 6px 20px;"><span class="h1">living <span class="small" style="font-size:18px;">high efficiency life for everyday.</span></span></span> -->

	    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"> 首页</span></a></li>
	    <li><a href="#"><span class="glyphicon glyphicon-user"> 个人中心</span></a></li>
	    <li><a href="__APP__/index/signin"><span class="glyphicon glyphicon-cog"> 帐户设置</span></a></li>
	</ul>
	<div class="clearfix"></div>
	<hr style="margin:0" />
</div>
<!-- End 头部 --><?php }} ?>