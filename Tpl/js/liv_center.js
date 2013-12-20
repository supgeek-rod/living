/**
 * 个人中心页面js操作
 * @author: sup.rod
 */

/* ----------------------------------------------------------- */
// bell js
function bellRemind(){
	$('.inform').hide();
	$('.remind').show();
	$('.nav2 li').removeClass('active');
	$('.nav2 li').eq(0).addClass('active');
}

function bellInform(){
	$('.remind').hide();
	$('.inform').show();
	$('.nav2 li').removeClass('active');
	$('.nav2 li').eq(1).addClass('active');
}


/* ----------------------------------------------------------- */
// task js

// 分页函函数
var taskP = 1;			// 当前页
var taskTP = null;		// 总页数
var taskState = null;	// 数据状态
function taskPage(a,v){
	// 判断跳转页
	if(a == 1){
		taskP += v;
	}else{
		taskP = v;
	}
	if(taskP <= 0){
		taskP = 1;
	}
	if(taskP > taskTP){
		taskP = taskTP;
	}

	$.ajax({
		url:app+'/center/taskPage',
		type:'get',
		data:{ p:taskP,state:taskState },
		async:true,
		dataType:'json',
		success:function(data){
			taskWrite(data['result']);
			pageAt(taskP);
		},
		error:function(data){
			alert('操作失败，请重试');
		}
	});
}

// 当前分页 active
function pageAt(i){
	$('.pagination li').removeClass('active');
	$('.pagination li').eq(i).addClass('active');
}

// 分页HTML输出
function pageHtml(){
	var str = '<li><a href="javascript:taskPage(1,-1)">&laquo;</a></li>';
	for(var i=1;i<=taskTP;i++){
		str += '<li class="'+i+'"><a href="javascript:taskPage(0,'+i+')">'+i+'</a></li>';
	}
	str += '<li><a href="javascript:taskPage(true,1)">&raquo;</a></li>';
	$('.pagination').empty();
	$('.pagination').append(str);
}

// task 全部记录
function taskAll(){
	$('.nav2 li').removeClass('active');
	$('.nav2 .taskall').addClass('active');
	$('.breadcrumb .active').text('所有提醒事项');
	$.ajax({
		url:app+'/center/taskPage',
		type:'post',
		data:{ },
		async:true,
		dataType:'json',
		success:function(data){
			taskP = 1;
			taskState = null;
			taskTP = data['taskTP'];
			taskWrite(data['result']);
			pageHtml();
			pageAt(taskP);
		},
		error:function(data){
			alert('操作失败，请重试');
		}
	});
}

// task 完成记录
function taskOk(){
	$('.nav2 li').removeClass('active');
	$('.nav2 .taskok').addClass('active');
	$('.breadcrumb .active').text('完成提醒事项');
	$.ajax({
		url:app+'/center/taskPage',
		type:'post',
		data:{ state:3 },
		async:true,
		dataType:'json',
		success:function(data){
			taskP = 1;
			taskTP = data['taskTP'];
			taskState = data['state'];
			taskWrite(data['result']);
			pageHtml();
			pageAt(taskP);
		},
		error:function(data){
			alert('操作失败，请重试');
		}
	});
}

// task 未完成记录
function taskNo(){
	$('.nav2 li').removeClass('active');
	$('.nav2 .taskno').addClass('active');
	$('.breadcrumb .active').text('未完成提醒事项');
	$.ajax({
		url:app+'/center/taskPage',
		type:'post',
		data:{ state:1 },
		async:true,
		dataType:'json',
		success:function(data){
			taskP = 1;
			taskTP = data['taskTP'];
			taskState = data['state'];
			taskWrite(data['result']);
			pageHtml();
			pageAt(taskP);
		},
		error:function(data){
			alert('操作失败，请重试');
		}
	});
}

// task 删除记录
function taskRemove(id,state){
	var ob = 'tr.'+id;
	$.ajax({
		type:'post',
		url:app+'/task/remove',
		data:{ id:id },
		dataType:'json',
		success:function(data){
			$(ob).remove();
			if(state==3){
				$('.task-oks').text((Number($('.task-oks').text())-1));;	//taskok -1
			}else{
				$('.task-nos').text((Number($('.task-nos').text())-1));;	//taskno -1
			}
			$('.task-alls').text((Number($('.task-alls').text())-1));;		//taskall -1
		},
		error:function(data){
			alert('操作失败，请重试');
		}
	});
}

// task 修改/新增提交
function taskSubmit(){
	var id = $('.task-title').attr('taskid');
	var title = $('.task-title').val();
	var date = $('#task-date').val();
	var content =$('.task-content').val();
	if(id){
		ajaxUrl = app+'/task/update';
	}else{
		ajaxUrl = app+'/task/add';
	}
	$.ajax({
		type:'post',	
		url:ajaxUrl,
		data:{ id:id,title:title,date:date,content:content },
		dataType:'json',
		success:function(){
			$('#myModal').modal('hide');
			if(id){
				var ob = '.'+id;
				$(ob).find('.title').text(title);
				$(ob).find('.content').text(content);
				$(ob).find('.date').text(date);
			}else{
				taskAll();
			}
		},
		error:function(){
			alert('操作失败，请重试');
		}
	});
}

// task 新增事件
function taskAdd(){
	// 显示模态框，并更新表单value	
	$('#myModal').modal('show');
	$('.modal-title').text('新提醒事项');
	$('.task-time').text('未有时间的提醒：');
	$('.task-title').attr('taskid','');

}

// task 修改状态值
function taskUpdateState(id,state,ob){
	$.ajax({
		type:'post',
		url:app+'/task/update',
		data:{ id:id,state:state },
		dataType:'json',
		success:function(){
			if(state==1){
				var onclickv = 'taskUpdateState('+id+',3,this)';
				$(ob).text('标记完成');
				$(ob).attr('onclick',onclickv);
				$(ob).removeClass('btn-default').addClass('btn-success');
				$(ob).parent().prev().find('span').removeClass('label-success').addClass('label-default');
				$('.task-oks').text((Number($('.task-oks').text())-1));;	//taskok -1
				$('.task-nos').text((Number($('.task-nos').text())+1));;	//taskno +1
				//$(ob).addClass('disabled');									//button disabled
			}else{
				var onclickv = 'taskUpdateState('+id+',1,this)';
				$(ob).text('取消完成');
				$(ob).attr('onclick',onclickv);
				$(ob).removeClass('btn-success').addClass('btn-default');
				$(ob).parent().prev().find('span').removeClass('label-default').addClass('label-success');
				$('.task-oks').text((Number($('.task-oks').text())+1));;	//taskok +1
				$('.task-nos').text((Number($('.task-nos').text())-1));;	//taskok -1
				//$(ob).addClass('disabled');									//button disabled
			}
		},
		error:function(){
			alert('操作失败，请重试');
		}
	});	
}

// task 数据输出
function taskWrite(data){
	$('.table tbody').empty();
	var str = null;
	var state = [null,'<span class="task-state label label-default">未完成</span>',null,'<span class="task-state label label-success">已完成</span>'];
	for(var i in data){
		str += '<tr class="'+data[i]['id']+'">';
		var ii = Number(i) + 1;
		str += '<td>'+ii+'</td>';
		str += '<td class="title">'+data[i]['title']+'</td>';
		str += '<td class="content">'+data[i]['content']+'</td>';
		if(!data[i]['date']){
			//data[i]['date'] = '/ time null';  //时间为空处理
		}
		str += '<td class="date" date="'+data[i]['date']+'">'+data[i]['date']+'</td>';
		str += '<td>'+state[data[i]['state']]+'</td>';
		str += '<td>';
		if(data[i]['state'] == 3){
			str += '<button onclick="taskUpdateState('+data[i]['id']+',1,this)" type="button" class="btn btn-xs btn-default">取消完成</button>';	
		}else if(data[i]['state'] ==1 ){
			str += '<button onclick="taskUpdateState('+data[i]['id']+',3,this)" type="button" class="btn btn-xs btn-success">标记完成</button>';	
		}
		str += '&nbsp;<button onclick="taskUpdate('+data[i]['id']+')" type="button" class="btn btn-xs btn-primary">修改</button> &nbsp; <button onclick="taskRemove('+data[i]['id']+','+data[i]['state']+')" type="button" class="btn btn-xs btn-danger">彻底删除</button>' + '</td>';
		str += '</tr>';
	}
	$('.table tbody').append(str);
}

// taskModal 修改操作
function taskUpdate(id){
	var ob = '.'+id;
	var title = $(ob).find('.title').text();
	var content = $(ob).find('.content').text();
	var date = $(ob).find('.date').attr('date');;
	$('#task-date').val(date);
	if(!date){
		date = '未有时间';
	}
	// 显示模态框，并更新表单value	
	$('#myModal').modal('show');
	$('.task-time').text(date+'的提醒：');
	$('.task-title').val(title);
	$('.task-title').attr('taskid',id);
	$('.task-content').val(content);
}

// taskModal 时间修改 
$('#datetimepicker').datetimepicker().on('changeDate',function(){
	var time = $('#task-date').val()
	$('.task-time').text(time+'的提醒：');
});


// task 编辑模态框 时间按钮击事件
$('.task-time').live('click',function(){
	
});


/* ----------------------------------------------------------------------------- */
// 备忘录js

// note 数据初始化函数
function noteStart(){
	var str = '';
	$('#accordion').empty();
	$.ajax({
		type:'post',		
		url:app+'/center/notestart',
		data:{  },
		async:false,
		dataType:'json',
		success:function(data){
			// note 拼装列表
			for(var i in data){
				str += '<div class="panel panel-default" id="'+data[i]['id']+'"><div class="panel-heading"> <div class="note-icon pull-left" style="margin-top:-5px; padding-right:24px"> <a href="javascript:noteBack('+data[i]['id']+')" class="glyphicon glyphicon-chevron-left text-center btn btn-default" style="display:none"> <a href="javascript:noteRemove('+data[i]['id']+')" class="glyphicon glyphicon-trash text-center btn btn-default"> </a> <a href="javascript:noteEdit('+data[i]['id']+')" noteid="'+data[i]['id']+'" class="glyphicon glyphicon-pencil text-center btn btn-default"> </a> <a noteid="'+data[i]['id']+'" class="glyphicon glyphicon-ok text-center btn btn-default" href="javascript:noteSubmit()" style="display:none"> </a> </div>';
				str += '<h4 class="panel-title"> <a class="title" data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse'+data[i]['id']+'">'+data[i]['title']+'</a> <span class="label label-default pull-right">最近更新: '+data[i]['utime']+'</span> </h4>';
				str += '</div> <div id="collapse'+data[i]['id']+'" class="panel-collapse collapse">';
				str += '<div class="panel-body content"> '+data[i]['content']+' </div> </div> </div>';
			}
			$('#accordion').prepend(str);
		},
		error:function(){
			alert('操作失败');
		}
	});
}

// note 数据删除函数
function noteRemove(id){
	$.ajax({
		type:'post',	
		url:app+'/center/noteremove',
		data:{ id:id },
		async:true,
		dataType:'json',
		success:function(){
			noteStart();
		},
		error:function(){
			alert('操作失败，请重试');
		}
	});
}

// note 添加
function noteAdd(){
	noteStart();
	$('#note-addedit').clone().prependTo('#accordion').show();
}

// note 数据编辑函数
function noteEdit(id){
	noteStart();
	var ob = '#'+id;
	var title = $(ob).find('.title').text();
	var content = $(ob).find('.content').text();
	$('#note-addedit').clone().replaceAll(ob).attr('noteid',id).show();
	$('#note-addedit').find('.title').val(title);
	$('#note-addedit').find('.content').val(content);
}

// note 揭交修改函数
function noteSubmit(){
	var id = $('#note-addedit').attr('noteid') | '';
	var title = $('#note-addedit .title').val();
	var content = $('#note-addedit .content').val();
	var action = 'add';
	if(id){
		var action = 'update';
	}else{
		var action = 'add';
	}
	$.ajax({
		type:'post',	
		url:app+'/note/'+action,
		data:{ id:id,title:title,content:content },
		dataType:'json',
		success:function(){
			noteStart();
		},
		error:function(){
			alert('error');
		}
	});
}


// note 返回函数
function noteBack(){
	noteStart();
}
