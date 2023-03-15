<?php
get_header();
?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="top_banner delta_b">
  <img src="<?php bloginfo('template_url'); ?>/static/images/n_banner.webp" alt="">
  <div class="txt">
    <h4 class="wow slideInUp">leking news</h4>
    <p class="wow slideInUp" data-wow-delay=".4s">Convenient and timely understanding of enterprise development</p>
    <div class="img wow slideInUp" data-wow-delay=".5s"><img src="<?php bloginfo('template_url'); ?>/static/images/n_banner_ico.png" alt=""></div>
  </div>
</div>

<!-- main -->
<main>

	<div class="in_news_art wrap">

		<div class="in_news_art_tit">
			<h1><?php the_title_attribute(); ?></h1>
			<h6>Time of release: <?php the_time('Y-m-d h:m:s') ?></h6>
		</div>

		<article>
		<?php the_content(); ?>
		</article>

		<div class="ar_fot">
			<ul>
				<li>
					<?php
						$prevPost = get_previous_post(true);
						if($prevPost){
							$prev_t = "<i></i><span><p>Prev:</p><h6>%title</h6></span>";
							previous_post_link('%link', "$prev_t", TRUE);
						}
					?>
				</li>
				<li>
					<?php
						$nextPost = get_next_post(true);
						if($nextPost){
							$next_t = "<span><p>Next:</p><h6>%title</h6></span><i></i>";
							next_post_link('%link', "$next_t", TRUE);
						}
					?>
				</li>
			</ul>
		</div>
	</div>
	<div class="clear"></div>


</main>


<?php get_footer();?>


</body>
</html>