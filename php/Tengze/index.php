<?php get_header(); ?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="banner">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/banner_1.webp" />
				<div class="b_t b_t1 wrap">
					<iconify-icon icon="icon-park-solid:setting"></iconify-icon>
					<h2 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".1s">
						Specializing in construction machinery
					</h2>
					<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".2s">
						<span>Tengze</span> Construction Machinery
					</h6>
					<p>Believe in yourself, believe in partners, win-win cooperation!</p>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" alt="">
						<img src="<?php bloginfo('template_url'); ?>/static/images/b2.webp" alt="">
					</div>
					<a href="<?php echo get_category_link(4); ?>" rel="nofollow" class="i_more ani resize" swiper-animate-effect="fadeInUp"
						swiper-animate-duration="1s" swiper-animate-delay=".3s"><b>View More</b></a>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/banner_2.webp" />
				<div class="b_t b_t2 wrap">
					<iconify-icon icon="icon-park-solid:setting"></iconify-icon>
					<h2 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".1s">
						With <p>3000 sets</p>Used Excavators In-Stock
					</h2>
					<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".2s">
						Full range of brand excavators</br>
						1-100 tons various specifications
					</h6>
					<a href="<?php echo get_category_link(4); ?>" rel="nofollow" class="i_more ani resize" swiper-animate-effect="fadeInUp"
						swiper-animate-duration="1s" swiper-animate-delay=".3s"><b>View More</b></a>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/banner_3.webp" />
				<div class="b_t b_t3 wrap">
					<iconify-icon icon="icon-park-solid:setting"></iconify-icon>
					<h2 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".1s">
						Construction </br>Equipment
					</h2>
					<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".2s">
						one-stop service
					</h6>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/b3.1.png" alt="">
						<img src="<?php bloginfo('template_url'); ?>/static/images/b3.2.png" alt="">
						<img src="<?php bloginfo('template_url'); ?>/static/images/b3.3.png" alt="">
					</div>
					<p>Roller / Loader / Forklift / Dozer / Cranes...</p>
					<div class="b3_txt ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
						swiper-animate-delay=".3s">
						<a href="<?php echo get_category_link(4); ?>" rel="nofollow" class="i_more"><b>View More</b></a>
						<h5>We serve clients from <span>all over the world!</span></h5>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-button-prev"><iconify-icon icon="ant-design:left-outlined"></iconify-icon></div>
		<div class="banner-button-next"><iconify-icon icon="ant-design:right-outlined"></iconify-icon></i></div>
		<div class="banner-pagination"></div>
	</div>
</div>
<div class="clear"></div>
<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>
<main>
	<section class="i_brand pt70">
		<h6 class="s_tit">Main brands</h6>
		<ul class="brand_list wrap mt30 wow slideInUp">
			<?php
				if( xintheme('i_brand') ){
				$i_brand = explode(',', xintheme('i_brand'));
				foreach ( $i_brand as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li>
				<img src="<?php echo $img_src[0]; ?>" />
			</li>
			<?php endforeach; } ?>
		</ul>
	</section>

	<section class="i_p p100">
		<div class="wrap">
			<div class="ip_tit">
				<div class="i_tit i_tit_w">
					<h2>Product Category<iconify-icon icon="icon-park-solid:setting"></iconify-icon></h2>
					<h6>Our product contents: used CAT, Komatsu, Hitachi, Kobelco, Sumitomo, Volvo, Doosan, Hyundai,
						Sany, XCMG, Zoomlion, Sanward, etc.</h6>
				</div>
				<ul class="ip_menu">
					<li>
						<img src="<?php bloginfo('template_url'); ?>/static/images/ip3.png" alt="">
						<span>Excavator</span>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/static/images/ip1.png" alt="">
						<span>Roller</span>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/static/images/ip2.png" alt="">
						<span>Loader</span>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/static/images/ip4.png" alt="">
						<span>Bulldozer</span>
					</li>
				</ul>
			</div>
			<div class="ip_box mt60">
				<div class="box">
					<ul class="ip_list">
						<?php
							$args = array(
								'child_of'     => 4,
								'parent'       => 4,
								'hide_empty'   => 0,
								'orderby'      => 'id',
								'order'        => 'ASC',
								'number'       =>8
							);
							$categories = get_categories( $args );
							foreach ( $categories as $cat ) {
								$category_data = get_term_meta($cat->term_id, 'category_options', true);
								$thumbnail_id = $category_data['cat_thumbnail2'];
								$thumbnail_alt = $cat->name;
						?>
						
						<li><a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
								<div class="img">
									<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
								</div>
								<div class="ip_txt">
									<p><?php echo esc_html( $cat->name ); ?></p>
									<div class="ico"><iconify-icon icon="uiw:swap-right"></iconify-icon></div>
								</div>
						</a></li>
						<?php } ?>
						
					</ul>
				</div>
				

				
				<?php
				$args = array(
					'include'     => array(18, 19, 21),
					'hide_empty'  => 0,
					'orderby'     => 'id',
					'order'       => 'asc'
				);
				$categories = get_categories($args);
				foreach ($categories as $category) :
					$children = get_term_children($category->term_id, 'category');
					$cat_ids = array_merge(array($category->term_id), $children);
					$args_posts = array(
						'category__in'         => $cat_ids,
						'orderby'              => 'date',
						'order'                => 'asc',
						'posts_per_page'       => 8,
						'ignore_sticky_posts'  => true,
					);
					$posts_query = new WP_Query($args_posts);
				?>
				<div class="box">
					<ul class="ip_list">
						<?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
						<li>
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
								<div class="ip_txt">
									<p><?php the_title(); ?></p>
									<div class="ico"><iconify-icon icon="uiw:swap-right"></iconify-icon></div>
								</div>
							</a>
						</li>
						<?php endwhile; wp_reset_postdata(); ?>
					</ul>
				</div>
				<?php endforeach; ?>

				
				
			</div>
			<a href="<?php echo get_category_link(4); ?>" rel="nofollow" class="i_more i_more2"><b>More Products</b></a>
		</div>
	</section>
	<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
	<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
	<script>
		$(".ip_menu").tabso({
			cntSelect: ".ip_box",
			tabEvent: "click",
			tabStyle: "normal"
		});
	</script>
	<section class="i_a">
		<div class="wrap">
			<div class="i_tit i_tit_c">
				<h2>About Tengze Construction Machinery</h2>
			</div>
			<div class="txt">
				<?php echo xintheme('i_about'); ?>
			</div>
			<div class="i_about m100">
				<div class="ia_video">
					<img src="<?php echo xintheme_img('i_video_bc',''); ?>" alt="">
					<div class="i_v_btn" ipath="<?php echo xintheme('i_video_link'); ?>">
						<iconify-icon icon="ph:caret-right-fill"></iconify-icon>
					</div>
					<div class="vd_box"></div>
				</div>
				<div class="ia_txt">
					<h6>Partners all over the world</h6>
					<article>
						As a professional machinery and equipment supplier, our partners all over the world, from
						Europe to South America, to Italy, and even South Asia, the Middle East and other countries,
						to maintain long-term friendship and close cooperation.
					</article>
					<ul>
						<li><img src="<?php bloginfo('template_url'); ?>/static/images/a1.png" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/static/images/a2.png" alt=""></li>
						<li><img src="<?php bloginfo('template_url'); ?>/static/images/a3.png" alt=""></li>
					</ul>
					<a href="<?php echo get_permalink(2); ?>" rel="nofollow" class="i_more"><b>View More</b></a>
				</div>
			</div>
		</div>
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
	</section>


	<section class="i_ad m140">
		<div class="i_tit i_tit_c">
			<h2>Our Advantages</h2>
			<h6>Believe in yourself, believe in partners, win-win cooperation!</h6>
		</div>
		<div class="home_advantage">
			<ul class="home_advantage_ul wrap">
				<?php
					$i_ad = xintheme('i_ad');
					if($i_ad){
					foreach($i_ad as $value):
					$img_id = $value['i_ad_ico'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				?>
				
				<li class="home_advantage_active wow slideInUp">
					<span class="home_advantage_span"></span>
					<div class="home_advantage_img">
						<img src="<?php echo $img_src[0]; ?>" />
					</div>
					<h3><?php echo $value['i_ad_tit'] ?></h3>
					<h4><?php echo $value['i_ad_txt'] ?></h4>
				</li>
				<?php endforeach; } ?>


				
			</ul>
		</div>
		<script>
			$('.home_advantage_ul li').removeClass('home_advantage_active')
			$('.home_advantage_ul li').hover(function () {
				$(this).siblings().removeClass('home_advantage_active')
				$(this).addClass('home_advantage_active')
			}, function () {
			})
		</script>
	</section>


	<section class="i_partner p80">
		<!-- home_partner -->
		<h6 class="s_tit">cooperative brands</h6>
		<!-- 合作伙伴 -->
		<div class="par_partner_box">
			<div class="par_partner">
				<div class="par_partner_list swiper-container par_partner_list1">
					<ul class="swiper-wrapper">
						<?php
							if( xintheme('in_partner') ){
							$in_partner = explode(',', xintheme('in_partner'));
							foreach ( $in_partner as $id ) :
							$img_src = wp_get_attachment_image_src( $id, 'full' );
							$img_caption = wp_get_attachment_caption($id);
						?>
						<li class="swiper-slide">
							<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
						</li>
						<?php endforeach; } ?>

					</ul>
				</div>
			</div>
		</div>

		<div class=" wow slideInUp">
			<div class="par_partner">
				<div class="par_partner_list swiper-container par_partner_list2">
					<ul class="swiper-wrapper">
					<?php
							if( xintheme('in_partner2') ){
							$in_partner2 = explode(',', xintheme('in_partner2'));
							foreach ( $in_partner2 as $id ) :
							$img_src = wp_get_attachment_image_src( $id, 'full' );
							$img_caption = wp_get_attachment_caption($id);
						?>
						<li class="swiper-slide">
							<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
						</li>
						<?php endforeach; } ?>

					</ul>
				</div>
			</div>
		</div>

		<button onclick="asfrom()" class="i_more i_more_c m70"><b>Cooperate with us</b></button>
		<script>
			// 首页 合作伙伴滚动
			var pswiper = new Swiper('.par_partner_list1', {
				loop: true,
				speed: 3000,
				freeMode: true,
				autoplay: {
					delay: 0,
					disableOnInteraction: false,
				},
				observer: true,
				observeParents: true,
				breakpoints: {
					0: {
						slidesPerView: 3,
						spaceBetween: 20,
						slidesPerGroup: 1
					},
					768: {
						slidesPerView: 4,
						spaceBetween: 20,
						slidesPerGroup: 1
					},
					1200: {
						slidesPerView: 6,
						spaceBetween: 40,
						slidesPerGroup: 1
					}
				}
			});

		</script>
		<script>
			// 首页 合作伙伴滚动
			var pswiper = new Swiper('.par_partner_list2', {
				loop: true,
				speed: 3500,
				freeMode: true,
				autoplay: {
					delay: 0,
					disableOnInteraction: false,
				},
				observer: true,
				observeParents: true,
				breakpoints: {
					0: {
						slidesPerView: 3,
						spaceBetween: 20,
						slidesPerGroup: 1
					},
					768: {
						slidesPerView: 4,
						spaceBetween: 20,
						slidesPerGroup: 1
					},
					1200: {
						slidesPerView: 6,
						spaceBetween: 40,
						slidesPerGroup: 1
					}
				}
			});

		</script>
	</section>



	<!-- News and Exhibition -->
	<section class="i_news m100">
		<div class="wrap">
			<div class="i_news_tit mb50">
				<div class="i_tit">
					<h2>News and Events<iconify-icon icon="icon-park-solid:setting"></iconify-icon></h2>
					<h6>Grasp the latest trends of the company, understand the forefront of the industry information, to bring you the latest and most valuable news and events.</h6>
				</div>
				<a class="i_more" href="<?php echo get_category_link(3); ?>" rel="nofollow"><b>More news</b></a>
			</div>
			<ul class="i_news_list">
				<?php
					$cat_id = 3;  // 指定id
					$sub_cat_ids = get_term_children( $cat_id, 'category' ); // 获取指定id下所有子分类
					$sticky = get_option( 'sticky_posts' );  // 筛选置顶
				
					$args = array(
						'post_type' => 'post',
						'post__in'  => $sticky,
						'category__in' => array_merge( array( $cat_id ), $sub_cat_ids ),
						'posts_per_page' => 3 // 显示个数
					);
				
					if ( ! empty( $sticky ) ) {
						$query = new WP_Query( $args );
						while ( $query->have_posts() ) {
							$query->the_post();
				?>
				
				<li>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<div class="img"><?php display_post_image(); ?></div>
						<div class="txt">
							<span>
								<h2><?php the_title(); ?></h2>
								<p>
									<?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?>
								</p>
								<i><b><?php echo the_time('Y.m.d') ?></b><iconify-icon icon="iconoir:page-right"></iconify-icon></i>
							</span>
						</div>
					</a>
				</li>
				<?php } } wp_reset_postdata(); ?>


				
			</ul>
		</div>
	</section>


</main>









<!-- Footer -->
<?php get_footer();?>
</body>
</html>
