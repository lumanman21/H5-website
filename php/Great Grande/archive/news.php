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


<div class="mao_box p60 wrap bc_black">
	<div class="in_nav am_box">
	  <div class="in_nav_tit">
		<h6>About list</h6>
	  </div>
	  <ul class="menu_list">
		<li class="list"><a href="<?php echo get_permalink(2); ?>/#about_1">Company Profile </a></li>
		<li class="list"><a href="<?php echo get_permalink(2); ?>/#about_2">Certificates</a></li>
		<li class="list"><a href="<?php echo get_permalink(2); ?>/#about_3">Factory Overview</a></li>
		<li class="list"><a href="<?php echo get_permalink(2); ?>/#about_4">Partners</a></li>
		<li class="list active"><a href="#news">News</a></li>
	  </ul>
	</div>
</div>

<main class="bc_black">
	<ul class="in_n_list wrap p60">
		<?php while (have_posts()) : the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="img"><?php display_post_image(); ?></div>
				<div class="txt">
					<h5><?php the_title(); ?></h5>
					<span><?php echo the_time('Y.m.d') ?></span>
					<h6><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?> </h6>
				</div>
				<div class="n_more">
					<iconify-icon icon="ps:right"></iconify-icon>
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

</main>





<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>
