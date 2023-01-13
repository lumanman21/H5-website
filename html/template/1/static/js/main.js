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

// 导航栏hovor效果
$(function(){
  $('#cd-navigation li').hover(function(){
    $(this).children('dl').stop().slideToggle()
  })
})


 //引入wow动画效果
wow = new WOW({
  animateClass: 'animated',
  offset: 120,
  mobile: false,
});
wow.init();



//回到顶部
function goTop() {
  $("html,body").animate(
    {
      scrollTop: 0,
    },
    500
  );
}
