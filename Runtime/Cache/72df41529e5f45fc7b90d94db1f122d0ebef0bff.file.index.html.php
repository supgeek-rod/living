<?php /* Smarty version Smarty-3.1.6, created on 2013-11-29 16:17:04
         compiled from "./Tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:5818325195295a1ec939228-16021393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72df41529e5f45fc7b90d94db1f122d0ebef0bff' => 
    array (
      0 => './Tpl/index.html',
      1 => 1385712984,
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
    'taskList' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5295a1ec9f3c3')) {function content_5295a1ec9f3c3($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo @__ROOT__;?>
/Tpl/css/fullcalendar.css" rel="stylesheet" media="screen">
<link href="<?php echo @__ROOT__;?>
/Tpl/css/fullcalendar.print.css" rel="stylesheet" media="screen">
<link href="<?php echo @__ROOT__;?>
/Tpl/css/calendar.css" rel="stylesheet" media="screen">
<!-- Start 主体部分 -->
<div id="mainer">
	<div class="row">
	    <div class="col-lg-12" style="height:40px"></div>
	    <div class="main col-lg-12">
		<!-- index -->
		<div class="col-lg-5">
		    <div class="row">
			<!-- 搜索与智能添加 -->
			<div class="col-lg-12">
			    <div class="input-group" id="search_pusl">
				<input type="text" class="form-control">
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
				<div class="panel-body">
				</div>
			    </div>
			</div>
		    </div>
		</div>
		<!-- 提醒事项 -->
		<div class="col-lg-3">
		    <div class="panel panel-default" id="task">
			<div class="panel-heading">
			    <h3 class="panel-title">
					<span class="glyphicon glyphicon-list dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"></span>&nbsp;&nbsp;
					<div class="dropdown" style="display:inline">	
					<span class="dropdown-toggle" id="dropdownMenu1###" data-toggle="dropdown##">提醒事项<span class="caret"></span></span>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu####1">
						<li class="dropdown-header" role="presentation">select lists</li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Life list</a></li>
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">work list</a></li>
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Today list</a></li>
					</ul>
					</div>
				<span class="hide glyphicon glyphicon-arrow-left pull-right"></span>
				<span class="glyphicon glyphicon-plus pull-right"></span>
				<span class="hide glyphicon glyphicon-pencil pull-right"></span>
				<span class="hide glyphicon glyphicon-ok pull-right"></span>
			    </h3>
			</div>
			<div class="panel-body">
			    <ul class="list-group">
			    	<?php if (!empty($_smarty_tpl->tpl_vars['taskList']->value)){?>
			    	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['taskList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<li class="list-group-item" taskid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
><input class="cbox" type="checkbox"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
					<?php } ?>
					<?php }else{ ?>
					<p>开始添加提醒事项</p>
					<?php }?>
			    </ul>
			</div>
		    </div>
		</div>
		
		<!-- 备忘录 -->
		<div class="col-lg-4">
		    <div class="panel panel-default" id="note">
				<div class="panel-heading">
				    <h3 class="panel-title"><span class="glyphicon glyphicon-edit"> 备忘录</span></h3>
				</div>
			<div class="panel-body">
			    <ul class="list-group">
					<li class="list-group-item">这个周未去理头发</li>
					<li class="list-group-item">星期一和sup.rod一起去爬万里长城万里长城</li>
			    </ul>
			</div>
		    </div>
		</div>
		<div class="clearfix"></div>
	</div>

	<!-- 日历 -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-calendar"> 我的日历</span></h3>
				</div>
				<div class="panel-body">
					<div id="calendar">
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="clearfix"></div>
</div>
<!-- End 主体部分 -->
<script type="text/javascript" src="<?php echo @__ROOT__;?>
/Tpl/js/living.js"></script>
<script type="text/javascript" src="<?php echo @__ROOT__;?>
/Tpl/js/liv_function.js"></script>
<script type="text/javascript" src="<?php echo @__ROOT__;?>
/Tpl/js/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="<?php echo @__ROOT__;?>
/Tpl/js/fullcalendar.js"></script>

<script>

	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
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

</script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>