var width = $(window).width();

// $(".i_banner .swiper-slide").each(function(){
//     if($(this).has('video').length){
//         var src=$(this).find('video').attr('data-src');
//         $(this).find('video').attr('src',src);
//     }
// });

// 获取第一个视频时长
$(".i_banner .swiper-slide").each(function () {
  if ($(this).has("video").length) {
    $(this).attr("id", "b_has_v");
    $(this).find("video").attr("id", "video");
    return false;
  }
});

// 移动端去除视频
if (width < 960) {
  var off = document.getElementById("b_has_v");
  off.remove();
}

var audioE2 = document.getElementById("video");
// 如果swiper有视频
if (audioE2) {
  // 上传了视频,等待视频加载完
  audioE2.onloadedmetadata = function () {
    var tol = audioE2.duration;
    // tol=tol*1000;
    var banner_swiper = new Swiper(".i_banner .swiper-container", {
      speed: 600,
      loop: true,
      autoplay:false,
      autoplay: {
      	delay: 4000,
      	stopOnLastSlide: false,
      	disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".i_banner .swiper-button-next",
        prevEl: ".i_banner .swiper-button-prev",
      },
      pagination: {
        el: ".i_banner .swiper-pagination",
        clickable: true,
      },
      on: {
        init: function () {
          $(".i_banner .swiper-slide")
            .eq(this.activeIndex)
            .find(".text")
            .addClass("active");
          swiperAnimateCache(this); //隐藏动画元素
          swiperAnimate(this); //初始化完成开始动画
        },
        slideChangeTransitionEnd: function () {
          swiperAnimate(this); //每个slide切换结束时也运行当前slide动画
          // this.slides.eq(this.activeIndex).find('.ani').removeClass('ani');  //动画只展现一次，去除ani类名
        },
        slideChangeTransitionStart: function () {
          $(".i_banner .swiper-slide")
            .find(".text")
            .removeClass("active")
            .eq(this.activeIndex)
            .addClass("active")
            .siblings();
          var _target = this;
          var curVideo = this.$el.find(".swiper-slide-active").find("video");
          // tol=curVideo.duration;
          //暂停所有视频
          function pauseAll(ele) {
            ele.find("video").each(function () {
              $(this)[0].pause();
            });
          }
          pauseAll(this.$el);
          //轮播间隔时间
          console.log(tol);
          _target.params.autoplay.delay = tol * 1000;
          //判断当前激活元素是否有视频
          if (curVideo.length > 0) {
            console.log("有视频！");
            this.autoplay.stop();
            curVideo[0].currentTime = 0;
            curVideo[0].play();
            curVideo[0].removeEventListener("ended", function () {}, false);
            curVideo[0].addEventListener(
              "ended",
              function () {
                if ($(".i_banner .sign").hasClass("active")) {
                  // 此时是暂停状态
                } else {
                  _target.slideNext();
                }
              },
              false
            );
          } else {
            console.log("无视频！");
            _target.params.autoplay.delay = 4000;
            _target.autoplay.start();
            $(".i_banner .sign").removeClass("active");
            flag = true;
          }
        },
      },
    });
  };
} else {
  // 没上传视频
  var banner_swiper = new Swiper(".i_banner .swiper-container", {
    speed: 600,
    loop: true,
    autoplay:false,
    autoplay: {
    	delay: 4000,
    	stopOnLastSlide: false,
    	disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".i_banner .swiper-button-next",
      prevEl: ".i_banner .swiper-button-prev",
    },
    pagination: {
      el: ".i_banner .swiper-pagination",
      clickable: true,
    },
    on: {
      init: function () {
        $(".i_banner .swiper-slide")
          .eq(this.activeIndex)
          .find(".text")
          .addClass("active");
        swiperAnimateCache(this); //隐藏动画元素
        swiperAnimate(this); //初始化完成开始动画
      },
      slideChangeTransitionEnd: function () {
        swiperAnimate(this); //每个slide切换结束时也运行当前slide动画
        // this.slides.eq(this.activeIndex).find('.ani').removeClass('ani');  //动画只展现一次，去除ani类名
      },
      slideChangeTransitionStart: function () {
        $(".i_banner .swiper-slide")
          .find(".text")
          .removeClass("active")
          .eq(this.activeIndex)
          .addClass("active")
          .siblings();
      },
    },
  });
}

