<?php

/*

Template Name: About_honor

*/

get_header();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/animate.min.css" />





<body>
<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>



<div class="a_content1">

    <img src="<?php bloginfo('template_url'); ?>/static/images/A_banner.webp" alt="">

    <p>DEVOTE TO HUMAN HEALTH</p>

    <p>BRING FRAGRANCE INTO THE LIFE</p>

</div>



<div class="A_content1">

    <ul class="about_class wrap">

        <li><a href="<?php echo get_permalink(10); ?>">Company profile</a></li>

        <li><a href="<?php echo get_permalink(14); ?>">Honor</a></li>

        <li><a href="<?php echo get_permalink(12); ?>">Production workshop</a></li>

    </ul>

</div>



<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

      <?php echo in_breadcrumbs(); ?>

    </div>

</div>



<div class="AH_content wrap">

    <p class="ah_tit wow slideInRight">PRODUCT CERTIFICATE</p>

    <!-- honor1 -->

    <div class="i_partner wow slideInRight">

        <div class="i_partner_list swiper-container">

            <ul class="swiper-wrapper" id="honor_list">

                <?php get_template_part( 'template-parts/certify'); ?>

                

                

            </ul>				

        </div>

        <div class="pt-pagination"></div>

        <div class="pt-button-next"></div>

        <div class="pt-button-prev"></div>

        <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

        <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

    </div>

    <p class="ah_tit wow slideInRight">ENTERPRISE CERTFICATE</p>

    <!-- honor2 -->

   <div class="i_partner wow slideInRight">

        <div class="i_partner_list swiper-container">

            <ul class="swiper-wrapper" id="honor2_list">

                <?php get_template_part( 'template-parts/honor'); ?>

                

               

            </ul>				

        </div>

        <div class="pt-pagination"></div>

        <div class="pt-button-next"></div>

        <div class="pt-button-prev"></div>

        <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

        <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

    </div>

</div>







<!-- footer -->

<?php get_footer();?>

<script>

// honor1滚动

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

    // autoplay: {

    //     delay: 3500,

    //     disableOnInteraction: false,

    // },

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



/*查看大图*/

var image = new Viewer(document.getElementById('honor_list'), {

    button: true,

    navbar: false,

    width: 800,

    title: true

});

var image = new Viewer(document.getElementById('honor2_list'), {

    button: true,

    navbar: false,

    width: 800,

    title: true

});



</script>

<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>



</body>

</html>