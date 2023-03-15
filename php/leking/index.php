<?php
get_header();
?>

<!-- header -->
<?php get_template_part('top') ?>




<!-- banner -->
<div class="i_banner delta_b">
    <div class="swiper-container">
      <ul class="swiper-wrapper">
      <li class="swiper-slide">
          <img src="<?php bloginfo('template_url'); ?>/static/images/banner1.webp" />
          <div class="b_text1">
            <div class="left">
              <h5 class="stress_f wow slideInUp">Healthy Air<br>Return Back</h5>
              <h6 class="stress_f wow slideInUp" data-wow-delay=".3s">P8802</h6>
              <p class="wow slideInUp" data-wow-delay=".4s">Expert & Leader in Air Purifier Area<br>Clients from worldwide over 70 countries</p>
              <a href="<?php echo get_category_link(2); ?>" class="com_but wow slideInUp" data-wow-delay=".4s"><span>Preview</span></a>
            </div>
            <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/hb_1.webp" alt=""></div>
            <div class="swiper-button-next">Next</div>
          </div>
        </li>	
        
        <li class="swiper-slide">
          <img src="<?php bloginfo('template_url'); ?>/static/images/banner2.webp" />
          <div class="b_text2">
            <h5 class="stress_f wow slideInUp"><span class="stress_f">26 years’</span><br>Manufacturing Experience</h5>
            <p class="futit wow slideInUp" data-wow-delay=".3s">20 years' Foreign Trade Experience in OEM & ODM<br>
                Expert & Leader in Air Purifier Area<br>
                Clients from worldwide over 70 countries
            </p>
            <a href="<?php echo get_category_link(2); ?>" class="com_but wow slideInUp" data-wow-delay=".5s"><span>Preview</span></a>
          </div>
        </li>
        <li class="swiper-slide">
          <img src="<?php bloginfo('template_url'); ?>/static/images/banner3.webp" />
          <div class="b_text3">
            <h5 class="stress_f wow slideInUp">UVC AiR PURIFiER </h5>
            <p class="stress_f futit wow slideInUp" data-wow-delay=".3s">
              CAN EFFECTiVELY FiLTER BACTERIA<br>
              AND ViRUSES iN tHE AiR AND OtHER KiNDS OF TINY PARtICLES
            </p>
            <p class="txt wow slideInUp" data-wow-delay=".4s">Droplets and aerosols in the air are the main routes<br>
                of transmission of influenza and other viruses</p>
            <a href="<?php echo get_permalink(13); ?>" class="com_but wow slideInUp" data-wow-delay=".5s"><span>Preview</span></a>
          </div>
        </li>
        
        
        
      </ul>
      <div class="swiper-button-prev">Prev</div>
      <div class="swiper-button-next">Next</div>        
      <div class="swiper-pagination"></div>
    </div>
</div>
<script>
  var swiper = new Swiper('.i_banner .swiper-container',{
		speed: 600,
		loop:true,
		// autoplay:false,
		// autoplay: {
		// 	delay: 4000,
		// 	stopOnLastSlide: false,
		// 	disableOnInteraction: false,
		// },
		navigation: {
			nextEl: '.i_banner .swiper-button-next',
			prevEl: '.i_banner .swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			type: "progressbar",
      clickable:true
		},
	});
</script>



<main>
  <!-- RECOMMEND PRODUCTS-->
  <div class="i_rp box_mg wrap2 wow slideInUp">
    <div class="circle_bc"></div>
    <p class="i_com_tit">Recommend Products</p>
    <div class="i_rp_box">
      <div class="i_rp_banner topnav">
        <div class="swiper-container">
            <ul class="swiper-wrapper">


               <?php
                  $query_post = array(
                    'cat' => 2,
                    'showposts' => 3,
                    'post__in' => get_option('sticky_posts'),
                    'caller_get_posts' => 1,
                    // 'order' => 'asc',
                  );
                      query_posts($query_post);
                  ?>
                  <?php while (have_posts()) : the_post(); ?>
                  <li class="swiper-slide">
                      <div class="a_txt">
                        <h6 class="stress_f"><?php the_title();?></h6>
                        
                        <p class="futit"><?php echo mb_strimwidth(strip_tags($post->post_content),0,30,'...');?></p>
                        
                        <p class="txt">
                        <?php
                            $yf= get_post_meta($post->ID, 'extend_info', true);
                            echo $yf['produc_txt'];
                          ?>
                        </p>


                        <a href="<?php the_permalink(); ?>" class="com_but"><span>Preview</span></a>
                      </div>
                      <div class="img">
                        <?php $p_det_value = get_post_meta($post->ID, 'extend_info', true); ?>
                        <img src="<?php echo $p_det_value['i_spec_pic']; ?>">

                      </div>
                    </li>
                    <?php endwhile; wp_reset_query(); ?>



              <!-- <li class="swiper-slide">
                <div class="a_txt">
                  <h6>P382C</h6>
                  <p>Mobile Purification Follow Heart</p>
                  <p>Three-speed wind speed/Rechargeable/Three-color breathing light</p>
                  <a href="" class="com_but"><span>Preview</span></a>
                </div>
                <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/irp1.webp" alt=""></div>
              </li>
               -->
            </ul>
            <div class="i_rp-button-prev"></div>
            <div class="i_rp-button-next"></div>
            <div class="i_rp-pagination"></div>
        </div>
      </div>
      <script>
        var banner_swiper = new Swiper('.i_rp_banner .swiper-container',{
          speed: 600,
          loop:true,
          // autoplay: {
          // 	delay: 4000,
          // 	stopOnLastSlide: false,
          // 	disableOnInteraction: false,
          // },
          navigation: {
            nextEl: '.i_rp-button-next',
            prevEl: '.i_rp-button-prev',
          },
          pagination: {
            el: '.i_rp-pagination',
            clickable: true,
          },
        });
      </script>
    </div>
  </div>


  <!-- HOME SERIES -->
  <div class="i_hs box_mg wrap2 wow slideInUp">
    <div class="circle_bc"></div>
    <p class="i_com_tit" style="color: #333;">Home series</p>
    <div class="i_hs_box">
      <div class="i_hs_banner">
        <div class="swiper-container">
            <ul class="swiper-wrapper">
              
                <?php query_posts('cat=5&showposts=4'); ?>
  
                    <?php while (have_posts()) : the_post(); ?>
  
                    <li class="swiper-slide">
                        
                      <div class="text">
                        <h2 class="stress_f"><?php the_title(); ?></h2>
                        <p class="futit"><?php echo mb_strimwidth(strip_tags($post->post_content),0,30,'...');?></p>
                        
                        <p class="txt">
                        <?php
                            $yf= get_post_meta($post->ID, 'extend_info', true);
                            echo $yf['produc_txt'];
                          ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="com_but"><span>Preview</span></a>
                      </div>
                      <div class="img">
                        <?php
                            $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
                            $produc_img =  $post_meta['produc_img'];
                            $produc_img = explode( ',', $post_meta['produc_img'] );
                            $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
                          ?>
                            <img src="<?php echo $produc_img_src[0];?>" />
                      </div>

                    </li>
  
                <?php endwhile; wp_reset_query(); ?>
              
              <!-- 
              <li class="swiper-slide">
                <div class="text">
                  <h2>p1500</h2>
                  <p class="futit">Surge Air Volume for Large Space</p>
                  <p class="txt">High quality, large air volume and large space</p>
                  <a href="" class="com_but"><span>Preview</span></a>
                </div>
                <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/ph1.webp" alt=""></div>
              </li> -->
            </ul>
            <!-- <div class="banner-button-prev"></div> -->
            
            <div class="banner-pagination"></div>
        </div>
        <div class="banner-button-prev">prev</div>
        <div class="banner-button-next">next</div>
      </div>
      <script>
        var banner_swiper = new Swiper('.i_hs_banner .swiper-container',{
          speed: 600,
          loop:true,
          // autoplay: {
          // 	delay: 4000,
          // 	stopOnLastSlide: false,
          // 	disableOnInteraction: false,
          // },
          navigation: {
            nextEl: '.banner-button-next',
            prevEl: '.banner-button-prev',
          },
          pagination: {
            el: '.banner-pagination',
            clickable: true,
          },
          breakpoints: {
              0: {
                slidesPerView: 1,
                spaceBetween: 20,
                slidesPerGroup: 1,
              },
              959: {
                slidesPerView: 1.5,
                spaceBetween: 20,
                slidesPerGroup: 1,
              },

            },
        });
      </script>
    </div>
    <ul class="i_hs_list wrap">
      <li><p>more series</p></li>
    <?php
              $categories=get_categories("child_of=2&parent=2&hide_empty=0&orderby=id&order=asc");
              foreach($categories as $category) {
                $category_data = get_term_meta( $category->term_id, 'category_options', true );
                echo '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a></li>';	
              }
      ?>

    </ul>
  </div>


  <!-- aboutlejing -->
  <div class="i_al wrap">
    <p class="i_com_tit wow slideInUp">About <span>lejing</span></p>
    <a href="<?php echo get_permalink(8); ?>" class="i_al_but wow slideInUp" data-wow-delay=".2s">more</a>
    <div class="txt wow slideInUp" data-wow-delay=".4s">
    <?php echo mb_strimwidth(get_page(8)->post_content,0,360); ?>...
    </div>
    <div class="i_al_img_box">
      <div class="i_al_img"></div>
      <div class="video_but" onclick="vShow()"></div>
    </div>
  </div>


  <!-- advantage -->
  <div class="i_ad box_mg delta_b delta_t">
    <ul class="i_ad_list wrap wow slideInUp">

        <?php
              $i_ad = xintheme('i_ad');
              if($i_ad){
              foreach($i_ad as $value):
            ?>
            <li>
              <div class="i_ad_show">
                <img src="<?php echo $value['i_ad_img'] ?>" />
                <p><?php echo $value['i_ad_tit'] ?></p>
              </div>
              <div class="i_ad_txt"><?php echo $value['i_ad_txt'] ?></div>
            </li>
            <?php endforeach; } ?>


      
     
      <!-- <li>
        <div class="i_ad_show">
          <img src="static/images/i_ad_4.png" alt="">
          <p>Delivery</p>
        </div>
        <div class="i_ad_txt">
          Long-term cooperation with <br>the shipping company.
        </div>
      </li> -->
    </ul>



    <!-- 合作伙伴 -->
    <div class="i_partner_box wrap wow slideInUp">
      <div class="i_partner">
        <div class="i_partner_list swiper-container">
          <ul class="swiper-wrapper">
            <?php
              $i_part = xintheme('i_part');
              if($i_part){
              foreach($i_part as $value):
            ?>
            <li class="swiper-slide">
              <div class="img">
                <img class="usually" src="<?php echo $value['i_part_img'] ?>" />
                <img class="active" src="<?php echo $value['i_part_active'] ?>" />
              </div>
            </li>
            <?php endforeach; } ?>

          </ul>				
        </div>
        <div class="pt-pagination"></div>
        <div class="pt-button-next"></div>
        <div class="pt-button-prev"></div>
      </div>
    </div>
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
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
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
          slidesPerView: 9,
          spaceBetween: 30,
          slidesPerGroup: 1
          }
        }
      });
    </script>
  </div>




  <!-- news -->
  <div class="i_new box_mg wrap wow slideInUp">
    <div class="circle_bc"></div>
    <p class="i_com_tit">news</span></p>
    <ul class="i_new_list">

    <?php query_posts('cat=3&showposts=2'); ?>
      <?php while (have_posts()) : the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <div class="img">
            <?php if ( has_post_thumbnail()): ?>
            <?php the_post_thumbnail( 'full-post-thumb'); ?>
            <?php else : ?>
            <img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" /> 
            <?php  endif; ?>
          </div>
          <div class="txt">
            <h3><?php the_title(); ?></h3>
            <div class="intro"><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...');?></div>
            <div class="txt_bott">
              <p class="data"><?php the_time('Y-m-d') ?></p>
              <div class="n_but">MORE<i></i></div>
            </div>
          </div>
        </a>
      </li>
      <?php endwhile; wp_reset_query(); ?>


     
      <!-- <li><a href="">
        <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/i_n1.jpg" alt=""></div>
        <div class="txt">
          <h3>Further enhance the technology research and development</h3>
          <p>Further enhance the technology research and development capabilities, the product line expanded to more than 30 models, covering car/desktop/household/commercial and other.</p>
          <div class="txt_bott">
            <p class="data">2023.02.03</p>
            <div class="n_but">MORE<i></i></div>
          </div>
        </div>
      </a></li> -->
    </ul>
    <a href="<?php echo get_category_link(3); ?>" class="n_but">MORE NEWS</a>
  </div>

</main>





<?php get_footer();?>


</body>
</html>
