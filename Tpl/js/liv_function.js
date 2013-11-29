/*
 * ajax事件处理函数
 */

 // 提醒事项添加操作
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

// 提醒事项修改操作
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
            alert('ajax操作失败');
        }
    });
}

// 提醒事项完成操作
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

