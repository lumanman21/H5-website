//rem适配
window.onresize = setHtmlFontSize;
window.onload = setHtmlFontSize;

function setHtmlFontSize() {
  const htmlWidth = document.documentElement.offsetWidth || window.innerWidth;
  const htmlDom = document.documentElement;
  htmlDom.style.fontSize = htmlWidth / 120 + 'px';
}
setHtmlFontSize();



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
        
			}else{
				$("header").css("height","var(--head_height)");
        $(".logo").css("height","var(--head_height)");
        $(".top_r").css("height","var(--head_height)");
        $("#cd-navigation>li").css("height","var(--head_height)");
			}
		})
	});
}
$(function(){
	$(window).scroll(function(){
		var scroll_top2=$(window).scrollTop();
		if(scroll_top2>=300){
			$("header").css("border_bottom","#fff");
			$("header").css("background","rgba(118, 197, 240,.8");
		}else{
			$("header").css("border_bottom","#76c5f0");
			$("header").css("background","none");
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

//移动端导航
if(screen.width < 959){
	$(document).ready(function() {
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
	})
}
// if(screen.width < 960){
// 	$(document).ready(function() {
// 		$('.nav_products a').click(function() {
// 			if ($(this).next().is('ul')) {
// 				if ($(this).next('ul').css('display') == 'none') {
// 					$(this).next('ul').slideDown();
// 				} else {
// 					$(this).next('ul').slideUp();
// 					$(this).next('ul').find('ul').slideUp();
// 				}
// 			}
// 		})
// 	});
// 	$('.nav_products .menu-item-has-children>a').attr('href','javascript:;');
// };


// pc端 导航下拉
if(screen.width > 960){	
	$(document).ready(function() {
		$('.nav_products_show').hide();
		$('.nav_products').hover(
		function() {
			$('#nav_be1').stop().slideDown();
		},
		function() {
			$('#nav_be1').stop().slideUp();
		});
		
        $('.i_nav>li:eq(3)').hover(
			function() {
				$('#nav_be2').stop().slideDown();
			},
			function() {
				$('#nav_be2').stop().slideUp();
			});

		$('#nav_be2').hover(
			function() {
				$(this).stop().slideDown();
			},
			function() {
				$(this).stop().slideUp();
			});


		$('#nav_be1').hover(
		function() {
			$('#nav_be1').stop().slideDown();
		},
		function() {
			$('#nav_be1').stop().slideUp();
		});

		$("#nav_be1 .nav_pc_left>ul>li:eq(0)").hover(function(){
			$("#nav_be1 .nav_pc_right>img:eq(0)").css('display','block')
			$("#nav_be1 .nav_pc_right>img:eq(1)").css('display','none')
			
		})
		$("#nav_be1 .nav_pc_left>ul>li:eq(1)").hover(function(){
			$("#nav_be1 .nav_pc_right>img:eq(0)").css('display','none')
			$("#nav_be1 .nav_pc_right>img:eq(1)").css('display','block')
			
		})
		


        $("#nav_be2 .nav_pc_left>ul>li:eq(0)").hover(function(){
			$("#nav_be2 .nav_pc_right>img:eq(0)").css('display','block')
			$("#nav_be2 .nav_pc_right>img:eq(1)").css('display','none')
			$("#nav_be2 .nav_pc_right>img:eq(2)").css('display','none')
		})
		$("#nav_be2 .nav_pc_left>ul>li:eq(1)").hover(function(){
			$("#nav_be2 .nav_pc_right>img:eq(0)").css('display','none')
			$("#nav_be2 .nav_pc_right>img:eq(1)").css('display','block')
			$("#nav_be2 .nav_pc_right>img:eq(2)").css('display','none')
		})
		$("#nav_be2 .nav_pc_left>ul>li:eq(2)").hover(function(){
			$("#nav_be2 .nav_pc_right>img:eq(0)").css('display','none')
			$("#nav_be2 .nav_pc_right>img:eq(1)").css('display','none')
			$("#nav_be2 .nav_pc_right>img:eq(2)").css('display','block')
		})
	});
};





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
  
  
//弹出表单
function asfrom(){
	document.getElementById('pop_form').style.display='block';
}
function asclosescxz(){
	document.getElementById('pop_form').style.display='none';
};
