<?php

/*

Template Name: About Us

*/

get_header();?>

   

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>





<div class="com_content1">

    <img src="<?php bloginfo('template_url'); ?>/static/images/A_bc.webp" alt="">

</div>

<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

     <?php echo in_breadcrumbs(); ?>

    </div>

</div>



<!-- A_content1 -->

<div class="com_tit1">ABOUT US</div>

<div class="com_tit2">ABOUT <strong>US</strong></div>

<div class="com_line1"></div>

<div class="com_line2"></div>

<div class="introduct_txt wrap">

    <?php the_content(); ?>

</div>

<div class="videoBox wrap">

    <video class="cb1nto6Vid video boxSiz" poster="https://img.bjyyb.net/sites/67000/67265/20220221111834461.png@!w800" controls="">

        <source src="https://vd.bjyyb.net/pt/43000/43230/v/619f3f0918cd2_1920.mp4" type="video/mp4">

    </video>

</div>



<!-- A_content2 -->

<div class="com_tit1">OUR GROUP</div>

<div class="com_tit2">OUR <strong>GROUP</strong></div>

<div class="com_line1"></div>

<div class="com_line2"></div>

<ul class="A_content2 wrap" id="group_list">

    <li><img src="<?php bloginfo('template_url'); ?>/static/images/A_1.webp" alt=""></li>

    <li><img src="<?php bloginfo('template_url'); ?>/static/images/A_2.webp" alt=""></li>

</ul>







<!-- more_group swiper -->

<div class="a1_partner wrap">

    <div class="a1_partner_list swiper-container">

        <ul class="swiper-wrapper" id="group1_list">

            <?php get_template_part( 'template-parts/floor'); ?>

        </ul>				

    </div>

    <div class="a1pt-pagination"></div>

    <div class="a1pt-button-next"></div>

    <div class="a1pt-button-prev"></div>

</div>











<div class="a2_partner wrap">

    <div class="a2_partner_list swiper-container">

        <ul class="swiper-wrapper" id="group2_list">

            <?php get_template_part( 'template-parts/floor_a'); ?>

        </ul>				

    </div>

    <div class="a2pt-pagination"></div>

    <div class="a2pt-button-next"></div>

    <div class="a2pt-button-prev"></div>

</div>











<!-- A_content3 -->

<div class="A_content3">

    <div class="com_tit1">OUR PARTNERS</div>

    <div class="com_tit2">OUR <strong>PARTNERS</strong></div>

    <div class="com_line1"></div>

    <div class="com_line2"></div>





    <!-- partner_swiper -->

    <div class="a_partner wrap">

        <div class="a_partner_list swiper-container">

            <ul class="swiper-wrapper" id="a_partner_list">

                <?php get_template_part( 'template-parts/partner'); ?>

            </ul>				

        </div>

        <div class="apt-pagination"></div>

        <div class="apt-button-next"></div>

        <div class="apt-button-prev"></div>

    </div>







</div>



<!-- A_content4 -->

<div class="A_content4">

    <div class="com_tit1">OUR CERTIFICATION</div>

    <div class="com_tit2">OUR <strong>CERTIFICATION</strong></div>

    <div class="com_line1"></div>

    <div class="com_line2"></div>







    <!-- certification swiper -->

    <div class="a3_partner wrap">

        <div class="a3_partner_list swiper-container">

            <ul class="swiper-wrapper" id="group3_list">

                <?php get_template_part( 'template-parts/certify'); ?>

                

            </ul>				

        </div>

        <div class="a3pt-pagination"></div>

        <div class="a3pt-button-next"></div>

        <div class="a3pt-button-prev"></div>

    </div>







</div>



<!-- A_content5 -->

<div class="A_content5">

  <div class="com_tit1">OUR MARKET DISTRIBUTION</div>

  <div class="com_tit2">OUR MARKET<strong>DISTRIBUTION</strong></div>

  <div class="com_line1"></div>

  <div class="com_line2"></div>

  <div class="img wrap"><img src="<?php bloginfo('template_url'); ?>/static/images/A_5.webp" alt=""></div>

</div>







<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/about.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>







<!-- footer -->

<?php get_footer();?>



</body>

</html>