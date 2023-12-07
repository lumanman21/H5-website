<?php
/*
Template Name: oem
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>




<!-- banner -->
<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_o.webp" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>oem/odm</h2>
			<div class="breadcrumbs">
				<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>

<main>

	<!-- custom_we -->
	<section class="oem">
		<img src="<?php bloginfo('template_url'); ?>/static/images/round1.png" alt="">
		<section class="custom_we">
			<div class="i_tit">
				<h2>One-Stop Customizable Service</h2>
				<h6>Most of our items are designed and open tooling by ourselves with world widely patents. Both our own design and OEM projects for clients are popular and successful in the market. </h6>
			</div>
	
			<div class="custom_we_area mt70">
				<div class="custom_we_all wrap">
					<ul class="custom_we_ul" id="tab_tit3">
						<?php
							$in_oem = xintheme('in_oem');
							if($in_oem){
							foreach($in_oem as $value):
							
						?>
						<li>
							<h4><span><?php echo $value['in_oem_tit'] ?></span></h4>
							<h5>
								<?php echo $value['in_oem_txt'] ?>
							</h5>
						</li>
						<?php endforeach; } ?>
					</ul>
					<div class="custom_we_img" id="tab_cont3">
						<?php
							$in_oem = xintheme('in_oem');
							if($in_oem){
							foreach($in_oem as $value):
							$img_id = $value['in_oem_pic'];
							$img_src = wp_get_attachment_image_src( $img_id, 'full' );
						?>
						<img class="sublist" src="<?php echo $img_src[0]; ?>" />
						<?php endforeach; } ?>

					</div>
				</div>
				<div class="custom_we_all custom_we_alls wrap">
					<ul class="custom_we_ul" id="tab_tit4">
						<?php
							$in_oem2 = xintheme('in_oem2');
							if($in_oem2){
							foreach($in_oem2 as $value):
							
						?>
						<li>
							<h4><span><?php echo $value['in_oem_tit2'] ?></span></h4>
							<h5>
								<?php echo $value['in_oem_txt2'] ?>
							</h5>
						</li>
						<?php endforeach; } ?>
					</ul>
					<div class="custom_we_img" id="tab_cont4">
						<?php
							$in_oem2 = xintheme('in_oem2');
							if($in_oem2){
							foreach($in_oem2 as $value):
							$img_id = $value['in_oem_pic2'];
							$img_src = wp_get_attachment_image_src( $img_id, 'full' );
						?>
						<img class="sublist" src="<?php echo $img_src[0]; ?>" />
						<?php endforeach; } ?>
					</div>
				</div>
				<i class="adavantage_i"></i>
			</div>
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script>
				if(screen.width > 960){
					const imageWrapper = document.querySelector('.custom_we');
					const image = document.querySelector('.adavantage_i');
					function handleScroll() {
					const scrollTop = window.pageYOffset;
					const imageTop = imageWrapper.offsetTop;
					const windowHeight = window.innerHeight;
					// 屏幕可用高度
					const pmHeight =  window.innerHeight;
					const distanceFromTop = scrollTop - imageTop + windowHeight / 2 - pmHeight + (pmHeight / 2);
					// console.log(scrollTop);
					let i_height = 0;
		
					if (distanceFromTop > 0) {
						i_height =( (distanceFromTop / windowHeight)) * 100 ;
					}
					
					// if (distanceFromTop > windowHeight / 2) {
					// 	i_height = 100;
					// }
				
					image.style.height = `${i_height}%`;
					
					}
					window.addEventListener('scroll', handleScroll);
				}		
			</script>
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
				
			</script>
		</section>

		
		<section class="process pt80">
			<div class="wrap">
				<div class="i_tit">
					<h2><span>CUSTOMIZATION PROCESS</span></h2>
				</div>
				<ul class="process_list mt70">
				<?php
					$in_process = xintheme('in_process');
					if($in_process){
					$num = 1;
					foreach($in_process as $value):
					$img_id = $value['in_process_pic'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				?>
				<li>
					<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
					<h6><?php echo $num; ?></h6>
					<p><?php echo $value['in_process_txt'] ?></p>
				</li>
				<?php $num++;  endforeach; } ?>
				
					
				</ul>
			</div>
		</section>
	</section>
	

	<section class="i_partner p70">
		<div class="i_tit">
		<h2>These well-known brands continue to<br> collaborate with us</h2>
		<h6>
			We are working with distributors from the US and Europe for our inline items and also designing suitable collections for them specially. We provide sophisticated, one-stop-shop solutions to meet our customers' specific demands. Your ideas are highly welcomed, we are capable of fulfilling customized orders too.
		</h6>
		</div>
		<div class="par_partner_box">
			<div class="par_partner">
				<div class="par_partner_list swiper-container">
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
		</div>
		<script>
			var pswiper = new Swiper('.par_partner_list', {
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
	</section>

	<div class="bc1"></div>
	<section class="o_quote_box bor pt60">
		<div class="o_quote wrap">
			<div class="i_tit i_tit_w">
				<h2>CONSULT OEM/odm</h2>
			</div>
			<h6>
			Our main products are: nail lamp,nail brush,nail drill bit,nail drill machine,nail fileand so on.We support customization.
Welcome to leave us a message, we will reply to you as soon as we receive it.
			</h6>
			<?php echo do_shortcode( '[wpforms id="101"]' ); ?>
		</div>
	</section>


	
</main>









<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>