<?php
/*
Template Name: products
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_mp.webp" />
	</div>
	<div class="in_b_text">
		<h2>more products</h2>
		<p>Let customers find satisfactory products is our ultimate pursuit</p>
	</div>
	
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>

<main>
	<section class="more_p p80">
		<ul class="more_p_list wrap">
			<?php
			$loop_cate_id = array(9, 10);
			foreach ($loop_cate_id as $value) {
				$category_data = get_term_meta($value, 'category_options', true);
				$thumbnail_id = $category_data['cat_thumbnail_banner'];
				$thumbnail_alt = get_cat_name($value);
			?>
			
			<li>
				<a href="<?php echo get_category_link($value); ?>" title="<?php echo get_cat_name($value); ?>">
					<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
					<div class="txt">
						<h6><?php echo get_cat_name($value); ?><iconify-icon icon="mingcute:arrows-right-line"></iconify-icon></h6>
						<button class="i_more i_more_f mt30"><b>Explore this category</b></button>
					</div>
				</a>
			</li>
			<?php } ?>


		</ul>
	</section>


</main>










<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>