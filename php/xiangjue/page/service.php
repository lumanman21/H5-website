<?php
/*
Template Name: service
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_s.webp" />
	</div>
	<div class="wrap">
		<h2>service</h2>
	</div>
</div>
<div class="in_position">
	<div class="wrap container">
	<a href="">Home</a>
	<a href="">Products</a>
	<a href="">Excavators</a>
	</div>
</div>

<main>
	
	<!-- custom_we -->
    <div class="custom_we">
		<div class="i_tit center">
			<span>our services</span>
			<h2>Quality assurance<br>professional service</h2>
		</div>
		<div class="custom_we_area">
            <div class="custom_we_all wrap">
				<ul class="custom_we_ul" id="tab_tit3">
					<?php
						$in_service = xintheme('in_service');
						if($in_service){
						foreach($in_service as $value):
						
					?>
					<li>
						<h4><span><?php echo $value['in_service_tit'] ?></span></h4>
						<h5>
							<?php echo $value['in_service_txt'] ?>
						</h5>
					</li>
					<?php endforeach; } ?>
					
				</ul>
				<div class="custom_we_img" id="tab_cont3">
					<?php
						$in_service = xintheme('in_service');
						if($in_service){
						foreach($in_service as $value):
						$img_id = $value['in_service_pic'];
						$img_src = wp_get_attachment_image_src( $img_id, 'full' );
					?>
					<img class="sublist" src="<?php echo $img_src[0]; ?>" />
					<?php endforeach; } ?>
				</div>
			</div>
			<div class="custom_we_all custom_we_alls wrap">
				<ul class="custom_we_ul" id="tab_tit4">
					<?php
						$in_service3 = xintheme('in_service3');
						if($in_service3){
						foreach($in_service3 as $value):
						
					?>
					<li>
						<h4><span><?php echo $value['in_service_tit3'] ?></span></h4>
						<h5>
							<?php echo $value['in_service_txt3'] ?>
						</h5>
					</li>
					<?php endforeach; } ?>
				</ul>
				<div class="custom_we_img" id="tab_cont4">
					<?php
						$in_service3 = xintheme('in_service3');
						if($in_service3){
						foreach($in_service3 as $value):
						$img_id = $value['in_service_pic3'];
						$img_src = wp_get_attachment_image_src( $img_id, 'full' );
					?>
					<img class="sublist" src="<?php echo $img_src[0]; ?>" />
					<?php endforeach; } ?>
				</div>
			</div>
			<div class="custom_we_all wrap">
				<ul class="custom_we_ul" id="tab_tit5">
					<?php
						$in_service2 = xintheme('in_service2');
						if($in_service2){
						foreach($in_service2 as $value):
						
					?>
					<li>
						<h4><span><?php echo $value['in_service_tit2'] ?></span></h4>
						<h5>
							<?php echo $value['in_service_txt2'] ?>
						</h5>
					</li>
					<?php endforeach; } ?>
				</ul>
				<div class="custom_we_img" id="tab_cont5">
					<?php
						$in_service2 = xintheme('in_service2');
						if($in_service2){
						foreach($in_service2 as $value):
						$img_id = $value['in_service_pic2'];
						$img_src = wp_get_attachment_image_src( $img_id, 'full' );
					?>
					<img class="sublist" src="<?php echo $img_src[0]; ?>" />
					<?php endforeach; } ?>
				</div>
			</div>
			<i class="adavantage_i"></i>
		</div>
	</div>
	<script>
        if(screen.width > 960){
			const imageWrapper = document.querySelector('.custom_we_area');
			const image = document.querySelector('.adavantage_i');
			function handleScroll() {
				const scrollTop = window.pageYOffset;
				const imageTop = imageWrapper.offsetTop;
				const windowHeight = window.innerHeight;
				// 屏幕可用高度
				const pmHeight =  window.innerHeight;
				const distanceFromTop = scrollTop - imageTop + windowHeight / 4 - pmHeight + (pmHeight / 6);
				// console.log(distanceFromTop / windowHeight);
				// console.log(distanceFromTop);
				let i_height = 0;

				if (distanceFromTop > 0) {
					i_height = (distanceFromTop / windowHeight) * 100;
				}
				
				// if (distanceFromTop > windowHeight / 2) {
				// 	i_height = 100;
				// }

				image.style.height = `${i_height}%`;
				
			}
			window.addEventListener('scroll', handleScroll);
		}		
	</script>
    <script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
	<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
	<script>
		$("#tab_tit3").tabso({
			cntSelect:"#tab_cont3",
			tabEvent:"mouseover",
			tabStyle:"hide"
		});
		$("#tab_tit4").tabso({
			cntSelect:"#tab_cont4",
			tabEvent:"mouseover",
			tabStyle:"hide"
		});
		$("#tab_tit5").tabso({
			cntSelect:"#tab_cont5",
			tabEvent:"mouseover",
			tabStyle:"hide"
		});
		
	</script>


	<dl class="b_num_list m120 wrap">
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
	<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
	<script>$('.roll_num').countUp();</script>


	<section class="in_ad p100">
		<div class="wrap">
			<div class="i_tit center">
				<h2>our advantages</h2>
				<h6>China and even Asia's largest second-hand construction machinery trading company!</h6>
			</div>
			<ul class="ad_list mt80">
				<li>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/ad1.png" alt="">
					</div>
					<h6>large quantity of spot goods</h6>
					<p>
						The company has a large number of spot to choose from, complete brand models, China and even Asia's largest second-hand construction machinery trading company!
					</p>
				</li>
				<li>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/ad2.png" alt="">
					</div>
					<h6>Maintenance</h6>
					<p>
						Professional team to ensure that your machine is super long service.
					</p>
				</li>
				<li>
					<div class="img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/ad3.png" alt="">
					</div>
					<h6>Warranty</h6>
					<p>
						Super long-term warranty is our confidence in quality and commitment.
					</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="in_cooper m140">
		<div class="wrap">
			<div class="ip_tit">
				<div class="i_tit">
					<span>cooperative partners</span>
					<h2>Integrity management cooperation and mutual win</h2>
				</div>
				<div class="txt">
					With KOMATSU/ Komatsu, HITACHI/ Hitachi, CAT/ Carter, KOBELCO/ Kobelco, DOOSAN/ Doosan, VOLVO/ Volvo, SANY/ SANY Heavy Industry, has a long-term strategic relationship, adhering to the "quality of the brand, service reputation" business purpose. Let every customer become our lifelong user, to provide users around the world with high quality used construction machinery.
				</div>
			</div>
			<div class="i_brand mt100">
				<div class="i_brand_list swiper-container swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode">
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

	
</main>








<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>