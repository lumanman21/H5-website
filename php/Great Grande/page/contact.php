<?php
/*
Template Name: contact
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_contact',''); ?>" />
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

	<section class="c_form_box p100 bc_gradient">
		<div class="wrap">
			<div class="i_tit i_tit_c i_tit_s mb50">
				<h2>Take the first step to a prosperous future!</h2>
			</div>
			<div class="txt">
				<p>on't miss out on this incredible opportunity to be part of a groundbreaking company. Join us as an authorized dealer, and together, we can revolutionize the housing industry.</p>
				<p>Take the first step to a prosperous future by contacting us today at our <a href="">whatsapp: +86 19556516386</a></p>
				<p>Remember, success is there for those who are ready to take advantage of it. Be the driving force in your market and</br> become an authorized dealer of our exceptional foldable container homes.</p>
			</div>
			<?php echo do_shortcode( '[wpforms id="36"]' ); ?>
		</div>
	</section>

	<section class="c_box">
		<div class="wrap_l">
			<div class="c_info">
				<h5>Contact our team!</h5>
				<ul>
					<li>
						<div class="img">
							<img src="<?php bloginfo('template_url'); ?>/static/images/c_call.png" alt="">
							<h6>Call Us Today</h6>
						</div>
						<div class="txt">
							<p>Tel / Whatsapp：</p>
							<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><?php echo xintheme('whatsapp'); ?></a>
						</div>
					</li>
					<li>
						<div class="img">
							<img src="<?php bloginfo('template_url'); ?>/static/images/c_mail.png" alt="">
							<h6>Mail Information</h6>
						</div>
						<div class="txt">
							<p>Email: </p>
							<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
						</div>
					</li>
					<li>
						<div class="img">
							<img src="<?php bloginfo('template_url'); ?>/static/images/c_add.png" alt="">
							<h6>Our Location</h6>
						</div>
						<div class="txt">
							<p>Address:</p>
							<p><?php echo xintheme('address'); ?></p>
						</div>
					</li>
				</ul>
			</div>
			<div class="map"><?php echo do_shortcode( '[simpleMapNoApi]' ); ?></div>
		</div>
	</section>

	<section class="f_quote_box why_ad_box p80">
		<div class="why_ad wrap">
			<h6>
				Are you looking for 
				a lucrative business opportunity?<br>
				<span>Look no further!</span>
			</h6>
			<div class="txt">
				<p>
					We are a manufacturer of folding container houses, revolutionizing the housing industry with our innovative and sustainable solutions. With over 10 years of experience in the marketing industry, we are seeking dynamic and driven individuals to join our network as authorized dealers.
				</p>
				<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank" class="i_more mt30"><b>Become our authorized dealer</b></a>
			</div>
			
		</div>
	</section>

	<section class="how_to p80 bc_black">
		<div class="wrap">
			<h5>How to？</h5>
			<ul class="how_list">
				<?php
					$faq = xintheme('faq');
					if($faq){
					foreach($faq as $value):
					$img_id = $value['c_pic'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				?>
				<li>
					<h6><span>Q:</span><?php echo $value['c_q'] ?></h6>
					<div class="how_txt">
						<div class="txt">
							<span>A:</span>
							<p><?php echo $value['c_a'] ?></p>
							<img src="<?php echo $img_src[0]; ?>" />
						</div>
					</div>
				</li>
				<?php endforeach; } ?>

			</ul>
			<a href="javascript:;" onclick="asfrom()" class="i_more mt30"><b>Contact us for more information</b></a>
		</div>
		<script>
			var howList = $('.how_list li');
			howList.find('h6').click(function() {
				var parentLi = $(this).parent();
				var howTxt = parentLi.find('.how_txt');
				if (howTxt.is(':hidden')) {
					howList.find('.howTxt').slideUp('fast');
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



</main>






<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>