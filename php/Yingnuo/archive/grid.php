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
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_p.webp" />
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
	<section class="in_products wrap m100">
		<div class="p_nav">
			<div class="i_tit i_tit_l wow slideInUp">
				<h2>products</h2><iconify-icon icon="memory:menu-down-fill"></iconify-icon>
			</div>
			<ul class="p_men_list">
				<?php
					$args=array(
					'child_of'=> 3,
					'parent' => 3,
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
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script src="<?php bloginfo('template_url'); ?>/static/js/Multi-layer_fold.js"></script>
			<script>
				$(document).ready(function() {
					$(".p_men_list").accordion({
						accordion:false,
						speed: 500,
						closedSign: '<iconify-icon icon="mingcute:right-line"></iconify-icon>',
						openedSign: '<iconify-icon icon="mingcute:down-line"></iconify-icon>'
					});
				});
			</script>
			<script>
				if(screen.width < 1025){
					$(function(){
						$(".i_tit").click(function () {
							$(this).toggleClass("on");
							$(".p_men_list").stop().slideToggle();
						});
					});
				}
			</script>
		</div>

		<div class="in_p_r">
			<div class="in_c_name">
				<h6><?php single_cat_title(); ?></h6>
				<p>
					<?php
							$current_category = get_queried_object();
							$category_description = category_description($current_category->term_id);
							echo $category_description;
					?>
				</p>
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
	</section>

	<section class="album">
		<div class="wrap">
			<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/album.png" alt=""></div>
			<h6>WOOVO PRODUCT CATALOG <p>For product details and side-by-side comparisons.</p>
			</h6>
			<a href="<?php echo xintheme('album_load'); ?>" class="i_more i_more2"><b>Download<i></i></b></a>
		</div>
	</section>


	<section class="pd_faq p100 mt60">
		<div class="wrap">
			<ul class="pd_faq_list">
				<?php
					$p_faq = xintheme('p_faq');
					if($p_faq){
					foreach($p_faq as $value):
				?>
				
				<li>
					<div class="txt">
						<h3><?php echo $value['p_q'] ?><i></i></h3>
						<p><?php echo $value['p_a'] ?></p>
					</div>
				</li>
				<?php endforeach; } ?>


				
			</ul>

			<a href="javascript:;" onclick="asfrom()" class="i_more m40"><b>Contact us for accurate response<i></i></b></a>
			
		</div>
	</section>
	<script>
		var faqList = $('.pd_faq_list li');
		var firstLi = faqList.first();
		var firstP = firstLi.find('p');
		firstP.slideDown('fast');
		firstLi.find('h3').addClass('curr');
		
		faqList.find('h3').click(function() {
			var parentLi = $(this).parent();
			var p = parentLi.find('p');
			if (p.is(':hidden')) {
				faqList.find('p').slideUp('fast');
				faqList.find('h3').removeClass('curr');
				p.slideDown('fast');
				$(this).addClass('curr');
			} else {
				p.slideUp('fast');
				$(this).removeClass('curr');
			}
		});

	</script>


	<div class="bc1"></div>
</main>




<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>