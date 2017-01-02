$(document).ready(function(){

	$('.tabbable a[data-toggle="tab"]').eq(0).tab('show');
        $('.tabbable a[data-toggle="tab"]').on('click', function (e) {
            $('.tabbable a[data-toggle="tab"]').parent('li').removeClass('active');
            $('.tabbable a[data-toggle="tab"]').removeClass('active');
            $(this).addClass('active');
    });
        
    $('.li_tabs a').click(function(){  
        tarId = $(this).attr("href").substring(1);
        tarDiv = $("div[id = " + tarId + "]");
        tarDiv.addClass('active');
        tarDiv.siblings('div').removeClass('active'); 
         	
    });
        
    CKEDITOR.replace('TextArea');
    
    /* 点击头像切换菜单 */
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' );
    body = document.body;
    showLeftPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( body, 'cbp-spmenu-push-toright' );
		classie.toggle( menuLeft, 'cbp-spmenu-open' );
	};
	/* 左右滑动弹出隐藏菜单 */
	$('body').hammer().on('swipeleft', function(){
		classie.remove( this, 'active' );
		classie.remove( body, 'cbp-spmenu-push-toright' );
		classie.remove( menuLeft, 'cbp-spmenu-open' );
	});
	$('body').hammer().on('swiperight', function(){
		classie.add( this, 'active' );
		classie.add( body, 'cbp-spmenu-push-toright' );
		classie.add( menuLeft, 'cbp-spmenu-open' );
	});

	/* 菜单样式 */
	$('#menu').slinky({label: true, title: false});


	/* 换肤颜色 */
	var skin=["#f8f8f8","#F00","#0F0","#00F","#AAA","#000"];
	$('.skin li').click(function(){
		var i = $(this).index(); /* 获得li的position */
		$('nav').css("background-color",skin[i]);
		$.cookie("myskin", skin[i], { path: '/', expires: 10 });
	});
	var cookie_skin = $.cookie("myskin"); 
	if(cookie_skin){
		$('nav').css("background-color",cookie_skin);
	}

    /* 获取系统信息 */
    $('#li_systemInfo').click(function(){
    	url = "http://"+ window.location.host + "/thinkcms/admin.php/Index/getSystemInfo"
		$.ajax({
			url:url, 
			dataType:"json",
			data:{},
			type:"POST",
			success: function (data, textStatus) {
				var tableText = "<table class=\"table table-bordered table-hover\">";
				tableText += "<thead><tr><th>名称</th><th>信息</th></tr></thead><tbody>";
				for(var key in data){
					tableText += "<tr><td>"+key+"</td><td>"+data[key]+"</td></tr>";	
				}
				tableText += "</tbody></table>";
				/* 在选中的div中插入表格 */
				$('#systeminfo_div').empty();
				$('#systeminfo_div').append(tableText);
				
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
 				alert('请求出错');
			},
			complete: function(XMLHttpRequest, textStatus) {
				this; // 调用本次AJAX请求时传递的options参数
			}
		});

    });

    window.PageCount = 0;
    $('#li_userList').click(function(){ 
    	creatPageList(1);
    });/* li_userList */
    
    function creatPageList(pageCode){
    	url = "http://"+ window.location.host + "/thinkcms/admin.php/Index/getUserList";	  
    	getPageList(url,pageCode,3);  
    	$('.tcdPageCode').createPage({
			pageCount: window.PageCount,
			current:pageCode,
			backFn:function(PageCode){
				getPageList(url,PageCode,3);
			}
		});
    }

	function getPageList(url,pageCode,count){		
    	$.ajax({
			url:url, 
			dataType:"json",
			async:false,
			data:{"page":pageCode,"count":count},
			type:"POST",
			success: function (data, textStatus) {
				createUserTable(data,pageCode,count);
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
	}

	function createUserTable(data,pageCode,count){
		var tableText = "";
		var ListCount = parseInt(data['count']);
		window.PageCount = (ListCount % count) ? Math.ceil(ListCount / count) : (ListCount / count);	
		
		for(var rows in data['data']){
			tableText += "<tr>";
			for(var cols in data['data'][rows]){
				tableText += "<td>"+data['data'][rows][cols]+"</td>";	
			}
			tableText += "<td>"+"<a>删除</a>"+"</td>";
			tableText += "</tr>";
		}
		$('#usertable > tbody').children().remove();/* 首先清空被选tbody下的内容 */
		$('#usertable > tbody').append(tableText);
		$("#usertable > thead").find("tr").each(function(){
	　　	$(this).find("th").css("text-align","center");
	　　});
		$("#usertable > tbody").find("tr").each(function(){
	　　	var item = $(this).children('td:first-child').text();
			var username = $(this).children('td:nth-child(2)').text();
			$(this).find('a').click(function(){
				createDialog(username,pageCode,item);		
			});
	　　});
	}

	function deteleOneUser(pageCode,item){
		url = "http://"+ window.location.host + "/thinkcms/admin.php/Index/deteleOneUser";
		$.ajax({
			url:url, 
			dataType:"json",
			async:false,
			data:{"item":item},
			type:"POST",
			success: function (data, textStatus) {
				creatPageList(pageCode);			
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {	
 				alert('请求出错');
			},
			complete: function(XMLHttpRequest, textStatus) {
				this; // 调用本次AJAX请求时传递的options参数
			}
		});
	}

	function createDialog(username,pageCode,item) {
		$.confirm({
			title: '请确认是否删除',
			content: '确定要删除'+username+'用户吗？',
			buttons: {   
				ok: {
				    text: "确定",
				    btnClass: 'btn-primary',
				    keys: ['enter'],
				    action: function(){
				        deteleOneUser(pageCode,item);
				    }
				},
				cancel: {
				    text: "取消",
				    btnClass: 'btn-primary',
				    action: function(){
				        console.log('取消');
				    }
				}
			}
		});
	}

	$('#regsubmit').click(function(){
		var username  = $('input[name=username]');
		var userpwd   = $('input[name=userpwd]');
		var userrepwd = $('input[name=userrepwd]');
		var useremail = $('input[name=useremail]');

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
		if (userrepwd.val() == '') {
			$('.userrepwdinfo').html("<font color=red>用户密码不能为空</font>");
			userrepwd.focus();
			return false;
		}
		if (useremail.val() == '') {
			$('.useremailinfo').html("<font color=red>邮箱地址不能为空</font>");
			useremail.focus();
			return false;
		}

		var url = "http://"+ window.location.host + "/thinkcms/admin.php/Register/registerUser";
		$.ajax({
			url:url, 
			dataType:"json",
			data:{"username":username.val(),"userpwd":userpwd.val(),
				  "userrepwd":userrepwd.val(),"useremail":useremail.val()},
			type:"POST",
			success: function (data, textStatus) {
				// data could be xmlDoc, jsonObj, html, text, etc...   
				if(data.ret == true){
					$.alert({
						title: '添加用户',
						content: '添加成功',
						buttons: {
							ok: {
							    text: "确定",
							    btnClass: 'btn-primary',
							    keys: ['enter'],
							    action: function(){
							        cleanUserForm();
							    }
							}
						}
					});		
				}else{
					alert(data.info);
				}
				
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {	
 				alert('请求出错');
			},
			complete: function(XMLHttpRequest, textStatus) {
				this; // 调用本次AJAX请求时传递的options参数
			}
		});

	});
	function cleanUserForm(){
		var username  = $('input[name=username]');
		var userpwd   = $('input[name=userpwd]');
		var userrepwd = $('input[name=userrepwd]');
		var useremail = $('input[name=useremail]');
		if (username.val() != '') {
			username.val("");
		}
		if (userpwd.val() != '') {
			userpwd.val("");
		}
		if (userrepwd.val() != '') {
			userrepwd.val("");
		}
		if (useremail.val() != '') {
			useremail.val("");
		}
	}

	$('#reset').click(function(){
		cleanUserForm();
	});

	$('#li_userAdd').click(function(){
		cleanUserForm();
	});

});/* ready(function()) */