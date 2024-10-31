function scrollHandler(selector, ifCode, elseCode) {
	$(window).scroll(function() {
		var elementTop = $(selector).offset().top;
		var elementBottom = elementTop + $(selector).height();
		var winTop = $(window).scrollTop();
		var winBottom = winTop + $(window).height();

		if (winBottom >= elementTop && winTop <= elementBottom) {
			ifCode();
		} else {
			elseCode();
		}
	});
}