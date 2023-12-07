<?php get_header(); ?>


<!-- header -->
<?php get_template_part('top') ?>


	<!-- banner -->
	<div class="banner">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="<?php bloginfo('template_url'); ?>/static/images/banner_1.webp" />
					<div class="b_t wrap">
						<h2 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".1s">
							20 <span>YEARS</span></h2>
						<h6
							class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".2s">USED EXCAVATOR QUALITY SUPPLIER.</br>Have your own supply factory.</h6>
						<a 
							href="<?php echo get_category_link(2); ?>" 
							class="i_but ani resize mt40"
							swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".3s"
							><span><b>MORE</b></span></a>
					</div>
				</div>
				
			</div>
			<div class="banner-button-prev"><i class="fal fa-angle-left"></i></div>
			<div class="banner-button-next"><i class="fal fa-angle-right"></i></div>
			<div class="banner-pagination"></div>
		</div>
	</div>
	<div class="clear"></div>
	<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>


	<main>

		<!-- i_product -->
		<section class="i_product p100">
			<div class="i_tit wrap wow slideInUp">
				<span>
					<i>Product Category</i>
					<h2>Product Category</h2>
				</span>
			</div>

			<div class="i_p mt40 wrap">
				<div class="swiper-container">
					<ul class="swiper-wrapper">
						<?php
							$args = array(
								'child_of'     => 2,
								'parent'       => 2,
								'hide_empty'   => 0,
								'orderby'      => 'id',
								'order'        => 'ASC',
							);
							$categories = get_categories( $args );
							foreach ( $categories as $cat ) {
								$category_data = get_term_meta($cat->term_id, 'category_options', true);
								$thumbnail_id = $category_data['cat_thumbnail'];
								$thumbnail_alt = $cat->name;
						?>
						<li class="swiper-slide">
							<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
								<div class="img"><img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?>></div>
								<h6><b><?php echo esc_html( $cat->name ); ?></b></h6>
							</a>
						</li>
						<?php } ?>
						

					</ul>
					<div class="i_p-button-prev"><i class="fal fa-arrow-left"></i></div>
					<div class="i_p-button-next"><i class="fal fa-arrow-right"></i></div>
					<div class="i_p-pagination"></div>
				</div>
			</div>

		</section>

		<!-- ip_brand -->
		<section class="ip_brand pb30">
			<div class="ip_brand_tit mask_t mask_b p140">
				<div class="i_tit i_tit_c i_tit_w wow slideInUp">
					<span>
						<i>POPULAR BRANDS</i>
						<h2>POPULAR BRANDS</h2>
					</span>
				</div>
			</div>
			<ul class="ib_list wrap">
			<?php
				$i_product = xintheme('i_product');
				$loop_cate_id = explode(',', $i_product);
				foreach ($loop_cate_id as $value) {
					$category_data = get_term_meta($value, 'category_options', true);
					$thumbnail_id = $category_data['cat_thumbnail'];
					$thumbnail_alt = get_cat_name($value);
				?>
				<li><a href="<?php echo get_category_link($value); ?>" title="<?php echo get_cat_name($value); ?>">
					<div class="img">
						<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?>/> 
					</div>
					<h6><?php echo get_cat_name($value); ?> </h6>
				</a></li>
				<?php } ?>





				<li><a href="<?php echo get_category_link(2); ?>">
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.webp" alt="">
					</div>
					<div class="txt">
						<h5>MORE</h5>
						<p><i class="fal fa-angle-right"></i></p>
					</div>
				</a></li>

			</ul>
		</section>


		<!-- i_about -->
		<section class="i_about wrap m100">
			<div class="ia_video">
				<img src="<?php bloginfo('template_url'); ?>/static/images/i_a.webp" alt="">
				<div class="i_v_btn" ipath="<?php echo xintheme('i_video_link'); ?>">
					<i class="fas fa-caret-right"></i>
				</div>
				<div class="vd_box"></div>
			</div>
			<div class="ia_txt">
				<div class="i_tit">
					<span>
						<i>ABOUT US</i>
						<h2>ABOUT US</h2>
					</span>
				</div>
				<article>
					<?php echo xintheme('i_about'); ?>
				</article>
				<ul class="i_num_list mt30">
					<li>
					  <h6><span class="roll_num">20</span>+</h6>
					  <p>Experience</p>
					</li>
					<li>
					  <h6><span class="roll_num">30</span>%</h6>
					  <p>Annual sales growth</p>
					</li>
					<li>
					  <h6><span class="roll_num">50</span>+</h6>
					  <p>Sold to countries</p>
					</li>
				</ul>
				<a href="<?php echo get_permalink(2); ?>" class="i_more"><b>MORE</b></a>
			</div>
		</section>
		<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
		<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
		<script>$('.roll_num').countUp();</script>
		<script>
			$(".i_v_btn").each(function () {
				var src = $(this).attr("ipath");
				if (src == null) {
					$(this).remove();
				}
			});
			$(".i_v_btn").click(function () {
				var v_link = $(this).attr('ipath');
				$('.vd_box').html("<div onclick=\"v_close()\" class=\"close_v\"></div><iframe id=\"iframe_v\" src='" + v_link + "?autoplay=1' title=\"\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>");
				$('.vd_box').show();
			});
			function v_close() {
				$('.vd_box').html("");
				$('.vd_box').hide();
			}
		</script>

		<!-- i_form -->
		<section class="i_form">
			<div class="i_form_txt mask_t p120">
				<div class="wrap">
					<article>
						<h6>Export of second-hand construction machinery</h6>
						<p>
							Complete variety, regular company, trustworthy, original authentic products.
						</p>
						<a href="javascript:;" class="i_more mt50" onclick="asfrom()"><b>MORE</b></a>
					</article>
				</div>
			</div>
			<div class="i_f p70">
				<div class="wrap">
					<h6>RICH IN PRODUCTS.THERE IS ALWAYS A PRODUCT SUITABLE FOR YOU</h6>
					<?php echo do_shortcode( '[wpforms id="37"]' ); ?>
				</div>
			</div>
		</section>
		<div class="clear"></div>


		<!-- i_factory -->
		<section class="i_factory wrap mt80">
			<div class="i_tit wow slideInUp">
				<span>
					<i>Factory</i>
					<h2>Factory</h2>
				</span>
			</div>
			<div class="i_fa mt40">
				<div class="swiper-container">
					<ul class="swiper-wrapper" id="if_list">
					<?php
						if( xintheme('in_factory') ){
						$in_factory = explode(',', xintheme('in_factory'));
						foreach ( $in_factory as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
						<li class="swiper-slide">
							<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
						</li>
						<?php endforeach; } ?>
					</ul>
					<div class="i_fa-button-prev"><i class="far fa-angle-left"></i></div>
					<div class="i_fa-button-next"><i class="fal fa-angle-right"></i></div>
					<div class="i_fa-pagination"></div>
				</div>
			</div>
		</section>
		<div class="clear"></div>

		<section class="i_new wrap_r m80">
			<div class="in_pic">
				<img src="<?php bloginfo('template_url'); ?>/static/images/i_new.webp" alt="">
				<div class="i_tit i_tit_c">
					<span>
						<i>NEWS</i>
						<h2>NEWS</h2>
					</span>
				</div>
			</div>
			<ul class="in_list">
				<?php
					$cat_id = 3; // 指定分类 ID
					$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
					$query_args = array(
						'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
						'posts_per_page' => 3, // 显示多少篇文章
						'orderby' => 'date', // 按日期排序
						'order' => 'DESC', // 按降序排列
					);
					$all_posts = new WP_Query( $query_args );
					if ( $all_posts->have_posts() ) {
					while ( $all_posts->have_posts() ) {
					$all_posts->the_post();
				?>
				<li>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<div class="img"><?php display_post_image(); ?></div>
						<article>
							<h6><?php the_title(); ?></h6>
							<span><?php echo the_time('Y.m.d') ?> </span>
							<p>
								<?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?>  
							</p>
						</article>
					</a>
				</li>
				<?php } wp_reset_postdata(); } ?>

			</ul>

		</section>
		<div class="clear"></div>



		

	</main>
	<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
	<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
	<script>
		// 产品
		var ip_swiper = new Swiper('.i_p .swiper-container', {
			loop: true,
			loopFillGroupWithBlank: true,
			roundLengths: true,
			// centeredSlides: true,
			pagination: {
				el: '.i_p-pagination',
				clickable: true,
			},
			navigation: {
				prevEl: '.i_p-button-prev',
				nextEl: '.i_p-button-next',
			},
			// autoplay: {
			// 	delay: 3000,
			// 	pauseOnMouseEnter:true,
			// 	disableOnInteraction: false,
			// },
			observer: true,
			observeParents: true,
			breakpoints: {
				0: {
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
		// 工厂
		var ip_swiper = new Swiper('.i_fa .swiper-container', {
			loop: true,
			loopFillGroupWithBlank: true,
			roundLengths: true,
			// centeredSlides: true,
			pagination: {
				el: '.i_fa-pagination',
				clickable: true,
			},
			navigation: {
				prevEl: '.i_fa-button-prev',
				nextEl: '.i_fa-button-next',
			},
			// autoplay: {
			// 	delay: 3000,
			// 	pauseOnMouseEnter:true,
			// 	disableOnInteraction: false,
			// },
			observer: true,
			observeParents: true,
			breakpoints: {
				0: {
					slidesPerView: 2,
					spaceBetween: 20,
					slidesPerGroup: 1,
				},
				959: {
					slidesPerView: 3,
					spaceBetween: 30,
					slidesPerGroup: 1,
				},
			},
		});

		
	
		// 合作伙伴图集
		var image = new Viewer(document.getElementById('if_list'), {
			button: true,
			navbar: false,
			width: 660,
			title: false
		});
	</script>





<!-- Footer -->
<?php get_footer();?>
</body>
</html>
