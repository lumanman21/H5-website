<?php
/*
Template Name: contact
*/
get_header();?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/contact.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/adapt.css" />

<body>

<!-- header -->
<?php get_template_part('top') ?>

 <!-- CU_content1 -->
 <div class="CU_content1">
    <div class="img_txt wrap">
      <h1 class="conten1_tit">CONTACT US</h1>
      <p class="content_fu">
        <span class="content_fu1">COOLNET-- </span><span>Contact Us</span>
      </p>
    </div>
</div>
    

<!-- 小图标 -->
<div class="in_position wrap">
  <div class="container">
    <?php echo in_breadcrumbs(); ?>
  </div>
</div>


<!-- CU_content2 -->
<div class="CU_content2 wrap">
  <div class="tit">CONTACT US</div>
  <div class="fu_tit">
    To become your most trustworthy, most grateful, most professional, most
    practical, and most reliable partner with the best vision.
  </div>
  <div class="CU_container">
    <div class="cu_left_input">
      <p class="input_tit">TO : info@coolnetpower.com</p>
      <!-- <form class="input_box">
        <input type="text" placeholder="Your name" />
        <div class="mark">
          <input type="text" placeholder="Your email" />
        </div>
        <input type="text" placeholder="Your number" />
        <input type="text" placeholder="Your company" />
        <textarea placeholder="Your message" rows="5"></textarea>
      </form>
      <a href="/" class="input_but"><p>SUBMIT</p></a> -->
      <?php echo do_shortcode( ' [wpforms id="37"] ' ); ?>
    </div>
    <div class="cu_right_address">
      <a href="tel:<?php echo xintheme('phone1'); ?>" class="address_tit">
        <i class="iconfont icon-youxiang"></i>
        <span>Tel : <?php echo xintheme('phone1'); ?></span>
      </a>
      <div class="address_txt">
        <p class="icon"><i class="iconfont icon-daohangdizhi"></i></p>
        <p class="txt">
          Address : 
          <span>
          <?php echo xintheme('address'); ?>
          </span>
        </p>
      </div>
      <!-- 地图 -->
      <div class="map"><?php echo do_shortcode( ' [simpleMapNoApi] ' ); ?></div>
    </div>
  </div>
</div>

<!-- footer -->
<?php get_footer();?>

	
	
</body>
</html>