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
<script type="text/javascript" src="__ROOT__/Tpl/js/bootstrap-datetimepicker.zh-CN.js"></script>
<div id="center">
	<div class="panel panel-default">
		<div class="panel-heading">
	<ol class="breadcrumb">
		<li><a href="__APP__"><span class="glyphicon glyphicon-home"></span> living</a></li>
		<li><a href="__APP__/center/index"><span class="glyphicon glyphicon-user"></span> <?php echo ($_SESSION['user']['name']); ?>的个人中心</a></li>

		<?php if(ACTION_NAME== 'index'): ?><li class="active"><span class="glyphicon glyphicon-bell"></span> 提醒与通知</li><?php endif; ?>		

		<?php if(ACTION_NAME== 'task'): ?><li><a href="#"><span class="glyphicon glyphicon-th-list"></span> 提醒事项</a></li>
		<li class="active">所有提醒事项</li><?php endif; ?>

		<?php if(ACTION_NAME== 'note'): ?><li><a href="#"><span class="glyphicon glyphicon-book"></span> 备忘录</a></li>
		<li class="active">所有备忘录记录</li><?php endif; ?>

		<?php if(ACTION_NAME== 'menology'): ?><li><a href="#"><span class="glyphicon glyphicon-calendar"></span> 日历</a></li>
		<li class="active">所有日历记录</li><?php endif; ?>


	</ol>
</div>
		<div class="panel-body row center_main">
			<div class="col-sm-2">
	<div class="btn-group menu btn-block">
		<button class="btn btn-block btn-success dropdown-toggle" type="button" data-toggle="dropdown">
			<span class="glyphicon glyphicon-th"></span>
				&nbsp;
				<?php if(ACTION_NAME== 'index'): ?>通知与提醒<?php endif; ?>
				<?php if(ACTION_NAME== 'task'): ?>提醒事项<?php endif; ?>
				<?php if(ACTION_NAME== 'note'): ?>备忘录<?php endif; ?>
				<?php if(ACTION_NAME== 'menology'): ?>日历<?php endif; ?>
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
		<?php if(ACTION_NAME== 'index'): ?><li class="active">
			<a href="javascript:bellRemind()"><span class="badge pull-right"></span><span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;提醒</a>
		</li>
		<li>
			<a href="javascript:bellInform()"><span class="badge pull-right"></span><span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;通知</a>
		</li><?php endif; ?>

		<!-- task nav -->
		<?php if(ACTION_NAME== 'task'): ?><li class="task">
			<a href="javascript:taskAdd()"><span class="badge pull-right"></span><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;新增提醒 <span class="badge hidden">+1</span></a>
		</li>
		<li class="taskall">
			<a href="javascript:taskAll()"><span class="task-alls badge pull-right"><?php echo ($taskTotal); ?></span><span class="glyphicon glyphicon-bookmark"></span> 所有提醒</a>
		</li>
		<li class="taskno">
			<a href="javascript:taskNo()"><span class="task-nos badge pull-right"><?php echo ($taskNo); ?></span><span class="glyphicon glyphicon-bookmark"></span> 未完成提醒</a>
		</li>
		<li class="taskok">
			<a href="javascript:taskOk()"><span class="task-oks badge pull-right"><?php echo ($taskOk); ?></span><span class="glyphicon glyphicon-bookmark"></span> 已完成提醒</a>
		</li><?php endif; ?>

		<!-- note nav -->
		<?php if(ACTION_NAME== 'note'): ?><li class="noteall">
			<a href="javascript:noteAdd()"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新增备忘录 <span class="badge hidden">+1</span></a>
		</li>
		<li class="noteall active">
			<a href="__APP__/center/note"><span class="badge pull-right"><?php echo ($noteTotal); ?></span><span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;备忘录列表</a>
		</li><?php endif; ?>
	</ul>
	<hr />
	<div style="height:180px; background:#F1F1F1; padding-top:80px; text-align:center;">AD   W:col-sm-2 / H:180px</div>
</div>


			<div class="col-sm-10 row">
				<!-- 备忘录 -->
				<div class="col-sm-3 pull-right" style="height:400px; padding-top:180px; background:#F1F1F1">This AD&nbsp;&nbsp; W:col-sm-3 / H:400px</div>
				<div class="panel-group col-sm-9" id="accordion">
				<script type="text/javascript">
					$(function(){
						noteStart();
					});
				</script>
				</div>
				<div class="panel panel-default" id="note-addedit" style="display:none">
					<div class="panel-heading">
						<div class="input-group note-title">
							<span class="input-group-btn">
								<button onclick="noteBack()" class="btn btn-default" type="button"><span class="glyphicon glyphicon-chevron-left"></a></button>
								<button onclick="noteSubmit()" class="btn btn-default" type="button"><span class="glyphicon glyphicon-ok"></a></button>
							</span>
							<input type="text" class="form-control title" placeholder="Note name">
						</div>
					</div>
					<div class="panel-collapse in">
						<div class="panel-body">
							<textarea placeholder="Note contents" class="form-control content" rows="6"></textarea>
								<input class="id" type="hidden" name="id" />
							</div>
					</div>
				</div>
				<!-- end main(col-sm-10 row) -->

			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="__ROOT__/Tpl/js/liv_center.js"></script>
<!-- End 主体部分 -->
<!-- Start 底部 -->
<div id="footer">
	<hr style="margin-bottom:6px" />
	<span>2013@ <a href="__APP__/index/readme" class="text-success glyphicon glyphicon-send">living</a> by <a class="glyphicon glyphicon-user" href="http://supgeek-rod.com" target="_blank">sup.rod</a></span>
</div>
<!-- End 底部 -->
</body>
</html>