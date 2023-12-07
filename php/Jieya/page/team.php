<?php
/*
Template Name: team
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_a.webp" />
	</div>
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>



<!-- anchor -->
<?php get_template_part('about_list') ?>

<main>
	<section class="in_content m70">
		<div class="wrap">
			<div class="i_tit"><h2>Our Team</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
			<div class="txt m40">
				<?php echo xintheme('in_team_t'); ?>
			</div>
			<ul class="team_list">
				<?php
					if( xintheme('team_gallery') ){
					$team_gallery = explode(',', xintheme('team_gallery'));
					foreach ( $team_gallery as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				<li>
					<img src="<?php echo $img_src[0]; ?>" />
				</li>
				<?php endforeach; } ?>
			</ul>
		</div>
	</section>

	
	<!-- products -->
	<?php get_template_part('all_products') ?>

	
</main>





<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>
	




<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>