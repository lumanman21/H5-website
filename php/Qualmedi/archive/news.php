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
		<img src="<?php echo xintheme_img('in_banner_news',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>News</h2>
			<div class="breadcrumbs">
			<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>


	
<main>
	<div class="in_p p60">
		<img class="img1" src="<?php bloginfo('template_url'); ?>/static/images/i2.png" alt="">
		<img class="img2" src="<?php bloginfo('template_url'); ?>/static/images/i1.png" alt="">
		<div class="i_tit wrap wow slideInUp">
			<h2>News</h2>
		</div>

		<ul class="news_ul wrap">

			<?php while (have_posts()) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<div class="news_ul_text">
						<h5><?php echo the_time('Y.m.d') ?></h5>
						<h3><?php the_title(); ?></h3>
						<h4><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?></h4>
						<div class="ip_btn m30"><p><iconify-icon icon="ep:right"></iconify-icon><span>READ  MORE</span></p></div>
					</div>
					<div class="news_ul_img">
						<?php display_post_image(); ?>
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
	

	<div class="in_p_contact">
		<div class="wrap">
			<div class="ico"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_p_c.png" alt=""></div>
			<h6>If you have any questions or would like to request a quote,
				Please send us a message.</h6>
			<a href="javascript:;" onclick="asfrom()" class="i_more i_more_color i_btn"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_call.png" alt="">Contact us</a>
		</div>
	</div>
</main>





<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>
