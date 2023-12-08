if(screen.width > 1024){
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
	$(window).scroll(function(){
		var scroll_top2=$(window).scrollTop();
		if(scroll_top2>=300){
			$("header").css("background","rgb(255 255 255 / 100%)");
		}else{
			$("header").css("background","rgb(255 255 255 / 40%)");
		}
	})
});

var w = $(window).width();
if (w < 1025) {
	$(".nav_menu").click(function () {
		//        event.stopPropagation();
		$(this).toggleClass("on");
		$(".i_nav").stop().slideToggle();
	});
	$('.i_nav>li').each(function() {
		if($(this).find("ul").has('li').length>0){
			$(this).append("<span></span>");
		};

	});
	$('.i_nav>li').each(function() {
		$(this).find("span").click(function () {
			$(this).parent().find("ul").slideToggle(300);
			if($(this).hasClass("on")){
				$(this).removeClass("on") ;
			}else{
				$(this).addClass("on") ;
			}
		});
	});
};

// pc端 导航下拉


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
	$(".top_language").removeClass("on");
});