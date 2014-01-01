/**
 * living js脚本
 * @author sup.rod
 */

/** 入口,导入html加载完成后的js函数 */
$(function(){
	atNav();	//频道高亮
	setupNav();	//帐户设置下拉
});


/** 当前频道高亮函数 */
function atNav(){
    $('#header .nav li').removeClass('active');
    switch(liv_module){
		case 'Index':
			$('#header .nav .home').addClass('active');
			break;
		case 'Center':
			$('#header .nav .center').addClass('active');
			break;
		case 'Account':
			$('#header .nav .account').addClass('active');
			break;
		case 'User':
			$('#header .nav .user').addClass('active');
			break;
		default:
			$('#header .nav .home').addClass('active');
	}
}

// 帐户设置下拉显示函数
function setupNav(){
	var ob = $('#header .account').find('.setup-go').andSelf();
	$(ob).hover(
		function(){
			$(ob).find('.setup-go').fadeTo('slow',1);
		},
		function(){
			$(ob).find('.setup-go').fadeOut('slow');
		}
	);

/*
	var ob = $('#header .account');
	$(ob).mouseover(function(){
		$(ob).find('.setup-go').fadeTo('slow',1);
	});

	$(ob).mouseout(function(){
		setTimeout(function(){
			$(ob).find('setup-go').fadeOut('slow');
		},666);
	});
*/
}
