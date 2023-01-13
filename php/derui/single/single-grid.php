<?php
get_header(); 
$category = get_the_category();
if($category[0]){
    $catid = $category[0]->term_id;
} 
$category_data = get_term_meta( $catid, 'category_options', true );
$post_extend = get_post_meta( get_the_ID(), 'extend_info', true );
$no_sidebar	= isset($post_extend['no_sidebar']) ?$post_extend['no_sidebar'] : '';
$no_sidebar_all = xintheme('post_no_sidebar_all');
?>
<?php
   $this_category = get_the_category();
   $category_id = $this_category[0]->cat_ID;
?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/swiper.min.css">
    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>

<body>
<?php echo xintheme('foot_code');?>


<!-- header -->
<?php get_template_part('top') ?>


<main class="n_main d_main">
  <!-- in_position -->
  <div class="in_position">
    <div class="wrap container">
    <?php echo in_breadcrumbs(); ?>
    </div>
  </div>

  <div class="detailBox wrap">
    <div class="left_img">
      <div class="p_partner">
              <div class="p_partner_list swiper-container">
                  <ul class="swiper-wrapper">

                        <?php
                            $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
                            $produc_img =  $post_meta['produc_img'];
                        ?>
                        <?php
                            if( !empty( $produc_img ) ) :
                            $produc_img = explode( ',', $post_meta['produc_img'] );
                            foreach ( $produc_img as $id ) :
                            $produc_img_src = wp_get_attachment_image_src( $id, 'full' );
                        ?>
                        <li class="swiper-slide">
                            <div class="img">
                                <img src="<?php echo $produc_img_src[0];?>" />
                            </div>
                        </li>
                        <?php endforeach;endif ?>


                      <!-- <li class="swiper-slide">
                          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_1.webp" alt=""></div>
                      </li>
                      <li class="swiper-slide">
                          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/p_1.webp" /></div>
                      </li> -->
                  </ul>				
              </div>
              <div class="pt-pagination"></div>
              <div class="pt-button-next"></div>
              <div class="pt-button-prev"></div>
              </div>
              <script>
                var pswiper = new Swiper('.p_partner_list', {
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
                      960: {
                      slidesPerView: 1,
                      spaceBetween: 20,
                      slidesPerGroup: 1
                      },
                      1200: {
                      slidesPerView: 1,
                      spaceBetween: 30,
                      slidesPerGroup: 1
                      }
                  }
                });
              </script>
      </div>
    
    <div class="right_txt">
      <h1><?php the_title_attribute(); ?></h1>
      <div class="introduct">
        <?php the_content(); ?>
      </div>
      <h2>APPLICATION RELATED PRODUCTS</h2>
      <div class="type">
        <!-- <div class="h_partner wrap wow slideInUp">
          <div class="h_partner_list swiper-container">
              <ul class="swiper-wrapper">


                <?php
                  $cats = wp_get_post_categories($post->ID);
                  if ($cats) {
                  $cat = get_category( $cats[0] );
                  $first_cat = $cat->cat_ID;
                  $args = array(
                      'category__in' => array($first_cat),
                      'post__not_in' => array($post->ID),
                      'showposts' => 8,
                      'caller_get_posts' => 1
                          );
                  query_posts($args);

                  if (have_posts()) :
                  while (have_posts()) : the_post(); update_post_caches($posts);?>
                      <li class="swiper-slide ">
                          <a href="<?php the_permalink(); ?>">
                              <p><?php the_title_attribute(); ?></p>
                          </a>
                      </li>
                  <?php endwhile; else : ?>
                  <?php endif; wp_reset_query(); } ?>
              </ul>				
          </div>
        </div> -->
        <!-- <script>
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
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 2
            },
          }
          });

        </script> -->
        <a href="#featureBox">
          <?php  $usage =$post_meta['usage'];  foreach($usage as $value){
                  echo '<p>'.$value['usage_title1'].'</p>';
            }
          ?>
          <!-- <p>DERYBLACK 1550 and DERYBLACK 1210</p>
          <p>DERYBLACK 161</p> -->
        </a>
      </div>
      <div class="d_but" onclick="asfrom()">
        <i><img src="<?php bloginfo('template_url'); ?>/static/images/emai_ico.svg" alt=""></i>
        <span>inquiry</span>
      </div>
      <div class="p_share">
        <dl>
          <dt><a href="<?php echo xintheme('consultation_twitter_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media_3.png" /></a></dt>
          <dt><a href="<?php echo xintheme('consultation_facebook_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media_4.png" /></a></dt>
          <dd>
            <p><i>more</i></p>
            <ul class="p_share_list">
              <li>
                <a href="<?php echo xintheme('consultation_youtube_url'); ?>">
                  <i><img src="<?php bloginfo('template_url'); ?>/static/images/media_1.png" /></i>
                  <b>Youtube</b>
                </a>
              </li>
              <li>
                <a href="<?php echo xintheme('consultation_linkedin_url'); ?>">
                  <i><img src="<?php bloginfo('template_url'); ?>/static/images/media_2.png" /></i>
                  <b>Linkedin</b>
                </a>
              </li>
              <li>
                <a href="<?php echo xintheme('consultation_ins_url'); ?>">
                  <i><img src="<?php bloginfo('template_url'); ?>/static/images/media_5.png" /></i>
                  <b>Instagram</b>
                </a>
              </li>
            </ul>
          </dd>
        </dl>
			</div>
      <script>
        	$(".p_share dd p").click(function(){
            event.stopPropagation();
            if($('.p_share_list').hasClass("on")){
              $('.p_share_list').removeClass("on") ;
            }else{
              $('.p_share_list').addClass("on") ;
            }
          });
          $("body").click(function () {
            $(".p_share_list").removeClass("on");
          });
      </script>
    </div>
  </div>
  
  <div class="packBox">
    <div class="packcontent wrap">
      <img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" alt="">
      <h2>TYPE OF PACKING</h2>
      <div class="right_table">
        <?php echo get_post_meta($post->ID , 'packing_value', true); ?>
      </div>
    </div>
  </div>
  
  <div class="featureBox wrap" id="featureBox">
    <div class="d_tit">PRODUCT FEATURES <img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" alt=""></div>
    <div class="festure_txt">
      <?php echo get_post_meta($post->ID , 'feature_value', true); ?>
    </div>
  </div>

  <div class="tableBox wrap">
    <div class="d_tit">DETAIL PARAMETER TABLE<img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" alt=""></div>


    <div class="faq">
      <ul class="answer_list">
        <li>
          <div class="answer_tit">
            <p>SPECIFICATION PARAMETERS</p>
            <!-- <p class="open">+</p> -->
          </div>
          <div class="answer_txt">
            <?php echo get_post_meta($post->ID , 'table_value', true); ?>
          </div>
        </li>
        <!-- <li>
          <div class="answer_tit">
            <p>OTHER PARAMETER TABLE</p>
          </div>
          <div class="answer_txt">
          </div>
        </li> -->
      </ul>
      <!-- <script>
        $('.answer_list').find('li').find('.answer_tit').each(function(i){
        $(this).click(function(){
          if($(this).hasClass('liNow')){
            $('.answer_list').find('li').find('.answer_tit').removeClass('liNow');
            $('.answer_list').find('li').removeClass('liNow');
            $('.answer_list').find('.answer_txt').slideUp(300);
            $('.answer_tit').find('.open').text('+')
            }else{
              $('.answer_list').find('li').find('.answer_tit').removeClass('liNow');
              $('.answer_list').find('li').removeClass('liNow');
              $('.answer_list').find('.answer_txt').slideUp(300);
              $(this).addClass('liNow');
              $('.answer_list').find('li').eq(i).addClass('liNow');
              $('.answer_list').find('.answer_txt').eq(i).slideToggle(300);
              $('.liNow').find('.open').text('-')
              $('.liNow').siblings().find('.open').text('+')
            }
          })
        })
      </script> -->
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