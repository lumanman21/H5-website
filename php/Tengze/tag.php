<?php
get_header();
?>


<!-- header -->
<?php get_template_part('top') ?>


<div style="height:2rem"></div>

<!-- main -->
<main>
<div class="container wrap m60">
	<div class="i_tit">
		<h2>Tags list</h2>
		<h6><?php echo 'A total of ' . $wp_query->found_posts . ' articles were found'; ?></h6>
	</div>

	<ul class="p_list mt60">

		<?php
			while (have_posts()) : the_post();
			$category_data = get_post_meta($post->ID, 'extend_info', true);
		?>
		<li>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="img">
						<?php
							$category_data = get_post_meta($post->ID, 'extend_info', true);
							$produc_img = explode( ',', $category_data['produc_img'] );
							$thumbnail_id = $produc_img[0];
							$thumbnail_alt = get_the_title();
						?>
						<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
				</div>
				<h6><?php the_title(); ?></h6>
				<div class="ico"><iconify-icon icon="ph:caret-right-bold"></iconify-icon></div>
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


<!-- footer -->
<?php get_footer();?>


</body>
</html>