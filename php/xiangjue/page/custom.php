<?php
/*
Template Name: custom
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
	<div class="img">
	<img src="<?php bloginfo('template_url'); ?>/static/images/banner_cus.webp" />
	</div>
	<div class="wrap">
	<h2>custom</h2>
	</div>
</div>
<div class="in_position">
	<div class="wrap container">
	<?php echo in_breadcrumbs(); ?>
	</div>
</div>

<main>
	<section class="m80">
		<div class="i_tit center">
			<span>Support customization</span>
			<h2>Customize services<br> according to customer needs</h2>
		</div>
		<div class="cus_content p80 m80">
			<ul class="cus_list wrap mb60 wow slideInUp">
				<?php
					$in_custom = xintheme('in_custom');
					$num=1;
					if($in_custom){
					foreach($in_custom as $value):
					$img_id = $value['in_cus_pic'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				?>
				
				<li>
					<div class="cir">
						<div class="img">
							<img src="<?php echo $img_src[0]; ?>" />
						</div>
						<span>0<?php echo $num; ?></span>
					</div>
					<h6><?php echo $value['in_cus_tit'] ?></h6>
					<p>
						<?php echo $value['in_cus_txt'] ?>
					</p>
				</li>
				<?php $num++; endforeach; } ?>
				
			</ul>
			<button onclick="asfrom()" class="i_more center"><b>view more Custom case</b></button>
		</div>
	</section>

	<ul class="cus_ul">
		<?php
				$in_custom = xintheme('in_custom');
				$num=1;
				if($in_custom){
				foreach($in_custom as $value):
					$in_cus_gallery = explode(',', $value['in_cus_gallery']);
		?>
		<li class="wow slideInUp">
			<div class="wrap">
				<div class="cus_l cus_l_gallery<?php echo $num; ?> swiper">
					<div class="swiper-wrapper">
						<?php
							foreach ( $in_cus_gallery as $id ) :
							$img_src = wp_get_attachment_image_src( $id, 'full' );
						?>
						<div class="swiper-slide">
							<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="cus_box">
					<div class="p_det_cont mt60 mb100">
						<div class="ip_btn m30"><p><span>Optional style 0<?php echo $num; ?></span></p></div>
						<h5><?php echo $value['in_cus_tit'] ?></h5>
						<div class="p_det_ms">
							<?php echo $value['in_cus_txt'] ?>
						</div>
					</div>
	
					<div class="cus_r cus_r_gallery<?php echo $num; ?> swiper-container">
						<ul class="swiper-wrapper">
							<?php
								foreach ( $in_cus_gallery as $id ) :
								$img_src = wp_get_attachment_image_src( $id, 'full' );
							?>
								<li class="swiper-slide">
									<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
								</li>
							<?php endforeach; ?>
							</ul>
					</div>
					<div class="cus_control">
						<div class="cus-prev cus-prev1"><iconify-icon icon="system-uicons:arrow-left"></iconify-icon></div>
						<!-- <div class="cus-pagination"></div> -->
						<div class="cus-next cus-next1"><iconify-icon icon="system-uicons:arrow-right"></iconify-icon></div>
					</div>
	
				</div>
			</div>
		</li>
		<?php $num++; endforeach; } ?>
		
		<!-- <li>
			<div class="wrap">
				<div class="cus_l cus_l_gallery3 swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" /></div>
						</div>
						<div class="swiper-slide">
							<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" /></div>
						</div>
						<div class="swiper-slide">
							<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" /></div>
						</div>
						<div class="swiper-slide">
							<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" /></div>
						</div>
						<div class="swiper-slide">
							<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" /></div>
						</div>
					</div>
				</div>
				<div class="cus_box">
					<div class="p_det_cont mt60 mb100">
						<div class="ip_btn m30"><p><span>Optional style 01</span></p></div>
						<h5>excavator EXTENDED ARM</h5>
						<div class="p_det_ms">
							With customer customization ability, can be customized according to customer needs, and has a strict quality control and management system to ensure that products meet customer standards and customer needs.
						</div>
					</div>
	
					<div class="cus_r cus_r_gallery3 swiper-container">
						<ul class="swiper-wrapper">
							<li class="swiper-slide">
								<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" /></div>
							</li>
							<li class="swiper-slide">
								<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" /></div>
							</li>
							<li class="swiper-slide">
								<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" /></div>
							</li>
							<li class="swiper-slide">
								<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" /></div>
							</li>
							<li class="swiper-slide">
								<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/b1.webp" /></div>
							</li>
						</ul>
					</div>
					<div class="cus_control">
						<div class="cus-prev cus-prev3"><iconify-icon icon="system-uicons:arrow-left"></iconify-icon></div>
						<div class="cus-next cus-next3"><iconify-icon icon="system-uicons:arrow-right"></iconify-icon></div>
					</div>
	
				</div>
			</div>
		</li> -->
	</ul>



	<script>
		var cus_swiper = new Swiper(".cus_r_gallery1", {
			slidesPerGroup: 1,
			watchSlidesProgress: true,
			breakpoints: {
				0: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				1025: {
					slidesPerView: 4,
					spaceBetween: 20,
				}
			}
		});
		var cus_swiper2 = new Swiper(".cus_l_gallery1", {
			spaceBetween: 0,
			slidesPerView: 1,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: ".cus-next1",
				prevEl: ".cus-prev1",
			},
			// pagination: {
			// 	el: '.cus-pagination',
			// 	clickable: false,
			// 	type: "fraction",
			// },
			thumbs: {
				swiper: cus_swiper
			}
		});
		var cus2_swiper = new Swiper(".cus_r_gallery2", {
			slidesPerGroup: 1,
			watchSlidesProgress: true,
			breakpoints: {
				0: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				1025: {
					slidesPerView: 4,
					spaceBetween: 20,
				}
			}
		});
		var cus2_swiper2 = new Swiper(".cus_l_gallery2", {
			spaceBetween: 0,
			slidesPerView: 1,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: ".cus-next2",
				prevEl: ".cus-prev2",
			},
			// pagination: {
			// 	el: '.cus-pagination',
			// 	clickable: false,
			// 	type: "fraction",
			// },
			thumbs: {
				swiper: cus2_swiper
			}
		});
		var cus3_swiper = new Swiper(".cus_r_gallery3", {
			slidesPerGroup: 1,
			watchSlidesProgress: true,
			breakpoints: {
				0: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				1025: {
					slidesPerView: 4,
					spaceBetween: 20,
				}
			}
		});
		var cus3_swiper2 = new Swiper(".cus_l_gallery3", {
			spaceBetween: 0,
			slidesPerView: 1,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: ".cus-next3",
				prevEl: ".cus-prev3",
			},
			// pagination: {
			// 	el: '.cus-pagination',
			// 	clickable: false,
			// 	type: "fraction",
			// },
			thumbs: {
				swiper: cus3_swiper
			}
		});
	</script>
</main>









<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>