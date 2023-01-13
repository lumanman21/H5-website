<?php

/*

Template Name: Rent

*/

get_header();?>

   

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>



<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>



<div class="top_content">

  <img src="static/images/r_banner.webp" alt="">

</div>

<!-- in_position -->

<div class="in_position">

  <div class="wrap container">

    <?php echo in_breadcrumbs(); ?>

  </div>

</div>

<main>

    <div class="rentBox wrap wow slideInUp">

        <h3>Rental Service</h3>

        <h2>

            The full range of pump trucks and pumping station products of AMOS can be leased on a monthly or annual basis. If the leaser continuously leases the same equipment and the accumulated rental cost reaches the price of the equipment, the equipment can be purchased at an additional one dollar. For specific lease matters, please contact AMOS.

        </h2>

        

    </div>



    <div class="more_product rent_p wrap wow slideInUp">

      <!-- more_shoes -->

      <div class="PD_partner_box">

        <div class="PD_partner">

          <div class="PD_partner_list swiper-container">

              <ul class="swiper-wrapper">

                  <li class="swiper-slide">

                      <a href="#">

                          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" alt=""></div>

                          <p>Other type of pumps</p>

                          <div class="com_button">View More</div>

                      </a>

                  </li>

                  <li class="swiper-slide">

                      <a href="#">

                          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_3.webp" alt=""></div>

                          <p>Other type of pumps</p>

                          <div class="com_button">View More</div>

                      </a>

                  </li>

                  <li class="swiper-slide">

                      <a href="#">

                          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_3.webp" alt=""></div>

                          <p>Other type of pumps</p>

                          <div class="com_button">View More</div>

                      </a>

                  </li>

                  <li class="swiper-slide">

                      <a href="#">

                          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" alt=""></div>

                          <p>Other type of pumps</p>

                          <div class="com_button">View More</div>

                      </a>

                  </li>

              </ul>				

          </div>

          <div class="pt-pagination"></div>

          <div class="pt-button-next"></div>

          <div class="pt-button-prev"></div>

        </div>

      </div>

    </div>

    <script>

        //more_shoe_swiper

        var pswiper = new Swiper('.PD_partner_list', {

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

            slidesPerView: 2,

            spaceBetween: 20,

            slidesPerGroup: 2

            },

            960: {

            slidesPerView: 4,

            spaceBetween: 20,

            slidesPerGroup: 4

            },

            1200: {

            slidesPerView: 4,

            spaceBetween: 20,

            slidesPerGroup: 2

            }

        }

        });

    </script>



</main>











<!-- footer -->

<?php get_footer();?>





<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>





</body>

</html>