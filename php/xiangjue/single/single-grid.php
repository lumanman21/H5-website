<?php get_header(); ?>
<?php
	$this_category = get_the_category();
	$category_id = $this_category[0]->cat_ID;
	$category_name = get_cat_name($category_id);  // 当前分类名称
	$category_link = get_category_link( $category_id ); // 当前分类链接
	$upcategory_id= tx_wp_get_category_root_id( $category_id );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>
<?php
	$article_data = get_post_meta($post->ID, 'extend_info', true);
?>
<!-- header -->
<?php get_template_part('top') ?>






<div class="in_banner">
  <div class="img">
    <img src="<?php bloginfo('template_url'); ?>/static/images/banner_p.webp" />
  </div>
  <div class="wrap">
    <h2><?php the_title(); ?></h2>
  </div>
</div>
<div class="in_position">
  <div class="wrap container">
    <?php echo in_breadcrumbs(); ?>
  </div>
</div>





<main>
  <section class="in_products wrap m100">
    <div class="p_nav">
      <div class="p_nav_tit">
        <h2>Product classification</h2>
      </div>
      <ul class="p_men_list">
       <?php
            $args=array(
            'child_of'=> 2,
            'parent' => 2,
            'hide_empty'=>'0',
            'orderby'=>'id',
            'order'=>'asc',
            );
            $categories=get_categories($args);
            foreach($categories as $category) {
            if ($category_name==$category->name)
            {
                $style1="active";
            }else{
                $style1="";
            };
            ?>
          <li class="<?php echo $style1 ?>">
            <a href="<?php echo get_category_link( $category->term_id ) ;?>">
              <?php echo $category->name;?>
            </a>
            <ul>
              <?php
                $argszi=array(
                'child_of'=> $category->term_id,
                'parent' => $category->term_id,
                'hide_empty'=>'0',
                'orderby'=>'id',
                'order'=>'asc',
                );
                $categorieszi=get_categories($argszi);
                foreach($categorieszi as $categoryzi) {
                    if ($category_name==$categoryzi->name)
                    {
                        $style2="active";
                    }else{
                        $style2="";
                    }
                    echo '<li class="' . $style2 . '"><i></i><a href="' . get_category_link($categoryzi->term_id) . '">' . $categoryzi->name . '</a></li>';
                  }
              ?>
            </ul>
          </li>
          <?php } ?>
      </ul>
      <script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
      <script src="<?php bloginfo('template_url'); ?>/static/js/Multi-layer_fold.js"></script>
      <script>
        $(document).ready(function() {
          $(".p_men_list").accordion({
            accordion:false,
            speed: 500,
            closedSign: '<iconify-icon icon="mingcute:up-line"></iconify-icon>',
            openedSign: '<iconify-icon icon="mingcute:down-line"></iconify-icon>'
          });
        });
        if(screen.width < 1025){
          $(function(){
            $(".p_nav_tit").click(function () {
              $(this).toggleClass("on");
              $(".p_men_list").stop().slideToggle();
            });
          });
        }
      </script>
    </div>
  
    <div class="in_p_r">
      <div class="p_info ">
        <div class="p_atlas">
          <div class="p_atlas_list swiper-container" id="p_atlas_list">
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
									<img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />
								</li>
								<?php endforeach;endif ?>
            </ul>
          </div>
          <div class="pr">
            <div class="p_thumbnail_list swiper-container">
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
									<img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />
								</li>
								<?php endforeach;endif ?>
              </ul>
            </div>
            <div class="thumbnail-prev"><iconify-icon icon="icon-park-outline:left"></iconify-icon></div>
            <div class="thumbnail-next"><iconify-icon icon="icon-park-outline:right"></iconify-icon></div>
          </div>
          <div class="thumbnail-pagination"></div>
        </div>
  
        <div class="p_info_cont">
            <h1><?php the_title(); ?></h1>
            <article class="txt">
             <?php if( get_the_content() ){ ?>
                 <?php the_content(); ?>
             <?php } ?>
            </article>
          
          <div class="i_more_list mt30">
            <a onclick="asfrom()" class="i_more" href="javascript:;"><b>Get A Quote</b></a>
            <a class="i_more i_more_l"  href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><b>Contact Us</b></a>
          </div>
          <div class="tag mt40">
            <p>Tag:</p>
            <?php
							$tags = wp_get_post_tags($post->ID);
							if ( $tags ) {
						?>
						
						<?php foreach ( $tags as $tag ) { ?>
						<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ) ?>" target="_blank"><?php echo esc_html( $tag->name ); ?></a>
						<?php } ?>
						
						<?php } ?>
              
          </div>
        </div>
      </div>
  
      <div class="detail_box wrap p80">
        <ul class="if_menu">
          <li>product pictures</li>
          <li>customized service</li>
        </ul>
        <div class="pd_content">
          <article>
            <ul class="product_gallery" id="product_gallery">
              <?php
									$post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
									$produc_img_d =  $post_meta['produc_img_d'];
								?>
								<?php
									if( !empty( $produc_img_d ) ) :
									$produc_img_d = explode( ',', $post_meta['produc_img_d'] );
									foreach ( $produc_img_d as $id ) :
									$produc_img_d_src = wp_get_attachment_image_src( $id, 'full' );
								?>
                <li>
                  <img src="<?php echo $produc_img_d_src[0];?>" data-lsrc="<?php echo $produc_img_d_src[0];?>" data-maxSrc="<?php echo $produc_img_d_src[0];?>" />
                </li>
                  
								<?php endforeach;endif ?>
            </ul>
            <p class="consult">See more product customization styles and cases,<a href="javascript:;" onclick="asfrom()"> please call for consultation</a></p>
          </article>
          <article>
            <?php echo $article_data['produc_ms']; ?>
            <p class="consult">See more product customization styles and cases,<a href="javascript:;" onclick="asfrom()"> please call for consultation</a></p>
          </article>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="i_contact">
		<div class="wrap_l p30">
			<h6>Recent promotio!</h6>
			<p>Send a set of original excavator maintenance accessories<br>
				worth 10,000 yuan free distribution!</p>
		</div>
		<div class="wrap_r p30">
			<div class="ico"><iconify-icon icon="bxs:phone-call"></iconify-icon></div>
			<h5><i>call us any time</i><a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a></h5>
			<span>OR</span>
			<button onclick="asfrom()" class="i_more"><b>contact us</b></button>
		</div>
	</section>
  
  
  <section class="related wrap m120">
    <div class="i_tit center">
      <h2>related products</h2>
      <h6>China and even Asia's largest second-hand construction machinery trading company!</h6>
    </div>
    <div class="related_box mt60">
      <div class="swiper-container">
      <?php
						$post_id = get_the_ID();
						$cats = wp_get_post_categories($post_id);
						if (!empty($cats)) {
							$first_cat_id = $cats[0];
							$args = array(
								'category__in' => array($first_cat_id),
								'post__not_in' => array($post_id),
								'posts_per_page' => 6,           //显示数量
								'orderby' => 'rand',             //随机排序
								'ignore_sticky_posts' => true    //排除置顶
							);
							$query = new WP_Query($args);
							if ($query->have_posts()) :
					?>
        <ul class="swiper-wrapper related_list">
          <?php
							while ($query->have_posts()) : $query->the_post();
							$article_data = get_post_meta($post_id, 'extend_info', true);
							$produc_img = isset($article_data['produc_img']) ? explode(',', $article_data['produc_img']) : array();
							$produc_img_src = '';
							if (count($produc_img) > 0) {
								$produc_img_src = wp_get_attachment_image_src($produc_img[0], 'full');
								$produc_img_id = attachment_url_to_postid($produc_img_src[0]);
								$produc_img_alt = get_post_meta($produc_img_id, '_wp_attachment_image_alt', true);
								if (empty($produc_img_alt)) {
									$produc_img_alt = get_the_title($post_id);
								}
							}
						?>
          <li class="swiper-slide">
           <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <div class="img">
									<img src="<?php echo $produc_img_src[0]; ?>" alt="<?php echo $produc_img_alt; ?>" />
								</div>
              <div class="txt">
                <p>
                  <?php
                      $categories = get_the_category();
                      if (!empty($categories)) {
                          echo esc_html($categories[0]->name);
                      }
                  ?>
                </p>
                <h6><?php the_title(); ?></h6>
                <span class="i_btn"><iconify-icon icon="ep:right"></iconify-icon>View More</span>
              </div>
            </a>
          </li>
          <?php endwhile; wp_reset_postdata(); ?>
         
        </ul>		
        <?php endif; } ?>			
      </div>
      <div class="r-pagination"></div>
    </div>
    <div class="r-button-next"><iconify-icon icon="mingcute:left-line"></iconify-icon>></div>
    <div class="r-button-prev"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
  </section>
  
</main>




<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
<script>
  $(".if_menu").tabso({
    cntSelect: ".pd_content",
    tabEvent: "click",
    tabStyle: "normal"
  });
  var faqList = $('.pd_faq_list li');
  faqList.find('h3').click(function() {
    var parentLi = $(this).parent();
    var p = parentLi.find('p');
    if (p.is(':hidden')) {
      faqList.find('p').slideUp('fast');
      faqList.find('h3').removeClass('curr');
      p.slideDown('fast');
      $(this).addClass('curr');
    } else {
      p.slideUp('fast');
      $(this).removeClass('curr');
    }
  });
</script>

<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
<script>
	var swiper = new Swiper(".p_thumbnail_list", {
		spaceBetween: '4%',
		slidesPerView: 4,
		//loop: true,
		watchSlidesProgress: true,
		autoplay: {
			delay: 5000,
			pauseOnMouseEnter:true,
			disableOnInteraction: false,
		},
		roundLengths: true,
		on: {
			init: function() {
			if (this.slides.length > this.params.slidesPerView) {
				this.$el.find('.swiper-wrapper').css({
				'justify-content': 'flex-start'
				});
			}
			},
			resize: function() {
			if (this.slides.length <= this.params.slidesPerView) {
				this.$el.find('.swiper-wrapper').css({
				'justify-content': 'center'
				});
			} else {
				this.$el.find('.swiper-wrapper').css({
				'justify-content': 'flex-start'
				});
			}
			}
		},
		observer: true,
		observeParents: true,
	});
	var swiper2 = new Swiper(".p_atlas_list", {
		slidesPerView: 1,
		spaceBetween: 10,
		slidesPerGroup: 1,
		//effect: "fade",
		centeredSlides: true,
		pagination: {
          	el: ".thumbnail-pagination",
          	type: "fraction",
        },
		//loop: true,
		navigation: {
			nextEl: ".thumbnail-next",
			prevEl: ".thumbnail-prev",
		},
		autoplay: {
			delay: 5000,
			pauseOnMouseEnter:true,
			disableOnInteraction: false,
		},
		thumbs: {
			swiper: swiper,
		},
		observer: true,
		observeParents: true,
	});
	/*View Pic*/
	var image = new Viewer(document.getElementById('p_atlas_list'), {
		button: true,
		navbar: false,
		width: 660,
		title: false
	});
</script>
<script>
	var rwiper = new Swiper('.related_box .swiper-container', {
		// loop: true,
		// loopFillGroupWithBlank: true,
		navigation: {
			nextEl: '.r-button-next',
			prevEl: '.r-button-prev',
		},
		pagination: {
			el: '.r-pagination',
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
			560: {
			slidesPerView: 4,
			spaceBetween: 20,
			slidesPerGroup: 1
			}
		}
	});
  var image = new Viewer(document.getElementById('product_gallery'), {
		button: true,
		navbar: false,
		width: 660,
		title: false
	});
</script>











<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>