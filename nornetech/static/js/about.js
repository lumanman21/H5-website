    //查看大图
    var image = new Viewer(document.getElementById('group_list'), {
    button: true,
    navbar: false,
    width: 800,
    title: true
    });
    var image = new Viewer(document.getElementById('group1_list'), {
    button: true,
    navbar: false,
    width: 800,
    title: true
    });
    var image = new Viewer(document.getElementById('group2_list'), {
    button: true,
    navbar: false,
    width: 800,
    title: true
    });
    var image = new Viewer(document.getElementById('group3_list'), {
    button: true,
    navbar: false,
    width: 800,
    title: true
    });
    var image = new Viewer(document.getElementById('partner_list'), {
    button: true,
    navbar: false,
    width: 660,
    title: true
    });
    //a1_partner_box
    var pswiper = new Swiper('.a1_partner_list', {
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
        slidesPerView: 2,
        spaceBetween: 20,
        slidesPerGroup: 3
        },
        960: {
        slidesPerView: 3,
        spaceBetween: 20,
        slidesPerGroup: 6
        },
        1200: {
        slidesPerView: 3,
        spaceBetween: 20,
        slidesPerGroup: 1
        }
    }
    });
    //partner
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
        slidesPerView: 2,
        spaceBetween: 20,
        slidesPerGroup: 3
        },
        960: {
        slidesPerView: 4,
        spaceBetween: 20,
        slidesPerGroup: 6
        },
        1200: {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 1
        }
    }
    });
    //a2_partner_box
    var pswiper = new Swiper('.a2_partner_list', {
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
        slidesPerView: 2,
        spaceBetween: 20,
        slidesPerGroup: 3
        },
        960: {
        slidesPerView: 5,
        spaceBetween: 20,
        slidesPerGroup: 6
        },
        1200: {
        slidesPerView: 5,
        spaceBetween: 20,
        slidesPerGroup: 1
        }
    }
    });