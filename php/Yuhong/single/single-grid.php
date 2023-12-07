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
	<div class="in_b_text">
		<div class="wrap">
			<h2><?php echo $upcategory_name; ?></h2>
			<div class="breadcrumbs">
				<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>


<main>

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

				</div>
			</div>
		</div>
		<div class="pd_r">
			<h1><?php the_title(); ?></h1>
			<?php if( !empty ($article_data['produc_para']) ){ ?>
			<div class="grid_detail">
				<?php echo $article_data['produc_para']; ?>
			</div>
			<?php } ?>
			<div class="i_more_list m30">
				<a class="i_more" href="javascript:void(0)" onclick="asfrom()"><b>Inquiry</b></a>
				<a class="i_more i_more2" href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><b><?php echo xintheme('tel'); ?></b></a>
			</div>
			<dl class="pd_ad m30">
				<dt>
					<img src="<?php bloginfo('template_url'); ?>/static/images/ad1.png" alt="">
					<h4>quality goods</h4>
				</dt>
				<dt>
					<img src="<?php bloginfo('template_url'); ?>/static/images/ad2.png" alt="">
					<h4>100% direct marketing</h4>
				</dt>
				<dt>
					<img src="<?php bloginfo('template_url'); ?>/static/images/ad3.png" alt="">
					<h4>After sales guarantee</h4>
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



	<section class="i_why pd_why p50">
		<div class="wrap p50">
			<article>
				<p>We have strong mechanical team to ensure all machines well-maintenanced, high quality, 100% original.</p>
				<p>All parts are wll-maintenanced, original. can be inspected.</p>
				<p>Low working hours, original paint, cheap and high quality.</p>
				<p>Spare parts available, best working machine for you.</p>
				<p>We provide almost all kinds of used construction machines in good condition with low price.</p>
			</article>
		</div>
	</section>

	<!-- 编辑器 -->

	<section class="editor wrap">
		<div class="pd_tit">
			<span>Introduction</span>
		</div>
		<article>
			<?php if( get_the_content() ){ ?>
				<?php the_content(); ?>
			<?php } ?>
		</article>
	</section>

	<!-- hot_products -->
	<section class="hot_products_area wrap m100">
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
		<div class="i_tit">
			<h2><b>Related Products</b></h2>
		</div>
		<!-- 内容 -->
		<div class="related_box mt60">
			<div class="rp_box wow slideInUp">
				<div class="rp" >
					<div class="rp_list swiper-container" id="rp_list">
						<ul class="swiper-wrapper">
							<?php
								while ($query->have_posts()) : $query->the_post();
							?>
							<li class="swiper-slide">
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
									<h3><?php the_title(); ?></h3>
								</a>
							</li>
							<?php endwhile; wp_reset_postdata(); ?>
							
						</ul>
					</div>
					<div class="pt-pagination hot-pagination "></div>
				</div>
			</div>
		</div>
		<?php endif; } ?>
	</section>
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
				slidesPerView: 4,
				spaceBetween: 20,
				slidesPerGroup: 1
				},
				1200: {
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