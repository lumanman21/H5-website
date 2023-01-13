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



<div class="com_content1">

  <img src="<?php bloginfo('template_url'); ?>/static/images/contact_bc.png" alt="">

</div>



<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

      <?php echo in_breadcrumbs(); ?>

    </div>

</div>





<div class="C_content wrap wow slideInUp">

    <ul class="left_C_content">

      <li>

        <img src="<?php bloginfo('template_url'); ?>/static/images/contact_call.png" alt="">

        <p class="tit">GIVE US A CALL<a href="tel:<?php echo xintheme('phone1'); ?>">Tel:<?php echo xintheme('phone1'); ?></a></p>

      </li>

      <li>

        <img src="<?php bloginfo('template_url'); ?>/static/images/contact_email.png" alt="">

        <p class="tit">EMAIL US<a id="E_mail_form"><?php echo xintheme('email1'); ?></a></p>

      </li>

      <li>

        <img src="<?php bloginfo('template_url'); ?>/static/images/contact_call.png" alt="">

        <p class="tit">ADDRESS<a href="#"><?php echo xintheme('address'); ?></a></p>

      </li>

    </ul>



    <!-- ----PD_form---- -->

    <div class="PD_form contact_form">

        <p class="tit C_tit">LEAVE A MESSAGE</p>

        <img class="C_img" src="<?php bloginfo('template_url'); ?>/static/images/bc_form.webp" alt="">

        <p class="futit C_futit">

            If you are interested in our products and want to know more detail, please leave a message here, we will reply you as soon as we can. 

        </p>

        <div class="C_form">

          <?php echo do_shortcode( ' [wpforms id="32"] ' ); ?>

        </div>

        

    </div>

    

</div>



<!-- footer -->

<?php get_footer();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>

<script>

  //引入wow动画效果

  wow = new WOW({

    animateClass: 'animated',

    offset: 100,

    mobile: false,

  });

  wow.init();

</script>

	

</body>

</html>