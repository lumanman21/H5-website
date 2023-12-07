<?php get_header(); ?>


<!-- header -->
<?php get_template_part('top') ?>





<!-- Banner -->
<div class="banner">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/banner_1.webp" />
				<div class="b_txt1 wrap">
					<h5 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".1s">
						Specializing in </br>
						<span>the R&D, design and manufacture </span></br>
						of various drinkware
					</h5>
					<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".2s">materials including stainless steel, plastic, silicone, glass, ceramic etc</h6>
					<a href="<?php echo get_category_link(3); ?>" 
					rel="nofollow" 
					class="i_more mt60 ani resize" swiper-animate-effect="fadeInUp" 
					swiper-animate-duration="1s"
					swiper-animate-delay=".3s"><b>MORE <i></i></b></a>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/banner_1.webp" />
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/banner_1.webp" />
			</div>
		</div>
		<div class="banner-button-prev"><iconify-icon icon="clarity:arrow-line" rotate="270deg"></iconify-icon>
		</div>
		<div class="banner-button-next"><iconify-icon icon="clarity:arrow-line" rotate="90deg"></iconify-icon></div>
		<div class="banner-pagination"></div>
	</div>
</div>
<div class="clear"></div>
<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>



<!-- Main -->
<main>
	<section class="i_p pt40 pb120">
		<div class="wrap">
			<div class="i_tit wow slideInUp">
				<h2>NEW ARRIVAL</h2>
			</div>
			<div class="ip_list swiper-container mt80">
				<ul class="swiper-wrapper">
					<?php
						$cat_id = 3;  // 指定id
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
								$category = get_the_category();
                                $catid = $category[0]->term_id;
                                $category_name = get_cat_name($catid);
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
								<img class="p_s" <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
								<?php
									$category_data = get_post_meta($post->ID, 'extend_info', true);
									$produc_img = explode( ',', $category_data['produc_img'] );
									$thumbnail_id1 = $produc_img[1];
									$thumbnail_alt2 = get_the_title();
								?>
								<img class="p_h" <?php echo get_category_thumbnail($thumbnail_id1, $thumbnail_alt2); ?> />
							</div>
							<h6><?php the_title(); ?></h6>
							<span><?php echo $category_name; ?></span>
						</a>
					</li>
					<?php } } wp_reset_postdata(); ?>



				</ul>
			</div>
		</div>
		<div class="ip-pagination"></div>
		<div class="ip-prev"></div>
		<div class="ip-next"></div>
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
				autoplay: {
					delay: 3000,
					pauseOnMouseEnter: true,
					disableOnInteraction: false,
				},
				observer: true,
				observeParents: true,
				breakpoints: {
					0: {
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
	</section>


	<section class="i_category m100">
		<img src="<?php bloginfo('template_url'); ?>/static/images/round1.png" alt="">
		<div class="i_tit wow slideInUp">
			<h2>Product Categories</h2>
		</div>
		<ul class="i_ca_list mt70 mb60 wrap">
			<?php
				$args = array(
					'child_of'     => 3,
					'parent'       => 3,
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
			
			<li>
				<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
					<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
					<div class="txt">
						<h6><?php echo esc_html( $cat->name ); ?></h6>
						<p><?php echo esc_html( $cat->description ); ?></p>
						<button class="ic_more">MORE</button>
					</div>
				</a>
			</li>
			<?php } ?>

		</ul>
		<a href="<?php echo get_category_link(3); ?>" rel="nofollow" class="i_more i_more_c m30"><b>MORE<i></i></b></a>

	</section>


	<section class="i_a_round pb100">
		<img src="<?php bloginfo('template_url'); ?>/static/images/round2.png" alt="">
		<!-- i_about -->
		<section class="i_about p120">
			<div class="wrap">
				<div class="ia_txt">
					<img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" alt="">
					<div class="i_tit i_tit_l">
						<h2>ABOUT US</h2>
					</div>
					<article>
						<?php echo xintheme('i_about'); ?>
					</article>

					<a href="<?php echo get_permalink(2); ?>" rel="nofollow" class="i_more mt50"><b>MORE<i></i></b></a>
				</div>
				<div class="ia_video">
					<img src="<?php echo xintheme_img('i_video_bc',''); ?>" alt="">
					<div class="i_v_btn" ipath="<?php echo xintheme('i_video_link'); ?>">
						<iconify-icon icon="ph:triangle-fill"></iconify-icon>
					</div>
					<div class="vd_box"></div>
				</div>
			</div>
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
		<section class="album wow slideInUp">
			<div class="wrap">
				<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/album.png" alt=""></div>
				<h6>WOOVO PRODUCT CATALOG <p>For product details and side-by-side comparisons.</p>
				</h6>
				<a href="<?php echo xintheme('album_load'); ?>" class="i_more i_more2"><b>Download<i></i></b></a>
			</div>
		</section>
	</section>

	<section class="i_ad mb100">
		<div class="i_tit">
			<h2>We support <span>OEM&ODM</span></h2>
			<h6>Most of our items are designed and open tooling by ourselves with world widely patents. Both our own design and OEM projects for clients are popular and successful in the market. </h6>
		</div>
		<div class="wrap mt100">
			<div class="img_box">
				<?php
					$i_oem = xintheme('i_oem');
					if($i_oem){
					foreach($i_oem as $value):
					$img_id = $value['i_ad_pic'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				?>
				<div class="img">
					<img src="<?php echo $img_src[0]; ?>" />
				</div>
				<?php endforeach; } ?>

			</div>
			<ul class="i_ad_list">
				<?php
					$i_oem = xintheme('i_oem');
					$num=1;
					if($i_oem){
					foreach($i_oem as $value):
				?>
				
				<li>
					<div class="i_ad_tit">
						<p>0<?php echo $num ?></p>
						<p><?php echo $value['i_ad_tit'] ?></p>
						<i></i>
					</div>
					<div class="i_ad_txt">
						<?php echo $value['i_ad_txt'] ?>
					</div>
				</li>
				<?php $num++; endforeach;  } ?>


			</ul>
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
			<script>
				$(".i_ad_list").tabso({
					cntSelect: ".img_box",
					tabEvent: "hover",
					tabStyle: "normal"
				});
			</script>
			<script>
				$('.i_ad_list').find('li').find('.i_ad_tit').each(function (i) {
					$(this).parent('li').hover(function () {
						if ($(this).hasClass('liNow')) {
							$('.i_ad_list').find('li').find('.i_ad_tit').removeClass('liNow');
							$('.i_ad_list').find('li').removeClass('liNow');
							$('.i_ad_list').find('.i_ad_txt').slideUp(300);
						} else {
							$('.i_ad_list').find('li').find('.i_ad_tit').removeClass('liNow');
							$('.i_ad_list').find('li').removeClass('liNow');
							$('.i_ad_list').find('.i_ad_txt').slideUp(300);
							$(this).addClass('liNow');
							$('.i_ad_list').find('li').eq(i).addClass('liNow');
							$('.i_ad_list').find('.i_ad_txt').eq(i).slideToggle(300);
						}
					})
				})
			</script>
		</div>
	</section>




	<section class="i_cus pt60 pb80">
		<div class="wrap">
			<div class="i_tit i_tit_w wow slideInUp">
				<h2>CUSTOMER REVIEW</h2>
			</div>
			<div class="i_cus_list swiper-container mt60">
				<ul class="swiper-wrapper">
					<?php
						$i_cus = xintheme('i_cus');
						if($i_cus){
						foreach($i_cus as $value):
						$img_id = $value['i_cus_pic'];
						$img_src = wp_get_attachment_image_src( $img_id, 'full' );
					?>
					
					<li class="swiper-slide">
						<div class="img">
							<img src="<?php echo $img_src[0]; ?>" />
							<dl>
								<dt><img src="<?php bloginfo('template_url'); ?>/static/images/ico_star.png" alt=""></dt>
								<dt><img src="<?php bloginfo('template_url'); ?>/static/images/ico_star.png" alt=""></dt>
								<dt><img src="<?php bloginfo('template_url'); ?>/static/images/ico_star.png" alt=""></dt>
								<dt><img src="<?php bloginfo('template_url'); ?>/static/images/ico_star.png" alt=""></dt>
								<dt><img src="<?php bloginfo('template_url'); ?>/static/images/ico_star.png" alt=""></dt>
							</dl>
						</div>
						<div class="txt"><?php echo $value['i_cus_txt'] ?></div>
					</li>
					<?php endforeach; } ?>


				</ul>
			</div>
		</div>
		<div class="i_cus-pagination"></div>
		<div class="i_cus-prev"></div>
		<div class="i_cus-next"></div>
		<script>
			var swiper = new Swiper('.i_cus_list', {
				loop: true,
				loopFillGroupWithBlank: true,
				//roundLengths: true,
				//centeredSlides: true,
				pagination: {
					el: '.i_cus-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.i_cus-prev',
					nextEl: '.i_cus-next',
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
						slidesPerView: 1,
						spaceBetween: '10',
						slidesPerGroup: 1,
					},
					560: {
						slidesPerView: 2,
						spaceBetween: '15',
						slidesPerGroup: 1,
					},
					1024: {
						slidesPerView: 3,
						spaceBetween: '30',
						slidesPerGroup: 1,

					},
				},
			});
		</script>
	</section>

	<section class="i_partner p70">
		<div class="par_partner_box">
			<div class="par_partner">
				<div class="par_partner_list swiper-container">
					<ul class="swiper-wrapper">
						<?php
							if( xintheme('i_brand') ){
							$i_brand = explode(',', xintheme('i_brand'));
							foreach ( $i_brand as $id ) :
							$img_src = wp_get_attachment_image_src( $id, 'full' );
							$img_caption = wp_get_attachment_caption($id);
						?>
						<li class="swiper-slide">
							<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
						</li>
						<?php endforeach; } ?>
					</ul>
				</div>
			</div>
		</div>
		<script>
			var pswiper = new Swiper('.par_partner_list', {
				loop: true,
				speed: 3000,
				freeMode: true,
				autoplay: {
					delay: 0,
					disableOnInteraction: false,
				},
				observer: true,
				observeParents: true,
				breakpoints: {
					0: {
						slidesPerView: 3,
						spaceBetween: 20,
						slidesPerGroup: 1
					},
					768: {
						slidesPerView: 4,
						spaceBetween: 20,
						slidesPerGroup: 1
					},
					1200: {
						slidesPerView: 6,
						spaceBetween: 40,
						slidesPerGroup: 1
					}
				}
			});
		</script>
	</section>

	<div class="bc1"></div>



</main>














<!-- Footer -->
<?php get_footer();?>
</body>
</html>
