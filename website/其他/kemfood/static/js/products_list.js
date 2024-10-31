
// 产品页左侧折叠分类导航
var pw = $(window).width();
if (w < 960) {
	$(".in_pro_box_l .tit").click(function(){
		if ($(this).next().is('ul')) {
			if ($(this).next('ul').css('display') == 'none') {
				$(this).next('ul').slideDown();
			} else {
				$(this).next('ul').slideUp();
				$(this).next('ul').find('ul').slideUp();
			}
		}
	});
	$(".in_pro_box_l .tit").click(function(){
		if($(this).hasClass("open")){
			$(this).removeClass("open") ;
		}else{
			$(this).addClass("open") ;
		}
	})
};


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

