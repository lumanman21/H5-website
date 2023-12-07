<?php
/*
Template Name: facilities
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_capabilty.webp" />
	</div>
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>
<!-- anchor -->
<?php get_template_part('capability_list') ?>


<main>
	<section class="in_content wrap  m60">
		<div class="i_tit"><h2>FACILITIES</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<h6 class="com_tit m30">First-Rate Automated Production Line</h6>
		<div class="txt">
			<?php echo xintheme('facility'); ?>
		</div>
		<ul class="team_list m30">
			<?php
				if( xintheme('facility_gallery') ){
				$facility_gallery = explode(',', xintheme('facility_gallery'));
				foreach ( $facility_gallery as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li>
				<img src="<?php echo $img_src[0]; ?>" />
			</li>
			<?php endforeach; } ?>
		</ul>

		<div class="facility m70">
			<article>
				<h6 class="com_tit">Advanced Water Purification System</h6>
				<div class="txt m30">
					<?php echo xintheme('f_ad'); ?>
				</div>
				<ul class="process_list facility_list">
					<?php
						$f_ad_list = xintheme('f_ad_list');
						if($f_ad_list){
						foreach($f_ad_list as $value):
					?>
					<li>
						<h6><?php echo $value['f_ad_tit'] ?></h6>
						<p><?php echo $value['f_ad_txt'] ?></p>
					</li>
					<?php endforeach; } ?>
					
				</ul>
			</article>
			<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/facility1.webp" alt=""></div>
		</div>
	</section>

	<section class="in_content wrap m60">
		<h6 class="com_tit">Warehouse facility</h6>
		<div class="txt">
			<?php echo xintheme('w_fac'); ?>
		</div>
		<div class="img m30"><img class="center" src="<?php echo xintheme_img('w_fac_pic',''); ?>" alt=""></div>
	</section>

	<section class="in_content wrap m60">
		<h6 class="com_tit">Bio-pharma Design Liquid Processing Infrastructure</h6>
		<div class="txt">
			<?php echo xintheme('bio'); ?>
		</div>
		<div class="img m30"><img class="center" src="<?php echo xintheme_img('bio_pic',''); ?>" alt=" "></div>
	</section>

	<section class="in_content wrap m60">
		<h6 class="com_tit">Eco-Friendly Practices</h6>
		<div class="txt">
			<?php echo xintheme('eco'); ?>
		</div>
		<ul class="fact_list m50">
			<?php
				if( xintheme('eco_gallery') ){
				$eco_gallery = explode(',', xintheme('eco_gallery'));
				foreach ( $eco_gallery as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li>
				<img src="<?php echo $img_src[0]; ?>" /></div>
			</li>
			<?php endforeach; } ?>
		</ul>
	</section>
</div>

</main>



<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>





<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>