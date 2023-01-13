<?php

/*

Template Name: About Us

*/

get_header();?>



    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/swiper.min.css">

    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>





<body>

<?php echo xintheme('foot_code');?>





<!-- header -->

<?php get_template_part('top') ?>





<div class="top_banner a_banner">

  <img src="<?php bloginfo('template_url'); ?>/static/images/a_banner.webp" alt="" />

  <div class="txt">

    <h2>more than <span>black</span></h2>

    <h3>Use advanced oxidiation treatment technology ,explore the potential of carbon black ,Bloom the beauty of black</h3>

  </div>

</div>



<main class="n_main">

  <!-- in_position -->

  <div class="in_position">

    <div class="wrap container">

    <?php echo in_breadcrumbs(); ?>

    </div>

  </div>



  <div class="a_contentBox1">

    <div class="a_content1 wow slideInRight">

      <div class="l_box">

        <h2>Anhui Dery Material Science Co., Ltd.</h2>

        <div class="intro">

          <?php the_content(); ?>

        </div>

      </div>

      <div class="r_box">

        <div class="img">

          <img src="<?php bloginfo('template_url'); ?>/static/images/a1.webp" alt="" />

        </div>

      </div>

    </div>

  </div>



  <!-- factory——swiper -->

  <div class="a_contentBox2">

    <div class="a_content2 wow slideInRight">

      <div class="f_partner_list swiper-container">

        <ul class="swiper-wrapper" id="factory_list">

          <?php get_template_part( 'template-parts/factory'); ?>

        </ul>

      </div>

      <!-- <div class="fpt-pagination"></div>

    <div class="fpt-button-next"></div>

    <div class="fpt-button-prev"></div> -->

    </div>

    <link

      href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css"

      rel="stylesheet"

      type="text/css"

    />

    <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

    <script>

      var pswiper = new Swiper(".f_partner_list", {

        loop: true,

        loopFillGroupWithBlank: true,

        navigation: {

          nextEl: ".fpt-button-next",

          prevEl: ".fpt-button-prev",

        },

        pagination: {

          el: ".fpt-pagination",

          clickable: true,

        },

        autoplay: {

          delay: 3500,

          disableOnInteraction: false,

        },

        observer: true,

        observeParents: true,

        breakpoints: {

          0: {

            slidesPerView: 1,

            spaceBetween: 20,

            slidesPerGroup: 1,

          },

          560: {

            slidesPerView: 3.5,

            spaceBetween: 20,

            slidesPerGroup: 1,

          },

          960: {

            slidesPerView: 3.5,

            spaceBetween: 30,

            slidesPerGroup: 1,

          },

        },

      });

      /*查看大图*/

      var image = new Viewer(document.getElementById("factory_list"), {

        button: true,

        navbar: false,

        width: 660,

        title: true,

      });

    </script>

  </div>



  <div class="com_tit">

    <div class="tit_bc">Development History</div>

    <h1>Development History</h1>

    <div class="line"></div>

    <div class="liner"></div>

  </div>

  <!-- history-swiper -->

  <div class="in_history_list wrap wow slideInUp">

    <div class="in_honor_year">

      <div class="swiper-container gallery_thumbs">

        <div class="swiper-wrapper">

          <?php get_template_part( 'template-parts/history'); ?>

        </div>

      </div>

      <div class="history-button-prev"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_hpl_left.png" alt=""></div>

      <div class="history-button-next"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_hpl_right.png" alt=""></div>

    </div>

    <div class="swiper-container gallery_top">

      <div class="swiper-wrapper">

        <?php get_template_part( 'template-parts/history_event'); ?>

      </div>

    </div>

    

  </div>

  </div>

  <script>

    var galleryThumbs = new Swiper('.gallery_thumbs', {

      spaceBetween: 0,

      slidesPerGroup: 1,

      freeMode: false,

      watchSlidesVisibility: true,

      watchSlidesProgress: true,

      breakpoints: {

        0: {

          slidesPerView: 3,

        },

        1025: {

          slidesPerView: 4,

        }

      }

    });

    var galleryTop = new Swiper('.gallery_top', {

      spaceBetween: 10,

      thumbs: {

        swiper: galleryThumbs

      },

      navigation: {

        nextEl: '.history-button-next',

        prevEl: '.history-button-prev',

      },

    });

  </script>





    <!-- value -->

    <div class="value_List">

      <ul class="wrap">

        <li class="wow slideInLeft">

          <div class="img">

            <img src="<?php bloginfo('template_url'); ?>/static/images/value_1.png" alt="" />

            <div class="kong"></div>

          </div>

          <h2>Vision</h2>

          <p>

          Dery is committed to becoming the world’s first-class system solution provider for specialty pigment carbon black.

          </p>

        </li>

        <li class="wow slideInUp">

          <div class="img">

            <img src="<?php bloginfo('template_url'); ?>/static/images/value_2.png" alt="" />

            <div class="kong"></div>

          </div>

          <h2>Mission</h2>

          <p>

          Actively explore advanced technology of specialty pigment carbon black, Make due contributions for the development of specialty pigment carbon black industry of china.

          </p>

        </li>

        <li class="wow slideInRight">

          <div class="img">

            <img src="<?php bloginfo('template_url'); ?>/static/images/value_3.png" alt="" />

            <div class="kong"></div>

          </div>

          <h2>Values</h2>

          <p>

            Concentration brings professional achievements

          </p>

        </li>

      </ul>

    </div>



    <div class="com_tit">

      <div class="tit_bc">Certification of Qualification</div>

      <h1>Certification of Qualification</h1>

      <div class="line"></div>

      <div class="liner"></div>

    </div>

    <!-- certify -->

    <div class="certifyBox wrap wow slideInUp">

      <div class="c_partner_box">

        <div class="c_partner">

          <div class="c_partner_list swiper-container">

            <ul class="swiper-wrapper" id="certy_list">

              <?php get_template_part( 'template-parts/certify'); ?>

            </ul>

          </div>

          <div class="cpt-pagination"></div>

          <div class="cpt-button-prev">

            <img src="<?php bloginfo('template_url'); ?>/static/images/ico_hpl_right.png" alt="" />

          </div>

          <div class="cpt-button-next">

            <img src="<?php bloginfo('template_url'); ?>/static/images/ico_hpl_left.png" alt="" />

          </div>

        </div>

        <link

          href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css"

          rel="stylesheet"

          type="text/css"

        />

        <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

        <script>

          var pswiper = new Swiper(".c_partner_list", {

            loop: true,

            loopFillGroupWithBlank: true,

            navigation: {

              nextEl: ".cpt-button-prev",

              prevEl: ".cpt-button-next",

            },

            pagination: {

              el: ".cpt-pagination",

              clickable: true,

            },

            autoplay: {

              delay: 2500,

              disableOnInteraction: true,

            },

            observer: true,

            observeParents: true,

            breakpoints: {

              0: {

                slidesPerView: 1,

                spaceBetween: 10,

                slidesPerGroup: 1,

              },

              560: {

                slidesPerView: 2,

                spaceBetween: 20,

                slidesPerGroup: 1,

              },

              960: {

                slidesPerView: 4,

                spaceBetween: 20,

                slidesPerGroup: 1,

              },

              1200: {

                slidesPerView: 4,

                spaceBetween: 30,

                slidesPerGroup: 1,

              },

            },

          });

          var image = new Viewer(document.getElementById("certy_list"), {

            button: true,

            navbar: false,

            width: 660,

            title: true,

          });

        </script>

      </div>

    </div>

</main>

<div class="bottom_form wow slideInUp">

  <div class="com_tit">

    <div class="tit_bc">Contact us for a quote</div>

    <h1>Contact us for a quote</h1>

    <div class="line"></div>

    <div class="liner"></div>

  </div>

  <?php echo do_shortcode( ' [wpforms id="22"] ' ); ?>

</div>









<!-- footer -->

<?php get_footer();?>









</body>

</html>