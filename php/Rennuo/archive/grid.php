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


<div class="in_banner p_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_2.webp" />
	</div>
	<div class="p_search">
		<form role="search" method="get" id="searchform" action="/">
			<input class="p_search_ipt" type="text" placeholder="Please enter the equipment query..." value="" name="s" id="s">
			<input class="p_search_btn" type="submit" value="search">
		</form>
	</div>
</div>
<div class="in_position in_position_bc">
	<div class="wrap container">
	<?php echo in_breadcrumbs(); ?>
	</div>
</div>

<!-- Main -->
<main>
	<div class="in_products wrap mt30 mb60" data-sticky-container>
		<div class="p_nav" data-sticky data-margin-top="100" data-sticky-for="1023">
			<div class="p_tit">Product Categories</div>
			<ul class="p_nav_list">
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
					<a class="cat_name" href="<?php echo get_category_link( $category->term_id ) ;?>">
						<b><?php echo $category->name;?></b>
						<i></i>
					</a>
					<dl>
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
											$style3="on";
									}else{
											$style3="";
									}
									echo '<dt class="' . $style3 . '"><a href="' . get_category_link($categoryzi->term_id) . '"><b>' . $categoryzi->name . '</b></a></dt>';
								}
						?>
					</dl>
				</li>
				<?php } ?>
			</ul>
		</div>

		<div class="in_p_r">
			<ul class="in_p_list">
				<?php while (have_posts()) : the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">      <!-- 文章链接和title -->
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
							<h6><?php the_title(); ?></h6>
							<?php if( !empty ($category_data['produc_ms']) ){ ?>
								<p><?php echo $category_data['produc_ms']; ?></p>
							<?php } ?>
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
	</div>

</main>
<script>
	if (screen.width < 1025) {
		$(function () {
			$(".p_nav_tit").click(function () {
				$(this).toggleClass("on");
				$(".p_nav_list").stop().slideToggle();
			});
		});
	}

	$(".p_nav_list li").each(function () {
		$(".p_nav_list li:has(dt) > a").attr("href", "javascript:;");
		$(".p_nav_list li:not(:has(dt)) > a i").hide();
	});
	$(document).ready(function () {
		$(".p_nav_list .cat_name").click(function (e) {
			var $li = $(this).parent();
			if ($li.hasClass("curr")) {
				$li.find("dl").slideUp();
				$li.removeClass("curr");
			} else {
				$(".p_nav_list li.curr").find("dl").slideUp();
				$(".p_nav_list li.curr").removeClass("curr");
				$li.find("dl").slideDown();
				$li.addClass("curr");
			}
		});
	});
</script>
<script src="<?php bloginfo('template_url'); ?>/static/js/sticky.min.js"></script>
<script>
    var sticky = new Sticky('[data-sticky]', {});
</script>




<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>