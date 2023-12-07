<?php get_header(); ?>


<!-- header -->
<?php get_template_part('top') ?>




<!-- Banner -->
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b3.webp" />
				<div class="wrap">
					<div class="b_t1">
						<p class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".1s">Sincerely serve
							customers
							seek development
							together</p>
						<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".2s">Fully meet the needs of users, and provide users with technical support, accessories supply, troubleshooting. Provide a series of mechanical parameters of excavators query, maximize the value for customers. Enterprise purpose: integrity management, cooperation and mutual win, so that customers cost small</h6>
						<a class="i_more mt100 ani resize" href="<?php echo get_category_link(2); ?>" rel="nofollow"
						swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
					swiper-animate-delay=".3s"><b>view more</b></a>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b2.webp" />
				<div class="wrap">
					<div class="b_t1 b_t2">
						<h5 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".1s">high quality</h5>
						<p class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".2s">pure and reliable quality</p>
						<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".3s">Let every customer become our lifelong user, to provide users around the world with high quality used construction machinery. Fully meet the needs of users, and provide users with technical support, accessories supply, troubleshooting.</h6>
						<div class="img m50 ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".4s">
							<img src="<?php bloginfo('template_url'); ?>/static/images/b2.1.webp" alt="">
							<img src="<?php bloginfo('template_url'); ?>/static/images/b2.2.webp" alt="">
						</div>
						<a class="i_more mt100 ani resize" href="<?php echo get_category_link(2); ?>" rel="nofollow"
							swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".5s"><b>view more</b></a>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" />
				<div class="wrap">
					<div class="b_t1">
						<h5 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".1s">Xiangjue</h5>
						<p class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".2s">Engineering Machinery</p>
						<h6 class="ani resize" swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".3s">What we have to do is to promote the construction of construction machinery culture to promote the construction of social infrastructure and the popularization of civilized life</h6>
						<a class="i_more mt100 ani resize" href="<?php echo get_category_link(2); ?>" rel="nofollow"
							swiper-animate-effect="fadeInUp" swiper-animate-duration="1s"
							swiper-animate-delay=".4s"><b>view more</b></a>
					</div>
				</div>
			</div>
			
			
		</div>
		<div class="banner-pagination"></div>
		<div class="banner-button-prev"><iconify-icon icon="icon-park-outline:left"></iconify-icon></div>
		<div class="banner-button-next"><iconify-icon icon="icon-park-outline:right"></iconify-icon></div>
    </div>
</div>
<div class="clear"></div>
<script src="<?php bloginfo('template_url'); ?>/static/js/banner.js"></script>


<!-- Main -->
<main>

	<section class="i_cat p120">
		<div class="wrap">
			<div class="txt wow slideInRight">
				<div class="i_tit mb30">
					<h2>product category</h2>
				</div>
				<p class="fz16">Excavator, loader, crane, forklift, drill, roller, bulldozer and related accessories and so on</p>
				<a class="ip_btn m30" href="<?php echo get_category_link(2); ?>" rel="nofollow">
					<p><iconify-icon icon="ep:right"></iconify-icon><span>View More</span></p>
				</a>
			</div>
			<ul class="i_cat_list">
				<?php
					$args = array(
						'child_of'     => 2,
						'parent'       => 2,
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
				<li>
					<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
						<div class="ico"><img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> /></div>
						<p><?php echo esc_html( $cat->name ); ?></p>
						<h6 class="fz16"><?php echo esc_html( $cat->description ); ?></h6>
						<button class="i_more"><b>View More</b></button>
					</a>
				</li>
				<?php } ?>

			</ul>
		</div>
	</section>
	<div class="clear"></div>

	<section class="i_products p100">
		<div class="wrap">
			<div class="ip_tit">
				<div class="i_tit">
					<span>main products</span>
					<h2>more than 3000 second-hand excavators of various brands</h2>
				</div>
				<div class="txt">
					It owns excavators, loaders, cranes, forklifts, submersibles, road rollers, bulldozers and related accessories, etc. The site has more than 3000 second-hand excavators of various brands imported from home and abroad, and KOMATSU，HITACHI, CAT, KOBELCO, DOOSAN, VOLVO SANY Heavy Industry, has a long-term strategic partnership.
				</div>
			</div>
			<ul class="ip_list mt100 wow slideInUp">
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
				
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<div class="img">
						<?php
							$article_data = get_post_meta(get_the_ID(), 'extend_info', true);
							$produc_img = explode( ',', $article_data['produc_img'] );
							$thumbnail_id = $produc_img[0];
							$thumbnail_alt = get_the_title();
						?>
						<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
					</div>
					<div class="txt">
						<p>
							<?php
								$categories = get_the_category();
								if (!empty($categories)) {
									echo esc_html($categories[0]->name);
								}
							?>
						</p>
						<h6><?php the_title(); ?></h6>
						<span class="i_btn"><iconify-icon icon="ep:right"></iconify-icon>View More</span>
					</div>
				</a></li>
				<?php } } wp_reset_postdata(); ?>


			</ul>
			<div class="i_brand mt40">
				<div class="i_brand_list swiper-container">
					<ul class="swiper-wrapper">
						<?php
							if( xintheme('i_brand') ){
							$i_brand = explode(',', xintheme('i_brand'));
							foreach ( $i_brand as $id ) :
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
			<a href="<?php echo get_category_link(2); ?>" class="i_more center mt80" rel="nofollow"><b>View More</b></a>
			<script>
				var pswiper = new Swiper('.i_brand_list', {
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
							spaceBetween: 10,
							slidesPerGroup: 1
						},
						768: {
							slidesPerView: 5,
							spaceBetween: 10,
							slidesPerGroup: 1
						},
						1200: {
							slidesPerView: 7,
							spaceBetween:10,
							slidesPerGroup: 1
						}
					}
				});
			</script>
		</div>
	</section>

	<section class="i_contact">
		<div class="wrap_l p30">
			<h6>Recent promotio!</h6>
			<p>Send a set of original excavator maintenance accessories<br>
				worth 10,000 yuan free distribution!</p>
		</div>
		<div class="wrap_r p30">
			<div class="ico"><iconify-icon icon="bxs:phone-call"></iconify-icon></div>
			<h5><i>call us any time</i><a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a></h5>
			<span>OR</span>
			<button onclick="asfrom()" class="i_more"><b>contact us</b></button>
		</div>
	</section>




	<section class="i_about wrap mt140">
		<div class="txt wow slideInLeft">
			<div class="i_ab_cont">
				<div class="i_tit">
					<h2>xiangjue<br>
						excavation machinery
						conquer the world</h2>
				</div>
				
				<article class="fz16">
					<?php echo xintheme('i_about'); ?>
					<a class="i_btn" href="<?php echo get_permalink(2); ?>" rel="nofollow"><iconify-icon icon="ep:right"></iconify-icon>View More</a>
				</article>
				<ul>
					<li><i></i><p>Quality casting brand, service reputation "business purpose”</p></li>
					<li><i></i><p>Provide technical support, spare parts supply, troubleshooting</p></li>
					<li><i></i><p>Good faith management, cooperation and mutual win, so that customers cost small</p></li>
				</ul>
			</div>
		</div>
		<div class="img wow slideInRight">
			<img src="<?php echo xintheme_img('i_video_bc',''); ?>" />
			<div class="v_btn" ipath="<?php echo xintheme('i_video_link'); ?>"><iconify-icon icon="fluent:triangle-16-filled" rotate="90deg"></iconify-icon></div>
		</div>
	</section>
	<div class="clear"></div>
	<div class="vd_box"></div>
	<script>
		$(".v_btn").each(function(){
			var src = $(this).attr("ipath");
			if(src == null || src.trim() === ""){
				$(this).remove();
			}
		});
		$(".v_btn").click(function () {
			var v_link = $(this).attr('ipath');
			$('.vd_box')
			.html(
				`<div onclick="v_close()" class="close_v"></div><iframe id="iframe_v" src='${v_link}?autoplay=1' title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>`
			)
			.show();
		});
		function v_close() {
			$('.vd_box').html("").hide();
		}
	</script>


	


	<section class="i_adv p100 mt50">
		<div class="wrap">
			<div class="i_tit center">
				<h2>our advantages</h2>
				<h6>China and even Asia's largest second-hand construction machinery trading company!</h6>
			</div>
			<div class="if wow slideInUp">
				<div class="i_f_list swiper-container m80">
					<ul class="swiper-wrapper">
						<?php
							if( xintheme('i_factory') ){
							$i_factory = explode(',', xintheme('i_factory'));
							foreach ( $i_factory as $id ) :
							$img_src = wp_get_attachment_image_src( $id, 'full' );
							$img_caption = wp_get_attachment_caption($id);
						?>
						<li class="swiper-slide">
							<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
						</li>
						<?php endforeach; } ?>
					</ul>
					<div class="if-pagination mt30"></div>
				</div>
				<div class="if-prev"><iconify-icon icon="fe:arrow-left"></iconify-icon></div>
				<div class="if-next"><iconify-icon icon="fe:arrow-right"></iconify-icon></div>
			</div>
			<dl class="b_num_list m120">
				<dt>
					<span><i class="roll_num">3000</i><i>+</i></span>
					<p>
						More than 3,000 second-hand excavators of various brands have been imported from home and abroad.Complete brand model.
					</p>
				</dt>
				<dt>
					<span><i class="roll_num">20</i><i>years+</i></span>
					<p>
						Engaged in second-hand construction machinery industry for 20 years,Stock supply, factory direct sales, quality assurance, professional service.
					</p>
				</dt>
				<dt>
					<span><i class="roll_num">10</i><i>+</i></span>
					<p>To provide users around the world with high quality used construction machinery.There are many cooperative brands and complete product series.</p>
				</dt>
			</dl>
		</div>
		<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
		<script>$('.roll_num').countUp();</script>
		<script>
			var swiper = new Swiper('.i_f_list', {
				loop: true,
				//loopFillGroupWithBlank: true,
				//roundLengths: true,
				//centeredSlides: true,
				pagination: {
					el: '.if-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.if-prev',
					nextEl: '.if-next',
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
						slidesPerView: 2,
						spaceBetween: '2%',
						slidesPerGroup: 2,
					},
					1025: {
						slidesPerView: 3,
						spaceBetween: '2%',
						slidesPerGroup: 1,
					},
				},
			});
		</script>
	</section>


	


	
	<section class="i_logo p100">
		<div class="wrap">
			<div class="i_tit center mb70">
				<h2>cooperative brands</h2>
				<h6>With many brands have a long-term strategic cooperative relationship</h6>
			</div>
		</div>
		<div class="par_partner_box">
			<div class="par_partner m30">
				<div class="par_partner_list swiper-container par_partner_list1">
					<ul class="swiper-wrapper swiper-no-swiping">
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
			<div class="par_partner">
				<div class="par_partner_list swiper-container par_partner_list2">
					<ul class="swiper-wrapper swiper-no-swiping">
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
 	</section>
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
	

	<section class="i_new wrap m100 wow slideInUp">
		<div class="i_n_tit">
			<div class="i_tit">
				<span>News & Events</span>
				<h2>latest news</h2>
			</div>
			<a href="<?php echo get_category_link(2); ?>" class="i_more" rel="nofollow"><b>more news</b></a>
		</div>
		<ul class="i_n_list mt60">
			<?php
				$cat_id = 3; // 指定分类 ID
				$child_ids = get_term_children( $cat_id, 'category' ); // 获取该分类和所有子分类的 ID
				$query_args = array(
					'category__in' => array_merge( array( $cat_id ), $child_ids ), // 查询该分类及其所有子分类
					'posts_per_page' => 4, // 显示多少篇文章
					'orderby' => 'date', // 按日期排序
					'order' => 'DESC', // 按降序排列
				);
				$all_posts = new WP_Query( $query_args );
				if ( $all_posts->have_posts() ) {
				while ( $all_posts->have_posts() ) {
				$all_posts->the_post();
			?>
			
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="img">
					<?php display_post_image(); ?>
					<b><?php echo the_time('Y-m-d') ?></b>
				</div>
				<div class="txt">
					<h6><?php the_title(); ?></h6>
					<p><?php echo mb_strimwidth(strip_tags($post->post_content),0,120,'...'); ?></p>
					<span class="i_btn"><iconify-icon icon="ep:right"></iconify-icon>View More</span>
				</div>
			</a></li>
			<?php } wp_reset_postdata(); } ?>

			
		</ul>
	</section>



</main>












<!-- Footer -->
<?php get_footer();?>
</body>
</html>
