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



	
<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_p.webp" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2><?php single_cat_title(); ?></h2>
			<div class="breadcrumbs">
				<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>


<main>
	<div class="in_products wrap m100">
		<div class="ip_menu">
			<div class="in_tit">
				<h3>products</h3><iconify-icon icon="memory:menu-down-fill"></iconify-icon>
			</div>
			<ul class="p_men_list">
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
					if ($category->term_id==$upcategory_id)
					{
							$style2="active";
					}else{
							$style2="";
					};
					
					?>
				<li class="<?php if (is_category($category->term_id)) echo 'active'; ?> <?php echo $style2; ?>">
					<a href="<?php echo get_category_link( $category->term_id ) ;?>">
						<b><?php echo $category->name;?></b>
					</a>
					<ul>
						<?php
							$argszi=array(
							'child_of'=> $category->term_id,
							'parent' => $category->term_id,
							'hide_empty'=>'0',
							'orderby'=>'id',
							'order'=>'asc',
							);
							$categorieszi=get_categories($argszi);
							foreach($categorieszi as $categoryzi) {
									if ($category_name==$categoryzi->name)
									{
											$style3="active";
									}else{
											$style3="";
									}
									echo '<li class="' . $style3 . '"><a href="' . get_category_link($categoryzi->term_id) . '">' . $categoryzi->name . '</a></li>';
								}
						?>
					</ul>
				</li>
				<?php } ?>

				
			</ul>
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script src="<?php bloginfo('template_url'); ?>/static/js/Multi-layer_fold.js"></script>
			<script>
				$(document).ready(function() {
					$(".p_men_list").accordion({
						accordion:false,
						speed: 500,
						closedSign: '<iconify-icon icon="icon-park-solid:right-one"></iconify-icon>',
						openedSign: '<iconify-icon icon="icon-park-solid:down-one"></iconify-icon>'
					});
				});
			</script>
			<script>
				if(screen.width < 1025){
					$(function(){
						$(".in_tit").click(function () {
							$(this).toggleClass("on");
							$(".p_men_list").stop().slideToggle();
						});
					});
				}
			</script>
		</div>

		<div class="in_p_r">
			<ul class="in_p_list">
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
						<h6><?php the_title(); ?> </h6>
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
	</div>


	<section class="in_ad">
		<ul class="i_ad wrap">
			<?php
				$i_ad = xintheme('i_ad');
				if($i_ad){
				foreach($i_ad as $value):
				$img_id = $value['i_ad_ico'];
				$img_src = wp_get_attachment_image_src( $img_id, 'full' );
			?>
			<li>
				<img src="<?php echo $img_src[0]; ?>" />
				<h6><?php echo $value['i_ad_tit'] ?></h6>
				<p>
					<?php echo $value['i_ad_txt'] ?>
				</p>
			</li>
			<?php endforeach; } ?>
		</ul>
	</section>
</main>









<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>