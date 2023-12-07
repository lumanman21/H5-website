<?php
$category_data = get_term_meta( $cat, 'category_options', true );
get_header(); ?>
<?php
	$category_id = $cat;
	$now_cat = get_queried_object_id();

	$category_name = get_cat_name($category_id);  // 当前分类名称
	$category_link = get_category_link( $category_id ); // 当前分类链接

	$upcategory_id= tx_wp_get_category_root_id( $category_id );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="in_banner">
	<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/static/images/banner_p.webp" /></div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>Serve customers</br>attentively</h2>
		</div>
	</div>
</div>

<!-- 当前位置 -->
<div class="in_position in_position_bc">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>


<main>
	<section class="p_box m140">
		<div class="i_tit wrap wow slideInUp">
			<h2>Product center</h2>
		</div>

		<ul class="ip_menu_list">
		<?php
          $args=array(
          'child_of'=> 2,
          'parent' => 2,
          'hide_empty'=>'0',
          'orderby'=>'id',
          'order'=>'asc',
          );
		  $num = 1;
          $categories=get_categories($args);
          foreach($categories as $category) {
          $category_data = get_term_meta( $category->term_id, 'category_options', true );
          $cat_term_id = get_category($category)->term_id;
          $cat_taxonomy = get_category($category)->taxonomy;

          if ($category->term_id==$category_id)
          {
          $style2="current";
          }else{
          $style2="";
          }

		  if ($category->term_id==$upcategory_id)
          {
          $style1="current";
          }else{
          $style1="";
          }
          ?>

          <li class="<?php echo $style1 ?> <?php echo $style2 ?> wow slideInUp" data-wow-delay=".<?php echo $num; ?>s">
            <a href="<?php echo get_category_link( $category->term_id ) ;?>">
              <?php echo $category->name;?></p>
            </a>
		</li>
          <?php $num++;} ?>

		</ul>


		<div class="in_products wrap mt100 mb60" data-sticky-container>
			<div class="p_nav" data-sticky data-margin-top="100" data-sticky-for="1023">

				<ul class="p_nav_list">

					<?php
					$current_term = get_queried_object();
					$children = get_term_children( $current_term->term_id, $current_term->taxonomy );
					
					
					if ( ! empty( $children ) ) { ?>

					<?php
						$current_category_id = get_queried_object_id(); // 获取当前页面的分类ID
						$args = array(
							'parent'       => $current_category_id,
							'hide_empty'   => 0,
							'orderby'      => 'id',
							'order'        => 'ASC',
						);
						$categories = get_categories($args);
						foreach ($categories as $cat) {
							$category_data = get_term_meta($cat->term_id, 'category_options', true);
							$cat_thumbnail = $category_data['cat_thumbnail'];
							$cat_thumbnail_url = wp_get_attachment_image_src($cat_thumbnail, 'full');
							?>
							<li <?php if (is_category($cat->term_id)) echo 'class="curr"'; ?>>
								<a class="cat_name" href="<?php echo get_category_link($cat->term_id); ?>">
									<b><?php echo esc_attr($cat->name); ?></b>
								</a>
							</li>

						<?php } ?>

					<?php } else { ?>

						<?php
							$args = array(
								'parent'       => $upcategory_id,
								'hide_empty'   => 0,
								'orderby'      => 'id',
								'order'        => 'ASC',
							);
							$categories = get_categories($args);
							foreach ($categories as $cat) {
								$category_data = get_term_meta($cat->term_id, 'category_options', true);
								$cat_thumbnail = $category_data['cat_thumbnail'];
								$cat_thumbnail_url = wp_get_attachment_image_src($cat_thumbnail, 'full');
								?>
								<li <?php if (is_category($cat->term_id)) echo 'class="curr"'; ?>>
									<a class="cat_name" href="<?php echo get_category_link($cat->term_id); ?>">
										<b><?php echo esc_attr($cat->name); ?></b>
									</a>
								</li>

							<?php } ?>

					<?php } ?>
					
				</ul>
			</div>
	


			<div class="in_p_r">
				<ul class="in_p_list">

				<?php
					while (have_posts()) : the_post();
					$category_data = get_post_meta($post->ID, 'extend_info', true);
				?>
				<li>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<div class="img">
							<?php if( !empty ( get_post_image() ) ){ ?>
							<img src="<?php echo esc_url( get_post_image() ); ?>" alt="<?php the_title_attribute(); ?>">
							<?php } else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/static/images/public/nopic.png" alt="<?php the_title_attribute(); ?>">
							<?php } ?>
						</div>
						<p><?php the_title(); ?></p>
					</a>
				</li>
				<?php endwhile; wp_reset_postdata(); ?>

				</ul>
			</div>
		</div>


		<!-- Number of pages -->
		<div class="in_page_box wow slideInUp">
			<ul class="in_page">
			<?php zdy_paging(); ?>
			</ul>
		</div>


	</section>
</main>
<div class="mb120"></div>





<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>