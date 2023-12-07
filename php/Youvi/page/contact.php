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
			<h2>Contact us</h2>
			<div class="breadcrumbs">
			<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>

<main>
	<!-- contact -->
	<section class="contact_form">
		<div class="i_tit">
			<h2><span>CONTACT US</span></h2>
		</div>
		
		<h6 class="wrap">
			Our main products are: nail lamp,nail brush,nail drill bit,nail drill machine,nail fileand so on.We support customization.
		</h6>
		<div class="contact_area wrap">
			<div class="contact_area_left">
				<?php echo do_shortcode( '[wpforms id="42"]' ); ?>
			</div>
			<div class="contact_area_right">
				<ul class="contact_area_ul">
					<li>
						<img src="<?php bloginfo('template_url'); ?>/static/images/other/c1.png" alt="">
						<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/static/images/other/c2.png" alt="">
						<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/static/images/other/c3.png" alt="">
						<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><?php echo xintheme('whatsapp'); ?></a>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/static/images/other/c4.png" alt="">
						<a><?php echo xintheme('address'); ?></a>
					</li>
				</ul>
				<h4>We have a professional team.We have a professional team to provide better service.</h4>
			</div>
		</div>
	</section>

	<!-- contatc_map -->
	<div class="contatc_map"><?php echo do_shortcode( '[simpleMapNoApi]' ); ?></div>

	
</main>
<div class="foot_space"></div>
	





<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>