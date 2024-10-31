// 首页 简介图滚动
var fswiper = new Swiper('.i_factory_list', {
	slidesPerView: 1,
	spaceBetween: 0,
	slidesPerGroup: 1,
	loop: true,
	loopFillGroupWithBlank: true,
	navigation: {
		nextEl: '.factory-button-next',
		prevEl: '.factory-button-prev',
	},
	pagination: {
		el: '.factory-pagination',
		clickable: true,
	},
	autoplay: {
		delay: 3500,
		disableOnInteraction: false,
	},
	observer: true,
	observeParents: true,
});
/*查看大图*/
var image = new Viewer(document.getElementById('factory_list'), {
	button: true,
	navbar: false,
	width: 660,
	title: true
});
$('.i_factory_list').hover(function(){
	fswiper.autoplay.stop();
},function(){
	fswiper.autoplay.start();
});


// 首页 新闻切换展示
$(document).ready(function($){
	$("#tab_tit1").tabso({
		cntSelect:"#tab_cont1",
		tabEvent:"mouseover",
		tabStyle:"fade"
	});
});


// 首页 合作伙伴滚动
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
		slidesPerView: 3,
		spaceBetween: 20,
		slidesPerGroup: 3
		},
		768: {
		slidesPerView: 6,
		spaceBetween: 20,
		slidesPerGroup: 6
		},
		1200: {
		slidesPerView: 6,
		spaceBetween: 30,
		slidesPerGroup: 1
		}
	}
});
$('.i_factory_list').hover(function(){
	pswiper.autoplay.stop();
},function(){
	pswiper.autoplay.start();
});

