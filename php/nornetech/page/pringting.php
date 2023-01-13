<?php

/*

Template Name: pringting

*/

get_header();?>

   

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>





<div class="com_content1">

    <img src="<?php bloginfo('template_url'); ?>/static/images/prit_banner.webp" alt="">

</div>

<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

     <?php echo in_breadcrumbs(); ?>

    </div>

</div>



    <!-- A_content1 -->

<div class="com_tit1">PRINGTING</div>

<div class="com_tit2">PRINGTING <strong></strong></div>

<div class="com_line1"></div>

<div class="com_line2"></div>

<div class="introduct_txt wrap">

    <?php the_content(); ?>

</div>

<div class="videoBox wrap">

    <video class="cl9oefmVid video boxSiz" poster="//hkimg.bjyyb.net/sites/67000/67265/20211125154707569.png@!w800" controls=""><source src="https://vd.bjyyb.net/pt/43000/43230/v/6212f565f03ac_1920.mp4" type="video/mp4">

    </video>

</div>



<div class="print_tit">EQUIPMENT & TECHNOLOGY</div>

<div class="com_line1"></div>

<div class="com_line2"></div>



<!-- equipement swiper -->

<div class="print_partner wrap">

    <div class="print_partner_list swiper-container">

        <ul class="swiper-wrapper" id="print1_list">

            <?php get_template_part( 'template-parts/print'); ?>

            <!-- <li class="swiper-slide">

                <div class="img"><img src="/static/images/swiper/print1.1.webp" alt=""></div>

                <p>Screen printing line</p>

            </li> -->

        </ul>				

    </div>

    <div class="pt-pagination"></div>

    <div class="pt-button-next"></div>

    <div class="pt-button-prev"></div>

</div>



<div class="print_tit">PRINTING EFFECTS</div>

<div class="com_line1"></div>

<div class="com_line2"></div>



<!-- effect swiper -->

<div class="print2_partner wrap">

    <div class="print2_partner_list swiper-container">

        <ul class="swiper-wrapper" id="print2_list">

            <?php get_template_part( 'template-parts/print_effect'); ?>

        </ul>				

    </div>

    <div class="ept-pagination"></div>

    <div class="ept-button-next"></div>

    <div class="ept-button-prev"></div>

</div>



<a href="/" class="com_but print_but">see more</a>







<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>

<script>

//查看大图

var image = new Viewer(document.getElementById('print1_list'), {

    button: true,

    navbar: false,

    width: 800,

    title: true

});

var image = new Viewer(document.getElementById('print2_list'), {

    button: true,

    navbar: false,

    width: 800,

    title: true

});

// equipement swiper

var p1swiper = new Swiper('.print_partner_list', {

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

        slidesPerView: 1,

        spaceBetween: 20,

        slidesPerGroup: 1

        },

        960: {

        slidesPerView: 2,

        spaceBetween: 20,

        slidesPerGroup: 2

        },

        1200: {

        slidesPerView: 2,

        spaceBetween: 20,

        slidesPerGroup: 1

        }

    }

});

// equipement swiper

var p2swiper = new Swiper('.print2_partner_list', {

    loop: true,

    loopFillGroupWithBlank: true,

    navigation: {

        nextEl: '.ept-button-next',

        prevEl: '.ept-button-prev',

    },

    pagination: {

        el: '.ept-pagination',

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

        slidesPerView: 1,

        spaceBetween: 20,

        slidesPerGroup: 1

        },

        560: {

        slidesPerView: 2,

        spaceBetween: 20,

        slidesPerGroup: 2

        },

        1200: {

        slidesPerView: 3,

        spaceBetween: 20,

        slidesPerGroup: 1

        }

    }

});

</script>







<!-- footer -->

<?php get_footer();?>



</body>

</html>