<?php

/*

Template Name: About Us

*/

get_header();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>



<body>

<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>



<div class="top_content">

  <img src="<?php bloginfo('template_url'); ?>/static/images/a_banner.webp" alt="">

</div>

<!-- in_position -->

<div class="in_position">

  <div class="wrap container">

    <?php echo in_breadcrumbs(); ?>

  </div>

</div>



<main>



  <div class="aboutBox wrap wow slideInUp">

    <div class="img">

      <img src="<?php bloginfo('template_url'); ?>/static/images/a1.webp" alt="">

    </div>

    <div class="aboutTxt">

      <h3>Anhui Amos Fluid Technology Co., Ltd.</h3>

      <div class="txt">

        <?php the_content(); ?>

      </div>

    </div>

    <div class="aboutTxt">

      <div class="txt">

        After over 15 years of growth, AMOS gained strong R&D abilities in design, manufacturing and engineering applications of advanced fluid equipment and systems . Today, its main products includes smart trailer mounted pump packages，integrated silent pump stations, well-point dewatering system, sewage water filtration system, multi-functional pick-up pump trucks, heavy-duty multi-functional pump trucks, multifunctional emergency fire-fighting master pump trucks as well as urban emergency drainage IIoT management system. Products and technologies are widely used in emergency water drainage, emergency fire-fighting, emergency by-pass, lift-station emergency back-up system, groundwater level control, modern agriculture irrigation, mining, shale oil & gas exploitation, sewage treatment and water environment treatment, as well as traditional pump markets.

      </div>

    </div>

    <div class="img">

      <img src="<?php bloginfo('template_url'); ?>/static/images/a2.webp" alt="">

    </div>

  </div>



  <div class="a_video wow slideInUp banner_en">

    <video poster="//hkimg.bjyyb.net/pt/35000/35446/v/5f6c0e2312089.jpg" controls="">

      <source src="https://vd.bjyyb.net/pt/35000/35446/v/5f6c0e2312089_800.mp4" type="video/mp4">

    </video>

  </div>
  
  
    <div class="a_video wow slideInUp banner_zh">

    <video poster="https://img.bjyyb.net/pt/35000/35446/v/63b537738b86c.jpg" controls="">

      <source src="https://vd.bjyyb.net/pt/35000/35446/v/63b537738b86c_1920.mp4" type="video/mp4">

    </video>

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




  <div class="a_culture wow slideInUp" id='culture'>

    <h3>Company Culture</h3>

    <ul class="culture_txt wrap">

      <li>

        <p class="tit">Mission</p>

        <p class="txt">AMOS is committed to becoming a world-class leader in temporary fluid treatment and emergency rescue solutions</p>

      </li>

      <li>

        <p class="tit">Vision</p>

        <p class="txt">Establish a respected company</p>

      </li>

      <li>

        <p class="tit">Value</p>

        <p class="txt">Integrity I innovation I responsibility</p>

      </li>

      <li>

        <p class="tit">Slogan</p>

        <p class="txt">Challenge the Surging World !</p>

      </li>

    </ul>

  </div>





  <!-- history_swiper -->

  <div class="h_partner wrap wow slideInUp" id='history'>

    <h3>Company History</h3>

    <div class="h_partner_list swiper-container">

        <ul class="swiper-wrapper">

          <?php get_template_part( 'template-parts/history'); ?>

        </ul>				

    </div>

    <div class="pt-pagination"></div>

    <div class="pt-button-next"></div>

    <div class="pt-button-prev"></div>

  </div>

  <script>

    var pswiper = new Swiper('.h_partner_list', {

    loop: true,

    loopFillGroupWithBlank: true,

    navigation: {

      nextEl: '.pt-button-next',

      prevEl: '.pt-button-prev',

    },

    pagination: {

      el: '.pt-pagination',

      clickable: true,

    },

    // autoplay: {

    //   delay: 3500,

    //   disableOnInteraction: false,

    // },

    observer: true,

    observeParents: true,

    breakpoints: {

      0: {

      slidesPerView: 1,

      spaceBetween: 20,

      slidesPerGroup: 1

      },

      560: {

      slidesPerView: 2,

      spaceBetween: 20,

      slidesPerGroup: 2

      },

      960: {

      slidesPerView: 4,

      spaceBetween: 30,

      slidesPerGroup: 4

      },

    }

    });

  </script>
  <div class="wrap wow slideInUp"><?php echo do_shortcode( ' [wpforms id="41"] ' ); ?></div>
</main>











<!-- footer -->

<?php get_footer();?>





<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>





</body>

</html>