<?php
/*
Template Name: contact
*/
get_header();?>



<body>
<?php echo xintheme('foot_code');?>

<!-- header -->
<?php get_template_part('top') ?>


<main>
  <div class="top_banner">
    <img src="<?php bloginfo('template_url'); ?>/static/images/c_banner.webp" alt="">
  </div>
  <div class="tit">
    <div class="tit_bc">contact us</div>
    <h1>contact us</h1>
    <!-- in_position -->
    <div class="in_position wrap">
      <div class="container">
      <?php echo in_breadcrumbs(); ?>
      </div>
    </div>
  </div>

  <div class="c_content">
    <div class="c_box wrap">
      <div class="c_form">
        <h3>Leave A Message</h3>
        <p>If you are interested in our products and want to know more details, please leave a message here, we will reply you as soon as we can.</p>
        <?php echo do_shortcode( ' [wpforms id="295"] ' ); ?>
      </div>
      <div class="map"><?php echo do_shortcode( ' [simpleMapNoApi] ' ); ?></div>
    </div>
    <ul class="contact_list wrap">
      <li>
        <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/c_call.png" alt=""></div>
        <h3>CONTACT US</h3>
        <a href="tel:<?php echo xintheme('phone1'); ?>"><?php echo xintheme('phone1'); ?></a>
        <a href="tel:<?php echo xintheme('phone2'); ?>"><?php echo xintheme('phone2'); ?></a>
      </li>
      <li>
        <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/c_email.png" alt=""></div>
        <h3>EMAIL US</h3>
        <p>E-mail：</p>
        <div onclick="asfrom()" class="c_email"><span><?php echo xintheme('email1'); ?></span></div>
      </li>
      <li>
        <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/c_address.png" alt=""></div>
        <h3>ADDRESS</h3>
        <p><?php echo xintheme('address'); ?></p>
      </li>
    </ul>
  </div>
</main>



<!-- footer -->
<?php get_footer();?>


<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>
	
</body>
</html>