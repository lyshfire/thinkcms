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


    /* 获取系统信息 */
    $('.li_systemInfo').click(function(){

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
				$('.table-responsive').append(tableText);
				
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


});