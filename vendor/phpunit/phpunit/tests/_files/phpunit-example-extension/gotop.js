$(document).ready(function(){	
	//计算
	//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消�?
	    $(function () {
	        $(window).scroll(function(){
	            if ($(window).scrollTop()>200){
	                $("#gotop").fadeIn(400);
	            }
	            else
	            {
	                $("#gotop").fadeOut(400);
	            }
	        });

	//当点击跳转链接后，回到页面顶部位�?
	        $("#gotop").click(function(){
	            $('body,html').animate({scrollTop:0},400);
	            return false;
	        });
	    });
	});