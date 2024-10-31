var swiper1_1 = new Swiper(".thumbnail_list1", {
	spaceBetween: '2%',
	slidesPerView: 6,
	//loop: true,
	watchSlidesProgress: true,
	autoplay: {
		delay: 5000,
		pauseOnMouseEnter:true,
		disableOnInteraction: false,
	},
	roundLengths: true,
	observer: true,
	observeParents: true,
});
var swiper1_2 = new Swiper(".atlas_list1", {
	slidesPerView: 1,
	spaceBetween: 0,
	slidesPerGroup: 1,
	effect: "fade",
	centeredSlides: true,
	pagination: {
		el: ".thumbnail-pagination1",
		type: "fraction",
	},
	//loop: true,
	navigation: {
		nextEl: ".thumbnail-next1",
		prevEl: ".thumbnail-prev1",
	},
	thumbs: {
		swiper: swiper1_1,
	},
	observer: true,
	observeParents: true,
});
/*View Pic*/
var image = new Viewer(document.getElementById('atlas_list1'), {
	button: true,
	navbar: false,
	width: 660,
	title: false
});

var swiper2_1 = new Swiper(".thumbnail_list2", {
	spaceBetween: '2%',
	slidesPerView: 6,
	//loop: true,
	watchSlidesProgress: true,
	autoplay: {
		delay: 5000,
		pauseOnMouseEnter:true,
		disableOnInteraction: false,
	},
	roundLengths: true,
	observer: true,
	observeParents: true,
});
var swiper2_2 = new Swiper(".atlas_list2", {
	slidesPerView: 1,
	spaceBetween: 0,
	slidesPerGroup: 1,
	effect: "fade",
	centeredSlides: true,
	pagination: {
		el: ".thumbnail-pagination2",
		type: "fraction",
	},
	//loop: true,
	navigation: {
		nextEl: ".thumbnail-next2",
		prevEl: ".thumbnail-prev2",
	},
	thumbs: {
		swiper: swiper2_1,
	},
	observer: true,
	observeParents: true,
});
/*View Pic*/
var image = new Viewer(document.getElementById('atlas_list2'), {
	button: true,
	navbar: false,
	width: 660,
	title: false
});

var swiper3_1 = new Swiper(".thumbnail_list3", {
	spaceBetween: '2%',
	slidesPerView: 6,
	//loop: true,
	watchSlidesProgress: true,
	autoplay: {
		delay: 5000,
		pauseOnMouseEnter:true,
		disableOnInteraction: false,
	},
	roundLengths: true,
	observer: true,
	observeParents: true,
});
var swiper3_2 = new Swiper(".atlas_list3", {
	slidesPerView: 1,
	spaceBetween: 0,
	slidesPerGroup: 1,
	effect: "fade",
	centeredSlides: true,
	pagination: {
		el: ".thumbnail-pagination3",
		type: "fraction",
	},
	//loop: true,
	navigation: {
		nextEl: ".thumbnail-next3",
		prevEl: ".thumbnail-prev3",
	},
	thumbs: {
		swiper: swiper3_1,
	},
	observer: true,
	observeParents: true,
});
/*View Pic*/
var image = new Viewer(document.getElementById('atlas_list3'), {
	button: true,
	navbar: false,
	width: 660,
	title: false
});

var swiper4_1 = new Swiper(".thumbnail_list4", {
	spaceBetween: '2%',
	slidesPerView: 6,
	//loop: true,
	watchSlidesProgress: true,
	autoplay: {
		delay: 5000,
		pauseOnMouseEnter:true,
		disableOnInteraction: false,
	},
	roundLengths: true,
	observer: true,
	observeParents: true,
});
var swiper4_2 = new Swiper(".atlas_list4", {
	slidesPerView: 1,
	spaceBetween: 0,
	slidesPerGroup: 1,
	effect: "fade",
	centeredSlides: true,
	pagination: {
		el: ".thumbnail-pagination4",
		type: "fraction",
	},
	//loop: true,
	navigation: {
		nextEl: ".thumbnail-next4",
		prevEl: ".thumbnail-prev4",
	},
	thumbs: {
		swiper: swiper4_1,
	},
	observer: true,
	observeParents: true,
});
/*View Pic*/
var image = new Viewer(document.getElementById('atlas_list4'), {
	button: true,
	navbar: false,
	width: 660,
	title: false
});