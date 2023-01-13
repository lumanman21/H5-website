<?php

get_header();

?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/swiper.min.css">

    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>



<body>

<?php echo xintheme('foot_code');?>





<!-- header -->

<?php get_template_part('top') ?>



<!-- banner -->

<div class="i_banner">

  <div class="i_banner_list">

    <ul class="swiper-wrapper">

      <li class="swiper-slide">

        <div class="img">

          <img src="<?php bloginfo('template_url'); ?>/static/images/banner1.webp" alt="">

        </div>

        <div class="atxt">

          <p><span>CARBONBLACK</span><span>RETROFITTER</span></p>

          <p>- ANHUI DERY</p>

        </div>

      </li>

      <li class="swiper-slide">

        <div class="img">

          <img src="<?php bloginfo('template_url'); ?>/static/images/banner3.webp" alt="">

        </div>

        <div class="btxt">

          <h2><span>RUBBER CARBON BLACK</span></h2>

          <p>Provide a full range of carbon black with excellent performance.</p>

        </div>

      </li>

      <li class="swiper-slide">

        <div class="img">

          <img src="<?php bloginfo('template_url'); ?>/static/images/banner2.webp" alt="">

        </div>

        <div class="ctxt">

          <h2><span>MORE THEN BLACK </span></h2>

          <p>Provide specialty pigment carbon black widely used in coating, ink,plastic,leather industries etc..</p>

        </div>

      </li>

    </ul>

  </div>

  <div class="banner-pagination"></div>

  <div class="banner-button-prev">&lt;</div>

  <div class="banner-button-next">&gt;</div>

  <ul class="banner_list">

    <li><a href="<?php echo get_permalink(5); ?>">

        <h5>About Us</h5>

        <div class="ico_line"></div>

      </a></li>

      <li><a href="<?php echo get_category_link(3); ?>">

        <h5>Application</h5>

        <div class="ico_line"></div>

      </a></li>

      <li><a href="/category/products-application/#box_b">

        <h5>special pigment carbon black</h5>

        <div class="ico_line"></div>

      </a></li>

      <li><a href="<?php echo get_permalink(7); ?>">

        <h5>contact us</h5>

        <div class="ico_line"></div>

      </a></li>

  </ul>

</div>

<script>

  var swiper = new Swiper(".i_banner_list", {

  slidesPerView: 1,

  spaceBetween: 0,

  slidesPerGroup: 1,

  // autoplay: {

  //   delay: 3500,

  //   disableOnInteraction: false,

  // },

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

  <div class="com_tit">

    <div class="tit_bc">Who we are</div>

    <h1>Who we are</h1>

    <div class="line"></div>

    <div class="liner"></div>

  </div>

  <div class="h_aboutBox">

    <div class="h_about wow slideInRight">

      <div class="bottom">

        <img src="<?php bloginfo('template_url'); ?>/static/images/ha2.jpg" alt="">

      </div>

      <div class="top">

        <img src="<?php bloginfo('template_url'); ?>/static/images/ha1.jpg" alt="">

      </div>

      <div class="left_img">

        <p>about us</p>

        <div class="h_line"></div>

      </div>

      <div class="right_txt">

        <h2>Anhui Dery Material Science Co., Ltd. </h2>

        <h3>Company introduction: </h3>

        <div class="txt">

          <?php echo mb_strimwidth(get_page(5)->post_content,0,10000); ?>

         </div>

        <div class="ha_button">

          <a href="<?php echo get_permalink(5); ?>"><p>See more</p></a>

          <a href="<?php echo get_category_link(3); ?>"><p>Product List</p></a>

        </div>

      </div>

    </div>

  </div>

  <ul class="h_about_list wrap wow slideInUp">

    <li>

      <h3><span class="one roll_num">18000</span></h3>

      <h4>Factory cover an area</h4>

    </li>

    <li>

      <h3><span class="two roll_num">20000</span></h3>

      <h4>Annual output</h4>

      

    </li>

    <li>

      <h3><span class="third roll_num">15000000</span></h3>

      <h4>Annual sales：15 million U.S. dollar.</h4>

    </li>

    <li>

      <h3><span class="fore roll_num">50</span></h3>

      <h4>Export to 50+ countries and regions.</h4>

    </li>

  </ul>

  <script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>

  <script>$('.roll_num').countUp();</script>

  <!-- product_line -->

  <div class="h_plBox">

    <img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" alt="" class="bc">

    <div class="h_pl_box">

      <div class="h_pl_left wow slideInLeft">

        <div class="h_pl_tit">

          <p>Product line</p>

          <p>Dery provide full range of <span>CARBON BLACK</span> products including rubber carbon black, specialty pigment carbon black, after-treatment carbon black and water-based liquid black.</p>

        </div>

        <div class="pro_slt">

          <div class="swiper-container gallery-thumbs">

            <div class="swiper-wrapper">

              <?php get_template_part( 'template-parts/product'); ?>

            </div>
            <script>
              $(".pro_slt .txt p").each(function(){
                        var txt = $(this);
                        if($(txt).text() == ""){
                                $(this).remove();
                        }
                });
            </script>

          </div>

          

        </div>

      </div>

      <div class="h_pl_right wow slideInRight">

        <div class="products_pic_list">

          <div class="swiper-container gallery-top">

            <div class="swiper-wrapper" id="gallery-top">

              <?php get_template_part( 'template-parts/product_img'); ?>

              <!-- <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/hpl1.webp" /></div>

              <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/hpl2.webp" /></div> -->

              

            </div>

            

            <div class="ppl-button">

              <div class="ppl-button-prev"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_hpl_left.png" alt=""></div>

              <div class="ppl-pagination"></div>

              <div class="ppl-button-next"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_hpl_right.png" alt=""></div>

            </div>

          </div>

        </div>

       

      </div>











    </div>

  </div>

  <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

  <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>



  <script>

    $(".products_pic_list .swiper-slide").each(function(){

      var src = $(this).find("img").attr("src");    // 获取图片路径 为空则移除整个swiper-slide

      if(src == ""){

        $(this).remove();

      }

    });

    var galleryThumbs = new Swiper('.gallery-thumbs', {

      slidesPerView: 1,

      spaceBetween: 10,

      freeMode: false,

      watchSlidesVisibility: true,

      watchSlidesProgress: true,

      

    });

    var galleryTop = new Swiper('.gallery-top', {

      slidesPerView: 1,

      spaceBetween: 0,

      thumbs: {

        swiper: galleryThumbs

      },

      navigation: {

        nextEl: '.ppl-button-next',

        prevEl: '.ppl-button-prev',

      },

      pagination: {

          el: ".ppl-pagination",

          type: "fraction",

      },

    });

    /*查看大图*/

    var image = new Viewer(document.getElementById('gallery-top'), {

      button: true,

      navbar: false,

      width: 660,

      title: false,

    });

  </script>



  <!-- partner -->

  <div class="h_partenr">

    <div class="com_tit">

      <div class="tit_bc">Long term partners</div>

      <h1>Long-term partners</h1>

      <div class="line"></div>

      <div class="liner"></div>

    </div>

    <div class="i_partner_box box_mg wrap wow slideInUp">

      <div class="i_partner">

        <div class="i_partner_list swiper-container">

          <ul class="swiper-wrapper">

            <?php get_template_part( 'template-parts/partner'); ?>

          </ul>				

        </div>

        <div class="pt-pagination"></div>

        <div class="pt-button-next"></div>

        <div class="pt-button-prev"></div>

      </div>

    </div>

    <script>

      // 首页 合作伙伴滚动

      var pswiper = new Swiper('.i_partner_list', {

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

        autoplay: {

          delay: 1000,

          disableOnInteraction: true,

        },

        observer: true,

        observeParents: true,

        breakpoints: {

          0: {

          slidesPerView: 3,

          spaceBetween: 20,

          slidesPerGroup: 1

          },

          768: {

          slidesPerView: 4,

          spaceBetween: 20,

          slidesPerGroup: 1

          },

          1200: {

          slidesPerView: 6,

          spaceBetween: 30,

          slidesPerGroup: 1

          }

        }

      });

      $('.i_factory_list').hover(function(){

        pswiper.autoplay.stop();

      },function(){

        pswiper.autoplay.start();

      });

    </script>

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









<!-- footer -->

<?php get_footer();?>



</body>

</html>

