<?php
/*
Template Name: about
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_about',''); ?>" />
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


<main>
	<section class="a_company">
		<div class="wrap m70">
			<div class="in_ab_t">
				<div class="i_tit i_tit_l">
					<h2><span>ABOUT US</span></h2>
				</div>
				<h6><span><?php echo xintheme('i_name'); ?></span></h6>
				<article>
					<?php echo xintheme('in_about_t'); ?>
				</article>
				
				<ul class="i_ab_num mt80">
					<li>
						<h5><span class="roll_num">2015</span></h5>
						<p>was founded in</p>
					</li>
					<li>
						<h5><span class="roll_num">500</span>+</h5>
						<p>main products</p>
					</li>
					<li>
						<h5><span class="roll_num">50</span>+</h5>
						<p>exporting country</p>
					</li>
					
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
		<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
		<script>$('.roll_num').countUp();</script>
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


	<section class="a_gallery p80">
		<div class="wrap">
			<div class="i_tit">
				<h2><span>Our Gallery</span></h2>
			</div>
			<h6>
				We dedicate to Nail Art Wholesale for more than ten years, we also provide samples order and trail order to meet different requests from customers
			</h6>
			<ul class="gallery_list mt50" id="gallery_list">
				<?php
					if( xintheme('in_factory') ){
					$in_factory = explode(',', xintheme('in_factory'));
					foreach ( $in_factory as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
					<li><img src="<?php echo $img_src[0]; ?>" /></li>
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

</main>
<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
<script>
	/*查看大图*/
	var image = new Viewer(document.getElementById('gallery_list'), {
		button: true,
		navbar: false,
		width: 660,
		title: false
	});
</script>
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
				spaceBetween: '0',
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