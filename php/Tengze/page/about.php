<?php
/*
Template Name: about
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_a.webp" />
	</div>
	<div class="b_txt">
		<h6>about us</h6>
		<p>Believe in yourself, believe in partners, win-win cooperation!</p>
	</div>
</div>
<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>


<main>
	<section class="a_company">
		<div class="wrap" style="background: #fff;">
			<div class="in_ab_t">
				<div class="tit">
					<h2>teng</h2>
					<h2><span>ze</span>
						<p>Construction </br> Machinery Co., Ltd</p>
					</h2>
				</div>
				<article>
					<?php echo xintheme('in_about_t'); ?>
				</article>
				<button onclick="asfrom()" class="i_more"><b>contact us</b></button>

			</div>
			<div class="img">
				<img src="<?php bloginfo('template_url'); ?>/static/images/in_a.webp" alt="">
			</div>
		</div>
		<ul class="i_ab_num mt80 wrap">
			<li>
				<h5><span class="roll_num">20</span>+</h5>
				<p>working experience</p>
			</li>
			<li>
				<h5><span class="roll_num">3000</span>+</h5>
				<p>spot stocks</p>
			</li>
			<li>
				<h5><span class="roll_num">20</span>+</h5>
				<p>cooperative brand</p>
			</li>
			<li>
				<h5><span class="roll_num">10</span>+</h5>
				<p>industry-leading</p>
			</li>

		</ul>

		<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
		<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
		<script>$('.roll_num').countUp();</script>


	</section>

	<section class="a_video p60">
		<div class="wrap">
			<div class="i_tit i_tit_w">
				<h2>view more about us<iconify-icon icon="icon-park-solid:setting"></iconify-icon></h2>
				<h6>Watch our company introduction video to learn more about our company</h6>
			</div>
			<div class="img m60">
				<img src="<?php echo xintheme_img('in_a_pic',''); ?>" alt="">
				<div class="i_v_btn" ipath="<?php echo xintheme('in_video_link'); ?>">
					<iconify-icon icon="ph:caret-right-fill"></iconify-icon>
				</div>
				<div class="vd_box"></div>
			</div>
			<script>
				$(".i_v_btn").each(function () {
					var src = $(this).attr("ipath");
					// if (src == null) {
					// 	$(this).remove();
					// }
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
		</div>
	</section>


	<section class="factory p80">
		<div class="wrap">
			<div class="i_tit i_tit_c">
				<h2>Factory picture</h2>
				<h6>Believe in yourself, believe in partners, win-win cooperation!</h6>
			</div>
			<div class="factory_list swiper-container">
				<ul class="swiper-wrapper">
					<?php
						if( xintheme('in_factory') ){
						$in_factory = explode(',', xintheme('in_factory'));
						foreach ( $in_factory as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
					<li class="swiper-slide">
						<img src="<?php echo $img_src[0]; ?>" />
					</li>
					<?php endforeach; } ?>


				</ul>
			</div>
		</div>
		<div class="factory-pagination"></div>
		<div class="factory-prev"></div>
		<div class="factory-next"></div>
		<script>
			var swiper = new Swiper('.factory_list', {
				loop: true,
				loopFillGroupWithBlank: true,
				//roundLengths: true,
				//centeredSlides: true,
				pagination: {
					el: '.factory-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.factory-prev',
					nextEl: '.factory-next',
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
						slidesPerView: 3,
						spaceBetween: '10',
						slidesPerGroup: 1,
					},
					1024: {
						slidesPerView: 5,
						spaceBetween: '12',
						slidesPerGroup: 1,

					},
				},
			});
		</script>

	</section>


	<section class="gp p80">
		<div class="wrap">
			<div class="i_tit">
				<h2>Global Partners<iconify-icon icon="icon-park-solid:setting"></iconify-icon></h2>
				<h6>Our company has been adhering to the concept of integrity management, products across the world,</br> customers from all over the world.</h6>
			</div>
			<div class="gp_list swiper-container m50">
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
			</div>
		</div>
		<div class="gp-pagination"></div>
		<div class="gp-prev"></div>
		<div class="gp-next"></div>
		<script>
			var swiper = new Swiper('.gp_list', {
				loop: true,
				loopFillGroupWithBlank: true,
				//roundLengths: true,
				//centeredSlides: true,
				pagination: {
					el: '.gp-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.gp-prev',
					nextEl: '.gp-next',
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
						slidesPerView: 3,
						spaceBetween: '10',
						slidesPerGroup: 1,
					},
					1024: {
						slidesPerView: 4,
						spaceBetween: '20',
						slidesPerGroup: 1,

					},
				},
			});
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

</main>







<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>