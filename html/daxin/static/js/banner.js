//banner
var swiper = new Swiper(".i_banner_list", {
    slidesPerView: 1,
    spaceBetween: 0,
    slidesPerGroup: 1,
    // autoplay: {
    //   delay: 3500,
    //   disableOnInteraction: false,
    // },
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".banner-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".banner-button-next",
      prevEl: ".banner-button-prev",
    },
    observer: true,
    observeParents: true,
  });
// type_a
var pswiper = new Swiper('.type_a_list', {
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
        nextEl: 'type_a .pt-button-next',
        prevEl: 'type_a .pt-button-prev',
    },
    pagination: {
        el: 'type_a .pt-pagination',
        clickable: true,
    },
    // autoplay: {
    //     delay: 2000,
    //     disableOnInteraction: false,
    // },
    observer: true,
    observeParents: true,
    spaceBetween: 20,
    slidesPerGroup: 1,
  });

// type_b
var pswiper = new Swiper('.type_b_list', {
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
        nextEl: 'type_b .pt-button-next',
        prevEl: 'type_b .pt-button-prev',
    },
    pagination: {
        el: 'type_b .pt-pagination',
        clickable: true,
    },
    // autoplay: {
    //     delay: 2000,
    //     disableOnInteraction: false,
    // },
    observer: true,
    observeParents: true,
    slidesPerView: 1,
    spaceBetween: 20,
    slidesPerGroup: 1,
});

//type_c
var pswiper = new Swiper('.type_c_list', {
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
        nextEl: 'type_c .pt-button-next',
        prevEl: 'type_c .pt-button-prev',
    },
    pagination: {
        el: 'type_c .pt-pagination',
        clickable: true,
    },
    // autoplay: {
    //     delay: 2000,
    //     disableOnInteraction: false,
    // },
    observer: true,
    observeParents: true,
    slidesPerView: 1,
    spaceBetween: 20,
    slidesPerGroup: 1,
  });

