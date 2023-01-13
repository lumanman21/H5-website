<footer>
  <div class="mainfooter">
    <div class="f_top">
      <div class="top_left"><h6>FIND US</h6></div>
      <div class="top_right">
        <ul>
          <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>

          <!-- <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li> -->
        </ul>
        <img src="<?php bloginfo('template_url'); ?>/static/images/logo_bai.png" alt="">
      </div>
    </div>
    <div class="f_bottom">
      <ul class="f_add">
        <li onclick="asfrom()">
          <div><img src="<?php bloginfo('template_url'); ?>/static/images/f_mail.png" alt=""><p>Mail :</p></div>
          <div><p><?php echo xintheme('email1'); ?><br><?php echo xintheme('email2'); ?></p></div>
        </li>
        <li>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/static/images/f_add.png" alt="">
            <p>ADD :</p>
          </div>
          <div>
            <p><?php echo xintheme('address'); ?></p>
          </div>
        </li>
      </ul>
      <ul class="f_call">
        <li>
          <div><img src="<?php bloginfo('template_url'); ?>/static/images/f_moble.png" alt="">Mob :</div>
          <div>
            <a href="tel:<?php echo xintheme('phone1'); ?>"><?php echo xintheme('phone1'); ?></a>
            <a href="tel:<?php echo xintheme('phone2'); ?>"><?php echo xintheme('phone2'); ?></a>
          </div>
        </li>
        <li>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/static/images/f_call.png" alt="">Tel :
          </div>
          <div>
          <a href="tel:<?php echo xintheme('phone3'); ?>"><?php echo xintheme('phone3'); ?></a>
          </div>
        </li>
        <li>
          <div>
            <img src="<?php bloginfo('template_url'); ?>/static/images/f_fax.png" alt="">FAX :
          </div>
          <div><?php echo xintheme('fax1'); ?></div>
        </li>
      </ul>
      <ul class="f_media">
        <li><a href="<?php echo xintheme('consultation_youtube_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media_1.png" alt=""></a></li>
        <li><a href="<?php echo xintheme('consultation_linkedin_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media_2.png" alt=""></a></li>
        <li><a href="<?php echo xintheme('consultation_twitter_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media_3.png" alt=""></a></li>
        <li><a href="<?php echo xintheme('consultation_facebook_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media_4.png" alt=""></a></li>
        <li><a href="<?php echo xintheme('consultation_ins_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media_5.png" alt=""></a></li>
      </ul>
    </div>
  </div>
  <div class="copyright">
      CopyRight © 2022 Anhui Dery Material Science Co.,LTD.
      <i class="tring"></i>
      <a class="policy" href="<?php echo get_permalink(11); ?>">Privacy Policy</a>
      <i class="tring"></i>
      Design by <a href="https://www.ljglobal.cn">LJGLOBAL.</a>
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
        <span>Products</span>
      </p>
    </a>
    <a href="<?php echo get_permalink(7); ?>" class="contact">
      <p class="contact_icon">
        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_email.svg" alt="">
        <span>Contact</span>
      </p>
    </a>
  </div>
  <!-- back_top -->
  <div class="sidebar">
    <a href="tel:<?php echo xintheme('phone1'); ?>">
      <p class="fix_icon"><i class="iconfont icon-outBound-hujiao"></i></p>
      <div class="side_icon">
        <i class="iconfont icon-outBound-hujiao"></i>
        <span><?php echo xintheme('phone1'); ?></span>
      </div>
    </a>
    <a href="javascript:;" onclick="asfrom()">
      <p class="fix_icon"><i class="iconfont icon-youxiang1"></i></p>
      <div class="side_icon">
        <i class="iconfont icon-youxiang1"></i>
        <span><?php echo xintheme('email1'); ?></span>
      </div>
    </a>
    <div onclick="goTop()" href="javascript:;" class="back-top">
      <i class="iconfont icon-double-left"></i>
    </div>
  </div>
  <!--pop_form-->
  <div class="pop_form" id="pop_form">
    <div class="back" onclick="asclosescxz()"><i class="iconfont icon-cuocha_kuai"></i></div>
    <h3>Leave A Message</h3>
    <h4>If you are interested in our products and want to know more details, please leave a message here, we will reply you as soon as we can.</h4>
    <?php echo do_shortcode( ' [wpforms id="29"] ' ); ?>
  </div>
</footer>
<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>
<?php wp_footer(); ?>