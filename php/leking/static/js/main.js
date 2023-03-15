//rem适配
function rem() {
	const htmlDom = document.documentElement;
	const winWidth = htmlDom.clientWidth || document.body.clientWidth;
	const width = winWidth <= 1024 ? 1024 : winWidth;
	//如果屏幕大于1441，1rem=100px
	if(winWidth > 1441){htmlDom.style.fontSize = Math.ceil(100 * (width / 1920)) + 'px';}
	if(winWidth < 1601){htmlDom.style.fontSize = Math.ceil(110 * (width / 1920)) + 'px';}
	if(winWidth < 1441){htmlDom.style.fontSize = Math.ceil(120 * (width / 1920)) + 'px';}
	if(winWidth < 1367){htmlDom.style.fontSize = Math.ceil(130 * (width / 1920)) + 'px';}
	if(winWidth < 1201){htmlDom.style.fontSize = Math.ceil(140 * (width / 1920)) + 'px';}
	//Math.ceil向上取整
};
rem();
window.onresize = function() {
	rem();
}




// 向下滚动网页时头部颜色变深）
if(screen.width > 960){
	$(function(){
		$(window).scroll(function(){
			var scroll_top=$(window).scrollTop();
			if(scroll_top>=150){
				$("header").css("height","var(--head_height_reduce)");
				$(".logo").css("height","var(--head_height_reduce)");
				$(".top_r").css("height","var(--head_height_reduce)");
				$("#cd-navigation>li").css("height","var(--head_height_reduce)");
				$(".dropnav_box").css("top","var(--head_height_reduce)");
        
			}else{
				$("header").css("height","var(--head_height)");
				$(".logo").css("height","var(--head_height)");
				$(".top_r").css("height","var(--head_height)");
				$("#cd-navigation>li").css("height","var(--head_height)");
				$(".dropnav_box").css("top","var(--head_height)");
			}
		})
	});


}
$(function(){
	$(window).scroll(function(){
		var scroll_top2=$(window).scrollTop();
		if(scroll_top2>=150){
			$("header").css("background","rgba(0,0,0,.5)");
		}else{
			$("header").css("background","rgba(0,0,0,0)");
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




// pc端 导航下拉
// if(screen.width > 960){	
// 	$(document).ready(function() {
// 		$('.dropnav').hide();
// 		$('header .nav_products').hover(
// 			function() {
// 				$('.dropnav').css('display','flex')
// 			},
// 			function() {
// 				$('.dropnav').hide()
// 		});
// 		$('.dropnav').hover(
// 			function() {
// 				$(this).css('display','flex')
// 			},
// 			function() {
// 				$(this).hide()
// 		});
// 	})
// };

if(screen.width > 960){	
	$(document).ready(function() {
		$('.dropnav_box').hide();
		$('header .nav_products').hover(
			function() {
				$('#dropnav_box').stop().slideDown();
			},
			function() {
				$('#dropnav_box').stop().slideUp();
		});

		$('#dropnav_box').hover(
			function() {
				$(this).stop().slideDown();
			},
			function() {
				$(this).stop().slideUp();
		});
	})
};




// 移动端 导航 折叠
if(screen.width < 960){
	$('.m_open').click(function(){
		$('#cd-navigation').show()
		$('.m_open').hide()
		$('.m_back').show()
	})
	$('.m_back').click(function(){
		$('#cd-navigation').hide()
		$('.m_open').show()
		$('.m_back').hide()
	})
}

if(screen.width < 959){

	$('#cd-navigation>li').each(function() {
		if($(this).find("ul").has('li').length>0){
			$(this).append("<span></span>");
		};

	});
	$('#cd-navigation>li').each(function() {
		$(this).find("span").click(function () {
			$(this).parent().find("ul").slideToggle(300);
			if($(this).hasClass("on")){
				$(this).removeClass("on") ;
			}else{
				$(this).addClass("on") ;
			}
		});
	});
}


 //引入wow动画效果
wow = new WOW({
    animateClass: 'animated',
    offset: 150,
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

function asfrom(){
    document.getElementById('aside_sc_from').style.display='block';
    document.getElementById('aside_mask_bg').style.display='block'
}
function asclosescxz(){
	document.getElementById('aside_sc_from').style.display='none';
	document.getElementById('aside_mask_bg').style.display='none'
};


function vHide(){
	$('.pop_video').css('display','none')
}
function vShow(){
    $('.pop_video').css('display','block')
}
