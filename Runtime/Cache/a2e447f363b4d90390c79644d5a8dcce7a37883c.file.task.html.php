<?php /* Smarty version Smarty-3.1.6, created on 2013-12-20 14:28:05
         compiled from "./Tpl/center/task.html" */ ?>
<?php /*%%SmartyHeaderCode:14769584552b3e375574f59-18673760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2e447f363b4d90390c79644d5a8dcce7a37883c' => 
    array (
      0 => './Tpl/center/task.html',
      1 => 1387415586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14769584552b3e375574f59-18673760',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52b3e37560b09',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b3e37560b09')) {function content_52b3e37560b09($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Start 主体部分 -->
<script type="text/javascript" src="__ROOT__/Tpl/js/bootstrap-datetimepicker.zh-CN.js"></script>
<div id="center">
	<div class="panel panel-default">
		<?php echo $_smarty_tpl->getSubTemplate ('tpl/center/head.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="panel-body row center_main">
			<?php echo $_smarty_tpl->getSubTemplate ('tpl/center/nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<div class="col-sm-10 row">
				<!-- 提醒事项 -->
				<script type="text/javascript">
					$(function(){
						taskAll();
					});
				</script>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>序号</th>
							<th>标题</th>
							<th>事项内容</th>
							<th>提醒时间</th>
							<th>当前状态</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody></tbody>	
				</table>

				<!-- task 编辑模态框 -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">提醒事项</h4>
							</div>
							<div class="modal-body">
								<div class="input-group">
									<span id="datetimepicker" class="date form_date input-group-btn" data-date-format="dd MM yyyy" data-link-field="task-date" data-link-format="yyyy-mm-dd">
										<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-time"></span></button>
									</span>
									<input type="hidden" id="task-date" value="">
									<script type="text/javascript">
										$('#datetimepicker').datetimepicker({
									        language:  'zh-CN',
									        weekStart: 1,
									        todayBtn:  1,
											autoclose: 1,
											todayHighlight: 1,
											startView: 2,
											minView: 2,
											forceParse: 0
									    });
						            </script>
						            <span class="input-group-addon task-time">未有时间的提醒：</span>
								  	<input type="text" class="form-control task-title" placeholder="提醒事项标题">
								</div>
								<textarea name="taskcontent" class="form-control task-content" rows="4" placeholder="提醒备注"></textarea>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
								<button onclick="taskSubmit()" type="button" class="btn btn-primary">提交</button>
							</div>
						</div>
					</div>
				</div>
				<hr />
				<ul class="pagination">
					<li><a href="javascript:taskPage(-1)">&laquo;</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="javascript:taskPage()">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="javascript:taskPage(1)">&raquo;</a></li>
				</ul>
				<!-- end main(col-sm-10 row) -->

			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="__ROOT__/Tpl/js/liv_center.js"></script>
<!-- End 主体部分 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>