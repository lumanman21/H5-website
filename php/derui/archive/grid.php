<?php

$category_data = get_term_meta( $cat, 'category_options', true );

get_header(); ?>

<?php

   $this_category = get_the_category();

   $category_id = $this_category[0]->cat_ID;

   $category_name = get_cat_name($cat);  // 当前分类名称   

   $category_link = get_category_link( $cat ); // 当前分类链接

?>



    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/swiper.min.css">

    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>



<body>

<?php echo xintheme('foot_code');?>





<!-- header -->

<?php get_template_part('top') ?>



<div class="top_banner p_banner">

  <img src="<?php bloginfo('template_url'); ?>/static/images/p_banner.webp" alt="">

  <h2>carbon black application</h2>

  <ul class="p_banner_list">


    <?php $posts = get_posts("post_type=any&include=53,100,98,102"); if($posts) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
      <li>
            <a title="<?php the_title();?>" href="<?php the_permalink(); ?>">
              <h5><?php the_title();?></h5>
              <div class="ico_line"></div>
            </a>
      </li>
    <?php endforeach; endif; ?>


    <!-- <li><a href="">

      <h5>Coatings</h5>

      <div class="ico_line"></div>

    </a></li>

    <li><a href="">

      <h5>Industry coatong</h5>

      <div class="ico_line"></div>

    </a></li>

    <li><a href="">

      <h5>Decorative paint</h5>

      <div class="ico_line"></div>

    </a></li>

    <li><a href="">

      <h5>Powder coating</h5>

      <div class="ico_line"></div>

    </a></li> -->

    

  </ul>

</div>

<main class="n_main">

  <!-- in_position -->

  <div class="in_position">

    <div class="wrap container">

    <?php echo in_breadcrumbs(); ?>

    </div>

  </div>



  <ul class="p_list_tit wrap">

    <li><a href="#box_b"><?php echo get_cat_name(6); ?></a></li>

    <li><a href="#box_c"><?php echo get_cat_name(12); ?></a></li>

    <li><a href="#box_d"><?php echo get_cat_name(5); ?></a></li>

  </ul>





  <div class="com_tit" id="box_a">

    <div class="tit_bc">WHAT IS CARBON BLACK ?</div>

    <h1>WHAT IS CARBON BLACK ?</h1>

    <div class="line"></div>

    <div class="liner"></div>

  </div>

  <div class="carbonBox wrap">

    <div class="left_txt">

      <p>Carbon black is an amorphous form of carbon , with appearance characteristics of light , loose , and very fine black powder , it is theproduct of incomplete combustion or heat decomposition of carbon-containing materials ( coal , natural gas , heavy oil , fuel oil etc . )nder the condition of insufficient air</p>

      <br>

      <p>Carbon black is the first nano material developed and applied by human beings and has the largest output at present . It is listed asone of the products in the intemational chemical filed</p>

      <br>

      <p>Carbon black is of great significance to tire industry , coating and ink industry , plastic industry and textile industry etc</p>

      <br>

      <p>Deryblack Special pigment carbon black committed to improving the comprehensive performance of carbon black . products can replace intemational well-known brands</p>

    </div>

    <div class="right_img"><img src="<?php bloginfo('template_url'); ?>/static/images/p1.jpg" alt=""></div>

  </div>





  <div class="specialBox" id="box_b">

    <div class="specialContent wrap">

      <h2><?php echo get_cat_name(6); ?></h2>

      <div class="fu_tit">

        <p>Carbon black used as coloring pigment in coatings paints , inks , plastic and pigment preparations etc.</p>

        <p>cording to the coloring intensity ( or blackness ) and particle size , is generally divided into high pigment carbon black , medium pigment carbonegular pigment carbon black , low pigme</p>

        <p>Furnace and channel process are the two mainly productions</p>

      </div>

      <ul class="special_type">

      <?php

          $categories=get_categories("child_of=6&parent=6&hide_empty=0&orderby=id&order=asc");

          foreach($categories as $category) {

            $category_data = get_term_meta( $category->term_id, 'category_options', true );

            echo '<li><a href="'.get_category_link( $category->term_id ).'"><p>'.$category->name.'<p></a></li>';	

          }

        ?>

        <!-- <li><a href=""><p>COATINGS</p></a></li>

        <li><a href=""><p>INKS</p></a></li>

        <li><a href=""><p>PLASTICS</p></a></li>

        <li><a href=""><p>OTHERS</p></a></li> -->

      </ul>



    <div class="sssss">

      

      <?php

						$pterms=get_categories("child_of=6&parent=6&hide_empty=0&orderby=id&order=asc");

						foreach ($pterms as $pterm) {

						$pposts = get_posts(array('cat' => $pterm->term_id, 'post_type' => 'post'));

					?>

      <div class="coatingBox">

        <div class="coating_list swiper-container">

          <ul class="swiper-wrapper">

              

              <?php

								$query_post = array(

									'cat' => $pterm->term_id,

									'posts_per_page' => 999,

									'post__in' => get_option('sticky_posts'),

									'caller_get_posts' => 1

								);

								query_posts($query_post);

							?>

							<?php while (have_posts()) : the_post(); ?>

              <?php $p_zdy= get_post_meta($post->ID, 'extend_info', true); ?>

              <li class="swiper-slide">

                <a href="<?php the_permalink(); ?>">

                  <div class="img">

                    <?php

											$produc_img = explode( ',', $p_zdy['produc_img'] );

											$produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );

										?>

										<img src="<?php echo $produc_img_src[0];?>" />

                  </div>

                  <div class="text">

                    <div class="tit"><p><?php the_title(); ?></p><img src="<?php bloginfo('template_url'); ?>/static/images/ico_more.png" alt=""></div>

                    <div class="txt"><?php echo mb_strimwidth(strip_tags($post->post_content),0,540,'...');?></div>

                  </div>

                </a>

              </li>

              <?php endwhile; wp_reset_query(); ?>

              

          </ul>				

        </div>

      </div>

      <?php } ?>

			<?php unset($pterm); ?>



     

    </div>



      <!-- <div class="inkBox"></div>

      <div class="plasticBox"></div>

      <div class="otherBox"></div> -->

    </div>

  </div>





  <script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>

  <script>

    $(".special_type").tabso({

      cntSelect:".sssss",

      tabEvent:"mousemove",

      tabStyle:"normal"

    });

  </script>

  <script>

    var pswiper = new Swiper('.coating_list', {

      // loop: true,

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

      //     delay: 3500,

      //     disableOnInteraction: false,

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

          slidesPerGroup: 2

          },

          1200: {

          slidesPerView: 4,

          spaceBetween: 20,

          slidesPerGroup: 2

          }

      }

    });

  </script>



  <div class="rubberyBox wrap wow slideInUp" id="box_c">

    <div class="left_img"><img src="<?php bloginfo('template_url'); ?>/static/images/p2.jpg" alt=""></div>

    <div class="right_txt">

      <h2><?php echo get_cat_name(12); ?></h2>

      <p>Carbon black is an amorphous form of carbon , with appearance characteristics of light , loose , and very fine black powder , it is theproduct of incomplete combustion or heat decomposition of carbon-containing materials ( coal , natural gas , heavy oil , fuel oil etc . )nder the condition of insufficient air</p>

      <br>

      <p>Carbon black is the first nano material developed and applied by human beings and has the largest output at present . It is listed asone of the products in the intemational chemical filed</p>

      <br>

      <p>Carbon black is of great significance to tire industry , coating and ink industry , plastic industry and textile industry etc</p>

      <br>

      <p>Deryblack Special pigment carbon black committed to improving the comprehensive performance of carbon black . products can replace intemational well-known brands</p>

      <div class="ha_button">

        <?php query_posts('cat=12&showposts=1'); ?>

          <?php while (have_posts()) : the_post(); ?>

              <a href="<?php the_permalink(); ?>"><p>See more</p></a>

        <?php endwhile; wp_reset_query(); ?>

        <div class="d_but" onclick="asfrom()">

          <i><img src="<?php bloginfo('template_url'); ?>/static/images/emai_ico.svg" alt=""></i>

          <span>inquiry</span>

        </div>

      </div>



    </div>

  </div>



  <div class="pigmentBox wrap wow slideInUp" id="box_d">

    <h2><?php echo get_cat_name(5); ?></h2>

    <div class="fu_tit">

      <p>According to the coloring intensity ( or blackness ) and particle size , itis generalided into high pigment carbon black , medium pigment carbon black , regular pigment carbon black , low pigmentcarbon black</p>

    </div>

    <div class="pigment_swiper">

      <div class="pigment_list swiper-container">

          <ul class="swiper-wrapper">





          <?php query_posts('cat=5&showposts=99'); ?>

            <?php while (have_posts()) : the_post(); ?>

            <li class="swiper-slide">

              <a href="<?php the_permalink(); ?>">

                <div class="img">

                  <?php

                    $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);

                    $produc_img =  $post_meta['produc_img'];

                    $produc_img = explode( ',', $post_meta['produc_img'] );

                    $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );

                  ?>

                  <img src="<?php echo $produc_img_src[0];?>" />

                </div>

                <div class="text">

                  <div class="tit"><p><?php the_title_attribute(); ?></p><img src="<?php bloginfo('template_url'); ?>/static/images/ico_more.png" alt=""></div>

                  <div class="txt"><?php the_content(); ?></div>

                </div>

              </a>

              </li>

          <?php endwhile; wp_reset_query(); ?>



              

              <!-- <li class="swiper-slide">

                  <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/a1.2.jpg" alt=""></div>

                  <div class="text">

                    <div class="tit"><p>AUTOMOTIVE COATING</p><img src="<?php bloginfo('template_url'); ?>/static/images/ico_more.png" alt=""></div>

                    <div class="txt">We provide several high performancespecial carbon black designs for</div>

                  </div>

              </li> -->

          </ul>				

      </div>

      <div class="pt-pagination"></div>

      <div class="pt-button-next"></div>

      <div class="pt-button-prev"></div>

    </div>

    <script>

      var pswiper = new Swiper('.pigment_list', {

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

        //     delay: 3500,

        //     disableOnInteraction: false,

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

            slidesPerGroup: 2

            },

            1200: {

            slidesPerView: 4,

            spaceBetween: 20,

            slidesPerGroup: 2

            }

        }

      });

    </script>

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