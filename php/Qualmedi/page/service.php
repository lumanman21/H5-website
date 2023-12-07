<?php
/*
Template Name: service
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_service',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>SERVICE</h2>
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
		<h6>Products list</h6>
	  </div>
	  <ul class="menu_list">
		<li class="list"><a href="#oem">OEM</a></li>
		<li class="list"><a href="#agency">Regional Agency</a></li>
		<li class="list"><a href="#service">After-Sales Service</a></li>
		<li class="list"><a href="#consult">consult</a></li>
	  </ul>
	</div>
</div>

<section class="oem in_louti p100" id="oem">
	<img src="<?php bloginfo('template_url'); ?>/static/images/bc_oem.webp" alt="">
	<div class="wrap">
		<div class="img">
			<h6>Provide OEM services to partners professionally and efficiently</h6>
			<img src="<?php bloginfo('template_url'); ?>/static/images/oem.webp" alt="">
		</div>
		<div class="txt">
			<p>1. Provide complete OEM.</p>
			<p>2. Packaging, Machine Logo, Project Character are customized.</p>
			<p>3. For long-term customer or large order, we can provide multiple color of appearance.</p>
			<p>4. Customer information confidentiality policy.</p>
			<ul class="oem_num mt80">
				<li>
					<h5><span class="roll_num">10</span>+</h5>
					<p>industry experience</p>
				</li>
				<li>
					<h5><span class="roll_num">100</span>+</h5>
					<p>patent</p>
				</li>
				<li>
					<h5><span class="roll_num">50</span>+</h5>
					<p>exporting country</p>
				</li>
				<li>
					<h5><span class="roll_num">98</span>%</h5>
					<p>Customer satisfaction</p>
				</li>
			</ul>
			<a onclick="asfrom()" href="javascript:;" class="i_more i_more_color i_btn"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_call.png" alt="">Contact us</a>
		</div>
	</div>
	<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
	<script src="<?php bloginfo('template_url'); ?>/static/js/roll-num.js"></script>
	<script>$('.roll_num').countUp();</script>
</section>

<section class="in_louti" id="agency">
	<div class="agency ">
		<div class="i_tit">
			<h2>Regional Agency</h2>
		</div>
	</div>
	<ul class="agency_list wrap">
		<li>
			<span>Requirments</span>
			<?php echo xintheme('agency'); ?>
		</li>
		<li>
			<span>Requirments</span>
			<?php echo xintheme('rights'); ?>
			
		</li>
	</ul>
	
</section>


<section class="service in_louti mt80 pb100" id="service">
	<img src="<?php bloginfo('template_url'); ?>/static/images/bc_map.webp" alt="">
	<div class="wrap">
		<div class="ser">
			<div class="i_tit i_tit_l">
				<h2>After-Sales Service</h2>
			</div>
			<ul class="ser_list">
				<?php
					$in_sales = xintheme('in_sales');
					if($in_sales){
					foreach($in_sales as $value):
				?>
				<li>
					<h6><?php echo $value['in_sales_tit'] ?></h6>
					<p>
						<?php echo $value['in_sales_txt'] ?>
					</p>
				</li>
				<?php endforeach; } ?>

				<div class="process_s"></div>
			</ul>
			<script>
				$('.ser_list li:first').addClass('curr');
				var faqList = $('.ser_list li');
				faqList.click(function() {
				var p = $(this).find('p');
				if (p.is(':hidden')) {
					faqList.find('p').slideUp('fast');
					faqList.removeClass('curr');
					p.slideDown('fast');
					$(this).addClass('curr');
				} else {
					p.slideUp('fast');
					$(this).removeClass('curr');
				}
				});
			</script>
		</div>
		<ul class="img_list">
			<li><img src="<?php bloginfo('template_url'); ?>/static/images/other/s1.png" alt=""><img src="<?php bloginfo('template_url'); ?>/static/images/other/s2.png" alt=""></li>
			<li><img src="<?php bloginfo('template_url'); ?>/static/images/other/s3.png" alt=""></li>
		</ul>
	</div>
</section>


<section class="o_quote_box in_louti pt70 pb120" id="consult">
	<div class="o_quote wrap">
		<div class="i_tit">
			<h2>Contact Form</h2>
		</div>
		<h6>
			Qualmedi is a high-tech enterprise dedicated to providing medical solutions for human health.
			Welcome to leave us a message, we will reply to you as soon as we receive it.
		</h6>
		<div class="o_form">
			<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
			<?php echo do_shortcode( '[wpforms id="57"]' ); ?>
		</div>
	</div>
</section>




	

<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>






<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>