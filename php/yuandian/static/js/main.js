//rem适配
(function flexible(window, document) {
  //flexible.js原代码
  var docEl = document.documentElement;
  var dpr = window.devicePixelRatio1;

  // adjust body font size
  function setBodyFontsize() {
    if (document.body) {
      document.body.style.fontSize = 12 * dpr + "px";
    } else {
      document.addEventListener("DOMContentLoade", setBodyFontsize);
    }
    setBodyFontsize();

    // set 1rem=viewwidth/10
    function setRemUnit() {
      var rem = docEl.clientWidth / 101;
      docEl.style.fontSize = rem + "px";
    }
    setRemUnit();

    // reset rem unit on page resize
    window.addEventListener("resize", setRemUnit);
    window.addEventListener("pageshow", function (e) {
      if (e.persisted) {
        setRemUnit();
      }
    });

    // detect 0.5px supports
    if (dpr >= 2) {
      var fakeBody = document.createElement("body");
      var testElement = documentcreatelement("div");
      testElement.style.border = ".5px solid transparent";
      fakeBody.appendChild(testElement);
      docEl.appendChild(fakeBody);

      if (testElement.offsetHeight === 1) {
        docEl.classList.add("hairlines");
      }
    }
    docEl.removeChild(fakeBody);
  }
  window, document;

  //窗体变化监听
  $(window).resize(function () {
    //查询窗口意度并设管irem的像素值
    var windowwidth = $(window).width() / 101.59; // 设置css
    $(html).css("font-size", windowwidth + "px!important");
  });
});



// 向下滚动网页时头部颜色变深）
if(screen.width > 960){
	$(function(){
		$(window).scroll(function(){
			var scroll_top=$(window).scrollTop();
			if(scroll_top>=300){
				$("header").css("height","var(--head_height_reduce)");
        $(".logo").css("height","var(--head_height_reduce)");
        $(".top_r").css("height","var(--head_height_reduce)");
        $("#cd-navigation>li").css("height","var(--head_height_reduce)");
        $(".top_search").css("top","var(--head_height_reduce)");
        $("#dropli").css("top","30px");

        
			}else{
				$("header").css("height","var(--head_height)");
        $(".logo").css("height","var(--head_height)");
        $(".top_r").css("height","var(--head_height)");
        $("#cd-navigation>li").css("height","var(--head_height)");
        $(".top_search").css("top","var(--head_height)");
        $("#dropli").css("top","40px");
			}
		})
	});


}
$(function(){
	$(window).scroll(function(){
		var scroll_top2=$(window).scrollTop();
		if(scroll_top2>=300){
			$("header").css("background","rgba(255,255,255,1)");
		}else{
			$("header").css("background","rgba(255,255,255,35%)");
		}
	})
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
$('.nav-trigger').click(function(){
  // console.dir(document.querySelector('#cd-navigation'));
  // $('#cd-navigation').css('display','block')
  if(document.querySelector('#cd-navigation').style.display!=='block'){
    document.querySelector('#cd-navigation').style.display='block'

  }else{
    
    document.querySelector('#cd-navigation').style.display='none'
  }
  // if($('#cd-navigation')[0].hidden){
    
  //   $('#cd-navigation')[0].hidden=false
  // }else{
  //   $('#cd-navigation')[0].hidden=true
  // }
})
// $(function () {
//   var nAccordion = function (el, multiple) {
//     this.el = el || {};
//     this.multiple = multiple || false;
//     var links = this.el.find('.n_switch');
//     links.on(
//       'click',
//       {
//         el: this.el,
//         multiple: this.multiple,
//       },
//       this.dropdown
//     );
//   };
//   nAccordion.prototype.dropdown = function (e) {
//     var $el = e.data.el;
//     ($this = $(this)), ($next = $this.next());
//     $next.slideToggle();
//     console.log($this);
//     console.log($this.parent());
//     $this.parent().toggleClass('n_open');
//     if (!e.data.multiple) {
//       $el
//         .find('.n_submenu')
//         .not($next)
//         .slideUp()
//         .parent()
//         .removeClass('n_open');
//     }
//   };
//   var naccordion = new nAccordion($('#cd-navigation'), false);
//   naccordion.dropdown()
// });

// 导航栏hovor效果
$(function(){
  $('#cd-navigation .morenav_li').hover(function(){
    $('#dropli').toggle()
  })
  $('#dropli').hover(function(){
    $(this).css('display','block')
  },function(){
    $(this).css('display','none')
  })
})
// $(function(){
//   $('#cd-navigation .morenav_li').hover(function(){
//     $('#dropli').css('opacity','1')
//   },function(){
//     $('#dropli').css('opacity','0')
//   })
// })





//回到顶部
function goTop() {
  $("html,body").animate(
    {
      scrollTop: 0,
    },
    500
  );
}
