<?php
/*
Template Name: partner_recruitment
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_pr',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>Partner Recruitment</h2>
			<div class="breadcrumbs">
			<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>


<main>
	<section class="ip_box wrap_l">
		<img src="<?php bloginfo('template_url'); ?>/static/images/logo_font.png" alt="">
		<img src="<?php bloginfo('template_url'); ?>/static/images/logo_font.png" alt="">
		<div class="content opp">
			<div class="txt">
				<div class="i_tit i_tit_l i_tit_s">
					<h2>
						Are you looking for </br>
						a lucrative business opportunity?</br>
						<span>Look no further!</span>
					</h2>
				</div>
				<article>
					We are a manufacturer of folding container houses, revolutionizing the housing industry with our innovative and sustainable solutions. With over 10 years of experience in the marketing industry, we are seeking dynamic and driven individuals to join our network as authorized dealers.
				</article>
			</div>
			<div class="img">
				<img src="<?php bloginfo('template_url'); ?>/static/images/other/pr1.webp" alt="">
			</div>
		</div>
		
	</section>

	<section class="reason p100 bc_gradient">
		<div class="i_tit i_tit_s">
			<h2>
				Why become our authorized dealer? </br>
				Why choose our Folding Container House? 
			</h2>
		</div>
		
		<a href="javascript:;" class="i_more i_more_c mt30"><b>Here are just a few reasons:</b></a>
		<div class="wrap mt60">
			<div class="img_box">
				<?php
					if( xintheme('in_ad_pic') ){
					$in_ad_pic = explode(',', xintheme('in_ad_pic'));
					foreach ( $in_ad_pic as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
				<?php endforeach; } ?>
				
			</div>
			<ul class="rea_list">
				<?php
					$in_ad = xintheme('in_ad');
					if($in_ad){
					foreach($in_ad as $value):
					$img_id = $value['in_ad_ico'];
					$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				?>
				<li>
					<div class="rea_tit">
						<img src="<?php echo $img_src[0]; ?>" /><p><?php echo $value['in_ad_tit'] ?></p>
					</div>
					<div class="a_ad_txt">
						<?php echo $value['in_ad_txt'] ?>
					</div>
				</li>
				<?php endforeach; } ?>
				
				
			</ul>
			<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
			<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
			<script>
			$(".rea_list").tabso({
				cntSelect:".img_box",
				tabEvent:"hover",
				tabStyle:"normal"
			});
			</script>
			<script>
			$('.rea_list').find('li').find('.rea_tit').each(function(i){
			$(this).parent('li').hover(function(){
				if($(this).hasClass('liNow')){
				$('.rea_list').find('li').find('.rea_tit').removeClass('liNow');
				$('.rea_list').find('li').removeClass('liNow');
				$('.rea_list').find('.a_ad_txt').slideUp(300);
				}else{
					$('.rea_list').find('li').find('.rea_tit').removeClass('liNow');
					$('.rea_list').find('li').removeClass('liNow');
					$('.rea_list').find('.a_ad_txt').slideUp(300);
					$(this).addClass('liNow');
					$('.rea_list').find('li').eq(i).addClass('liNow');
					$('.rea_list').find('.a_ad_txt').eq(i).slideToggle(300);
				}
				})
			})
			</script>
		</div>
	</section>



	<section class="why_box">
		<ul class="why_list">
			<?php
				$in_p_r = xintheme('in_p_r');
				if($in_p_r){
				foreach($in_p_r as $value):
				$img_id = $value['in_pr_pic'];
				$img_src = wp_get_attachment_image_src( $img_id, 'full' );
			?>
		
			<li>
				<div class="wrap">
					<div class="txt">
						<div class="i_tit i_tit_l">
							<h2>
								<p><?php echo $value['in_pr_tit'] ?></p>
								<?php echo $value['in_pr_tit2'] ?></h2>
						</div>
						<article>
							<?php echo $value['in_pr_txt'] ?>
						</article>
					</div>
					<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
				</div>
			</li>
			<?php endforeach; } ?>

		</ul>
	</section>


	<section class="c_form_box p100 bc_gradient">
		<div class="wrap">
			<div class="i_tit i_tit_c i_tit_s mb50">
				<h2>Take the first step to a prosperous future!</h2>
			</div>
			<div class="txt">
				<p>on't miss out on this incredible opportunity to be part of a groundbreaking company. Join us as an authorized dealer, and together, we can revolutionize the housing industry.</p>
				<p>Take the first step to a prosperous future by contacting us today at our <a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank">whatsapp: <?php echo xintheme('whatsapp'); ?></a></p>
				<p>Remember, success is there for those who are ready to take advantage of it. Be the driving force in your market and</br> become an authorized dealer of our exceptional foldable container homes.</p>
			</div>
			<?php echo do_shortcode( '[wpforms id="36"]' ); ?>
		</div>
	</section>



</main>







<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>