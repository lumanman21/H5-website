<?php
/*
Template Name: R&D
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_capabilty.webp" />
	</div>
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>

<!-- anchor -->
<?php get_template_part('capability_list') ?>

<main>

	<section class="in_content wrap m60">
		<div class="i_tit"><h2>R&D team</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<ul class="rd_list m40">
			<li>
				<h6>WHO WE ARE</h6>
				<dl>
					<dd><i></i><span><strong>R&D Team:</strong>Tongling Centre+ Shanghai Centre</span></dd>
					<dd><i></i><span><strong>R&D Personnel:</strong>Total is 35+ </span></dd>
					<dd><i></i><span><strong>Mainly for:</strong>Formula Development Engineer,Product Process Engineer,Packaging Engineer,Product Designer and Labortary Technicians</span></dd>
				</dl>
			</li>
			<li>
				<h6>WHAT WE DO</h6>
				<dl>
					<dd>
						<i></i>
						<span>
							<strong>Tongling Centre</strong>
							<p>
								Developments of formulas,packagings,substrates & processes for kinds of Wet wipes and Skin Care products；
								Various physical, chemical, and microbiological inspection, testing, and analysis centers; 
							</p>
						</span>
					</dd>
					<dd>
						<i></i>
						<span>
							<strong>Tongling Centre</strong>
							<p>
								Developments of formulas,packagings,substrates & processes for kinds of Wet wipes and Skin Care products；
								Various physical, chemical, and microbiological inspection, testing, and analysis centers; 
							</p>
						</span>
					</dd>
				</dl>
			</li>
			<li>
				<h6>WHAT WE HAVE</h6>
				<dl>
					<dd><i></i><span>Participants in complie and revision of the national standard "Wet Wipes" GB/T 27728-2011;</span></dd>
					<dd><i></i><span>Undertake the drafting process of the local standard "Antibacterial Wiping Cloth" DB 34/T 1294-2010 in Anhui Province, as well as the preparation of a series of industry standards;</dd>
					<dd><i></i><span>National level high-tech enterprise;</span></dd>
					<dd><i></i><span>Johnson&Johnson Global“PED”(Partner Enabled Development) Qualified Lab;</span></dd>
				</dl>
			</li>
			<li>
				<h6>WHAT WE WILL DO</h6>
				<dl>
					<dd><i></i><span>Establishing long-term industry university research cooperation with multiple universities;</span></dd>
					<dd><i></i><span>Research on extraction and fermentation processes based on plants</span></dd>
					<dd><i></i><span>Study in the field of synthetic biology;</span></dd>
				</dl>
			</li>
		</ul>
	</section>


	<section class="win">
		<div class="wrap">
			<div class="txt">
				<h6>let's win together</h6>
				<p>Please contact us for more information about our services.</p>
			</div>
			<button onclick="asfrom()" class="i_more"><iconify-icon icon="pepicons-pop:person-circle"></iconify-icon>Contact Us</button>
		</div>
	</section>

	<section class="npd wrap m100">
		<div class="i_tit"><h2>NPD Process </h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<ul class="npd_list m40">
			<?php
				$in_npd = xintheme('in_npd');
				if($in_npd){
				foreach($in_npd as $value):
				$img_id = $value['npd_pic'];
				$img_src = wp_get_attachment_image_src( $img_id, 'full' );
			?>
			<li>
				<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
				<div class="txt">
					<h6><?php echo $value['npd_tit'] ?></h6>
					<p><?php echo $value['npd_txt'] ?></p>
				</div>
			</li>
			<?php endforeach; } ?>

		</ul>
	</section>


	<section class="in_content wrap m100">
		<div class="i_tit mb30"><h2>R&D Center</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<h6 class="com_tit">R&D Center In Tongling</h6>
		<div class="txt"><img class="bor" src="<?php bloginfo('template_url'); ?>/static/images/rd_center.webp" alt=""></div>
	</section>

	<section class="n_rd wrap m100">
		<div class="txt">
			<h6 class="com_tit mb30">New R&D Center in Shanghai</h6>
			<p><i></i>Independent R&D dept & Marketing Dept for Cosmestic</p>
			<p><i></i>Independent Laboratory capable of conducting dermatological test</p>
			<div class="nrd_list swiper-container m40">
				<ul class="swiper-wrapper">
					<?php
						if( xintheme('n_rd') ){
						$n_rd = explode(',', xintheme('n_rd'));
						foreach ( $n_rd as $id ) :
						$img_src = wp_get_attachment_image_src( $id, 'full' );
						$img_caption = wp_get_attachment_caption($id);
					?>
					<li class="swiper-slide">
						<img src="<?php echo $img_src[0]; ?>" />
					</li>
					<?php endforeach; } ?>

				</ul>
				<div class="nrd-prev"></div>
				<div class="nrd-next"></div>
				<div class="nrd-pagination"></div>
			</div>
			<script>
				var swiper = new Swiper('.nrd_list', {
						loop: true,
						loopFillGroupWithBlank: true,
						//roundLengths: true,
						//centeredSlides: true,
						pagination: {
							el: '.nrd-pagination',
							clickable: true,
						},
						navigation: {
							prevEl: '.nrd-prev',
							nextEl: '.nrd-next',
						},
						autoplay: {
							delay: 4500,
							pauseOnMouseEnter:true,
							disableOnInteraction: false,
						},
						observer: true,
						observeParents: true,
						breakpoints: {
							0:{
								slidesPerView: 2,
								spaceBetween: '5',
								slidesPerGroup: 1,
							},
							1024: {
								slidesPerView: 2,
								spaceBetween: '15',
								slidesPerGroup: 1,
							},
						},
					});
			</script>
		</div>
		<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/nrd.webp" alt=""></div>
	</section>

	
</div>

</main>



<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>





<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>