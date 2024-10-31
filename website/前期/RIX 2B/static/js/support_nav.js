$(document).ready(function(){
	var navH=$(".topnav").offset().top;
	var sorH=$(this).scrollTop();
	if(sorH>=navH - 80){
		$(".topnav").addClass("navFix");
	}
	else if(sorH<navH){
		$(".topnav").removeClass("navFix");
	};
	$(window).scroll(function(){
		var sorH=$(this).scrollTop();
		if(sorH>=navH - 80){
			$(".topnav").addClass("navFix");
		}
		else if(sorH<navH){
			$(".topnav").removeClass("navFix");
		}
	})
});


if(screen.width < 1025){
	$(function(){
		$(".topnav_tit").click(function () {
			$(".blur__warp").toggleClass("on");
			$(this).toggleClass("on");
			$(".topnav ul").stop().slideToggle();
		});
	});
}