<?php
get_header();
?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="banner">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri(); ?>/static/images/banner_1.webp" />
				<div class="b_t wrap">
					<h2 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".2s">
						We care your traveling</br>
						safe & comfortable</h2>
					<h3>
						With more than 30 year experience in scooters and power wheelchair,we
						have taken</br>
						almost 80% market share in S-Korean market,in qty around
						15,000 units a year.
					</h3>
					<a 
					href="" 
					class="i_but ani resize"
					swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".3s"
					><b>Contact</b></a>
					<h3 style="text-transform: uppercase;">
						Brain power   /   secure   /   Long endurance
					</h3>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri(); ?>/static/images/banner_2.webp" />
			</div>
			<div class="swiper-slide">
				<img src="<?php echo get_template_directory_uri(); ?>/static/images/banner_3.webp" />
			</div>
		</div>
		<div class="banner-button-prev"><i class="fal fa-angle-left"></i></div>
		<div class="banner-button-next"><i class="fal fa-angle-right"></i></div>
		<div class="banner-pagination"></div>
	</div>
</div>
<div class="clear"></div>
<script src="<?php echo get_template_directory_uri(); ?>/static/js/banner.js"></script>


<main>

	<!-- i_product -->
	<section class="i_product pt100">
		<div class="i_tit wrap wow slideInUp">
			<h2>Product center</h2>
		</div>

		<ul class="ip_menu_list">
			<?php
				$args = array(
					'child_of'     => 2,
					'parent'       => 2,
					'hide_empty'   => 0,
					'orderby'      => 'id',
					'order'        => 'ASC',
				);
				$num = 1;
				$categories = get_categories( $args );
				foreach ( $categories as $cat ) {
					$category_data = get_term_meta($cat->term_id, 'category_options', true);
					$cat_thumbnail_url = $category_data['cat_thumbnail'];
					$cat_thumbnail_id = attachment_url_to_postid($cat_thumbnail_url);
					$cat_thumbnail_alt = get_post_meta($cat_thumbnail_id, '_wp_attachment_image_alt', true);
					if ( empty($cat_thumbnail_alt) ) {
						$cat_thumbnail_alt = $cat->name;
					}
			?>
			<li class="wow slideInUp" data-wow-delay=".<?php echo $num; ?>s">
				<?php echo esc_html( $cat->name ); ?>                                          <!-- 名称 -->
			</li>
			<?php $num++; } ?>
		</ul>

		<div class="ip_box wrap m100">
			<div class="content">
				
				<?php
					$args = array(
						'parent'     => 2,  //指定分类id
						'hide_empty' => 0,
						'orderby'    => 'id',
						'order'      => 'asc'
					);
					$categories = get_categories($args);
					foreach ($categories as $category) :
						$children = get_term_children($category->term_id, 'category');
						$cat_ids = array_merge(array($category->term_id), $children);
						$args_posts = array(
							'category__in'        => $cat_ids,
							'orderby'             => 'date',
							'order'               => 'asc',
							'posts_per_page'      => 6,  //显示6篇文章
							'ignore_sticky_posts' => true,  //排除置顶文章
						);
						$posts_query = new WP_Query($args_posts);
				?>
				<div class="ip m60">
					<div class="swiper-container">
						<ul class="swiper-wrapper">
							<?php
							while ($posts_query->have_posts()) : $posts_query->the_post();
							$article_data = get_post_meta($post->ID, 'extend_info', true);
							?>
							<li class="swiper-slide">
								<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(the_title_attribute('echo=0')); ?>">
									<div class="img">
										<?php if( !empty ( get_post_image() ) ){ ?>
										<img src="<?php echo esc_url( get_post_image() ); ?>" alt="<?php the_title_attribute(); ?>">
										<?php } else { ?>
										<img src="<?php echo get_template_directory_uri(); ?>/static/images/public/nopic.png" alt="<?php the_title_attribute(); ?>">
										<?php } ?>
									</div>
									<article>
										<h2><?php the_title(); ?></h2>
										<div class="txt mt30">
											<?php if( !empty ($article_data['produc_para']) ){ ?>
												<p><?php echo $article_data['produc_para']; ?></p>
											<?php } ?>
										
										</div>
										<button class="i_more mt80"><b>View all</b></button>
									</article>
								</a>
							</li>
							<?php endwhile; ?>
						</ul>
						<div class="ip_contro">
							<div class="ip-button-prev"><i class="fal fa-angle-left"></i></div>
							<div class="ip-button-next"><i class="fal fa-angle-right"></i></div>
							<div class="ip-pagination"></div>
						</div>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
				<?php endforeach; ?>
				
			</div>
		</div>

		<script>
			var banner_swiper = new Swiper('.ip .swiper-container', {
				effect: 'creative',
				grabCursor: true,
				loop: true,
				loopFillGroupWithBlank: true,
				roundLengths: true,
				centeredSlides: true,
				pagination: {
					el: '.ip-pagination',
					type: "progressbar",
					clickable:true
				},
				navigation: {
					prevEl: '.ip-button-prev',
					nextEl: '.ip-button-next',
				},
				// autoplay: {
				// 	delay: 3000,
				// 	pauseOnMouseEnter:true,
				// 	disableOnInteraction: false,
				// },
				speed:1000,
				observer: true,
				observeParents: true,
			});
		</script>
		<script src="<?php echo get_template_directory_uri(); ?>/static/js/jquery.tabso_yeso.js"></script>
		<script>
			$(".ip_menu_list").tabso({
			cntSelect:".ip_box .content",
			tabEvent:"click",
			tabStyle:"normal"
			});
		</script>
	</section>

	<!-- i_about -->
	<section class="i_about box_space wrap">
		<div class="i_ab_txt wow slideInLeft">
			<div class="i_tit">
				<h3><span>30 year experience</span></br>
					in scooters and power wheelchair</h3>
			</div>
			<article>
				<?php echo xintheme('i_about_text'); ?>
			</article>
			<div class="i_more_list mt50">
				<a href="<?php echo get_permalink(2); ?>" class="i_more"><b>View details</b></a>
				<a onClick="goTop()" href="javascript:;" class="i_more i_more_2"><b>Contact us</b></a>
			</div>
		</div>
		<div class="i_ab_pic wow slideInRight">
			<img src="<?php echo xintheme_img('i_about_pic',''); ?>" />
			<div class="i_v_btn" ipath="<?php echo xintheme('i_about_videos'); ?>"><i></i></div>
		</div>
		<div class="vd_box"></div>
		<script>
		  $(".i_v_btn").each(function(){
			var src = $(this).attr("ipath");
			if(src == null){
			  $(this).remove();
			}
		  });
		  $(".i_v_btn").click(function () {
			var v_link = $(this).attr('ipath');
			$('.vd_box').html("<div onclick=\"v_close()\" class=\"close_v\"></div><iframe id=\"iframe_v\" src='"+v_link+"?autoplay=1' title=\"\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>");
			$('.vd_box').show();
		  });
		  function v_close(){
			$('.vd_box').html("");
			$('.vd_box').hide();
		  }
		</script>
	</section>
	
	<section class="i_num_box br wow slideInUp">
		<ul class="i_num_list box_space wrap p70">
			<li>
			  <h6><span class="roll_num">30</span>+</h6>
			  <p>Industry experience</p>
			</li>
			<li>
			  <h6><span class="roll_num">20000</span>+</h6>
			  <p>Annual sales volume</p>
			</li>
			<li>
			  <h6><span class="roll_num">160</span>+</h6>
			  <p>Patent certificate</p>
			</li>
			<li>
			  <h6><span class="roll_num">60</span>%</h6>
			  <p>Market share</p>
			</li>
		</ul>
		<script src="<?php echo get_template_directory_uri(); ?>/static/js/roll-num.js"></script>
		<script>$('.roll_num').countUp();</script>
	</section>


	<!-- hot_product -->
	<section class="hot_p box_space2">
		<div class="wrap">
			<div class="i_tit i_tit_r wow slideInRight">
				<h3><span>Hot product</span></br>recommendation</h3>
			</div>
			<ul class="hp_list">
				<?php
					$cat_id = 2;  // 指定id
					$sub_cat_ids = get_term_children( $cat_id, 'category' ); // 获取指定id下所有子分类
					$sticky = get_option( 'sticky_posts' );  // 筛选置顶
				
					$args = array(
						'post_type' => 'post',
						'post__in'  => $sticky,
						'category__in' => array_merge( array( $cat_id ), $sub_cat_ids ),
						'posts_per_page' => 6 // 显示个数
					);
				
					if ( ! empty( $sticky ) ) {
						$query = new WP_Query( $args );
						while ( $query->have_posts() ) {
							$query->the_post();
				?>
				<li>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> 
						<div class="img">
							<?php if( !empty ( get_post_image() ) ){ ?>
							<img src="<?php echo esc_url( get_post_image() ); ?>" alt="<?php the_title_attribute(); ?>">
							<?php } else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/static/images/public/nopic.png" alt="<?php the_title_attribute(); ?>">
							<?php } ?>
						</div>
						<p><?php the_title(); ?>  </p>
					</a>   
				</li>
				<?php } } wp_reset_postdata(); ?>
				<div class="clear"></div>
			</ul>
			<div class="hp_but">
				<a href="<?php echo get_category_link(2); ?>" class="i_more"><b>View all</b></a>
			</div>
		</div>
	</section>

	<!-- i_service -->
	<section class="i_service box_space2" >
		<div class="img box_space">
			<img src="<?php echo get_template_directory_uri(); ?>/static/images/bc_i_service.webp" alt="">
			<article class="wrap_l wow slideInLeft">
				<p>
					<i>"</i>
					<?php echo xintheme('i_s'); ?>
				</p>
			</article>
		</div>
	</section>

	
	


</main>




<?php get_template_part( 'form' ); ?>

<!-- Footer -->
<?php get_footer();?>


</body>
</html>
