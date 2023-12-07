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
			<script>
				document.querySelectorAll('.breadcrumbs a')[1].addEventListener('click', function(event) {
					event.preventDefault();
				});
			</script>
		</div>
	</div>
</div>

<main >
	<div class="in_nav_tit">
		<h6>Products list</h6><i></i>
	</div>
	<ul class="p_menu p60 bc_black">
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
				if ($cat->term_id == $category_id)
				{
					$curr="curr";
				}else{
					$curr="";
				}
		?>
		<li class="<?php echo $curr; ?>">
			<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>">
				<?php echo esc_html( $cat->name ); ?>
			</a>
		</li>
		<?php } ?>
	</ul>
	<script>
		// 移动端
		if (screen.width < 960) {
			$(function () {
			$(".in_nav_tit").click(function () {
				$(this).toggleClass("on");
				$(".p_menu").stop().slideToggle();
			});
			$(".p_menu").click(function () {
				$(".in_nav_tit").toggleClass("on");
				$(this).stop().slideToggle();
			});
			});
		}
	</script>

	<section class="pl_box bc_black p70">
		<div class="wrap">
			<div class="i_tit i_tit_s">
				<h2><?php echo get_cat_name($current_category_id); ?></h2>
			</div>
			<article class="wrap">
				<?php
					$category = get_term($current_category_id, 'category');
					$category_description = $category->description;
					echo $category_description;
				?>
			</article>
			<ul class="p_menu_in m30">

				<?php
					$args = array(
						'child_of'     => $current_category_id,
						'parent'       => $current_category_id,
						'hide_empty'   => 0,
						'orderby'      => 'id',
						'order'        => 'ASC',
					);
					$categories = get_categories( $args );
					foreach ( $categories as $cat ) {
						if ($cat->term_id == $category_id)
						{
							$curr="curr";
						}else{
							$curr="";
						}
						
				?>
				<li class="<?php echo $curr; ?>">
					<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
						<?php echo esc_html( $cat->name ); ?>
					</a>
				</li>
				<?php } ?>


				
			</ul>
			<ul class="p_list">
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
						<div class="txt"><b><?php the_title(); ?></b></div>
					</a></li>
				<?php endwhile; wp_reset_postdata(); ?>
				
			</ul>
			<a href="<?php echo get_permalink(22); ?>" class="i_more i_more_c"><b>Expand More</b></a>
		</div>
	</section>


	<!-- customized -->
	<section class="p80 bc_gradient">
		<div class="customized wrap">

			<ul class="cus_list">
				<?php
					$i_why = xintheme('i_why');
					if($i_why){
					foreach($i_why as $value):
					$img_id = $value['i_why_ico'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				?>
	
				<li>
					<div class="ico"><img src="<?php echo $img_src[0]; ?>" /></div>
					<div class="txt">
						<h3><?php echo $value['i_why_tit'] ?><i></i></h3>
						<p><?php echo $value['i_why_txt'] ?></p>
					</div>
				</li>
				<?php endforeach; } ?>
				
			</ul>

			<div class="cus_txt">
				<div class="i_tit i_tit_l i_tit_s">
					<h2>Comprehensive support and customized services</h2>
				</div>
				<article>
					We provide a comprehensive residential folding box after-sales service, including folding box maintenance, technical support and problem solving. We have an experienced professional team to ensure timely response to customer needs. Your satisfaction is our number one goal, we will continue to provide high quality service to ensure that your folding box always maintains excellent performance.
				</article>
				<a href="./products_list.html" class="i_more mt100"><b>Contact us</b></a>
			</div>
		</div>
	</section>
	<script>
		var faqList = $('.cus_list li');
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

</main>







<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>