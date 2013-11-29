<?php /* Smarty version Smarty-3.1.6, created on 2013-11-29 23:26:33
         compiled from "./Tpl/user/signin.html" */ ?>
<?php /*%%SmartyHeaderCode:11711856695295a284343e10-66344667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfb5455cc77cb540768e5fcc90c363132209dcef' => 
    array (
      0 => './Tpl/user/signin.html',
      1 => 1385738792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11711856695295a284343e10-66344667',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5295a28439127',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295a28439127')) {function content_5295a28439127($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Start 主体部分 -->
<div id="mainer">
  <div class="jumbotron text-center">
    <h1>Happy living!</h1>
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