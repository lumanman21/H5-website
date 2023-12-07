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


<?php
	if(strpos($upcategory_name,'Products') !== false){
		$current_category_id =  $category_id;
	}else{
		$current_category_id =  $upcategory_id;
	}
?>



<!-- header -->
<?php get_template_part('top') ?>





<!-- banner -->
<div class="in_banner">
	<img src="<?php bloginfo('template_url'); ?>/static/images/banner_p.webp" alt="">
	<div class="in_banner_text wrap">
		<h2>PRODUCTS</h2>
	</div>
</div>

<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container"><?php echo in_breadcrumbs(); ?></div>
</div>


<!-- main -->
<main>
	<!-- 产品列表 -->
	<section class="p_box m80">
		<div class="p_box_cont wrap">
			<div class="p_box_l">
				<div class="in_tit"><h3>products</h3><iconify-icon icon="mingcute:down-line"></iconify-icon></div>
				<ul class="p_menu">
					<?php
						$args=array(
						'child_of'=> 2,
						'parent' => 2,
						'hide_empty'=>'0',
						'orderby'=>'id',
						'order'=>'asc',
						);
						$categories=get_categories($args);
						foreach($categories as $category) {
						if ($category_name==$category->name)
						{
								$style1="curr";
						}else{
								$style1="";
						};
					?>
					<li class="<?php echo $style1 ?>">
						<span>
							<a href="<?php echo get_category_link( $category->term_id ) ;?>"><?php echo $category->name;?></a>
						</span>
					</li>
					<?php } ?>
					
				</ul>
			</div>
			<div class="p_box_r">
				<ul class="p_list">
					<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
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
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>

					
				</ul>

				<!-- Number of pages -->
				<div class="in_page_box">
					<ul class="in_page">
						<?php zdy_paging(); ?>
					</ul>
				</div>

			</div>
		</div>
	</section>
	<script>
		if(screen.width < 1025){
			$(function(){
				$(".in_tit").click(function () {
					$(this).toggleClass("on");
					$(".p_menu").stop().slideToggle();
				});
			});
		}
	</script>
</main>








<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>