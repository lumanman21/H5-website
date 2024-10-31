// 首页 合作伙伴滚动
var pswiper = new Swiper('.i_partner_list', {
	navigation: {
		nextEl: '.pt-button-next',
		prevEl: '.pt-button-prev',
	},
	pagination: {
		el: '.pt-pagination',
		clickable: true,
	},
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
	roundLengths: true, 
	observer: true,
	observeParents: true,
	breakpoints: {
		0: {
		slidesPerView: 2,
		spaceBetween: 16,
		slidesPerGroup: 2
		},
		375: {
		slidesPerView: 4,
		spaceBetween: 10,
		slidesPerGroup: 4
		},
		1201: {
		slidesPerView: 6,
		spaceBetween: 30,
		slidesPerGroup: 1
		}
	}
});


// 首页 切换功能
$("#i_choice_nav").tabso({
	cntSelect:"#i_choice_cont",
	tabEvent:"mouseover",
	tabStyle:"normal"
});
$("#i_match_nav").tabso({
	cntSelect:"#i_match_cont",
	tabEvent:"mouseover",
	tabStyle:"normal"
});

