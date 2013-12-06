/**
 * 个人中心页面js操作
 * @author: sup.rod
 */

// 分页
function taskPage(v){
	taskP += v;
	if(taskP <= 0){
		taskP = 1;
	}
	if(taskP > taskTP){
		taskP = taskTP;
	}
	$.ajax({
		url:app+'/center/taskJson',
		type:'get',
		data:{ p:taskP,state:taskState },
		async:true,
		dataType:'json',
		success:function(data){
			taskWrite(data['result']);
		},
		error:function(data){
			alert('error');
		}
	});
}

// 分页HTML输出
function pageHtml(){
	var str = '<li><a href="javascript:taskPage(-1)">&laquo;</a></li>';
	for(var i=1;i<=taskTP;i++){
		str += '<li><a href="javascript:taskPage('+(i-1)+')">'+i+'</a></li>';
	}
	str += '<li><a href="javascript:taskPage(1)">&raquo;</a></li>';
	$('.pagination').empty();
	$('.pagination').append(str);
}

// task 全部记录
function taskAll(){
	$('.nav2 li').removeClass('active');
	$('.nav2 .taskall').addClass('active');
	$.ajax({
		url:app+'/center/taskJson',
		type:'post',
		data:{ },
		async:true,
		dataType:'json',
		success:function(data){
			taskState = null;
			taskP = 1;
			taskTP = data['taskTP'];
			taskWrite(data['result']);
			pageHtml();
		},
		error:function(data){
			alert('error all');
		}
	});
}

// task 完成记录
function taskOk(){
	$('.nav2 li').removeClass('active');
	$('.nav2 .taskok').addClass('active');
	$.ajax({
		url:app+'/center/taskJson',
		type:'post',
		data:{ state:3 },
		async:true,
		dataType:'json',
		success:function(data){
			taskP = 1;
			taskTP = data['taskTP'];
			taskWrite(data['result']);
			taskState = data['state'];
		},
		error:function(data){
			alert('error');
		}
	});
}

// task 未完成记录
function taskNo(){
	$('.nav2 li').removeClass('active');
	$('.nav2 .taskno').addClass('active');
	$.ajax({
		url:app+'/center/taskJson',
		type:'post',
		data:{ state:1 },
		async:true,
		dataType:'json',
		success:function(data){
			taskP = 1;
			taskTP = data['taskTP'];
			taskWrite(data['result']);
			taskState = data['state'];
		},
		error:function(data){
			alert('error');
		}
	});
}

// JSON数据写入task表格
function taskWrite(data){
	$('.table tbody').empty();
	var str = null;
	var state = [null,'<span class="label label-default">未完成</span>',null,'<span class="label label-success">已完成</span>'];
	for(var i in data){
		str += '<tr>';
		var ii = Number(i) + 1;
		str += '<td>'+ii+'</td>';
		str += '<td>'+data[i]['title']+'</td>';
		str += '<td width="40%">'+data[i]['content']+'</td>';
		str += '<td width="10%">2013-12-7</td>';
		str += '<td>'+state[data[i]['state']]+'</td>';
		str += '<td>';
		if(data[i]['state'] == 3){
			str += '<button type="button" class="btn btn-xs btn-default">取消完成</button>';	
		}else if(data[i]['state'] ==1 ){
			str += '<button type="button" class="btn btn-xs btn-success">标记完成</button>';	
		}
		str += '&nbsp;<button type="button" class="btn btn-xs btn-primary">修改</button> &nbsp; <button type="button" class="btn btn-xs btn-danger">彻底删除</button>' + '</td>';
		str += '</tr>';
	}
	$('.table tbody').append(str);
}
