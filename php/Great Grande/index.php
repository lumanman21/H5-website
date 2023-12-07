<?php get_header(); ?>


<!-- header -->
<?php get_template_part('top') ?>





<!-- Banner -->
<div class="banner">
	<div class="b_fixed wrap">
		<a class="close_b" href="javascript:void(0)" onclick="asclosescxz()"></a>
		<img src="<?php bloginfo('template_url'); ?>/static/images/b_fix.png" alt="">
		<div class="txt">
			<h6>Become our <span>authorized dealer</span>！</h6>
			<div class="i_more_list">
				<a href="<?php echo get_permalink(22); ?>" class="i_more i_more2"><b>More Content</b></a>
				<a href="javascript:;" class="i_more" onclick="asfrom()"><b>Contact Us</b></a>
			</div>
		</div>
	</div>
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img <?php echo wpimg(183); ?> />
				<div class="b_txt1 wrap">
					<h5
						class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".1s"
					>high-quality</br> materials efficient manufacturing</h5>
					<h6
						class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".2s"
					>suitable for temporary shelters, disaster relief, construction sites, and residential communities.</h6>
					<a href="<?php echo get_permalink(22); ?>" class="i_more mt40 ani resize"
						swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".2s"
					><b>More</b></a>
				</div>
			</div>
			<div class="swiper-slide">
				<img <?php echo wpimg(183); ?> />
			</div>
			<div class="swiper-slide">
				<img <?php echo wpimg(183); ?> />
			</div>
			
		</div>
		<div class="banner-button-prev"><iconify-icon icon="clarity:arrow-line" rotate="270deg"></iconify-icon></div>
		<div class="banner-button-next"><iconify-icon icon="clarity:arrow-line" rotate="90deg"></iconify-icon></div>
		<div class="banner-pagination"></div>
	</div>
</div>
<div class="clear"></div>
<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>
<script>
	$('.close_b').click(function(){
		$('.b_fixed').hide( )
	})
	$(window).on('load', function() {
		$('.b_fixed').addClass('slide_in');

	});
</script>






<main>
	<section class="ip_box pt80 pb140 wrap_l">
		<img src="<?php bloginfo('template_url'); ?>/static/images/logo_font.png" alt="">
		<img src="<?php bloginfo('template_url'); ?>/static/images/logo_font.png" alt="">
		<div class="i_tit i_tit_l">
			<h2>Main Products</h2>
		</div>
		<div class="content">
			<ul class="ip_menu">
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
						$category_data = get_term_meta($cat->term_id, 'category_options', true);
						$thumbnail_id = $category_data['cat_thumbnail'];
						$thumbnail_alt = $cat->name;
				?>
				<li><span><?php echo esc_html( $cat->name ); ?></span></li>
				<?php } ?>

				
				<!-- <div class="i_p-pagination"></div> -->
			</ul>
			<div class="ip_content">
				<div class="box">


					<?php
						$args = array(
							'parent'     => 4,  //指定分类id
							'hide_empty' => 0,
							'orderby'    => 'id',
							'order'      => 'asc'
						);
						$categories = get_categories($args);
						foreach ($categories as $category) :
							$category_data = get_term_meta($category->term_id, 'category_options', true);
							$thumbnail_id = $category_data['cat_thumbnail'];
							$thumbnail_alt = $category->name;
							$children = get_term_children($category->term_id, 'category');
							$cat_ids = array_merge(array($category->term_id), $children);
							$args_posts = array(
								'category__in'        => $cat_ids,
								'orderby'             => 'date',
								'order'               => 'asc',
								'posts_per_page'      => 8,  //显示6篇文章
								'post__in'            => get_option('sticky_posts'),  //只调用置顶文章
							);
							$posts_query = new WP_Query($args_posts);
					?>
					<section class="i_p">
						<div class="swiper-container">
							<ul class="swiper-wrapper">

								<?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
								<li class="swiper-slide">
									<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(the_title_attribute('echo=0')); ?>">
										<div class="img">
											<?php
												$category_data = get_post_meta($post->ID, 'extend_info', true);
												$produc_img = explode( ',', $category_data['produc_img'] );
												$thumbnail_id = $produc_img[0];
												$thumbnail_alt = get_the_title();
											?>
											<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
										</div>
										<h6><b><?php the_title(); ?></b></h6>
									</a>
								</li>
								<?php endwhile; ?>
								
							</ul>
						</div>
						<div class="i_p_but">
							<div class="i_p-button-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
							<div class="i_p-button-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
						</div>
					</section>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
		
	</section>


	<section class="i_why p100">
		<div class="i_tit">
			<h2>Why customers choose us</h2>
			<h6>Unlock Boundless Living: Expand Your Horizons with Grande Modular Housing</h6>
		</div>

		<div class="iw_box" id="iwBox">
			<div class="iw p30">
			  <ul>
				<?php
					$i_why = xintheme('i_why');
					if($i_why){
					foreach($i_why as $value):
					$img_id = $value['i_why_ico'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				?>
	
				<li>
				  <div class="ico"><img src="<?php echo $img_src[0]; ?>" /></div>
				  <h6><?php echo $value['i_why_tit'] ?></h6>
				  <p><?php echo $value['i_why_txt'] ?></p>
				</li>
				<?php endforeach; } ?>

			  </ul>
			</div>
		</div>
		<div class="scrollbar">
		  <div class="thumb" style="left: 120px;"></div>
		</div>
		<script>
			var scrollbar = document.querySelector('.scrollbar');
			var thumb = document.querySelector('.thumb');
			var isDragging = false;
			var startX;
			var startLeft;
			
			var iwBox = document.getElementById('iwBox');
			
			thumb.addEventListener('mousedown', function(e) {
				isDragging = true;
				startX = e.clientX;
				startLeft = thumb.offsetLeft;
			});
			
			document.addEventListener('mousemove', function(e) {
				if (!isDragging) return;
			
				var deltaX = e.clientX - startX;
				var maxThumbLeft = scrollbar.offsetWidth - thumb.offsetWidth;
				var scrollableDistance = scrollbar.offsetWidth - thumb.offsetWidth;
			
				var thumbLeft = Math.min(maxThumbLeft, Math.max(0, startLeft + deltaX));
				thumb.style.left = thumbLeft + 'px';
			
				var scrollPercentage = thumbLeft / maxThumbLeft;
				scrollbar.scrollLeft = scrollPercentage * scrollableDistance;
			
				var scrollDistance = (iwBox.scrollWidth - iwBox.clientWidth) * scrollPercentage;
				iwBox.scrollLeft = scrollDistance;
			});
			
			document.addEventListener('mouseup', function() {
				isDragging = false;
			});
		</script>
		  

	</section>

	

	
	<section class="i_certy pt80">
		<img src="<?php bloginfo('template_url'); ?>/static/images/bc_i_certy.webp" alt="">
		<div class="i_tit">
			<h2>Certificates</h2>
		</div>
		<div class="i_c_box m30">
		  <div class="ic">
			<div class="swiper-container">
			  <ul class="swiper-wrapper" id="ic_list">
				<?php
					if( xintheme('i_certy') ){
					$i_certy = explode(',', xintheme('i_certy'));
					foreach ( $i_certy as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				
				<li class="swiper-slide">
					<img src="<?php echo $img_src[0]; ?>" />
				</li>
				<?php endforeach; } ?>
			  </ul>
			</div>
			<!-- <div class="ic-pagination"></div> -->
			<div class="ic-button-prev"></div>
			<div class="ic-button-next"></div>
		  </div>
		</div>
		<script>
			var icSwiper = new Swiper('.ic .swiper-container', {
				watchSlidesProgress: true,
				slidesPerView: 'auto',
				centeredSlides: true,
				loop: true,
				// autoplay: true, // 取消注释以启用自动播放功能
				delay: 4000, // 自动播放的延迟时间，根据需要进行调整
				disableOnInteraction: false, // 用户交互时是否禁用自动播放，根据需要进行调整
				loopedSlides: 7,
				navigation: {
					nextEl: '.ic-button-next',
					prevEl: '.ic-button-prev',
				},
				pagination: {
					el: '.ic-pagination',
					clickable: true,
				},
				roundLengths: true,
				on: {
					progress: function(progress) {
					for (i = 0; i < this.slides.length; i++) {
						var slide = this.slides.eq(i);
						var slideProgress = this.slides[i].progress;
						modify = 1;
						if (Math.abs(slideProgress) > 1) {
							modify = (Math.abs(slideProgress) - 1) * 0.2 + 1;
						}

						// 重叠
						if (screen.width < 768) {
							translate = slideProgress * modify * 30 + '%';
						} else {
							translate = slideProgress * modify * 15 + '%';
						}
						//纵深
						scale = 1 - Math.abs(slideProgress) / 10;
						zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
						slide.transform('translateX(' + translate + ') scale(' + scale + ')');
						slide.css('zIndex', zIndex);
						slide.css('opacity', 1);
						if (Math.abs(slideProgress) > 6) {
						slide.css('opacity', 0);
						}
					}
					},
					setTransition: function(transition) {
					for (var i = 0; i < this.slides.length; i++) {
						var slide = this.slides.eq(i)
						slide.transition(transition);
					}
					}
				}
			});

			/*查看大图*/
			var image = new Viewer(document.getElementById('ic_list'), {
				button: true,
				navbar: false,
				width: 660,
				title: false
			});
		</script>


		<!-- partner -->
		<div class="i_logo mt140">
			<div class="logo_list swiper-container wrap">
				<ul class="swiper-wrapper">
					<?php
						if( xintheme('i_partner') ){
						$i_partner = explode(',', xintheme('i_partner'));
						foreach ( $i_partner as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
					<li class="swiper-slide">
						<img src="<?php echo $img_src[0]; ?>" />
					</li>
					<?php endforeach; } ?>
				</ul>
				<div class="logo-pagination"></div>
			</div>
		</div>
		<script>
			var swiper = new Swiper('.logo_list', {
				spaceBetween: '1.5%',
				loop: true,
				//loopFillGroupWithBlank: true,
				roundLengths: true,
				//centeredSlides: true,
				autoplay: {
					delay: 0,
					disableOnInteraction: false,
				},
				pagination: {
					el: '.logo-pagination',
					clickable: true,
				},
				speed: 3000,
				observer: true,
				observeParents: true,
				breakpoints: {
					0: {
						slidesPerView: 3,
						slidesPerGroup: 1,
					},
					959: {
						slidesPerView: 4,
						slidesPerGroup: 1,
					},
					1024: {
						slidesPerView: 6,
						slidesPerGroup: 1,
					},
					1400: {
						slidesPerView: 10,
						slidesPerGroup: 1,
					},
				},
			});
		</script>
	</section>



	<section class="i_case pt60">
		<div class="i_tit i_tit_hei">
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
	</section>
	



	<section class="i_about">
		
		<div class="wrap">
			<div class="i_ab_t">
				<div class="i_tit i_tit_c i_tit_l mb40">
					<h2>ABOUT <span>GREAT GRANDE</span></h2>
				</div>
				<article>
					<?php echo xintheme('i_about'); ?>
				</article>
				<div class="i_more_list m30">
					<a href="<?php echo xintheme('i_brochure'); ?>" class="i_more"><b>Download brochure</b></a>
					<a href="<?php echo get_permalink(2); ?>" class="i_more i_more2"><b>More</b></a>
				</div>
			</div>
			<ul class="i_ab_num">
				<li>
					<h6><span class="roll_num">100</span>%</h6>
					<p>Export p.c</p>
				</li>
				<li>
					<h6><span class="roll_num">2014</span></h6>
					<p>Year Established</p>
				</li>
				<li>
					<h6><span class="roll_num">10000</span>m&sup2;</h6>
					<p>Square meters of space</p>
				</li>
				<li>
					<h6><span class="roll_num">350000</span>m&sup2;</h6>
					<p>Production capacity over</p>
				</li>
			</ul>
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
			<script>$('.roll_num').countUp();</script>
		</div>

		<ul class="ia_list mt60">
			<li>
				<a href="<?php echo get_permalink(20); ?>">
					<div class="ico">
						<iconify-icon icon="tabler:360"></iconify-icon>
						<h6>360° Factory VR</h6>
					</div>
				</a>
			</li>
			<li>
				<a href="javascript:;">
					<div class="ico i_a_btn" ipath="<?php echo xintheme('i_video_link'); ?>">
						<iconify-icon icon="basil:video-outline"></iconify-icon>
						<h6>Vedio</h6>
					</div>
				</a>
			</li>
		</ul>
		<div class="vd_box"></div>
		<script>
		$(".i_a_btn").each(function(){
			var src = $(this).attr("ipath");
			if(src == null){
			$(this).remove();
			}
		});
		$(".i_a_btn").click(function () {
			var v_link = $(this).attr('ipath');
			$('.vd_box').html("<div onclick=\"v_close()\" class=\"close_v\"></div><iframe id=\"iframe_v\" src='"+v_link+"?autoplay=1' title=\"\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>");
			$('.vd_box').show();
		});
		function v_close(){
			$('.vd_box').html("");
			$('.vd_box').hide();
		}
		</script>
		
	</section>

	<section class="i_news p100">
		<div class="wrap">
			<div class="i_tit i_tit_c mb50">
				<h2>Company news</h2>
			</div>
			<div class="i_news_cont">
				<div class="hn_swiper">
					<div class="hn">
						<div class="swiper-container">
							<ul class="swiper-wrapper">
								<?php
									if( xintheme('i_news') ){
									$i_news = explode(',', xintheme('i_news'));
									foreach ( $i_news as $id ) :
									$img_src = wp_get_attachment_image_src( $id, 'full' );
									$img_caption = wp_get_attachment_caption($id);
								?>
								<li class="swiper-slide">
									<img src="<?php echo $img_src[0]; ?>" />
								</li>
								<?php endforeach; } ?>

								
							</ul>
							<div class="hn-button-prev"></div>
							<div class="hn-button-next"></div>
							
						</div>
					</div>
					<div class="hn-pagination"></div>
				</div>
				<ul class="i_n_list">
					<?php
						$cat_id = 5; // 指定分类 ID
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
							<div class="n_date"><b><?php echo the_time('d') ?></b><i><?php echo the_time('Y-m') ?></i></div>
							<div class="txt">
								<h6><?php the_title(); ?></h6>
							</div>
							<iconify-icon icon="ep:right"></iconify-icon>
						</a>
					</li>
					<?php } wp_reset_postdata(); } ?>
					
				</ul>
			</div>
		</div>
	</section>

	<!-- quote -->
	<section class="f_quote_box">
		<div class="f_quote wrap p60">
			<div class="i_tit mb40">
				<h2>Take the first step to a prosperous future!</h2>
				<h6>Welcome to leave us a message, we will reply to you as soon as we receive it.</h6>
			</div>
			<?php echo do_shortcode( '[wpforms id="36"]' ); ?>
		</div>
	</section>



  



</main>

<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
<script>
	var ip_swiper = new Swiper('.i_p .swiper-container',{
		//loop: true,
		//loopFillGroupWithBlank: true,
		roundLengths: true,
		// centeredSlides: true,
		pagination: {
			el: '.i_p-pagination',
			clickable: true,
		},
		navigation: {
			prevEl: '.i_p-button-prev',
			nextEl: '.i_p-button-next',
		},
		// autoplay: {
		// 	delay: 3000,
		// 	pauseOnMouseEnter:true,
		// 	disableOnInteraction: false,
		// },
		observer: true,
		observeParents: true,
		breakpoints: {
			0: {
				slidesPerView: 1.8,
				spaceBetween: 30,
				slidesPerGroup: 1,
			},
			1025: {
				slidesPerView: 2.8,
				spaceBetween: 45,
				slidesPerGroup: 1,
			},
		},
	});
	

	
	
	var hn_swiper = new Swiper('.hn .swiper-container',{
		speed: 600,
		loop:true,
		autoplay: {
			delay: 4000,
			stopOnLastSlide: false,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: '.hn-button-next',
			prevEl: '.hn-button-prev',
		},
		pagination: {
			el: '.hn-pagination',
			clickable: true,
		},
		
	});



	
</script>
<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
<script>
	$(".ip_menu").tabso({
		cntSelect:".ip_content .box",
		tabEvent:"click",
		tabStyle:"normal"
	});

</script>













<!-- Footer -->
<?php get_footer();?>
</body>
</html>
