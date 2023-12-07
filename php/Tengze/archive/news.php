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
	<div class="b_txt">
		<h6>news</h6>
		<p>Believe in yourself, believe in partners, win-win cooperation!</p>
	</div>
</div>
<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>


<main class="p_box">
	<section class="wrap m80 n_box">
		<div class="i_tit i_tit_c">
			<h2>Company News</h2>
			<h6>Grasp the latest trends of the company, understand the forefront of the industry </br> information, to bring you the latest and most valuable news and events.</h6>
		</div>
		<div class="hot_n m60">
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
				<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/n1.webp" alt=""></div>
				<div class="txt">
					<div class="n_date"><iconify-icon icon="formkit:time"></iconify-icon><b><?php echo the_time('Y-m-d') ?></b></div>
					<h6><?php the_title(); ?></h6>
					<p>
						<?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?>
					</p>
					<button class="i_more mt100"><b>View More</b></button>
				</div>
			</a>
			<?php } } wp_reset_postdata(); ?>


		</div>

		<ul class="n_list m80">
			<?php while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="img"><?php display_post_image(); ?></div>
				<div class="n_date m30"><iconify-icon icon="formkit:time"></iconify-icon><b><?php echo the_time('Y-m-d') ?></b></div>
				<h6><?php the_title(); ?></h6>
				<p>
					<?php echo mb_strimwidth(strip_tags($post->post_content),0,540,'...'); ?>
				</p>
				
			</a></li>
			<?php endwhile; wp_reset_postdata(); ?>

		</ul>

		

		<!-- Number of pages -->
		<div class="in_page_box wow slideInUp">
			<ul class="in_page">
				<?php zdy_paging(); ?>
			</ul>
		</div>

	</section>
</main>




<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>
