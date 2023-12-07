<?php get_header(); ?>


<!-- header -->
<?php get_template_part('top') ?>





<!-- Banner -->
<div class="banner">
	
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img <?php echo wpimg(169); ?> />
				<div class="b_txt1">
					<h5 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".1s">
						WHOLESALE UV NAIL LAMP AND DRILLS
					</h5>
					<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".2s">Professional for nail artists, fast drying</h6>
					<a href="<?php echo get_category_link(2); ?>" class="i_more mt60 ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".3s"><b>MORE <i></i></b></a>
				</div>
			</div>
			<div class="swiper-slide">
				<img <?php echo wpimg(170); ?> />
				<div class="b_txt2 wrap">
					<h5 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".1s">
						HOT SELLING CARBIDE</br> NAIL DRILL BITS
					</h5>
					<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".1s">Good scrap removal performance, Strong wear resistance and high working efficiency</h6>
					<p class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".2s">Stable quality</p>
					<p class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".2s">Sharp cutting edge</p>
					<a href="<?php echo get_category_link(2); ?>" class="i_more mt40 ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".3s"><b>MORE <i></i></b></a>
				</div>
			</div>
			<div class="swiper-slide">
				<img <?php echo wpimg(171); ?> />
				<div class="b_txt3">
					<h5 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".1s">
						MULTIFUNCTIONAL</br> NAIL BRUSH
					</h5>
					<p class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".2s">OEM/ODM</p>
					<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".3s">One-step custom from head to handle</h6>
					<a href="<?php echo get_category_link(2); ?>" class="i_more mt40 ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".4s"><b>MORE <i></i></b></a>
				</div>
			</div>
			
		</div>
		<div class="banner-button-prev"><iconify-icon icon="clarity:arrow-line" rotate="270deg"></iconify-icon></div>
		<div class="banner-button-next"><iconify-icon icon="clarity:arrow-line" rotate="90deg"></iconify-icon></div>
		<div class="banner-pagination"></div>
	</div>
</div>
<div class="clear"></div>
<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>

<main>
	<section class="i_p pt40 pb120">
		<div class="wrap">
			<div class="i_tit wow slideInUp">
				<h2><span>NEW ARRIVAL</span></h2>
			</div>
			<div class="ip_list swiper-container mt80">
				<ul class="swiper-wrapper">
					<?php
						$cat_id = 2;  // 指定id
						$sub_cat_ids = get_term_children( $cat_id, 'category' ); // 获取指定id下所有子分类
						$sticky = get_option( 'sticky_posts' );  // 筛选置顶
					
						$args = array(
							'post_type' => 'post',
							'post__in'  => $sticky,
							'category__in' => array_merge( array( $cat_id ), $sub_cat_ids ),
							'posts_per_page' => 6 // 显示个数
						);
					
						if ( ! empty( $sticky ) ) {
							$query = new WP_Query( $args );
							while ( $query->have_posts() ) {
								$query->the_post();
					?>
					<li class="swiper-slide">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="bor_t">
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
					<?php } } wp_reset_postdata(); ?>

					
				</ul>
			</div>
		</div>
		<div class="ip-pagination"></div>
		<div class="ip-prev"></div>
		<div class="ip-next"></div>
		
	</section>
	<script>
		var swiper = new Swiper('.ip_list', {
			loop: true,
			loopFillGroupWithBlank: true,
			//roundLengths: true,
			//centeredSlides: true,
			pagination: {
				el: '.ip-pagination',
				clickable: true,
			},
			navigation: {
				prevEl: '.ip-prev',
				nextEl: '.ip-next',
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
					spaceBetween: '5',
					slidesPerGroup: 1,
				},
				560: {
					slidesPerView: 3,
					spaceBetween: '20',
					slidesPerGroup: 1,
				},
				959: {
					slidesPerView: 4,
					spaceBetween: '25',
					slidesPerGroup: 1,

				},
			},
		});
	</script>


	<section class="i_category wrap m140">
		<ul class="i_ca_list">
			<li>
				<div class="i_tit i_tit_l wow slideInUp">
					<h2><span>Product</br> Categories</span></h2>
					<a href="<?php echo get_category_link(2); ?>" class="i_more m30"><b>MORE<i></i></b></a>
				</div>
 				<a class="ic_box" href="<?php echo get_category_link(4); ?>">
					<?php
						$term_id = 4;
						$category_data = get_term_meta($term_id, 'category_options', true);
						$cat_thumbnail = $category_data['cat_thumbnail'];
						$cat_thumbnail_url = wp_get_attachment_image_src($cat_thumbnail, 'full');
					?>
					<img src="<?php echo $cat_thumbnail_url[0]; ?>" />
					<div class="txt">
						<h6><?php echo get_cat_name(4); ?></h6>
						<?php
							$category_id = 4; 
							$category_description = category_description($category_id);
							echo $category_description;
							?>
						<button class="ic_more mt50">MORE<iconify-icon icon="mingcute:right-line"></iconify-icon></button>
					</div>
				</a>
			</li>
			<li>
				<a class="ic_box" href="<?php echo get_category_link(5); ?>">
					<?php
						$term_id = 5;
						$category_data = get_term_meta($term_id, 'category_options', true);
						$cat_thumbnail = $category_data['cat_thumbnail'];
						$cat_thumbnail_url = wp_get_attachment_image_src($cat_thumbnail, 'full');
					?>
					<img src="<?php echo $cat_thumbnail_url[0]; ?>" />
					<div class="txt">
						<h6><?php echo get_cat_name(5); ?></h6>
							<?php
							$category_id = 5; 
							$category_description = category_description($category_id);
							echo $category_description;
							?>
						<button class="ic_more">MORE<iconify-icon icon="mingcute:right-line"></iconify-icon></button>
					</div>
				</a>
				<a class="ic_box" href="<?php echo get_category_link(6); ?>">
					<?php
						$term_id = 6;
						$category_data = get_term_meta($term_id, 'category_options', true);
						$cat_thumbnail = $category_data['cat_thumbnail'];
						$cat_thumbnail_url = wp_get_attachment_image_src($cat_thumbnail, 'full');
					?>
					<img src="<?php echo $cat_thumbnail_url[0]; ?>" />
					<div class="txt">
						<h6><?php echo get_cat_name(6); ?></h6>
							<?php
							$category_id = 6; 
							$category_description = category_description($category_id);
							echo $category_description;
							?>
						<button class="ic_more">MORE<iconify-icon icon="mingcute:right-line"></iconify-icon></button>
					</div>
				</a>
			</li>
			<li>
				<a class="ic_box" href="<?php echo get_category_link(7); ?>">
					<?php
						$term_id = 7;
						$category_data = get_term_meta($term_id, 'category_options', true);
						$cat_thumbnail = $category_data['cat_thumbnail'];
						$cat_thumbnail_url = wp_get_attachment_image_src($cat_thumbnail, 'full');
					?>
					<img src="<?php echo $cat_thumbnail_url[0]; ?>" />
					<div class="txt">
						<h6><?php echo get_cat_name(7); ?></h6>
							<?php
							$category_id = 7; 
							$category_description = category_description($category_id);
							echo $category_description;
							?>
						<button class="ic_more">MORE<iconify-icon icon="mingcute:right-line"></iconify-icon></button>
					</div>
				</a>
				<a class="ic_box" href="<?php echo get_category_link(8); ?>">
					<?php
						$term_id = 8;
						$category_data = get_term_meta($term_id, 'category_options', true);
						$cat_thumbnail = $category_data['cat_thumbnail'];
						$cat_thumbnail_url = wp_get_attachment_image_src($cat_thumbnail, 'full');
					?>
					<img src="<?php echo $cat_thumbnail_url[0]; ?>" />
					<div class="txt">
						<h6><?php echo get_cat_name(8); ?></h6>
							<?php
							$category_id = 8; 
							$category_description = category_description($category_id);
							echo $category_description;
							?>
						<button class="ic_more">MORE<iconify-icon icon="mingcute:right-line"></iconify-icon></button>
					</div>
				</a>
			</li>
		</ul>
		
	</section>



	<!-- i_about -->
	<section class="i_about bor p120">
		<div class="wrap">
			<div class="ia_txt">
				<div class="i_tit i_tit_l">
					<h2><span>ABOUT US</span></h2>
				</div>
				<h6><?php echo xintheme('i_name'); ?></h6>
				<article>
					<?php echo xintheme('i_about'); ?>
				</article>
				
				<a href="<?php echo get_permalink(2); ?>" class="i_more mt50"><b>MORE<i></i></b></a>
			</div>
			<div class="ia_video">
				<img src="<?php echo xintheme_img('i_video_bc',''); ?>" alt="">
				<div class="i_v_btn" ipath="<?php echo xintheme('i_video_link'); ?>">
					<iconify-icon icon="ph:triangle-fill"></iconify-icon>
				</div>
				<div class="vd_box"></div>
			</div>
		</div>
	</section>
	<script>
		$(".i_v_btn").each(function () {
			var src = $(this).attr("ipath");
			if (src == null) {
				$(this).remove();
			}
		});
		$(".i_v_btn").click(function () {
			var v_link = $(this).attr('ipath');
			$('.vd_box').html("<div onclick=\"v_close()\" class=\"close_v\"></div><iframe id=\"iframe_v\" src='" + v_link + "?autoplay=1' title=\"\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>");
			$('.vd_box').show();
		});
		function v_close() {
			$('.vd_box').html("");
			$('.vd_box').hide();
		}
	</script>



	<section class="i_ad p100">
		<div class="i_tit">
			<h2><span>Our advantage</span></h2>
		</div>
		<div class="wrap_l wrap_r mt100">
			<div class="img_box">
				<?php
					$i_ad = xintheme('i_ad');
					if($i_ad){
					foreach($i_ad as $value):
					$img_id = $value['i_ad_pic'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				?>
				<div class="img bor_t">
					<img src="<?php echo $img_src[0]; ?>" />
				</div>
				<?php endforeach; } ?>
				
			</div>
			<ul class="i_ad_list">
				<?php
					$i_ad = xintheme('i_ad'); 

					if ($i_ad) { 
						$num = 1;
						foreach ($i_ad as $value) { 
							?>
							<li>
								<div class="i_ad_tit">
									<p><?php echo $num; ?></p> 
									<p><?php echo $value['i_ad_tit'] ?></p> 
									<i></i>
								</div>
								<div class="i_ad_txt">
									<?php echo $value['i_ad_txt'] ?>
								</div>
							</li>
					<?php $num++;}}?>
				
			</ul>
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
			<script>
			$(".i_ad_list").tabso({
				cntSelect:".img_box",
				tabEvent:"hover",
				tabStyle:"normal"
			});
			</script>
			<script>
			$('.i_ad_list').find('li').find('.i_ad_tit').each(function(i){
			$(this).parent('li').hover(function(){
				if($(this).hasClass('liNow')){
				$('.i_ad_list').find('li').find('.i_ad_tit').removeClass('liNow');
				$('.i_ad_list').find('li').removeClass('liNow');
				$('.i_ad_list').find('.i_ad_txt').slideUp(300);
				}else{
					$('.i_ad_list').find('li').find('.i_ad_tit').removeClass('liNow');
					$('.i_ad_list').find('li').removeClass('liNow');
					$('.i_ad_list').find('.i_ad_txt').slideUp(300);
					$(this).addClass('liNow');
					$('.i_ad_list').find('li').eq(i).addClass('liNow');
					$('.i_ad_list').find('.i_ad_txt').eq(i).slideToggle(300);
				}
				})
			})
			</script>
		</div>
	</section>


	<section class="i_cus pt60">
		<div class="wrap">
			<div class="i_tit wow slideInUp">
				<h2><span>CUSTOMER REVIEW</span></h2>
			</div>
			<div class="i_cus_list swiper-container mt80">
				<ul class="swiper-wrapper">
					<?php
						$i_cus = xintheme('i_cus');
						if($i_cus){
						foreach($i_cus as $value):
					?>
					<li class="swiper-slide">
						<dl>
							<dt><img src="<?php bloginfo('template_url'); ?>/static/images/ico_star.png" alt=""></dt>
							<dt><img src="<?php bloginfo('template_url'); ?>/static/images/ico_star.png" alt=""></dt>
							<dt><img src="<?php bloginfo('template_url'); ?>/static/images/ico_star.png" alt=""></dt>
							<dt><img src="<?php bloginfo('template_url'); ?>/static/images/ico_star.png" alt=""></dt>
							<dt><img src="<?php bloginfo('template_url'); ?>/static/images/ico_star.png" alt=""></dt>
						</dl>
						<div class="txt">
							<?php echo $value['i_cus_txt'] ?>
						</div>
					</li>
					<?php endforeach; } ?>
					
				</ul>
			</div>
		</div>
		<div class="i_cus-pagination"></div>
		<div class="i_cus-prev"></div>
		<div class="i_cus-next"></div>
		
	</section>





</main>
<div class="foot_space"></div>
<script>
	
	var swiper = new Swiper('.i_cus_list', {
		loop: true,
		loopFillGroupWithBlank: true,
		//roundLengths: true,
		//centeredSlides: true,
		pagination: {
			el: '.i_cus-pagination',
			clickable: true,
		},
		navigation: {
			prevEl: '.i_cus-prev',
			nextEl: '.i_cus-next',
		},
		// autoplay: {
		// 	delay: 3000,
		// 	pauseOnMouseEnter:true,
		// 	disableOnInteraction: false,
		// },
		observer: true,
		observeParents: true,
		breakpoints: {
			0:{
				slidesPerView: 1,
				spaceBetween: '0',
				slidesPerGroup: 1,
			},
			560:{
				slidesPerView: 2,
				spaceBetween: '15',
				slidesPerGroup: 1,
			},
			1024: {
				slidesPerView: 3,
				spaceBetween: '30',
				slidesPerGroup: 1,

			},
		},
	});
</script>





<!-- <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
<script>
	/*查看大图*/
	var image = new Viewer(document.getElementById('ic_list'), {
		button: true,
		navbar: false,
		width: 660,
		title: false
	});
</script> -->

	
















<!-- Footer -->
<?php get_footer();?>
</body>
</html>
