if (screen.width > 1024) {
	$(document).ready(function(){
		var windowScrollTop = $(window).scrollTop();
		if(windowScrollTop>=200){
			$("header").addClass("TopHeader");
		}else{
			$("header").removeClass("TopHeader");
		};
		$(window).scroll(function(){
			var windowScrollTop = $(window).scrollTop();
			if(windowScrollTop>=200){
				$("header").addClass("TopHeader");
			}else{
				$("header").removeClass("TopHeader");
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



// pc端 导航下拉 默认下拉菜单
if(screen.width > 1024){
	$('.i_nav .menu-item-has-children').hover(function() {
		$(this).find('.sub-menu').stop().slideToggle(300);
	});
};

// pc端 导航下拉 产品下拉菜单
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

	handleNavHover('.nav_dropdown_menu1', '.nav_dropdown_item1');
	handleNavHover('.nav_dropdown_menu2', '.nav_dropdown_item2');
	handleNavHover('.nav_dropdown_menu3', '.nav_dropdown_item3');
	handleNavHover('.nav_dropdown_menu4', '.nav_dropdown_item4');
	handleNavHover('.nav_dropdown_menu5', '.nav_dropdown_item5');
}


// 语言
$(document).ready(function(){
	$(".top_language_btn").click(function(){
		$(this).toggleClass("on");
		$(".language_list").toggleClass("on");
	});
	$(document).click(function(event){
		if(!$(event.target).closest('.top_language_btn, .language_list').length){
			$(".top_language_btn").removeClass("on");
			$(".language_list").removeClass("on");
		};
	});
});

