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
		<div class="wrap">
			<h2>Contact</h2>
			<div class="breadcrumbs">
				<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>



<main>

	<section class="c_form_box p100">
		<h2>Take the first step to a prosperous future!</h2>
		<p>Welcome to leave us a message, we will reply to you as soon as we receive it.</p>
		<div class="c_form wrap">
			<h6>Get in touch with us!</h6>
			<?php echo do_shortcode( '[wpforms id="36"]' ); ?>
		</div>
	</section>

	<section class="c_box wrap m60">
		<div class="c_info">
			<h5>Contact our team!</h5>
			<ul>
				<li>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/c_call.png" alt="">
						<h6>Call Us Today</h6>
					</div>
					<div class="txt">
						<p>Tel / Whatsapp:</p>
						<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?>;</a>
						<a href="tel:<?php echo xintheme('tel2'); ?>" target="_blank"><?php echo xintheme('tel2'); ?></a>
					</div>
				</li>
				<li>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/c_mail.png" alt="">
						<h6>Mail Information</h6>
					</div>
					<div class="txt">
						<p>Email: </p>
						<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
					</div>
				</li>
				<li>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/c_add.png" alt="">
						<h6>Our Location</h6>
					</div>
					<div class="txt">
						<p>Address:</p>
						<a href="javascript:;"><?php echo xintheme('address'); ?></a>
					</div>
				</li>
			</ul>
		</div>
		<div class="c_map">
			<iframe
				src="https://maps.google.com/maps?q=32.295803352044395,118.40973865165114&hl=en&z=16&output=embed"
				width="100%"
				frameborder="0"
				title="Chuzhou Zhenghui Technology Co. , Ltd."
				allowfullscreen=""
				>
			</iframe>
		</div>
	</section>


</main>






<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>