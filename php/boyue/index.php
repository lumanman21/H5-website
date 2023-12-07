<?php get_header(); ?>


<!-- header -->
<?php get_template_part('top') ?>





<!-- Banner -->
<div class="banner">
	
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" />
				<div class="b_txt1 wrap">
					<h2 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".1s">International </br> Well-known Brand Agent </h2>
					<h3 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".2s">Domestic High Quality Factory Direct Selling</h3>
					<a href="<?php echo get_category_link(2); ?>"
					rel="nofollow"
					class="i_more mt40 ani resize"
					swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".3s"
					><b>MORE<iconify-icon icon="bi:arrow-right"></iconify-icon></b></a>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b2.webp" />
				<div class="b_txt1 wrap">
					<h2
					class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".1s">USA Trijicon military grade </br>high-end infrared thermal</br> imaging scope </h2>
					<h3
					class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".2s">12μm 640*480px 60Hz-world's top thermal imaging scope</h3>
					<a href="<?php echo get_category_link(2); ?>"
					rel="nofollow"
					class="i_more mt40 ani resize"
					swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".3s"><b>MORE<iconify-icon icon="bi:arrow-right"></iconify-icon></b></a>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b3.webp" />
				<div class="b_txt1 wrap">
					<h2
					class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".1s">American L3 HARRIS PVS series</br> headwear night vision</h2>
					<h3
					class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".2s">Using the third generation of white phosphorus image tube military grade</br>  the line of sight is clearer and farther.</h3>
					<a href="<?php echo get_category_link(2); ?>"
					rel="nofollow"
					class="i_more mt40 ani resize"
					swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".3s"><b>MORE<iconify-icon icon="bi:arrow-right"></iconify-icon></b></a>
				</div>
			</div>
			
		</div>
		<div class="banner-button-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
		<div class="banner-button-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
		<div class="banner-pagination"></div>
	</div>
</div>
<div class="clear"></div>
<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>

<main>
	<section class="i_category p100">
		<div class="wrap">
			<div class="ic_tit">
				<div class="i_tit"><h2>Product Categories</h2></div>
				<a href="<?php echo get_category_link(2); ?>" rel="nofollow" class="i_more i_more_l"><b>MORE<iconify-icon icon="bi:arrow-right"></iconify-icon></b></a>
			</div>
			<div class="ic_box mt40">
				<?php
				$loop_cate_id = array(4);
				foreach ($loop_cate_id as $value) {
					$category_data = get_term_meta($value, 'category_options', true);
					$thumbnail_id = $category_data['cat_thumbnail'];
					$thumbnail_id2 = $category_data['cat_thumbnail2'];
					$thumbnail_alt = get_cat_name($value);
					$thumbnail_alt2 = get_cat_name($value) . " 2";
				?>
				
				<a
				class="wow slideInLeft"
				 href="<?php echo get_category_link($value); ?>" title="<?php echo get_cat_name($value); ?>">
					<button class="i_more i_more_f"><b>Discover now</b></button>
					<div class="img"><img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> /> </div>
					<div class="ic_img"><img <?php echo get_category_thumbnail($thumbnail_id2, $thumbnail_alt2); ?> /></div>
				</a>
				<?php } ?>


				<ul class="ic_list wow slideInRight">
					<?php
					$loop_cate_id = array(5, 6, 7, 8);
					foreach ($loop_cate_id as $value) {
						$category_data = get_term_meta($value, 'category_options', true);
						$thumbnail_id = $category_data['cat_thumbnail'];
						$thumbnail_id2 = $category_data['cat_thumbnail2'];
						$thumbnail_alt = get_cat_name($value);
						$thumbnail_alt2 = get_cat_name($value) . " 2";
					?>
					
					<li>
						<a href="<?php echo get_category_link($value); ?>" title="<?php echo get_cat_name($value); ?>">
							<div class="img"><img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> /> </div>
							<div class="ic_img"><img <?php echo get_category_thumbnail($thumbnail_id2, $thumbnail_alt2); ?> /> </div>
						</a>
					</li>
					<?php } ?>

				</ul>
			</div>
		</div>
	</section>

	<section class="hot_p p100">
		<div class="wrap">
			<div class="ic_tit">
				<div class="i_tit"><h2>hot Product</h2></div>
				<a href="<?php echo get_category_link(2); ?>" rel="nofollow" class="i_more i_more_l"><b>MORE<iconify-icon icon="bi:arrow-right"></iconify-icon></b></a>
			</div>
			<ul class="hp_list mt70 wow slideInUp">
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
				
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<div class="img">
						<?php
							$article_data = get_post_meta(get_the_ID(), 'extend_info', true);
							$produc_img = explode( ',', $article_data['produc_img'] );
							$thumbnail_id = $produc_img[0];
							$thumbnail_alt = get_the_title();
						?>
						<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
					</div>
					<h6><?php the_title(); ?></h6>
				</a></li>
				<?php } } wp_reset_postdata(); ?>

			</ul>
		</div>
	</section>

	<!-- i_about -->
	<section class="i_about p80">
		<div class="wrap">
			<div class="ia_txt">
				<div class="i_tit i_tit_l">
					<h2>ABOUT boyue</h2>
				</div>
				<article>
					<?php echo xintheme('i_about'); ?>
				</article>
				<a href="<?php echo get_permalink(3); ?>" rel="nofollow" class="i_more i_more_f"><b>more<iconify-icon icon="ep:right"></iconify-icon></b></a>
			</div>
			<div class="ia_video wow slideInRight">
				<img src="<?php echo xintheme_img('i_video_bc',''); ?>" alt="">
				<div class="i_v_btn" ipath="<?php echo xintheme('i_video_link'); ?>">
					<iconify-icon icon="bi:caret-right-fill"></iconify-icon>
				</div>
			</div>
		</div>
		<ul class="i_ad wrap mt80">
			<?php
				$i_ad = xintheme('i_ad');
				$num=1;
				if($i_ad){
					
				foreach($i_ad as $value):
				$img_id = $value['i_ad_ico'];
				$img_src = wp_get_attachment_image_src( $img_id, 'full' );
			?>
			
			<li class="wow slideInUp" data-wow-delay=".<?php echo $num; ?>s">
				<div class="ico"><img src="<?php echo $img_src[0]; ?>" /></div>
				<h6><?php echo $value['i_ad_tit'] ?></h6>
				<p><?php echo $value['i_ad_txt'] ?></p>
			</li>
			<?php $num++; endforeach;  } ?>


			
		</ul>
	</section>
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

	<section class="notice pt30 pb60">
		<div class="wrap wow slideInUp">
			<img src="<?php bloginfo('template_url'); ?>/static/images/notice.webp" alt="">
			<div class="txt">
				<span>Let customers find <img src="<?php bloginfo('template_url'); ?>/static/images/ico_nav.png" alt=""></span>
				<p>satisfactory products is our ultimate pursuit</p>
			</div>
		</div>
	</section>

	<section class="in_ew p100">
		<div class="i_tit wrap">
			<h2>image display</h2>
		</div>
		<div class="ew_list swiper-container mt60">
			<ul class="swiper-wrapper" id="ew_list">
				<?php
					if( xintheme('i_img_display') ){
					$i_img_display = explode(',', xintheme('i_img_display'));
					foreach ( $i_img_display as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				
				<li class="swiper-slide">
					<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
					<h6><?php echo $img_caption; ?></h6>
				</li>
				<?php endforeach; } ?>
				
			</ul>
		</div>
		<div class="ew-prev"></div>
		<div class="ew-next"></div>
		<div class="ew-pagination"></div>
		<script>
			var swiper = new Swiper('.ew_list', {
			loop: true,
			//loopFillGroupWithBlank: true,
			roundLengths: true,
			centeredSlides: true,
			pagination: {
				el: '.ew-pagination',
				clickable: true,
			},
			navigation: {
				prevEl: '.ew-prev',
				nextEl: '.ew-next',
			},
			// autoplay: {
			// 	delay: 3000,
			// 	pauseOnMouseEnter: true,
			// 	disableOnInteraction: false,
			// },
			observer: true,
			observeParents: true,
			breakpoints: {
				0: {
					slidesPerView: 1.5,
					spaceBetween: 0,
					slidesPerGroup: 1,
				},
				1025: {
					slidesPerView: 2,
					spaceBetween: 0,
					slidesPerGroup: 1,
				},
			},
		});
		</script>
	</section>


	<section class="i_new p70">
		<div class="wrap">
			<div class="ic_tit">
				<div class="i_tit"><h2>blog&news</h2></div>
				<a href="<?php echo get_category_link(3); ?>" rel="nofollow" class="i_more i_more_l"><b>MORE<iconify-icon icon="bi:arrow-right"></iconify-icon></b></a>
			</div>
			<div class="n_box mt60 mb30">
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
					<div class="in_img"><?php display_post_image(); ?></div>
					<div class="n_txt">
						<h6><?php the_title(); ?></h6>
						<p><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?></p>
						<button><span><?php echo the_time('Y-m-d') ?></span><iconify-icon icon="lucide:move-right"></iconify-icon></button>
					</div>
				</a>
				<?php } } wp_reset_postdata(); ?>


				<ul>
					<?php
						$cat_id = 3; // 指定分类 ID
						$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
						$query_args = array(
							'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
							'posts_per_page' => 2, // 显示多少篇文章
							'orderby' => 'date', // 按日期排序
							'order' => 'DESC', // 按降序排列
						);
						$all_posts = new WP_Query( $query_args );
						if ( $all_posts->have_posts() ) {
						while ( $all_posts->have_posts() ) {
						$all_posts->the_post();
					?>
					
					<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<div class="n_txt">
							<span><?php echo the_time('Y-m-d') ?></span>
							<p><?php the_title(); ?></p>
							<iconify-icon icon="lucide:move-right"></iconify-icon>
						</div>
						<div class="img"><?php display_post_image(); ?></div>
					</a></li>
					<?php } wp_reset_postdata(); } ?>
					
				</ul>
			</div>
		</div>
	</section>


	<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
	<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
	<script>
		/*查看大图*/
		var image = new Viewer(document.getElementById('ew_list'), {
			button: true,
			navbar: false,
			width: 660,
			title: false
		});
	
		
	</script>
</main>











<!-- Footer -->
<?php get_footer();?>
</body>
</html>
