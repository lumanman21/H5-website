<?php

/*

Template Name: contact

*/

get_header();?>

<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>



<!-- top_content -->

<div class="about_banner">

  <img class="about_img" src="<?php bloginfo('template_url'); ?>/static/images/f_bc.webp" alt="">

  <div class="about_banner_text">

      <h1>contact</h1>

      <!-- in_position -->

      <div class="in_position">

            <div class="container">

            <?php echo in_breadcrumbs(); ?>

            </div>

        </div>

  </div>

</div>

<main>

  <div class="H_content1 N_content1">

    <div class="right_img wow slideInLeft"><img src="<?php bloginfo('template_url'); ?>/static/images/n_1.png" alt=""></div>

    <div class="left_txt c_left_txt wow slideInLeft">

        <ul class="contact_list">

          <li>

            <img src="<?php bloginfo('template_url'); ?>/static/images/c_clock.png" alt="">

            <h5>Working Hours</h5>

            <p>Core members has 25 year’s experience of making plastic packaging.</p>

          </li>

          <li>

            <img src="<?php bloginfo('template_url'); ?>/static/images/c_address.png" alt="">

            <h5>Location</h5>

            <p><?php echo xintheme('address'); ?></p>

          </li>

          <li>

            <a href="tel:<?php echo xintheme('phone1'); ?>">

            <img src="<?php bloginfo('template_url'); ?>/static/images/c_phone.png" alt="">

            <h5>Call Center</h5>

            <p>Invested and fully imported Europe technology machinery.</p>

            </a>

          </li>

          <li onclick="asfrom()">

            <img src="<?php bloginfo('template_url'); ?>/static/images/c_email.png" alt="">

            <h5>Email Us</h5>

            <p><?php echo xintheme('email1'); ?></p>

          </li>

        </ul>

    </div>

  </div>

  <div class="H_content1 H_content3 wow slideInRight">

    <div class="left_txt wow slideInRight">

      <h6>CONTACT US</h6>

      <h1>Quotation Request</h1>

      <?php echo do_shortcode( ' [wpforms id="42"] ' ); ?>

    </div>

    <div class="right_img wow slideInRight form_img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_3.webp" alt=""></div>

  </div>

  

  <div class="map">

    <?php echo do_shortcode( ' [simpleMapNoApi] ' ); ?>

  </div>

</main>



<!-- footer -->

<?php get_footer();?>

	

</body>

</html>