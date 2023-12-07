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

<main>
	<div class="in_products wrap m100">
		<div class="p_nav">
			<div class="i_tit i_tit_l wow slideInUp">
				<h2><span>products</span></h2>
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
					if ($category_name==$category->name)
					{
							$style1="active";
					}else{
							$style1="";
					};
					?>
				<li class="<?php echo $style1 ?>">
					<a href="<?php echo get_category_link( $category->term_id ) ;?>">
						<?php echo $category->name;?>
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
											$style2="active";
									}else{
											$style2="";
									}
									echo '<li class="' . $style2 . '"><i></i><a href="' . get_category_link($categoryzi->term_id) . '">' . $categoryzi->name . '</a></li>';
								}
						?>
					</ul>
				</li>
				<?php } ?>

			</ul>
			<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/bc_p_menu.png" alt=""></div>
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script src="<?php bloginfo('template_url'); ?>/static/js/Multi-layer_fold.js"></script>
			<script>
				$(document).ready(function() {
					$(".p_men_list").accordion({
						accordion:false,
						speed: 500,
						closedSign: '<iconify-icon icon="mingcute:down-line"></iconify-icon>',
						openedSign: '<iconify-icon icon="mingcute:up-line"></iconify-icon>'
					});
				});
			</script>
		</div>

		<div class="in_p_r">
			<div class="in_c_name">
				<h6><?php single_cat_title(); ?></h6>
				<?php
							$current_category = get_queried_object();
							$category_description = category_description($current_category->term_id);
							echo $category_description;
				?>
				
			</div>
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
						<h6><?php the_title(); ?></h6>
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

	<div class="in_p_contact">
		<div class="wrap">
			<div class="ico"><iconify-icon icon="ep:service"></iconify-icon></div>
			<h6>If you have any questions or would like to request a quote,
				Please send us a message.</h6>
			<a href="<?php echo get_permalink(13); ?>" class="i_more"><b><img src="<?php bloginfo('template_url'); ?>/static/images/ico_call.png" alt="">Contact us</b></a>
		</div>
	</div>

	<section class="in_ad mt80 mb100 wrap">
		<div class="i_tit">
			<h2><span>Our advantage</span></h2>
		</div>
			
		<ul class="in_ad_list m80">
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
				<div class="txt">
					<?php echo $value['i_ad_txt'] ?>
				</div>
			</li>
			<?php endforeach; } ?>

		</ul>
			
	</section>



</main>






<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>