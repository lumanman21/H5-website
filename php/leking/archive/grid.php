<?php
$category_data = get_term_meta( $cat, 'category_options', true );
get_header(); ?>
<?php
	$this_category = get_the_category();
	$category_id = $this_category[0]->cat_ID;

	$category_name = get_cat_name($cat);  // 当前分类名称
	$category_link = get_category_link( $cat ); // 当前分类链接
?>



<!-- header -->
<?php get_template_part('top') ?>




<!-- banner -->
<div class="top_banner delta_b">
  <img src="<?php bloginfo('template_url'); ?>/static/images/p_banner.webp" alt="">
  <div class="txt">
    <h4 class="wow slideInUp">International team creates classics</h4>
    <p class="wow slideInUp" data-wow-delay=".4s">strive to become the world leader in the health and environmental protection<br> household appliances industry.</p>
    <div class="img wow slideInUp" data-wow-delay=".5s"><img src="<?php bloginfo('template_url'); ?>/static/images/p_banner_ico.png" alt=""></div>
  </div>
</div>

<main>
  <div class="pro_list_box box_mg">
    <div class="circle_bc"></div>
    <div class="circle_bc circle_b"></div>
    <p class="i_com_tit wow slideInUp"><?php single_cat_title(); ?></p>
    <ul class="pro_list wrap2 wow slideInUp" data-wow-delay=".3s">
      <?php while( have_posts() ): the_post(); ?>
          <?php $p_zdy = get_post_meta($post->ID, 'extend_info', true); ?>
          <li>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <div class="l_txt">
                <p class="tit stress_f"><?php the_title_attribute(); ?></p>
                <div class="futit"><?php the_content(); ?></div>
                <div class="txt"><?php echo $p_zdy['produc_txt']; ?></div>
                <div class="com_but"><span>Preview</span></div>
              </div>
      
              <div class="r_img">
                <?php
                  $produc_img = explode( ',', $p_zdy['produc_img'] );
                  $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
                ?>
                <img src="<?php echo $produc_img_src[0];?>" />
              </div>
            </a>
          </li>
          <?php endwhile; ?>




      <!-- <li><a href="">
        <div class="l_txt">
          <p class="tit">p1500</p>
          <p class="futit">Surge Air Volume for Large Space</p>
          <p class="txt">High quality,large air volume and large space</p>
          <div class="com_but"><span>Preview</span></div>
        </div>
        <div class="r_img"><img src="<?php bloginfo('template_url'); ?>/static/images/p1.jpg" alt=""></div>
      </a></li>
      <li><a href="">
        <div class="l_txt">
          <p class="tit">p1500</h3>
          <p class="futit">Surge Air Volume for Large Space</p>
          <p class="txt">High quality,large air volume and large space</p>
          <div class="com_but"><span>Preview</span></div>
        </div>
        <div class="r_img"><img src="<?php bloginfo('template_url'); ?>/static/images/p1.jpg" alt=""></div>
      </a></li> -->
    </ul>
    <!-- page -->
    <div class="inPage">
      <div class="in_page_box">
        <div class="in_page">
        <?php zdy_paging(); ?>
        </div>
      </div>
    </div>
  </div>



  <!-- recommend-products -->
  <div class="p_other_box delta_t">
    <p class="i_com_tit wow slideInUp">Recommended products</p>
    <div class="p_other_banner wrap2 wow slideInUp" data-wow-delay=".3s">
      <div class="swiper-container">
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
                              <div class="img">
                                  <?php
                                      $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
                                      $produc_img =  $post_meta['produc_img'];
                                      $produc_img = explode( ',', $post_meta['produc_img'] );
                                      $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
                                  ?>
                                  <img src="<?php echo $produc_img_src[0];?>" />
                              </div>
                              <p><?php the_title_attribute(); ?></p>
                          </a>
                      </li>
                  <?php endwhile; else : ?>
                  <?php endif; wp_reset_query(); } ?>

           
            <!-- <li class="swiper-slide">
              <div class="img"><img src="static/images/p1.jpg" alt=""></div>
              <p>AHAM VERIFIDE Independently TestedConsumer Trusted</p>
            </li> -->
          </ul>
          <div class="banner-button-prev"></div>
          <div class="banner-button-next"></div>
          <p class="ah_slide">slide</p>
          <div class="banner-pagination"></div>
      </div>
    </div>
    <script>
      var banner_swiper = new Swiper('.p_other_banner .swiper-container',{
        speed: 600,
        // loop:true,
        // autoplay: {
        // 	delay: 4000,
        // 	stopOnLastSlide: false,
        // 	disableOnInteraction: false,
        // },
        navigation: {
          nextEl: '.p_other_banner .banner-button-next',
          prevEl: '.p_other_banner .banner-button-prev',
        },
        pagination: {
          el: '.p_other_banner .banner-pagination',
          type: "progressbar",
          clickable: true,
        },
        breakpoints: {
            0: {
              slidesPerView: 1,
              spaceBetween: 0,
              slidesPerGroup: 1,
            },
            560: {
              slidesPerView: 2,
              spaceBetween: 20,
              slidesPerGroup: 1,
            },
            959: {
              slidesPerView: 4,
              spaceBetween: 20,
              slidesPerGroup: 1,
            },
          },
      });
    </script>
  </div>
</main>






<?php get_footer(); ?>


</body>
</html>