<?php
/*
Template Name: business
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
<div class="in_position">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>

<main>
	<section class="oem pt120">
		<div class="i_tit">
			<h2>OEM-Top Quality Products</h2>
		</div>
		<div class="oem_list wrap mt70">
			<dl class="wow slideInLeft">
				<dd>Advanced quality management system</dd>
				<?php
					$oem1 = xintheme('oem1');
					if($oem1){
					foreach($oem1 as $value):
				?>
				<dt><?php echo $value['oem1_txt'] ?></dt>
				<?php endforeach; } ?>
				<dt><img src="<?php echo get_template_directory_uri(); ?>/static/images/oem1.png" alt=""></dt>
			</dl>


			<dl class="wow slideInRight">
				<dd>A quality product supply chain</dd>
				<?php
					$oem2 = xintheme('oem2');
					if($oem2){
					foreach($oem2 as $value):
				?>
				<dt><?php echo $value['oem2_txt'] ?></dt>
				<?php endforeach; } ?>
				<dt><img src="<?php echo get_template_directory_uri(); ?>/static/images/oem2.png" alt=""></dt>
			</dl>
		</div>
		<div class="oem2 br mt120 p100 ">
			<div class="wrap">
				<div class="i_tit wow slideInLeft">
					<h3><span>OEM-Better</span></br>Service</h3>
					<h6>Choose us for more comfort, less worry, more 
						peace of mind.</h6>
				</div>

				<ul class="oem2_list">
					<li>
						<h6>Fast delivery</h6>
						<p>
							<?php echo xintheme('s1'); ?>
						</p>
					</li>
					<li>
						<h6>Ancillary services</h6>
						<p>
							<?php echo xintheme('s2'); ?>
						</p>
					</li>
				</ul>

				<div class="certy2 mt70 wow slideInUp" data-wow-delay=".3s">
					<div class="swiper-container">
						<ul class="swiper-wrapper" id="certy2">
							<?php
								if( xintheme('certy2') ){
								$certy2 = explode(',', xintheme('certy2'));
								foreach ( $certy2 as $id ) :
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
					<div class="certy2-button-prev"><i class="fal fa-arrow-left"></i></div>
					<div class="certy2-button-next"><i class="fal fa-arrow-right"></i></div>
					<div class="certy2-pagination"></div>
				</div>
			</div>
		</div>
	</section>


</main>




<link href="<?php echo get_template_directory_uri(); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri(); ?>/static/js/viewer.min.js"></script>
<script>
	var banner2_swiper = new Swiper('.certy2 .swiper-container',{
		loop: true,
		loopFillGroupWithBlank: true,
		roundLengths: true,
		// centeredSlides: true,
		pagination: {
			el: '.certy2-pagination',
			clickable: true,
		},
		navigation: {
			prevEl: '.certy2-button-prev',
			nextEl: '.certy2-button-next',
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
				slidesPerView: 3,
				spaceBetween: 30,
				slidesPerGroup: 1,
			},
			1025: {
				slidesPerView: 5,
				spaceBetween: 45,
				slidesPerGroup: 1,
			},
		},
	});

	
	/*查看大图*/
    var image = new Viewer(document.getElementById('certy2'), {
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