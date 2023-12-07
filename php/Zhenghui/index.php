<?php get_header(); ?>


<!-- header -->
<?php get_template_part('top') ?>






<!-- Banner -->
<div class="banner">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" />
				<div class="b_txt1">
					<h5 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".1s">
						Details determine success or failure</br>
						quality determines the future
					</h5>
					<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".2s">
						Cooperate with well-known first-tier suppliers at home and abroad, and the products are positioned as new car accessories for mid-to-high-end models
					</h6>
					<a href="<?php echo get_category_link(2); ?>" 
					class="i_more mt30 ani resize"
					 swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".3s"
					><b>MORE</b></a>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" />
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" />
			</div>
		</div>
		<div class="banner-button-prev"><iconify-icon icon="clarity:arrow-line" rotate="270deg"></iconify-icon></div>
		<div class="banner-button-next"><iconify-icon icon="clarity:arrow-line" rotate="90deg"></iconify-icon></div>
		<div class="banner-pagination"></div>
	</div>
</div>

<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>
<main>
	<section class="i_p wrap p80">
		<div class="i_p_left wow slideInLeft">
			 <div class="i_tit i_tit_l">
				<h2><span>products</span></h2>
			 </div>
			 <div class="i_p_h3">
				<h3>
				 Chuzhou Zhenghui Technology Co. , Ltd. is mainly engaged in the production and sales of push-pull cable bushings, push-pull cable cores and sunroof flexible shafts, it is a second-level supplier in auto industry, cooperating with famous first-level supplier at home and abroad.
				</h3>
			 </div>
			<a href="<?php echo get_category_link(2); ?>" class="i_more"><b>MORE</b></a>
		</div>
		<div class="i_p_right">
			 <div class="Hgrid_partner_box">
				 <div class="Hgrid_partner">
					 <div class="Hgrid_partner_list swiper-container">
						 <ul class="swiper-wrapper">
							<?php
								$cat_id = 2;  // 指定id
								$sub_cat_ids = get_term_children( $cat_id, 'category' ); // 获取指定id下所有子分类
								$sticky = get_option( 'sticky_posts' );  // 筛选置顶
							
								$args = array(
									'post_type' => 'post',
									'post__in'  => $sticky,
									'category__in' => array_merge( array( $cat_id ), $sub_cat_ids ),
									'posts_per_page' => 8 // 显示个数
								);
							
								if ( ! empty( $sticky ) ) {
									$query = new WP_Query( $args );
									while ( $query->have_posts() ) {
										$query->the_post();
							?>
							<li class="swiper-slide">
								 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<h4><?php the_title(); ?></h4>
									<i></i>
									<div class="img">
										<?php
											$category_data = get_post_meta($post->ID, 'extend_info', true);
											$produc_img = explode( ',', $category_data['produc_img'] );
											$thumbnail_id = $produc_img[0];
											$thumbnail_alt = get_the_title();
										?>
										<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
									</div>
								</a>
							</li>
							<?php } } wp_reset_postdata(); ?>
						 </ul>				
					 </div>
					 <!-- <div class="pt-pagination Hgrid-pagination"></div>
					 <div class="pt-button-next Hgrid-button-next"></div>
					 <div class="pt-button-prev Hgrid-button-prev"></div> -->
				 </div>
			 </div>
		</div>
		<script>
			// 首页 首页产品滚动
			var pswiper = new Swiper('.Hgrid_partner_list', {
				loop: true,
				speed:1000,
				loopFillGroupWithBlank: true,
				navigation: {
					nextEl: '.Hgrid-button-next',
					prevEl: '.Hgrid-button-prev',
				},
				pagination: {
					el: '.Hgrid-pagination',
					clickable: true,
				},
				autoplay: {
					delay: 4500,
					disableOnInteraction: false,
				},
				observer: true,
				observeParents: true,
				breakpoints: {
					0: {
						slidesPerView: 1,
						spaceBetween: 10,
						slidesPerGroup: 1
					},
					560: {
						slidesPerView: 2,
						spaceBetween: 20,
						slidesPerGroup: 1
					},
					1025: {
						slidesPerView: 3,
						spaceBetween: 30,
						slidesPerGroup: 1
					}
				}
			});
		</script>
	</section>

	<section class="i_a p70">
		<div class="wrap">
			<div class="i_a_t wow slideInLeft">
				<div class="i_tit i_tit_l">
					<h2>ABOUT US</h2>
				</div>
				<article>
					<?php echo xintheme('i_about'); ?>
				</article>
				<ul class="i_ab_num mt80">
					<li>
						<h5><span class="roll_num">2021</span></h5>
						<p>Established</p>
					</li>
					<li>
						<h5><span class="roll_num">50</span>+</h5>
						<p>Exporting country</p>
					</li>
					<li>
						<h5><span class="roll_num">13000</span>+</h5>
						<p>Square</p>
					</li>
				</ul>
				<a href="<?php echo get_permalink(2); ?>" class="i_more m50"><b>MORE</b></a>
			</div>
			<div class="img wow slideInRight">
				<img src="<?php bloginfo('template_url'); ?>/static/images/other/i_a.webp" alt="">
			</div>
		</div>
		<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
		<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
		<script>$('.roll_num').countUp();</script>
	</section>

	<section class="if_box m80 wow slideInUp">
		<ul class="if_menu wrap">
			<?php
				$i_factory = xintheme('i_factory');
				if($i_factory){
				foreach($i_factory as $value):
			?>
			<li>
				<span><?php echo $value['if_tit'] ?></span>
			</li>
			<?php endforeach; } ?>
			
		</ul>
		<div class="if_content mt50">
			<div class="box">
				<?php
						$i_factory = xintheme('i_factory');
						if($i_factory){
						foreach($i_factory as $value):
							$if_pic = explode(',', $value['if_pic']);
				?>
				<section class="i_f wrap">
					<div class="swiper-container">
						<ul class="swiper-wrapper">
							<?php
								foreach ( $if_pic as $id ) :
								$img_src = wp_get_attachment_image_src( $id, 'full' );
							?>
							<li class="swiper-slide">
								<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
							</li>
							<?php endforeach; ?>
							
						</ul>
					</div>
					<div class="if-button-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
					<div class="if-button-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
				</section>
				<?php endforeach; } ?>
				
			</div>
		</div>
		<script>
			var if_swiper = new Swiper('.i_f .swiper-container',{
				loop: true,
				loopFillGroupWithBlank: true,
				roundLengths: true,
				// centeredSlides: true,
				pagination: {
					el: '.i_f-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.if-button-prev',
					nextEl: '.if-button-next',
				},
				autoplay: {
					delay: 4000,
					pauseOnMouseEnter:true,
					disableOnInteraction: false,
				},
				observer: true,
				observeParents: true,
				breakpoints: {
					0: {
						slidesPerView: 2,
						spaceBetween: 30,
						slidesPerGroup: 1,
					},
					1025: {
						slidesPerView: 4,
						spaceBetween: 45,
						slidesPerGroup: 1,
					},
				},
			});
		</script>
		<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
		<script>
			$(".if_menu").tabso({
				cntSelect:".if_content .box",
				tabEvent:"click",
				tabStyle:"normal"
			});
		</script>
		
	</section>

	<section class="about_adv p70">
		<div class="i_tit">
			<h2><span>enterprise advantage</span></h2>
		</div>
		<ul class="about_advantage_ul wrap">
			<?php
				$i_ad = xintheme('i_ad');
				$num=1;
				if($i_ad){
					foreach($i_ad as $value):
					$img_id = $value['i_ad_ico'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				
			?>
			<li class="wow slideInUp" data-wow-delay=".<?php echo $num; ?>s">
				<div class="about_advantage_img">
					<img src="<?php echo $img_src[0]; ?>" />
				</div>
				<h2><?php echo $value['i_ad_tit'] ?></h2>
				<p><?php echo $value['i_ad_txt'] ?></p>
			</li>
			<?php $num++; endforeach; } ?>


			
		</ul>
		<script>
			$('.about_advantage_ul li:first').addClass('about_advantage_active');
			$('.about_advantage_ul li').hover(function(){
				$(this).siblings().removeClass('about_advantage_active')
				$(this).addClass('about_advantage_active')
			},function(){
			})
		</script>
	</section>

	<!-- honor -->
	<section class="i_honor mt100 wrap">
		<div class="i_tit wow slideInUp">
			<h2>Certificate</h2>
		</div>
		<div class="i_honor_list swiper-container mt60 wow slideInUp">
			<ul class="swiper-wrapper">
				<?php
					if( xintheme('i_certy') ){
					$i_certy = explode(',', xintheme('i_certy'));
					foreach ( $i_certy as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				<li class="swiper-slide">
					<img src="<?php echo $img_src[0]; ?>" />
					<!-- <p><?php echo $img_caption; ?></p> -->
				</li>
				<?php endforeach; } ?>

				
			</ul>
			<div class="i_honor-pagination"></div>
		</div>
		<div class="i_honor-prev"></div>
		<div class="i_honor-next"></div>
		<script>
			var swiper = new Swiper('.i_honor_list', {
					loop: true,
					loopFillGroupWithBlank: true,
					//roundLengths: true,
					//centeredSlides: true,
					pagination: {
						el: '.i_honor-pagination',
						clickable: true,
					},
					navigation: {
						prevEl: '.i_honor-prev',
						nextEl: '.i_honor-next',
					},
					autoplay: {
						delay: 4000,
						pauseOnMouseEnter:true,
						disableOnInteraction: false,
					},
					observer: true,
					observeParents: true,
					breakpoints: {
						0:{
							slidesPerView: 2,
							spaceBetween: '10',
							slidesPerGroup: 1,
						},
						1024: {
							slidesPerView: 3,
							spaceBetween: '20',
							slidesPerGroup: 1,
						},
					},
				});
		</script>
	</section>

	<section class="i_news mt80 pb80">
		<div class="wrap wow slideInUp">
			<div class="i_tit">
				<h2><span>News</span></h2>
			</div>
			<div class="i_news_list swiper-container mt80">
				<ul class="swiper-wrapper">
					<?php
						$cat_id = 3; // 指定分类 ID
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
							<div class="img"><?php display_post_image(); ?></div>
							<div class="txt">
								<h6><?php the_title(); ?></h6>
								<p><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?></p>
								<div class="time">
									<b><?php echo the_time('Y-m-d') ?></b>
									<b>View details<iconify-icon icon="mingcute:right-line"></iconify-icon></b>
								</div>
							</div>
						</a>
					</li>
					<?php } wp_reset_postdata(); } ?>


					
				</ul>
				<div class="news-pagination"></div>
			</div>
			<div class="news-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
			<div class="news-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
		</div>
		<script>
			var swiper = new Swiper('.i_news_list', {
			loop: true,
			//loopFillGroupWithBlank: true,
			roundLengths: true,
			//centeredSlides: true,
			pagination: {
				el: '.news-pagination',
				clickable: true,
			},
			navigation: {
				prevEl: '.news-prev',
				nextEl: '.news-next',
			},
			autoplay: {
				delay: 3000,
				pauseOnMouseEnter: true,
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
				560: {
					slidesPerView: 2,
					spaceBetween: '20',
					slidesPerGroup: 1,
				},
				1025: {
					slidesPerView: 3,
					spaceBetween: '35',
					slidesPerGroup: 1,
				},
			},
		});
		</script>
	</section>
</main>









<!-- Footer -->
<?php get_footer();?>
</body>
</html>
