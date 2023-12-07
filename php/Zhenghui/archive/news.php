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




<!-- banner -->
<div class="in_banner">
	<img src="<?php bloginfo('template_url'); ?>/static/images/banner_n.webp" alt="">
	<div class="in_banner_text wrap">
		<h2>News</h2>
	</div>
</div>

<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container"><?php echo in_breadcrumbs(); ?></div>
</div>


<main>
	<div class="n_box wrap mt30 mb60">
		<div class="i_tit"><h2>News</h2></div>
		<div class="hot_n">
			<?php
				$cat_id = 3;  // 指定id
				$sub_cat_ids = get_term_children( $cat_id, 'category' ); // 获取指定id下所有子分类
				$sticky = get_option( 'sticky_posts' );  // 筛选置顶
			
				$args = array(
					'post_type' => 'post',
					'post__in'  => $sticky,
					'category__in' => array_merge( array( $cat_id ), $sub_cat_ids ),
					'posts_per_page' => 1 // 显示个数
				);
			
				if ( ! empty( $sticky ) ) {
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) {
						$query->the_post();
			?>
			
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="img"><?php display_post_image(); ?></div>
				<div class="txt">
					<div class="time">
						<b><?php echo the_time('Y-m-d') ?></b>
					</div>
					<h6><?php the_title(); ?></h6>
					<p>
						<?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?>
					</p>
					<div class="n_more mt80">View more<iconify-icon icon="mingcute:right-line"></iconify-icon></div>
				</div>
			</a>
			<?php } } wp_reset_postdata(); ?>

		</div>
		
		<ul class="i_news_list n_list m80">
			<?php while (have_posts()) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<div class="img"><?php display_post_image(); ?></div>
					<div class="txt">
						<h6><?php the_title(); ?></h6>
						<p><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?></p>
						<div class="time">
							<b><?php echo the_time('Y-m-d') ?></b>
							<b>View details<iconify-icon icon="mingcute:right-line"></iconify-icon></b>
						</div>
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
</main>






<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>
