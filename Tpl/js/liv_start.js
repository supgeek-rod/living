// 全局变量,应用根目录

// 入口
$(function(){
	atNav();	//频道高亮
	setupNav();	//帐户设置下拉
});

/** 首页滚动条 */
$(window).scroll(function(){
    var top = $(window).scrollTop();
    if(top>=3000){
	$(window).scrollTop(600);

    }
});

//##############################
// 函数块

// 当前频道高亮函数
function atNav(){
    $('#header .nav li').removeClass('active');
    switch(liv_action){
	case 'signin':
	    $('#header .nav .signin').addClass('active');
	    break;
	case 'register':
	    $('#header .nav .register').addClass('active');
	    break;
	case 'setup':
	    $('#header .nav .setup').addClass('active');
	    break;
    }

    switch(liv_module){
	case 'index':
	    $('#header .nav .home').addClass('active');
	    break;
	case 'center':
	    $('#header .nav .center').addClass('active');
	    break;
	case 'account':
	    $('#header .nav .account').addClass('active');
	    break;
	case 'user':
	    $('#header .nav .user').addClass('active');
	    break;
	default:
	    $('#header .nav .home').addClass('active');
    }
}

// 帐户设置下拉显示函数
function setupNav(){
	$('#header .setup').mouseover(function(){
		$('#header .setup .setup-go').fadeTo('slow',1);
	});

	$('#header .setup').mouseout(function(){
		setTimeout(function(){
			$('#header .setup .setup-go').fadeOut('slow');
		},666);
	});
}
