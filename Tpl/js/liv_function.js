/**
 * ajax事件处理函数
 * @author sup.rod
 */

/** 入口 */
taskBind();

/** 对象声明 */		
//var taskTitle = $('#task .newTask task-title');
//var $taskMore = $('#task .task-more');

/** 提醒事项绑定事件函数 */
function taskBind(){
	/*
	// #note #task 滑入背景高亮
	$('#task .panel-body li,#note .panel-body li').live('mousemove',function(){
		$(this).css('background','#F5F5F5');
	});

	// #note #task 滑出背景高亮
	$('#task .panel-body li,#note .panel-body li').live('mouseout',function(){
		$(this).css('background','#FFF');
	});
	*/

	// 提醒事项单击绑定
	$('#task .panel-body li').live('click',function(){
		$('#task .task-icon a').hide();
		$('#task .task-icon .glyphicon-plus').show();
		$('#task .task-icon .glyphicon-pencil').show().removeClass('disabled');
		$(this).siblings().removeClass('libackground');
		$(this).addClass('libackground');
	});

	/** 提醒事项双击操作 */
	/*
	$('#task .panel-body li').live('dblclick',function(){
		$('#task .task-icon a').hide();
		$('#task .task-icon .glyphicon-plus').show().removeClass('disabled');
		$('#task .task-icon .glyphicon-chevron-left').show();
		taskEdit();
	}); */

	/** 提醒事项完成操作 */
	$('#task li input:checkbox').live('click',function(){
		var id = $(this).parent("li").attr("taskid");
		taskOver(this,id);
		return false;
	});
}



// #task title框的双击阻止冒泡
$('#task .newTask input:text').live('dblclick',function(){
	return false;
});

// #task title框的单击阻止冒泡
$('#task .newTask input:text').live('click',function(){
	return false;
});

// #task title框的失出焦点阻止冒泡
$('#task .newTask input:text').live('blur',function(){
	//alert();
});


/* -------------------------------------------------------------------- */

/** 提醒事项more操作 */
function taskMore(){
	$('#task .task-more').removeClass('hidden');
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
	$('#task .newTask-model').clone().prependTo('#task .panel-body ul').show().addClass('libackground newTask').find('.taskTitle').focus();
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
	var liv = ob.text();
	//$('#task .newTask-model').clone().prependTo('#task .panel-body ul').show().addClass('libackground newTask').find('.taskTitle').focus();
	$('#task .newTask-model').clone().replaceAll(ob).show().addClass('newTask libackground').find('.task-title').val(liv).focus();
	$('#task .panel-body li').die();
}


//##########################################################################
/** 提醒事项 初始数据获取操作 */
function taskStart(){
	// 初始icon按钮
	$('#task .task-icon a').hide();
	$('#task .task-icon .glyphicon-plus').show().removeClass('disabled');
	$('#task .task-icon .glyphicon-pencil').show().addClass('disabled');
	$.ajax({
		type:'post',
		url:app+'/task/start',
		data:{  },
		async:false,
		dataType:'json',
		success:function(data){
			$('#task ul').empty();	//清空提醒列表
			var strli = '';
			for(v in data){
				strli += '<li class="list-group-item" taskid="'+data[v]['id']+'"><input class="cbox" type="checkbox">'+data[v]['title']+'</li>';
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
	var date = $('#task .task-date').val();
	var content = $('#task .task-content').val();
	if(title.length > 0){
	    $.ajax({
    		type:'post',
    		url:app+'/task/add',
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
function taskUpdate(ob,id,title){
    $.ajax({
        type:'post',
        url:app+'/task/update',
        data:{ id:id,title:title },
        async:true,
        dataType:'json',
        success:function(data){
            var strli = '<li class="list-group-item" taskid="'+id+'"><input class="cbox" type="checkbox">'+title+'</li>';
            $('#task .taskEdit').replaceWith(strli);
        },
        error:function(){
            alert('操作失败，请重试');
        }
    });
}


function taskOver(ob,id){
    $.ajax({
        type:'post',
        url:app+'/task/over',
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



//#################################################################
//#################################################################
//#################################################################
//#################################################################
//#################################################################

/** 备忘录提交操作 */
function noteSubmit(){
    var title = $('#note .title').val();
    var content = $('#note .note-content').val();
    $.ajax({
	type:'post',
	url:app+'/note/submit',
	data:{ title:title,content:content },
	async:true,
	dataType:'json',
	success:function(data){
	    alert('操作成功');
	},
	error:function(data){
	    alert('操作失败，请重试');
	}
    });
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
    $('.note-icon .glyphicon-plus').add('.note-icon .glyphicon-pencil').show();
}

/** 备忘录li双击处理 */
$('#note .panel-body li').live('dblclick',function(){
    $('#note-list').add('#note-addedit').hide();
    $('#note-content').show();
    $('.note-icon a').hide();
    $('.note-icon .glyphicon-chevron-left').add('.note-icon .glyphicon-ok').show();
    var id = $(this).attr('noteid');
    $.ajax({
	type:'post',
	url:app+'/note/select',
	data:{ id:id },
	async:true,
	dataType:'json',
	success:function(data){
	    $('#note-content .title').text(data[0]['title']);
	    $('#note-content .content').text(data[0]['content']);
	},
	error:function(){
	    alert('操作失败，请重试');
	}
    });
});
