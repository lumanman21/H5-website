<?php

/*

Template Name: About_video

*/

get_header();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>



<body>

<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>





<div class="com_content1">

    <img src="<?php bloginfo('template_url'); ?>/static/images/About_bc.webp" alt="">

</div>



<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

      <?php echo in_breadcrumbs(); ?>

    </div>

</div>





<ul class="video_content wrap wow slideInUp">

    <?php get_template_part( 'template-parts/video'); ?>

</ul>





<!-- footer -->

<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>



</body>

</html>