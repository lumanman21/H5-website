//回到顶部
function goTop() {
    $("html,body").animate(
      {
        scrollTop: 0,
      },
      500
    );
  }


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

