<?php /* Smarty version Smarty-3.1.6, created on 2013-12-20 16:54:35
         compiled from "./Tpl/center/index.html" */ ?>
<?php /*%%SmartyHeaderCode:202895863252b405cb3e3254-70035127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97a0f4d0454ef7c0079f4cc265d51df0926aa8ec' => 
    array (
      0 => './Tpl/center/index.html',
      1 => 1387354382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202895863252b405cb3e3254-70035127',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52b405cb43e1b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b405cb43e1b')) {function content_52b405cb43e1b($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Start 主体部分 -->
<script type="text/javascript" src="__ROOT__/Tpl/js/bootstrap-datetimepicker.zh-CN.js"></script>
<div id="center">
	<div class="panel panel-default">
		<?php echo $_smarty_tpl->getSubTemplate ('tpl/center/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="panel-body row center_main">
			<?php echo $_smarty_tpl->getSubTemplate ('tpl/center/nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<div class="col-sm-10 row">
				<div class="col-sm-3 pull-right" style="height:400px; padding-top:180px; background:#F1F1F1">This AD&nbsp;&nbsp; W:col-sm-3 / H:400px</div>
				<div class="panel-group col-sm-9" id="accordion">
					<script type="text/javascript">
						$(function(){
							//noteStart();
						});
					</script>
					<div class="panel panel-default remind">
						<div class="panel-heading"><span class="glyphicon glyphicon-bell"></span>&nbsp;&nbsp;&nbsp;&nbsp;提醒</div>
						<div class="panel-collapse in">
							<div class="panel-body" style="min-height:300px">
								<p class="alert alert-info">正在开发中...</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default inform" style="display:none">
						<div class="panel-heading"><span class="glyphicon glyphicon-bell"></span>&nbsp;&nbsp;&nbsp;&nbsp;通知</div>
						<div class="panel-collapse in">
							<div class="panel-body" style="min-height:300px">
								<p class="alert alert-info">正在开发中...</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end main(col-sm-10 row) -->

		</div>
	</div>
</div>
<script type="text/javascript" src="__ROOT__/Tpl/js/liv_center.js"></script>
<!-- End 主体部分 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>