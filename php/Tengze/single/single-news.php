<?php
get_header();
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

<!-- Main -->
<main>

	<div class="in_news_art wrap m80">

		<div class="in_news_art_tit">
			<h1 class="wow bounceIn"><?php the_title(); ?></h1>
			<div class="n_tit_time wow slideInUp">
				<p><?php the_time('Y-m-d') ?></p>
				<div class="n_share">
					<p>share:</p>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank">
						<iconify-icon icon="ic:baseline-facebook"></iconify-icon>
					</a>
					<a href="https://www.linkedin.com/shareArticle?url=<?php echo the_permalink(); ?>&title=<?php echo the_title_attribute(); ?>" target="_blank">
						<iconify-icon icon="uil:linkedin"></iconify-icon>
					</a>
					<a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/static/images/media/twitter_color.svg" alt="">
					</a>
				</div>
			</div>
		</div>

		<article class="n_article fz16 wow slideInUp">
			<?php the_content(); ?>
		</article>

		<div class="n_navigation">
			<ul>
				<li class="wow slideInLeft">
					<?php $prevPost = get_previous_post(true); ?>
					<?php if (!empty($prevPost)) : ?>
					<a href="<?php echo esc_url(get_permalink($prevPost->ID)); ?>">
						<p>Previous:</p>
						<p><?php echo esc_html(get_the_title($prevPost->ID)); ?></p>
					</a>
					<?php endif; ?>
				</li>
				<li class="wow slideInLeft">
					<?php $nextPost = get_next_post(true); ?>
					<?php if (!empty($nextPost)) : ?>
					<a href="<?php echo esc_url(get_permalink($nextPost->ID)); ?>">
						<p>Next:</p>
						<p><?php echo esc_html(get_the_title($nextPost->ID)); ?></p>
					</a>
					<?php endif; ?>
				</li>
			</ul>
			<a class="n_back wow slideInRight" href="javascript:void(0)" onclick="window.history.go(-1);">
				<i class="fal fa-undo"></i>
				<b>RETURN</b>
			</a>
		</div>

	</div>
	<div class="clear"></div>

</main>
<div class="clear"></div>


<!-- Footer -->
<?php get_footer();?>


</body>
</html>