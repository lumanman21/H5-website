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
		<h2>about us</h2>
		<p>Let customers find satisfactory products is our ultimate pursuit</p>
	</div>
	
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>


<main>
	<!-- i_about -->
	<section class="in_about p80">
		<div class="wrap">
			<div class="in_a_txt">
				<div class="i_tit i_tit_l">
					<h2>ABOUT boyue</h2>
				</div>
				<article>
					<?php echo xintheme('in_about_t'); ?>
				</article>
			</div>
			<div class="in_video mt60 wow slideInUp">
				<img src="<?php echo xintheme_img('in_a_pic',''); ?>" alt="">
				<div class="i_v_btn" ipath="<?php echo xintheme('in_video_link'); ?>">
					<iconify-icon icon="bi:caret-right-fill"></iconify-icon>
				</div>
			</div>
		</div>
	</section>
	<div class="vd_box"></div>
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

	<section class="in_ad p70">
		<div class="wrap">
			<div class="i_tit i_tit_l">
				<h2>boyue  Advantage</h2>
			</div>
			<ul class="i_ad mt80">
				<?php
					$i_ad = xintheme('i_ad');
					$num=1;
					if($i_ad){
						
					foreach($i_ad as $value):
					$img_id = $value['i_ad_ico'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				?>
				
				<li class="wow slideInUp" data-wow-delay=".<?php echo $num; ?>s">
					<div class="ico"><img src="<?php echo $img_src[0]; ?>" /></div>
					<h6><?php echo $value['i_ad_tit'] ?></h6>
					<p><?php echo $value['i_ad_txt'] ?></p>
				</li>
				<?php $num++; endforeach;  } ?>

			</ul>
		</div>
	</section>

	<section class="factory p70">
		<div class="i_tit i_tit_l wrap">
			<h2>company environment</h2>
		</div>
		<div class="mt60">
			<div class="par_partner">
				<div class="par_partner_list swiper-container">
					<ul class="swiper-wrapper" id="in_f_list">
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
			</div>
		</div>
		<script>
			var pswiper = new Swiper('.par_partner_list', {
				loop: true,
				speed: 4000,
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
						slidesPerView: 5,
						spaceBetween: 40,
						slidesPerGroup: 1
					}
				}
			});
		</script>
	</section>
</main>

<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
<script>
	/*查看大图*/
	var image = new Viewer(document.getElementById('in_f_list'), {
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