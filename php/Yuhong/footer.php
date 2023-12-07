<div class="com_form p60">
	<div class="wrap">
		<h6>SUBSCRIBE TO OUR NEWSLETTER</h6>
		<p>we can give customers the most competitive price to meet your budget.</p>
		<?php echo do_shortcode( '[wpforms id="26"]' ); ?>
	</div>
</div>
<!-- Footer -->
<footer>
	<dl class="f_cont wrap">
		<dt class="f_contact">
			<div class="f_logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</div>
			<ul>
				<li>
					<iconify-icon icon="mdi:address-marker"></iconify-icon>
					<p>
						<?php echo xintheme('address'); ?>
					</p>
				</li>
				<li>
					<iconify-icon icon="fluent:call-20-filled"></iconify-icon>
					<p>
						<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?>;</a>
						<a href="tel:<?php echo xintheme('tel2'); ?>" target="_blank"><?php echo xintheme('tel2'); ?></a>
					</p>
				</li>
				
				<li>
					<iconify-icon icon="tabler:mail-filled"></iconify-icon>
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
				</li>
				<li>
					<iconify-icon icon="ri:whatsapp-fill"></iconify-icon>
					<p>
						<a rel="nofollow" href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><?php echo xintheme('whatsapp'); ?>;</a>
						<a rel="nofollow" href="https://wa.me/<?php echo xintheme('whatsapp2'); ?>" target="_blank"><?php echo xintheme('whatsapp2'); ?></a>
					</p>
				</li>
			</ul>
		</dt>
		<dt class="f_nav">
			<h2 class="f_tit">Products</h2>
			<ul>
				<?php
					$args = array(
						'child_of'     => 2,
						'parent'       => 2,
						'hide_empty'   => 0,
						'orderby'      => 'id',
						'order'        => 'ASC',
					);
					$categories = get_categories( $args );
					foreach ( $categories as $cat ) {
						$category_data = get_term_meta($cat->term_id, 'category_options', true);
				?>
				<li>
					<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
						<?php echo esc_html( $cat->name ); ?>                                          <!-- 名称 -->
					</a>
				</li>
				<?php } ?>
			</ul>
		</dt>
		<dt class="f_nav">
			<h2 class="f_tit">Quick Link</h2>
			<ul>
				<li><a href="<?php bloginfo('url'); ?>" rel="nofollow">Home</a></li>
				<li><a href="<?php echo get_permalink(2); ?>" rel="nofollow">About Us</a></li>
				<li><a href="<?php echo get_category_link(3); ?>" rel="nofollow">News</a></li>
				<li><a href="<?php echo get_permalink(7); ?>" rel="nofollow">Contact Us</a></li>
			</ul>
		</dt>
		<dt class="f_media">
			<li><a href="<?php echo xintheme('consultation_facebook_url'); ?>" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_url'); ?>/static/images/facebook1.png" alt=""></a></li>
			<li><a href="<?php echo xintheme('consultation_linkedin_url'); ?>" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_url'); ?>/static/images/linkedin1.png" alt=""></a></li>
			<li><a href="<?php echo xintheme('consultation_twitter_url'); ?>" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_url'); ?>/static/images/twitter1.png" alt=""></a></li>
			<li><a href="<?php echo xintheme('consultation_youtube_url'); ?>" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_url'); ?>/static/images/youtube1.png" alt=""></a></li>
		</dt>
	</dl>
	<div class="f_copy wrap">
		<p>
			&copy; 2023 <?php echo xintheme('i_name'); ?> Design by Anhuilingju. 
		</p>
		<a href="<?php echo get_permalink(3); ?>" rel="nofollow">Privacy Policy</a>
	</div>
	<!-- 侧边客服 -->
	<aside class="aside_right">
		<ul>
			<li>
				<a href="javascript:void(0)"><em></em></a>
				<div class="side_tel_box">
					<img src="<?php echo xintheme_img('qr',''); ?>" alt="">
				</div>
			</li>
			<li>
				<a><em></em></a>
				<div class="side_tel_box">
					<h6>
						<a href="tel:+86 551 62831031">+86 551 62831031</a>
					</h6>
				</div>
			</li>
			<li onclick="asfrom()">
				<a href="javascript:void(0)"><em></em></a>
			</li>
			<li onClick="goTop()">
				<a>
					<div><em></em></div>
				</a>
			</li>
		</ul>
	</aside>
	<!-- email 表单 -->
	<div id="aside_mask_bg"></div>
	<div id="aside_sc_from">
		<div class="tit">
			<h1>Free to contact us</h1>
		</div>
		<?php echo do_shortcode( '[wpforms id="31"]' ); ?>
		<!-- .wpforms-container -->
		<a class="close" href="javascript:void(0)" onclick="asclosescxz()"></a>
	</div>
	<div class="clear"></div>
	<script>
		function asfrom() {
			document.getElementById("aside_sc_from").style.display = "block";
			document.getElementById("aside_mask_bg").style.display = "block";
		}
		function asclosescxz() {
			document.getElementById("aside_sc_from").style.display = "none";
			document.getElementById("aside_mask_bg").style.display = "none";
		}
		function goTop() {
			$("html,body").animate(
				{
					scrollTop: 0,
				},
				500
			);
		}
	</script>
</footer>



<!-- 表单获取提交时链接 -->
<script>
	jQuery(document).ready(function() {
		var current_url = window.location.href;
		jQuery('#wpforms-26-field_4').val(current_url);
		jQuery('#wpforms-31-field_4').val(current_url);
		jQuery('#wpforms-36-field_5').val(current_url);
	});
</script>
<!-- 表单获取询盘来源（AD or SEO） -->
<script>
	// 判断 URL 中是否包含 source=ad 参数
	if (window.location.href.indexOf('source=ad') > -1) {
		// 如果包含，则设置 cookie
		setCookie('source1', 'ad', 365);
	}
	// 读取 cookie 中的 source 值
	let username = getCookie('source1');
	// 判断 username 是否等于 ad
	if (username === 'ad') {
		$('#wpforms-26-field_5').val("来自于广告的询盘");
		$('#wpforms-31-field_5').val("来自于广告的询盘");
		$('#wpforms-36-field_6').val("来自于广告的询盘");
	} else {
		$('#wpforms-26-field_5').val("来自于SEO的询盘");
		$('#wpforms-31-field_5').val("来自于SEO的询盘");
		$('#wpforms-36-field_6').val("来自于SEO的询盘");
	}
	// 设置指定名称的 cookie 值，并指定过期时间（单位：天）
	function setCookie(name, value, days) {
		let expires = "";
		if (days) {
			let date = new Date();
			date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
			expires = "; expires=" + date.toUTCString();
		}
		document.cookie = name + "=" + (value || "") + expires + "; path=/";
	}
	// 获取指定名称的 cookie 值
	function getCookie(name) {
		let value = "; " + document.cookie;
		let parts = value.split("; " + name + "=");
		if (parts.length === 2) {
			return parts.pop().split(";").shift();
		}
	}
</script>

<?php wp_footer(); ?>

	
<!-- wow -->
<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>
<script>
	wow = new WOW({
		animateClass: 'animated',
		offset: 100,
		mobile: false,
	});
	wow.init();
</script>
