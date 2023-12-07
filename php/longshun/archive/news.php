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


<!-- header -->
<?php get_template_part('top') ?>




<!-- banner -->
<div class="in_banner">
	<img src="<?php echo get_template_directory_uri(); ?>/static/images/banner_n.webp" />
	<div class="in_b_text">
		<div class="wrap">
			<h2>NEWS</h2>
		</div>
	</div>
</div>


<!-- 当前位置 -->
<div class="in_position">
	<div class="wrap container">
	<?php echo in_breadcrumbs(); ?>
	</div>
</div>


<!-- main -->
<main>

	<div class="in_news box_mg wrap">
		<div class="i_tit wow slideInUp">
			<span>
				<i>News center</i>
				<h2>News center</h2>
			</span>
		</div>

		<ul class="in_news_list wow slideInUp">
			<?php while (have_posts()) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<div class="img">
						<?php if( !empty ( get_post_image() ) ){ ?>
						<img src="<?php echo esc_url( get_post_image() ); ?>" alt="<?php the_title_attribute(); ?>">
						<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/static/images/public/nopic.png" alt="">
						<?php } ?>
					</div>
					<div class="txt">
						<div class="ico"></div>
						<h4><?php the_title(); ?></h4>
						<h6>Release time : <?php the_time('Y-m-d') ?></h6>
						<h5><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?></h5>
					</div>
				</a>
			</li>
			<?php endwhile; wp_reset_postdata(); ?>

		</ul>

		<!-- 页数 -->
		<div class="in_page_box wow slideInUp">
			<div class="in_page">
				<?php zdy_paging(); ?>
			</div>
		</div>

	</div>

</main>



<?php get_template_part( 'form' ); ?>


<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>