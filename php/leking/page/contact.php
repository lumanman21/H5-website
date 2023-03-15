<?php
/*
Template Name: contact us
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="top_banner delta_b">
  <img src="<?php bloginfo('template_url'); ?>/static/images/c_banner.webp" alt="">
  <div class="txt">
    <h4 class="wow slideInUp">We are always waiting for you</h4>
    <p class="wow slideInUp" data-wow-delay=".3s">9:00-18:00 from Monday to Saturday</p>
    <div class="img wow slideInUp" data-wow-delay=".4s"><img src="<?php bloginfo('template_url'); ?>/static/images/c_banner_ico.png" alt=""></div>
    <h5 class="wow slideInUp" data-wow-delay=".5s"><a class="stress_f" href="tel:<?php echo xintheme('tel'); ?>"><?php echo xintheme('tel'); ?></a></h5>
  </div>
</div>

<main>
<div class="c_form_box wow slideInUp">
  <div class="circle_bc"></div>
  <p class="i_com_tit">SEND YOUR MESSAGE</p>
  <p class="txt">service@careair.com.cn</p>
  <div class="c_form wrap">
    <div class="circle_bc"></div>
    <?php echo do_shortcode( '[wpforms id="32"]' ); ?>
  </div>
  <ul class="contact_list wrap wow slideInUp">
    <li>
      <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/c_tell.png" alt=""></div>
      <div class="text">
        <a href="tel:<?php echo xintheme('tel'); ?>"><?php echo xintheme('tel'); ?></a>
        <p class="on">tel</p>
      </div>
    </li>
    <li>
      <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/c_address.png" alt=""></div>
      <div class="text">
        <p><?php echo xintheme('address'); ?></p>
        <p class="on">Address</p>
      </div>
    </li>
    <li>
      <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/c_mail.png" alt=""></div>
      <div class="text">
        <p><?php echo xintheme('email'); ?></p>
        <p class="on">mail</p>
      </div>
    </li>
  </ul>
</div>

<div class="map delta_t">
  <?php echo do_shortcode( '[simpleMapNoApi]' ); ?>
</div>

</main>



<?php get_footer(); ?>


</body>
</html>