<footer>

  <div class="mainfooter">

    <dt class="f_nav">

      <h3 class="f_tit">About Us</h3>

      <ul>

        <li><a href="<?php echo get_permalink(10); ?>">Company Profile</a></li>

        <li><a href="<?php echo get_permalink(10); ?>">Company Culture</a></li>

        <li><a href="<?php echo get_permalink(10); ?>">Company History</a></li>

        <li><a href="/#contact">Contact Us</a></li>

      </ul>

      <a href="<?php echo get_permalink(18); ?>" class="privacy" >privacy</a>

    </dt>

    <dt class="f_nav">

      <h3 class="f_tit">Products</h3>

      <ul>

        <?php

            $categories=get_categories("child_of=4&parent=4&hide_empty=0&orderby=id&order=asc");

            foreach($categories as $category) {

              $category_data = get_term_meta( $category->term_id, 'category_options', true );

              echo '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a></li>';        

            }

        ?>
        <li><a href="http://www.mcpumps.cn/">Pump</a></li>

        <!-- <li><a href="#">ALUMINUM  FOIL BARRIER BAG</a></li>

        <li><a href="#">FFS PE</a></li>

        <li><a href="#">Nano STRETCH FILM</a></li>

        <li><a href="#0">STRETCH HOOD</a></li> -->

      </ul>

    </dt>

  

    <dt class="f_contact">

      <h3 class="f_tit">Follow Us</h3>

      <ul>

        <li>Address：<a href="#"><?php echo xintheme('address'); ?></a></li>

        <li>Tel：<a href="tel:<?php echo xintheme('phone1'); ?>"><?php echo xintheme('phone1'); ?></a></li>

        <li onclick="asfrom()">E-mail：<?php echo xintheme('email1'); ?></li>

        <li>

          <a href="<?php echo xintheme('consultation_youtube_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/f_youtube.png" alt=""></a>

          <a href="<?php echo xintheme('consultation_linkedin_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/f_linkedin.png" alt=""></a>

        </li>

      </ul>

    </dt>

  </div>



  <div class="copyright">

    <span>Copyright © All Rights Reserved: Anhui Amos Fluid Technology Co., Ltd. Design by <a href="https://www.ljglobal.cn/" target="_blank">LJGLOBAL.</a></span><br>

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

    <a href="<?php echo get_permalink(12); ?>" class="contact">

      <p class="contact_icon">

        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_email.svg" alt="">

        <span>Rent</span>

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

      <a href="tel:<?php echo xintheme('phone1'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_tel.svg" />

      <div class="side_tel_box">

        <h6><?php echo xintheme('phone1'); ?></h6>

      </div>
      </a>

    </li>

    <li onclick="asfrom()">

      <a href="javascript:void(0)" ><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_email.svg" /></a>

    </li>

    <li onclick="goTop()"><a><div><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_up.svg" /></div></a></li>

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



</script>

<div id="aside_mask_bg"></div>
  <div id="aside_sc_from">
  <div class="tit">
    <h1>Free To Contact Us</h1>
  </div>
  <!-- Pop_form -->
  <?php echo do_shortcode( ' [wpforms id="36"] ' ); ?>
  <a class="close" href="javascript:void(0)" onclick="asclosescxz()"></a>
  </div>
  <div class="clear"></div>









</footer>

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