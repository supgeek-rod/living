<?php /* Smarty version Smarty-3.1.6, created on 2013-12-27 23:06:26
         compiled from "./Tpl/account/index.html" */ ?>
<?php /*%%SmartyHeaderCode:155150557552b3eb5f822f97-50571806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fe29ed0c858264116351f42252f6bcbc23f7a2f' => 
    array (
      0 => './Tpl/account/index.html',
      1 => 1388020229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155150557552b3eb5f822f97-50571806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52b3eb5f9d4b2',
  'variables' => 
  array (
    'sumTaskNo' => 0,
    'sumTaskOk' => 0,
    'sumNote' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b3eb5f9d4b2')) {function content_52b3eb5f9d4b2($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/github/living/ThinkPHP/Extend/Vendor/Smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Start 主体部分 -->
<div id="account">
	<div class="panel panel-default main">
		<div class="panel-heading">
			<ol class="breadcrumb">
				<li><a href="__APP__"><span class="glyphicon glyphicon-home"></span> living</a></li>
				<li><a href="__APP__/account/index"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user']['name'];?>
的用户中心</a></li>
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
					<div class="panel-heading"><?php echo $_SESSION['user']['name'];?>
 的基本信息</div>
					<div class="panel-body">
						hey, 亲爱的<?php echo $_SESSION['user']['name'];?>
<br />
						感谢你使用living，希望能给你的生活和工作带去活力和快乐
					</div>
					<table class="table">
						<tr>
							<td width="2"></td>
							<th width="140">帐户名：</th>
							<td><?php echo $_SESSION['user']['email'];?>
</td>
						</tr>
						<tr>
							<td></td>
							<th>昵称：</th>
							<td><?php echo $_SESSION['user']['name'];?>
</td>
						</tr>
						<tr>
							<td></td>
							<th>注册日期：</th>
							<td><?php echo smarty_modifier_date_format($_SESSION['user']['regtime'],"%Y-%m-%d");?>
  &nbsp;&nbsp;&nbsp; <?php echo smarty_modifier_date_format((time()-$_SESSION['user']['regtime']),"%d");?>
 天</td>
						</tr>
						<tr>
							<td></td>
							<th>提醒事项统计：</th>
							<td><span class="label label-default"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['sumTaskNo']->value)===null||$tmp==='' ? 0 : $tmp);?>
 task</span> / <span class="label label-success"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['sumTaskOk']->value)===null||$tmp==='' ? 0 : $tmp);?>
 perfect</span></td>
						</tr>
						<tr>
							<td></td>
							<th>备忘录统计：</th>
							<td><span class="badge"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['sumNote']->value)===null||$tmp==='' ? 0 : $tmp);?>
 Note</span></td>
						</tr>
						<tr>
							<td></td>
							<th></th>
							<td align="right" valign="top"><small><?php echo $_SESSION['user']['name'];?>
, <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
  </small></td>
						</tr>
					</table>
				</div>

				<!-- 修改帐户信息 -->
				<div class="panel panel-default account-info" style="display:none">
					<div class="panel-heading">修改 <?php echo $_SESSION['user']['name'];?>
 的用户信息</div>
					<div class="panel-body">
						hey, 亲爱的<?php echo $_SESSION['user']['name'];?>
<br />
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
								<td><?php echo $_SESSION['user']['email'];?>
</td>
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
					<div class="panel-heading">修改 <?php echo $_SESSION['user']['name'];?>
 的用户密码</div>
					<div class="panel-body">
						hey, 亲爱的<?php echo $_SESSION['user']['name'];?>
<br />
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
								<td><?php echo $_SESSION['user']['email'];?>
</td>
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
<script type="text/javascript" src="__ROOT__/Tpl/js/liv_account.js"></script>
<!-- End 主体部分 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>