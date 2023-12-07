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
	<div class="wrap">
	<h2>about us</h2>
	</div>
</div>
<div class="in_position">
	<div class="wrap container">
	<?php echo in_breadcrumbs(); ?>
	</div>
</div>
<!-- anchor -->
<div class="mao_box p60 wrap bc_black">
	<div class="in_nav">
		<div class="in_nav_tit">
			<h6>About list</h6>
		</div>
		<ul class="menu_list">
			<li class="list"><a href="#about_1">our Introduction</a></li>
			<li class="list"><a href="#about_2">our advantages</a></li>
			<li class="list"><a href="#about_3">company video and pictures</a></li>
			<li class="list"><a href="#about_4">cooperative partners</a></li>
		</ul>
	</div>
</div>

<main>
	<!-- company_profile -->
	<section class="about_us wrap in_louti" id="about_1">
		<div class="about_us_left wow slideInLeft">
			<div class="i_tit">
				<h2>xiangjue<br>excavation machinery</h2>
			</div>
			<div class="about_us_text mt40">
				<?php echo xintheme('in_about_t'); ?>
			</div>
		</div>
		<div class="about_us_right">
			<img
			src="<?php bloginfo('template_url'); ?>/static/images/about_map.webp"
			alt=""
			/>
		</div>
		<dl class="b_num_list m120">
			<dt>
				<span><i class="roll_num">3000</i><i>+</i></span>
				<p>
					More than 3,000 second-hand excavators of various brands have been imported from home and abroad.Complete brand model.
				</p>
			</dt>
			<dt>
				<span><i class="roll_num">20</i><i>years+</i></span>
				<p>
					Engaged in second-hand construction machinery industry for 20 years,Stock supply, factory direct sales, quality assurance, professional service.
				</p>
			</dt>
			<dt>
				<span><i class="roll_num">10</i><i>+</i></span>
				<p>To provide users around the world with high quality used construction machinery.There are many cooperative brands and complete product series.</p>
			</dt>
		</dl>
		<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
		<script>$('.roll_num').countUp();</script>
	</section>

	<section class="in_ad in_louti p100" id="about_2">
		<div class="wrap wow slideInUp">
			<div class="i_tit center">
				<h2>our advantages</h2>
				<h6>China and even Asia's largest second-hand construction machinery trading company!</h6>
			</div>
			<ul class="ad_list mt80">
				<li>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/ad1.png" alt="">
					</div>
					<h6>large quantity of spot goods</h6>
					<p>
						The company has a large number of spot to choose from, complete brand models, China and even Asia's largest second-hand construction machinery trading company!
					</p>
				</li>
				<li>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/ad2.png" alt="">
					</div>
					<h6>factory direct sale</h6>
					<p>
					Spot supply, factory direct sales, quality assurance, professional services, to a hundred times to achieve your needs!
					</p>
				</li>
				<li>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/ad3.png" alt="">
					</div>
					<h6>customized service</h6>
					<p>
					With customer customization ability, can be customized according to customer needs, and has a strict quality control and management system to ensure that products meet customer standards and customer needs
					</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="a_media m100 in_louti" id="about_3">
		<div class="i_tit center">
			<h2>Company video and pictures</h2>
			<h6>China and even Asia's largest second-hand construction machinery trading company!</h6>
		</div>
		<div class="about_us_video wrap m80">
			<i class="about_us_i v_btn" ipath="<?php echo xintheme('in_video_link'); ?>"></i>
		</div>

		<ul class="if_menu wrap mt120 wow slideInUp">
			<li>Factory pictures</li>
			<li>products pictures</li>
			<li>Company pictures</li>
		</ul>
		<div class="if_content mt50 wow slideInUp">
			<div class="box">
				<section class="i_f wrap">
					<div class="swiper-container">
						<ul class="swiper-wrapper">
							<?php
								if( xintheme('in_factory') ){
								$in_factory = explode(',', xintheme('in_factory'));
								foreach ( $in_factory as $id ) :
								$img_src = wp_get_attachment_image_src( $id, 'full' );
								$img_caption = wp_get_attachment_caption($id);
							?>
							<li class="swiper-slide">
								<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
							</li>
							<?php endforeach; } ?>

							
						</ul>
					</div>
					<div class="if-button-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
					<div class="if-button-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
				</section>
				<section class="i_f wrap">
					<div class="swiper-container">
						<ul class="swiper-wrapper">
							<?php
								if( xintheme('in_product') ){
								$in_product = explode(',', xintheme('in_product'));
								foreach ( $in_product as $id ) :
								$img_src = wp_get_attachment_image_src( $id, 'full' );
								$img_caption = wp_get_attachment_caption($id);
							?>
							<li class="swiper-slide">
								<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
							</li>
							<?php endforeach; } ?>
						</ul>
					</div>
					<div class="i_f_but">
						<div class="if-button-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
						<div class="if-button-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
					</div>
				</section>
				<section class="i_f wrap">
					<div class="swiper-container">
						<ul class="swiper-wrapper">
							<?php
								if( xintheme('in_company') ){
								$in_company = explode(',', xintheme('in_company'));
								foreach ( $in_company as $id ) :
								$img_src = wp_get_attachment_image_src( $id, 'full' );
								$img_caption = wp_get_attachment_caption($id);
							?>
							<li class="swiper-slide">
								<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
							</li>
							<?php endforeach; } ?>
						</ul>
					</div>
					<div class="i_f_but">
						<div class="if-button-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
						<div class="if-button-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
					</div>
				</section>
			</div>
		</div>
		<script>
			var if_swiper = new Swiper('.i_f .swiper-container',{
				loop: true,
				loopFillGroupWithBlank: true,
				roundLengths: true,
				// centeredSlides: true,
				pagination: {
					el: '.i_f-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.if-button-prev',
					nextEl: '.if-button-next',
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
						spaceBetween: 30,
						slidesPerGroup: 1,
					},
					1025: {
						slidesPerView: 4,
						spaceBetween: 45,
						slidesPerGroup: 1,
					},
				},
			});
		</script>
		<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
		<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
		<script>
			$(".if_menu").tabso({
				cntSelect:".if_content .box",
				tabEvent:"click",
				tabStyle:"normal"
			});
		</script>
		
		<div class="a_show p80 m140">
			<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
			<h5>xiangjue</h5>
			<h6>engineering machinery,conquer the world</h6>
		</div>


	</section>
	<div class="vd_box"></div>
	<script>
		$(".v_btn").each(function(){
			var src = $(this).attr("ipath");
			if(src == null || src.trim() === ""){
				$(this).remove();
			}
		});
		$(".v_btn").click(function () {
			var v_link = $(this).attr('ipath');
			$('.vd_box')
			.html(
				`<div onclick="v_close()" class="close_v"></div><iframe id="iframe_v" src='${v_link}?autoplay=1' title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>`
			)
			.show();
		});
		function v_close() {
			$('.vd_box').html("").hide();
		}
	</script>

	<section class="in_cooper in_louti m140" id="about_4">
		<div class="wrap">
			<div class="ip_tit">
				<div class="i_tit">
					<span>cooperative partners</span>
					<h2>Integrity management cooperation and mutual win</h2>
				</div>
				<div class="txt">
					With KOMATSU/ Komatsu, HITACHI/ Hitachi, CAT/ Carter, KOBELCO/ Kobelco, DOOSAN/ Doosan, VOLVO/ Volvo, SANY/ SANY Heavy Industry, has a long-term strategic relationship, adhering to the "quality of the brand, service reputation" business purpose. Let every customer become our lifelong user, to provide users around the world with high quality used construction machinery.
				</div>
			</div>
			<div class="i_brand mt100">
				<div class="i_brand_list swiper-container">
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
			<script>
				var pswiper = new Swiper('.i_brand_list', {
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
							spaceBetween: 10,
							slidesPerGroup: 1
						},
						768: {
							slidesPerView: 5,
							spaceBetween: 10,
							slidesPerGroup: 1
						},
						1200: {
							slidesPerView: 7,
							spaceBetween:10,
							slidesPerGroup: 1
						}
					}
				});
			</script>
		</div>
	</section>


	
</main>
<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>









<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>