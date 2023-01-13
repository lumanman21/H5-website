//rem适配
window.onresize = setHtmlFontSize
window.onload = setHtmlFontSize
function setHtmlFontSize() {
  const htmlWidth = document.documentElement.offsetWidth || window.innerWidth
  const htmlDom = document.documentElement
  htmlDom.style.fontSize = htmlWidth / 120 + "px"
}
setHtmlFontSize()


// 向下滚动网页时头部颜色变深）
if(screen.width > 960){
	$(function(){
		$(window).scroll(function(){
			var scroll_top=$(window).scrollTop();
			if(scroll_top>=300){
				$("header").css("height","var(--head_height_reduce)");
        // $(".logo").css("height","var(--head_height_reduce)");
        $(".top_r").css("height","var(--head_height_reduce)");
        // $("#cd-navigation>li").css("height","var(--head_height_reduce)");
        
			}else{
				$("header").css("height","var(--head_height)");
        // $(".logo").css("height","var(--head_height)");
        $(".top_r").css("height","var(--head_height)");
        // $("#cd-navigation>li").css("height","var(--head_height)");
			}
		})
	});


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
$('.nav-trigger').click(function(){
  if(document.querySelector('#cd-navigation').style.display!=='block'){
    document.querySelector('#cd-navigation').style.display='block'
  }else{
    document.querySelector('#cd-navigation').style.display='none'
  }
})


// 导航栏hovor效果
$(function(){
  $('#cd-navigation>li').hover(function(){
    $(this).children('ul').stop().slideToggle()
  })
})





//回到顶部
function goTop() {
  $("html,body").animate(
    {
      scrollTop: 0,
    },
    500
  );
}
