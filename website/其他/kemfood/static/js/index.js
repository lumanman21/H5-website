var pswiper = new Swiper('.i_tab_list', {
	autoplay: {
		delay: 2000,
		disableOnInteraction: false,
	},
	observer: true,
	observeParents: true,
	breakpoints: {
		0: {
		slidesPerView: 1,
		spaceBetween: 16,
		slidesPerGroup: 1
		},
		375: {
		slidesPerView: 2,
		spaceBetween: 16,
		slidesPerGroup: 1
		},
		769: {
		slidesPerView: 3,
		spaceBetween: 26,
		slidesPerGroup: 1
		},
		961: {
		slidesPerView: 4,
		spaceBetween: 30,
		slidesPerGroup: 1
		},
		1366: {
		slidesPerView: 4,
		spaceBetween: 40,
		slidesPerGroup: 1
		},
	}
});


window.onload = function(){
	//获取所有的li标签
	let lis=document.querySelectorAll(".swiper-wrapper li");
	//获取所有的div-body里面的div标签
	let divs=document.querySelectorAll(".i_tab_show div");
	for(let i = 0; i<lis.length; i++){
		//给每个li标签设置单击事件
		lis[i].addEventListener('click',function(){
			for(let j=0;j<lis.length;j++){
				lis[j].className='';
				divs[j].style="display:none;";
				this.className='hot';
				divs[i].style="display:block;";
		   }
		});
	}
};
$(".i_tab_list li").click(function(){
	$('.i_tab_show').addClass("on");
});
$(".i_tab_close").click(function(){
	$('.i_tab_show').removeClass("on");
});



