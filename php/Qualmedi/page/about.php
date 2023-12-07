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
<div class="mao_box wrap bc_black">
	<div class="in_nav">
	  <div class="in_nav_tit">
		<h6>About list</h6>
	  </div>
	  <ul class="menu_list">
		<li class="list active"><a href="<?php echo get_permalink(2); ?>">About Us</a></li>
		<li class="list"><a href="<?php echo get_permalink(12); ?>">Certification</a></li>
		<li class="list"><a href="<?php echo get_permalink(14); ?>">patent</a></li>
	  </ul>
	</div>
</div>


<section class="a_company">
	<div class="wrap m70">
		<div class="in_ab_t">
			<div class="i_tit i_tit_l">
				<h2>Company Profile</h2>
				<h5>QUALMEDI</h5>
			</div>
			<h6>QUALMEDI FOR QUALITY MEDICAL DEVICE</h6>
			<article>
				<?php echo xintheme('in_about_t'); ?>
			</article>
			
			<ul class="i_ab_num mt80">
				<li>
					<h5><span class="roll_num">2015</span></h5>
					<p>was founded in</p>
				</li>
				<li>
					<h5><span class="roll_num">500</span>+</h5>
					<p>main products</p>
				</li>
				<li>
					<h5><span class="roll_num">50</span>+</h5>
					<p>exporting country</p>
				</li>
				
			</ul>
			
		</div>
		<div class="img">
			<img src="<?php echo xintheme_img('in_a_pic',''); ?>" alt="">
			<div class="but_img">
				<img src="<?php bloginfo('template_url'); ?>/static/images/other/in_a_s.webp" alt="">
				<div class="i_v_btn" ipath="<?php echo xintheme('in_video_link'); ?>">
					<iconify-icon icon="ph:triangle-fill"></iconify-icon>
				</div>
			</div>
		</div>
		<div class="vd_box"></div>
	</div>
	<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
	<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
	<script>$('.roll_num').countUp();</script>
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
</section>

<section class="culture m80 wrap">
	<ul class="culture_list">
		<?php
			$in_cul = xintheme('in_cul');
			if($in_cul){
			foreach($in_cul as $value):
			$img_id = $value['in_cul_ico'];
			$img_src = wp_get_attachment_image_src( $img_id, 'full' );
		?>
		<li>
		  <div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
		  <div class="txt">
			<h2><?php echo $value['in_cul_tit'] ?></h2>
			<div class="text">
				<?php echo $value['in_cul_txt'] ?>
			</div>
		  </div>
		</li>
		<?php endforeach; } ?>

	  </ul>
	  <script>
		$('.culture_list li:first').addClass('cul_curr');

		function handleHover(element) {
			element.addClass('cul_curr');
			element.siblings().removeClass('cul_curr'); 
		}

		$('.culture_list li').hover(function() {
			handleHover($(this));
		});
	  </script>
</section>




<section class="p80 in_ad" >
	<div class="i_tit i_tit_c wrap wow slideInUp">
		<h2>Advantage</h2>
	</div>
	<div class="advantage mt50 wrap">
		<div class="ad_img">
			<img src="<?php bloginfo('template_url'); ?>/static/images/other/ad.webp" alt="">
		</div>
		<ul class="ad_list">
			<?php
				$in_ad = xintheme('in_ad');
				if($in_ad){
				foreach($in_ad as $value):
				$img_id = $value['in_ad_ico'];
				$img_src = wp_get_attachment_image_src( $img_id, 'full' );
			?>

			<li>
				<div class="ico"><img src="<?php echo $img_src[0]; ?>" /></div>
				<div class="txt">
					<h3><?php echo $value['in_ad_tit'] ?></h3>
					<p><?php echo $value['in_ad_txt'] ?></p>
				</div>
			</li>
			<?php endforeach; } ?>
		</ul>

	</div>
</section>


	

<!-- Environment & Workshop -->
<section class="in_ew mt100 p70">
	<div class="i_tit i_tit_c wrap wow slideInUp">
		<h2>Environment & Workshop</h2>
	</div>
	<div class="ew_list swiper-container mt60">
		<ul class="swiper-wrapper" id="ew_list">
			<?php
				if( xintheme('in_factory') ){
				$in_factory = explode(',', xintheme('in_factory'));
				foreach ( $in_factory as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li class="swiper-slide">
				<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
				<!-- <p><?php echo $img_caption; ?></p> -->
			</li>
			<?php endforeach; } ?>
		</ul>
		<div class="ew-prev"><iconify-icon icon="lucide:move-left"></iconify-icon></div>
		<div class="ew-next"><iconify-icon icon="lucide:move-right"></iconify-icon></div>
	</div>
	<div class="ew-pagination"></div>
</section>
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
			autoplay: {
				delay: 3000,
				pauseOnMouseEnter: true,
				disableOnInteraction: false,
			},
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



<!-- honor -->
<section class="in_honor p80 mt30">
	<div class="i_tit wow slideInUp">
		<h2>honor</h2>
	</div>
	<div class="i_honor_list swiper-container mt60 wrap">
		<ul class="swiper-wrapper">
			
			<?php
				if( xintheme('i_honor') ){
				$i_honor = explode(',', xintheme('i_honor'));
				foreach ( $i_honor as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li class="swiper-slide">
				<img src="<?php echo $img_src[0]; ?>" />
				<!-- <p><?php echo $img_caption; ?></p> -->
			</li>
			<?php endforeach; } ?>
			
			
		</ul>
		<div class="i_honor-prev"></div>
		<div class="i_honor-next"></div>
		<div class="i_honor-pagination"></div>
	</div>
	
</section>
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
			// autoplay: {
			// 	delay: 3000,
			// 	pauseOnMouseEnter:true,
			// 	disableOnInteraction: false,
			// },
			observer: true,
			observeParents: true,
			breakpoints: {
				0:{
					slidesPerView: 2,
					spaceBetween: '10',
					slidesPerGroup: 1,
				},
				560:{
					slidesPerView: 3,
					spaceBetween: '15',
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

<section class="acknowled m80 wrap">
	<div class="i_tit wow slideInUp">
		<h2>Acknowledgement</h2>
	</div>
	<div class="ack_list swiper-container mt60">
		<ul class="swiper-wrapper">
			<?php
				if( xintheme('in_ack') ){
				$in_ack = explode(',', xintheme('in_ack'));
				foreach ( $in_ack as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li class="swiper-slide">
				<img src="<?php echo $img_src[0]; ?>" />
				<!-- <p><?php echo $img_caption; ?></p> -->
			</li>
			<?php endforeach; } ?>
			
		</ul>
		<div class="ack-prev"></div>
		<div class="ack-next"></div>
		<div class="ack-pagination"></div>
	</div>
	
</section>
<script>
	var swiper = new Swiper('.ack_list', {
			loop: true,
			loopFillGroupWithBlank: true,
			//roundLengths: true,
			//centeredSlides: true,
			pagination: {
				el: '.ack-pagination',
				clickable: true,
			},
			navigation: {
				prevEl: '.ack-prev',
				nextEl: '.ack-next',
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
					slidesPerView: 2,
					spaceBetween: '10',
					slidesPerGroup: 1,
				},
				560:{
					slidesPerView: 3,
					spaceBetween: '15',
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
<div class="in_p_contact">
	<div class="wrap">
		<div class="ico"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_p_c.png" alt=""></div>
		<h6>If you have any questions or would like to request a quote,
			Please send us a message.</h6>
		<a onclick="asfrom()" href="javascript:;" class="i_more i_more_color i_btn"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_call.png" alt="">Contact us</a>
	</div>
</div>



	

<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>








<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>