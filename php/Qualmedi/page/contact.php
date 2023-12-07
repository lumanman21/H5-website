<?php
/*
Template Name: contact
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_contact',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>CONTACT US</h2>
			<div class="breadcrumbs">
				<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>


<main>
	<ul class="c_list wrap m100">
		<li>
			<div class="ico">
				<img src="<?php bloginfo('template_url'); ?>/static/images/c_call.png" alt="">
				<div class="txt">
					<h6>Call Us Today</h6>
				</div>
			</div>
			<article>
				<p>Tel:</p>
				<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
				<p>Market Department : </p>
				<a href="tel:<?php echo xintheme('tel2'); ?>" target="_blank"><?php echo xintheme('tel2'); ?></a>
			</article>
		</li>
		<li>
			<div class="ico">
				<img src="<?php bloginfo('template_url'); ?>/static/images/c_mail.png" alt="">
				<div class="txt">
					<h6>Mail Information</h6>
				</div>
			</div>
			<article>
				<p>Sales Email: </p>
				<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
				<p>Sales Email: </p>
				<a href="mailto:<?php echo xintheme('email2'); ?>" target="_blank"><?php echo xintheme('email2'); ?></a>
			</article>
		</li>
		<li>
			<div class="ico">
				<img src="<?php bloginfo('template_url'); ?>/static/images/c_add.png" alt="">
				<div class="txt">
					<h6>Our Location</h6>
				</div>
			</div>
			<article>
				<p>Address: </p>
				<b><?php echo xintheme('address'); ?></b>
			</article>
		</li>
	</ul>


	<div class="c_box p100">
		<div class="wrap">
			<div class="c_form">
				<div class="i_tit mb40">
					<h2>Send us a message</h2>
					<h6>We have the experience to advise you so that you get the best solution for your needs</h6>
				</div>
				<?php echo do_shortcode( '[wpforms id="51"]' ); ?>
			</div>
			<div class="map"><?php echo do_shortcode( '[simpleMapNoApi]' ); ?></div>
		</div>
	</div>



	<div class="i_cer_list swiper-container m60 wrap">
		<ul class="swiper-wrapper">
			<?php
				if( xintheme('i_certy') ){
				$i_certy = explode(',', xintheme('i_certy'));
				foreach ( $i_certy as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li class="swiper-slide">
				<img src="<?php echo $img_src[0]; ?>" />
				<!-- <p><?php echo $img_caption; ?></p> -->
			</li>
			<?php endforeach; } ?>
		</ul>
		<div class="i_cer-prev"></div>
		<div class="i_cer-next"></div>
	</div>
	<script>
		var swiper = new Swiper('.i_cer_list', {
				loop: true,
				loopFillGroupWithBlank: true,
				//roundLengths: true,
				//centeredSlides: true,
				pagination: {
					el: '.i_cer-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.i_cer-prev',
					nextEl: '.i_cer-next',
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
						slidesPerView: 6,
						spaceBetween: '25',
						slidesPerGroup: 1,
		
					},
				},
			});
	</script>
</main>







<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>