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
		
	</div>
	<div class="in_position in_position_bc">
		<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
		</div>
	</div>


	<section class="in_contact mt100 mb80">
		<div class="wrap">
			<div class="i_tit in_tit_c wow slideInUp">
				<span>
					<i>Get in touch with us</i>
					<h2>Get in touch with us</h2>
				</span>
				<h6>If you are interested in our products and want to know more details, please contact us or leave message here</h6>
			</div>
			<div class="contact_cont">
				<ul class="c_list">
					<li>
						<div class="ico"><i class="fas fa-envelope"></i></div>
						<div class="info">
							<span>E-mail:</span>
							<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
						</div>
					</li>
					<li>
						<div class="ico"><i class="fas fa-phone-alt"></i></div>
						<div class="info">
							<p><span>TEL</span><a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a></p>
							<p><span>WhatsApp:</span><a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><?php echo xintheme('whatsapp'); ?></a></p>
						</div>
					</li>
					<li>
						<div class="ico"><i class="fas fa-map-marker-alt"></i></div>
						<div class="info">
							<span>Address:</span>
							<h5><?php echo xintheme('address'); ?></h5>
						</div>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/static/images/qr.png" alt="">
						<div class="info">
							<span>Contact Us Now</span>
						</div>
					</li>
				</ul>
				<div class="c_form">
					<?php echo do_shortcode( '[wpforms id="53"]' ); ?>
				</div>
			</div>
		</div>
	</section>

	<div class="map"><?php echo do_shortcode( '[simpleMapNoApi]' ); ?></div>




<?php get_template_part('cooperate_form') ?>


<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>