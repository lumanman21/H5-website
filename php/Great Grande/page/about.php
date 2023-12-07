<?php
/*
Template Name: about
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_about',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>About us</h2>
			<div class="breadcrumbs">
			<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>

<!-- anchor -->
<div class="mao_box p60 wrap bc_black">
	<div class="in_nav am_box">
	  <div class="in_nav_tit">
		<h6>About list</h6><i></i>
	  </div>
	  <ul class="menu_list">
		<li class="list"><a href="#about_1">Company Profile </a></li>
		<li class="list"><a href="#about_2">Certificates</a></li>
		<li class="list"><a href="#about_3">Factory Overview</a></li>
		<li class="list"><a href="#about_4">Partners</a></li>
		<li class="list"><a href="<?php echo get_category_link(5); ?>">News</a></li>
	  </ul>
	</div>
</div>


<main>
	<!-- company_profile -->
    <section class="a_company in_louti bc_gradient pt80" id="about_1">
		<div class="wrap_l">
			<div class="i_ab_t">
				<div class="i_tit i_tit_c i_tit_l mb40 on">
					<h2>ABOUT <span>GREAT GRANDE</span></h2>
				</div>
				<article>
					<?php echo xintheme('in_about_t'); ?>
				</article>
				<div class="i_more_list m30">
					<a href="<?php echo xintheme('in_brochure'); ?>" class="i_more"><b>Download brochure</b></a>
					<a href="<?php echo get_permalink(20); ?>" class="i_more i_more2"><b><iconify-icon icon="tabler:360"></iconify-icon>360° FACTORY VR</b></a>
				</div>
			</div>
			<div class="img">
				
				<img src="<?php echo xintheme_img('in_a_pic',''); ?>" alt="">
				<div class="i_v_btn" ipath="<?php echo xintheme('in_video_link'); ?>">
					<i></i>
					<svg viewBox="25 25 50 50">
						<circle r="20" cy="50" cx="50"></circle>
					</svg>
				</div>
			</div>
		</div>
		<div class="vd_box"></div>
		<script>
			$(".i_v_btn").each(function(){
				var src = $(this).attr("ipath");
				if(src == null){
				$(this).remove();
				}
			});
			$(".i_v_btn").click(function () {
				var v_link = $(this).attr('ipath');
				$('.vd_box').html("<div onclick=\"v_close()\" class=\"close_v\"></div><iframe id=\"iframe_v\" src='"+v_link+"?autoplay=1' title=\"\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>");
				$('.vd_box').show();
			});
			function v_close(){
				$('.vd_box').html("");
				$('.vd_box').hide();
			}
		</script>
		
		<ul class="i_ab_num wrap_l wrap_r p80">
			<li>
				<h6><span class="roll_num">100</span>%</h6>
				<p>Export p.c</p>
			</li>
			<li>
				<h6><span class="roll_num">2014</span></h6>
				<p>Year Established</p>
			</li>
			<li>
				<h6><span class="roll_num">10000</span>m²</h6>
				<p>Square meters of space</p>
			</li>
			<li>
				<h6><span class="roll_num">350000</span>m²</h6>
				<p>Production capacity over</p>
			</li>
		</ul>
		<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
		<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
		<script>$('.roll_num').countUp();</script>
	</section>

	<!-- certy -->
	<section class="i_certy a_certy in_louti p100" id="about_2">
		<div class="i_tit i_tit_s">
			<h2>Certificates</h2>
		</div>
		<div class="i_c_box mt50">
		  <div class="ic">
			<div class="swiper-container">
			  <ul class="swiper-wrapper" id="in_certy">
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
			var image = new Viewer(document.getElementById('in_certy'), {
				button: true,
				navbar: false,
				width: 660,
				title: false
			});
		</script>


		
	</section>

	<!-- Factory Overview -->
	<section class="in_ew in_louti p80 bc_black" id="about_3">
		<div class="i_tit i_tit_s">
			<h2>Factory Overview</h2>
		</div>
		<div class="ew_list swiper-container mt60 wrap">
			<ul class="swiper-wrapper" id="ew_list">
				<?php
					if( xintheme('in_factory') ){
					$in_factory = explode(',', xintheme('in_factory'));
					foreach ( $in_factory as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				<li>
					<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
					<p><?php echo $img_caption; ?></p>
				</li>
				<li class="swiper-slide">
					<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
					<button class="i_more i_more_c"><b>workshop</b></button>
				</li>
				<?php endforeach; } ?>

				<li class="swiper-slide">
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/i_pro_bg1.webp" /></div>
					<button class="i_more i_more_c"><b>workshop</b></button>
				</li>
				<li class="swiper-slide">
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/i_pro_bg1.webp" /></div>
					<button class="i_more i_more_c"><b>workshop</b></button>
				</li>
				<li class="swiper-slide">
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/i_pro_bg1.webp" /></div>
					<button class="i_more i_more_c"><b>workshop</b></button>
				</li>
				<li class="swiper-slide">
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/i_pro_bg1.webp" /></div>
					<button class="i_more i_more_c"><b>workshop</b></button>
				</li>
				<li class="swiper-slide">
					<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/i_pro_bg1.webp" /></div>
					<button class="i_more i_more_c"><b>workshop</b></button>
				</li>
			</ul>
		</div>
		<div class="ew-prev"></div>
		<div class="ew-next"></div>
		<div class="ew-pagination"></div>
	</section>

	<!-- customized -->
	<section class="p80 bc_gradient in_louti" id="about_4">
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
				<a href="javascript:;" onclick="asfrom()" class="i_more mt100"><b>Contact us</b></a>
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

	<section class="a_logo p80 bc_black">
		<!-- partner -->
		<div class="i_logo">
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



  
	
</main>


<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>
<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

<script>
	
	var swiper = new Swiper('.ew_list', {
			loop: true,
			//loopFillGroupWithBlank: true,
			roundLengths: true,
			centeredSlides: true,
			pagination: {
				el: '.ew-pagination',
				clickable: true,
			},
			navigation: {
				prevEl: '.ew-prev',
				nextEl: '.ew-next',
			},
			// autoplay: {
			// 	delay: 3000,
			// 	pauseOnMouseEnter: true,
			// 	disableOnInteraction: false,
			// },
			observer: true,
			observeParents: true,
			breakpoints: {
				0: {
					slidesPerView: 1.5,
					spaceBetween: 0,
					slidesPerGroup: 1,
				},
				1025: {
					slidesPerView: 2,
					spaceBetween: 0,
					slidesPerGroup: 1,
				},
			},
		});
		/*查看大图*/
	
		var image = new Viewer(document.getElementById('ew_list'), {
			button: true,
			navbar: false,
			width: 660,
			title: false
		});
</script>









<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>