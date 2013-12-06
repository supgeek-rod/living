/**
 * ajax事件处理函数
 * @author sup.rod
 */

/** 提醒事项 备忘录 滑入滑出事件 */
var bgcolor = '#FFF';
var atBgcolor = '#F5F5F5';
$('#task .panel-body li,#note .panel-body li').hover(function(){
	bgcolor = $(this).css('background');
	$(this).css('background',atBgcolor);
},function(){
	$(this).css('background',bgcolor);
});

$('#task .panel-body li,#note .panel-body li').click(function(){
	$(this).css('background',atBgcolor);
	bgcolor = $(this).css('background');
	$(this).siblings().css('background','#FFF');
});
/* -------------------------------------------------------------------- */

/** 提醒事项添加操作 */
function taskAdd(){
	$('#task .newTask').show().find('input:text').focus();
	$('#task .task-icon a').hide();
	$('#task .task-icon .glyphicon-plus').show().addClass('disabled');
	$('#task .task-icon .glyphicon-chevron-left').show();
}

/** 提醒事项返回操作 */
function taskBack(){
	$('#task .newTask input').val(null);
	$('#task .newTask').hide();
	$('#task .task-icon a').hide();
	$('#task .task-icon .glyphicon-plus').show().removeClass('disabled');
	$('#task .task-icon .glyphicon-chevron-left').show();
}

/** 提醒事项单击操作 */
$('#task .panel-body li').live('click',function(){
	$('#task .task-icon .glyphicon-plus').show();
	$('#task .task-icon .glyphicon-pencil').show().removeClass('disabled');
});

/** 提醒事项双击操作 */
$('#task .panel-body li').live('dblclick',function(){
	$('#task .task-icon a').hide();
	$('#task .task-icon .glyphicon-plus').show().removeClass('disabled');
	$('#task .task-icon .glyphicon-chevron-left').show();
});

/** 提醒事项提交操作 */
function taskSubmit(){
	var value = $('#task .newTask input:text').val();
	if(value.length > 0){
	    $.ajax({
    		type:'post',
    		url:app+'/task/add',
    		data:{ title:value },
    		async:true,
    		dataType:'json',
    		success:function(data){
				var strli = '<li class="list-group-item"><input class="cbox" type="checkbox">'+value+'</li>';
				$('#task .newTask input').val(null);
				$('#task .newTask').hide();
				$('#task .task-icon a').hide();
				$('#task .task-icon .glyphicon-plus').show().removeClass('disabled');
				$('#task .task-icon .glyphicon-chevron-left').show();
				$('#task .list-group').prepend(strli);
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

/** 提醒事项完成操作 */
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
