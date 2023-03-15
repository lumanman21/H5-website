<!-- footer -->
<footer class="delta_t">
  <div class="mainfooter">
    <div class="f_add">
      <div class="f_logo"><img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>"><p>Care air Care you</p></div>
      <p>Address: <?php echo xintheme('address'); ?></p>
      <p>Tel : <a href="tel:<?php echo xintheme('tel'); ?>"><?php echo xintheme('tel'); ?></a></p>
      <p>Mail : <?php echo xintheme('email'); ?></p>
      <ul>
        <li><a href="<?php echo xintheme('consultation_facebook_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/f_facebook.png" alt=""></a></li>
        <li><a href="<?php echo xintheme('consultation_twitter_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/f_twiter.png" alt=""></a></li>
        <li><a href="<?php echo xintheme('consultation_instagram_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/f_ins.png" alt=""></a></li>
        <li><a href="<?php echo xintheme('consultation_linkedin_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/f_linkin.png" alt=""></a></li>
      </ul>
    </div>
    <div class="f_email">
      <?php echo do_shortcode( '[wpforms id="28"]' ); ?>
    </div>
    <div class="f_list">
      <ul>

      <?php
                  $query_post = array(
                    'cat' => 2,
                    'showposts' => 4,
                    'post__in' => get_option('sticky_posts'),
                    'caller_get_posts' => 1,
                    // 'order' => 'asc',
                  );
                  query_posts($query_post);
          ?>
          <?php while (have_posts()) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
                <?php endwhile; wp_reset_query(); ?>


      </ul>
      <ul>
        <?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
      </ul>
    </div>
    <p class="design">©2023, Anhui Leking Environment Technology Co., Ltd. Design by LJGLOBAL.</p>
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
    <a href="<?php echo get_permalink(10); ?>" class="contact">
      <p class="contact_icon">
        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_email.svg" alt="">
        <span>Contact</span>
      </p>
    </a>
  </div>

  <!-- backtop -->
  <p class="f_top" onClick="goTop()">TOP</p>




 <div class="pop_video">
    <iframe id="pop_v" src="https://www.youtube.com/embed/5e4T91zzNxc" frameborder="0" allowfullscreen></iframe>
    <i id="v_back" onclick="vHide()"></i>
 </div>




  <!-- aside -->
  <aside class="aside_right">
    <ul>
      <!-- <li>
        <a><img src="./<?php bloginfo('template_url'); ?>/static/images/aside_ico_whatsapp.svg" /></a>
      </li> -->
      <li>
        <a><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_tel.svg" /></a>
        <div class="side_tel_box">
          <h6><a href="tel:<?php echo xintheme('tel'); ?>"><?php echo xintheme('tel'); ?></a></h6>
        </div>
      </li>
      <li onclick="asfrom()">
        <a href="javascript:void(0)" ><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_email.svg" /></a>
      </li>
      <li onClick="goTop()"><a><div><img src="<?php bloginfo('template_url'); ?>/static/images/aside_ico_up.svg" /></div></a></li>
    </ul>
  </aside>

  <div id="aside_mask_bg"></div>
  <div id="aside_sc_from">
  <div class="tit">
    <h1>Free To Contact Us</h1>
  </div>
  <!-- Pop_form -->
  <?php echo do_shortcode( '[wpforms id="37"]' ); ?>
  <a class="close" href="javascript:;" onclick="asclosescxz()"></a>
  </div>

</footer>



<?php
	global $wp;
	$current_url = home_url(add_query_arg(array(),$wp->request));
?>
<!-- 表单隐藏input赋值当前页面链接 -->
<script>
	$("#wpforms-28-field_4").val("<?php echo $current_url; ?>");
	$("#wpforms-37-field_4").val("<?php echo $current_url; ?>");
	$("#wpforms-32-field_6").val("<?php echo $current_url; ?>");
</script>


<?php wp_footer(); ?>



<!-- 引入wow动画效果 -->
<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>
<!-- 引入wow动画效果 -->
