if(screen.width > 960){
	$(function(){
		$(window).scroll(function(){
			var scroll_top=$(window).scrollTop();
			if(scroll_top>=400){
				$(".logo").css("height","var(--header_height_reduce)");
				$(".i_nav>li>a").css("line-height","var(--header_height_reduce)");
				$(".nav_list_show").css("top","var(--header_height_reduce)");
				$(".top_r").css("height","var(--header_height_reduce)");
				$(".top_search").css("top","var(--header_height_reduce)");
			}else{
				$(".logo").css("height","var(--header_height)");
				$(".i_nav>li>a").css("line-height","var(--header_height)");
				$(".nav_list_show").css("top","var(--header_height)");
				$(".top_r").css("height","var(--header_height)");
				$(".top_search").css("top","var(--header_height)");
			}
		})
	});
}
$(function(){
	if(screen.width > 960){
	$(window).scroll(function(){
		var scroll_top2=$(window).scrollTop();
		if(scroll_top2>=300){
			$("header").css("background","rgba(0,0,0,0.6)");
			$(".logo img").css("max-height","40px");
		}else{
			$("header").css("background","rgba(0,0,0,0.6)");
			$(".logo img").css("max-height","var(--maxheight)");
		}
	})
}
});





var w = $(window).width();
if (w < 960) {
	$(".nav_menu").click(function () {
		//        event.stopPropagation(); 
		$(this).toggleClass("on");
		$(".i_nav").stop().slideToggle();
	})
};

// 移动端 导航点击下拉
if(screen.width < 960){
	$(document).ready(function() {
		$('.i_nav a').click(function() {
			if ($(this).next().is('ul')) {
				if ($(this).next('ul').css('display') == 'none') {
					$(this).next('ul').slideDown();
				} else {
					$(this).next('ul').slideUp();
					$(this).next('ul').find('ul').slideUp();
				}
			}
		})
	});
	$('.i_nav .menu-item-has-children>a').attr('href','javascript:;');
};

// pc端 导航下拉
if(screen.width > 960){	
	
		$('.nav_products_show').css('display','none');
		$('.nav_products').hover(
		function() {
			$('.nav_products_show').css('display','block');
		},
		function() {
			$('.nav_products_show').css('display','none');
		});
		
		$('.nav_products_show').hover(
		function() {
			$('.nav_products_show').css('display','block');
		},
		function() {
			$('.nav_products_show').css('display','none');
		});
	
};

// 搜索 + 语言
$(".top_search_ico").click(function () {
	event.stopPropagation();
	if($(".top_search").hasClass("on")){
		 $(".top_search").removeClass("on") ;
	}else{
		 $(".top_search").addClass("on") ;
	}
});
$(".top_search").click(function (e) {
    event.stopPropagation();
});
$(".top_language").click(function(){
	event.stopPropagation();
	if($(this).hasClass("on")){
		 $(this).removeClass("on") ;
	}else{
		 $(this).addClass("on") ;
	}
});
$("body").click(function (e) {
	event.stopPropagation();
	$(".top_search").removeClass("on");
	$(".top_language>li").removeClass("on");
});


// window.onresize = function(){
// 	document.documentElement.style.fontSize = document.documentElement.offsetWidth / 12 +'px';
// }
/*
document.documentElement.style.fontSize 是得到<html>标签并为它设置font-size样式字体大小，因为REM计算的规则是依赖根元素也就是<html>元素的字体大小
document.documentElement.offsetWidth  是获取整个视口的宽度
*/

$(document).ready(function() {
	$('.about_img').css('transform','scale(1)')

});
