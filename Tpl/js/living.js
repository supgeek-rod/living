/*
* living js文件
*/
//入口
$(function(){
    livingStart();

});

/*
 * 提醒事项、备忘录、日历的初始化js状态
 */
function livingStart(){

    // 提醒事项、备忘录的li滑入事件
    $("#task .panel-body li,#note .panel-body li").mouseover(function(){
        var stredit = '<a class="aaa" href=""><span class="pull-right glyphicon glyphicon-pencil"></span></a>';
        $(this).prepend(stredit);
    });

    // 提醒事项、备忘录的li滑出事件
    $("#task .panel-body li,#note .panel-body li").mouseout(function(){
        var stredit = '<a href=""><span class="pull-right glyphicon glyphicon-pencil"></span></a>';
        var thisLi = $(this);
        $(this).find("a").remove();
    })

    // 提醒事项的checked事件
    $("#task li input:checkbox").live("click",function(){
	var t = $(this);
	var f =$(this).parent("li").remove();
    });

    // 提醒事项的li双击编辑事件 －绑定
    $("#task li").live("dblclick",function(){
        var value = $(this).text();
        var strli = '<li class="list-group-item taskEdit" style="border-bottom:none;"> <form action="" method="" id="task-add"> <span class="input-group"> <input type="text" class="form-control input-sm" value="'+value+'" autofocus="autofocus"> <span class="input-group-btn"> <button class="btn btn-default btn-sm" type="button" data-target="#myModal"><span class="glyphicon glyphicon-ok"></span></button> <button class="btn btn-default btn-sm" type="button" data-target="#myModal"><span class="glyphicon glyphicon-time"></span></button> </span> </span> </form> </li>';
        $(this).replaceWith(strli);
        $(this).find("input:text").attr("value",value);
    });


    // 提醒事项的添加操作
    $("#task .glyphicon-plus").click(function(){
        var strli = '<li class="newTask list-group-item" style="border-bottom:none;"> <form action="abc" onsubmit="return taskEditok(0)" method="post" id="task-add"> <span class="input-group"> <input type="text" class="form-control input-sm"> <span class="input-group-btn"> <button class="btn btn-default btn-sm" type="submit"><span class="glyphicon glyphicon-ok"></span></button> <button class="btn btn-default btn-sm" type="button" data-target="#myModal"><span class="glyphicon glyphicon-time"></span></button> </span> </span> </form> </li>';
        $("#task .list-group").prepend(strli);
        $("#task input:text:eq(0)").focus();
    });

    // (增加)醒事编辑失去焦点事件 -绑定
    $("#task .newTask input:text").live("blur",function(){
	var value = $(this).val();
	if(value.length > 0){
	    var strli = '<li class="list-group-item"><input type="checkbox">'+value+'</li>';
	    $("#task .newTask").remove();
	    $("#task .list-group").prepend(strli);
	}else{
	    $("#task .newTask").remove();
	}
    });
    
    // (修改)提醒事编辑失去焦点事件 -绑定
    $("#task .taskEdit input:text").live("blur",function(){
	var value = $(this).val();
	if(value.length > 0){
	    var strli = '<li class="list-group-item"><input type="checkbox">'+value+'</li>';
	    $("#task .taskEdit").replaceWith(strli);
	}else{
	    $("#task .taskEdit").remove();
	}
    });



}


/*
 * 提醒事项的操作响应事件
 */

//提醒事项编缉响应
function taskEditok(n){
    var taskli = $("#task input:text").eq(n);
    var liv = taskli.val();
    if(liv.length > 0){
    }else{
    }
    //alert(liv);
    return false;
}
