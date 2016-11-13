/*;(function($,window,document,undefined){
    	

})(jQuery,window,document);*/

/*$(function(){
	
});*/
$(document).ready(function(){
	/* 提交表单前判断用户名和密码是否为空, */
	$('#submit').click(function(){
		//阻止表单默认提交事件
    	//event.preventDefault();
		var username  = $('input[name=username]');
		var userpwd   = $('input[name=userpwd]');
		var verfycode = $('input[name=verfycode]');

		if (username.val() == '') {
			$('.usernameinfo').html("<font color=red>用户名不能为空</font>");
			username.focus();
			return false;
		}
		if (userpwd.val() == '') {
			$('.userpwdinfo').html("<font color=red>用户密码不能为空</font>");
			userpwd.focus();
			return false;
		}
		if (verfycode.val() == '') {
			$('.verfyinfo').html("<font color=red>验证码不能为空</font>");
			verfycode.focus();
			return false;
		}
		/* admin.php?c=Login&m=userLogin 不行！！ */
		//alert(window.location.pathname);
		if(window.location.pathname == "/thinkcms/admin.php") {
    		url = "admin.php/Login/userLogin";
    		nexturl = "admin.php/Login/admin";
    	}else{
    		url = "userLogin";
    		nexturl = "admin";
    	}

		$.ajax({
			url:url, 
			dataType:"json",
			data:{"username":username.val(),"userpwd":userpwd.val()},
			type:"POST",
			success: function (data, textStatus) {
				// data could be xmlDoc, jsonObj, html, text, etc...   
				if(data.ret == "username"){
					$('.usernameinfo').html("<font color=red>"+ "用户名错误" +"</font>");
				}else if(data.ret == "userpwd"){	
					$('.userpwdinfo').html("<font color=red>"+ "密码错误" +"</font>");
				}else if(data.ret == true) {
					window.location.href = nexturl;
				}else{
					alert("非法请求");
				}
				
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
 				//alert(XMLHttpRequest.status);
 				//alert(XMLHttpRequest.readyState);
 				//alert(textStatus);	
 				alert('请求出错');
			},
			complete: function(XMLHttpRequest, textStatus) {
				this; // 调用本次AJAX请求时传递的options参数
				//alert(XMLHttpRequest.status);
 				//alert(XMLHttpRequest.readyState);
 				//alert(textStatus);
 				//alert('请求完成');
			}
		});

	});
    
    $('#verfycode').bind('input propertychange', function() {
    	var verfycode = $('input[name=verfycode]');
    	//var xx = $.getUrlParam('reurl');
    	if(window.location.pathname == "/thinkcms/admin.php") {
    		url = "admin.php/Login/checkVerfy";
    	}else{
    		url = "checkVerfy";
    	}


    	$.ajax({
			url:url, 
			dataType:"json",
			data:{"verfycode":verfycode.val()},
			type:"POST",
			success: function (data, textStatus) {
				// data could be xmlDoc, jsonObj, html, text, etc...   
				if(data.ret == true){
					$('.verfyinfo').html("<font color=red>"+ "验证码正确" +"</font>");
				}else{
					$('.verfyinfo').html("<font color=red>"+ "验证码错误" +"</font>");
				}	
					
				
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
 				//alert(XMLHttpRequest.status);
 				//alert(XMLHttpRequest.readyState);
 				//alert(textStatus);	
 				alert('请求出错');
			},
			complete: function(XMLHttpRequest, textStatus) {
				this; // 调用本次AJAX请求时传递的options参数
				//alert(XMLHttpRequest.status);
 				//alert(XMLHttpRequest.readyState);
 				//alert(textStatus);
 				//alert('请求完成');
			}
		});
	});


	/* 改变验证码 */
	$('#verifyImg').click(function(){
		if(window.location.pathname == "/thinkcms/admin.php") {
    		url = "admin.php/Login/verify/";
    	}else{
    		url = "verify/";
    	}
		var timenow = new Date().getTime();
		$('#verifyImg').attr({
			"src" : url +timenow
		});
	});
});