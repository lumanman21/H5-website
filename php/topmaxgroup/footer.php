<footer>

  <div class="mainfooter wrap">

    <div class="f_left">

      <img src="<?php bloginfo('template_url'); ?>/static/images/bottom_logo.webp" alt="">

      <ul>

        <li><a href="tel:<?php echo xintheme('phone1'); ?>">

          <i class="iconfont icon-dianhua"></i>

          <span><?php echo xintheme('phone1'); ?><?php echo xintheme('phone2'); ?></span>

        </a></li>

        <li onclick="asfrom()">

          <i class="iconfont icon-youxiang1"></i>

          <span><?php echo xintheme('email1'); ?></span>

        </li>

        <li>

          <i class="iconfont icon-dizhi"></i>

          <span><?php echo xintheme('address'); ?></span>

        </li>

      </ul>

      <div class="link">

        <a href="<?php echo xintheme('consultation_facebook_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/f.png" alt=""></a>

        <a href="<?php echo xintheme('consultation_twitter_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/twitter.png" alt=""></a>

      </div>

    </div>

    <div class="f_middle">

      <h4>FOLLOW US</h4>

      <ul>

        <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>



      </ul>

      <a href="<?php echo get_permalink(86); ?>" class="privacy">Privacy Policy</a>

    </div>

    <div class="f_right">

      <h4>PRODUCTS CATEGORY</h4>

      <ul>

      <?php

            $categories=get_categories("child_of=2&parent=2&hide_empty=0&orderby=id&order=asc");

            foreach($categories as $category) {

              $category_data = get_term_meta( $category->term_id, 'category_options', true );

              echo '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a></li>';        

            }

        ?>

      </ul>

    </div>

  </div>

  <div class="f_form">

    <h4>CONTACT US</h4>

    <?php echo do_shortcode( ' [wpforms id="182"] ' ); ?>

  </div>

  <div class="design">

    © 2021 Top Max. Design by <a href="https://www.ljglobal.cn">LJGLOBAL.</a>

  </div>

  <div class="phone_bar">

    <a href="/" class="home">

      <p class="home_icon">

        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_home.svg" alt="">

        <span>Home</span>

      </p>

    </a>

    <a href="<?php echo get_category_link(2); ?>" class="product">

      <p class="product_icon">

        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_menu.svg" alt="">

        <span>Products</span>

      </p>

    </a>

    <a href="<?php echo get_permalink(21); ?>" class="contact">

      <p class="contact_icon">

        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_email.svg" alt="">

        <span>Contact</span>

      </p>

    </a>

  </div>

  <!-- 回到顶部 -->

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

    <?php echo do_shortcode( ' [wpforms id="301"] ' ); ?>

  </div>

</footer>

<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>


<?php
   global $wp;
   $current_url = home_url(add_query_arg(array(),$wp->request));
?>
<script>document.getElementById('wpforms-182-field_3').value="<?php echo $current_url; ?>";</script>
<script>document.getElementById('wpforms-295-field_4').value="<?php echo $current_url; ?>";</script>
<script>document.getElementById('wpforms-301-field_5').value="<?php echo $current_url; ?>";</script>
<script>document.getElementById('wpforms-676-field_4').value="<?php echo $current_url; ?>";</script>



<?php wp_footer(); ?>