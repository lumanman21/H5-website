<?php
/*
Template Name: oem
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_oem',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>OEM</h2>
			<div class="breadcrumbs">
			<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>


<main>
	<section class="oem pt100 pb30">
		<div class="wrap">
			<div class="i_tit">
				<h2><span>One-Stop Customizable Service</span></h2>
			</div>
			<h5>Customizable From Head To Handle</h5>
			<h6>We offer fully customized nail brushes to satisfydiverse market needs</h6>
			<ul class="oem_list m80">
				<li>
					<dl>
						<dt>
							<div class="ico ll_btn btn-pink btn-bubbles">01</div>
							<div class="txt">
								<h4>Brush Hair</h4>
								<p>Well-selected kolinsky hair&nylon hair for your choice.</p>
							</div>
						</dt>
						<dt>
							<div class="ico ll_btn btn-pink btn-bubbles">02</div>
							<div class="txt">
								<h4>Ferrule</h4>
								<p>Aluminum,copper&plastic ferrules for different designs.</p>
							</div>
						</dt>
						<dt>
							<div class="ico ll_btn btn-pink btn-bubbles">03</div>
							<div class="txt">
								<h4>Handle</h4>
								<p>Wood&plastic acrylic,metal,diamond,liquid handles in different shapes&colors.</p>
							</div>
						</dt>
					</dl>
				</li>
				<li>
					<img src="<?php bloginfo('template_url'); ?>/static/images/other/oem.webp" alt="">
				</li>
				<li>
					<dl>
						<dt>
							<div class="ico ll_btn btn-pink btn-bubbles">04</div>
							<div class="txt">
								<h4>Logo Printing</h4>
								<p>Exquisite logo printing to enhance your brand visibility.</p>
							</div>
						</dt>
						<dt>
							<div class="ico ll_btn btn-pink btn-bubbles">05</div>
							<div class="txt">
								<h4>Package</h4>
								<p>Custom package to fit your brand indentity&attract customers.</p>
							</div>
						</dt>
					</dl>
				</li>
			</ul>
		</div>
	</section>


	<section class="process pt80">
		<div class="wrap">
			<div class="i_tit">
				<h2><span>Production Process</span></h2>
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


	<!-- custom_we -->
	<section class="custom_we">
		<div class="i_tit">
			<h2><span>Advantage</span></h2>
		</div>

		<div class="custom_we_area mt70 p70">
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
	</section>
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
		
	</script>


	<section class="o_quote_box pt60">
		<div class="o_quote wrap">
			<div class="i_tit">
				<h2><span>CONSULT OEM</span></h2>
			</div>
			<h6>
				Our main products are: nail lamp,nail brush,nail drill bit,nail drill machine,nail fileand so on.We support customization.
				Welcome to leave us a message, we will reply to you as soon as we receive it.
			</h6>

			<?php echo do_shortcode( '[wpforms id="87"]' ); ?>
			
		</div>
	</section>


	
</main>
<div class="foot_space"></div>
	









<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>