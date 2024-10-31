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

	$('.i_nav > .menu-item-has-children > a').append('<i class="fal fa-chevron-down"></i>');

	$('.i_nav > .nav_download > a').append('<i class="fal fa-arrow-to-bottom"></i>');

	// $('.i_nav .menu-item-has-children').hover(function() {
	// 	$(this).find('.sub-menu').stop().slideToggle(300);
	// });

};

// pc端 导航下拉 产品下拉菜单
if(screen.width > 1024){

	$('.nav_products').hover(function() {
		$(this).toggleClass("curr")
		$('.nav_dropdown').stop().slideToggle(300);
	});
	$('.nav_dropdown').hover(function() {
		$('.nav_products').toggleClass("curr")
		$(this).stop().slideToggle(300);
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



$('.top_language_list li:eq(2)').after('<i class="fal fa-ellipsis-h language_menu_btn"></i>')
$(".top_language_list").find("li:gt(2)").wrapAll("<div class='language_menu'></div>");


// 搜索 + 语言
$(document).ready(function(){
	$(".top_search_ico").click(function(){
		$(this).toggleClass("on")
		$(".top_search").toggleClass("on");
	});
	$(".language_menu_btn").click(function(){
		$(this).toggleClass("on")
		$(".language_menu").toggleClass("on");
	});
	$(document).click(function(event){
		if(!$(event.target).closest('.top_search_ico, .top_search').length){
			$(".top_search_ico").removeClass("on");
			$(".top_search").removeClass("on");
		}
		if(!$(event.target).closest('.language_menu_btn, .language_menu').length){
			$(".language_menu_btn").removeClass("on");
			$(".language_menu").removeClass("on");
		}
	});
});
