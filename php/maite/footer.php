<footer>

    <div class="afooter_pc">

      <dl class="f_cont wrap">

        <!-- LEFT -->

        <dt class="f_contact">

          <div class="log_img">

            <img src="<?php bloginfo('template_url'); ?>/static/images/logo_bai.webp" alt="" />

          </div>

          <ul>

            <li>

              <i><img src="<?php bloginfo('template_url'); ?>/static/images/media/dianhua.svg" /></i>

              <span><a href="tel:<?php echo xintheme('phone1'); ?>"><?php echo xintheme('phone1'); ?></a></span>

            </li>

            <li id="E_mail_form1">

              <i><img src="<?php bloginfo('template_url'); ?>/static/images/media/youxiang.svg" /></i>

              <span><a id="E_mail_form"><?php echo xintheme('email1'); ?></a></span>

            </li>

            <li>

              <i><img src="<?php bloginfo('template_url'); ?>/static/images/media/address.svg" /></i>

              <span><?php echo xintheme('address'); ?></span>

            </li>

            

          </ul>

        </dt>

        <!-- MIDDLE -->

        <dt class="f_nav_products">

          <h3 class="f_tit"><a href="#">FOLLOW US</a></h3>

          <ul class="f_nav_list">

            <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>

          </ul>

          <a href="<?php echo get_permalink(19); ?>" class="privacy">Privacy Policy</a>

        </dt>

        <!-- RIGHT -->

        <dt>

          <h3 class="f_tit">ORDER YOUR PRODUCT</h3>

          <div class="input_box">

            <form class="form_box">

              <?php echo do_shortcode( ' [wpforms id="29"] ' ); ?>

            </form>

          </div>

        </dt>

      </dl>

    </div>



    <div class="afooter_phone">

      <p class="footer_tit">FOLLOW US</p>

      <ul class="f_nav_list">

        <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>

      </ul>

      <a href="<?php echo get_permalink(19); ?>" class="foot_privacy">Privacy Policy</a>

      <ul class="f_phone">

        <li>

          <img src="<?php bloginfo('template_url'); ?>/static/images/media/dianhua.svg" />

          <span><a href="tel:<?php echo xintheme('phone1'); ?>"><?php echo xintheme('phone1'); ?></a></span>

        </li>

        <li id="E_mail_form">

          <img src="<?php bloginfo('template_url'); ?>/static/images/media/youxiang.svg" />

          <span><a ><?php echo xintheme('email1'); ?></a></span>

        </li>

        <li>

          <img src="<?php bloginfo('template_url'); ?>/static/images/media/address.svg" />

          <span><?php echo xintheme('address'); ?></span>

        </li>

      </ul>

    </div>



    <div class="bfooter">

      <span>© Mascotop 2006 - 2022. Design by </span><a href="https://www.ljglobal.cn/" target="_blank">LJGLOBAL.</a><br>

      <span><?php echo xintheme('footer_cont');?></span>

    </div>



    <div class="cfooter_phone">

      <a href="/" class="home">

        <p class="home_icon">

          <img src="<?php bloginfo('template_url'); ?>/static/images/media/footer_home.svg" alt="">

          <span>Home</span>

        </p>

      </a>

      <a href="<?php echo get_category_link(4); ?>" class="product">

        <p class="product_icon">

          <img src="<?php bloginfo('template_url'); ?>/static/images/media/footer_menu.svg" alt="">

          <span>Product</span>

        </p>

      </a>

      <a href="<?php echo get_permalink(21); ?>" class="contact">

        <p class="contact_icon">

          <img src="<?php bloginfo('template_url'); ?>/static/images/media/footer_email.svg" alt="">

          <span>Contact</span>

        </p>

      </a>

    </div>





     <!-- 侧边客服 -->
    <aside class="aside_right">
      <ul>
        <!-- <li>
          <a><img src="./static/images/aside_ico_whatsapp.svg" /></a>
        </li> -->
        <li>
          <a><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_tel.svg" /></a>
          <div class="side_tel_box">
            <h6>
              <a href="tel:<?php echo xintheme('phone1'); ?>">Tel:<?php echo xintheme('phone1'); ?></a>
            </h6>
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
        document.getElementById('pop_form').style.display='block';
      }
      function goTop() {
        $('html,body').animate({
                scrollTop: 0
        }, 500)
      }
    </script>




    <!-- the poping form -->

    <div class="pop_form" id="pop_form">

        <p class="p_tit">Contact Us</p>

          <?php echo do_shortcode( ' [wpforms id="68"] ' ); ?>

        <img id="form_back" src="<?php bloginfo('template_url'); ?>/static/images/ico-cha.svg" alt="">

    </div>



  

    <script>

      $('#E_mail_form1').click(function(){

        $('#pop_form').show()

      })

    </script>



</footer>








<?php wp_footer(); ?>