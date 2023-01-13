<?php
$category_data = get_term_meta( $cat, 'category_options', true );
get_header(); ?>
<?php
   $this_category = get_the_category();
   $category_id = $this_category[0]->cat_ID;
?>
<link href="<?php bloginfo('template_url'); ?>/static/css/products.css" rel="stylesheet" type="text/css">
<body>
<link href="<?php bloginfo('template_url'); ?>/static/css/privacy.css" rel="stylesheet" type="text/css">

<!-- header -->
<?php get_template_part('top') ?>



<div class="tag_tit">tag</div>




<!-- 首页第一 -->
<div class="product_tp wrap">
	<ul>
	
		<?php while( have_posts() ): the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<div class="products_img">
				<img src="<?php $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); echo $full_image_url[0]; ?>">
				</div>
				<div class="products_text">
					<h2><?php the_title_attribute(); ?></h2>
					<p>Material: <?php
									$bl= get_post_meta($post->ID, 'extend_info', true);
									echo $bl['produc_material'];
								?><br>
					Usage: <?php
									$yf= get_post_meta($post->ID, 'extend_info', true);
									echo $yf['produc_usage'];
								?></p>
				</div>
			</a>
		</li>
		<?php endwhile; ?>
		
		
	</ul>
	
	
	<!-- 切换 -->
	<div class="product_change">
		<ul>
			<?php page_pagenavi(6); ?>
		</ul>
	</div>
	
	
</div>




<!-- footer -->
<?php get_footer();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/home.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/products.js"></script>
<!-- 引入wow动画效果 -->
<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>
<script>
	wow = new WOW({
		animateClass: 'animated',
		offset: 100,
		mobile: false,
	});
	wow.init();
</script>


</body>
</html>