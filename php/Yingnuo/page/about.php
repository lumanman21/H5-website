<?php
/*
Template Name: about
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>





<!-- banner -->
<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_a.webp" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>About</h2>
			<div class="breadcrumbs">
				<a href="javascript:;">Home</a>
				<a href="javascript:;">About us</a>
			</div>
		</div>
	</div>
</div>

<main>
	<section class="a_company">
		<img src="<?php bloginfo('template_url'); ?>/static/images/round2.png" alt="">
		<div class="wrap m70">
			<div class="in_ab_t">
				<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
				<div class="i_tit i_tit_l">
					<h2>ABOUT US</h2>
				</div>
				<article>
					<?php echo xintheme('in_about_t'); ?>
				</article>
				
				<ul class="in_rz mt70">
					<li><img src="<?php bloginfo('template_url'); ?>/static/images/other/rz1.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/static/images/other/rz2.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/static/images/other/rz3.png" alt=""></li>
					<li><img src="<?php bloginfo('template_url'); ?>/static/images/other/rz4.png" alt=""></li>
				</ul>
				
			</div>
			<div class="img">
				<img src="<?php echo xintheme_img('in_a_pic',''); ?>" alt="">
				<div class="i_v_btn" ipath="<?php echo xintheme('in_video_link'); ?>">
					<iconify-icon icon="ph:triangle-fill"></iconify-icon>
				</div>
			</div>
			<div class="vd_box"></div>
		</div>

		<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
		<script>
			$(".i_v_btn").each(function(){
				var src = $(this).attr("ipath");
				if(src == null){
				$(this).remove();
				}
			});
			$(".i_v_btn").click(function () {
				var v_link = $(this).attr('ipath');
				$('.vd_box').html("<div onclick=\"v_close()\" class=\"close_v\"></div><iframe id=\"iframe_v\" src='"+v_link+"?autoplay=1' title=\"\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>");
				$('.vd_box').show();
			});
			function v_close(){
				$('.vd_box').html("");
				$('.vd_box').hide();
			}
		</script>
		
		
	</section>


	<section class="a_gallery bor p80">
		<div class="wrap">
			<div class="i_tit">
				<h2>COMPANY ENVIRONMENT</h2>
			</div>
			<h6>
				We dedicate to Nail Art Wholesale for more than ten years, we also provide samples order and trail order to meet different requests from customers,
			</h6>
			<ul class="gallery_list mt50">
				<?php
					if( xintheme('in_factory') ){
					$in_factory = explode(',', xintheme('in_factory'));
					foreach ( $in_factory as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				<li>
					<img src="<?php echo $img_src[0]; ?>" />
				</li>
				<?php endforeach; } ?>

			</ul>
		</div>
	</section>


	<section class="in_certy pt60">
		<div class="wrap">
			<div class="i_tit wow slideInUp">
				<h2><span>Certificates</span></h2>
			</div>
			<div class="in_certy_list swiper-container mt80">
				<ul class="swiper-wrapper">
					<?php
						if( xintheme('in_certy') ){
						$in_certy = explode(',', xintheme('in_certy'));
						foreach ( $in_certy as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
					<li class="swiper-slide">
						<img src="<?php echo $img_src[0]; ?>" />
					</li>
					<?php endforeach; } ?>
					
				</ul>
			</div>
		</div>
		<div class="in_certy-pagination"></div>
		<div class="in_certy-prev"></div>
		<div class="in_certy-next"></div>
		
	</section>


	<section class="gal p80">
		<div class="wrap">
			<div class="i_tit">
				<h2>gallery</h2>
			</div>
			<div class="gal_list swiper-container m50">
				<ul class="swiper-wrapper">
					<?php
						if( xintheme('in_gallery') ){
						$in_gallery = explode(',', xintheme('in_gallery'));
						foreach ( $in_gallery as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
					<li class="swiper-slide">
						<img src="<?php echo $img_src[0]; ?>" />
					</li>
					<?php endforeach; } ?>
					
				</ul>
			</div>
		</div>
		<div class="gal-pagination"></div>
		<div class="gal-prev"></div>
		<div class="gal-next"></div>
		<script>
			var swiper = new Swiper('.gal_list', {
				// loop: true,
				// loopFillGroupWithBlank: true,
				//roundLengths: true,
				//centeredSlides: true,
				pagination: {
					el: '.gal-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.gal-prev',
					nextEl: '.gal-next',
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
						spaceBetween: '10',
						slidesPerGroup: 1,
					},
					768: {
						slidesPerView: 3,
						spaceBetween: '10',
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

	</section>


	<!-- customized -->
	<section class="customized p100">
		<img src="<?php bloginfo('template_url'); ?>/static/images/round1.png" alt="">
		<div class="wrap">
			<ul class="cus_list">
				<?php
					$i_oem = xintheme('i_oem');
					$num=1;
					if($i_oem){
					foreach($i_oem as $value):
				?>
				
				
				<li>
					<div class="ico">0<?php echo $num ?></div>
					<div class="txt">
						<h3><?php echo $value['i_ad_tit'] ?><i></i></h3>
						<p><?php echo $value['i_ad_txt'] ?></p>
					</div>
				</li>
				<?php $num++; endforeach;  } ?>

				
			</ul>
			<div class="cus_txt">
				<div class="i_tit i_tit_l">
					<h2>Comprehensive support and customized services</h2>
				</div>
				<article>
					We will customize product logos, package boxes, and other services according to customer needs and order quantities, and try our best to satisfy every customer!
				</article>
				<div class="i_more_list mt50">
					<a href="./products_list.html" class="i_more i_more2"><b>Customization</b></a>
					<a href="./products_list.html" class="i_more"><b>Contact us</b></a>
				</div>
			</div>
		</div>
		<script>
			var faqList = $('.cus_list li');
			faqList.click(function() {
				var p = $(this).find('p');
				if (p.is(':hidden')) {
					$(this).find('p').slideUp('fast');
					p.slideDown('fast');
					$(this).addClass('curr');
				} else {
					p.slideUp('fast');
					$(this).removeClass('curr');
				}
			});

		</script>
	</section>
</main>

<script>
	var swiper = new Swiper('.in_certy_list', {
		loop: true,
		loopFillGroupWithBlank: true,
		//roundLengths: true,
		//centeredSlides: true,
		pagination: {
			el: '.in_certy-pagination',
			clickable: true,
		},
		navigation: {
			prevEl: '.in_certy-prev',
			nextEl: '.in_certy-next',
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
			1025: {
				slidesPerView: 5,
				spaceBetween: '30',
				slidesPerGroup: 1,

			},
		},
	});
</script>










<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>