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
						focus</br>second hand excavator</br>sell
					</h2>
					<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".2s">
						Our second-hand excavators have a complete range of models, including small, medium, and
						large models, which can meet the different needs of users.
					</h6>
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"
					 class="i_more ani resize mt40" swiper-animate-effect="fadeInUp"
						swiper-animate-duration="1s" swiper-animate-delay=".3s"><b><iconify-icon
								icon="ph:phone-call"></iconify-icon><?php echo xintheme('tel'); ?></b></a>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/banner_2.webp" />
				<div class="b_t wrap">
					<h2 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".1s">
						Create greater benefits for </br>users with high-quality services
					</h2>
					<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".2s">
						The company strives to provide every user with comprehensive, high-quality and efficient
						services, emphasizing "creating greater benefits for users with high-quality services"
					</h6>
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"
					 class="i_more ani resize mt40" swiper-animate-effect="fadeInUp"
						swiper-animate-duration="1s" swiper-animate-delay=".3s"><b><iconify-icon
								icon="ph:phone-call"></iconify-icon><?php echo xintheme('tel'); ?></b></a>
				</div>
			</div>
		</div>
		<div class="banner-button-prev"><iconify-icon icon="ant-design:left-outlined"></iconify-icon></div>
		<div class="banner-button-next"><iconify-icon icon="ant-design:right-outlined"></iconify-icon></i></div>
		<div class="banner-pagination"></div>
	</div>
</div>
<div class="clear"></div>
<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>

<main>
	<section class="i_brand wow slideInUp">
		<div class="i_tit">
			<h2><b>Machinery brand</b></h2>
			<p>Competitive price and quality</p>
		</div>
		<div class="brand_box wrap">
			<div class="brand_list swiper-container">
				<ul class="swiper-wrapper">
					<?php
						$i_brand = xintheme('i_brand');
						if($i_brand){
						foreach($i_brand as $value):
						$img_id = $value['i_brand_u'];
						$img_id2 = $value['i_brand_d'];
						$img_src = wp_get_attachment_image_src( $img_id, 'full' );
						$img_src2 = wp_get_attachment_image_src( $img_id2, 'full' );
					?>
					<li class="swiper-slide">
						<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
						<div class="img"><img src="<?php echo $img_src2[0]; ?>" /></div>
					</li>
					<?php endforeach; } ?>

				</ul>
			</div>
			<div class="brand-pagination"></div>
		</div>
		<script>
			var pswiper = new Swiper(".brand_list", {
				loop: true,
				loopFillGroupWithBlank: true,
				navigation: {
					nextEl: ".partner-button-next",
					prevEl: ".partner-button-prev",
				},
				pagination: {
					el: ".brand-pagination",
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
						slidesPerView: 3,
						spaceBetween: 10,
						slidesPerGroup: 1,
					},
					768: {
						slidesPerView: 4,
						spaceBetween: 20,
						slidesPerGroup: 1,
					},
					1200: {
						slidesPerView: 8,
						spaceBetween: 25,
						slidesPerGroup: 1,
					},
				},
			});
		</script>
	</section>

	<section class="i_p p100">
		<div class="ip_tit wrap">
			<div class="i_tit i_tit_l i_tit_w">
				<h2><b>hot products</b></h2>
				<p>Competitive price and quality</p>
			</div>
			<a href="<?php echo get_category_link(2); ?>" class="i_more" rel="nofollow"><b>more<iconify-icon icon="ep:right"></iconify-icon></b></a>
		</div>
		<div class="wrap m50">
			<div class="ip_menu">
				<div class="in_tit">
					<h3>products</h3><iconify-icon icon="memory:menu-down-fill"></iconify-icon>
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
						$categories = get_categories( $args );
						foreach ( $categories as $cat ) {
							$category_data = get_term_meta($cat->term_id, 'category_options', true);
					?>
					<li>
						<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
							<?php echo esc_html( $cat->name ); ?>                                          <!-- 名称 -->
						</a>
					</li>
					<?php } ?>
				</ul>
				<img src="<?php bloginfo('template_url'); ?>/static/images/bc_ip_menu.webp" alt="">
			</div>
			<div class="ip_box">
				<ul class="p_list">
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
									<?php
									$category_data = get_post_meta($post->ID, 'extend_info', true);
									$produc_img = explode( ',', $category_data['produc_img'] );
									$thumbnail_id = $produc_img[0];
									$thumbnail_alt = get_the_title();
								?>
								<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
							</div>
							<div class="txt">
								<p><?php the_title(); ?></p>
							</div>
						</a>
					</li>
					<?php } } wp_reset_postdata(); ?>


					

				</ul>


			</div>
		</div>
		<script>
			if(screen.width < 1025){
				$(function(){
					$(".in_tit").click(function () {
						$(this).toggleClass("on");
						$(".ip_menu_list").stop().slideToggle();
					});
				});
			}
		</script>
	</section>



	<!-- i_about -->
	<section class="i_about p80">
		<div class="wrap">
			<div class="ia_txt">
				<div class="i_tit i_tit_l">
					<h2><b><?php echo xintheme('i_name'); ?></b></h2>
				</div>
				<article>
					<?php echo xintheme('i_about'); ?>
				</article>
				<a href="<?php echo get_permalink(2); ?>" class="i_more" rel="nofollow"><b>more<iconify-icon icon="ep:right"></iconify-icon></b></a>
			</div>
			<div class="ia_video wow slideInRight">
				<img src="<?php echo xintheme_img('i_video_bc',''); ?>" alt="">
				<div class="i_v_btn" ipath="<?php echo xintheme('i_video_link'); ?>">
					<iconify-icon icon="bi:caret-right-fill"></iconify-icon>
				</div>
			</div>
		</div>
		<div class="vd_box"></div>
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
	</section>


	<!-- i_num_list -->
	<section>
		<ul class="i_num_list m100 wrap">
			<li>
				<h6><span class="roll_num">20</span>+</h6>
				<p>experiences</p>
			</li>
			<li>
				<h6><span class="roll_num">5000</span>+</h6>
				<p>second hand machinery</p>
			</li>
			<li>
				<h6><span class="roll_num">100</span>+</h6>
				<p>Over 50 acres of factory</p>
			</li>
			<li>
				<h6><span class="roll_num">3000</span>+</h6>
				<p>Maintenance factory</p>
			</li>
		</ul>
		<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
		<script>$('.roll_num').countUp();</script>
	</section>

	<section class="i_why p60">
		<div class="wrap p50">
			<div class="i_tit i_tit_w">
				<h2><b>why choose us</b></h2>
				<p>Competitive price and quality</p>
			</div>
			<article>
				<?php echo xintheme('i_why'); ?>
			</article>
		</div>
	</section>

	<ul class="i_ad wrap">
		<?php
			$i_ad = xintheme('i_ad');
			if($i_ad){
			foreach($i_ad as $value):
			$img_id = $value['i_ad_ico'];
			$img_src = wp_get_attachment_image_src( $img_id, 'full' );
		?>
		<li>
			<img src="<?php echo $img_src[0]; ?>" />
			<h6><?php echo $value['i_ad_tit'] ?></h6>
			<p>
				<?php echo $value['i_ad_txt'] ?>
			</p>
		</li>
		<?php endforeach; } ?>
	</ul>

	<section class="i_news p100">
		<div class="wrap">
			<div class="i_tit mb50">
				<h2><b>news</b></h2>
				<p>Competitive price and quality</p>
			</div>
			<div class="i_news_cont mt80">
				<div class="hot_news">
					<?php
						$cat_id = 3;  // 指定id
						$sub_cat_ids = get_term_children( $cat_id, 'category' ); // 获取指定id下所有子分类
						$sticky = get_option( 'sticky_posts' );  // 筛选置顶
					
						$args = array(
							'post_type' => 'post',
							'post__in'  => $sticky,
							'category__in' => array_merge( array( $cat_id ), $sub_cat_ids ),
							'posts_per_page' => 1 // 显示个数
						);
					
						if ( ! empty( $sticky ) ) {
							$query = new WP_Query( $args );
							while ( $query->have_posts() ) {
								$query->the_post();
					?>
				
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php display_post_image(); ?> 
						<div class="txt">
							<div class="n_date"><b><?php echo the_time('d') ?> </b><i><?php echo the_time('Y-m') ?></i></div>
							<h6><?php the_title(); ?></h6>
							<p>
								<?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?>
							</p>
							<span><iconify-icon icon="ep:right"></iconify-icon></span>
						</div>
					</a>
					<?php } } wp_reset_postdata(); ?>



				</div>
				<ul class="i_n_list">
					<?php
						$cat_id = 3; // 指定分类 ID
						$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
						$query_args = array(
							'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
							'posts_per_page' => 4, // 显示多少篇文章
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
							<div class="txt">
								<h6><?php the_title(); ?></h6>
								<p><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?> </p>
							</div>
							<div class="n_date"><b><?php echo the_time('d') ?> </b><i><?php echo the_time('Y-m') ?></i></div>
						</a>
					</li>
					<?php } wp_reset_postdata(); } ?>



					
				</ul>
			</div>
		</div>
	</section>
	

	
</main>










<!-- Footer -->
<?php get_footer();?>
</body>
</html>
