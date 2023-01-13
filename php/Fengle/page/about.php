<?php

/*

Template Name: About Us

*/

get_header();?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/animate.min.css" />

    

    <script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>



   

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



<p class="a_tit">ANHUI FENGLE PERFUME CO., LTD.</p>

<div class="a_liner"></div>

<div class="a_introduce wrap wow slideInLeft">

    <?php the_content(); ?>

</div>



<div class="H_slogan A_slogan">

    <img src="<?php bloginfo('template_url'); ?>/static/images/A_banner2.webp" alt="">

    <h1 class="wow slideInLeft">OUR CUSTOMERS</h1>

    <h2 class="wow slideInLeft">ARE ALL OVER THE WORLD</h2>

</div>

<div class="A_mapcontent wrap">

    <img src="<?php bloginfo('template_url'); ?>/static/images/A_banner3.webp" alt="">

    <p class="txt1 wow slideInLeft">Has stable customer group and sales network covers <span>30</span> countries & areas around the world. Establish good cooperation relationship with international & domestic well-known daily-use, food & pharmaceutical enterprises like Berje, O'real, Unilever, Kraft, Narcissus Pharmaceutical, Koshiro Company Ltd., Baiyunshan pharmaceutical. The only enterprise in the industry passes ISO9001 quality management system, ISO22000 food safety management system, ISO14001, OHSAS18001, U.S. <span>FDA</span> certification, GMP certification, <span>CGMP, HALAL, AAAA</span> standardization good behavior confirmation and other systems certification at the same time.</p>

    <p class="tit wow slideInLeft">Devote to human health.</p>

    <p class="tit wow slideInLeft">Bring fragrance into life</p>

    <p class="text wow slideInLeft">

    Mints products annual production capacity is <span>3000</span> tons Synthetic cooling agent products annual production capacity is <span>100</span> tons. Identified as Anhui province enterprise technology center, Anhui province spice <span>engineering technology research center</span>. Established extensive scientific cooperation relationship with domestic <span>first-class</span> research institutes. Chaired or participated in <span>18</span> national standards and industry standards’ establishment. Has <span>10</span> authorized invention patents.

    </p>

</div>











<!-- footer -->

<?php get_footer();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>





</body>

</html>