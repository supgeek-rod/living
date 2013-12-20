<?php /* Smarty version Smarty-3.1.6, created on 2013-12-20 15:20:20
         compiled from "./Tpl/center/note.html" */ ?>
<?php /*%%SmartyHeaderCode:199763485452b3efb4caa5d5-57353583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39d020b76566f081b6eb86bdef90f9a45a2d9137' => 
    array (
      0 => './Tpl/center/note.html',
      1 => 1387354537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199763485452b3efb4caa5d5-57353583',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52b3efb4d1cc2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b3efb4d1cc2')) {function content_52b3efb4d1cc2($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Start 主体部分 -->
<script type="text/javascript" src="__ROOT__/Tpl/js/bootstrap-datetimepicker.zh-CN.js"></script>
<div id="center">
	<div class="panel panel-default">
		<?php echo $_smarty_tpl->getSubTemplate ('tpl/center/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="panel-body row center_main">
			<?php echo $_smarty_tpl->getSubTemplate ('tpl/center/nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>