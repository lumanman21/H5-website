//rem适配
window.onresize = setHtmlFontSize;
window.onload = setHtmlFontSize;

function setHtmlFontSize() {
  const htmlWidth = document.documentElement.offsetWidth || window.innerWidth;
  const htmlDom = document.documentElement;
  htmlDom.style.fontSize = htmlWidth / 120 + 'px';
}
setHtmlFontSize();



// 自动隐藏头部（向下滚动网页时头部隐藏，向上滚动网页时显示）
jQuery(document).ready(function ($) {
  var mainHeader = $('.cd-auto-hide-header'),
    inav = $('.cd-primary-nav'),
    secondaryNavigation = $('.cd-secondary-nav'),
    //this applies only if secondary nav is below intro section
    belowNavHeroContent = $('.sub-nav-hero'),
    headerHeight = mainHeader.height();

  //set scrolling variables
  var scrolling = false,
    previousTop = 0,
    currentTop = 0,
    scrollDelta = 10,
    scrollOffset = 80;

  inav.on('click', '.nav-trigger', function (event) {
    // open primary navigation on mobile
    event.preventDefault();
    inav.toggleClass('nav-open');
  });

  $(window).on('scroll', function () {
    if (!scrolling) {
      scrolling = true;
      !window.requestAnimationFrame
        ? setTimeout(autoHideHeader, 250)
        : requestAnimationFrame(autoHideHeader);
    }
  });

  $(window).on('resize', function () {
    headerHeight = mainHeader.height();
  });

  function autoHideHeader() {
    var currentTop = $(window).scrollTop();

    belowNavHeroContent.length > 0
      ? checkStickyNavigation(currentTop) // secondary navigation below intro
      : checkSimpleNavigation(currentTop);

    previousTop = currentTop;
    scrolling = false;
  }

  function checkSimpleNavigation(currentTop) {
    //there's no secondary nav or secondary nav is below primary nav
    if (previousTop - currentTop > scrollDelta) {
      //if scrolling up...
      mainHeader.removeClass('is-hidden');
    } else if (
      currentTop - previousTop > scrollDelta &&
      currentTop > scrollOffset
    ) {
      //if scrolling down...
      mainHeader.addClass('is-hidden');
    }
  }

  function checkStickyNavigation(currentTop) {
    //secondary nav below intro section - sticky secondary nav
    var secondaryNavOffsetTop =
      belowNavHeroContent.offset().top -
      secondaryNavigation.height() -
      mainHeader.height();

    if (previousTop >= currentTop) {
      //if scrolling up...
      if (currentTop < secondaryNavOffsetTop) {
        //secondary nav is not fixed
        mainHeader.removeClass('is-hidden');
        secondaryNavigation.removeClass('fixed slide-up');
        belowNavHeroContent.removeClass('secondary-nav-fixed');
      } else if (previousTop - currentTop > scrollDelta) {
        //secondary nav is fixed
        mainHeader.removeClass('is-hidden');
        secondaryNavigation.removeClass('slide-up').addClass('fixed');
        belowNavHeroContent.addClass('secondary-nav-fixed');
      }
    } else {
      //if scrolling down...
      if (currentTop > secondaryNavOffsetTop + scrollOffset) {
        //hide primary nav
        mainHeader.addClass('is-hidden');
        secondaryNavigation.addClass('fixed slide-up');
        belowNavHeroContent.addClass('secondary-nav-fixed');
      } else if (currentTop > secondaryNavOffsetTop) {
        //once the secondary nav is fixed, do not hide primary nav if you haven't scrolled more than scrollOffset
        mainHeader.removeClass('is-hidden');
        secondaryNavigation.addClass('fixed').removeClass('slide-up');
        belowNavHeroContent.addClass('secondary-nav-fixed');
      }
    }
  }
});



// 搜索 + 语言
$(".top_search_ico").click(function () {
	event.stopPropagation();
	if($(".top_search").hasClass("on")){
		 $(".top_search").removeClass("on") ;
	}else{
		 $(".top_search").addClass("on") ;
	}
});
$(".top_search").click(function (e) {
    event.stopPropagation();
});
$(".top_language").click(function(){
	event.stopPropagation();
	if($(this).hasClass("on")){
		 $(this).removeClass("on") ;
	}else{
		 $(this).addClass("on") ;
	}
});
$("body").click(function (e) {
	event.stopPropagation();
	$(".top_search").removeClass("on");
	$(".top_language>li").removeClass("on");
});



// 移动端 导航 折叠
$(function () {
  var nAccordion = function (el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;
    var links = this.el.find('.n_switch');
    links.on(
      'click',
      {
        el: this.el,
        multiple: this.multiple,
      },
      this.dropdown
    );
  };
  nAccordion.prototype.dropdown = function (e) {
    var $el = e.data.el;
    ($this = $(this)), ($next = $this.next());
    $next.slideToggle();
    $this.parent().toggleClass('n_open');
    if (!e.data.multiple) {
      $el
        .find('.n_submenu')
        .not($next)
        .slideUp()
        .parent()
        .removeClass('n_open');
    }
  };
  var naccordion = new nAccordion($('#cd-navigation'), false);
});



//首页banner
var swiper = new Swiper(".i_banner_list", {
  slidesPerView: 1,
  spaceBetween: 0,
  slidesPerGroup: 1,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".banner-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".banner-button-next",
    prevEl: ".banner-button-prev",
  },
  observer: true,
  observeParents: true,
});



// 首页 证书 图片轮播
	var certifySwiper = new Swiper('#certify .swiper-container', {
		watchSlidesProgress: true,
		slidesPerView: 'auto',
		centeredSlides: true,
		loop: true,autoplay:true,
		loopedSlides: 5,
		autoplay: {
			delay: 4000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '.honor-button-next',
			prevEl: '.honor-button-prev',
		},
		pagination: {
			el: '.honor-pagination',
			clickable :true,
		},
		roundLengths: true, 
		on: {
			progress: function(progress) {
				for (i = 0; i < this.slides.length; i++) {
					var slide = this.slides.eq(i);
					var slideProgress = this.slides[i].progress;
					modify = 1;
					if (Math.abs(slideProgress) > 1) {
						modify = (Math.abs(slideProgress) - 1) * 0.4 + 1;
					}
					if(screen.width < 768){
						translate = slideProgress * modify * 32 + '%';
					}else{
						translate = slideProgress * modify * 36 + '%';
					}
					scale = 1 - Math.abs(slideProgress) / 6;
					zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
					slide.transform('translateX(' + translate + ') scale(' + scale + ')');
					slide.css('zIndex', zIndex);
					slide.css('opacity', 1);
					if (Math.abs(slideProgress) > 3) {
						slide.css('opacity', 0);
					}
				}
			},
			setTransition: function(transition) {
				for (var i = 0; i < this.slides.length; i++) {
					var slide = this.slides.eq(i)
					slide.transition(transition);
				}

			}
		}
	});


	/*查看大图*/
	var image = new Viewer(document.getElementById('honor_list'), {
		button: true,
		navbar: false,
		width: 660,
		title: false
	});

  


// about honor滚动
var pswiper = new Swiper('.i_partner_list', {
	loop: true,
	loopFillGroupWithBlank: true,
	navigation: {
		nextEl: '.pt-button-next',
		prevEl: '.pt-button-prev',
	},
	pagination: {
		el: '.pt-pagination',
		clickable: true,
	},
	autoplay: {
		delay: 3500,
		disableOnInteraction: false,
	},
	observer: true,
	observeParents: true,
	breakpoints: {
		0: {
		slidesPerView: 2,
		spaceBetween: 20,
		slidesPerGroup: 3
		},
		960: {
		slidesPerView: 4,
		spaceBetween: 20,
		slidesPerGroup: 6
		},
		1200: {
		slidesPerView: 4,
		spaceBetween: 30,
		slidesPerGroup: 1
		}
	}
});


// about
/*查看大图*/
var image = new Viewer(document.getElementById('honor_list'), {
	button: true,
	navbar: false,
	width: 660,
	title: true
});
$('.i_partner_list').hover(function(){
	fswiper.autoplay.stop();
},function(){
	fswiper.autoplay.start();
});


//回到顶部
function goTop() {
  $("html,body").animate(
    {
      scrollTop: 0,
    },
    500
  );
}


//弹出表单
window.onload = function(){
  // 设置定时：
  time = window.setInterval("show()",10000);
}
function show(){
  // 获得表单的div元素:
  var adDiv = document.getElementById("pop_form");
  adDiv.style.display = "block";
  window.clearInterval(time);//显示一次后，清空显示的定时设置
  // time = window.setInterval("hide()",5000);//设置隐藏的定时设置
}
// document.getElementById("backForm").addEventListener('click',function(){
//   var adDiv = document.getElementById("pop_form");
//   adDiv.style.display="none";
//   window.clearInterval(time);
// });
$('#form_back').click(function(event){
  var adDiv = document.getElementById("pop_form");
  adDiv.style.display="none";
  window.clearInterval(time);
})

