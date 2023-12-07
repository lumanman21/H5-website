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
	<div class="b_txt">
		<h6>excavator</h6>
		<p>Believe in yourself, believe in partners, win-win cooperation!</p>
	</div>
</div>
<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>


<main class="p_box p50">

	<!-- pd_box -->
	<div class="pd_box wrap">
		<div class="pd_l">
			<!-- 产品图集 -->
			<div class="p_d_box">
				<div class="p_d">
					<div class="p_d_list swiper-container">
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
									<img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />
								</div>
							</li>
							<?php endforeach;endif ?>
						</ul>
					</div>
					<div class="pt-pagination"></div>
					<div class="pt_but">
						<div class="pt-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
						<div class="pt-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
					</div>

				</div>
			</div>
		</div>
		<div class="pd_r">
			<b><?php echo $article_data['produc_guige']; ?></b>
			<h1><?php the_title(); ?></h1>
			<div class="grid_detail">
				<?php echo $article_data['produc_para']; ?>
			</div>
			<div class="i_more_list m30">
				<a class="i_more" href="javascript:void(0)" onclick="asfrom()"><b>Get a quote</b></a>
				<a class="i_more i_more2" href="https://wa.me/<?php echo xintheme('whatsapp'); ?>"  target="_blank" rel="nofollow"><b>Contact us</b></a>
			</div>
			<dl class="pd_ad m30">
				<dt>
					<h4>factory direct sale</h4>
					<p>There is no middleman spread the price is more favorable</p>
				</dt>
				<dt>
					<h4>Strict quality inspection</h4>
					<p>The quality is strictly tested the quality is trustworthy</p>
				</dt>
				<dt>
					<h4>After sales guarantee</h4>
					<p>Professional company team guaranteed after-sales service</p>
				</dt>
			</dl>
			<div class="tag">
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
			<div class="pd_share">
				<p>Shares</p>
				<ul>
					<li>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/static/images/public/media/facebook.svg" alt=""></a></li>
					<li>
						<a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>&text=<?php echo the_title_attribute(); ?>" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/static/images/public/media/twitter.svg" alt=""></a></li>
					<li>
						<a href="https://www.linkedin.com/shareArticle?url=<?php echo the_permalink(); ?>&title=<?php echo the_title_attribute(); ?>" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/static/images/public/media/linkedin.svg" alt=""></a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
	<script>
		var pswiper = new Swiper('.p_d_list', {
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
				delay: 300500,
				disableOnInteraction: false,
			},
			observer: true,
			observeParents: true,
			breakpoints: {
				0: {
				slidesPerView: 1,
				spaceBetween: 0,
				slidesPerGroup: 1
				},
				768: {
				slidesPerView: 1,
				spaceBetween: 0,
				slidesPerGroup: 1
				},
				1200: {
				slidesPerView: 1,
				spaceBetween: 0,
				slidesPerGroup: 1
				}
			}
		});

	</script>


	<!-- 编辑器 -->

	<div class="editor wrap m50">
		<div class="pd_tit">
			<span>Introduction</span>
		</div>
		<article>
			<?php if( get_the_content() ){ ?>
				<?php the_content(); ?>
			<?php } ?>
		</article>
	</div>


	<section class="pd_brief p100">
		<ul class="wrap">
			<li>
				<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/pd1.png" alt=""></div>
				<h6>rich experience</h6>
				<p>We are a well-known domestic trading company specializing in the import and export of construction machinery.</p>
			</li>
			<li>
				<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/pd2.png" alt=""></div>
				<h6>Global service</h6>
				<p>The company has been adhering to the concept of integrity management, products across the world, customers from all over the world</p>
			</li>
			<li>
				<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/pd3.png" alt=""></div>
				<h6>Multiple brands</h6>
				<p>Our brands include: Our brands include: used CAT, Komatsu, Hitachi, Kobelco, Sumitomo, Volvo, Doosan, Hyundai, Sany, XCMG, Zoomlion, Sanward, etc</p>
			</li>
		</ul>
	</section>



	<!-- hot_products -->
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
	<section class="hot_products_area wrap m100">
		<h2 class="s_tit">Related Products</h2>
		<!-- 内容 -->
		<div class="related_box mt60">
			<div class="rp_box wow slideInUp">
				<div class="rp" >
					<div class="rp_list p_list swiper-container">
						<ul class="swiper-wrapper">
							<?php
								while ($query->have_posts()) : $query->the_post();
							?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
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
								<div class="txt">
									<?php echo $category_data['produc_para']; ?>
								</div>
								<div class="ico"><iconify-icon icon="ph:caret-right-bold"></iconify-icon></div>
							</a></li>
							<?php endwhile; wp_reset_postdata(); ?>
							
						</ul>
					</div>
					<div class="pt-pagination hot-pagination "></div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; } ?>
	<script>
		// 首页 工厂滚动
		var pswiper = new Swiper('.rp_list', {
			loop: true,
			loopFillGroupWithBlank: true,
			// navigation: {
			// 	nextEl: '.ggg-button-next',
			// 	prevEl: '.ggg-button-prev',
			// },
			pagination: {
				el: '.hot-pagination',
				clickable: true,
				type : 'progressbar',
			},
			autoplay: {
				delay: 4500,
				disableOnInteraction: false,
			},
			observer: true,
			observeParents: true,
			breakpoints: {
				0: {
				slidesPerView: 2,
				spaceBetween: 20,
				slidesPerGroup: 1
				},
				768: {
				slidesPerView: 3,
				spaceBetween: 20,
				slidesPerGroup: 1
				},
				1024: {
				slidesPerView: 4,
				spaceBetween: 25,
				slidesPerGroup: 1
				}
			}
		});

	</script>
</main>









<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>