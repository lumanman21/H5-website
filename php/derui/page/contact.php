<?php
/*
Template Name: contact
*/
get_header();?>



<body>
<?php echo xintheme('foot_code');?>

<!-- header -->
<?php get_template_part('top') ?>

<main>
  <div class="top_banner c_banner">
    <img src="<?php bloginfo('template_url'); ?>/static/images/c_banner.webp" alt="">
    <div class="c_content">
      <div class="c_left">
        <h2>We are the largest manufacturer for oxidation of carbon black.</h2>
        <h3>Use after processing technology to increase the additional value of carbon black.</h3>
      </div>
      <div class="c_right">
        <div class="c_box">
          <div class="com_tit">
            <h1>Find us</h1>
            <div class="line"></div>
            <div class="liner"></div>
          </div>
          <ul>
            <li  onclick="asfrom()">
              <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/f_mail.png" alt=""></div>
              <div class="txt">
                <p class="tit">Mail:</p>
                <p><?php echo xintheme('email1'); ?></p>
              </div>
            </li>
            <li>
              <a href="tel:<?php echo xintheme('phone1'); ?>">
                <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/f_moble.png" alt=""></div>
                <div class="txt">
                  <p class="tit">Mob:</p>
                  <p><?php echo xintheme('phone1'); ?></p>
                </div>
              </a>
            </li>
            <li>
              <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/f_fax.png" alt=""></div>
              <div class="txt">
                <p class="tit">FAX:</p>
                <p><?php echo xintheme('fax1'); ?></p>
              </div>
            </li>
            <li>
              <a href="tel:<?php echo xintheme('phone3'); ?>">
                <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/f_call.png" alt=""></div>
                <div class="txt">
                  <p class="tit">Tel:</p>
                  <p><?php echo xintheme('phone3'); ?></p>
                </div>
              </li>
            </a>
          </ul>
        </div>
        <div class="c_map"><?php echo do_shortcode( ' [simpleMapNoApi] ' ); ?></div>
        <div class="c_form">
          <div class="com_tit">
            <h1>Contact us</h1>
            <div class="line"></div>
            <div class="liner"></div>
          </div>
          <?php echo do_shortcode( ' [wpforms id="25"] ' ); ?>
        </div>
      </div>
    </div>
    <ul class="c_banner_list">
      <li class="c_box_li">Contact Information</li>
      <li class="c_map_li">company address</li>
      <li class="c_form_li c_active">Contact us</li>
    </ul>
  </div>

  <!-- in_position -->
  <div class="in_position">
    <div class="wrap container">
    <?php echo in_breadcrumbs(); ?>
    </div>
  </div>
  
  <div class="c_content2 wrap">
    <!-- <div class="c_left">
      <h2>We are the largest manufacturer for oxidation of carbon black.</h2>
      <h3>Use after processing technology to increase the additional value of carbon black.</h3>
    </div> -->
    <div class="c_right">
      <div class="c_box">
        <div class="com_tit">
          <h1>Find us</h1>
          <div class="line"></div>
          <div class="liner"></div>
        </div>
        <ul>
          <li onclick="asfrom()">
            <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/f_mail.png" alt=""></div>
            <div class="txt">
              <p class="tit">Mail:</p>
              <p><?php echo xintheme('email1'); ?></p>
            </div>
          </li>
          <li>
            <a href="tel:<?php echo xintheme('phone3'); ?>">
              <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/f_moble.png" alt=""></div>
              <div class="txt">
                <p class="tit">Mob:</p>
                <p><?php echo xintheme('phone3'); ?></p>
              </div>
            </a>
          </li>
          <li>
            <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/f_fax.png" alt=""></div>
            <div class="txt">
              <p class="tit">FAX:</p>
              <p><?php echo xintheme('fax1'); ?></p>
            </div>
          </li>
          <li>
            <a href="tel:<?php echo xintheme('phone1'); ?>">
              <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/f_call.png" alt=""></div>
              <div class="txt">
                <p class="tit">Tel:</p>
                <p><?php echo xintheme('phone1'); ?></p>
              </div>
            </li>
          </a>
        </ul>
      </div>
      <div class="c_map"><?php echo do_shortcode( ' [simpleMapNoApi] ' ); ?></div>
      <div class="c_form">
        <div class="com_tit">
          <h1>Contact us</h1>
          <div class="line"></div>
          <div class="liner"></div>
        </div>
        <?php echo do_shortcode( ' [wpforms id="25"] ' ); ?>
      </div>
    </div>
  </div>

  <div class="bottom_form wow slideInUp">
    <div class="com_tit">
      <div class="tit_bc">Contact us for a quote</div>
      <h1>Contact us for a quote</h1>
      <div class="line"></div>
      <div class="liner"></div>
    </div>
    <?php echo do_shortcode( ' [wpforms id="22"] ' ); ?>
  </div>
</main>
<script>
  $('.c_box_li').click(function(){
      $('.c_box_li').addClass('c_active')
      $('.c_box_li').siblings().removeClass('c_active')
      $('.c_box').show()
      $('.c_map').hide()
      $('.c_form').hide()
    })
    $('.c_map_li').click(function(){
      $('.c_map_li').addClass('c_active')
      $('.c_map_li').siblings().removeClass('c_active')
      $('.c_box').hide()
      $('.c_map').show()
      $('.c_form').hide()
    })
    $('.c_form_li').click(function(){
      $('.c_form_li').addClass('c_active')
      $('.c_form_li').siblings().removeClass('c_active')
      $('.c_box').hide()
      $('.c_map').hide()
      $('.c_form').show()
    })
</script>




<!-- footer -->
<?php get_footer();?>


	
</body>
</html>