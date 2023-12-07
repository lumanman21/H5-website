<?php
/*
Template Name: about
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


	<div class="in_banner">
		<div class="img">
			<img src="<?php bloginfo('template_url'); ?>/static/images/banner_2.webp" />
		</div>
	</div>
	<div class="in_position in_position_bc">
		<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
		</div>
	</div>


	<main>
		<section class="in_about mt120 wrap">
			<div class="i_tit i_tit_c wow slideInUp">
				<span>
					<i>About Rennuo</i>
					<h2>About Rennuo</h2>
				</span>
			</div>
			
			<article>
				<?php echo xintheme('in_about_t'); ?>
			</article>
			
			<ul class="i_num_list mt60">
				<li>
					<h6><span class="roll_num">20</span>+</h6>
					<p>Experience</p>
				</li>
				<li>
					<h6><span class="roll_num">30</span>%</h6>
					<p>Annual sales growth</p>
				</li>
				<li>
					<h6><span class="roll_num">50</span>+</h6>
					<p>Sold to countries</p>
				</li>
			</ul>
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
			<script>$('.roll_num').countUp();</script>
	
			<div class="in_ab_pic">
				<img src="<?php bloginfo('template_url'); ?>/static/images/in_a.webp" />
				<div class="in_v_btn" ipath="<?php echo xintheme('in_video_link'); ?>"><i class="fas fa-caret-right"></i></div>
				<div class="vd_box"></div>
			</div>
			<script>
			  $(".in_v_btn").each(function(){
				var src = $(this).attr("ipath");
				if(src == null){
				  $(this).remove();
				}
			  });
			  $(".in_v_btn").click(function () {
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
	
	
		<!-- Environment & Workshop -->
		<section class="in_ew m100 p70">
			<div class="i_tit i_tit_c wrap wow slideInUp">
				<span>
					<i>Environment & Workshop</i>
					<h2>Environment & Workshop</h2>
				</span>
			</div>
			<div class="ew_list swiper-container mt60">
				<ul class="swiper-wrapper" id="ew_list">
					<?php
						if( xintheme('in_factory') ){
						$in_factory = explode(',', xintheme('in_factory'));
						foreach ( $in_factory as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
					<li class="swiper-slide">
						<div class="click_img"><img src="<?php echo $img_src[0]; ?>" /></div>
						<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
						<div class="txt">
							<span>
								<i class="fas fa-caret-right"></i>
								<p><?php echo $img_caption; ?></p>
							</span>
						</div>
					</li>
					<?php endforeach; } ?>

				</ul>
				<div class="ew-prev"><i class="fal fa-angle-left"></i></div>
				<div class="ew-next"><i class="fal fa-angle-right"></i></div>
			</div>
			<div class="ew-pagination"></div>
			<a href="javascript:;" class="i_more i_more_c" onclick="asfrom()"><b>Visit the factory</b></a>
		</section>
		<div class="clear"></div>
	
	
	
		<section class="partners m80">
			<div class="i_tit i_tit_c wrap wow slideInUp">
				<span>
					<i>Our Partners</i>
					<h2>Our Partners</h2>
				</span>
			</div>
			<div class="logo_list swiper-container">
				<ul class="swiper-wrapper">
					<?php
						if( xintheme('in_partner') ){
						$in_partner = explode(',', xintheme('in_partner'));
						foreach ( $in_partner as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
					<li class="swiper-slide">
						<img src="<?php echo $img_src[0]; ?>" />
						<!-- <p><?php echo $img_caption; ?></p> -->
					</li>
					<?php endforeach; } ?>
				</ul>
			</div>
			<a href="javascript:;" class="i_more i_more_c " onclick="asfrom()"><b>Contact our sales team</b></a>
		</section>
		<div class="clear"></div>
	</main>


	<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
	<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
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
			autoplay: {
				delay: 3000,
				pauseOnMouseEnter: true,
				disableOnInteraction: false,
			},
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
		/*查看大图*/
		var image = new Viewer(document.getElementById('ew_list'), {
			button: true,
			navbar: false,
			width: 660,
			title: false
		});
		var swiper = new Swiper('.logo_list', {
			spaceBetween: '1.5%',
			loop: true,
			//loopFillGroupWithBlank: true,
			roundLengths: true,
			//centeredSlides: true,
			autoplay: {
				delay: 0,
				disableOnInteraction: false,
			},
			speed: 3000,
			observer: true,
			observeParents: true,
			breakpoints: {
				0: {
					slidesPerView: 4,
					slidesPerGroup: 1,
				},
				561: {
					slidesPerView: 5,
					slidesPerGroup: 1,
				},
				769: {
					slidesPerView: 6,
					slidesPerGroup: 1,
				},
				1025: {
					slidesPerView: 8,
					slidesPerGroup: 1,
				},
				1441: {
					slidesPerView: 10,
					slidesPerGroup: 1,
				},
			},
		});
	</script>



<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>