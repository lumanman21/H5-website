<?php
/*
Template Name: why
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_why',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>why choose us</h2>
			<div class="breadcrumbs">
			<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>


<main>
	<section class="why_box">
		<ul class="why_list">
			<li>
				<div class="wrap">
					<div class="txt">
						<div class="i_tit i_tit_l">
							<h2>Company Advantages</h2>
						</div>
						<article>
							<?php echo xintheme('in_ca'); ?>
						</article>
						<dl class="why_ico">
							<dt><img src="<?php bloginfo('template_url'); ?>/static/images/other/w_ico1.png" alt=""><p>R&D center</p></dt>
							<dt><img src="<?php bloginfo('template_url'); ?>/static/images/other/w_ico2.png" alt=""><p>10 R&D experts</p></dt>
							<dt><img src="<?php bloginfo('template_url'); ?>/static/images/other/w_ico3.png" alt=""><p>Production capacity</p></dt>
						</dl>
					</div>
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/why1.webp" alt=""></div>
				</div>
			</li>
			<li>
				<div class="wrap">
					<div class="txt">
						<div class="i_tit i_tit_l">
							<h2>Products Advantages</h2>
						</div>
						<article>
							<?php echo xintheme('in_pa'); ?>
						</article>
						<dl class="why_ico">
							<dt><img src="<?php bloginfo('template_url'); ?>/static/images/other/w_ico3.png" alt=""><p>Suitable for various scenarios</p></dt>
							<dt><img src="<?php bloginfo('template_url'); ?>/static/images/other/w_ico4.png" alt=""><p>Flexible folding & Space saving</p></dt>
						</dl>
					</div>
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/why2.webp" alt=""></div>
				</div>
			</li>
			<li>
				<div class="wrap">
					<div class="txt">
						<div class="i_tit i_tit_l">
							<h2>service Advantages</h2>
						</div>
						<article>
							<?php echo xintheme('in_sa'); ?>
						</article>
						<a href="javascript:;" class="i_more" onclick="asfrom()"><b>Contact us</b></a>
					</div>
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/why3.webp" alt=""></div>
				</div>
			</li>
		</ul>
	</section>
	<section class="f_quote_box why_ad_box p80">
		<div class="why_ad wrap">
			<h6>
				Are you looking for 
				a lucrative business opportunity?</br>
				<span>Look no further!</span>
			</h6>
			<div class="txt">
				<p>
					We are a manufacturer of folding container houses, revolutionizing the housing industry with our innovative and sustainable solutions. With over 10 years of experience in the marketing industry, we are seeking dynamic and driven individuals to join our network as authorized dealers.
				</p>
				<a href="javascript:;" class="i_more mt30" onclick="asfrom()"><b>Become our authorized dealer</b></a>
			</div>
			
		</div>
	</section>


	<section class="i_case p60 bc_black">
		<div class="i_tit">
			<h2>our projects</h2>
		</div>
		<div class="i_case_list swiper-container mt40">
			<ul class="swiper-wrapper">
				<?php
					$cat_id = 6; // 指定分类 ID
					$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
					$query_args = array(
						'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
						'posts_per_page' => 6, // 显示多少篇文章
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
						<div class="img"><?php display_post_image(); ?> </div>
						<div class="txt">
							<h6><?php the_title(); ?></h6>
							<p><?php echo mb_strimwidth(strip_tags($post->post_content),0,100,'...'); ?></p>
							<iconify-icon icon="icon-park-outline:right-c"></iconify-icon>
						</div>
					</a>
				</li>
				<?php } wp_reset_postdata(); } ?>
			</ul>
			<div class="i_case-pagination"></div>
			<div class="i_case-prev"></div>
			<div class="i_case-next"></div>
		</div>
		<script>
			var swiper = new Swiper('.i_case_list', {
			loop: true,
			loopFillGroupWithBlank: true,
			//roundLengths: true,
			//centeredSlides: true,
			pagination: {
				el: '.i_case-pagination',
				clickable: true,
			},
			navigation: {
				prevEl: '.i_case-prev',
				nextEl: '.i_case-next',
			},
			autoplay: {
				delay: 3000,
				pauseOnMouseEnter:true,
				disableOnInteraction: false,
			},
			observer: true,
			observeParents: true,
			breakpoints: {
				0: {
					slidesPerView: 1,
					spaceBetween: '0',
					slidesPerGroup: 1,
				},
				768: {
					slidesPerView: 3,
					spaceBetween: '0',
					slidesPerGroup: 1,
				},
				1025: {
					slidesPerView: 6,
					spaceBetween: '0',
					slidesPerGroup: 1,
				},
			},
			});
		</script>

		<a href="<?php echo get_category_link(6); ?>" class="i_more i_more_c mt60"><b>More projects</b></a>
	</section>

</main>






<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>