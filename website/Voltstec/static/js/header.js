// 下拉头部固定
$(function(){
	$(window).scroll(function(){
		var scroll_top2=$(window).scrollTop();
		if(scroll_top2>=44){
			$("header").css("position","fixed");
			$('.xiala').css('top','calc(var(--header_height))')

		}else{
			$("header").css("position","relative");
			$('.xiala').css('top','calc(var(--header_height) + var(--top_line))')

		}
	})
});




$(function(){
	$(window).scroll(function(){
		var scroll_top2=$(window).scrollTop();
		var w = $(window).width();
		if (w > 960) {
			if(scroll_top2>=44){

				$('.header_cont>.wrap_66').css('height','0.6rem')
				$('.header_cont').css('height','0.6rem')
			}else{

				$('.header_cont>.wrap_66').css('height','0.6rem')
				$('.header_cont').css('height','0.6rem')
			}
		}

	})
});
// 移动端 导航 折叠
var w = $(window).width();
if (w < 960) {
	$(document).ready(function() {
		$('.i_nav a').click(function() {
			if ($(this).next().is('ul')) {
				if ($(this).next('ul').css('display') == 'none') {
					$(this).next('ul').slideDown();
					$(this).find('i').attr("class", "touch-arrow-up")
				} else {
					$(this).next('ul').slideUp();
					$(this).next('ul').find('ul').slideUp();
					$(this).find('i').attr("class", "touch-arrow-down")
				}
			}
		})
	});
	// $('.i_nav .menu-item-has-children>a').attr('href','javascript:;')
};



// pc端 导航下拉

















// 导航
$(".nav-trigger").click(function(){
	event.stopPropagation();
	if($('.cd-primary-nav').hasClass("nav-open")){
		 $('.cd-primary-nav').removeClass("nav-open") ;
	}else{
		 $('.cd-primary-nav').addClass("nav-open") ;
	};
	$(".i_nav").click(function (e) {
		event.stopPropagation();
	});
});


// 语言
$(".top_language").click(function(){
	event.stopPropagation();
	if($(this).hasClass("on")){
		$(this).removeClass("on") ;
	}else{
		$(this).addClass("on") ;
	};
	if($('.top_language_list').hasClass("on")){
		$('.top_language_list').removeClass("on") ;
	}else{
		$('.top_language_list').addClass("on") ;
	}
});


// 搜索
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

$("body").click(function (e) {
	event.stopPropagation();
	$(".cd-primary-nav").removeClass("nav-open");
	$(".top_language").removeClass("on");
	$(".top_language_list").removeClass("on");
	$(".top_search").removeClass("on");
});


$(document).ready(function() {
	$('.about_banner img').css('transform','scale(1)')

});