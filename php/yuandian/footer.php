<footer>

<div class="mainfooter wrap">

  <dt class="f_about">

    <div class="log_img">

      <img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" alt="" />

    </div>

    <ul class="f_media">

      <li>

        <a href="<?php echo xintheme('consultation_facebook_url'); ?>"><i class="iconfont icon-facebook"></i></a>

      </li>

      <li>

        <a href="<?php echo xintheme('consultation_twitter_url'); ?>"><i class="iconfont icon-birdxiaoniao"></i></a>

      </li>

      <li>

        <a href="<?php echo xintheme('consultation_ins_url'); ?>"><i class="iconfont icon-instagram-fill"></i></a>

      </li>

      <li>

        <a href="<?php echo xintheme('consultation_linkedin_url'); ?>"><i class="iconfont icon-lingying"></i></a>

      </li>

      <li>

        <a href="<?php echo xintheme('consultation_youtube_url'); ?>"><i class="iconfont icon-Youtube-fill"></i></a>

      </li>

      

    </ul>

    

  </dt>

  <dt class="f_nav">

    <h3 class="f_tit"><a href="<?php echo get_permalink(11); ?>">ABOUT US</a></h3>

    <div class="f_liner"></div>

    <ul>

      <li><a href="<?php echo get_permalink(11); ?>">company</a></li>

      <li><a href="<?php echo get_permalink(20); ?>">history</a></li>

      <li><a href="<?php echo get_category_link(3); ?>">NEWS</a></li>

      <li><a href="<?php echo get_permalink(13); ?>">GLOBAL NETWORK</a></li>

    </ul>

    

  </dt>

  <dt class="f_nav">

    <h3 class="f_tit"><a href="<?php echo get_category_link(2); ?>">PRODUCTS </a></h3>

    <div class="f_liner"></div>

    <ul>

      <?php

          $categories=get_categories("child_of=2&parent=2&hide_empty=0&orderby=id&order=asc");

          foreach($categories as $category) {

            $category_data = get_term_meta( $category->term_id, 'category_options', true );

            echo '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a></li>';        

          }

      ?>

      <!-- <li><a href="#">ALUMINUM  FOIL BARRIER BAG</a></li>

      <li><a href="#">FFS PE</a></li>

      <li><a href="#">Nano STRETCH FILM</a></li>

      <li><a href="#0">STRETCH HOOD</a></li> -->

    </ul>

  </dt>

  <dt class="f_nav">

    <h3 class="f_tit"><a href="#">SUPPORT & SERVICES</a></h3>

    <div class="f_liner"></div>

    <ul>

      <li><a href="#">Download Center</a></li>

      <li><a href="<?php echo get_permalink(85); ?>">FAQS</a></li>

      <li><a href="#">FOR DISTRIBUTORS</a></li>

      <li><a href="#0">STRETCH HOOD</a></li>

    </ul>

  </dt>

  <dt class="f_contact">

    <h3 class="f_tit"><a href="<?php echo get_permalink(13); ?>">contact us</a></h3>

    <div class="f_liner"></div>

    <ul>

      <li>

        <i class="iconfont icon-dianhua"></i>

        <span><a href="tel:<?php echo xintheme('phone1'); ?>"><?php echo xintheme('phone1'); ?></a></span>

      </li>

      <li onclick="asfrom()">

        <i class="iconfont icon-youxiang"></i>

        <span><?php echo xintheme('email1'); ?></span>

      </li>

      <li>

        <i class="iconfont icon-shouhuodizhi"></i>

        <a><?php echo xintheme('address'); ?></a>

      </li>

    </ul>

  </dt>

</div>



<div class="copyright">

  <span>© Copyright 2022 Huangshan Yuandian New Material Science and Technology Co., Ltd. All Rights Reserved

    <!-- <a href="https://www.ljglobal.cn/" target="_blank">LJGLOBAL.</a> -->

    <!-- <a href="<?php echo get_permalink(15); ?>"  class="privacy" >Privacy Policy</a> -->

  </span>

  <span></span>

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

      <span>Product</span>

    </p>

  </a>

  <a  onclick="asfrom()" href="#" class="contact">

    <p class="contact_icon">

      <img src="<?php bloginfo('template_url'); ?>/static/images/footer_email.svg" alt="">

      <span>Email</span>

    </p>

  </a>

</div>





<!-- 侧边客服 -->

<aside class="aside_right">

  <ul>

    <!-- <li>

      <a><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_whatsapp.svg" /></a>

    </li> -->

    <li>

      <a><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_tel.svg" /></a>

      <div class="side_tel_box">

        <h6><a href="tel:<?php echo xintheme('phone1'); ?>"><?php echo xintheme('phone1'); ?></a></h6>

      </div>

    </li>

    <li onclick="asfrom()">

      <a href="javascript:void(0)" ><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_email.svg" /></a>

    </li>

    <li onClick="goTop()"><a><div><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_up.svg" /></div></a></li>

  </ul>

</aside>

<script>

function asfrom(){

  document.getElementById('aside_sc_from').style.display='block';

  document.getElementById('aside_mask_bg').style.display='block'

}

function asclosescxz(){

  document.getElementById('aside_sc_from').style.display='none';

  document.getElementById('aside_mask_bg').style.display='none'

};

function goTop() {

  $('html,body').animate({

          scrollTop: 0

  }, 500)

}

</script>

<div id="aside_mask_bg"></div>

<div id="aside_sc_from">

<div class="tit">

  <h1>Free To Contact Us</h1>

</div>

<!-- Pop_form -->

<?php echo do_shortcode( ' [wpforms id="45"] ' ); ?>



<a class="close" href="javascript:void(0)" onclick="asclosescxz()"></a>

</div>

<div class="clear"></div>



<!-- 引入wow动画效果 -->

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script>

	wow = new WOW({

    animateClass: 'animated',

    offset: 150,

		mobile: false,

	});

    wow.init();

</script>








<?php wp_footer(); ?>

</footer>