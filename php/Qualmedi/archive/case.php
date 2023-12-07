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
		<img src="<?php echo xintheme_img('in_banner_case',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>Case</h2>
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
			<h2>Case</h2>
		</div>

		<ul class="case_list wrap mt60">
			<?php 
				while (have_posts()) : the_post(); 
				$article_data = get_post_meta($post->ID, 'extend_info', true);
			?>
			<li>
				<div class="img"><?php display_post_image(); ?></div>
				<p><?php the_title(); ?></p>
				<div class="i_case_btn" ipath="<?php echo $article_data['case_link']; ?>">
					<img src="<?php bloginfo('template_url'); ?>/static/images/i_case_v.png" alt="">
				</div>
				
			</li>
			<?php endwhile; wp_reset_postdata(); ?>

			
		</ul>
		<div class="vd_box"></div>

		<!-- Number of pages -->
		<div class="in_page_box wow slideInUp">
			<ul class="in_page">
				<?php zdy_paging(); ?>
			</ul>
		</div>
	</div>
	<script>
		$(".i_case_btn").click(function () {
			var v_link = $(this).attr('ipath');
			$('.vd_box').html("<div onclick=\"v_close()\" class=\"close_v\"></div><iframe id=\"iframe_v\" src='" + v_link + "?autoplay=1' title=\"\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>");
			$('.vd_box').show();
		});
		function v_close() {
			$('.vd_box').html("");
			$('.vd_box').hide();
		}
	</script>


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
