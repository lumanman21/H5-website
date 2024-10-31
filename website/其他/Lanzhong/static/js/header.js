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



// pc端 导航下拉 默认下拉菜单
if(screen.width > 1024){

	$('.i_nav > li > a').prepend('<i></i>');

	$('.i_nav>.menu-item-has-children').hover(function() {
		$(this).children('.sub-menu').stop().slideDown(300);
	}, function() {
		$(this).children('.sub-menu').stop().slideUp(300);
	});

	$('.i_nav>.menu-item-has-children>.sub-menu>li').hover(function() {
		$(this).children('.sub-menu').stop().slideDown(300);
	}, function() {
		$(this).children('.sub-menu').stop().slideUp(300);
	});

	$('.top_list>.menu-item-has-children').hover(function() {
		$(this).children('.sub-menu').stop().slideDown(300);
	}, function() {
		$(this).children('.sub-menu').stop().slideUp(300);
	});

};



// 移动端 导航
if (screen.width < 1025) {

	$('.i_nav .menu-item-has-children').prepend('<span class="far"></span>');

	$(".nav_menu").click(function () {
		$(this).toggleClass("on");
		$(".i_nav").stop().slideToggle();
	});

	var navList = $('.i_nav>li');
	navList.children('span').click(function() {
		var navsub = $(this).siblings('.sub-menu');
		if (navsub.is(':hidden')) {
			navList.children('.sub-menu').slideUp('fast');
			navList.children('span').removeClass('on');
			navsub.slideDown('fast');
			$(this).addClass('on');
		} else {
			navsub.slideUp('fast');
			$(this).removeClass('on');
		}
	});

	var navList2 = $('.i_nav .sub-menu>li');
	navList2.children('span').click(function() {
		var navsub2 = $(this).siblings('.sub-menu');
		if (navsub2.is(':hidden')) {
			navList2.children('.sub-menu').slideUp('fast');
			navList2.children('span').removeClass('on');
			navsub2.slideDown('fast');
			$(this).addClass('on');
		} else {
			navsub2.slideUp('fast');
			$(this).removeClass('on');
		}
	});


	// $('.i_nav>li').each(function() {
	// 	if($(this).find("ul").has('li').length>0){
	// 		$(this).append("<span></span>");
	// 	};

	// });
	// $('.i_nav>li').each(function() {
	// 	$(this).find("span").click(function () {
	// 		$(this).parent().find("ul").slideToggle(300);
	// 		if($(this).hasClass("on")){
	// 			$(this).removeClass("on") ;
	// 		}else{
	// 			$(this).addClass("on") ;
	// 		}
	// 	});
	// });
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
