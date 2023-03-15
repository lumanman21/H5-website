<?php
$category_data = get_term_meta( $cat, 'category_options', true );
get_header(); ?>
<?php
	$this_category = get_the_category();
	$category_id = $this_category[0]->cat_ID;

	$category_name = get_cat_name($category_id);  // 当前分类名称
	$category_link = get_category_link( $category_id ); // 当前分类链接
?>

<!-- header -->
<?php get_template_part('top') ?>

<!-- banner -->
<div class="pd_banner delta_b">
  <div class="text">
    <h1 class="stress_f wow slideInUp"><?php the_title_attribute(); ?></h1>
    <div class="futit wow slideInUp" data-wow-delay=".1s"><?php the_content(); ?></div>


    <?php $p_det_value = get_post_meta($post->ID, 'extend_info', true); ?>
    <?php if( !empty ($p_det_value['produc_txt']) ){ ?>
              <div class="txt wow slideInUp" data-wow-delay=".4s">
                <p><?php echo $p_det_value['produc_txt']; ?></p>
              </div>
              <?php } ?>




  </div>
  <div class="products_pic_list wrap">
    <div class="swiper-container gallery-thumbs wow slideInUp">
      <div class="swiper-wrapper">

      <?php
									$post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
									$produc_img =  $post_meta['produc_img'];
									if( !empty( $produc_img ) ) :
									$produc_img = explode( ',', $post_meta['produc_img'] );
									foreach ( $produc_img as $id ) :
									$produc_img_src = wp_get_attachment_image_src( $id, 'full' );
								?>
								<div class="swiper-slide">
									<div class="img"><img src="<?php echo $produc_img_src[0];?>" /></div>
								</div>
								<?php endforeach; endif ?>



        <!-- <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.1.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.2.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.1.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.2.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.1.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.2.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.1.png" /></div> -->
      </div>
    </div>
    <div class="swiper-container gallery-top wow slideInUp data-wow-delay=".4s"">
      <div class="swiper-wrapper">
        <?php
									$post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
									$produc_img =  $post_meta['produc_img'];
									if( !empty( $produc_img ) ) :
									$produc_img = explode( ',', $post_meta['produc_img'] );
									foreach ( $produc_img as $id ) :
									$produc_img_src = wp_get_attachment_image_src( $id, 'full' );
								?>
								<div class="swiper-slide">
									<div class="img"><img src="<?php echo $produc_img_src[0];?>" /></div>
								</div>
								<?php endforeach; endif ?>
        <!-- <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.1.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.2.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.1.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.2.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.1.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.2.png" /></div>
        <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.1.png" /></div> -->
      </div>
      <div class="ppl-pagination"></div>
      <div class="ppl-button-prev"></div>
      <div class="ppl-button-next"></div>				
    </div>
  </div>
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      slidesPerView: 5,
      spaceBetween: 10,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 0,
      pagination: {
        el: '.ppl-pagination',
        clickable: true,
        type: 'fraction',
      },
      navigation: {
        nextEl: '.ppl-button-next',
        prevEl: '.ppl-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      },
    });
  </script>
</div>


<div class="pd_list wow slideInUp">
  <?php $p_det_value = get_post_meta($post->ID, 'extend_info', true); ?>
    <?php if( !empty ($p_det_value['produc_txt']) ){ ?>
              <div class="pd_tit">
                <?php echo $p_det_value['produc_txt']; ?>
              </div>
              <?php } ?>

<?php echo get_post_meta($post->ID , 'custom_value', true); ?>
</div>



<div class="pd_feature">
  <p class="i_com_tit pd_tit wow slideInUp" style="color: #fff;">Humanization Design</p>
  <ul class="feature_list wrap wow slideInUp" data-wow-delay=".3s">

    <?php
        $post_extend = get_post_meta( get_the_ID(), 'extend_info', true );
        $zdy = $post_extend['produc_ad'];
        if( !empty($zdy) ){
        foreach($zdy as $post_extend){
    ?>
    <li>
      <div class="img"><img src="<?php echo $post_extend['produc_ad_img']; ?>" alt=""></div>
        <p><?php echo $post_extend['produc_ad_txt'] ?></p>
    </li>
    <?php } } ?>


   


    
    <!-- <li>
      <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/p_banner_ico.png" alt=""></div>
      <p>Rotary knob control</p>
    </li> -->
  </ul>
</div>


<!--Specification  -->
<div class="pd_spec_box">
  <p class="i_com_tit wow slideInUp">Specification</p>
  <div class="pd_spec wrap wow slideInUp" data-wow-delay=".3s">
    <div class="img">


      <?php $p_det_value = get_post_meta($post->ID, 'extend_info', true); ?>
          <img src="<?php echo $p_det_value['spec_pic']; ?>">


    </div>



    
    <div class="pd_table"><?php echo get_post_meta($post->ID , 'guige_value', true); ?></div>
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


<?php get_footer(); ?>


</body>
</html>