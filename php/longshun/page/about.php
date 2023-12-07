<?php
/*
Template Name: about
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<!-- banner -->
<div class="in_banner">
	<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/static/images/banner_a.webp" /></div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>Serve customers</br>attentively</h2>
		</div>
	</div>
</div>

<!-- 当前位置 -->
<div class="in_position in_position_bc">
	<div class="wrap container">
	<?php echo in_breadcrumbs(); ?>
	</div>
</div>

<main>
	<section class="in_about mt120 wrap">
		<div class="i_tit wow slideInUp">
			<h2>about us</h2>
		</div>
		<article class="wow slideInUp">
			<?php echo xintheme('in_about_text'); ?>
		</article>
		
		<ul class="i_num_list mt80">
			<li>
			  <h6><span class="roll_num">30</span>+</h6>
			  <p>Industry experience</p>
			</li>
			<li>
			  <h6><span class="roll_num">20000</span>+</h6>
			  <p>Annual sales volume</p>
			</li>
			<li>
			  <h6><span class="roll_num">160</span>+</h6>
			  <p>Patent certificate</p>
			</li>
			<li>
			  <h6><span class="roll_num">60</span>%</h6>
			  <p>Market share</p>
			</li>
		</ul>
		<script src="<?php echo get_template_directory_uri(); ?>/static/js/roll-num.js"></script>
		<script>$('.roll_num').countUp();</script>

		<div class="in_ab_pic mt60 wow slideInUp">
			<img src="<?php echo xintheme_img('in_about_pic',''); ?>" />
			<div class="in_v_btn" ipath="<?php echo xintheme('in_about_videos'); ?>"><i class="fas fa-caret-right"></i></div>
		</div>
		<div class="vd_box"></div>
		<script>
		  $(".in_v_btn").each(function(){
			var src = $(this).attr("ipath");
			if(src == null){
			  $(this).remove();
			}
		  });
		  $(".in_v_btn").click(function () {
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

	<section class="ad mt140 wrap">
		<div class="i_tit wow slideInUp">
			<h2>Corporate advantage</h2>
		</div>
		<ul class="adv_list m60">
			<?php
			$ad = xintheme('ad');
			if ($ad) {
				$num = 1; // 将$num变量的位置移动到循环外部
				foreach ($ad as $value) {
					$img_id = $value['ad_pic'];
					$img_src = wp_get_attachment_image_src($img_id, 'full');
					?>
					<li class="wow slideInUp" data-wow-delay=".<?php echo $num; ?>s">
						<img src="<?php echo $img_src[0]; ?>" />
						<p><?php echo $value['ad_txt'] ?></p>
					</li>
					<?php
					$num++;
				}
			}
			?>
		</ul>
		
	</section>

	<section class="certy_box bor box_space p100">
		<div class="i_tit wow slideInUp">
			<h2>Our certificate</h2>
		</div>

		<div class="certy mt70 wrap_l wow slideInUp">
			<div class="swiper-container">
				<ul class="swiper-wrapper" id="certy">
					<?php
						if( xintheme('certy') ){
						$certy = explode(',', xintheme('certy'));
						foreach ( $certy as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = get_post_field( 'post_excerpt', $id );
					?>
					<li class="swiper-slide">
						<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
						<!-- <p><?php echo $img_caption; ?></p> -->
					</li>
					<?php endforeach; } ?>
					
				</ul>
			</div>
			<div class="certy-button-prev"><i class="fal fa-arrow-left"></i></div>
			<div class="certy-button-next"><i class="fal fa-arrow-right"></i></div>
			<div class="certy-pagination"></div>
		</div>
	</section>


	<section class="env mt100 wrap">
		<div class="i_tit wow slideInUp">
			<h2>Our Environment</h2>
		</div>
		<ul class="env_list mt70 wow slideInUp" id="env_list">
			<?php
						if( xintheme('env') ){
						$env = explode(',', xintheme('env'));
						foreach ( $env as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = get_post_field( 'post_excerpt', $id );
					?>
					<li>
						<img src="<?php echo $img_src[0]; ?>" />
						<!-- <p><?php echo $img_caption; ?></p> -->
					</li>
					<?php endforeach; } ?>
			
			<!-- <li><img src="<?php echo get_template_directory_uri(); ?>/static/images/other/en1.png" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/static/images/other/en2.png" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/static/images/other/en3.png" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/static/images/other/en4.png" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/static/images/other/en5.png" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/static/images/other/en6.png" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/static/images/other/en7.png" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/static/images/other/en8.png" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/static/images/other/en9.png" alt=""></li> -->
		</ul>
		<div class="box_space"></div>
	</section>
</main>



<link href="<?php echo get_template_directory_uri(); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri(); ?>/static/js/viewer.min.js"></script>
<script>
	var banner2_swiper = new Swiper('.certy .swiper-container',{
		loop: true,
		loopFillGroupWithBlank: true,
		roundLengths: true,
		// centeredSlides: true,
		pagination: {
			el: '.certy-pagination',
			clickable: true,
		},
		navigation: {
			prevEl: '.certy-button-prev',
			nextEl: '.certy-button-next',
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
				slidesPerView: 2,
				spaceBetween: 20,
				slidesPerGroup: 1,
			},
			768: {
				slidesPerView: 3.8,
				spaceBetween: 30,
				slidesPerGroup: 1,
			},
			1025: {
				slidesPerView: 4.8,
				spaceBetween: 45,
				slidesPerGroup: 1,
			},
		},
	});
	/*查看大图*/
    var image = new Viewer(document.getElementById('certy'), {
      button: true,
      navbar: false,
      width: 660,
      title: false
    });
	
	/*查看大图*/
    var image2 = new Viewer(document.getElementById('env_list'), {
      button: true,
      navbar: false,
      width: 660,
      title: false
    });
</script>
<div class="mb120"></div>





<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>