<footer>

  <div class="mainfooter wrap">

    <div class="classify">

    <h1>Products Category<div class="liner"></div></h1>

    <ul class="classify_list">

    <?php

                $args=array(

                'child_of'=> 5,

                'parent' => 5,

                'hide_empty'=>'0',

                'orderby'=>'id',

                'order'=>'asc',

                );

                $categories=get_categories($args);

                foreach($categories as $category) {

                $category_data = get_term_meta( $category->term_id, 'category_options', true );

                $cat_term_id = get_category($category)->term_id;

                $cat_taxonomy = get_category($category)->taxonomy;

                // if ($upcategory_name==$category->name)

                // {

                //         $style1="current-category-parent";

                // }else{

                //         $style1="";

                // };



                // if ($category_name==$category->name){

                //         $style2="active";

                // }else{

                //         $style2="";

                // }

                // ?>



                <li class="<?php echo $style ?> <?php echo $style1 ?> <?php echo $style2 ?>">

                    <a href="<?php echo get_category_link( $category->term_id ) ;?>">

                        <?php echo $category->name;?>

                    </a>

                </li>

            <?php } ?>

    </ul>

    </div>

    <div class="classify">

    <h1>Company Profile<div class="liner"></div></h1>

    <ul class="classify_list">

      <li><a href="<?php echo get_permalink(10); ?>">Company profile</a></li>

      <li><a href="<?php echo get_permalink(14); ?>">Honor</a></li>

      <li><a href="<?php echo get_permalink(12); ?>">Production workshop</a></li>

    </ul>

    </div>

    <div class="classify">

    <h1>News<div class="liner"></div></h1>

    <ul class="classify_list">

      <li><a href="<?php echo get_category_link(11); ?>">Industry news</a></li>

      <li><a href="<?php echo get_category_link(12); ?>">Company news</a></li>

    </ul>

    <a href="<?php echo get_permalink(18); ?>" class="privacy">Privacy Policy</a>

    </div>

    <div class="f_form">

      <h1>Order your product</h1>

      <?php echo do_shortcode( ' [wpforms id="29"] ' ); ?>

    </div>

  </div>

  

  <div class="afooter_phone">

    <p class="footer_tit">Products Category</p>

    <ul class="f_nav_list" id="foot_navigation">

      <?php if(function_exists('wp_nav_menu')) wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>

      <!-- <li><a href="#">Home</a></li>

      <li class="more_menu">

        <a href="#">Product</a>

        <dl class="n_submenu" >

          <dt><a href="single.html">Quality Certification</a></dt>

          <dt><a href="single.html">Video</a></dt>

        </dl>

      </li>

      <li class="more_menu">

        <a href="#">About Us</a>

        <dl class="n_submenu" >

          <dt><a href="single.html">Quality Certification</a></dt>

          <dt><a href="single.html">Video</a></dt>

        </dl>

      </li>

      <li class="more_menu">

        <a href="#">News</a>

        <dl class="n_submenu" >

          <dt><a href="single.html">Quality Certification</a></dt>

          <dt><a href="single.html">Video</a></dt>

        </dl>

      </li>

      <li><a href="#">Contact Us</a></li> -->

      <li><a href="<?php echo get_permalink(18); ?>" class="privacy">Privacy Policy</a></li>

    </ul>

    <ul class="f_phone">

      <li>

        <img src="<?php bloginfo('template_url'); ?>/static/images/dianhua.svg" />

        <span><a href="tel:<?php echo xintheme('phone1'); ?>"><?php echo xintheme('phone1'); ?></a></span>

      </li>

      <li>

        <img src="<?php bloginfo('template_url'); ?>/static/images/youxiang.svg" />

        <span><a href="#"><?php echo xintheme('email1'); ?></a></span>

      </li>

      <li>

        <img src="<?php bloginfo('template_url'); ?>/static/images/address.svg" />

        <span><?php echo xintheme('address'); ?></span>

      </li>

    </ul>

  </div>



  <div class="bfooter">

    <span>©2021  FENGLE PERFUME. Design by <a href="https://www.ljglobal.cn/" target="_blank">LJGLOBAL.</a></span><br>

    <span></span>

  </div>



  <div class="phone_bar">

    <a href="/" class="home">

      <p class="home_icon">

        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_home.svg" alt="">

        <span>Home</span>

      </p>

    </a>

    <a href="<?php echo get_category_link(5); ?>" class="product">

      <p class="product_icon">

        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_menu.svg" alt="">

        <span>Product</span>

      </p>

    </a>

    <a href="<?php echo get_permalink(16); ?>" class="contact">

      <p class="contact_icon">

        <img src="<?php bloginfo('template_url'); ?>/static/images/footer_email.svg" alt="">

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
  <?php echo do_shortcode( ' [wpforms id="166"] ' ); ?>
  <a class="close" href="javascript:void(0)" onclick="asclosescxz()"></a>
</div>
<div class="clear"></div>






</footer>









<?php wp_footer(); ?>