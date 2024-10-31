//rem适配
function rem() {
  const htmlDom = document.documentElement;
  const winWidth = htmlDom.clientWidth || document.body.clientWidth;
  const width = winWidth <= 1024 ? 1024 : winWidth;
  //如果屏幕大于1441，1rem=100px
  if (winWidth > 1441) {
    htmlDom.style.fontSize = Math.ceil(100 * (width / 1920)) + "px";
  }
  if (winWidth < 1601) {
    htmlDom.style.fontSize = Math.ceil(110 * (width / 1920)) + "px";
  }
  if (winWidth < 1441) {
    htmlDom.style.fontSize = Math.ceil(120 * (width / 1920)) + "px";
  }
  if (winWidth < 1367) {
    htmlDom.style.fontSize = Math.ceil(130 * (width / 1920)) + "px";
  }
  if (winWidth < 1201) {
    htmlDom.style.fontSize = Math.ceil(140 * (width / 1920)) + "px";
  }
  if (winWidth < 959) {
    htmlDom.style.fontSize = Math.ceil(160 * (width / 1920)) + "px";
  }
  //Math.ceil向上取整
}
rem();
window.onresize = function () {
  rem();
};

// 向下滚动网页时头部颜色变深）
if (screen.width > 960) {
  $(document).ready(function () {
    $(window).scroll(function () {
      var windowScrollTop = $(window).scrollTop();
      if (windowScrollTop >= 300) {
        $("header").addClass("TopHeader");
      } else {
        $("header").removeClass("TopHeader");
      }
    });
  });
}

// 搜索 + 语言
$(".top_search_ico").click(function () {
  event.stopPropagation();
  if ($(".top_search").hasClass("on")) {
    $(".top_search").removeClass("on");
  } else {
    $(".top_search").addClass("on");
  }
});
$(".top_search").click(function (e) {
  event.stopPropagation();
});

$("body").click(function (e) {
  event.stopPropagation();
  $(".top_search").removeClass("on");
});

// 移动端 导航 折叠
if (screen.width < 960) {
  $(".m_open").click(function () {
    $("#cd-navigation").stop().slideDown();
    $(".m_open").hide();
    $(".m_back").show();
  });
  $(".m_back").click(function () {
    $("#cd-navigation").stop().slideUp();
    $(".m_open").show();
    $(".m_back").hide();
  });
}

// if(screen.width > 960){
// 	$(function(){
// 		$('#cd-navigation li').hover(function(){
// 			$(this).children('ul').stop().slideToggle()
// 		})
// 	})
// }
// pc端 导航下拉
if (screen.width > 960) {
  $(document).ready(function () {
    $(".dropnav").hide();
    $("header .more_nav").hover(
      function () {
        $(".dropnav").stop().slideDown();
      },
      function () {
        $(".dropnav").stop().slideUp();
      }
    );

    $(".dropnav").hover(
      function () {
        $(this).stop().slideDown();
      },
      function () {
        $(this).stop().slideUp();
      }
    );
  });
}
// 移动端 导航下拉
if (screen.width < 959) {
  $("#cd-navigation>li").each(function () {
    if ($(this).find("ul").has("li").length > 0) {
      $(this).append("<span></span>");
    }
  });
  $("#cd-navigation>li").each(function () {
    $(this)
      .find("span")
      .click(function () {
        $(this).parent().find("ul").slideToggle(300);
        if ($(this).hasClass("on")) {
          $(this).removeClass("on");
        } else {
          $(this).addClass("on");
        }
      });
  });
}

// 底部友情链接
$(".f_link_btn").click(function (event) {
  event.stopPropagation();
  $(".f_link").toggleClass("curr");
});
$("body").click(function (e) {
  event.stopPropagation();
  $(".f_link").removeClass("curr");
});

//引入wow动画效果
wow = new WOW({
  animateClass: "animated",
  offset: 150,
  mobile: false,
});
wow.init();

$(document).ready(function () {
  var windowScrollTop = $(window).scrollTop();
  if (windowScrollTop >= 1200) {
    $(".back_top").addClass("show");
  } else {
    $(".back_top").removeClass("show");
  }
  $(window).scroll(function () {
    var windowScrollTop = $(window).scrollTop();
    if (windowScrollTop >= 1200) {
      $(".back_top").addClass("show");
    } else {
      $(".back_top").removeClass("show");
    }
  });
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
