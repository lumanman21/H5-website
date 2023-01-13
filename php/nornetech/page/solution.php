<?php

/*

Template Name: solution

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

      <li><a href="<?php echo get_permalink(21); ?>">Manufacture</a></li>

      <li><a href="<?php echo get_permalink(23); ?>">Shipping</a></li>

  </ul>



  <div class="S_tit1">INTEGRATED SERVICES</div>

  <div class="S_tit2">INTEGRATED SERVICES</div>

  <div class="com_line1"></div>

  <div class="com_line2"></div>

  <p class="S_futit">We not only provide products, but also provide integrated services from development to production, delivery and after-sales.</p>



  <ul class="menu_list">

      <li><a href="<?php echo get_permalink(19); ?>">

          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/S_1.webp" alt=""></div>

          <p class="txt">Development</p>

      </a></li>

      <li><a href="<?php echo get_permalink(21); ?>">

          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/S_2.webp" alt=""></div>

          <p class="txt">Manufacture</p>

      </a></li>

      <li><a href="<?php echo get_permalink(23); ?>">

          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/S_3.webp" alt=""></div>

          <p class="txt">Shipping</p>

      </a></li>

  </ul>

</div>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>







<!-- footer -->

<?php get_footer();?>



	

	

</body>

</html>