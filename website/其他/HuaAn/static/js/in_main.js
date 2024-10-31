
// Banner Fixed
window.addEventListener('scroll', function() {
	var bannerFixed = document.querySelector('.banner_fixed');
	var bannerFixedHeight = bannerFixed.offsetHeight;
	var scrollPos = window.scrollY;
	if (scrollPos <= bannerFixedHeight) {
		var transformValue = 'translateY(' + (-scrollPos / 1.5) + 'px)';
		bannerFixed.style.transform = transformValue;
	}
});



applyHeight();
$(window).on('resize', function() {
	applyHeight();
});
function applyHeight() {

	// .b_full_header height
	var b_height = $(".banner_fixed").height();
	$(".b_full_header").css("height", b_height);

	// .in_nav margin-top
	var in_nav_height = $(".in_nav").height();
	$(".in_nav").css("margin-top", -in_nav_height);

};


// In nav click
if(screen.width < 1025){
	$(document).on("click", ".in_nav_tit", function() {
		$(this).toggleClass("on");
		$(".in_nav_list").stop().slideToggle();
	});
	// $(document).on("click", ".in_nav_list", function() {
	// 	$(".in_nav_tit").toggleClass("on");
	// 	$(this).stop().slideToggle();
	// });
};




if(screen.width < 1025){
	$(document).ready(function() {
		var navH = $(".in_nav").offset().top;
		var headerHeight = $("header").outerHeight();
		var offsetTop = navH - headerHeight;
		var updateNavFixState = function() {
			var sorH = $(window).scrollTop();
			if (sorH >= offsetTop) {
			$(".in_nav").addClass("navFix");
			} else {
			$(".in_nav").removeClass("navFix");
			}
		};
		updateNavFixState(); // 初始化状态
		$(window).scroll(function() {
			updateNavFixState(); // 监听滚动事件，根据当前滚动位置更新状态
		});
	});
};