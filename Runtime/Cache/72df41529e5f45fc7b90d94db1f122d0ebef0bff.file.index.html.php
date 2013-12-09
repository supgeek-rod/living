<?php /* Smarty version Smarty-3.1.6, created on 2013-12-09 16:56:29
         compiled from "./Tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:5818325195295a1ec939228-16021393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72df41529e5f45fc7b90d94db1f122d0ebef0bff' => 
    array (
      0 => './Tpl/index.html',
      1 => 1386579387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5818325195295a1ec939228-16021393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5295a1ec9f3c3',
  'variables' => 
  array (
    'notelist' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295a1ec9f3c3')) {function content_5295a1ec9f3c3($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="__ROOT__/Tpl/css/fullcalendar.css" rel="stylesheet" media="screen">
<link href="__ROOT__/Tpl/css/fullcalendar.print.css" rel="stylesheet" media="screen">
<link href="__ROOT__/Tpl/css/calendar.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="__ROOT__/Tpl/js/bootstrap-datetimepicker.zh-CN.js"></script>
<!-- Start 主体部分 -->
<div id="mainer">
	<div class="row">
	    <div class="main col-lg-12">
			<!-- index -->
			<div class="col-lg-5">
			    <div class="row">
					<!-- 搜索与智能添加 -->
					<div class="col-lg-12">
					    <div class="input-group" id="search_pusl">
							<input type="text" class="form-control so-add">
							<span class="input-group-btn">
							    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal">搜索</button>
							    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal">快速添加</button>
							</span>
					    </div>
					</div>
					<!-- 通知 -->
					<div class="col-lg-12">
					    <div class="panel panel-default" id="notify">
							<div class="panel-heading">
							    <h3 class="panel-title"><span class="glyphicon glyphicon-bell"> 通知</span></title>
							</div>
							<div class="panel-body"></div>
						</div>
					</div>
				</div>
		    </div>
			<!-- 提醒事项 -->
			<div class="col-lg-3">
			    <div class="panel panel-default" id="task">
					<div class="panel-heading">
					    <h3 class="panel-title">
							<span class="glyphicon glyphicon-th-list dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"></span>&nbsp;&nbsp;
							<span class="dropdown-toggle">提醒事项</span>
							<div class="task-icon pull-right" style="margin-top:-5px">
								<a href="javascript:taskBack()" class="glyphicon glyphicon-chevron-left text-center btn btn-default" style="display:none"> </a>
								<a href="javascript:taskEdit()" class="disabled glyphicon glyphicon-pencil text-center btn btn-default"> </a>
								<a href="" class="glyphicon glyphicon-remove text-center btn btn-default" style="display:none"> </a>
								<a href="javascript:taskAdd()" class="glyphicon glyphicon-plus text-center btn btn-default"> </a>
								<a class="glyphicon glyphicon-ok text-center btn btn-default" style="display:none"> </a>
							</div>
					    </h3>
					</div>
					<div class="panel-body">
					    <ul class="list-group">
					    	<script type="text/javascript">
					    		$(function(){
					    			taskStart();
					    		})
					    	</script>
					    	<p>点击右上角开始添加你的提醒事项</p>
					    </ul>
			    		<li class="newTask-model list-group-item" style="display:none">
			    		<span class="input-group">
			    			<input type="text" class="form-control input-sm task-title" placeholder="Title">
			    			<span class="input-group-btn">
			    				<button class="btn btn-default btn-sm btn-success" type="button" onclick="taskSubmit()"><span class="glyphicon glyphicon-ok"></span></button>
			    				<button class="btn btn-default btn-sm more btn-info task-more-btn" type="button" onclick="taskMore()"><span class="glyphicon glyphicon-chevron-down"></span></button>
			    			</span>
			    		</span>
						<div class="task-more form-group hidden">
							<div class="input-group date task_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
								<input class="form-control task-date" size="16" type="text" name="taskdate" value="" placeholder="选择提醒时间" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
							<script type="text/javascript">
								$('.task_date').datetimepicker({
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
				    		<textarea name="taskcontent" class="form-control task-content" rows="2" placeholder="提醒事项备注"></textarea>
			    		</div>
			    	</li>							
					</div>
				</div>
			</div>
			
			<!-- 备忘录 -->
			<div class="col-lg-4">
			    <div class="panel panel-default" id="note">
					<div class="panel-heading">
					    <h3 class="panel-title" style="vertical-align:middle">
					    	<span class="glyphicon glyphicon-book"> 备忘录</span>
					    	<div class="note-icon pull-right" style="margin-top:-5px">
								<a href="javascript:noteBack()" class="glyphicon glyphicon-chevron-left text-center btn btn-default" style="display:none"> </a>
								<a class="disabled glyphicon glyphicon-pencil text-center btn btn-default"> </a>
								<a href="javascript:noteAdd()" class="glyphicon glyphicon-plus text-center btn btn-default"> </a>
								<a class="glyphicon glyphicon-ok text-center btn btn-primary" href="javascript:noteSubmit()" style="display:none"> </a>
							</div>
					    </h3>
					</div>
					<div class="panel-body">
						<!-- note 修改和添加 -->
						<div id="note-addedit" style="display:none">
						    <div class="input-group input-group-sm note-title">
								<span class="input-group-addon">Title</span>
								<input type="text" class="form-control title" placeholder="Title">
							</div>
							<textarea placeholder="Note contents" class="form-control note-content" rows="13"></textarea>
						</div>
						<!-- note 详细 -->
						<div id="note-content" style="display:none">
							<h4 class="text-center title"></h4>
							<hr style="margin:2px 0 8px" />
							<div class="content"></div>
						</div>
					    <!-- note 列表 -->
					    <ul class="list-group" id="note-list">
					    	<script type="text/javascript">
					    		//noteStart();
					    	</script>
					    	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
							<li class="list-group-item" noteid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
							<?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
							<p>没有数据</p>
							<?php } ?>
					    </ul>
					</div>
			    </div>
			</div>
		<div class="clearfix"></div>
	</div>
	<!-- 日历 -->
	<div class="row hidden">
		<div class="col-lg-12">
			<div class="panel panel-default" id="menology">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-calendar"> 我的日历</span></h3>
				</div>
				<div class="panel-body">
					<div id="calendar"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End 主体部分 -->
<script type="text/javascript" src="__ROOT__/Tpl/js/liv_function.js"></script>
<script type="text/javascript" src="__ROOT__/Tpl/js/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="__ROOT__/Tpl/js/fullcalendar.js"></script>

<!-- 日历生成 -->
<script>
	/*
	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'today prev,next  month,agendaWeek,agendaDay'
			},
			selectable: true,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		
	});
	*/
</script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>