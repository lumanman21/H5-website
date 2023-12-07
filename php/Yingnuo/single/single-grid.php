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






<div class="in_position">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>
	
	
<main >
	<!-- pd_box -->
	<section class="pd_box p80">
		<div class="pd_img_box wrap">
			<div class="left_img">
				<div class="in_factory_cont">
					<div class="in_factory_show_box">
						<div class="in_factory_show swiper">
							<div class="swiper-wrapper" id="p_list">
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
								<div class="swiper-slide">
									<div class="img">
										<img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />
									</div>
								</div>
								<?php endforeach;endif ?>
							</div>
						</div>
						
					</div>
					<div class="in_factory_list_box">
						<div class="in_factory_list swiper">
							<div class="swiper-wrapper">
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
								<div class="swiper-slide">
									<div class="img">
										<img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />
									</div>
								</div>
								<?php endforeach;endif ?>
							</div>
						</div>
						<div class="infactory-button-prev"></div>
						<div class="infactory-button-next"></div>
					</div>
					
				</div>
				<div class="infactory-pagination"></div>
			</div>
			<div class="right_txt wow slideInRight">
				<h1><?php the_title(); ?></h1>
				<div class="pd_share">
					<p>Minimum order quantity：
					<?php if (!empty($article_data['produc_min'])) { ?>
							<?php echo $article_data['produc_min']; ?>
					<?php } else { ?>
							500
					<?php } ?>
						pieces.
					</p>
					<div class="share">
						<p>share:</p>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank">
							<iconify-icon icon="ic:baseline-facebook"></iconify-icon>
						</a>
						<a href="https://www.linkedin.com/shareArticle?url=<?php echo the_permalink(); ?>&title=<?php echo the_title_attribute(); ?>" target="_blank">
							<iconify-icon icon="uil:linkedin"></iconify-icon>
						</a>
						<a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>" target="_blank">
							<iconify-icon icon="bi:twitter-x"></iconify-icon>
						</a>
					</div>
				</div>
				<div class="parameters">
				<?php if( !empty ($article_data['produc_ms']) ){ ?>
						<article id="produc_ms">
						<?php echo $article_data['produc_ms']; ?>
						</article>
					<?php } ?>
				</div>
				<div class="i_more_list mt50">
					<a href="javascript:;" onclick="asfrom()" class="i_more"><b>INQUIRE NOW</b></a>
					<a href="mailto:<?php echo xintheme('email'); ?>" class="i_more i_more2"><b>ASK FOR A SAMPLE</b></a>
				</div>
				
			</div>
		</div>
	</section>

	<section class="pd_bc p100">
		<h6>Mutually Beneficial and Win-Win, Creating the Future Together</h6>
	</section>


	<section class="detail_box p80 bc_black">
		<div class="wrap" data-sticky-container>
			<div class="detail wow slideInLeft">
				<!-- <div class="pd_tit">
					<span>Product Description</span>
				</div> -->
				<article class="content">
						<?php if( get_the_content() ){ ?>
							<?php the_content(); ?>
							<?php } ?>
				</article>
				<div class="n_navigation">
					<ul>
						<li class="wow slideInLeft">
							<?php $prevPost = get_previous_post(true); ?>
							<?php if (!empty($prevPost)) : ?>
							<a href="<?php echo esc_url(get_permalink($prevPost->ID)); ?>">
								<p>Previous:</p>
								<p><?php echo esc_html(get_the_title($prevPost->ID)); ?></p>
							</a>
							<?php endif; ?>
						</li>
						<li class="wow slideInLeft">
							<?php $nextPost = get_next_post(true); ?>
							<?php if (!empty($nextPost)) : ?>
							<a href="<?php echo esc_url(get_permalink($nextPost->ID)); ?>">
								<p>Next:</p>
								<p><?php echo esc_html(get_the_title($nextPost->ID)); ?></p>
							</a>
							<?php endif; ?>
						</li>
					</ul>
					
				</div>

			</div>
			<div class="pd_form" data-sticky data-margin-top="120" data-sticky-for="1023">
				<div class="pd_form_box">
					<div class="i_tit">
						<h2><span>Get in touch with us</span></h2>
					</div>
					<?php echo do_shortcode( '[wpforms id="77"]' ); ?>
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
	</section>

	

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
	<section class="r_p p80">
		<div class="i_tit">
			<h2>Related Products</h2>
		</div>
		<div class="mt50">
			<div class="r_p_list swiper-container">
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
								<h6><?php the_title(); ?></h6>
							</a>
						</li>
						<?php endwhile; wp_reset_postdata(); ?>
				</ul>				
			</div>
			<div class="rp-pagination"></div>
			<div class="rp-button-next"></div>
			<div class="rp-button-prev"></div>
		</div>
	</section>
	<?php endif; } ?>


	<div class="bc1"></div>
</main>
<script src="<?php bloginfo('template_url'); ?>/static/js/sticky.min.js"></script>
<script>
	var sticky = new Sticky('[data-sticky]', {});
</script>
<script>
	// gallery
	var fswiper = new Swiper(".in_factory_list", {
		slidesPerView: 4,
		spaceBetween: 1,
		slidesPerGroup: 1,
		watchSlidesProgress: true,
		breakpoints: {
			0: {
			direction: "horizontal"
			},
			960: {
			direction: "vertical"
			}
		}
	});
	var fswiper2 = new Swiper(".in_factory_show", {
		spaceBetween: 0,
		slidesPerView: 1,
		autoplay: {
			delay: 30000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: ".infactory-button-next",
			prevEl: ".infactory-button-prev",
		},
		pagination: {
			el: '.infactory-pagination',
			clickable: true,
		},
		thumbs: {
			swiper: fswiper
		}
	});


	// Related Product
	var pswiper = new Swiper('.r_p_list', {
		// loop: true,
		// loopFillGroupWithBlank: true,
		navigation: {
			nextEl: '.rp-button-next',
			prevEl: '.rp-button-prev',
		},
		pagination: {
			el: '.rp-pagination',
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
			slidesPerGroup: 1
			},
			767: {
			slidesPerView: 3,
			spaceBetween: 10,
			slidesPerGroup: 1
			},
			1200: {
			slidesPerView: 4,
			spaceBetween: 30,
			slidesPerGroup: 1
			}
		}
	});


	var swiper = new Swiper('.i_case_list', {
		loop: true,
		loopFillGroupWithBlank: true,
		//roundLengths: true,
		//centeredSlides: true,
		pagination: {
			el: '.i_case-pagination',
			clickable: true,
		},
		navigation: {
			prevEl: '.i_case-prev',
			nextEl: '.i_case-next',
		},
		autoplay: {
			delay: 3000,
			pauseOnMouseEnter:true,
			disableOnInteraction: false,
		},
		observer: true,
		observeParents: true,
		breakpoints: {
			0: {
				slidesPerView: 1,
				spaceBetween: '0',
				slidesPerGroup: 1,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: '0',
				slidesPerGroup: 1,
			},
			1025: {
				slidesPerView: 6,
				spaceBetween: '0',
				slidesPerGroup: 1,
			},
		},
	});


	
</script>
<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
<script>
	/*查看大图*/
	var image = new Viewer(document.getElementById('p_list'), {
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