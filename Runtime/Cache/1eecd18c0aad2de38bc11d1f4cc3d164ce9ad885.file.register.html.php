<?php /* Smarty version Smarty-3.1.6, created on 2013-12-20 16:40:08
         compiled from "./Tpl/user/register.html" */ ?>
<?php /*%%SmartyHeaderCode:146934460152b40268b55058-01809658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eecd18c0aad2de38bc11d1f4cc3d164ce9ad885' => 
    array (
      0 => './Tpl/user/register.html',
      1 => 1387415016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146934460152b40268b55058-01809658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52b40268bc482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b40268bc482')) {function content_52b40268bc482($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Start 主体部分 -->
<div id="mainer">
  <div class="jumbotron text-center">
    <h1>Start living!</h1>
    <p>
      这是一个 <span class="label label-primary">生活</span> 和 <span class="label label-primary">工作</span> 的 <span class="label label-default">计划</span> <span class="label label-default">整理</span> <span class="label label-default">记录</span> 工具<br />
      释放大脑中琐碎零乱的事物，让你全身心投入其中，以更高效更轻松更便捷地完成你的任务。
    </p>
  </div>

  <div id="register" class="container">
    <form class="form-horizontal" role="form" action="__APP__/user/adduser" method="post">
      <h2 class="text-center">
        <b>新用户注册</b>
      </h2>
      <div class="form-group">
        <label class="col-xs-3 control-label">帐号:</label>
        <div class="col-xs-9">
          <input type="email" name="email" class="form-control" placeholder="请使用Email做为你的登录帐号">
        </div>
      </div>
      <div class="form-group">
        <label class="col-xs-3 control-label">用户昵称:</label>
        <div class="col-xs-9">
          <input type="datetime" name="name" class="form-control" placeholder="选择一个亲切的昵称">
        </div>
      </div>
      <div class="form-group">
        <label class="col-xs-3 control-label">密码:</label>
        <div class="col-xs-9">
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label class="col-xs-3 control-label">重复密码:</label>
        <div class="col-xs-9">
          <input type="password" name="password2" class="form-control" placeholder="Again Password">
        </div>
      </div>
      <div class="form-group" style="margin-top:18px">
        <div class="col-sm-12 text-center">
          <a href="__APP__/user/signin" class="btn btn-default">返回登录</a>
          <button type="submit" class="btn btn-primary col-xs-offset-1">确认注册</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End 主体部分 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>