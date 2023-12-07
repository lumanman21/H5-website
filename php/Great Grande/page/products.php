<?php
/*
Template Name: products
*/
get_header();?>


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
	<section class="p_txt p60">
		<div class="wrap">
			<div class="i_tit i_tit_l i_tit_s">
				<h2>Enterprise certification</h2>
				<h6>We have obtained management system certification, environmental management system</br> certification, etc.</h6>
			</div>
			<ul>
				<li><img src="<?php bloginfo('template_url'); ?>/static/images/rz1.png" alt=""></li>
				<li><img src="<?php bloginfo('template_url'); ?>/static/images/rz2.png" alt=""></li>
				<li><img src="<?php bloginfo('template_url'); ?>/static/images/rz3.png" alt=""></li>
				<li><img src="<?php bloginfo('template_url'); ?>/static/images/rz4.png" alt=""></li>
			</ul>
		</div>
	</section>

	<section class="p80 bc_gradient">
		<div class="wrap">
			<div class="i_tit i_tit_s">
				<h2><?php echo get_cat_name(7); ?></h2>
			</div>
			<article class="p_descrp wrap">
				<?php echo category_description(7); ?>
			</article>
			<div class="pc_a_list swiper-container m50">
				<ul class="swiper-wrapper">
					<?php
						$cat_id = 7; // 指定分类 ID
						$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
						$query_args = array(
							'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
							'posts_per_page' => 8, // 显示多少篇文章
							'orderby' => 'date', // 按日期排序
							'order' => 'DESC', // 按降序排列
						);
						$all_posts = new WP_Query( $query_args );
						if ( $all_posts->have_posts() ) {
						while ( $all_posts->have_posts() ) {
						$all_posts->the_post();
					?>
					<li class="swiper-slide">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<div class="img"><?php
								$category_data = get_post_meta($post->ID, 'extend_info', true);
								$produc_img = explode( ',', $category_data['produc_img'] );
								$thumbnail_id = $produc_img[0];
								$thumbnail_alt = get_the_title();
							?>
							<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> /></div>
							<div class="txt"><b><?php the_title(); ?></b></div>
						</a>
					</li>
					<?php } wp_reset_postdata(); } ?>
				</ul>
				<div class="pc_a-pagination"></div>
				<div class="pc_a-prev"><i class="fal fa-angle-left"></i></div>
				<div class="pc_a-next"><i class="fal fa-angle-right"></i></div>
			</div>
			<a href="<?php echo get_category_link(7); ?>" class="i_more i_more_c" ><b>Expand More</b></a>
		</div>
	</section>


	<section class="pc_b p80 wrap_l bc_black">
		<div class="p_box">
			<div class="i_tit i_tit_l i_tit_s">
				<h2><?php echo get_cat_name(8); ?></h2>
				<article class="p_descrp">
					<?php echo category_description(8); ?>
				</article>
				<a href="<?php echo get_category_link(8); ?>" class="i_more"><b>Expand More</b></a>
				<ul>
					<?php
						$cat_id = 8; // 指定分类 ID
						$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
						$query_args = array(
							'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
							'posts_per_page' => 3, // 显示多少篇文章
							'orderby' => 'date', // 按日期排序
							'order' => 'DESC', // 按降序排列
						);
						$all_posts = new WP_Query( $query_args );
						if ( $all_posts->have_posts() ) {
						while ( $all_posts->have_posts() ) {
						$all_posts->the_post();
					?>
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<div class="img"><?php
								$category_data = get_post_meta($post->ID, 'extend_info', true);
								$produc_img = explode( ',', $category_data['produc_img'] );
								$thumbnail_id = $produc_img[0];
								$thumbnail_alt = get_the_title();
							?>
							<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> /></div>
						</a>
					</li>
					<?php } wp_reset_postdata(); } ?>
					
				</ul>
			</div>
		</div>
		<div class="pc_b_img">
			<img src="<?php bloginfo('template_url'); ?>/static/images/other/p2.webp" alt="">
		</div>
			
	</section>

	<section class="p80 bc_black">
		<div class="wrap">
			<div class="i_tit i_tit_s">
				<h2><?php echo get_cat_name(9); ?></h2>
			</div>
			<article class="p_descrp wrap">
				<?php echo category_description(9); ?>
			</article>
			<div class="pc_a_list swiper-container m50">
				<ul class="swiper-wrapper">
					<?php
						$cat_id = 9; // 指定分类 ID
						$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
						$query_args = array(
							'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
							'posts_per_page' => 8, // 显示多少篇文章
							'orderby' => 'date', // 按日期排序
							'order' => 'DESC', // 按降序排列
						);
						$all_posts = new WP_Query( $query_args );
						if ( $all_posts->have_posts() ) {
						while ( $all_posts->have_posts() ) {
						$all_posts->the_post();
					?>
					<li class="swiper-slide">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<div class="img"><?php
								$category_data = get_post_meta($post->ID, 'extend_info', true);
								$produc_img = explode( ',', $category_data['produc_img'] );
								$thumbnail_id = $produc_img[0];
								$thumbnail_alt = get_the_title();
							?>
							<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> /></div>
							<div class="txt"><b><?php the_title(); ?></b></div>
						</a>
					</li>
					<?php } wp_reset_postdata(); } ?>
				</ul>
				<div class="pc_a-pagination"></div>
				<div class="pc_a-prev"><i class="fal fa-angle-left"></i></div>
				<div class="pc_a-next"><i class="fal fa-angle-right"></i></div>
			</div>
			<a href="<?php echo get_category_link(9); ?>" class="i_more i_more_c"><b>Expand More</b></a>
		</div>
	</section>

	<section class="p80 bc_black">
		<div class="wrap">
			<div class="i_tit i_tit_s">
				<h2><?php echo get_cat_name(10); ?></h2>
			</div>
			<article class="p_descrp wrap">
				<?php echo category_description(9); ?>
			</article>
			<div class="pc_a_list swiper-container m50">
				<ul class="swiper-wrapper">
					<?php
						$cat_id = 10; // 指定分类 ID
						$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
						$query_args = array(
							'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
							'posts_per_page' => 8, // 显示多少篇文章
							'orderby' => 'date', // 按日期排序
							'order' => 'DESC', // 按降序排列
						);
						$all_posts = new WP_Query( $query_args );
						if ( $all_posts->have_posts() ) {
						while ( $all_posts->have_posts() ) {
						$all_posts->the_post();
					?>
					<li class="swiper-slide">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<div class="img"><?php
								$category_data = get_post_meta($post->ID, 'extend_info', true);
								$produc_img = explode( ',', $category_data['produc_img'] );
								$thumbnail_id = $produc_img[0];
								$thumbnail_alt = get_the_title();
							?>
							<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> /></div>
							<div class="txt"><b><?php the_title(); ?></b></div>
						</a>
					</li>
					<?php } wp_reset_postdata(); } ?>
				</ul>
				<div class="pc_a-pagination"></div>
				<div class="pc_a-prev"><i class="fal fa-angle-left"></i></div>
				<div class="pc_a-next"><i class="fal fa-angle-right"></i></div>
			</div>
			<a href="<?php echo get_category_link(10); ?>" class="i_more i_more_c"><b>Expand More</b></a>
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

<script>
	var swiper = new Swiper('.pc_a_list', {
		// loop: true,
		// loopFillGroupWithBlank: true,
		//roundLengths: true,
		//centeredSlides: true,
		pagination: {
			el: '.pc_a-pagination',
			clickable: true,
		},
		navigation: {
			prevEl: '.pc_a-prev',
			nextEl: '.pc_a-next',
		},
		autoplay: {
			delay: 3000,
			pauseOnMouseEnter:true,
			disableOnInteraction: false,
		},
		observer: true,
		observeParents: true,
		breakpoints: {
			0:{
				slidesPerView: 2,
				spaceBetween: '2%',
				slidesPerGroup: 1,
			},
			560: {
				slidesPerView: 3,
				spaceBetween: '2%',
				slidesPerGroup: 1,
			},
			959: {
				slidesPerView: 4,
				spaceBetween: '4%',
				slidesPerGroup: 1,

			},
		},
	});
</script>








<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>