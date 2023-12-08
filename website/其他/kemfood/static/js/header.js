// 移动端 导航 折叠
// var w = $(window).width();
// if (w < 960) {
	// $(document).ready(function() {
		// $('.i_nav a').click(function() {
			// if ($(this).next().is('ul')) {
				// if ($(this).next('ul').css('display') == 'none') {
					// $(this).next('ul').slideDown();
					// $(this).find('i').attr("class", "touch-arrow-up")
				// } else {
					// $(this).next('ul').slideUp();
					// $(this).next('ul').find('ul').slideUp();
					// $(this).find('i').attr("class", "touch-arrow-down")
				// }
			// }
		// })
	// });
	// $('.i_nav .menu-item-has-children>a').attr('href','javascript:;')
// };


// 导航
var w = $(window).width();
if (w < 1080) {
	$(".nav_menu").click(function () {
		//        event.stopPropagation(); 
		$(this).toggleClass("on");
		$(".nav").stop().slideToggle();
	})
};


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



$("body").click(function (e) {
	$(".cd-primary-nav").removeClass("nav-open");
	$(".top_language").removeClass("on");
	$(".top_language_list").removeClass("on");
});