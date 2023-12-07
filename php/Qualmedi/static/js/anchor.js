// 移动端
if (screen.width < 960) {
	$(function () {
	$(".in_nav_tit").click(function () {
		$(this).toggleClass("on");
		$(".in_nav ul").stop().slideToggle();
	});
	$(".in_nav ul").click(function () {
		$(".in_nav_tit").toggleClass("on");
		$(this).stop().slideToggle();
	});
	});
}
// 锚点固定
$(document).ready(function () {
	var navH = $(".in_nav").offset().top;
	var sorH = $(this).scrollTop();
	if (sorH >= navH) {
		$(".in_nav").addClass("navFix");
	}
	else if (sorH < navH) {
	$(".in_nav").removeClass("navFix");
	};
	$(window).scroll(function () {
	var sorH = $(this).scrollTop();
	if (sorH >= navH) {
		$(".in_nav").addClass("navFix");
	}
	else if (sorH < navH) {
		$(".in_nav").removeClass("navFix");
	}
	})
});
scrollFloor({
	floorClass: '.in_louti',
	navClass: '.in_nav li',
	activeClass: 'active',
	delayTime: 500,
	activeTop: 300,
	scrollTop: -200
});