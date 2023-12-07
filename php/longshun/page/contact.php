<?php
/*
Template Name: contact
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<!-- banner -->
<div class="in_banner">
	<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/static/images/banner_a.webp" /></div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>Serve customers</br>attentively</h2>
		</div>
	</div>
</div>

<!-- 当前位置 -->
<div class="in_position in_position_bc">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>



<main>
	<div class="c_box box_space wrap">
		<div class="c_form wow slideInLeft">
			<div class="i_tit">
				<h2>Send us a message</h2>
			</div>
			<h6>We have the experience to advise you so that you get the best solution for your needs.</h6>
			<?php echo do_shortcode( '[wpforms id="36"]' ); ?>
		</div>
		<ul class="c_info wow slideInRight">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/static/images/c_call.png" alt="">
				<div class="txt">
					<h6>Call us</h6>
					<p>Talk to us and see how we can work together</p>
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/static/images/c_mail.png" alt="">
				<div class="txt">
					<h6>Email us</h6>
					<p>We're usually replying within 24 hours</p>
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/static/images/c_add.png" alt="">
				<div class="txt">
					<h6>Address</h6>
					<p>I'm looking forward to your coming</p>
					<a href="javascript:;"><?php echo xintheme('address'); ?></a>
				</div>
			</li>

		</ul>
	</div>

	<div class="map mt100"><?php echo do_shortcode( '[simpleMapNoApi]' ); ?></div>
</main>






<?php get_template_part( 'form' ); ?>




<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>