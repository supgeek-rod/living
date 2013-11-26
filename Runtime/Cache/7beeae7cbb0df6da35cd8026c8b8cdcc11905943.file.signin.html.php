<?php /* Smarty version Smarty-3.1.6, created on 2013-11-26 15:25:00
         compiled from "./Tpl/signin.html" */ ?>
<?php /*%%SmartyHeaderCode:191319197952943c6571cda2-82706789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7beeae7cbb0df6da35cd8026c8b8cdcc11905943' => 
    array (
      0 => './Tpl/signin.html',
      1 => 1385450699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191319197952943c6571cda2-82706789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52943c6577c87',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52943c6577c87')) {function content_52943c6577c87($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<!-- Start 主体部分 -->
<div id="mainer">
  <div id="signin" class="container">
        <form class="form-signin">
          <h2 class="form-signin-heading">
          	<b>登录living</b>
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