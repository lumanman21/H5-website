<?php

/*

Template Name: contact

*/

get_header();?>



<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>



<div class="com_content1">

  <img src="./static/images/c_banner.webp" alt="">

</div>

<!-- in_position -->

<div class="in_position">

  <div class="wrap container">

    <?php echo in_breadcrumbs(); ?>

  </div>

</div>



<div class="C_content wrap">

  <ul class="left_C_content">

    <li>

      <div class="left_ico"><i class="iconfont icon-tonghua"></i></div>

      <div class="tit">GIVE US A CALL

        <a href="tel:<?php echo xintheme('phone1'); ?>">Tel:<?php echo xintheme('phone1'); ?></a>

        <a href="tel:<?php echo xintheme('phone2'); ?>"><?php echo xintheme('phone2'); ?></a>

      </div>

    </li>

    <li>

      <div class="left_ico"><i class="iconfont icon-youxiang1"></i></div>

      <div class="tit">EMAIL US

        <a href="#"><?php echo xintheme('email1'); ?></a>

        <a href="#"><?php echo xintheme('email2'); ?></a>

      </div>

    </li>

    <li>

      <div class="left_ico"><i class="iconfont icon-dizhi"></i></div>

      <div class="tit">ADDRESS<a href="#"><?php echo xintheme('address'); ?></a></div>

    </li>

  </ul>



  <!-- ----PD_form---- -->

  <div class="contact_form">

      <p class="tit">Leave A Message</p>

      <div class="c_line"></div>

      <p class="futit">

          If you are interested in our products and want to know more detail, please leave a message here, we will reply you as soon as we can. 

      </p>

      <?php echo do_shortcode( ' [wpforms id="46"] ' ); ?>

  </div>

</div>







<!-- footer -->

<?php get_footer();?>



	

	

</body>

</html>