<?php

/*

Template Name: About_workshop

*/

get_header();?>



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



<div class="a_tit">

    <p>HE LEADING MANUFACTURER OF MENTHOL</p> 

    <p>& ALLIED  PRODUCTS IN CHINA</p>

</div>

<p class="a_futit">targets to be the world class manufacturer of cooling agent & essence </p>

<ul class="AW_content1 wrap">

    <li><img src="<?php bloginfo('template_url'); ?>/static/images/AW_1.webp" alt=""><p>QUALITY</p></li>

    <li><img src="<?php bloginfo('template_url'); ?>/static/images/AW_2.webp" alt=""><p>INNOVATION</p></li>

    <li><img src="<?php bloginfo('template_url'); ?>/static/images/AW_3.webp" alt=""><p>VALUE</p></li>

    <li><img src="<?php bloginfo('template_url'); ?>/static/images/AW_4.webp" alt=""><p>RESPONSIBILITY</p></li>

</ul>



<div class="H_slogan A_slogan">

    <img src="<?php bloginfo('template_url'); ?>/static/images/AW_banner.webp" alt="">

    <h1 class="wow slideInLeft">DEVOTE IN HUMAN HEALTH</h1>

    <h2 class="wow slideInLeft">BRING FRAGRANCE INTO THE LIFE</h2>

</div>



<div class="AW_content2 wrap wow slideInRight">

    <p class="ah_tit">NATURAL MINT WORKSHOP</p>

    <p class="txt">The construction area is 5,000 square meters and the annual production capacity is 3,000 tons.</p>

    <p class="txt">Set up one production line for medicine menthol and food menthol, and one production line for peppermint oil, piperita oil, and spearmint oil.</p>

    <p class="txt">The pharmaceutical menthol production line has passed the US FDA and China GMP certification.</p>

    <p class="txt">Products meet the requirements of CP, BP, USP and FCC standards.</p>

    <p class="txt">The workshop was rated as "Five-star team of industrial enterprises in Hefei".</p>

    <p class="ah_tit">SYNTHETIC PERFUME WORKSHOP</p>

    <p class="txt">The building area is 700 square meters, and the annual production capacity of synthetic cooling agent is 100 tons.</p>

    <p class="txt">The design and construction of the production line conform to food safety requirements, and the production environment conforms to international standards.</p>

</div>



<!-- footer -->

<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>



</body>

</html>