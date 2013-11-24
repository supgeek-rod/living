<?php /* Smarty version Smarty-3.1.6, created on 2013-11-25 00:45:13
         compiled from "./Tpl/index.html" */ ?>
<?php /*%%SmartyHeaderCode:188240246752920166832925-53581918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72df41529e5f45fc7b90d94db1f122d0ebef0bff' => 
    array (
      0 => './Tpl/index.html',
      1 => 1385311511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188240246752920166832925-53581918',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_52920166980a2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52920166980a2')) {function content_52920166980a2($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
				    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal">Search</button>
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
					<span class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">提醒事项<span class="caret"></span></span>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						<li class="dropdown-header" role="presentation">select lists</li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Life list</a></li>
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">work list</a></li>
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Today list</a></li>
					</ul>
					</div>
				<span class="hide glyphicon glyphicon-arrow-left pull-right"></span>
				<a href=""><span class="glyphicon glyphicon-plus pull-right" data-toggle="modal" data-target="#myModal"></span></a>
				<span class="hide glyphicon glyphicon-pencil pull-right"></span>
				<span class="hide glyphicon glyphicon-ok pull-right"></span>
			    </h3>
			</div>
			<div class="panel-body">
			    <ul class="list-group">
				<li class="list-group-item"><input type="checkbox"> 这个周未去理头发</li>
				<li class="list-group-item"><input type="checkbox"> 星期一和sup.rod一起去爬万里长城万里长城</li>
				<li class="list-group-item"><input type="checkbox"> 这个周未去理头发</li>
				<li class="list-group-item"><input type="checkbox"> 这个周未去理头发</li>
				<li class="list-group-item"><input type="checkbox"> 星期一和sup.rod一起去爬万里长城万里长城</li>
				<li class="list-group-item"><input type="checkbox"> 星期一和sup.rod一起去爬万里长城万里长城</li>
				<li class="list-group-item"><input type="checkbox"> 这个周未去理头发</li>
				<li class="list-group-item"><input type="checkbox"> 星期一和sup.rod一起去爬万里长城万里长城</li>
				<li class="list-group-item"><input type="checkbox"> 这个周未去理头发</li>
				<li class="list-group-item"><input type="checkbox"> 星期一和sup.rod一起去爬万里长城万里长城</li>
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
	</div>
	<div class="clearfix"></div>

	<!-- 日历 -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default" id="calendar">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-calendar"> 我的日历</span></h3>
				</div>
				<div class="panel-body">
				</div>
			</div>
		</div>
	</div>
    <div class="clearfix"></div>
</div>
<!-- End 主体部分 -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }} ?>