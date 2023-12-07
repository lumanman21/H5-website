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
		<h2><b>Tags list</b></h2>
		<p><?php echo 'A total of ' . $wp_query->found_posts . ' articles were found'; ?></p>
	</div>

	<ul class="in_p_list">

		<?php
			while (have_posts()) : the_post();
			$category_data = get_post_meta($post->ID, 'extend_info', true);
		?>
		<li>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="img">
					<?php
						$produc_img = explode( ',', $category_data['produc_img'] );
						$produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
					?>
					<img src="<?php echo $produc_img_src[0];?>" />
				</div>
				<h6><?php the_title(); ?></h6>
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