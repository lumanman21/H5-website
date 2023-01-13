<?php

get_header();

?>



<body>
<?php echo xintheme('foot_code');?>


<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/animate.min.css" />

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>



<!-- header -->

<?php get_template_part('top') ?>







<!-- banner -->

<div class="i_banner H_siwper">

  <div class="i_banner_list">

    <div class="swiper-wrapper">

      <div class="swiper-slide aswiper">

        <div class="atxt">

          <h1><span>Year</span><span>16</span></h1>

          <h2>Focus on Capacitor Manufacturing</h2>

          <a href="/" class="co_button">View More</a>

        </div>

      </div>

      <div class="swiper-slide bswiper">

        <div class="btxt">

          <h1>To be a world-class</h1>

          <h2>capacitor manufacturer</h2>

          <a href="<?php echo get_permalink(25); ?>" class="co_button">View More</a>

        </div>

      </div>

      <div class="swiper-slide cswiper">

        <div class="ctxt">

          <h1>Our products sell well in 68 countries</h1>

          <h2>agent area to break through 40</h2>

          <a href="<?php echo get_category_link(4); ?>" class="co_button">View More</a>

        </div>

      </div>

    </div>

  </div>

  <div class="banner-pagination"></div>

  <div class="banner-button-prev">&lt;</div>

  <div class="banner-button-next">&gt;</div>

</div>





<!-- H_content1 -->

<div class="H_content1">

  <p class="com_tit wow slideInUp">FEATURED PRODUCTS</p>

  <div class="com_imgtit  wow slideInUp">

    <img src="<?php bloginfo('template_url'); ?>/static/images/bcg_title.png" alt="" />

  </div>

  <ul class="menu_list wrap  wow slideInUp">

    <!-- <li><a href="single.html">CBB65 AC Motor Capacitor</a></li>

    <li><a href="single.html">CBB60 Pump Capacitor</a></li>

    <li><a href="single.html">CBB61 Fan Capacitor</a></li>

    <li><a href="single.html">CH85 Microwave Oven Capacitor</a></li>

    <li><a href="single.html">CD60 Starting Capacitor</a></li>

    <li><a href="single.html">Reticulate-MPP Capacitor</a></li> -->



    <?php $loop_cate_id=array(6,12,18,11,9,15,10,7,8); ?>

    <?php foreach($loop_cate_id as $value){  ?>

    <?php $category_data = get_term_meta( $value, 'category_options', true ); ?>

            <li>

              <a href="<?php echo get_category_link($value); ?>">

                <?php echo get_cat_name($value); ?>

              </a> 

            </li>

    <?php } ?>

    

  </ul>

  <div class="introduce wrap  wow slideInUp">

    Capacitors are commonly used in electronic circuits to block direct

    current and allow alternating current to flow through the capacitor. In

    analog filter circuits, capacitors smooth the output of a power supply.

    Capacitors and inductors in LC circuits can tune the radio to specific

    frequencies. In the transmission system, the flow of voltage and power

    can be stabilized.

  </div>

  <ul class="img_container wrap  wow slideInUp">



    <?php query_posts('cat=4&showposts=8'); ?>

      <?php while (have_posts()) : the_post(); ?>

        <li>

          <a href="<?php the_permalink(); ?>">

            <div class="img_box">

              <div class="img">

                <?php if ( has_post_thumbnail()):?>

                <?php the_post_thumbnail( 'full-post-thumb'); ?>

                <?php else : ?>

                <img src="<?php echo catch_that_image() ?>"/> 

                <?php  endif; ?>

              </div>

            </div>

            <p class="img_txt"><?php the_title_attribute(); ?></p>



          </a>

        </li>

      <?php endwhile; wp_reset_query(); ?>



   

    

  </ul>

  <div class="H1_but  wow slideInUp">

    <a href="<?php echo get_category_link(4); ?>" class="co_button c_but">View More</a>

  </div>

</div>



<!-- H_content2 -->

<div class="H_content2 wow slideInUp">

  <div class="text_box wrap">

    <h1>WHO WE ARE</h1>

    <h2>Since 2006</h2>

    <div class="line"></div>

    <p class="txt">

      <?php echo mb_strimwidth(get_page(38)->post_content,0,900); ?>......

      

    </p>

    <ul class="diamond_box">

      <li class="diamond">

        <i></i>

        <p>Quality-oriented</p>

      </li>

      <li class="diamond">

        <i></i>

        <p>Large Stock</p>

      </li>

      <li class="diamond">

        <i></i>

        <p>Professional Team</p>

      </li>

      <li class="diamond">

        <i></i>

        <p>Attentive Service(24 hour online)</p>

      </li>

    </ul>

    <div class="H2_but">

      <a href="<?php echo get_permalink(38); ?>" class="co_button">View More</a>

    </div>

  </div>

</div>



<!-- H_content3 -->

<div class="H_content3">

  <p class="com_tit">CERTIFICATE</p>

  <div class="com_imgtit">

    <img src="<?php bloginfo('template_url'); ?>/static/images/bcg_title.png" alt="" />

  </div>

  <!-- 轮播图 -->

  <div class="in_honor wrap box_mg">

    <div id="certify">

      <div class="swiper-container">

        <div class="swiper-wrapper" id="honor_list">

          <?php get_template_part( 'template-parts/certify'); ?>

        </div>

      </div>

      <!-- <div class="honor-pagination"></div> -->

      <div class="honor-button-prev"></div>

      <div class="honor-button-next"></div>

    </div>

  </div>
  <div class="in_honor wrap box_mg">

    <div id="certify2">

      <div class="swiper-container">

        <div class="swiper-wrapper" id="honor2_list">

          <?php get_template_part( 'template-parts/certify2'); ?>

        </div>

      </div>

      <!-- <div class="honor-pagination"></div> -->

      <div class="honor2-button-prev"></div>

      <div class="honor2-button-next"></div>

    </div>

  </div>

  <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

  <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

  <script>

    /*查看大图*/

    var image = new Viewer(document.getElementById('honor_list'), {

      button: true,

      navbar: false,

      width: 660,

      title: false

    });
    var image2 = new Viewer(document.getElementById('honor2_list'), {

      button: true,

      navbar: false,

      width: 660,

      title: false

    });

  </script>

</div>







<!-- footer -->

<footer>

	<?php get_footer();?>

</footer>



<script>

  //banner

  var swiper = new Swiper(".i_banner_list", {

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







  //证书 图片轮播

	var certifySwiper = new Swiper('#certify .swiper-container', {

		watchSlidesProgress: true,

		slidesPerView: 'auto',

		centeredSlides: true,

		loop: true,autoplay:true,

		loopedSlides: 5,

		autoplay: {

			delay: 4000,

			disableOnInteraction: false,

		},

		navigation: {

			nextEl: '.honor-button-next',

			prevEl: '.honor-button-prev',

		},

		pagination: {

			el: '.honor-pagination',

			clickable :true,

		},

		roundLengths: true, 

		on: {

			progress: function(progress) {

				for (i = 0; i < this.slides.length; i++) {

					var slide = this.slides.eq(i);

					var slideProgress = this.slides[i].progress;

					modify = 1;

					if (Math.abs(slideProgress) > 1) {

						modify = (Math.abs(slideProgress) - 1) * 0.4 + 1;

					}

					if(screen.width < 768){

						translate = slideProgress * modify * 32 + '%';

					}else{

						translate = slideProgress * modify * 36 + '%';

					}

					scale = 1 - Math.abs(slideProgress) / 6;

					zIndex = 999 - Math.abs(Math.round(10 * slideProgress));

					slide.transform('translateX(' + translate + ') scale(' + scale + ')');

					slide.css('zIndex', zIndex);

					slide.css('opacity', 1);

					if (Math.abs(slideProgress) > 3) {

						slide.css('opacity', 0);

					}

				}

			},

			setTransition: function(transition) {

				for (var i = 0; i < this.slides.length; i++) {

					var slide = this.slides.eq(i)

					slide.transition(transition);

				}



			}

		}

	});
  var certifySwiper = new Swiper('#certify2 .swiper-container', {

    watchSlidesProgress: true,

    slidesPerView: 'auto',

    centeredSlides: true,

    loop: true,autoplay:true,

    loopedSlides: 5,

    autoplay: {

      delay: 4000,

      disableOnInteraction: false,

    },

    navigation: {

      nextEl: '.honor2-button-next',

      prevEl: '.honor2-button-prev',

    },

    pagination: {

      el: '.honor-pagination',

      clickable :true,

    },

    roundLengths: true, 

    on: {

      progress: function(progress) {

        for (i = 0; i < this.slides.length; i++) {

          var slide = this.slides.eq(i);

          var slideProgress = this.slides[i].progress;

          modify = 1;

          if (Math.abs(slideProgress) > 1) {

            modify = (Math.abs(slideProgress) - 1) * 0.4 + 1;

          }

          if(screen.width < 768){

            translate = slideProgress * modify * 32 + '%';

          }else{

            translate = slideProgress * modify * 36 + '%';

          }

          scale = 1 - Math.abs(slideProgress) / 6;

          zIndex = 999 - Math.abs(Math.round(10 * slideProgress));

          slide.transform('translateX(' + translate + ') scale(' + scale + ')');

          slide.css('zIndex', zIndex);

          slide.css('opacity', 1);

          if (Math.abs(slideProgress) > 3) {

            slide.css('opacity', 0);

          }

        }

      },

      setTransition: function(transition) {

        for (var i = 0; i < this.slides.length; i++) {

          var slide = this.slides.eq(i)

          slide.transition(transition);

        }



      }

    }

  });



</script>



<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>

<script>

  //引入wow动画效果

  wow = new WOW({

    animateClass: 'animated',

    offset: 100,

    mobile: false,

  });

  wow.init();

</script>



</body>

</html>

