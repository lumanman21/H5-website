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
	<div class="b_txt">
		<h6>contact us</h6>
		<p>Believe in yourself, believe in partners, win-win cooperation!</p>
	</div>
</div>
<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>


<main class="p_box">
	<div class="c_box p100">
		<div class="wrap">
			<div class="c_form">
				<img src="<?php bloginfo('template_url'); ?>/static/images/logo_h.png" alt="">
				<h2 class="s_tit">Hefei Tengze Construction Machinery Co., Ltd</h2>
				<h6>Welcome to contact us for cooperation!</h6>
				<?php echo do_shortcode( '[wpforms id="53"]' ); ?>
			</div>
			<ul class="c_list">
				<li>
					<div class="ico"><img src="<?php bloginfo('template_url'); ?>/static/images/call.png" alt=""></div>
					<h6>contact number</h6>
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
				</li>
				<li>
					<div class="ico"><img src="<?php bloginfo('template_url'); ?>/static/images/mail.png" alt=""></div>
					<h6>E-mail</h6>
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
				</li>
				<li>
					<div class="ico"><img src="<?php bloginfo('template_url'); ?>/static/images/add.png" alt=""></div>
					<h6>contact number</h6>
					<p><?php echo xintheme('address'); ?></p>
				</li>
			</ul>
		</div>
	</div>


	<section class="map">
		<div class="i_tit wrap">
			<h2>contact address<iconify-icon icon="icon-park-solid:setting"></iconify-icon></h2>
			<h6>In the filed of second hand construction machines.</br>
				especially excavators, with many years' hard working.</h6>
		</div>
		<div class="c_map mt60">
			<iframe
				src="https://maps.google.com/maps?q=31.931954723467914,117.3464539605516&amp;hl=en&amp;z=16&amp;output=embed"
				width="100%" frameborder="0" title="Hefei Tengze Construction Machinery Co., LTD"
				allowfullscreen="">
			</iframe>
		</div>
	</section>




</main>






<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>