	 function addLoadEvent(func) {
        var oldonload = window.onload;
        if (typeof window.onload != 'function') {
           window.onload = func;
        } else {
           window.onload = function() {
           if (oldonload) {
               oldonload();
           }
           func();
         }
       }
    }

	var startX=startY=0;

	/* toucstart事件 */
	function touchStart(event){
		var touch = event.touch[0];/* 获取第一个触点 */
		var x = Number(touch.pageX);
		var y = Number(touch.pageY);
		startX = x;
		startY = y;
		alert("startX:"+startX+"startY:"+startY); 
		
	}

	function touchMove(event){
			var touch = event.touch[0];/* 获取一个触点 */
			var x = Number(touch.pageX);
			var y = Number(touch.pageY); 

			/* 菜单弹出 */	
			if(((x-startX) > 30) || ((x-startX) > 30)){

			}

			/* 菜单隐藏 */
			if(((x-startX) < 30)||((x-startX) < 30)){

			}
	}

	function touchEnd(event) {    
        //evt.preventDefault(); //阻止触摸时浏览器的缩放、滚动条滚动等  
        //var text = 'TouchEnd事件触发';  
        //document.getElementById("result").innerHTML = text;  
         
    }

    //绑定事件  
    function bindEvent() {  
        document.addEventListener('touchstart', touchStart, false);  
        document.addEventListener('touchmove', touchMove, false);  
        document.addEventListener('touchend', touchEnd, false);  
    }

    
    function isTouchDevice() {   
       // if(document.createEvent("TouchEvent")){
        	bindEvent();
        //}else{
        //	alert("不支持TouchEvent事件！");
        //} 
         
          
    }

    addLoadEvent(isTouchDevice);