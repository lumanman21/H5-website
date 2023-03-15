<?php
/*
Template Name: cooperation
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="top_banner coo_banner">
  <img src="<?php bloginfo('template_url'); ?>/static/images/coo_banner.webp" alt="">
  <div class="txt">
    <h4 class="wow slideInUp">oem / odm COOPERATION</h4>
    <p class="wow slideInUp" data-wow-delay=".4s">We have a complete cooperation support system, <br>welcome your cooperation consultation.</p>
    <div class="img wow slideInUp" data-wow-delay=".5s"><img src="<?php bloginfo('template_url'); ?>/static/images/coo_banner_ico.png" alt=""></div>
  </div>
</div>

<div class="coo_gp delta_b">
  <p class="i_com_tit wow slideInUp">Global partners</p>
  <p class="txt wow slideInUp" data-wow-delay=".2s">Our products have been exported to more than 70 countries and districts in North<br> America, Europe, Southeast Asia and Middle East.</p>
  <div class="img wow slideInUp" data-wow-delay=".3s"><img src="<?php bloginfo('template_url'); ?>/static/images/coo_gp.webp" alt=""></div>
</div>

<div class="coo_wshop">
  <p class="i_com_tit wow slideInUp"> Production workshop<br>production line</p>
  <div class="coo_wbanner wow slideInUp" data-wow-delay=".3s">
    <div class="swiper-container">
        <ul class="swiper-wrapper">

        <?php
              $work_line = xintheme('work_line');
              if($work_line){
              foreach($work_line as $value):
            ?>
            <li class="swiper-slide">
              <div class="img"><img src="<?php echo $value['workshop_img'] ?>" alt=""></div>
              <p><?php echo $value['workshop_txt'] ?></p>
            </li>
            <?php endforeach; } ?>

          
          <!-- <li class="swiper-slide">
            <div class="img"><img src="static/images/other/ws1.webp" /></div>
            <p>Production line</p>
          </li> -->
        </ul>
        <!-- <div class="banner-button-prev"></div> -->
        <div class="banner-button-next">next</div>
        <div class="banner-pagination"></div>
    </div>
  </div>
  <script>
    var banner_swiper = new Swiper('.coo_wbanner .swiper-container',{
      speed: 600,
      loop:true,
      // autoplay: {
      // 	delay: 4000,
      // 	stopOnLastSlide: false,
      // 	disableOnInteraction: false,
      // },
      navigation: {
        nextEl: '.coo_wbanner .banner-button-next',
        prevEl: '.coo_wbanner .banner-button-prev',
      },
      pagination: {
        el: '.coo_wbanner .banner-pagination',
        clickable: true,
      },
      centeredSlides: true,
      breakpoints: {
          0: {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 2,
          },
          1201: {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 1,
          },
        },
    });
  </script>

  <div class="txt wrap wow slideInUp">
    <p> 
      Welcome to <span>leave a message</span> to learn about cooperation information. 
      <br>We are always waiting for your consultation.
    </p>
    <a href="javascript:;" class="com_but" onClick="asfrom()"><span>Submit</span></a>
  </div>
</div>







<?php get_footer(); ?>


</body>
</html>