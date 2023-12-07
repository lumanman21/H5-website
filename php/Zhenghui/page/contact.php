<?php
/*
Template Name: contact
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<!-- banner -->
<div class="in_banner">
	<img src="<?php echo xintheme_img('in_banner_contact',''); ?>" alt="">
	<div class="in_banner_text wrap">
		<h2>Contact us</h2>
	</div>
</div>

<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container"><?php echo in_breadcrumbs(); ?></div>
</div>


<main>
	<section class="in_contact wrap wow slideInUp">
		<div class="i_tit"><h2>Contact Us</h2></div>
		<div class="contact_cont">
			<ul class="c_list">
				<li>
					<div class="ico"><svg t="1695027137844" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="22495" width="36" height="36"><path d="M732.096 896c-105.696 0-319.968-109.088-422.784-212.32-102.784-103.264-211.392-318.496-211.392-424.64C97.92 259.04 178.912 128 231.776 128s211.392 159.232 158.528 212.352c-52.864 53.056-105.696 53.056-105.696 106.144s52.832 106.144 105.696 159.232c52.832 53.088 105.696 106.144 158.528 106.144 52.864 0 52.864-53.056 105.696-106.144 52.832-53.088 211.392 106.144 211.392 159.232 0 53.088-133.824 131.04-133.824 131.04z" fill="#ffffff" p-id="22496"></path></svg></div>
					<span>
						<p>TEL / WhatsApp:</p>
						<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
					</span>
				</li>
				<li>
					<div class="ico"><svg t="1695027513492" class="icon" viewBox="0 0 1031 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="36626" width="32" height="32"><path d="M505.6 550.4c6.4 0 12.8 0 12.8 0L1024 217.6 1024 204.8 0 204.8l0 12.8L505.6 550.4z" fill="#ffffff" p-id="36627"></path><path d="M537.6 595.2C531.2 601.6 518.4 601.6 512 601.6c-6.4 0-12.8 0-19.2-6.4L0 275.2 0 896c0 25.6 19.2 51.2 51.2 51.2l928 0c25.6 0 51.2-19.2 51.2-51.2L1030.4 275.2 537.6 595.2z" fill="#ffffff" p-id="36628"></path></svg></div>
					<span>
						<p>E-mail:</p>
						<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
						<a href="mailto:<?php echo xintheme('email2'); ?>" target="_blank"><?php echo xintheme('email2'); ?></a>
					</span>
				</li>
				<li>
					<div class="ico"><svg t="1695027598656" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="37687" width="32" height="32"><path d="M512.768 1024H512a65.536 65.536 0 0 1-47.283-20.224c-9.677-10.112-97.434-102.656-184.73-219.904C162.15 625.664 102.4 499.456 102.4 408.909 102.4 183.424 286.157 0 512 0s409.6 183.424 409.6 408.883c0 54.784-21.12 121.907-62.746 199.45-40.166 74.777-100.556 161.638-179.532 258.201l-0.64 0.768-117.53 134.4A64.589 64.589 0 0 1 512.768 1024zM512 600.294c105.728 0 191.744-85.862 191.744-191.41S617.728 217.471 512 217.471s-191.744 85.862-191.744 191.411S406.272 600.294 512 600.294z" fill="#ffffff" p-id="37688"></path></svg></div>
					<span>
						<p>Address:</p>
						<h5><?php echo xintheme('address'); ?></h5>
					</span>
				</li>
			</ul>
			<div class="c_form">
				<?php echo do_shortcode( '[wpforms id="37"]' ); ?>
			</div>
		</div>
	</section>

	<section class="c_map m60 wrap wow slideInUp">
		<iframe
			src="https://maps.google.com/maps?q=32.295803352044395,118.40973865165114&hl=en&z=16&output=embed"
			width="100%"
			frameborder="0"
			title="Chuzhou Zhenghui Technology Co. , Ltd."
			allowfullscreen=""
			>
		</iframe>
	</section>
</main>






<!-- Footer -->
<?php get_footer(); ?>

</body>
</html>