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

<main >
	
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


	<!-- pd_box -->
	<section class="pd_box p80">
		<div class="pd_img_box wrap">
			<div class="left_img">
				<div class="in_factory_cont wow slideInUp">
					<div class="in_factory_show_box">
						<div class="in_factory_show swiper">
							<div class="swiper-wrapper">
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
						</div>
						
					</div>
					<div class="in_factory_list_box">
						<div class="in_factory_list swiper">
							<div class="swiper-wrapper">
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
						</div>
						<div class="infactory-button-prev"></div>
						<div class="infactory-button-next"></div>
					</div>
					
				</div>
				<div class="infactory-pagination"></div>
			</div>
			<div class="right_txt">
				<h1><?php the_title_attribute(); ?></h1>
				<div class="parameters">
					<?php if( get_the_content() ){ ?>
						<?php the_content(); ?>
					<?php } ?>
					
				</div>
				<div class="i_more_list mt50">
					<a href="javascript:;" onclick="asfrom()" class="i_more"><b>inquiry</b></a>
					<a href="<?php echo $article_data['download_file']; ?>" class="i_more i_more2" target="_blank">
						<b>Download brochure</b>
					</a>
					<!-- <?php if( !empty ($article_data['download_file']) ){ ?>
						<a href="<?php echo $article_data['download_file']; ?>" class="i_more i_more2" target="_blank"><b>Download brochure</b></a>
					<?php } ?> -->
					

					
				</div>
				<!-- tag -->
				<div class="tags mt40">
					<h6>Tags:</h6>
					<ul>
						<?php
							$tags = wp_get_post_tags($post->ID);
							if ( $tags ) {
						?>
						
						<?php foreach ( $tags as $tag ) { ?>
						<li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ) ?>" target="_blank"><?php echo esc_html( $tag->name ); ?></a></li>
						<?php } ?>
						
						<?php } ?>
		
					</ul>
				</div>
				
			</div>
		</div>
	</section>

	<section class="detail_box p80 bc_black">
		<div class="wrap" data-sticky-container>
			<div class="detail">
				<ul class="detail_list">
					<li><a href="#produc_ms">Product Description</a></li>
					<li><a href="#produc_fia">Frame & Interior Accessories</a></li>
					<li><a href="#produc_cs">Company Strength</a></li>
				</ul>
				<?php if( !empty ($article_data['produc_ms']) ){ ?>
					<article id="produc_ms">
					<?php echo $article_data['produc_ms']; ?>
					</article>
				<?php } ?>
				<?php if( !empty ($article_data['produc_fia']) ){ ?>
					<article id="produc_fia">
					<?php echo $article_data['produc_fia']; ?>
					</article>
				<?php } ?>
				<?php if( !empty ($article_data['produc_cs']) ){ ?>
					<article id="produc_cs">
					<?php echo $article_data['produc_cs']; ?>
					</article>
				<?php } ?>

			</div>
			<div class="pd_form" data-sticky data-margin-top="100" data-sticky-for="1023">
				<h6>Get in touch with us</h6>
				<?php echo do_shortcode( '[wpforms id="127"]' ); ?>
			</div>
		</div>
	</section>

	

	<section class="r_p p80">
		<div class="i_tit">
			<h2>Related Products</h2>
		</div>
		<div class="mt50 wrap">
			<div class="r_p_list swiper-container">


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
				<ul class="swiper-wrapper">
				
					<?php
						while ($query->have_posts()) : $query->the_post();
						$article_data = get_post_meta($post_id, 'extend_info', true);
						$produc_img = isset($article_data['produc_img']) ? explode(',', $article_data['produc_img']) : array();
						$produc_img_src = '';
						if (count($produc_img) > 0) {
							$produc_img_src = wp_get_attachment_image_src($produc_img[0], 'full');
							$produc_img_id = attachment_url_to_postid($produc_img_src[0]);
							$produc_img_alt = get_post_meta($produc_img_id, '_wp_attachment_image_alt', true);
							if (empty($produc_img_alt)) {
								$produc_img_alt = get_the_title($post_id);
							}
						}
					?>
					<li class="swiper-slide">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<div class="img">
								<img src="<?php echo $produc_img_src[0]; ?>" alt="<?php echo $produc_img_alt; ?>" />
							</div>
							<div class="txt"><b><?php the_title(); ?></b></div>
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
				
				</ul>
				<?php endif; } ?>



							
			</div>
			<div class="rp-pagination"></div>
			<div class="rp-button-next"></div>
			<div class="rp-button-prev"></div>
		</div>
	</section>


	<section class="i_case pt60 bc_black">
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
	</section>



	<section class="p_txt p70">
		<div class="wrap">
			<div class="i_tit i_tit_l">
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
<script src="<?php bloginfo('template_url'); ?>/static/js/sticky.min.js"></script>
<script>
    var sticky = new Sticky('[data-sticky]', {});
</script>

<script>
	// gallery
	var fswiper = new Swiper(".in_factory_list", {
		slidesPerView: 5,
		spaceBetween: 1,
		slidesPerGroup: 1,
		watchSlidesProgress: true,
		breakpoints: {
			0: {
			direction: "horizontal"
			},
			960: {
			direction: "vertical"
			}
		}
	});
	var fswiper2 = new Swiper(".in_factory_show", {
		spaceBetween: 0,
		slidesPerView: 1,
		autoplay: {
			delay: 30000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: ".infactory-button-next",
			prevEl: ".infactory-button-prev",
		},
		pagination: {
			el: '.infactory-pagination',
			clickable: true,
		},
		thumbs: {
			swiper: fswiper
		}
	});


	// Related Product
	var pswiper = new Swiper('.r_p_list', {
		// loop: true,
		// loopFillGroupWithBlank: true,
		navigation: {
			nextEl: '.rp-button-next',
			prevEl: '.rp-button-prev',
		},
		pagination: {
			el: '.rp-pagination',
			clickable: true,
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
			slidesPerGroup: 1
			},
			767: {
			slidesPerView: 3,
			spaceBetween: 10,
			slidesPerGroup: 1
			},
			1200: {
			slidesPerView: 4,
			spaceBetween: 30,
			slidesPerGroup: 1
			}
		}
	});


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









<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>