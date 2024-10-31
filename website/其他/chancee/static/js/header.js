if(screen.width > 1024){
	$(function(){
		$(window).scroll(function(){
			var scroll_top=$(window).scrollTop();
			if(scroll_top>=400){
				$(".logo").css("height","var(--header_height_reduce)");
				$(".i_nav>li>a").css("line-height","var(--header_height_reduce)");
				$(".top_r").css("height","var(--header_height_reduce)");
				$(".nav_list_show").css("top","var(--header_height_reduce)");
			}else{
				$(".logo").css("height","var(--header_height)");
				$(".i_nav>li>a").css("line-height","var(--header_height)");
				$(".top_r").css("height","var(--header_height)");
				$(".nav_list_show").css("top","var(--header_height)");
			}
		})
	});
}
$(function(){
	$(window).scroll(function(){
		var scroll_top2=$(window).scrollTop();
		if(scroll_top2>=300){
			$("header").css("background","rgb(255 255 255 / 100%)");
			$(".top_search_ipt").css("background-color","#F2F2F2");
			$(".top_search_btn").css("background-color","#F2F2F2");
			$(".top_language").css("background-color","#F2F2F2");
		}else{
			$("header").css("background","rgb(255 255 255 / 60%)");
			$(".top_search_ipt").css("background-color","rgb(255 255 255 / 100%)");
			$(".top_search_btn").css("background-color","rgb(255 255 255 / 100%)");
			$(".top_language").css("background-color","rgb(255 255 255 / 100%)");
		}
	})
});

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

// pc端 导航下拉
if(screen.width > 1024){
	$('.nav_products_show').hide();
	$('.nav_products').hover(
	function() {
		$('.nav_products_show').show();
	},
	function() {
		$('.nav_products_show').hide();
	});

	$('.nav_products_show').hover(
	function() {
		$('.nav_products_show').show();
		$('.nav_products').addClass('curr');
	},
	function() {
		$('.nav_products_show').hide();
		$('.nav_products').removeClass('curr')
	});
	$('.nav_products').hover(
		function(){
			$(this).addClass('curr')
		},
		function(){
			$(this).removeClass('curr')
		}
	);

	$('.nav_solutions_show').hide();
	$('.nav_solutions').hover(
	function() {
		$('.nav_solutions_show').show();
	},
	function() {
		$('.nav_solutions_show').hide();
	});

	$('.nav_solutions_show').hover(
		function() {
			$('.nav_solutions_show').show();
			$('.nav_solutions').addClass('curr');
		},
		function() {
			$('.nav_solutions_show').hide();
			$('.nav_solutions').removeClass('curr')
		});
		$('.nav_solutions').hover(
			function(){
				$(this).addClass('curr')
			},
			function(){
				$(this).removeClass('curr')
			}
		);
};

// 搜索 + 语言
$(".top_search_ipt").click(function () {
	event.stopPropagation();
	$(this).addClass("on") ;
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
	$(".top_search_ipt").removeClass("on");
	$(".top_language").removeClass("on");
});