<?php
/*
Template Name: about
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<!-- banner -->
<div class="in_banner">
	<img src="<?php echo xintheme_img('in_banner_about',''); ?>" alt="">
	<div class="in_banner_text wrap">
		<h2>about us</h2>
	</div>
</div>


<main style="background: #f6f6f6;">
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container"><?php echo in_breadcrumbs(); ?></div>
	</div>


	<section class="about_us wow slideInUp">
		<div class="i_tit">
			<h2>ABOUT US</h2>
		</div>
		<div class="in_a wrap mt60">
			<div class="in_a_l">
				<article class="wow slideInUp">
					<?php echo xintheme('in_about_t'); ?>
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
			</div>
			<div class="in_a_r">
				<div class="img">
					<img src="<?php echo xintheme_img('in_a_pic',''); ?>" alt="">
				</div>
				<div class="about_video">
					<i class="i_v_btn" ipath="<?php echo xintheme('in_video_link'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/static/images/our.png" alt="">
					</i>
				</div>
			</div>
		</div>
	</section>
	<!-- about video -->
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
	<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
	<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
	<script>$('.roll_num').countUp();</script>



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


	<section class="env p80 wrap">
		<div class="i_tit wow slideInUp">
			<h2>Factory environment</h2>
		</div>
		<ul class="env_list mt70" id="env_list">
			<?php
				if( xintheme('in_factory') ){
				$in_factory = explode(',', xintheme('in_factory'));
				foreach ( $in_factory as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li>
				<img src="<?php echo $img_src[0]; ?>" />
			</li>
			<?php endforeach; } ?>

		</ul>
		
		<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
		<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
		<script>
			var image2 = new Viewer(document.getElementById('env_list'), {
				button: true,
				navbar: false,
				width: 660,
				title: false
			});
		</script>
	</section>

</main>








<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>