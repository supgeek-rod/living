<?php /* Smarty version Smarty-3.1.6, created on 2013-11-29 23:48:37
         compiled from "./Tpl/user/register.html" */ ?>
<?php /*%%SmartyHeaderCode:1498276195295a530d6d9a1-63279767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eecd18c0aad2de38bc11d1f4cc3d164ce9ad885' => 
    array (
      0 => './Tpl/user/register.html',
      1 => 1385740117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1498276195295a530d6d9a1-63279767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5295a530deefa',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295a530deefa')) {function content_5295a530deefa($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Start 主体部分 -->
<div id="mainer">
  <div id="mainer">
  <div class="jumbotron text-center" style="padding-top:12px; padding-bottom:22px;">
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
        <label class="col-xs-3 control-label">性别:</label>
        <div class="col-xs-9">
          <div class="radio-inline">
            <label>
              <input type="radio" name="sex" value="1" /> 男
            </label>
          </div>
          <div class="radio-inline">
            <label>
              <input type="radio" name="sex" value="2" /> 女
            </label>
          </div>
          <div class="radio-inline">
            <label>
              <input type="radio" name="sex" value="3" checked/> 未知
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-xs-3 control-label">出生日期:</label>
        <div class="input-group date form_date col-xs-9" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
          <input class="form-control" size="16" type="text" name="birthday" value="" readonly>
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
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
<!-- script -->
<script type="text/javascript">
  $('.form_date').datetimepicker({
    language:  'fr',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  </script>
<!-- end script -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>