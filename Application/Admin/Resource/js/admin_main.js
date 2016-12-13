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
				// data could be xmlDoc, jsonObj, html, text, etc...   
				/*var $td = $('.table td');
				var i=0;
				for(var key in data){
				   //alert(key+" "+data[key]);
				   $($td[i++]).html(''+key+':');
				   $($td[i++]).html(''+data[key]);
				}*/
				
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

    window.PageCount;
    $('#li_userList').click(function(){ 	    	
    	url = "http://"+ window.location.host + "/thinkcms/admin.php/Index/getUserList";
    	getPageList(url,1,2); 
    	$(".tcdPageCode").createPage({
			pageCount:window.PageCount,
			current:1,
			backFn:function(pageCode){
				getPageList(url,pageCode,2);
			}
		}); 	
    });/* li_userList */

	function getPageList(url,pageCode,count){		
    	$.ajax({
			url:url, 
			dataType:"json",
			async:false,
			data:{"page":pageCode,"count":count},
			type:"POST",
			success: function (data, textStatus) {
				createUserTable(data,count);
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

	function createUserTable(data,count){
		var tableText = "<table class=\"table table-bordered table-hover\">";
		tableText += "<thead><tr> \
						<th>id</th> \
						<th>username</th> \
						<th>useremail</th> \
						<th>regtime</th> \
					  </tr></thead> \
					  <tbody>";
		var ListCount = parseInt(data['count']);
		window.PageCount = (ListCount % count) ? Math.ceil(ListCount / count) : (ListCount / count);	
				
		for(var rows in data['data']){
			tableText += "<tr>";
			for(var cols in data['data'][rows]){
				tableText += "<td>"+data['data'][rows][cols]+"</td>";	
			}
			tableText += "</tr>"
		}
		tableText += "</tbody></table>";
		$('#userlist_div').empty();/* 首先清空被选div下的内容 */
		$('#userlist_div').append(tableText);
	}

});/* ready(function()) */