// 首页 产品分类滚动
var pswiper = new Swiper('.i_products_list', {
	loop: true,
	loopFillGroupWithBlank: true,
	pagination: {
		el: '.p-pagination',
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
		slidesPerGroup: 2
		},
		769: {
		slidesPerView: 3,
		spaceBetween: 30,
		slidesPerGroup: 1
		}
	}
});

// 首页 证书滚动
var fswiper = new Swiper('.in_zs_list', {
	pagination: {
		el: '.h-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.h-button-next',
		prevEl: '.h-button-prev',
	},
	autoplay: {
		delay: 400000,
		disableOnInteraction: false,
	},
	centeredSlides: true,
	loop: true,
	observer: true,
	observeParents: true,
	breakpoints: {
		0: {
		slidesPerView: 3,
		spaceBetween: 0,
		slidesPerGroup: 1
		},
		1081: {
		slidesPerView: 5,
		spaceBetween: 0,
		slidesPerGroup: 1
		}
	}
});

