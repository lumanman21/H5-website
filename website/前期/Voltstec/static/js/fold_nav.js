
// 左侧折叠分类导航
var wt = $(window).width();
if (wt < 1024) {
	$(document).ready(function() {
		$(".in_l_nav .tit").click(function(){
			event.stopPropagation();
			if($(this).hasClass("on")){
				$(this).removeClass("on") ;
			}else{
				$(this).addClass("on") ;
			};
			if($('.fold_nav').hasClass("on")){
				$('.fold_nav').removeClass("on") ;
			}else{
				$('.fold_nav').addClass("on") ;
			};
		});
	});
};
$(".fold_nav").click(function (e) {
    event.stopPropagation();
});
$("body").click(function (e) {
	event.stopPropagation();
	$(".fold_nav").removeClass("on");
});


$(".fold_nav .arrow").click(function(){
	if ($(this).next().is('ul')) {
		if ($(this).next('ul').css('display') == 'none') {
			$(this).next('ul').slideDown();
		} else {
			$(this).next('ul').slideUp();
			$(this).next('ul').find('ul').slideUp();
		}
	}
});
$('.fold_nav>.current-category-parent').addClass("on");
$('.fold_nav>.current-category-parent .arrow').addClass("curr");
$(".fold_nav li").click(function(){
	if($(this).hasClass("on")){
		$(this).removeClass("on") ;
	}else{
		$(this).addClass("on") ;
	}
});
$(".fold_nav .arrow").click(function(){
	if($(this).hasClass("curr")){
		$(this).removeClass("curr") ;
	}else{
		$(this).addClass("curr") ;
	}
});

