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



<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_products',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>Products</h2>
			<div class="breadcrumbs">
			<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>

<!-- anchor -->
<div class="mao_box wrap bc_black">
	<div class="in_nav">
	  <div class="in_nav_tit">
		<h6>Products list</h6>
	  </div>
	  <ul class="menu_list">
	  <?php
			$args = array(
				'child_of' => 2,
				'parent' => 2,
				'hide_empty' => 0,
				'orderby' => 'id',
				'order' => 'ASC',
			);
			$categories = get_categories($args);
			foreach ($categories as $cat) {
				$category_data = get_term_meta($cat->term_id, 'category_options', true);
				$thumbnail_id = $category_data['cat_thumbnail'];
				$thumbnail_alt = $cat->name;
				$style1 = ($category_name == $cat->name) ? 'active' : ''; // 根据条件设置样式类名
				?>
				<li class="<?php echo $style1 ?> list">
					<a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" title="<?php echo esc_attr($cat->name); ?>">
						<?php echo esc_html($cat->name); ?>
					</a>
				</li>
				<?php
			}
			?>



		
	  </ul>
	</div>
</div>
	
<main>
	<div class="in_p p80">
		<img class="img1" src="<?php bloginfo('template_url'); ?>/static/images/i2.png" alt="">
		<img class="img2" src="<?php bloginfo('template_url'); ?>/static/images/i1.png" alt="">

		<?php if ($category_id == 2){ ?>

		<div class="i_tit wrap wow slideInUp">
			<h2><?php single_cat_title(); ?></h2>
			<h6 class="wrap">
				<?php echo category_description(2); ?>
			</h6>
		</div>

		<ul class="in_p_list wrap mt60">
		<?php while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<div class="img">
					<?php
					$category_data = get_post_meta($post->ID, 'extend_info', true);
					$produc_img = explode( ',', $category_data['produc_img'] );
					$thumbnail_id = $produc_img[0];
					$thumbnail_alt = get_the_title();
				?>
				<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
			</div>
			<p><?php the_title(); ?></p>
		</a></li>
		<?php endwhile; wp_reset_postdata(); ?>
		</ul>

		

		<?php }else{ ?>

		<div class="i_tit wrap wow slideInUp">
			<h2><?php single_cat_title(); ?></h2>
			<h6 class="wrap">
				<?php echo category_description(); ?>
			</h6>
		</div>

		<ul class="p_list wrap m60">
			<?php 
				while (have_posts()) : the_post();
				$category_data = get_term_meta($category_id, 'category_options', true);
			?>

			<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="img">
						<?php
						$category_data = get_post_meta($post->ID, 'extend_info', true);
						$produc_img = explode( ',', $category_data['produc_img'] );
						$thumbnail_id = $produc_img[0];
						$thumbnail_alt = get_the_title();
					?>
					<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
				</div>
				<div class="txt">
					<h2><?php the_title(); ?></h2>
					<article>
						<?php
							$article_data = get_post_meta($post->ID, 'extend_info', true);
							$product_adv = $article_data['product_adv'];
							if( !empty($product_adv) ){
							foreach($product_adv as $article_data){
						?>
						<p><?php echo $article_data['produc_adv_tit'] ?></p>
						<?php } } ?>

					</article>
					<div class="ip_btn m40"><p><iconify-icon icon="ep:right"></iconify-icon><span>READ  MORE</span></p></div>
				</div>
			</a></li>
			<?php endwhile; wp_reset_postdata(); ?>

			
			
		</ul>

		<?php } ?>


		




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

	

<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>






<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>