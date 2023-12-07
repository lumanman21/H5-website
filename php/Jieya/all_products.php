<section class="wrap">
	<h6 class="com_tit">THE CATEGORY OF PRODUCTS  &   MANUFACTURING:</h6>
	<ul class="in_p_list m40">
		<?php
			$cat_id = 2; // 指定分类 ID
			$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
			$query_args = array(
				'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
				'posts_per_page' => -1, // 显示多少篇文章
				'orderby' => 'date', // 按日期排序
				'order' => 'DESC', // 按降序排列
			);
			$all_posts = new WP_Query( $query_args );
			if ( $all_posts->have_posts() ) {
			while ( $all_posts->have_posts() ) {
			$all_posts->the_post();
		?>
		<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
		<?php } wp_reset_postdata(); } ?>
	</ul>
</section>