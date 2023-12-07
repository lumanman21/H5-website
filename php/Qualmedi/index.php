<?php get_header(); ?>


<!-- header -->
<?php get_template_part('top') ?>







<script>
	if (screen.width > 1024) {
		$(document).ready(function(){
			var windowScrollTop = $(window).scrollTop();
			if(windowScrollTop>=200){
				$("header").css("background", "#fff");
			}else{
				$("header").css("background", "none");
			};
			$(window).scroll(function(){
				var windowScrollTop = $(window).scrollTop();
				if(windowScrollTop>=200){
					$("header").css("background", "#fff");
				}else{
					$("header").css("background", "none");
				};
			});
		});
	};
</script>
<!-- Banner -->
<div class="banner">
	
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" />
				<div class="b_txt1 wrap">
					<ul class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".1s">
						<li><span>CE</span></li>
						<li><span>ISO13485</span></li>
						<li><span>FDA</span></li>
					</ul>
					<h5  class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".2s"><span>QV-600 </span> Vein Finder</h5>
					<h6
					class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".3s">
						QV-600 High-end vein finder,clearer image,lower latency,more functions,the relentless pursuit of perfection.
					</h6>
					<a 
						class="i_more ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".4s"
						href="<?php echo get_category_link(2); ?>">READ  MORE</a>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" />
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" />
			</div>
		</div>
		<div class="banner-button-prev"><iconify-icon icon="clarity:arrow-line" rotate="270deg"></iconify-icon></div>
		<div class="banner-button-next"><iconify-icon icon="clarity:arrow-line" rotate="90deg"></iconify-icon></div>
		<div class="banner-pagination"></div>
	</div>
</div>
<div class="clear"></div>
<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>

<main>
	<section class="ip_box pt40 pb120">
		<div class="i_tit wow slideInUp">
			<h2>Product</h2>
		</div>
		<ul class="ip_menu m50">
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
				<li><span><?php echo esc_html( $cat->name ); ?></span></li>
				<?php } ?>
		</ul>

		<div class="ip_content">
			<div class="box wrap">

				<?php
						$args = array(
							'parent'     => 2,  //指定分类id
							'hide_empty' => 0,
							'orderby'    => 'id',
							'order'      => 'asc'
						);
						$categories = get_categories($args);
						foreach ($categories as $category) :
							$category_data = get_term_meta($category->term_id, 'category_options', true);
							$thumbnail_id = $category_data['cat_thumbnail'];
							$thumbnail_alt = $category->name;
							$children = get_term_children($category->term_id, 'category');
							$cat_ids = array_merge(array($category->term_id), $children);
							$args_posts = array(
								'category__in'        => $cat_ids,
								'orderby'             => 'date',
								'order'               => 'asc',
								'posts_per_page'      => 6,  //显示6篇文章
								'post__in'            => get_option('sticky_posts'),  //只调用置顶文章
							);
							$posts_query = new WP_Query($args_posts);
					?>
					<section class="i_p">
						<div class="ip_list swiper-container mt80">
							<ul class="swiper-wrapper">
								<?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
									<li class="swiper-slide">
										<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(the_title_attribute('echo=0')); ?>">
											<div class="img">
												<?php
													$category_data = get_post_meta($post->ID, 'extend_info', true);
													$produc_img = explode( ',', $category_data['produc_img'] );
													$thumbnail_id = $produc_img[0];
													$thumbnail_alt = get_the_title();
												?>
												<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
											</div>
											<h6><?php the_title(); ?></h6>
											<div class="ip_btn m30"><p><iconify-icon icon="ep:right"></iconify-icon><span>READ  MORE</span></p></div>
										</a>
									</li>
									<?php endwhile; ?>
								
							</ul>
						</div>
						<div class="ip-pagination"></div>
						<div class="ip-prev"></div>
						<div class="ip-next"></div>
					</section>
					<?php endforeach; ?>
					
				
			</div>
		</div>
		
	</section>
	<script>
		var swiper = new Swiper('.ip_list', {
			loop: true,
			loopFillGroupWithBlank: true,
			//roundLengths: true,
			//centeredSlides: true,
			pagination: {
				el: '.ip-pagination',
				clickable: true,
			},
			navigation: {
				prevEl: '.ip-prev',
				nextEl: '.ip-next',
			},
			// autoplay: {
			// 	delay: 3000,
			// 	pauseOnMouseEnter:true,
			// 	disableOnInteraction: false,
			// },
			observer: true,
			observeParents: true,
			breakpoints: {
				0:{
					slidesPerView: 2,
					spaceBetween: '5',
					slidesPerGroup: 1,
				},
				560: {
					slidesPerView: 3,
					spaceBetween: '20',
					slidesPerGroup: 1,
				},
				959: {
					slidesPerView: 4,
					spaceBetween: '25',
					slidesPerGroup: 1,
	
				},
			},
		});
		
	</script>
	<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
	<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
	<script>
		$(".ip_menu").tabso({
			cntSelect:".ip_content .box",
			tabEvent:"click",
			tabStyle:"normal"
		});
	
	</script>



	<!-- i_about -->
	<section class="i_about p120">
		<div class="wrap">
			<div class="ia_tit">
				<p>ABOUT US</p>
				<h6>QUALMEDI FOR QUALITY MEDICAL DEVICE</h6>
			</div>
			<div class="ia_txt">
				<article>
					<?php echo xintheme('in_about_t'); ?>
				</article>
				<a href="<?php echo get_category_link(2); ?>" class="ip_btn m40"><p><iconify-icon icon="ep:right"></iconify-icon><span>READ  MORE</span></p></a>
			</div>
			<div class="ia_video mt50">
				<img src="<?php echo xintheme_img('i_video_bc',''); ?>" alt="">
				<div class="i_v_btn" ipath="<?php echo xintheme('i_video_link'); ?>">
					<iconify-icon icon="ph:triangle-fill"></iconify-icon>
				</div>
				<div class="vd_box"></div>
			</div>
		</div>
	</section>
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





	<section class="i_cer pt60">
		<img src="<?php bloginfo('template_url'); ?>/static/images/i1.png" alt="">
		<div class="wrap">
			<div class="i_tit wow slideInUp">
				<h2>Certification</h2>
			</div>
			<div class="i_cer_list swiper-container mt60">
				<ul class="swiper-wrapper">
					<?php
						if( xintheme('i_certy') ){
						$i_certy = explode(',', xintheme('i_certy'));
						foreach ( $i_certy as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
					<li class="swiper-slide">
						<img src="<?php echo $img_src[0]; ?>" />
						<!-- <p><?php echo $img_caption; ?></p> -->
					</li>
					<?php endforeach; } ?>
				</ul>
				<div class="i_cer-prev"></div>
				<div class="i_cer-next"></div>
			</div>
			<a href="<?php echo get_permalink(12); ?>" class="i_more i_more_color i_more_c m50">READ  MORE</a>
		</div>
		<div class="i_cer-pagination"></div>
		
	</section>
	<script>
		var swiper = new Swiper('.i_cer_list', {
				loop: true,
				loopFillGroupWithBlank: true,
				//roundLengths: true,
				//centeredSlides: true,
				pagination: {
					el: '.i_cer-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.i_cer-prev',
					nextEl: '.i_cer-next',
				},
				// autoplay: {
				// 	delay: 3000,
				// 	pauseOnMouseEnter:true,
				// 	disableOnInteraction: false,
				// },
				observer: true,
				observeParents: true,
				breakpoints: {
					0:{
						slidesPerView: 2,
						spaceBetween: '10',
						slidesPerGroup: 1,
					},
					560:{
						slidesPerView: 3,
						spaceBetween: '15',
						slidesPerGroup: 1,
					},
					1024: {
						slidesPerView: 6,
						spaceBetween: '25',
						slidesPerGroup: 1,
		
					},
				},
			});
	</script>


	<!-- home_case -->
	<section class="home_case_bac m60 p60">
		<div class="home_case wrap">
			<div class="i_tit">
				<h2>Case</h2>
			</div>
			<div class="mt60">
				<div class="case_partner">
					<div class="case_partner_list swiper-container">
						<ul class="swiper-wrapper">
						

				
							<?php
								$cat_id = 4; // 指定分类 ID
								$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
								$query_args = array(
									'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
									'posts_per_page' => 8, // 显示多少篇文章
									'orderby' => 'date', // 按日期排序
									'order' => 'DESC', // 按降序排列
								);
								$all_posts = new WP_Query( $query_args );
								if ( $all_posts->have_posts() ) {
								while ( $all_posts->have_posts() ) {
								$all_posts->the_post();
								$article_data = get_post_meta($post->ID, 'extend_info', true);
							?>
							<li class="swiper-slide">
								<div class="img"><?php display_post_image(); ?></div>
								<h2><?php the_title(); ?></h2>
								<div class="i_case_btn" ipath="<?php echo $article_data['case_link']; ?>">
									<img src="<?php bloginfo('template_url'); ?>/static/images/i_case_v.png" alt="">
								</div>
							</li>
							<?php } wp_reset_postdata(); } ?>

						</ul>				
					</div>
					<div class="case-pagination"></div>
					<div class="pt-button-next case-button-next"></div>
					<div class="pt-button-prev case-button-prev"></div>
				</div>
				<div class="vd_box"></div>
			</div>
			<a href="<?php echo get_category_link(4); ?>" class="i_more i_more_c m40">READ  MORE</a>
		</div>
	</section>
	<script>
		var pswiper = new Swiper('.case_partner_list', {
			loop: true,
			speed:1000,
			loopFillGroupWithBlank: true,
			navigation: {
				nextEl: '.case-button-next',
				prevEl: '.case-button-prev',
			},
			pagination: {
				el: '.case-pagination',
				clickable: true,
			},
			// autoplay: {
			// 	delay: 3500,
			// 	disableOnInteraction: false,
			// },
			observer: true,
			observeParents: true,
			breakpoints: {
				0: {
				slidesPerView: 2,
				spaceBetween: 10,
				slidesPerGroup: 1
				},
				1024: {
				slidesPerView: 3,
				spaceBetween: 0,
				slidesPerGroup: 1
				}
			}
		});

		$(".i_case_btn").each(function () {
			var src = $(this).attr("ipath");
			if (src == null) {
				$(this).remove();
			}
		});
		$(".i_case_btn").click(function () {
			var v_link = $(this).attr('ipath');
			$('.vd_box').html("<div onclick=\"v_close()\" class=\"close_v\"></div><iframe id=\"iframe_v\" src='" + v_link + "?autoplay=1' title=\"\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>");
			$('.vd_box').show();
		});

	</script>


	<section class="i_new wrap m80">
		<div class="i_tit">
			<h2>NEWS</h2><a href="<?php echo get_category_link(3); ?>" class="i_more i_more_color">READ  MORE</a>
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

			<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="txt">
					<div class="in_tit">
						<p><?php echo the_time('Y.m.d') ?></p>
						<h6><?php the_title(); ?></h6>
					</div>
					<article>
						<?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?>
					</article>
					<div class="ip_btn m40"><p><iconify-icon icon="ep:right"></iconify-icon><span>READ  MORE</span></p></div>
				</div>
				<div class="img"><?php display_post_image(); ?></div>
			</a></li>
			<?php } wp_reset_postdata(); } ?>

			
		</ul>

		<!-- honor -->
		<section class="i_honor mt100">
			<div class="i_tit wow slideInUp">
				<h2>honor</h2>
			</div>
			<div class="i_honor_list swiper-container mt60">
				<ul class="swiper-wrapper">
					<?php
						if( xintheme('i_honor') ){
						$i_honor = explode(',', xintheme('i_honor'));
						foreach ( $i_honor as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
					<li class="swiper-slide">
						<img src="<?php echo $img_src[0]; ?>" />
						<!-- <p><?php echo $img_caption; ?></p> -->
					</li>
					<?php endforeach; } ?>
					
				</ul>
				<div class="i_honor-prev"></div>
				<div class="i_honor-next"></div>
				<div class="i_honor-pagination"></div>
			</div>
			
		</section>
		<script>
			var swiper = new Swiper('.i_honor_list', {
					loop: true,
					loopFillGroupWithBlank: true,
					//roundLengths: true,
					//centeredSlides: true,
					pagination: {
						el: '.i_honor-pagination',
						clickable: true,
					},
					navigation: {
						prevEl: '.i_honor-prev',
						nextEl: '.i_honor-next',
					},
					// autoplay: {
					// 	delay: 3000,
					// 	pauseOnMouseEnter:true,
					// 	disableOnInteraction: false,
					// },
					observer: true,
					observeParents: true,
					breakpoints: {
						0:{
							slidesPerView: 2,
							spaceBetween: '10',
							slidesPerGroup: 1,
						},
						560:{
							slidesPerView: 3,
							spaceBetween: '15',
							slidesPerGroup: 1,
						},
						1024: {
							slidesPerView: 4,
							spaceBetween: '20',
							slidesPerGroup: 1,
			
						},
					},
				});
		</script>
	</section>





</main>







<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
<script>
	/*查看大图*/
	var image = new Viewer(document.getElementById('ic_list'), {
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
