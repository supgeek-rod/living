/**
 * 用户设置页面js操作
 * @author: sup.rod
 */

/* ----------------------------------------------------------- */

/** 用户信息修改页面 */
// 用户基本信息 界面
function accountBasic(){
	$('.account-main .panel').hide();
	$('.account-basic').show();
	$('.breadcrumb .active').text('用户基本信息');
	$('.nav-account a').removeClass('active');
	$('.nav-account a').eq(0).addClass('active');
}

// 用户信息修改 界面
function accountUpdateInfo(){
	$('.account-main .panel').hide();
	$('.account-info').show();
	$('.breadcrumb .active').text('修改昵称');
	$('.nav-account a').removeClass('active');
	$('.nav-account a').eq(1).addClass('active');
}

// 用户昵称修改处理方法
function updateName(){
	var name = $('.user-name').val();
	$.ajax({
		type:'post',
		url:app+'/account/updateName',
		async:true,
		data:{ name:name },
		dataType:'json',
		success:function(data){
			$('.account-info .table').hide();
			$('.account-info .update-name-success').show();
			setTimeout(function(){
				location.reload(true);
			},1500);
		},
		error:function(data){
			alert('操作失败，请重试');
		}
	});
	return false;
}

// 用户密码修改 界面
function accountUpdatePasswd(){
	$('.account-main .panel').hide();
	$('.account-passwd').show();
	$('.breadcrumb .active').text('修改密码');
	$('.nav-account a').removeClass('active');
	$('.nav-account a').eq(2).addClass('active');
}

// 用户密码修改处理方法
function updatePasswd(){
	var password = $('.new-passwd1').val();
	$.ajax({
		type:'post',	
		url:app+'/user/updatePasswd',
		data:{ password:password },
		dataType:'html',
		success:function(data){
			if(data){
				var loginUrl = app+'/user/signin';
				$('.account-passwd .table').hide();
				$('.account-passwd .update-passwd-success').show();
				setTimeout(function(){
					location.assign(loginUrl);
				},1500);
			}
		},
		error:function(){
			alert('操作失败请重试');
		}
	});
	return false;
}
