if (screen.width > 1024) {
	$(document).ready(function(){
		var windowScrollTop = $(window).scrollTop();
		if(windowScrollTop>=200){
			$("header").addClass("fixedHeader");
		}else{
			$("header").removeClass("fixedHeader");
		};
		$(window).scroll(function(){
			var windowScrollTop = $(window).scrollTop();
			if(windowScrollTop>=200){
				$("header").addClass("fixedHeader");
			}else{
				$("header").removeClass("fixedHeader");
			};
		});
	});
};


// Mobile Nav
if (screen.width < 1025) {
	$(".nav_menu").click(function () {
		$(this).toggleClass("on");
		$(".i_nav").stop().toggleClass('active');
	});
	$('.i_nav>li.menu-item-has-children').append("<span></span>");

	var faqList = $('.i_nav>li');
	faqList.find('span').click(function() {
		var parentLi = $(this).parent();
		var ul = parentLi.find('ul');
		if (ul.is(':hidden')) {
			faqList.find('ul').slideUp('fast');
			faqList.find('span').removeClass('on');
			ul.slideDown('fast');
			$(this).addClass('on');
		} else {
			ul.slideUp('fast');
			$(this).removeClass('on');
		}
	});
};



// pc Nav
if(screen.width > 1024){
	$('.i_nav .menu-item-has-children').hover(function() {
		$(this).find('.sub-menu').stop().slideToggle(300);
	});
};

// pc Nav Dropdown
if (screen.width > 1024) {
	function handleNavHover(navClass, dropdownClass) {
		var timeout;
		$(navClass).on('mouseenter', function () {
			clearTimeout(timeout);
			$(this).addClass('active');
			$(dropdownClass).stop().slideDown(300);
		}).on('mouseleave', function () {
			var navElement = $(this);
			clearTimeout(timeout);
			timeout = setTimeout(function() {
				navElement.removeClass('active');
				$(dropdownClass).stop().slideUp(300);
			}, 0);
		});

		$(document).on('mouseenter', dropdownClass, function () {
			clearTimeout(timeout);
			$(dropdownClass).stop().slideDown(300);
		}).on('mouseleave', dropdownClass, function () {
			var navElement = $(navClass);
			clearTimeout(timeout);
			timeout = setTimeout(function() {
				navElement.removeClass('active');
				$(dropdownClass).stop().slideUp(300);
			}, 0);
		});
	}

	handleNavHover('.nav_products', '.nav_menu_products');
}


// Language
$(document).ready(function(){

	$(".top_search_btn").click(function(){
		$(this).toggleClass("on");
		$(".search_cont").toggleClass("on");
	});

	$(".top_language_btn").click(function(){
		$(this).toggleClass("on");
		$(".language_list").toggleClass("on");
	});

	$(document).click(function(event){
		const target = $(event.target);
		const searchContainer = $(".top_search_btn, .search_cont");
		const languageContainer = $(".top_language_btn, .language_list");

		if (!target.closest(searchContainer).length){
			searchContainer.removeClass("on");
		}
		if (!target.closest(languageContainer).length){
			languageContainer.removeClass("on");
		}
	});
});
