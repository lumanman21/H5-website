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
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_2.webp" />
	</div>
</div>
<div class="in_position in_position_bc">
	<div class="wrap container">
	<?php echo in_breadcrumbs(); ?>
	</div>
</div>

<!-- Main -->
<main>

	<div class="in_news mt100 mb80">
		<div class="wrap">
			<div class="i_tit wow slideInUp">
				<span>
					<i>News and Exhibition</i>
					<h2>News and Exhibition</h2>
				</span>
			</div>

			<ul class="in_n_list">
				<?php while (have_posts()) : the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">  
						<div class="img"><?php display_post_image(); ?></div>
						<div class="txt">
							<h5><?php the_title(); ?> </h5>
							<h6><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?>  </h6>
							<i><?php echo the_time('Y.m.d') ?> </i>
						</div>
					</a>
				</li>
				<?php endwhile; wp_reset_postdata(); ?>

			</ul>

			<!-- Number of pages -->
			<div class="in_page_box wow slideInUp">
				<ul class="in_page">
					<?php zdy_paging(); ?>
				</ul>
			</div>

		</div>
	</div>

</main>



<!-- Footer -->

<?php get_footer(); ?>





</body>

</html>


