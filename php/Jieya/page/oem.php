<?php
/*
Template Name: oem
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_oem.webp" />
	</div>
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>


<!-- anchor -->
<div class="mao_box">
	<div class="in_nav">
	<div class="in_nav_tit">
		<h6>OEM list</h6>
	</div>
	<ul class="menu_list">
		<li class="list active"><a href="<?php echo get_permalink(18); ?>" rel="nofollow">OEM</a></li>
		<li class="list"><a href="<?php echo get_permalink(20); ?>" rel="nofollow">ODM</a></li>
	</ul>
	</div>
</div>

<main>
	<section class="in_content m70 wrap">
		<div class="i_tit"><h2>OEM</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<h6 class="gradient_tit mt40">Planning, Development and Production</h6>
		<div class="txt m40">
			<?php echo xintheme('oem_txt'); ?>
		</div>
		<ul class="team_list">
			<?php
				if( xintheme('oem_gallery') ){
				$oem_gallery = explode(',', xintheme('oem_gallery'));
				foreach ( $oem_gallery as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li>
				<img src="<?php echo $img_src[0]; ?>" />
			</li>
			<?php endforeach; } ?>

		</ul>
	</section>


	<section class="o_quote wrap">
		<div class="i_tit">
			<h2>Contact Form</h2>
		</div>
		<h6>
			we are looking forward to your inquiries about our company. You are also welcome to tell us about your experiences with our products.
		</h6>
		<?php echo do_shortcode( '[wpforms id="102"]' ); ?>
	</section>

	

	
</main>





<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>






<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>