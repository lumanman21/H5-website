<?php

/*

Template Name: solution_M

*/

get_header();?>



<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>



<div class="com_content1">

    <img src="<?php bloginfo('template_url'); ?>/static/images/s_banner.webp" alt="">

</div>



<div class="S_container wrap">

    <!-- in_position -->

    <div class="in_position">

        <div class="wrap container">

        <?php echo in_breadcrumbs(); ?>

        </div>

    </div>

    <ul class="title_list">

      <li><a href="<?php echo get_permalink(19); ?>">Development</a></li>

      <li style="background-color: var(--i_color);"><a style="color: #fff; href="<?php echo get_permalink(21); ?>">Manufacture</a></li>

      <li><a href="<?php echo get_permalink(23); ?>">Shipping</a></li>

    </ul>



    <ul class="submenu_list">

        <?php get_template_part( 'template-parts/solution_ma'); ?>

    </ul>

</div>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>







<!-- footer -->

<?php get_footer();?>



	

	

</body>

</html>