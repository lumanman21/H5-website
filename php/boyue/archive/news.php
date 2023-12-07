<?php
$category_data = get_term_meta( $cat, 'category_options', true );
get_header(); ?>
<?php
	$this_category = get_the_category();
	$category_id = $this_category[0]->cat_ID;
	$category_name = get_cat_name($cat);  // 当前分类名称
	$category_link = get_category_link( $cat ); // 当前分类链接
	$upcategory_id= tx_wp_get_category_root_id( $cat );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>
<!-- header -->
<?php get_template_part('top') ?>






<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_n.webp" />
	</div>
	<div class="in_b_text">
		<h2>blog&news</h2>
		<p>Let customers find satisfactory products is our ultimate pursuit</p>
	</div>
	
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>


<main>
	<section class="in_box p60">
		<div class="wrap">
			<div class="i_tit i_tit_l">
				<h2>blog&news</h2>
			</div>
			<ul class="n_list m50">
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<h6><?php the_title(); ?></h6>
					<div class="img"><?php display_post_image(); ?></div>
					<div class="n_date mt40"><span><?php echo the_time('Y-m-d') ?></span><div class="n_more">View more<ion-icon name="chevron-forward-outline" role="img" class="md hydrated"></ion-icon></div></div>
				</a></li>
				<?php endwhile; wp_reset_postdata(); ?>

				
			</ul>
			<!-- Number of pages -->
			<div class="in_page_box  wow slideInUp">
				<ul class="in_page">
					<?php zdy_paging(); ?>
				</ul>
			</div>
		</div>
	</section>
</main>









<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>
