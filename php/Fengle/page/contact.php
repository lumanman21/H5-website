<?php

/*

Template Name: contact

*/

get_header();?>



<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/animate.min.css" />





<body>
<?php echo xintheme('foot_code');?>

<!-- header -->

<?php get_template_part('top') ?>



<div class="a_content1">

  <img src="<?php bloginfo('template_url'); ?>/static/images/C_banner.webp" alt="">

</div>



<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

      <?php echo in_breadcrumbs(); ?>

    </div>

</div>



<div class="a_tit">

  <p>CONTACT US</p>

  <div class="new_bc"><img src="<?php bloginfo('template_url'); ?>/static/images/N_bc.webp" alt=""></div>

</div>

<div class="a_liner n_liner"></div>

<p class="a_futit">Devote in human health. Bring fragrance into the life.</p>



<div class="C_content wrap">

    <ul class="wow slideInLeft">

        <li class="c_tit">ANHUI FENGLE PERFUME CO., LTD.</li>

        <li>

          <i><img src="<?php bloginfo('template_url'); ?>/static/images/icon_call.webp" /></i>

          <span><a href="tel:<?php echo xintheme('phone1'); ?>">Tel:<?php echo xintheme('phone1'); ?></a></span>

        </li>

        <li>

          <i><img src="<?php bloginfo('template_url'); ?>/static/images/icon_email.webp" /></i>

          <span><?php echo xintheme('email1'); ?></span>

        </li>

        <li>

          <i><img src="<?php bloginfo('template_url'); ?>/static/images/icon_address.webp " /></i>

          <span><?php echo xintheme('address'); ?></span>

        </li>

        <div class="new_but" id="contact_but">CONTACT NOW</div>

    </ul>

    <div class="C_form wow slideInRigh">

      <?php echo do_shortcode( ' [wpforms id="32"] ' ); ?>

    </div>

</div>

<div class="map wrap">

  <?php echo do_shortcode( ' [simpleMapNoApi] ' ); ?>

</div>

<script>
  $('#contact_but').click(function(){
    $('#aside_sc_from').show()
  })
</script>









<!-- footer -->

<?php get_footer();?>





<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>

	

</body>

</html>