<?php get_header(); ?>
<?php
	$this_category = get_the_category();
	$category_id = $this_category[0]->cat_ID;
	$category_name = get_cat_name($category_id);  // 当前分类名称
	$category_link = get_category_link( $category_id ); // 当前分类链接
	$upcategory_id= tx_wp_get_category_root_id( $category_id );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>
<?php
	$article_data = get_post_meta($post->ID, 'extend_info', true);
?>
<!-- header -->
<?php get_template_part('top') ?>




<!-- banner -->
<div class="in_banner">
	<img src="<?php echo xintheme_img('in_banner_pd',''); ?>" alt="">
	<div class="in_banner_text wrap">
		<h2>Product Details</h2>
	</div>
</div>

<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container"><?php echo in_breadcrumbs(); ?></div>
</div>


<!-- main -->
<main>
	<section class="pd_content pt40">
		<div class="pd_box wrap">
			<div class="pd_img_box">
				<div class="pd">
					<div class="swiper-container">
						<div class="swiper-wrapper" id="p_gallery">
							<?php
									$post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
									$produc_img =  $post_meta['produc_img'];
								?>
								<?php
									if( !empty( $produc_img ) ) :
									$produc_img = explode( ',', $post_meta['produc_img'] );
									foreach ( $produc_img as $id ) :
									$produc_img_src = wp_get_attachment_image_src( $id, 'full' );
								?>
								<div class="swiper-slide">
									<div class="img">
										<img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />
									</div>
								</div>
								<?php endforeach;endif ?>
						</div>
						<div class="pd-button-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
						<div class="pd-button-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
						<div class="pd-pagination"></div>
					</div>
				</div>
				<script>
					var pd_swiper = new Swiper('.pd .swiper-container',{
						speed: 600,
						loop:true,
						autoplay: {
							delay: 4000,
							stopOnLastSlide: false,
							disableOnInteraction: false,
						},
						navigation: {
							nextEl: '.pd-button-next',
							prevEl: '.pd-button-prev',
						},
						pagination: {
							el: '.pd-pagination',
							clickable: true,
						},
					});
				</script>
				<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
				<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
				<script>
					var pimage = new Viewer(document.getElementById('p_gallery'), {
						button: true,
						navbar: false,
						width: 660,
						title: false
					});
				</script>

			</div>

			<!---------- pd_txt ------------>
			<div class="pd_txt">
				<h1><?php the_title_attribute(); ?></h1>

				<div class="p_brief">
					<h2>Main parameter</h2>
					<?php
						$article_data = get_post_meta($post->ID, 'extend_info', true);
						$produc_parameter = $article_data['produc_parameter'];
						if( !empty($produc_parameter) ){
						foreach($produc_parameter as $article_data){
					?>
					<p><i></i><strong><?php echo $article_data['produc_parameter_tit'] ?>:</strong><?php echo $article_data['produc_parameter_txt'] ?></p>
					<?php } } ?>
					
				</div>

				<div class="i_more_list mt40">
					<a href="javascript:;" class="i_more" onclick="asfrom()"><b>Get a quote</b></a>
					<a href="<?php echo get_permalink(11); ?>" class="i_more"><b>Contact Us</b></a>
				</div>

				<dl class="share_list m30">
					<dd>Share:</dd>
					<dt><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank">
						<i><svg t="1695038598546" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="63408" width="24" height="24"><path d="M1024 512c0-282.763636-229.236364-512-512-512C229.236364 0 0 229.236364 0 512s229.236364 512 512 512C794.763636 1024 1024 794.763636 1024 512zM46.545455 512C46.545455 254.929455 254.929455 46.545455 512 46.545455c257.070545 0 465.454545 208.384 465.454545 465.454545 0 257.070545-208.384 465.454545-465.454545 465.454545C254.929455 977.454545 46.545455 769.070545 46.545455 512z" p-id="63409" fill="#474747"></path><path d="M531.642182 807.517091 531.642182 512l97.512727 0 15.406545-97.931636-112.919273 0L531.642182 364.962909c0-25.553455 8.378182-49.943273 45.056-49.943273l73.309091 0 0-97.745455-104.075636 0c-87.505455 0-111.383273 57.623273-111.383273 137.495273l0 59.252364-60.043636 0L374.504727 512l60.043636 0 0 295.517091L531.642182 807.517091z" p-id="63410" fill="#474747"></path></svg></i>
					</a></dt>
					<dt><a href="https://www.linkedin.com/shareArticle?url=<?php echo the_permalink(); ?>&title=<?php echo the_title_attribute(); ?>" target="_blank">
						<i><svg t="1695038789802" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="68657" width="28" height="28"><path d="M385.024 706.368V406.72H285.376v299.68h99.616zM335.2 365.76c34.72 0 56.384-23.04 56.384-51.808-0.64-29.376-21.664-51.744-55.68-51.744-34.144 0-56.384 22.4-56.384 51.744 0 28.8 21.632 51.84 55.072 51.84z m409.024 340.608v-171.808c0-92.064-49.152-134.912-114.656-134.912-52.928 0-76.608 29.12-89.792 49.504v-42.496h-99.616c1.312 28.16 0 299.712 0 299.712h99.616v-167.36c0-8.96 0.64-17.92 3.264-24.256 7.168-17.92 23.584-36.448 51.072-36.448 36.064 0 50.56 27.456 50.56 67.744v160.352h99.584zM512 64c247.424 0 448 200.544 448 448 0 247.424-200.576 448-448 448-247.456 0-448-200.576-448-448C64 264.544 264.544 64 512 64z" fill="#474747" p-id="68658"></path></svg></i>
					</a></dt>
					<dt><a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>&text=<?php echo the_title_attribute(); ?>" target="_blank">
						<i><svg t="1695039110668" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6880" width="26" height="26"><path d="M851.602084 340.825988c-4.06399 306.776341-200.233895 516.895618-493.076555 530.091818-120.758566 5.538952-208.252038-33.469078-284.385167-81.844683 89.250873 14.247502 199.935765-21.434018 259.122525-72.100521-87.493472-8.520257-139.289733-53.051548-163.516764-124.712718 25.278333 4.377812 51.906099 3.216672 75.929145-1.867239-78.957524-26.439473-135.335581-75.238737-138.238431-177.481827 22.155808 10.089366 45.25308 19.566779 75.929145 21.449709-59.092614-33.610297-102.776586-156.471468-52.737726-237.704198 87.681765 96.123567 193.172908 174.547594 366.37107 185.154765-43.479988-185.876555 202.838615-286.691756 305.929022-161.759362 43.589825-8.426111 79.067361-24.964511 113.179773-42.962183-14.043518 43.181857-41.094943 73.340116-74.061906 97.473001 36.199326-4.879926 68.240515-13.729697 95.605762-27.255409-16.977751 35.273552-54.10285 66.891082-86.049893 93.518847z" p-id="6881" fill="#474747"></path></svg></i>
					</a></dt>
				</dl>




			</div>
		</div>

	</section>


	<section class="detail_box mt60">
		<div class="wrap mt60">
			<div class="tit"><span>Detailed parameter</span></div>
				<?php if( get_the_content() ){ ?>
					<?php the_content(); ?>
				<?php } ?>
		</div>
	</section>

	<section class="related p60 mb70">
		<?php
			$post_id = get_the_ID();
			$cats = wp_get_post_categories($post_id);
			if (!empty($cats)) {
				$first_cat_id = $cats[0];
				$args = array(
						'category__in' => array($first_cat_id),
						'post__not_in' => array($post_id),
						'posts_per_page' => 6,           //显示数量
						'orderby' => 'rand',             //随机排序
						'ignore_sticky_posts' => true    //排除置顶
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) :
		?>
		<div class="wrap">
			<div class="i_tit"><h2><span>Related products</span></h2></div>
			<div class="related_box p60">
				<div class="swiper-container">
					<ul class="swiper-wrapper related_list">
						<?php
							while ($query->have_posts()) : $query->the_post();
						?>
						<li class="swiper-slide">
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
				</div>
				<div class="r-pagination"></div>
				<div class="r-button-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
				<div class="r-button-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
			</div>
		</div>
		<?php endif; } ?>
	</section>


	<script>
		var rwiper = new Swiper('.related_box .swiper-container', {
			// loop: true,
			// loopFillGroupWithBlank: true,
			navigation: {
				nextEl: '.r-button-next',
				prevEl: '.r-button-prev',
			},
			pagination: {
				el: '.r-pagination',
				clickable: true,
				// type: "progressbar",
			},
			autoplay: {
				delay: 3500,
				disableOnInteraction: false,
			},
			observer: true,
			observeParents: true,
			breakpoints: {
				0: {
				slidesPerView: 2,
				spaceBetween: 20,
				slidesPerGroup: 2
				},
				960: {
				slidesPerView: 3,
				spaceBetween: 20,
				slidesPerGroup: 1
				},
				1200: {
				slidesPerView: 4,
				spaceBetween: 20,
				slidesPerGroup: 2
				}
			}
		});
	</script>
</main>










<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>