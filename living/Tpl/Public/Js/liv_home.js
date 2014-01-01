/**
 * ajax事件处理函数
 * @author sup.rod
 */

/** 入口 加载html载入完成后执行的js脚本 */
$(function(){
	taskBind();			// task 绑定操作事件
	noteBind();			// note 绑定操作事件
	$('.h1').dblclick(function(){
		$('.lose').show();	
	});
});


/** 提醒事项绑定事件函数 */
function taskBind(){
	// 提醒事项单击绑定
	$('#task .panel-body li').live('click',function(){
		$('#task .task-icon a').hide();
		$('#task .task-icon .glyphicon-plus').show();
		$('#task .task-icon .glyphicon-pencil').show().removeClass('disabled');
		$(this).siblings().removeClass('libackground');
		$(this).addClass('libackground');
	});

	// 提醒事项完成操作
	$('#task li input:checkbox').live('click',function(){
		var id = $(this).parent("li").attr("taskid");
		taskOver(this,id);
		return false;
	});
}

/** 备忘录绑定事件 */
function noteBind(){
	//备忘录 li单击处理
	$('#note .panel-body li').live('click',function(){
		$('#note .panel-body li').removeClass('libackground');	
		$(this).addClass('libackground');
		$('#note .note-icon .glyphicon-pencil').show().removeClass('disabled');
		$('#note .note-icon .glyphicon-info-sign').show();
		$('#note .note-icon .glyphicon-trash').show();
	});
}


/** #task 冒泡处理 */
// #task title框的双击阻止冒泡
$('#task .newTask input:text').live('dblclick',function(){
	return false;
});
// #task title框的单击阻止冒泡
$('#task .newTask input:text').live('click',function(){
	return false;
});




/* -------------------------------------------------------------------- */
//	task 操作处理	

/** 提醒事项编辑框 more操作 */
function taskMore(){
	$('#task ul .task-more').removeClass('hidden');
}

/** 提醒事项返回操作 */
function taskBack(){
	$('#task .panel-body ul').empty();
	$('#task .task-icon a').hide();
	$('#task .task-icon .glyphicon-plus').show().removeClass('disabled');
	$('#task .task-icon .glyphicon-chevron-left').show();
	taskStart();		//重生成提醒事项列表
}

/** 提醒事项添加操作 */
function taskAdd(){
	$('#task li').removeClass('libackground');
	$('#task .newTask-model').clone().prependTo('#task .panel-body ul').show().addClass('libackground newTask').find('.task-title').focus();
	$('#task .task-icon a').hide();
	$('#task .task-icon .glyphicon-plus').show().addClass('disabled');
	$('#task .task-icon .glyphicon-chevron-left').show();
	$('#task .panel-body li').die();
}

/** 提醒事项编辑操作 */
function taskEdit(){
	$('#task .task-icon a').hide();
	$('#task .task-icon .glyphicon-pencil').show().addClass('disabled');
	$('#task .task-icon .glyphicon-chevron-left').show();
	var ob = $('#task .libackground');
	var title = ob.text();
	var time = ob.attr('taskdate');
	var content = ob.attr('taskcontent');
	var id = ob.attr('taskid');
	$('#task .editTask-model').clone().replaceAll(ob).show().addClass('editTask libackground').attr('taskid',id).find('.task-title').val(title).focus();
	$('#task .editTask .task-content').val(content);
	$('#task .editTask #task-date').val(time);
	$('#task .editTask .form-date').val(time);
	$('#task .panel-body li').die();
}


/** 提醒事项 初始数据获取操作 */
function taskStart(){
	// 初始icon按钮
	$('#task .task-icon a').hide();
	$('#task .task-icon .glyphicon-plus').show().removeClass('disabled');
	$('#task .task-icon .glyphicon-pencil').show().addClass('disabled');
	$.ajax({
		type:'post',
		url:app+'/Task/start',
		data:{  },
		async:false,
		dataType:'json',
		success:function(data){
			$('#task ul').empty();	//清空提醒列表
			var strli = '';
			for(v in data){
				strli += '<li class="list-group-item" taskid="'+data[v]['id']+'" taskdate="'+data[v]['date']+'" taskcontent="'+data[v]['content']+'"><input class="cbox" type="checkbox">'+data[v]['title']+'</li>';
			}
			$('#task .panel-body ul').prepend(strli);
		},
		error:function(){
			alert('ajax操作失败');
		}
	});
	taskBind();			//重绑定提醒事项事件
}

/** 提醒事项提交操作 */
function taskSubmit(){
	var title = $('#task .task-title').val();
	var date = $('#task-date').val();
	var content = $('#task .task-content').val();
	if(title.length > 0){
	    $.ajax({
    		type:'post',
    		url:app+'/Task/add',
    		data:{ title:title,date:date,content:content },
    		async:true,
    		dataType:'json',
    		success:function(data){
				taskStart();		// 重生成数据
				/*  添加单条新数据 
				var strli = '<li class="list-group-item" taskid="'+data+'"><input class="cbox" type="checkbox">'+title+'</li>';
				$('#task .newTask').first().remove();
				$('#task .task-icon a').hide();
				$('#task .task-icon .glyphicon-plus').show().removeClass('disabled');
				$('#task .task-icon .glyphicon-chevron-left').show();
				$('#task .list-group').prepend(strli);
				*/
    		},
    		error:function(){
    		    alert('ajax操作失败');
    		}
	    });
    }else{
        $('#task .newTask').remove();
	}
}

/** 提醒事项修改操作 */
function taskUpdate(){
	var id = $('#task .editTask').attr('taskid');
	var title = $('#task .task-title').val();
	var date = $('#task-date').val();
	var content = $('#task .task-content').val();
	$.ajax({
		type:'post',
		url:app+'/Task/update',
		data:{ id:id,title:title,date:date,content:content },
		async:true,
		dataType:'json',
		success:function(data){
			taskStart();		// 重生成数据
		},
		error:function(){
			alert('ajax操作失败');
		}
	});
}

/** 提醒事项完成操作 **/
function taskOver(ob,id){
    $.ajax({
        type:'post',
        url:app+'/Task/over',
        data:{ id:id },
        async:true,
        dataType:'json',
        success:function(data){
            $(ob).parent('li').remove();
        },
        error:function(){
            alert('操作失败，请重试');
        }
    });
}




/* ------------------------------------------------------------------------ */
//	 note 操作处理

/** 备忘录数据初始化 */
function noteStart(){
    $('#note-addedit').add('#note-content').hide();
    $('#note-list').show();
    $('.note-icon a').hide();
	$('.note-icon .glyphicon-pencil').show().addClass('disabled');;
	$('.note-icon .glyphicon-plus').show();
	// 清空addedit value
	$('#note-addedit .id').val('');
	$('#note-addedit .title').val('');
	$('#note-addedit .content').val('');

	var str = '';
	$.ajax({
		type:'post',
		url:app+'/Note/start',
		date:{ },
		async:false,
		dataType:'json',
		success:function(data){
			$('#note-list').empty();
			for(var i in data){
				str += '<li class="list-group-item" noteid="'+data[i]['id']+'" content="'+data[i]['content']+'">'+data[i]['title']+'</li>';
			}	
			$('#note-list').append(str);
		},
		error:function(){
 			alert('操作失败');
		}
	});
}

/** 备忘录提交操作 */
function noteSubmit(){
	var id = $('#note .id').val();
    var title = $('#note .title').val();
    var content = $('#note .content').val();
	if(id > 0){
		// note 修改
		$.ajax({
			type:'post',	
			url:app+'/Note/update',
			data:{ id:id,title:title,content:content },
			async:true,
			dataType:'json',
			success:function(){
				noteStart();	
			},
			error:function(){
				alert('操作失败，请重试');
			}
		});
	}else{
		// note 添加
		$.ajax({
			type:'post',
			url:app+'/Note/submit',
			data:{ title:title,content:content },
			async:true,
			dataType:'json',
			success:function(data){
				noteStart();
			},
			error:function(data){
				alert('操作失败，请重试');
			}
		});
	}
}

/** 备忘录修改提交操作 */
function noteEdit(){

}

/** 备忘录删除提交操作 */
function noteRemove(){
	ob = $('#note .libackground');
	id = $(ob).attr('noteid');
	$.ajax({
		type:'post',
		url:app+'/Note/remove',
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

/** 备忘录info */
function noteInfo(){
	$('#note-list').add('#note-addedit').hide();
	$('#note-content').show();
	$('.note-icon a').hide();
	$('.note-icon .glyphicon-chevron-left').show();
	$('.note-icon .glyphicon-pencil').show();
	$('.note-icon .glyphicon-trash').show();
	var ob = $('#note .libackground');
	var id = $(ob).attr('noteid');
	var title = $(ob).text();
	var content = $(ob).attr('content');
	$('#note-content .title').text(title);
	$('#note-content .title').attr('noteid',id);
	$('#note-content .content').text(content);
}

/** 备忘录编辑操作 */
function noteEdit(){
	var ob = $('#note .libackground');
	var id = $(ob).attr('noteid');
	var title = $(ob).text();
	var content = $(ob).attr('content');
	$('#note-content').hide();
	$('#note-list').hide();
	$('#note-addedit .id').val(id);
	$('#note-addedit').show().find('.title').val(title).focus();
	$('#note-addedit .content').val(content);
	$('.note-icon a').hide();
	$('.note-icon .glyphicon-chevron-left').add('.note-icon .glyphicon-ok').show();
}

/** 备忘录添加按钮点击处理 */
function noteAdd(){
    $('#note-list').hide();
    $('#note-addedit').show().find('.title').focus();
    $('.note-icon a').hide();
    $('.note-icon .glyphicon-chevron-left').add('.note-icon .glyphicon-ok').show();
}

/** 备忘录返回按钮点击处理 */
function noteBack(){
    $('#note-addedit').add('#note-content').hide();
    $('#note-list').show();
    $('.note-icon a').hide();
    $('.note-icon .glyphicon-plus').show();
	$('.note-icon .glyphicon-pencil').addClass('disabled').show();

	$('#note .panel-body li').removeClass('libackground');	
	// 清空 addedit value
	$('#note-addedit .id').val('');
	$('#note-addedit .title').val('');
	$('#note-addedit .content').val('');
}
