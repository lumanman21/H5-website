<?php
/*
Template Name: About Us
*/
get_header();?>


<body>
<?php echo xintheme('foot_code');?>


<!-- header -->
<?php get_template_part('top') ?>

<main>
  <div class="top_banner">
    <img src="<?php bloginfo('template_url'); ?>/static/images/a_banner.webp" alt="">
  </div>
  <div class="tit">
    <div class="tit_bc">about us</div>
    <h1>about us</h1>
    <!-- in_position -->
    <div class="in_position wrap">
      <div class="container">
        <?php echo in_breadcrumbs(); ?>
      </div>
    </div>
  </div>
  <div class="a_content wrap">
    <div class="left_txt">
      <img src="<?php bloginfo('template_url'); ?>/static/images/a_logo.webp" alt="">
      <h2>Hefei Top Max Imp.&Exp. Co.,Ltd</h2>
      <div class="text">
        <?php the_content(); ?>
      </div>
    </div>
    <div class="right_img"><img src="<?php bloginfo('template_url'); ?>/static/images/a_1.webp" alt=""></div>
  </div>
  <div class="tit">
    <div class="tit_bc">CERTIFICATE</div>
    <h1>CERTIFICATE</h1>
  </div>
  <div class="certify_list">
    <div class="certify_listbox wrap">
      <?php get_template_part( 'template-parts/certify'); ?>
    </div>
  </div>



</main>





<!-- footer -->
<?php get_footer();?>


<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>


</body>
</html>