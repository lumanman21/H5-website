
// 自适应
function rem() {
	var htmlEle = document.documentElement;
	var winWidth = htmlEle.clientWidth || document.body.clientWidth;
	var width = winWidth;
	if(winWidth > 1441){htmlEle.style.fontSize = Math.ceil(100 * (width / 1920)) + 'px';}
	if(winWidth < 1601){htmlEle.style.fontSize = Math.ceil(110 * (width / 1920)) + 'px';}
	if(winWidth < 1441){htmlEle.style.fontSize = Math.ceil(120 * (width / 1920)) + 'px';}
	if(winWidth < 1367){htmlEle.style.fontSize = Math.ceil(130 * (width / 1920)) + 'px';}
	if(winWidth < 1201){htmlEle.style.fontSize = Math.ceil(140 * (width / 1920)) + 'px';}
	if(winWidth < 1025){htmlEle.style.fontSize = 100 + 'px';}
};
rem();
window.onresize = function() {
	rem();
}


if (screen.width > 1024) {
	$(document).ready(function(){
		var windowScrollTop = $(window).scrollTop();
		if(windowScrollTop>=200){
			$("header").addClass("TopHeader");
			// $(".drop").css("top", "1rem");

		}else{
			$("header").removeClass("TopHeader");
			// $(".drop").css("top", "1.4rem");
		};
		$(window).scroll(function(){
			var windowScrollTop = $(window).scrollTop();
			if(windowScrollTop>=200){
				$("header").addClass("TopHeader");
				// $(".drop").css("top", "1rem");
			}else{
				$("header").removeClass("TopHeader");
				// $(".drop").css("top", "1.4rem");
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



// pc端 导航下拉 产品下拉菜单
if(screen.width > 1024){
	$('.i_nav .menu-item-has-children').hover(function() {
		$(this).find('.sub-menu').stop().slideToggle(300);
	});

}




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


//回到顶部
function goTop() {
	$("html,body").animate(
	  {
		scrollTop: 0,
	  },
	  500
	);
}
  
function asfrom(){
	document.getElementById('aside_sc_from').style.display='block';
	document.getElementById('aside_mask_bg').style.display='block'
}
function asclosescxz(){
	document.getElementById('aside_sc_from').style.display='none';
	document.getElementById('aside_mask_bg').style.display='none'
};


$(document).ready(function() {
	$('.in_banner img').css('transform','translate(-50%,-50%) scale(1)')
});

