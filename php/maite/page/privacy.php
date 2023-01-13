<?php

/*

Template Name: privacy

*/

get_header();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>

<body>


<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>





<!-- in_position -->

<div class="in_position privacy_position">

    <div class="wrap container">

      <?php echo in_breadcrumbs(); ?>

    </div>

</div>



<!-- 内容 vision-->

<div class="privacy wrap">

    <div class="privacy_cont wrap box_mg">

        <div class="tit"><h2>Privacy Policy</h2></div>

        <article>

            <?php the_content(); ?>

        </article>

    </div>

</div>



<!-- footer -->

<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>

	

</body>

</html>