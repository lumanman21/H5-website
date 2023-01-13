<?php

/*

Template Name: About Us

*/

get_header();?>



   

<body>
<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>



<main>

<!-- top_content -->

<div class="about_banner">

  <img class="about_img" src="<?php bloginfo('template_url'); ?>/static/images/A_bc.webp" alt="">

  <div class="about_banner_text">

      <h1>about</h1>

      <!-- in_position -->

      <div class="in_position">

            <div class="container">

            <?php echo in_breadcrumbs(); ?>

            </div>

        </div>

  </div>

</div>

  <ul class="a_value wrap wow slideInUp">

      <li>

          <h3>Values</h3>

          <p>Integrity, practicality, execution, efficiency.</p>

      </li>

      <li>

          <h3>Version</h3>

          <p>Be a leading vendor for innovative packaging items solutions.</p>

      </li>

      <li>

          <h3>Mission</h3>

          <p>Itelligent Creation for Storage and transit packaging.</p>

      </li>

  </ul>

    <div class="H_content1 A_conten1">

        <div class="left_txt wow slideInRight">

          <h1>About Us</h1>

          <div class="intro_txt">

            <?php the_content(); ?>

          </div>

          <a href="<?php echo get_permalink(20); ?>" class="com_but" id="h_but">

            <p>HISTORY</p>

          </a>

        </div>

        <div class="right_img wow slideInRight">

          <!-- <img src="<?php bloginfo('template_url'); ?>/static/images/H_1.webp" alt=""> -->

          <video src="<?php bloginfo('template_url'); ?>/static/videos/yd_2022112393513.mp4" muted="muted" controls="controls" loop="loop"></video>

        </div>

    </div>

    <div class="A_content2 wow slideInUp">

        <h1>Gallery of Our Factory</h1>

        <div class="intro_txt">

            Yuandian own the advantage of talents, technology and equipment to integrate industrial chain resource. Focusing on development and production for transport packaging to help transform of intelligent manufacturing. 

        </div>

        <div class="f_partner wrap wow slideInUp">

          <div class="f_partner_list swiper-container">

              <ul class="swiper-wrapper" id="factory_list">

                <?php get_template_part( 'template-parts/factory'); ?>

                  

              </ul>				

          </div>

          <div class="fpt-pagination"></div>

          <div class="fpt-button-next left_but"></div>

          <div class="fpt-button-prev right_but"></div>

        </div>

        <div class="f_partner wrap wow slideInUp">

          <div class="f_partner_list swiper-container">

              <ul class="swiper-wrapper" id="factory_list">

                <?php get_template_part( 'template-parts/factory2'); ?>

              </ul>				

          </div>

          <div class="fpt-pagination"></div>

          <div class="fpt-button-next"></div>

          <div class="fpt-button-prev"></div>

        </div>

        <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

        <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

        <script>

          var pswiper = new Swiper('.f_partner_list', {

          loop: true,

          loopFillGroupWithBlank: true,

          navigation: {

            nextEl: '.fpt-button-next',

            prevEl: '.fpt-button-prev',

          },

          // pagination: {

          //   el: '.fpt-pagination',

          //   clickable: true,

          // },

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

            slidesPerGroup: 1

            },

            560: {

            slidesPerView: 2,

            spaceBetween: 20,

            slidesPerGroup: 1

            },

            960: {

            slidesPerView: 3,

            spaceBetween: 30,

            slidesPerGroup: 1

            },

          }

        });

        /*查看大图*/

        var image = new Viewer(document.getElementById('factory_list'), {

          button: true,

          navbar: false,

          width: 800,

          title: true

        });

        </script>

    

        

    </div>

    <div class="A_content3 wow slideInUp">

        <h1>Our advantages</h1>

        <div class="intro_txt">

            Yuandian own the advantage of talents, technology and equipment to integrate industrial chain resource. Focusing on development and production for transport packaging to help transform of intelligent manufacturing. 

        </div>

        <ul class="ad_list wrap wow slideInUp" id="ad_list">

            <?php get_template_part( 'template-parts/advantage'); ?>

        </ul>

        <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

        <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

        <script>

          /*查看大图*/

          var image = new Viewer(document.getElementById('ad_list'), {

            button: true,

            navbar: false,

            width: 800,

            title: true

          });

        </script>

    </div>

    <div class="A_content2 wow slideInUp">

      <h1>Core advantages</h1>

      <div class="intro_txt">

        Huangshan Yuandian New Material Science and Technology Co., Ltd was established in October 2017, invested by Huangshan Yongjia Group. 

      </div>



      <!-- honor_swiper -->

      <div class="h_partner wrap wow slideInUp">

        <div class="h_partner_list swiper-container">

            <ul class="swiper-wrapper" id="honor_list">

               <?php get_template_part( 'template-parts/honor'); ?>

            </ul>				

        </div>

        <div class="pt-pagination"></div>

        <div class="pt-button-next"></div>

        <div class="pt-button-prev"></div>

      </div>

      <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

      <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

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

            slidesPerGroup: 1

            },

            560: {

            slidesPerView: 2,

            spaceBetween: 20,

            slidesPerGroup: 1

            },

            960: {

            slidesPerView: 2,

            spaceBetween: 30,

            slidesPerGroup: 1

            },

          }

      });

      /*查看大图*/



      var image = new Viewer(document.getElementById('honor_list'), {

        button: true,

        navbar: false,

        width: 800,

        title: true

      });

      

      </script>

    </div>

</main>









<!-- footer -->

<?php get_footer();?>







</body>

</html>