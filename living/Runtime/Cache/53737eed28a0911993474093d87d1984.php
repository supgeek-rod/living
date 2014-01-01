<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>happy Living. <?php echo (date('m-d',time($Think))); echo (time($Think)); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
	// 声明外链js文件需要使用的ThinkPHP变量
	var app = "__APP__";
	var liv_module = "<?php echo (MODULE_NAME); ?>";
	var liv_action = "<?php echo (ACTION_NAME); ?>";
</script>

<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/living.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (C("LIVING_PUBLIC")); ?>/Css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/living.js"></script>
</head>

<body>
<!-- Start 头部 -->
<div id="header" class="">
	<span class="navbar-text pull-left" style="margin:-2px 0 0 20px;"><span class="h1"><a href="__APP__/index/index">living</a> <span class="small" style="font-size:18px;">high efficiency life for everyday.</span></span></span>
	<ul class="nav nav-tabs pull-right">
	    <li class="home active"><a href="__APP__"><span class="glyphicon glyphicon-home"> 首页</span></a></li>
	    <?php if($_SESSION['user']['name']!= ''): ?><li class="center"><a href="__APP__/center/task"><span class="glyphicon glyphicon-user"> 个人中心</span></a></li>
	    <li class="account dropdown"><a href="__APP__/account/index"><span class="glyphicon glyphicon-cog"> 用户设置</span></span></a>	
	    	<ul class="setup-go dropdown-menu text-right pull-right" role="menu" aria-labelledby="dropdownMenu1" style="min-width:150px !important;">
				<li role="presentation"><a><?php echo ($_SESSION['user']['name']); ?>, 欢迎回来!</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">使用帮助</a></li>
			    <li role="presentation" class="divider"></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href="__APP__/user/signout">一键安全退出</a></li>
			</ul>
	    </li>
	    <?php else: ?>
	   	<li class="user"><a href="__APP__/user/signin"><span class="glyphicon glyphicon-user"> 注册/登录</span></a></li><?php endif; ?>

	</ul>
	<div class="clearfix"></div>
	<hr style="margin:0" />
</div>
<!-- End 头部 -->

<!-- Start 主体部分 -->
<div id="mainer">
  <div class="jumbotron text-center">
    <h1>Hello living!</h1>
    <p>
      这是一个 <span class="label label-primary">生活</span> 和 <span class="label label-primary">工作</span> 的 <span class="label label-default">计划</span> <span class="label label-default">整理</span> <span class="label label-default">记录</span> 工具<br />
      释放大脑中琐碎零乱的事物，让你全身心投入其中，以更高效更轻松更便捷地完成你的任务。
    </p>
  </div>

  <div id="signin" class="container">
        <form class="form-signin" action="__APP__/user/login" method="post">
          <h2 class="form-signin-heading">
          	<b>登录living</b>
          	<a href="__APP__/user/register" style="font-size:16px" class="label label-info pull-right">注册</a>
          </h2>
          <input type="text" name="email" class="form-control" placeholder="Email address" required="required" autofocus="">
          <input type="password" name="password" class="form-control" placeholder="Password" required="">
          <span class="text-danger" style="line-height:30px;">测试帐号:test@living.com&nbsp;&nbsp;&nbsp;密码:test</span>
          <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
        </form>
  </div>
</div>
<!-- End 主体部分 -->
<!-- Start 底部 -->
<div id="footer">
	<hr style="margin-bottom:6px" />
	<span>2013@ <a href="__APP__/index/readme" class="text-success glyphicon glyphicon-send">living</a> by <a class="glyphicon glyphicon-user" href="http://supgeek-rod.com" target="_blank">sup.rod</a></span>
</div>
<!-- End 底部 -->
</body>
</html>