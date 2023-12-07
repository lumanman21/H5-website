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
	<div class="in_b_text">
		<div class="wrap">
			<h2>About us</h2>
			<div class="breadcrumbs">
				<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>




<main style="background: #f6f6f6;">
	<section class="in_about m80 wrap">
		<div class="i_tit mb50">
			<h2><b>about us</b></h2>
		</div>
		
		<article>
			<?php echo xintheme('in_about_t'); ?>
		</article>
		
		

		<div class="in_ab_pic mt60">
			<img src="<?php echo xintheme_img('in_a_pic',''); ?>" />
			<div class="i_v_btn" ipath="<?php echo xintheme('in_video_link'); ?>">
				<iconify-icon icon="bi:caret-right-fill"></iconify-icon>
			</div>
		</div>
		<div class="vd_box"></div>
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


</main>
<section>
	<ul class="i_num_list m100 wrap">
		<li>
			<h6><span class="roll_num">20</span>+</h6>
			<p>experiences</p>
		</li>
		<li>
			<h6><span class="roll_num">5000</span>+</h6>
			<p>second hand machinery</p>
		</li>
		<li>
			<h6><span class="roll_num">100</span>+</h6>
			<p>Over 50 acres of factory</p>
		</li>
		<li>
			<h6><span class="roll_num">3000</span>+</h6>
			<p>Maintenance factory</p>
		</li>
	</ul>
	<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
	<script>$('.roll_num').countUp();</script>
</section>
<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
<script>$('.roll_num').countUp();</script>

<section class="i_why p60">
	<div class="wrap p50">
		<div class="i_tit i_tit_w">
			<h2><b>why choose us</b></h2>
			<p>Competitive price and quality</p>
		</div>
		<article>
			<?php echo xintheme('i_why'); ?>
		</article>
	</div>
</section>

<ul class="i_ad wrap">
	<?php
		$i_ad = xintheme('i_ad');
		if($i_ad){
		foreach($i_ad as $value):
		$img_id = $value['i_ad_ico'];
		$img_src = wp_get_attachment_image_src( $img_id, 'full' );
	?>
	<li>
		<img src="<?php echo $img_src[0]; ?>" />
		<h6><?php echo $value['i_ad_tit'] ?></h6>
		<p>
			<?php echo $value['i_ad_txt'] ?>
		</p>
	</li>
	<?php endforeach; } ?>
</ul>

<section class="i_brand wow slideInUp">
		<div class="i_tit">
			<h2><b>Machinery brand</b></h2>
			<p>Competitive price and quality</p>
		</div>
		<div class="brand_box wrap">
			<div class="brand_list swiper-container">
				<ul class="swiper-wrapper">
					<?php
						$i_brand = xintheme('i_brand');
						if($i_brand){
						foreach($i_brand as $value):
						$img_id = $value['i_brand_u'];
						$img_id2 = $value['i_brand_d'];
						$img_src = wp_get_attachment_image_src( $img_id, 'full' );
						$img_src2 = wp_get_attachment_image_src( $img_id2, 'full' );
					?>
					<li class="swiper-slide">
						<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
						<div class="img"><img src="<?php echo $img_src2[0]; ?>" /></div>
					</li>
					<?php endforeach; } ?>

				</ul>
			</div>
			<div class="brand-pagination"></div>
		</div>
		<script>
			var pswiper = new Swiper(".brand_list", {
				loop: true,
				loopFillGroupWithBlank: true,
				navigation: {
					nextEl: ".partner-button-next",
					prevEl: ".partner-button-prev",
				},
				pagination: {
					el: ".brand-pagination",
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
						slidesPerView: 3,
						spaceBetween: 10,
						slidesPerGroup: 1,
					},
					768: {
						slidesPerView: 4,
						spaceBetween: 20,
						slidesPerGroup: 1,
					},
					1200: {
						slidesPerView: 8,
						spaceBetween: 25,
						slidesPerGroup: 1,
					},
				},
			});
		</script>
	</section>






<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>