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
<div id="account">
	<div class="panel panel-default main">
		<div class="panel-heading">
			<ol class="breadcrumb">
				<li><a href="__APP__"><span class="glyphicon glyphicon-home"></span> living</a></li>
				<li><a href="__APP__/account/index"><span class="glyphicon glyphicon-user"></span> <?php echo ($_SESSION['user']['name']); ?>的用户中心</a></li>
				<li class="active">用户基本信息</li>
			</ol>
		</div>
		<div class="panel-body row account-main">
			<div class="col-md-1">
				<div style="background:#F1F1F1; text-align:center; min-height:400px; line-height:2em; padding-top:120px; word-break:keep-all;">This is AD<br />W: colmd-1<br />H: 400px</div>
			</div>
	  		<div class="col-md-2" style="padding-top:18px;">
				<div class="list-group nav-account">
					<a href="javascript:accountBasic()" class="list-group-item active">用户基本信息</a>
					<a href="javascript:accountUpdateInfo()" class="list-group-item">修改信息</a>
					<a href="javascript:accountUpdatePasswd()" class="list-group-item">修改密码</a>
				</div>
			</div>
			<div class="col-md-6" style="padding-top:18px;">
				<!-- 帐户基本信息 -->
				<div class="panel panel-default account-basic">
					<div class="panel-heading"><?php echo ($_SESSION['user']['name']); ?> 的基本信息</div>
					<div class="panel-body">
						hey, 亲爱的<?php echo ($_SESSION['user']['name']); ?><br />
						感谢你使用living，希望能给你的生活和工作带去活力和快乐
					</div>
					<table class="table">
						<tr>
							<td width="2"></td>
							<th width="140">帐户名：</th>
							<td><?php echo ($_SESSION['user']['email']); ?></td>
						</tr>
						<tr>
							<td></td>
							<th>昵称：</th>
							<td><?php echo ($_SESSION['user']['name']); ?></td>
						</tr>
						<tr>
							<td></td>
							<th>注册日期：</th>
							<td><?php echo (date("Y-m-d",$_SESSION['user']['regtime'])); ?>  &nbsp;&nbsp;&nbsp;<!-- <?php echo (date("d",$_SESSION['user']['regtime'])); ?> 天--></td>
						</tr>
						<tr>
							<td></td>
							<th>提醒事项统计：</th>
							<td><span class="label label-default"><?php echo (($sumTaskNo)?($sumTaskNo):"0"); ?> task</span> / <span class="label label-success"><?php echo (($sumTaskOk)?($sumTaskOk):"0"); ?> perfect</span></td>
						</tr>
						<tr>
							<td></td>
							<th>备忘录统计：</th>
							<td><span class="badge"><?php echo (($sumNote)?($sumNote):"0"); ?> Note</span></td>
						</tr>
						<tr>
							<td></td>
							<th></th>
							<td align="right" valign="top"><small><?php echo ($_SESSION['user']['name']); ?>, <?php echo (date("Y-m-d",date('Y-m-d g:i a',time()))); ?>  </small></td>
						</tr>
					</table>
				</div>

				<!-- 修改帐户信息 -->
				<div class="panel panel-default account-info" style="display:none">
					<div class="panel-heading">修改 <?php echo ($_SESSION['user']['name']); ?> 的用户信息</div>
					<div class="panel-body">
						hey, 亲爱的<?php echo ($_SESSION['user']['name']); ?><br />
						换个你喜欢的名字，和living一起创造精彩的生活
					</div>
					<div class="update-name-success" style="margin:0 18px; display:none">
						<hr/ style="margin-top:0">
						<p class="alert alert-success"><span class="glyphicon glyphicon-refresh"></span> 修改成功，正在刷新页面</p>
					</div>
					<form action="" method="post" onsubmit="return updateName()">
						<table class="table">
							<tr>
								<td></td>
								<th width="100">帐户名：</th>
								<td><?php echo ($_SESSION['user']['email']); ?></td>
							</tr>
							<tr>
								<td></td>
								<th>昵称：</th>
								<td><span class="col-lg-9" style="padding:0;"><input type="text" class="user-name form-control input-sm" placeholder="nickname"></span></td>
							</tr>
							<tr>
								<td></td>
								<td colspan="2">
									<input type="submit" class="btn btn-primary btn-sm" value="提交修改" />
									&nbsp;&nbsp;
									<input type="reset" class="btn btn-default btn-sm" value="清空填写" />
								</td>
							</tr>
						</table>
					</form>
				</div>

				<!-- 修改密码 -->
				<div class="panel panel-default account-passwd" style="display:none">
					<div class="panel-heading">修改 <?php echo ($_SESSION['user']['name']); ?> 的用户密码</div>
					<div class="panel-body">
						hey, 亲爱的<?php echo ($_SESSION['user']['name']); ?><br />
						更换个简单好记的密码，记得经常修改就好了
					</div>
					<div class="update-passwd-success" style="margin:0 18px; display:none">
						<hr/ style="margin-top:0">
						<p class="alert alert-success"><span class="glyphicon glyphicon-refresh"></span> 修改成功，返回重新登录</p>
					</div>
					<form action="" method="post" onsubmit="return updatePasswd()">
						<table class="table">
							<tr>
								<td></td>
								<th width="100">帐户名：</th>
								<td><?php echo ($_SESSION['user']['email']); ?></td>
							</tr>
							<!--
							<tr>
								<td></td>
								<th>旧密码：</th>
								<td><span class="col-lg-9" style="padding:0;"><input name="old-passwd" type="password" class="form-control input-sm" placeholder="old password"></td>
							</tr>
							-->
							<tr>
								<td></td>
								<th>新密码：</th>
								<td><span class="col-lg-9" style="padding:0;"><input name="new-passwd1" type="password" class="new-passwd1 form-control input-sm" placeholder="new password"></span></td>
							</tr>
							<!-- 
							<tr>
								<td></td>
								<th>重复新密码：</th>
								<td><span class="col-lg-9" style="padding:0;"><input name="new-passwd2" type="password" class="form-control input-sm" placeholder="new password"></span></td>
							</tr>
							-->
							<tr>
								<td></td>
								<td colspan="2">
									<input type="submit" class="btn btn-primary btn-sm" value="提交修改" />
									&nbsp;&nbsp;
									<input type="reset" class="btn btn-default btn-sm" value="清空填写" />
								</td>
							</tr>
						</table>
					</form>
				</div>

			</div>
			<div class="col-md-3">
				<div style="background:#F1F1F1; min-height:400px; padding-top:180px; text-align:center">This is AD   W:col-sm-3 / H:400px</div>
			</div>
		</div>
  	</div>
</div>
<script type="text/javascript" src="<?php echo (C("LIVING_PUBLIC")); ?>/Js/liv_account.js"></script>
<!-- End 主体部分 -->
<!-- Start 底部 -->
<div id="footer">
	<hr style="margin-bottom:6px" />
	<span>2013@ <a href="__APP__/index/readme" class="text-success glyphicon glyphicon-send">living</a> by <a class="glyphicon glyphicon-user" href="http://supgeek-rod.com" target="_blank">sup.rod</a></span>
</div>
<!-- End 底部 -->
</body>
</html>