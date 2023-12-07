<?php get_header(); ?>

<?php
	$this_category = get_the_category();
	$category_id = $this_category[0]->cat_ID;
	$now_cat = $category_id;

	$category_name = get_cat_name($category_id);  // 当前分类名称
	$category_link = get_category_link( $category_id ); // 当前分类链接

	$upcategory_id= tx_wp_get_category_root_id( $category_id );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>
<?php
	$category_data = get_post_meta($post->ID, 'extend_info', true);
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
<div class="in_position">
	<div class="wrap container">
	<?php echo in_breadcrumbs(); ?>
	</div>
</div>


<main>
	<section class="pd_content pt100">

		<div class="pd_box wrap">
			<div class="pd_img_box">

			<?php
					$article_data = get_post_meta($post->ID, 'extend_info', true);
					$p_gallery = $article_data['p_gallery'];
					if (!empty($p_gallery)) {
						foreach ($p_gallery as $article_data) {
							
								?>
				<div class="gallery">
					<div class="swiper-container">
						<ul class="swiper-wrapper">

							<?php
							$produc_img_ids = $article_data['p_gallery_cont'];
							foreach (explode(',', $produc_img_ids) as $id) {
								$img_url = wp_get_attachment_image_src($id, 'full')[0];
							?>
							<li class="swiper-slide">
								<div class="img"><img src="<?php echo $img_url; ?>" /></div>
							</li>
							<?php } ?>
							
						</ul>
						<div class="gallery-button-prev"><i class="fal fa-angle-left"></i></div>
						<div class="gallery-button-next"><i class="fal fa-angle-right"></i></div>
						<div class="gallery-pagination"></div>
					</div>
				</div>
				<?php
			}
		}
		?>
				
			</div>

			<!---------- pd_txt ------------>
			<div class="pd_txt">
				<h1><?php the_title_attribute(); ?></h1>
				<?php if( !empty ($category_data['produc_tx']) ){ ?>
					<article class="p_parameter"><?php echo $category_data['produc_tx']; ?></article>
				<?php } ?>

				<h6>Color : (Customised colors are acceptable)</h6>
				<ul class="pd_img_menu">

				<?php
					$article_data = get_post_meta($post->ID, 'extend_info', true);
					$p_gallery = $article_data['p_gallery'];
					if (!empty($p_gallery)) {
						foreach ($p_gallery as $article_data) {
							$produc_img_ids = $article_data['p_gallery_cont'];
							foreach (explode(',', $produc_img_ids) as $id) {
								$img_url = wp_get_attachment_image_src($id, 'full')[0];
								?>
								<li>
									<img src="<?php echo $img_url; ?>" />
								</li>
								<?php
								break; // 提前结束循环，只调用一张图片
							}
						}
					}
					?>

					
				</ul>

				<?php if( !empty ($category_data['produc_tx']) ){ ?>
					<article class="p_brief"><?php echo $category_data['produc_brief']; ?></article>
				<?php } ?>
				

				<?php
					$tags = wp_get_post_tags($post->ID);
					if ( $tags ) {
				?>
					<div class="tags m30 wow slideInUp">
							<h6>Hot tags:</h6>
							<ul>
								<?php
									foreach ( $tags as $tag ) {
										printf( '<li><a href="%1$s">%2$s</a></li>', esc_url( get_tag_link( $tag->term_id ) ), esc_html( $tag->name ) );
									}
								?>
							</ul>
					</div>
				<?php } ?>



				<div class="i_more_list mt50">
					<a onClick="goTop()" href="javascript:;" class="i_more"><b>View details</b></a>
					<a href="<?php echo get_permalink(9); ?>" class="i_more i_more_2"><b>Contact us</b></a>
				</div>
			</div>
		</div>


		<div class="detail_box bor box_space2 mt70">
			<div class="wrap">
				<?php if( get_the_content() ){ ?>
					<?php the_content(); ?>
				<?php } ?>
			</div>
		</div>









		<div class="related p100">
			<div class="i_tit wrap wow slideInUp">
				<h2>You might also like</h2>
			</div>

			<ul class="related_list wrap m100">
			<?php
						$args = array(
							'category__in' => array(2), // 显示ID为2的分类下的文章
							'post__not_in' => array($post->ID),
							'showposts' => 8,
							'orderby' => 'rand' // 随机显示文章
						);
						$related_posts = new WP_Query($args);

						if ($related_posts->have_posts()) :
						while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<div class="img">
										<?php
											$post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
											$produc_img =  $post_meta['produc_img'];
											$produc_img = explode( ',', $post_meta['produc_img'] );
											$produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
										?>
										<img src="<?php echo $produc_img_src[0];?>" />
									</div>
									<p><?php the_title_attribute(); ?></p>
								</a>
							</li>
						<?php endwhile; else : ?>
						<?php endif; wp_reset_postdata();; ?>
						
			</ul>
		</div>


	</section>
</main>
<script>
	var banner2_swiper = new Swiper('.gallery .swiper-container',{
		loop: true,
		loopFillGroupWithBlank: true,
		roundLengths: true,
		// centeredSlides: true,
		pagination: {
			el: '.gallery-pagination',
			clickable: true,
		},
		navigation: {
			prevEl: '.gallery-button-prev',
			nextEl: '.gallery-button-next',
		},
		// autoplay: {
		// 	delay: 3000,
		// 	pauseOnMouseEnter:true,
		// 	disableOnInteraction: false,
		// },
		observer: true,
		observeParents: true,
		slidesPerView: 1,
		spaceBetween: 0,
		slidesPerGroup: 1,
	});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/static/js/jquery.tabso_yeso.js"></script>
<script>
	$(".pd_img_menu").tabso({
	cntSelect:".pd_box .pd_img_box",
	tabEvent:"click",
	tabStyle:"normal"
	});
</script>


















<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>