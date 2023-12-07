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
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_p.webp" />
	</div>
	<div class="b_txt">
		<h6>excavator</h6>
		<p>Believe in yourself, believe in partners, win-win cooperation!</p>
	</div>
</div>
<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>


<main class="p_box">
	

	<?php if($category_id == 5 || $upcategory_id == 5){ ?>
		<section class="p_menu">
			<div class="wrap">
				<ul class="p_menu_list2 p60">
					<?php
						$args = array(
							'child_of'     => 5,
							'parent'       => 5,
							'hide_empty'   => 0,
							'orderby'      => 'id',
							'order'        => 'ASC',
						);
						$categories = get_categories( $args );
						foreach ( $categories as $cat ) {
							$category_data = get_term_meta($cat->term_id, 'category_options', true);
							$thumbnail_id = $category_data['cat_thumbnail'];
							$thumbnail_alt = $cat->name;
					?>
					
					<li><a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
						<div class="img"><img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> /></div>
						<p><b><?php echo esc_html( $cat->name ); ?></b></p>
					</a></li>
					<?php } ?>

					
					
				</ul>
			</div>
		</section>
	<?php }else{ ?>

		<section class="p_menu">
		<div class="wrap">
			<ul class="p_menu_list p60">
				<?php
					$args = array(
						'child_of'     => 4,
						'parent'       => 4,
						'hide_empty'   => 0,
						'orderby'      => 'id',
						'order'        => 'ASC',
					);
					$categories = get_categories( $args );
					foreach ( $categories as $cat ) {
						$category_data = get_term_meta($cat->term_id, 'category_options', true);
						$thumbnail_id = $category_data['cat_thumbnail'];
						$thumbnail_alt = $cat->name;
				?>
				<li class="<?php if (is_category($cat->term_id)) echo 'curr'; ?>">
					<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
						<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
					</a>    <!-- 链接 -->
				</li>
				<?php } ?>
				<li><a href="<?php echo get_category_link(5); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/other.png" alt=""></a></li>
			</ul>
		</div>
	</section>
	<?php } ?>

	

	<div class="wrap m50">
		<h2 class="s_tit"><?php single_cat_title(); ?></h2>
		<ul class="p_list mt60">
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
					<h6><?php the_title(); ?></h6>
					<div class="txt">
						<?php echo $category_data['produc_para']; ?>
					</div>
					<div class="ico"><iconify-icon icon="ph:caret-right-bold"></iconify-icon></div>
				</a></li>
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








<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>