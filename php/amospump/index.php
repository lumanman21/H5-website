<?php

get_header();

?>

    

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>



<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>



<!-- banner -->

<div class="i_banner">

  <div class="i_banner_list banner_en">
    <ul class="swiper-wrapper">
      <?php get_template_part( 'template-parts/banner'); ?>
    </ul>
    <div class="banner-pagination"></div>
  <div class="banner-button-prev">&lt;</div>
  <div class="banner-button-next">&gt;</div>
  </div>

  
  <div class="i_banner_list banner_zh">
    <ul class="swiper-wrapper">
      <?php get_template_part( 'template-parts/banner2'); ?>
    </ul>
    <div class="banner-pagination"></div>
  <div class="banner-button-prev">&lt;</div>
  <div class="banner-button-next">&gt;</div>
  </div>


</div>
<script>
  $(function(){
    var url = location.href;
    if(url.indexOf("/zh/") >= 0){
      $(".banner_en").remove();
      $(".banner_zh").show();
    }
  });
</script>
<script>
  var swiper = new Swiper(".banner_en", {
  slidesPerView: 1,
  spaceBetween: 0,
  slidesPerGroup: 1,
  autoplay: {

    delay: 3500,

    disableOnInteraction: false,

  },

  loop: true,

  loopFillGroupWithBlank: true,

  pagination: {

    el: ".banner-pagination",

    clickable: true,

  },

  navigation: {

    nextEl: ".banner-button-next",

    prevEl: ".banner-button-prev",

  },

  observer: true,

  observeParents: true,

});

</script>
<script>
  var swiper = new Swiper(".banner_zh", {
  slidesPerView: 1,
  spaceBetween: 0,
  slidesPerGroup: 1,
  autoplay: {

    delay: 3500,

    disableOnInteraction: false,

  },

  loop: true,

  loopFillGroupWithBlank: true,

  pagination: {

    el: ".banner-pagination",

    clickable: true,

  },

  navigation: {

    nextEl: ".banner-button-next",

    prevEl: ".banner-button-prev",

  },

  observer: true,

  observeParents: true,

});

</script>


<main>

  <h1>About Us</h1>

  <div class="line"></div>

  <h2>AMOS is committed to becoming a world-class leader in providing Temporary Fluid Treatment and Emergency Security Solutions.<br>

    AMOS, Challenge the Surging World!</h2>

  <div class="H_aboutBox wrap wow slideInUp">

    <div class="video banner_en">

      <video poster="//hkimg.bjyyb.net/pt/35000/35446/v/5f6c0e2312089.jpg" controls="">

        <source src="https://vd.bjyyb.net/pt/35000/35446/v/5f6c0e2312089_800.mp4" type="video/mp4">

      </video>

    </div>
    
    
        <div class="video banner_zh">

      <video poster="https://img.bjyyb.net/pt/35000/35446/v/63b537738b86c.jpg" controls="">

        <source src="https://vd.bjyyb.net/pt/35000/35446/v/63b537738b86c_1920.mp4" type="video/mp4">

      </video>

    </div>
    

    <div class="aboutTxt">

      <div class="txt">
       <?php echo mb_strimwidth(get_page(10)->post_content,0,1000); ?>


        <!-- Anhui Amos Fluid Technology Co., Ltd. (AMOS) is an international, specialized and technology-oriented fluid equipment manufacturer and temporary fluid treatment solution provider. Its main products includes smart trailer mounted pump packages，integrated silent pump stations, well-point dewatering system, sewage water filtration system, multi-functional pick-up pump trucks, heavy-duty multi-functional pump trucks, multifunctional emergency fire-fighting master pump trucks as well as urban emergency drainage IIoT management system. Products and... -->

      </div>

      <div class="com_button"><a href="<?php echo get_permalink(10); ?>">More</a></div>

    </div>

  </div>

  <div class="H_productBox wow slideInUp">

    <h1>Hot Products</h1>

    <div class="line"></div>

    <ul class="pcontainer wrap">





    <?php query_posts('cat=10&showposts=4'); ?>

    <?php while (have_posts()) : the_post(); ?>

    <li>

      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">







      

        <div class="img_box">

          <div class="img">

            <?php

              $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);

              $produc_img =  $post_meta['produc_img'];

              $produc_img = explode( ',', $post_meta['produc_img'] );

              $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );

            ?>

            <img src="<?php echo $produc_img_src[0];?>" />

          </div>

        </div>

        <div class="img_txt">

          <?php the_title_attribute(); ?>

        </div>

        <div class="com_button">View More</div>

      </a>

    </li>

    <?php endwhile; wp_reset_query(); ?>











        <!-- <li>

          <a href="#">

            <div class="img_box">

              <div class="img">

                <img src="<?php bloginfo('template_url'); ?>/static/images/other/P_1.webp" alt="" />

              </div>

            </div>

            <p class="img_txt">

              CH85 Microwave Ovens Capacitor with TUV VED CQC Certifications

            </p>

            <div class="com_button">View More</div>

          </a>

        </li> -->

    </ul>

  </div>

  <div class="H_caseBox wow slideInUp">

    <h1>Project Cases</h1>

    <div class="line"></div>

    <ul>

      <li><p>Emergency Dewatering</p></li>

      <li><p>Emergency Rescue</p></li>

      <li><p>Filtration</p></li>

      <li><p>Well-point Dewatering</p></li>

    </ul>

    <div class="com_button"><a href="<?php echo get_permalink(14); ?>">View More</a></div>

  </div>

  <div class="H_contactBox wow slideInUp" id='contact'>

    <h1>Contact Us</h1>

    <div class="line"></div>

    <h2>If you have any questions about us, please feel free to contact us! </h2>

    <div class="c_container">

      <ul class="h_contact">

        <li>

          <h5>Address</h5>

          <p><?php echo xintheme('address'); ?></p>

        </li>

        <li>

          <a href="tel:<?php echo xintheme('phone1'); ?>">

            <h5>Tel</h5>

            <p><?php echo xintheme('phone1'); ?></p>

          </a>

        </li>

        <li>

          <h5>E-mail</h5>

          <p><?php echo xintheme('email1'); ?></p>

        </li>

        <li>

          <h5>Follow us</h5>

          <a href="<?php echo xintheme('consultation_youtube_url'); ?>">

            <img src="<?php bloginfo('template_url'); ?>/static/images/ico_YouTube.png" alt="">

            <span>YouTube</span>

          </a>

          <a href="<?php echo xintheme('consultation_linkedin_url'); ?>">

            <img src="<?php bloginfo('template_url'); ?>/static/images/ico_Linkedin.png" alt="">

            <span>Linkedin</span>

          </a>

        </li>

      </ul>

      <?php echo do_shortcode( ' [wpforms id="278"] ' ); ?>

    </div>

  </div>

  <div class="map">

    <?php echo do_shortcode( ' [simpleMapNoApi] ' ); ?>

  </div>

</main>







<!-- footer -->

<?php get_footer();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>



</body>

</html>

