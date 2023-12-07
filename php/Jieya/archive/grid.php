<?php
$category_data = get_term_meta( $cat, 'category_options', true );
get_header(); ?>
<?php
	$category_id = $cat;

	$category_name = get_cat_name($category_id);  // 当前分类名称
	$category_link = get_category_link( $category_id ); // 当前分类链接

	$upcategory_id= tx_wp_get_category_root_id( $category_id );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>


<?php
	if(strpos($upcategory_name,'Products') !== false){
		$current_category_id =  $category_id;
	}else{
		$current_category_id =  $upcategory_id;
	}
?>



<!-- header -->
<?php get_template_part('top') ?>





<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_p.webp" />
	</div>
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>

<main>
	<div class="i_tit m50"><h2>products</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
	<ul class="ip_list mt80 wrap">
		<?php while (have_posts()) : the_post(); ?>

		<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<div class="img">
				<?php display_post_image(); ?>
			</div>
			<h6><?php the_title(); ?></h6>
		</a></li>
		<?php endwhile; wp_reset_postdata(); ?>


	</ul>
	<!-- Number of pages -->
	<div class="in_page_box wow slideInUp">
		<ul class="in_page">
			<?php zdy_paging(); ?>
		</ul>
	</div>
</main>







<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>