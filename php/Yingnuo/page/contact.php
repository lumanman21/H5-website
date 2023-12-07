<?php
/*
Template Name: contact
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_c.webp" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>Contact us</h2>
			<div class="breadcrumbs">
				<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>
<main>
	<section class="c_form_box m70">
		<div class="wrap">
			<div class="i_tit i_tit_c mb50">
				<h2>CONTACT US!</h2>
			</div>
			<div class="txt">
				<p>We provide sophisticated, one-stop-shop solutions to meet our customers' specific demands. 
				</br>Your ideas are highly welcomed, we are capable of fulfilling customized orders too.</p>
			</div>
			<?php echo do_shortcode( '[wpforms id="73"]' ); ?>
		</div>
	</section>
	<section class="c_box">
		<div class="wrap_r">
			<div class="map">
				<div id="simpleMap" style="overflow:hidden; width:100%; margin:0 auto; position: relative;">
					<div class="fluid-width-video-wrapper" style="padding-top:1px !important;">
						<iframe
							src="https://maps.google.com/maps?q=31.814116281145736,117.2346699628896&hl=en;z=14&amp;output=embed"
							width="100%" frameborder="0" title="Our Location in google map"
							style="height:800px; width:100%;  padding:0 !important;" allowfullscreen="">
						</iframe>
					</div>
				</div>
			</div>
			<div class="c_info">
				<h5>Contact our team!</h5>
				<ul>
				<li>
						<div class="img">
							<div class="ico">
								<img src="<?php bloginfo('template_url'); ?>/static/images/c_add.png" alt="">
							</div>
						</div>
						<div class="txt">
							<p>Address:</p>
							<a href="javascript:;"><?php echo xintheme('address'); ?></a>
						</div>
					</li>
					<li>
						<div class="img">
							<div class="ico">
								<img src="<?php bloginfo('template_url'); ?>/static/images/c_call.png" alt="">
							</div>
						</div>
						<div class="txt">
							<p>Wechat / Whatsapp</p>
							<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><?php echo xintheme('whatsapp'); ?></a>
						</div>
					</li>
					<li>
						<div class="img">
							<div class="ico">
								<img src="<?php bloginfo('template_url'); ?>/static/images/c_mail.png" alt="">
							</div>
						</div>
						<div class="txt">
							<p>Email: </p>
							<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
						</div>
					</li>
					
				</ul>
			</div>
			
		</div>
	</section>



	<section class="how_to p80">
		<img src="<?php bloginfo('template_url'); ?>/static/images/round3.png" alt="">
		<div class="wrap">
			<ul class="how_list">
				<?php
					$c_faq = xintheme('c_faq');
					if($c_faq){
					foreach($c_faq as $value):
				?>
				
				<li>
					<h6><?php echo $value['c_q'] ?></h6>
					<div class="how_txt">
						<div class="txt">
							<p><?php echo $value['c_a'] ?></p>
						</div>
					</div>
				</li>
				<?php endforeach; } ?>

				
			</ul>
			<a href="javascript:;" onclick="asfrom()" class="i_more mt30"><b>Contact us for accurate response <i></i> </b></a>
		</div>
		<script>
			var howList = $('.how_list li');
			var firstHowTxt = howList.first().find('.how_txt');
			firstHowTxt.slideDown('fast');
			howList.first().find('h6').addClass('curr');

			howList.find('h6').click(function () {
				var parentLi = $(this).parent();
				var howTxt = parentLi.find('.how_txt');
				
				if (howTxt.is(':hidden')) {
					howList.find('.how_txt').slideUp('fast');
					howList.find('h6').removeClass('curr');
					howTxt.slideDown('fast');
					$(this).addClass('curr');
				} else {
					howTxt.slideUp('fast');
					$(this).removeClass('curr');
				}
			});
		</script>
	</section>

	<div class="bc2"></div>

	
</main>





<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>