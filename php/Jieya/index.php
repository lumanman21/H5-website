<?php get_header(); ?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="i_banner">
	<video loop autoplay muted>
		<source src="<?php echo xintheme('i_videos'); ?>" type="video/mp4">
	</video>
	<div class="b_t wrap">
		<div class="bt_l">
			<h2>The most trusted wet wipes manufacturer</h2>
			<h6>Make joy a habit and achieve a happy life</h6>
			<a href="<?php echo xintheme('i_m_link'); ?>" rel="nofollow" class="i_more">Watch Video</a>
		</div>
		<div class="bt_r">
			<img src="<?php bloginfo('template_url'); ?>/static/images/di_bai.png" alt="">
			<p>ABOUT US</p>
			<h5><?php echo xintheme('i_company'); ?></h5>
			<span>
				<?php echo xintheme('i_banner_txt'); ?>
			</span>
			<a href="<?php echo get_permalink(2); ?>" rel="nofollow" class="com_more"><iconify-icon icon="ei:arrow-right"></iconify-icon></a>
		</div>
	</div>
</div>
<script>
	$(window).on('load', function() {
		$('.b_t').addClass('slide_in');
	});
</script>
<div class="bt_r bt_b">
	<img src="<?php bloginfo('template_url'); ?>/static/images/di_bai.png" alt="">
	<p>ABOUT US</p>
	<h5><?php echo xintheme('i_company'); ?></h5>
	<span>
		<?php echo xintheme('i_banner_txt'); ?>
	</span>
	<a href="<?php echo get_permalink(2); ?>" rel="nofollow" class="com_more"><iconify-icon icon="ei:arrow-right"></iconify-icon></a>
</div>

<main>
	<section class="i_brand p30">
		<div class="brand_list swiper-container wrap">
			<ul class="swiper-wrapper">
				<?php
					if( xintheme('i_brand') ){
					$i_brand = explode(',', xintheme('i_brand'));
					foreach ( $i_brand as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				<li class="swiper-slide">
					<img src="<?php echo $img_src[0]; ?>" />
				</li>
				<?php endforeach; } ?>
				
			</ul>
			
			<div class="brand-prev"></div>
			<div class="brand-next"></div>
			<div class="brand-pagination"></div>
		</div>
		<script>
			var swiper = new Swiper('.brand_list', {
					loop: true,
					loopFillGroupWithBlank: true,
					//roundLengths: true,
					//centeredSlides: true,
					pagination: {
						el: '.brand-pagination',
						clickable: true,
					},
					navigation: {
						prevEl: '.brand-prev',
						nextEl: '.brand-next',
					},
					autoplay: {
						delay: 4500,
						pauseOnMouseEnter:true,
						disableOnInteraction: false,
					},
					observer: true,
					observeParents: true,
					breakpoints: {
						0:{
							slidesPerView: 4,
							spaceBetween: '10',
							slidesPerGroup: 1,
						},
						560:{
							slidesPerView: 5,
							spaceBetween: '20',
							slidesPerGroup: 1,
						},
						1024: {
							slidesPerView: 7,
							spaceBetween: '30',
							slidesPerGroup: 1,
						},
					},
				});
		</script>
	</section>
	
	
	<section class="i_oem">
		<div class="wrap">
			<div class="i_tit m30"><h2>OEM/ODM</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
			<div class="oem">
				<h6 class="gradient_tit">Planning, Development and Production</h6>
				<p>
					Joyalways has been deeply involved in the wipes business for nearly 30 years, integrating R&D, production and sales, and is one of the leading consumer goods manufacturers in China. We have rich experience in providing wipes OEM/ODM services, Our wipes OEM/ODM service covers the entire product life cycle from concept to design, manufacturing and after-sales service, providing you with industry-level products and services.
				</p>
				<a rel="nofollow" href="<?php echo get_permalink(18); ?>" class="com_more"><iconify-icon icon="ei:arrow-right"></iconify-icon></a>
			</div>
		</div>
	</section>
	
	<section class="i_ad wrap m70">
		<div class="ad">
			<div class="txt">
				<p>trust us</p>
				<h6>Our advantage</h6>
			</div>
			<img src="<?php bloginfo('template_url'); ?>/static/images/bc_i_oem1.png" alt="">
		</div>
		<div class="i_num">
			<img src="<?php bloginfo('template_url'); ?>/static/images/bc_i_oem2.png" alt="">
			<ul class="num_list">
				<li>
					<h5><span class="roll_num">20</span>+</h5>
					<p>YEARS OF EXPERIENCE</p>
				</li>
				<li>
					<h5><span class="roll_num">60</span>+</h5>
					<p>COUNTRIES</p>
				</li>
				<li>
					<h5><span class="roll_num">80</span>+</h5>
					<p>GLOBAL CLIENTS</p>
				</li>
			</ul>
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
			<script>$('.roll_num').countUp();</script>
		</div>
	</section>
	
	
	<section class="i_p wrap m90">
		<div class="i_tit m30"><h2>OUR PRODUCTS</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<ul class="ip_list">
			<?php
				$cat_id = 2;  // 指定id
				$sub_cat_ids = get_term_children( $cat_id, 'category' ); // 获取指定id下所有子分类
				$sticky = get_option( 'sticky_posts' );  // 筛选置顶
			
				$args = array(
					'post_type' => 'post',
					'post__in'  => $sticky,
					'category__in' => array_merge( array( $cat_id ), $sub_cat_ids ),
					'posts_per_page' => 7 // 显示个数
				);
			
				if ( ! empty( $sticky ) ) {
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) {
						$query->the_post();
			?>
			<li><a rel="nofollow" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="img"><?php display_post_image(); ?></div>
				<h6><?php the_title(); ?></h6>
			</a></li>
			<?php } } wp_reset_postdata(); ?>
			<li><a rel="nofollow" href="<?php echo get_permalink(297); ?>">
				<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/p6.png" alt=""></div>
				<h6><?php echo get_cat_name(6); ?></h6>
			</a></li>
			



			
		</ul>
		<a href="<?php echo get_category_link(2); ?>" rel="nofollow" class="i_more i_more_color i_more_c">more</a>
	</section>
	
	<section class="i_pack m80 p80">
		<div class="i_tit mb60"><h2>PACKAGING OPTIONS</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<div class="swiper-container wrap">
			<ul class="swiper-wrapper">
			<?php
					if( xintheme('i_pack') ){
					$i_pack = explode(',', xintheme('i_pack'));
					foreach ( $i_pack as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				<li class="swiper-slide">
					<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
				</li>
				<?php endforeach; } ?>
				
				
			</ul>
			<div class="ipack-pagination"></div>
			<div class="ipack-button-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
			<div class="ipack-button-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
		</div>
		<a href="<?php echo get_permalink(35); ?>" rel="nofollow" class="i_more i_more_color i_more_c mt60">more</a>
		<script>
			var if_swiper = new Swiper('.i_pack .swiper-container',{
				loop: true,
				loopFillGroupWithBlank: true,
				roundLengths: true,
				// centeredSlides: true,
				pagination: {
					el: '.ipack-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.ipack-button-prev',
					nextEl: '.ipack-button-next',
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
						spaceBetween: 10,
						slidesPerGroup: 1,
					},
					560: {
						slidesPerView: 3,
						spaceBetween: 20,
						slidesPerGroup: 1,
					},
					1025: {
						slidesPerView: 4,
						spaceBetween: 30,
						slidesPerGroup: 1,
					},
				},
			});
		</script>
	</section>
	
	
	
	<section class="brand_cus p30">
		<div class="b_cus_list swiper-container wrap">
			<ul class="swiper-wrapper">
				<?php
					if( xintheme('in_brand') ){
					$in_brand = explode(',', xintheme('in_brand'));
					foreach ( $in_brand as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				<li class="swiper-slide">
					<img src="<?php echo $img_src[0]; ?>" />
				</li>
				<?php endforeach; } ?>
			</ul>
			
			<div class="b_cus-prev"></div>
			<div class="b_cus-next"></div>
			<div class="b_cus-pagination"></div>
		</div>
		<script>
			var swiper = new Swiper('.b_cus_list', {
					loop: true,
					loopFillGroupWithBlank: true,
					//roundLengths: true,
					//centeredSlides: true,
					pagination: {
						el: '.b_cus-pagination',
						clickable: true,
					},
					navigation: {
						prevEl: '.b_cus-prev',
						nextEl: '.b_cus-next',
					},
					autoplay: {
						delay: 4500,
						pauseOnMouseEnter:true,
						disableOnInteraction: false,
					},
					observer: true,
					observeParents: true,
					breakpoints: {
						0:{
							slidesPerView: 4,
							spaceBetween: '10',
							slidesPerGroup: 1,
						},
						560:{
							slidesPerView: 6,
							spaceBetween: '20',
							slidesPerGroup: 1,
						},
						1024: {
							slidesPerView: 8,
							spaceBetween: '30',
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
	// 合作伙伴图集
	var image = new Viewer(document.getElementById('pack_list'), {
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
