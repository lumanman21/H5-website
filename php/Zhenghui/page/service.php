<?php
/*
Template Name: service
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="in_banner">
	<img src="<?php echo xintheme_img('in_banner_service',''); ?>" alt="">
	<div class="in_banner_text wrap">
		<h2>service</h2>
	</div>
</div>
<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container"><?php echo in_breadcrumbs(); ?></div>
</div>
<main>
	<section class="plan_area wrap">
		<div class="i_tit">
			<h2>Service Process</h2>
		</div>
		<!-- 内容 -->
		<div class="plan m100">
			<ul class="plan_ul">
				<li class="wow flipInY" data-wow-delay="0s">
					<img src="<?php bloginfo('template_url'); ?>/static/images/ser1.png" alt="">
					<i></i>
					<h3>Need to understand</h3>
				</li>
				<li class="wow flipInY" data-wow-delay="0.1s">
					<img src="<?php bloginfo('template_url'); ?>/static/images/ser2.png" alt="">
					<i></i>
					<h3>Proofing</h3>
				</li>
				<li class="wow flipInY" data-wow-delay="0.2s">
					<img src="<?php bloginfo('template_url'); ?>/static/images/ser3.png" alt="">
					<i></i>
					<h3>Confirm</h3>
				</li>
				<li class="wow flipInY" data-wow-delay="0.3s">
					<img src="<?php bloginfo('template_url'); ?>/static/images/ser4.png" alt="">
					<i></i>
					<h3>Production</h3>
				</li>
			</ul>
			<div class="plan_div"></div>
			<ul class="plan_ul">
				<li class="wow flipInY" data-wow-delay="0.3s">
					<img src="<?php bloginfo('template_url'); ?>/static/images/ser5.png" alt="">
					<i></i>
					<h3>After-sales</h3>
				</li>
				<li class="wow flipInY" data-wow-delay="0.2s">
					<img src="<?php bloginfo('template_url'); ?>/static/images/ser6.png" alt="">
					<i></i>
					<h3>Delivered without damage</h3>
				</li>
				<li class="wow flipInY" data-wow-delay="0.1s">
					<img src="<?php bloginfo('template_url'); ?>/static/images/ser7.png" alt="">
					<i></i>
					<h3>Test</h3>
				</li>
				<li class="wow flipInY" data-wow-delay="0s">
					<img src="<?php bloginfo('template_url'); ?>/static/images/ser8.png" alt="">
					<i></i>
					<h3>Mass production</h3>
				</li>
			</ul>
		</div>
	</section>


	<section class="service pt30 pb70">
		<div class="wrap">
			<div class="i_tit">
				<h2>After-sales service</h2>
			</div>
			<!-- 内容 -->
			<div class="service_area">
				<div class="service_left">
					<img src="<?php echo xintheme_img('in_service_pic',''); ?>" alt="">
				</div>
				<div class="service_right wow slideRight">
					<?php echo xintheme('in_service'); ?>
				</div>
			</div>
		</div>
	</section>


	<section class="faq p80">
		<div class="wrap">
			<div class="i_tit">
				<h2><span>FAQ</span></h2>
			</div>

			<ul class="faq_list">
				<?php
					$s_faq = xintheme('s_faq');
					if($s_faq){
					foreach($s_faq as $value):
				?>
				<li>
					<div class="txt">
						<h3>Q：<?php echo $value['s_q'] ?><i></i></h3>
						<p>A：<?php echo $value['s_a'] ?></p>
					</div>
				</li>
				<?php endforeach; } ?>

				
			</ul>
		</div>
	</section>
	<script>
		var faqList = $('.faq_list li');
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
</main>









<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>