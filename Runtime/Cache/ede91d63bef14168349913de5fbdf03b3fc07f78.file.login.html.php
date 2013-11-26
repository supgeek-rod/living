<?php /* Smarty version Smarty-3.1.6, created on 2013-11-26 13:55:47
         compiled from "./Tpl/login.html" */ ?>
<?php /*%%SmartyHeaderCode:2015975864529418e93f67d5-07783726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede91d63bef14168349913de5fbdf03b3fc07f78' => 
    array (
      0 => './Tpl/login.html',
      1 => 1385445346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015975864529418e93f67d5-07783726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_529418e9458d4',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529418e9458d4')) {function content_529418e9458d4($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<!-- Start 主体部分 -->
<div id="mainer">
<div class="container" style="width:360px; margin:68px auto 148px">
      <form class="form-signin">
        <h2 class="form-signin-heading">
        	Please sign in
        	<a href="__APP__/index/register" style="font-size:16px" class="label label-info pull-right">注册</a>
        </h2>
        <input type="text" class="form-control" placeholder="Email address" required="" autofocus="">
        <input type="password" class="form-control" placeholder="Password" required="">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> 记住我的登录
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>
</div>
</div>
<!-- End 主体部分 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>