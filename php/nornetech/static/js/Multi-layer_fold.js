// 产品页左侧折叠分类导航
$(".top_nav .arrow").click(function(){
	if ($(this).next().is('ul')) {
			if ($(this).next('ul').css('display') == 'none') {
					$(this).next('ul').slideDown();
			} else {
					$(this).next('ul').slideUp();
					$(this).next('ul').find('ul').slideUp();
			}
	}
});
$(".top_nav .arrow2").click(function(){
	if ($(this).next().is('dl')) {
			if ($(this).next('dl').css('display') == 'none') {
					$(this).next('dl').slideDown();
			} else {
					$(this).next('dl').slideUp();
			}
	}
});


$('.top_nav>.current-category-parent').addClass("on");
$('.top_nav>.current-category-parent .arrow').addClass("curr");
$('.top_nav .current-category-parent>.arrow2').addClass("curr");
$(".top_nav>li").click(function(){
	if($(this).hasClass("on")){
			$(this).removeClass("on") ;
	}else{
			$(this).addClass("on") ;
	}
});
$(".top_nav .arrow").click(function(){
	if($(this).hasClass("curr")){
			$(this).removeClass("curr") ;
	}else{
			$(this).addClass("curr") ;
	}
});
$(".top_nav .arrow2").click(function(){
	if($(this).hasClass("curr")){
			$(this).removeClass("curr") ;
	}else{
			$(this).addClass("curr") ;
	}
});