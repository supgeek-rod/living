<?php /* Smarty version Smarty-3.1.6, created on 2013-12-06 19:51:56
         compiled from "./Tpl/header.html" */ ?>
<?php /*%%SmartyHeaderCode:12055214595295a1ec9f8e63-02901687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed2f51eb73441672ebe5dddb21df2cb370cd47e0' => 
    array (
      0 => './Tpl/header.html',
      1 => 1386330709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12055214595295a1ec9f8e63-02901687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5295a1eca61a4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295a1eca61a4')) {function content_5295a1eca61a4($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>living</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
	app = "__APP__";
	liv_module = "<?php echo @MODULE_NAME;?>
";
	liv_action = "<?php echo @ACTION_NAME;?>
";
</script>
<link href="__ROOT__/Tpl/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="__ROOT__/Tpl/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="__ROOT__/Tpl/css/living.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="__ROOT__/Tpl/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="__ROOT__/Tpl/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__ROOT__/Tpl/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="__ROOT__/Tpl/js/liv_start.js"></script>
</head>

<body>
<!-- Start 头部 -->
<div id="header" class="">
	<span class="navbar-text pull-left" style="margin:-2px 0 0 20px;"><span class="h1"><a href="__APP__/index/index">living</a> <span class="small" style="font-size:18px;">high efficiency life for everyday.</span></span></span>
	<ul class="nav nav-tabs pull-right">
	    <li class="home active"><a href="__APP__"><span class="glyphicon glyphicon-home"> 首页</span></a></li>
	    <?php if (empty($_SESSION['user'])){?>
	   	<li class="signin register"><a href="__APP__/user/signin"><span class="glyphicon glyphicon-user"> 注册/登录</span></a></li>
	    <?php }else{ ?>
	    <li class="center"><a href="__APP__/center/index"><span class="glyphicon glyphicon-user"> 个人中心</span></a></li>
	    <li class="account dropdown"><a href="__APP__/account/index"><span class="glyphicon glyphicon-cog"> 帐户设置</span></span></a>	
	    	<ul class="setup-go dropdown-menu text-right pull-right" role="menu" aria-labelledby="dropdownMenu1" style="min-width:150px !important; margin-top:2px;">
				<li role="presentation"><a><?php echo $_SESSION['user']['name'];?>
, 上午好!</a></li>
	    		<li role="presentation" class="divider"></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">开启使用提示</a></li>
			    <li role="presentation" class="divider"></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="__APP__/user/signout">安全退出</a></li>
			</ul>
	    </li>
	    <?php }?>
	</ul>
	<div class="clearfix"></div>
	<hr style="margin:0" />
</div>
<!-- End 头部 -->
<?php }} ?>