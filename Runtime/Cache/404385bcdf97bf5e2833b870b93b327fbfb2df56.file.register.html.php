<?php /* Smarty version Smarty-3.1.6, created on 2013-11-26 15:37:55
         compiled from "./Tpl/register.html" */ ?>
<?php /*%%SmartyHeaderCode:93596826529437b04b7687-96586872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '404385bcdf97bf5e2833b870b93b327fbfb2df56' => 
    array (
      0 => './Tpl/register.html',
      1 => 1385451468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93596826529437b04b7687-96586872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_529437b04f129',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529437b04f129')) {function content_529437b04f129($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<!-- Start 主体部分 -->
<div id="mainer">
  <div id="register" class="container">
    <form class="form-horizontal" role="form">
      <h2 class="text-center" style="margin-bottom:26px">
        <b>新用户注册</b>
      </h2>
      <div class="form-group">
        <label class="col-xs-3 control-label">帐号:</label>
        <div class="col-xs-9">
          <input type="email" class="form-control" id="inputEmail3" placeholder="请使用Email做为你的帐号">
        </div>
      </div>
      <div class="form-group">
        <label class="col-xs-3 control-label">密码:</label>
        <div class="col-xs-9">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-xs-3 control-label">重复密码:</label>
        <div class="col-xs-9">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group" style="margin-top:18px">
        <div class="col-sm-12 text-center">
          <a href="__APP__/index/signin" class="btn btn-default">返回登录</a>
          <button type="submit" class="btn btn-primary col-xs-offset-1">确认注册</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End 主体部分 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>