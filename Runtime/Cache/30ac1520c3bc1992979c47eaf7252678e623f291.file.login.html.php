<?php /* Smarty version Smarty-3.1.6, created on 2013-11-26 12:03:54
         compiled from "./Tpl/index/login.html" */ ?>
<?php /*%%SmartyHeaderCode:180625481052941daabd4e07-89397154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30ac1520c3bc1992979c47eaf7252678e623f291' => 
    array (
      0 => './Tpl/index/login.html',
      1 => 1385438593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180625481052941daabd4e07-89397154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52941daac1d58',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52941daac1d58')) {function content_52941daac1d58($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<!-- Start 主体部分 -->
<div id="mainer">
<div class="container" style="width:360px; margin:68px auto 148px">
      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" placeholder="Email address" required="" autofocus="">
        <input type="password" class="form-control" placeholder="Password" required="">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
</div>
</div>
<!-- End 主体部分 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>