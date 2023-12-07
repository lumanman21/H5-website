<?php
/*
Template Name: about
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>






<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_a.webp" />
	</div>
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>



<!-- anchor -->
<?php get_template_part('about_list') ?>

<main>
	<section class="story m70">
		<div class="wrap">
			<div class="i_tit"><h2>Our Story</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
			<ul class="in_num_list m70">
				<li>
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/s1.png" alt=""></div>
					<div class="txt">
						<h5><span class="roll_num">20</span>+</h5>
						<p>Years of experience</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/s2.png" alt=""></div>
					<div class="txt">
						<h5><span class="roll_num">60</span>+</h5>
						<p>countries</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/s3.png" alt=""></div>
					<div class="txt">
						<h5><span class="roll_num">80</span>+</h5>
						<p>global clients</p>
					</div>
				</li>
				<li>
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/s4.png" alt=""></div>
					<div class="txt">
						<h5><span class="roll_num">50</span>+</h5>
						<p>production line</p>
					</div>
				</li>
			</ul>
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
			<script>$('.roll_num').countUp();</script>
			
		</div>
	</section>

	<section class="in_content if_box mb60">
		<div class="wrap">
			<h6 class="com_tit">The most trusted wet wipes manufacturer</h6>
			<div class="txt m40">
				<?php echo xintheme('story_txt'); ?>
			</div>
			<div class="if_list swiper-container p50">
				<ul class="swiper-wrapper">
					<?php
						if( xintheme('story_gallery') ){
						$story_gallery = explode(',', xintheme('story_gallery'));
						foreach ( $story_gallery as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
					<li class="swiper-slide">
						<img src="<?php echo $img_src[0]; ?>" />
					</li>
					<?php endforeach; } ?>
				</ul>
				<div class="if-prev"></div>
				<div class="if-next"></div>
				<div class="if-pagination"></div>
				<script>
					var swiper = new Swiper('.if_list', {
							loop: true,
							loopFillGroupWithBlank: true,
							//roundLengths: true,
							//centeredSlides: true,
							pagination: {
								el: '.if-pagination',
								clickable: true,
							},
							navigation: {
								prevEl: '.if-prev',
								nextEl: '.if-next',
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
			</div>
		</div>
	</section>

	<!-- products -->
	<?php get_template_part('all_products') ?>

	<section class="brand_cus m80">
		<div class="i_tit mb50"><h2>Brand customers</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
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





<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>






<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>