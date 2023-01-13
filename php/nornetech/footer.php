<footer>
  <div class="f_top" onClick="asfrom()">
    <p><i class="iconfont icon-youxiang"></i>contact us soon</p>
  </div>

  <!-- foot_form -->

  <div class="foot_form">

    <img src="<?php bloginfo('template_url'); ?>/static/images/bc_youxiang.webp" alt="">

    <h1>WELCOME TO CONTACT US</h1>

    <h2>If you are interested in our products and want to know more details, please leave a message here and we will get back to you as soon as possible.</h2>

    <?php echo do_shortcode( ' [wpforms id="34"] ' ); ?>

  </div>

  

  <div class="mainfooter wrap">

    <dt class="f_about">

      <div class="log_img">

        <img src="<?php bloginfo('template_url'); ?>/static/images/logo.webp" alt="" />

      </div>

      <p class="text">ANHUI NORNE INDUSTRIAL AND TRADING CO., LTD. is a science and technology enterprise focusing on garments, shoes and shoe material, automatic digital printing, integrating R & D, design, production, foreign trade export and independent brand building.</p>

      <ul class="f_media">

        <li>

          <a href="<?php echo xintheme('consultation_facebook_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/ico-f.png" /></a>

        </li>

        <li>

          <a href="<?php echo xintheme('consultation_twitter_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_twitter.svg" /></a>

        </li>

        <li>

          <a href="<?php echo xintheme('consultation_ins_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_camera.svg" /></a>

        </li>

        <li>

          <a href="<?php echo xintheme('consultation_youtube_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_video.svg" /></a>

        </li>

      </ul>

      

    </dt>

    <dt class="f_nav">

      <h3 class="f_tit"><a href="#">follow us</a></h3>

      <ul>

       <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>

      </ul>

      <a href="<?php echo get_permalink(27); ?>" class="privacy">Privacy Policy</a>

    </dt>

    <dt class="f_contact">

      <h3 class="f_tit f_tit2"><a href="#">contact us</a></h3>

      <ul>

        <li>

          <i class="iconfont icon-dianhua"></i>

          <span>

            <a href="tel:<?php echo xintheme('phone1'); ?>">Tel:<?php echo xintheme('phone1'); ?></a>

            <a href="tel:<?php echo xintheme('phone2'); ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo xintheme('phone2'); ?></a>

          </span>

        </li>

        <li>

          <i class="iconfont icon-youxiang"></i>

          <span><?php echo xintheme('email1'); ?><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo xintheme('email2'); ?></span>

        </li>

        <li>

          <i class="iconfont icon-dizhi1"></i>

          <a><?php echo xintheme('address'); ?></a>

        </li>

      </ul>

    </dt>

  </div>

  <div class="bfooter">

    <span>© 2022 ANHUI NORNE INDUSTRIAL AND TRADING CO., LTD. Design by <a href="https://www.ljglobal.cn/" target="_blank">LJGLOBAL.</a></span><br>

    <span></span>

  </div>

  

  <div class="phone_bar">

    <a href="/" class="home">

      <p class="home_icon">

        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_home.svg" alt="">

        <span>Home</span>

      </p>

    </a>

    <a href="<?php echo get_category_link(3); ?>" class="product">

      <p class="product_icon">

        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_menu.svg" alt="">

        <span>Product</span>

      </p>

    </a>

    <a href="<?php echo get_permalink(50); ?>" class="contact">

      <p class="contact_icon">

        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_email.svg" alt="">

        <span>Contact</span>

      </p>

    </a>

  </div>





  <!-- backTop -->

  <div class="sidebar">

    <a href="tel:<?php echo xintheme('phone1'); ?>">

      <p class="fix_icon"><i class="iconfont icon-tonghua"></i></p>

      <div class="side_icon">

        <i class="iconfont icon-tonghua"></i>

        <span><?php echo xintheme('phone1'); ?></span>

      </div>

    </a>

    <a href="#" onClick="asfrom()">

      <p class="fix_icon"><i class="iconfont icon-youxiang"></i></p>

      <div class="side_icon">

        <i class="iconfont icon-youxiang"></i>

        <span><?php echo xintheme('email1'); ?></span>

      </div>

    </a>

    <a href="#" class="back-top" onClick="goTop()">

      <img src="<?php bloginfo('template_url'); ?>/static/images/ico_bactTop.svg" alt="">

    </a>

  </div>



  <!-- the poping form -->

  <div class="pop_form" id="pop_form">

    <h1>Free to contact us</h1>

    <?php echo do_shortcode( ' [wpforms id="38"] ' ); ?>

    <img id="form_back" src="<?php bloginfo('template_url'); ?>/static/images/ico-cha.svg" alt="">

  </div>



<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>

</footer>



<?php wp_footer(); ?>