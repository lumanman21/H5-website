<?php

get_header();

?>



<body>

<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>



<!-- banner -->

<div class="banner">

    <div class="swiper-container">

      <ul class="swiper-wrapper">

        <li class="swiper-slide">

            <video data-autoplay autoplay  src="<?php bloginfo('template_url'); ?>/static/videos/banner_v.mp4" muted="" class="pc-video" poster="video" webkit-playsinline="true" x-webkit-airplay="true" x5-playsinline="true" playsinline="true"></video>

        </li>

        <li class="swiper-slide">

          <img src="<?php bloginfo('template_url'); ?>/static/images/banner1.webp" />

          <div class="b_text1">
            <!-- <h2 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration=".5s" swiper-animate-delay=".3s">A Company <span>Leading the Future</span></h2> -->
            <h3 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s" swiper-animate-delay=".6s">
            Specialists in Storage & Packaging
              <!-- Along with green procurement, we continuously develop eco-friendly products that improve the quality of life, thereby realizing the management profits. -->
            </h3>
          </div>
          <!-- <div class="h_but_list">
            <a href="">more</a>
            <a href="">more</a>
            <a href="">more</a>
            <a href="">more</a>
          </div> -->

        </li>	

        <li class="swiper-slide">

          <img src="<?php bloginfo('template_url'); ?>/static/images/banner3.jpg" />

        </li>

        <li class="swiper-slide">

          <img src="<?php bloginfo('template_url'); ?>/static/images/banner1.webp" />

        </li>

      </ul>

      <div class="swiper-button-prev"></div>

      <div class="swiper-button-next"></div>        

      <div class="pagination-all"><div class="swiper-pagination"></div></div>

    </div>

</div>

<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>



<main>

  <div class="H_content1">

        <div class="left_txt wow slideInRight">

          <h1>About Us</h1>

          <div class="intro_txt">

            <?php echo mb_strimwidth(get_page(11)->post_content,0,500); ?>

          </div>

          <a href="<?php echo get_permalink(11); ?>" class="com_but" id="h_but">

            <p>More</p><i class="iconfont icon-shuangjiantouyou"></i>

          </a>

        </div>

        <div class="right_img wow slideInRight"><img src="<?php bloginfo('template_url'); ?>/static/images/H_1.webp" alt=""></div>

  </div>

  <div class="H_content2 wow slideInUp">

    <h1>Product Classification</h1>

    <div class="intro_txt">

      Huangshan Yuandian New Material Science and Technology Co., Ltd was established in October 2017, invested by Huangshan Yongjia Group. 

    </div>



    <!-- priduct_swiper -->

    <div class="i_partner wrap wow slideInUp">

        <div class="i_partner_list swiper-container">

            <ul class="swiper-wrapper">



              <?php

                $pterms=get_categories("child_of=2&parent=2&hide_empty=0&orderby=id&order=asc");

                

                foreach ($pterms as $pterm) {

                  $pposts = get_posts(array('cat' => $pterm->term_id, 'post_type' => 'post'));

                  $category_data = get_term_meta( $pterm->term_id, 'category_options', true );

                  $category_des = category_description($pterm->term_id);

                  echo '<li class="swiper-slide">';

                  echo '<a href="' . get_term_link($pterm) . '" title="'. $pterm->name .'">';

                  echo '<div class="img" id="img"><img src="'.$category_data['cat_slt2'].'" alt="'. $pterm->name .'"></div>';

                  echo '<div class="txt">';

                  echo '<h2>' . $pterm->name . '</h2>';

                  echo '<p>' . $category_des . '</p>';

                  echo '</div>';

                  echo '</a>';

                  echo '</li>';

                }

                unset($pterm);

              ?>





                <!-- <li class="swiper-slide">

                  <a href="#">

                    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/hp1.webp" alt=""></div>

                    <div class="txt">

                      <h2>ALUMINUM  FOIL BARRIER BAG</h2>

                      <p>

                        Aluminum Barrier Foil comprises of 3 to 4 layers of different materials. These materials bond together with adhesive or extruded polyethylene and derive their properties from a strong construction as outlined in the below diagram.

                      </p>

                    </div>

                  </a>

                </li>

                <li class="swiper-slide">

                  <a href="#">

                    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/hp2.webp" alt=""></div>

                    <div class="txt">

                      <h2>ALUMINUM  FOIL BARRIER BAG</h2>

                      <p>

                        Aluminum Barrier Foil comprises of 3 to 4 layers of different materials. These materials bond together with adhesive or extruded polyethylene and derive their properties from a strong construction as outlined in the below diagram.

                      </p>

                    </div>

                  </a>

                </li>

                <li class="swiper-slide">

                  <a href="#">

                    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/hp4.jpg" alt=""></div>

                    <div class="txt">

                      <h2>ALUMINUM  FOIL BARRIER BAG</h2>

                      <p>

                        Aluminum Barrier Foil comprises of 3 to 4 layers of different materials. These materials bond together with adhesive or extruded polyethylene and derive their properties from a strong construction as outlined in the below diagram.

                      </p>

                    </div>

                  </a>

                </li>

                <li class="swiper-slide">

                  <a href="#">

                    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/hp3.webp" alt=""></div>

                    <div class="txt">

                      <h2>ALUMINUM  FOIL BARRIER BAG</h2>

                      <p>

                        Aluminum Barrier Foil comprises of 3 to 4 layers of different materials. These materials bond together with adhesive or extruded polyethylene and derive their properties from a strong construction as outlined in the below diagram.

                      </p>

                    </div>

                  </a>

                </li> -->

            </ul>				

        </div>

        <div class="pt-pagination"></div>

        <div class="pt-button-next"></div>

        <div class="pt-button-prev"></div>

    </div>

    <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

    <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

    <script>

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

          slidesPerGroup: 1

          },

          960: {

          slidesPerView: 4,

          spaceBetween: 20,

          slidesPerGroup: 1

          },

        }

      });

    </script>



  </div>



  <div class="home_advantages">

    <!-- 切换按钮 -->

    <ul class="home_advantages_ul" id="tab_tit2">

      <li><img src="<?php bloginfo('template_url'); ?>/static/images/H_ico3.png" alt=""></li>

      <li><img src="<?php bloginfo('template_url'); ?>/static/images/H_ico2.png" alt=""></li>

      <li><img src="<?php bloginfo('template_url'); ?>/static/images/H_ico1.png" alt=""></li>

    </ul>

    <!-- 优势内容 -->

    <div  id="tab_cont2">

      <div class="sublist">

        <div class="home_advantages_area">

            <div class="home_area_text">

              <h1>IMPROVE LOAD STABILITY</h1>

              <i></i>

              <h2>

                Our products improve the transportation<br>safety of your goods

              </h2>

              <h3>

                Cooperation with the biggest wrapping machine manufacturer from EUROPE - Robopac and Atlanta, smooth cooperation for marketing model with combination of stretch film and wrapping machine enhance load stability solution provided.

              </h3>

            </div>

            <div class="home_area_img">

              <img src="<?php bloginfo('template_url'); ?>/static/images/h3.1.png" alt="">

            </div>

        </div>

      </div>



      <div class="sublist">

        <div class="home_advantages_area">

            <div class="home_area_text">

              <h1>TStretch hood</h1>

              <i></i>

              <h2>

                Provide different customized solutions and suggestions

              </h2>

              <h3>

              Safe and reliable logistics transportation The machine will measure the film length needs and sealing the film become a bag and the four arm will collect the complete bag from the sealing part.

              </h3>

            </div>

            <div class="home_area_img">

              <img src="<?php bloginfo('template_url'); ?>/static/images/h3.2.png" alt="">

            </div>

        </div>

      </div>

      <div class="sublist">

        <div class="home_advantages_area">

            <div class="home_area_text">

              <h1>55-layer Nano Stretch Film</h1>

              <i></i>

              <h2>

              Nano - layer technology of high 

              </h2>

              <h3>

                performance, energy - saving cast film Efficiency and cost saving；Stability, suitable for low temperature environment ；Environmental & User-Friendly 

              </h3>

            </div>

            <div class="home_area_img">

              <img src="<?php bloginfo('template_url'); ?>/static/images/h3.3.png" alt="">

            </div>

        </div>

      </div>

    </div>

  </div>


  <script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>

  <script>

    $("#tab_tit2").tabso({

      cntSelect:"#tab_cont2",

      tabEvent:"mouseover",

      tabStyle:"normal"

    });

  </script>



  <div class="H_content1 H_content3 wow slideInRight">

    <div class="left_txt wow slideInRight">

      <h6>CONTACT US</h6>

      <h1>Quotation Request</h1>

      <?php echo do_shortcode( ' [wpforms id="42"] ' ); ?>

    </div>

    <div class="right_img wow slideInRight form_img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_3.webp" alt=""></div>

  </div>

  

</main>







<!-- footer -->

<footer>

	<?php get_footer();?>

</footer>





</body>

</html>

