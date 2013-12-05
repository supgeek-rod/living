/**
 * ajax事件处理函数
 * @author sup.rod
 */

/** 提醒事项添加操作 */
function taskAdd(value){
	if(value.length > 0){
	    $.ajax({
    		type:"post",
    		url:app+"/task/add",
    		data:{ title:value },
    		async:true,
    		dataType:'json',
    		success:function(data){
		    var strli = '<li class="list-group-item"><input class="cbox" type="checkbox">'+value+'</li>';
		    $("#task .newTask").remove();
		    $("#task .list-group").append(strli);
    		},
    		error:function(){
    		    alert("ajax操作失败");
    		}
	    });
    }else{
        $("#task .newTask").remove();
	}
}

/** 提醒事项修改操作 */
function taskUpdate(ob,id,title){
    $.ajax({
        type:"post",
        url:app+"/task/update",
        data:{ id:id,title:title },
        async:true,
        dataType:'json',
        success:function(data){
            var strli = '<li class="list-group-item" taskid="'+id+'"><input class="cbox" type="checkbox">'+title+'</li>';
            $("#task .taskEdit").replaceWith(strli);
        },
        error:function(){
            alert('操作失败，请重试');
        }
    });
}

/** 提醒事项完成操作 */
function taskOver(ob,id){
    $.ajax({
        type:"post",
        url:app+"/task/over",
        data:{ id:id },
        async:true,
        dataType:"json",
        success:function(data){
            $(ob).parent("li").remove();
        },
        error:function(){
            alert("操作失败，请重试");
        }
    });
}



//#################################################################

/** 备忘录提交操作 */
function noteSubmit(){
    var title = $("#note .title").val();
    var content = $("#note .note-content").val();
    $.ajax({
	type:"post",
	url:app+"/note/submit",
	data:{ title:title,content:content },
	async:true,
	dataType:"json",
	success:function(data){
	    alert("操作成功");
	},
	error:function(data){
	    alert("操作失败，请重试");
	}
    });
}

/** 备忘录添加按钮点击处理 */
function noteAdd(){
    $("#note-list").hide();
    $("#note-addedit").show().find(".title").focus();
    $(".note-icon a").hide();
    $(".note-icon .glyphicon-chevron-left").add(".note-icon .glyphicon-ok").show();
}

/** 备忘录返回按钮点击处理 */
function noteBack(){
    $("#note-addedit").add("#note-content").hide();
    $("#note-list").show();
    $(".note-icon a").hide();
    $(".note-icon .glyphicon-plus").add(".note-icon .glyphicon-pencil").show();
}

/** 备忘录li双击处理 */
$("#note .panel-body li").dblclick(function(){
    $("#note-list").add("#note-addedit").hide();
    $("#note-content").show();
    $(".note-icon a").hide();
    $(".note-icon .glyphicon-chevron-left").add(".note-icon .glyphicon-ok").show();
    var id = $(this).attr("noteid");
    $.ajax({
	type:"post",
	url:app+"/note/select",
	data:{ id:id },
	async:true,
	dataType:"json",
	success:function(data){
	    $("#note-content .title").text(data[0]['title']);
	    $("#note-content .content").text(data[0]['content<D-r>']);
	},
	error:function(){
	    alert("操作失败，请重试");
	}
    });
});
