if (screen.width > 1024) {
	$(document).ready(function(){
		var windowScrollTop = $(window).scrollTop();
		if(windowScrollTop>=200){
			$("header").addClass("TopHeader");
		}else{
			$("header").removeClass("TopHeader");
		};
		$(window).scroll(function(){
			var windowScrollTop = $(window).scrollTop();
			if(windowScrollTop>=200){
				$("header").addClass("TopHeader");
			}else{
				$("header").removeClass("TopHeader");
			};
		});
	});
};



// var w = $(window).width();
if (screen.width < 1025) {
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



// pc端 导航下拉 默认下拉菜单
if(screen.width > 1024){

	$('.i_nav .menu-item-has-children').hover(function() {
		$(this).find('.sub-menu').stop().slideToggle(300);
	});

};

// pc端 导航下拉 产品下拉菜单
if(screen.width > 1024){

	$('.products_nav').hover(function() {
		$(this).toggleClass("curr")
		$('.nav_dropdown').stop().slideToggle(300);
	});
	$('.nav_dropdown').hover(function() {
		$('.products_nav').toggleClass("curr")
		$(this).stop().slideToggle(300);
	});

};


// 搜索 + 语言
$(document).ready(function(){
	$(".top_search_ico").click(function(){
		$(this).toggleClass("on")
		$(".top_search").toggleClass("on");
	});
	$(".top_language").click(function(){
		$(this).toggleClass("on")
		$(".top_language_list").toggleClass("on");
	});
	$(document).click(function(event){
		if(!$(event.target).closest('.top_search_ico, .top_search').length){
			$(".top_search_ico").removeClass("on");
			$(".top_search").removeClass("on");
		}
		if(!$(event.target).closest('.top_language, .top_language_list').length){
			$(".top_language").removeClass("on");
			$(".top_language_list").removeClass("on");
		}
	});
});
