<?php
/*
Template Name: contact
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
  <div class="img">
    <img src="<?php bloginfo('template_url'); ?>/static/images/banner_c.webp" />
  </div>
  <div class="wrap">
    <h2>Contact us</h2>
  </div>
</div>
<div class="in_position">
  <div class="wrap container">
    <?php echo in_breadcrumbs(); ?>
  </div>
</div>

<main>
  <div class="c_box wrap m80">
    <div class="img wow slideInLeft">
      <img src="<?php bloginfo('template_url'); ?>/static/images/c_form_pic.webp" alt="">
      <div class="txt">
        <h6>FEEL FREE TO CONTACT 
          cooperate with us!</h6>
        <p>
          If you are interested in our products and want to know more details, please contact us or leave messace here.
        </p>
      </div>
    </div>
    <div class="c_form wow slideInRight">
      <img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
      <h5>xiangjue CONSTRUCTION MACHINERY</h5>
      <?php echo do_shortcode( '[wpforms id="53"]' ); ?>
    </div>
  </div>

  <section class="c_info p80">
    <ul class="wrap">
      <li class="wow slideInUp">
        <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/c_mail.png" alt=""></div>
        <div class="txt">
          <h6>EMAIL ADDRESS</h6>
          <a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
        </div>
      </li>
      <li class="wow slideInUp" data-wow-delay=".1s">
        <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/c_call.png" alt=""></div>
        <div class="txt">
          <h6>PHONE NUMBERS</h6>
          <a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
        </div>
      </li>
      <li class="wow slideInUp" data-wow-delay=".2s">
        <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/c_add.png" alt=""></div>
        <div class="txt">
          <h6>OUR LOCATION</h6>
          <p><?php echo xintheme('address'); ?></p>
        </div>
      </li>
    </ul>
  </section>
  

  <section class="c_map wrap m80 wow slideInUp">
    <div class="i_tit center">
      <span>company address</span>
      <h2>Welcome to cooperate<br> with our company</h2>
    </div>
    <div class="map m80"><?php echo do_shortcode( '[simpleMapNoApi]' ); ?></div>
  </section>
</main>








<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>