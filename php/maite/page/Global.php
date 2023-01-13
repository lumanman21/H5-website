<?php

/*

Template Name: Global

*/

get_header();?>



<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/animate.min.css" />

  

  <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>

  <script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>

  <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

<body>

<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>



<div class="com_content1">

    <img src="<?php bloginfo('template_url'); ?>/static/images/Global_bc.png" alt="">

</div>

<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

      <?php echo in_breadcrumbs(); ?>

    </div>

</div>

    

<div class="G_content1 wow slideInUp">

    <p class="com_tit tit">MASCOTOP SERVICE ASSURANCE</p>

    <ul class="route_container wrap">

        <li>

            <div class="img_bored"><div class="route_img"><img src="<?php bloginfo('template_url'); ?>/static/images/G_1.png" alt=""></div></div>

            <p class="route_txt">Professional design and service team, inquiry and consulting support, free samples.</p>

        </li>

        <li>

            <div class="img_bored"><div class="route_img"><img src="<?php bloginfo('template_url'); ?>/static/images/G_2.png" alt=""></div></div>

            <p class="route_txt">Strong professional marketing and logistics support team.</p>

        </li>

        <li>

            <div class="img_bored"><div class="route_img"><img src="<?php bloginfo('template_url'); ?>/static/images/G_3.png" alt=""></div></div>

            <p class="route_txt">Healthy financial ecology, stable vendor cooperation. </p>

        </li>

        <li>

            <div class="img_bored"><div class="route_img"><img src="<?php bloginfo('template_url'); ?>/static/images/G_4.png" alt=""></div></div>

            <p class="route_txt">The company adheres to the goal of meeting customer needs.</p>

        </li>

    </ul>

</div>



<div class="G_content2 wow slideInUp">

    <div class="kong_box"></div>

    <div class="reason_box">

        <p class="line1">WHY Mascotop?</p>

        <ul class="line2">

            <li><img src="<?php bloginfo('template_url'); ?>/static/images/ico_diamond.png" alt=""><p>Reliable business partner</p></li>

            <li><img src="<?php bloginfo('template_url'); ?>/static/images/media/diqiu.svg" alt=""><p>Goods manufactured in China</p></li>

            <li><img src="<?php bloginfo('template_url'); ?>/static/images/media/shezhi.svg" alt=""><p>Top quality service</p></li>

            <li><img src="<?php bloginfo('template_url'); ?>/static/images/media/kefu.svg" alt=""><p>Warranty service</p></li>

            <li><img src="<?php bloginfo('template_url'); ?>/static/images/ico_diamond.png" alt=""><p>Marketing support</p></li>

            <li><img src="<?php bloginfo('template_url'); ?>/static/images/media/liwu.svg" alt=""><p>Exquisite gifts</p></li>

        </ul>

        <div class="line3">

            <div class="line3_left">

                <div class="tit"><img src="<?php bloginfo('template_url'); ?>/static/images/media/rongyu.svg" alt=""><p>STABLE COOPERATION</p></div>

                <p class="txt">By choosing to cooperate with Mascotop, you can be reassured that your customers will receive the highest quality goods on time. We guarantee express delivery times for ordered products. We offer help at the designing and shipping stage. In addition, you will receive from us tools to support sales and promotion.</p>

            </div>

            <div class="line3_right">

                <div class="tit"><img src="<?php bloginfo('template_url'); ?>/static/images/media/rongyu.svg" alt=""><p>START SELLING IN A FEW DAYS</p></div>

                <p class="txt">Each cooperation package includes a set of appropriate tools to support sales and promotion. This means that as part of the cooperation, we will help you find clients. All you have to do is to distribute the products you have purchased from us.</p>

            </div>

        </div>

    </div>

</div>





<div class="G_content3 wow slideInUp">

    <p class="com_tit tit">SINCERELY INVITE GLOBAL BRAND AGENTS</p>



    <!-- agent -->

    <div class="g_partner_box wrap wow slideInUp">

        <div class="g_partner">

            <div class="g_partner_list swiper-container">

                <ul class="swiper-wrapper">

                

                    <?php get_template_part( 'template-parts/agent'); ?>

                    

                </ul>				

            </div>

            <div class="pt-pagination"></div>

            <div class="pt-button-next"></div>

            <div class="pt-button-prev"></div>

        </div>

    </div>
    <div class="g2_partner_box wrap wow slideInUp">
        <div class="g2_partner">
            <div class="g2_partner_list swiper-container">
                <ul class="swiper-wrapper">
                
                    <?php get_template_part( 'template-parts/agent2'); ?>   

                </ul>				

            </div>
            <div class="pt2-pagination"></div>
            <div class="pt2-button-next"></div>
            <div class="pt2-button-prev"></div>

        </div>

    </div>

</div>

<script>

 // about honor滚动

    var pswiper = new Swiper('.g_partner_list', {

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
    var p2swiper = new Swiper('.g2_partner_list', {

        loop: true,

        loopFillGroupWithBlank: true,

        navigation: {

            nextEl: '.pt2-button-next',

            prevEl: '.pt2-button-prev',

        },

        pagination: {

            el: '.pt2-pagination',

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

</script>

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>
<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

<!-- ···form···· -->

<div class="PD_form wow slideInUp">

    <p class="tit">LEAVE A MESSAGE</p>

    <img src="<?php bloginfo('template_url'); ?>/static/images/bc_form.webp" alt="">

    <p class="futit">

        If you are interested in our products and want to know more detail, please leave a message here, we will reply you as soon as we can. 

    </p>

    <div class="G_form">

        <?php echo do_shortcode( ' [wpforms id="71"] ' ); ?>

    </div>

</div>





<!-- footer -->

<?php get_footer();?>

	

<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>

<script>

  //引入wow动画效果

  wow = new WOW({

    animateClass: 'animated',

    offset: 100,

    mobile: false,

  });

  wow.init();

</script>



</body>

</html>