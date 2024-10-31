if (screen.width > 1024) {
	$(document).ready(function(){
		var windowScrollTop = $(window).scrollTop();
		if(windowScrollTop>=400){
			$("header").addClass("TopHeader");
		}else{
			$("header").removeClass("TopHeader");
		};
		$(window).scroll(function(){
			var windowScrollTop = $(window).scrollTop();
			if(windowScrollTop>=400){
				$("header").addClass("TopHeader");
			}else{
				$("header").removeClass("TopHeader");
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

	$('.i_nav>li:eq(6)').after('<div class="nav_list_btn"><iconify-icon icon="jam:menu"></iconify-icon></div>')
	$(".i_nav>li:gt(5)").wrapAll("<div class='i_nav_list'></div>");

};

// pc Nav Dropdown
if (screen.width > 1024) {
	function handleNavHover(navClass, dropdownClass) {
	  	$(navClass).hover(
			function () {
				if (!$(dropdownClass).hasClass("show")) {
					$(this).addClass("curr");
					$(dropdownClass).css("z-index", 101).stop().slideDown(300);
				}else{
					$(dropdownClass).addClass('tsY0');
				}
			},
			function () {
				if (!$(dropdownClass).hasClass("show")) {
					$(this).removeClass("curr");
					$(dropdownClass).css("z-index", 100).stop().slideUp(300);
				}else{
					$(dropdownClass).removeClass('tsY0');
				}
			}
		);

		$(document).on('mouseenter', dropdownClass, function () {
			if (!$(dropdownClass).hasClass("show")) {
				$(dropdownClass).stop().slideDown(300);
			}else{
				$(dropdownClass).addClass('tsY0');
			}
			}).on('mouseleave', dropdownClass, function () {
			if (!$(dropdownClass).hasClass("show")) {
				$(dropdownClass).stop().slideUp(300);
			}else{
				$(dropdownClass).removeClass('tsY0');
			}
		});
	}

	handleNavHover('.nav_p1', '.nav_dropdown_p1');
	handleNavHover('.nav_p2', '.nav_dropdown_p2');
}


// Search + Language
$(document).ready(function(){
	$(".top_search_ico").click(function(){
		$(this).toggleClass("on");
		$(".top_search").toggleClass("on");
	});

	$(".top_language_ico").click(function(){
		$(this).toggleClass("on");
		$(".top_language_list").toggleClass("on");
	});

	$(".top_user").click(function(){
		$(this).toggleClass("on");
		$(".top_user_list").toggleClass("on");
	});

	$(".nav_list_btn").click(function(){
		$(this).toggleClass("on")
		$(".i_nav_list").toggleClass("on");
	});

	$(document).click(function(event){
		const target = $(event.target);
		const searchContainer = $(".top_search_ico, .top_search");
		const languageContainer = $(".top_language_ico, .top_language_list");
		const userContainer = $(".top_user, .top_user_list");
		const Navlist = $(".nav_list_btn, .i_nav_list");

		if (!target.closest(searchContainer).length){
			searchContainer.removeClass("on");
		}

		if (!target.closest(languageContainer).length){
			languageContainer.removeClass("on");
		}

		if (!target.closest(userContainer).length){
			userContainer.removeClass("on");
		}

		if (!target.closest(Navlist).length){
			Navlist.removeClass("on");
		}
	});
});
