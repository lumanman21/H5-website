<?php
/*
Template Name: contact
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_c.webp" />
	</div>
	<div class="in_b_text">
		<h2>contact us</h2>
		<p>Let customers find satisfactory products is our ultimate pursuit</p>
	</div>
	
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>


<main>

	<!-- contact -->
	<section class="contact_form p60">
		<div class="wrap">
			<div class="c_form">
				<h6>Send us a message</h6>
				<p>We have the experience to advise you so that you get the best solution for your needs</p>
				<?php echo do_shortcode( '[wpforms id="48"]' ); ?>
			</div>
			<ul class="c_list">
				<li>
					<img src="<?php bloginfo('template_url'); ?>/static/images/c_add.png" alt="">
					<h6>Address</h6>
					<p><?php echo xintheme('address'); ?></p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/static/images/c_call.png" alt="">
					<h6>PHONE/ whatsapp</h6>
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/static/images/c_mail.png" alt="">
					<h6>Email us</h6>
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
				</li>
			</ul>
		</div>
	</section>
	<!-- contatc_map -->
	<div class="contatc_map"><?php echo do_shortcode( '[simpleMapNoApi]' ); ?></div>
</main>






<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>