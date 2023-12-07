<?php
/*
Template Name: culture
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
	<div class="i_tit mt60"><h2>Our culture</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
	<ul class="culture_list m40 mb80 wrap">
		<?php
			$cul = xintheme('cul');
			if($cul){
			foreach($cul as $value):
			$img_id = $value['cul_ico'];
			$img_src = wp_get_attachment_image_src( $img_id, 'full' );
			$img_id_pic = $value['cul_pic'];
			$img_pic = wp_get_attachment_image_src( $img_id_pic, 'full' );
		?>
		<li>
			<div class="img"><img src="<?php echo $img_pic[0]; ?>" /></div>
			<div class="txt">
				<div class="ico"><img src="<?php echo $img_src[0]; ?>" /></div>
				<h6><?php echo $value['cul_tit'] ?></h6>
				<p><?php echo $value['cul_txt'] ?></p>
			</div>
		</li>
		<?php endforeach; } ?>
	</ul>

	
	<!-- products -->
	<?php get_template_part('all_products') ?>
	
</main>


	


<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>
	
		




<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>