<?php
get_header();
?>


<!-- header -->
<?php get_template_part('top') ?>



<!-- banner -->
<div class="top_banner delta_b">
  <img src="<?php bloginfo('template_url'); ?>/static/images/p_banner.webp" alt="">
  <div class="txt">
    <h4 class="wow slideInUp">International team creates classics</h4>
    <p class="wow slideInUp" data-wow-delay=".4s">strive to become the world leader in the health and environmental protection<br> household appliances industry.</p>
    <div class="img wow slideInUp" data-wow-delay=".5s"><img src="<?php bloginfo('template_url'); ?>/static/images/p_banner_ico.png" alt=""></div>
  </div>
</div>




<!-- main -->
<main>
<div class="container wrap">

	<div class="i_tit wow slideInUp">
		<h2>SEARCH RESULTS</h2>
		<p style="margin-top:.16rem; font-size:.16rem"><?php echo 'A total of ' . $wp_query->found_posts . ' articles were found'; ?></p>
	</div>


	<ul class="in_search_list">

		<?php
			while( have_posts() ): the_post();
			$category = get_the_category();
			$catid = $category[0]->term_id;
			$category_name = get_cat_name($catid);
		?>
		<li class="wow slideInUp">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" target="_blank">
				<h2><?php the_title_attribute(); ?></h2>
				<h6><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...');?></h6>
				<i>Classification: <?php echo $category_name ?></i>
			</a>
		</li>
		<?php endwhile; ?>

	</ul>


</div>
</main>


<?php get_footer(); ?>


</body>
</html>