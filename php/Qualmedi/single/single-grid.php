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






	
	
<main >
	<div class="in_p">
		<div class="in_position">
			<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
		<img class="img1" src="<?php bloginfo('template_url'); ?>/static/images/i2.png" alt="">
		<img class="img2" src="<?php bloginfo('template_url'); ?>/static/images/i1.png" alt="">


		<!-- pd_box -->
		<section class="pd_box p60">
			<div class="pd_img_box wrap">
				<div class="left_img">
					<div class="in_factory_cont wow slideInUp">
						<div class="in_factory_show_box">
							<div class="in_factory_show swiper">
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
				<div class="right_txt">
					<h1><?php the_title_attribute(); ?></h1>
					<p class="pd_order">
						Minimum order quantity：
						<?php if (!empty($article_data['produc_pieces'])) { ?>
								<?php echo $article_data['produc_pieces']; ?>
						<?php } else { ?>
								1
						<?php } ?>
							pieces.
					</p>
					<div class="parameters">
						<?php if( !empty ($article_data['produc_ms']) ){ ?>
							<?php echo $article_data['produc_ms']; ?>
						<?php } ?>
					</div>
					<div class="share m30">
						<p>share:</p>
						<a href="https://www.facebook.com/sharer/" target="_blank">
							<iconify-icon icon="ic:baseline-facebook"></iconify-icon>
						</a>
						<a href="" target="_blank">
							<iconify-icon icon="uil:linkedin"></iconify-icon>
						</a>
						<a href="" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/static/images/media/twitter_color.svg" alt="">
						</a>
					</div>
					<div class="i_more_list mt50">
						<a href="javascript:;" onclick="asfrom()" class="i_more i_more_color">INQUIRE</a>
						<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank" class="i_more"><iconify-icon icon="ri:whatsapp-fill"></iconify-icon>Whatsapp</a>
					</div>
					
				</div>
			</div>
		</section>


		<section class="detail_box">
			<div class="detail wrap">
				<div class="pd_tit">
					<span>Product Description</span>
				</div>
				<article class="m30">
					<?php if( get_the_content() ){ ?>
						<?php the_content(); ?>
					<?php } ?>
				</article>

			</div>

			<div class="accessory mt50 p80">
				<div class="wrap">
					<div class="pd_tit">
						<span>Accessories</span>
					</div>
					<div class="acc_list swiper-container">
						<ul class="swiper-wrapper" id="acc_list">
							
							<?php
								$article_data = get_post_meta($post->ID, 'extend_info', true);
								$product_acc = $article_data['product_acc'];
								if( !empty($product_acc) ){
								foreach($product_acc as $article_data){
									$pic_id = $article_data['product_acc_pic'];
									$pic_url = wp_get_attachment_image_src($pic_id,'full');
							?>
							<li class="swiper-slide">
								<div class="img"><img src="<?php echo $pic_url[0]; ?>" alt=""></div>
								<div class="txt">
									<h6><?php echo $article_data['product_acc_tit'] ?></h6>
									<p><?php echo $article_data['product_acc_txt'] ?></p>
								</div>
							</li>
							<?php } } ?>

						</ul>				
						<div class="acc-pagination"></div>
						<div class="acc-button-next"></div>
						<div class="acc-button-prev"></div>
					</div>


					<!-- tag -->
					<div class="tags mt40">
						<h6>Tags:</h6>
						<ul>
							<?php
								$tags = wp_get_post_tags($post->ID);
								if ( $tags ) {
							?>
							
							<?php foreach ( $tags as $tag ) { ?>
							<li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ) ?>" target="_blank"><?php echo esc_html( $tag->name ); ?></a></li>
							<?php } ?>
							
							<?php } ?>
			
						</ul>
					</div>
				</div>



			</div>
		</section>

	
	</div>

	


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
			<div class="mt50 wrap">
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






	<!-- pd_faq -->
	<section class="pd_faq p80">
		<div class="wrap">
			<h6>HOW TO?</h6>
			<ul class="pd_faq_list">
				<?php
					$article_data = get_post_meta($post->ID, 'extend_info', true);
					$product_faq = $article_data['product_faq'];
					if( !empty($product_faq) ){
					foreach($product_faq as $article_data){
				?>

				<li>
					<div class="txt">
						<h3><?php echo $article_data['p_f'] ?><i></i></h3>
						<p><?php echo $article_data['p_a'] ?></p>
					</div>
				</li>
				<?php } } ?>

				
			</ul>
			<a href="javascript:;" onclick="asfrom()" class="i_more i_more_color i_btn m40"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_call.png" alt="">Contact us</a>
			
		</div>
	</section>
	<script>
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

</main>
<div class="foot_space"></div>


<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
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
			slidesPerView:4,
			spaceBetween: 20,
			slidesPerGroup: 1
			}
		}
	});

	
	var pswiper = new Swiper('.acc_list', {
		loop: true,
		loopFillGroupWithBlank: true,
		navigation: {
			nextEl: '.acc-button-next',
			prevEl: '.acc-button-prev',
		},
		pagination: {
			el: '.acc-pagination',
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
			slidesPerView: 1,
			spaceBetween: 0,
			slidesPerGroup: 1
			},
			1024: {
			slidesPerView:2,
			spaceBetween: 20,
			slidesPerGroup: 1
			}
		}
	});
	/*查看大图*/
	var image = new Viewer(document.getElementById('acc_list'), {
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