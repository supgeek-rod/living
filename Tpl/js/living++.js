/**
 * living js文件
 * @author sup.rod
 */

/** 入口文件 */
$(function(){
    //livingStart();
    //taskOperate();

});


/** 提醒事项、备忘录、日历的初始化状态 */
function livingStart(){
    var bgcolor = null;
    var atBgcolor = '#F5F5F5';
    // 提醒事项、备忘录的li滑入事件
    $("#task .panel-body li,#note .panel-body li").live("mouseover",function(){
        bgcolor = $(this).css("background");
        $(this).css("background",atBgcolor);
        //var stredit = '<a class="aaa" href=""><span class="pull-right glyphicon glyphicon-pencil"></span></a>';
        //$(this).prepend(stredit);
    });

    // 提醒事项、备忘录的li滑出事件
    $("#task .panel-body li,#note .panel-body li").live("mouseout",function(){
        //var stredit = '<a href=""><span class="pull-right glyphicon glyphicon-pencil"></span></a>';
        //$(this).find("a").remove();
        $(this).css("background",bgcolor);
    });

    // 提醒事项、备忘录的点击事件
    $("#task .panel-body li,#note .panel-body li").live("click",function(){
        //$("#task .panel-body li,#note .panel-body li").css()
        //$(this).prevAll().css("background",'#FFF');
        //$(this).nextAll().css("background",'#FFF')
        bgcolor = atBgcolor;
        $(this).css("background",atBgcolor);
    });

    $("body").click(function(){
        $("#task li,#note li").css("background","#FFF");
    });
}

/** 提醒事项操作事件处理 */
function taskOperate(){

    // 提醒事项 -新增提交
    $("#task .newTask input:text").live("blur",function(){
        var value = $(this).val();
        taskAdd(value);
    });
    // 提醒事项 -新增提交(ok按钮)
    /* $("#task .newTask .submit").live("click",function(){
        var value = $(this).parent().prev("input:text").val();
        taskAdd(value);
    }); */

    // 提醒事项 -修改
    $("#task .taskEdit input:text").live("blur",function(){
        var id = $(this).parents("li").attr("taskid");
        var value = $(this).val();
        taskUpdate(this,id,value);
    });

    // 提醒事项checked -完成
    $("#task li input:checkbox").live("click",function(){
        var id = $(this).parent("li").attr("taskid");
        taskOver(this,id);
    });


    // 提醒事项的li双击编辑事件 －绑定 编辑
    $("#task li").live("dblclick",function(){
        var value = $(this).text();
        var str = ' <span class="input-group"> <input type="text" class="form-control input-sm" value="'+value+'" autofocus="autofocus"> <span class="input-group-btn"> <button class="btn btn-default btn-sm submit" type="submit"><span class="glyphicon glyphicon-ok"></span></button> <button class="btn btn-default btn-sm more" type="button"><span class="glyphicon glyphicon-chevron-down"></span></button> </span> </span>';
        $(this).addClass("taskEdit");
        $(this).empty();
        $(this).prepend(str);
        $(this).find("input:text").attr("value",value);
    });

    // 提醒事项的添加操作 －新增
    $("#task .glyphicon-plus").click(function(){
        var str = '<li class="newTask list-group-item" style="border-bottom:none;"> <span class="input-group"> <input type="text" class="form-control input-sm"> <span class="input-group-btn"> <button class="btn btn-default btn-sm submit" type="submit"><span class="glyphicon glyphicon-ok"></span></button> <button class="btn btn-default btn-sm more" type="button"><span class="glyphicon glyphicon-chevron-down"></span></button> </span> </span> </li>';
        $("#task .list-group").prepend(str);
        $("#task input:text:eq(0)").focus();
    });
}


/** 备忘录操作事件处理 */
function noteOperate(){
    // 添加按钮


}


    

