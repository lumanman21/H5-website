<footer class="bor">
	<div class="f_top">
		<div class="wrap">
			<div class="f_logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</div>
			<p>A high-tech enterprise dedicated to providing</br> medical solutions for human health.</p>
		</div>
	</div>
	<div class="f_box wrap p60">
		<div class="f_form">
			<h6 class="f_tit">NEWSLETTER</h6>
			<?php echo do_shortcode( '[wpforms id="41"]' ); ?>
		</div>
		<div class="f_nav">
			<h6 class="f_tit">QUICK LINK</h6>
			<ul>
				<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
			</ul>
			
		</div>
		<div class="f_contact">
			<h6 class="f_tit">CONTACT US</h6>
			<ul class="f_contact_list">
				<li>
					<iconify-icon icon="fluent:call-20-filled"></iconify-icon>
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
				</li>
				
				<li>
					<iconify-icon icon="tabler:mail-filled"></iconify-icon>
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
				</li>
				<li>
					<iconify-icon icon="ri:whatsapp-fill"></iconify-icon>
					<a href="tel:<?php echo xintheme('tel2'); ?>" target="_blank"><?php echo xintheme('tel2'); ?></a>
				</li>
				<li>
					<iconify-icon icon="mdi:address-marker"></iconify-icon>
					<p><?php echo xintheme('address'); ?></p>
				</li>
			</ul>
		</div>
		<dl class="f_media">
			<dt>
				<a href="<?php echo xintheme('consultation_facebook_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media/facebook_color.svg" alt=""></a>
			</dt>
			<dt>
				<a href="<?php echo xintheme('consultation_twitter_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media/twitter_color.svg" alt=""></a>
			</dt>
			<dt>
				<a href="<?php echo xintheme('consultation_instagram_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media/instagram-fill.svg" alt=""></a>
			</dt>
			<dt>
				<a href="<?php echo xintheme('consultation_youtube_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media/Youtube_color.svg" alt=""></a>
			</dt>
		</dl>
	</div>
	<div class="f_copy">
		<div class="wrap">
			<a href="javascript:;">© 2023 All Rights reserved <?php echo xintheme('i_name'); ?>  Design by LJGLOBAL.</a>
			<a href="<?php echo get_permalink(3); ?>">Privacy Policy</a>
		</div>
	</div>
	<!-- 侧边客服 -->
	<aside class="aside_right">
		<ul>
			<li>
				<!-- <a><em></em></a>
			<div class="side_tel_box">
				<h6>
					<a href="tel:+86 551 62831031">+86 551 62831031</a>
				</h6>
			</div> -->
			</li>
			<li>
				<a><em></em></a>
				<div class="side_tel_box">
					<h6>
						<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
					</h6>
				</div>
			</li>
			<li onclick="asfrom()">
				<a href="javascript:void(0)"><em></em></a>
			</li>
			<li onClick="goTop()"><a>
					<div><em></em></div>
				</a></li>
		</ul>
	</aside>
	<!-- email 表单 -->
	<div id="aside_mask_bg"></div>
	<div id="aside_sc_from">
		<div class="tit">
			<h1>Free to contact us</h1>
		</div>
		<?php echo do_shortcode( '[wpforms id="46"]' ); ?>
		<a class="close" href="javascript:void(0)" onclick="asclosescxz()"></a>
	</div>
	<div class="clear"></div>
	<script>
		function asfrom() {
			document.getElementById('aside_sc_from').style.display = 'block';
			document.getElementById('aside_mask_bg').style.display = 'block'
		}
		function asclosescxz() {
			document.getElementById('aside_sc_from').style.display = 'none';
			document.getElementById('aside_mask_bg').style.display = 'none';

		};
		function goTop() {
			$('html,body').animate({
				scrollTop: 0
			}, 500)
		}
	</script>
</footer>




<!-- 表单获取提交时链接 -->
<script>
	jQuery(document).ready(function() {
		var current_url = window.location.href;
		jQuery('#wpforms-41-field_4').val(current_url);
		jQuery('#wpforms-46-field_4').val(current_url);
		jQuery('#wpforms-51-field_5').val(current_url);
		jQuery('#wpforms-57-field_5').val(current_url);
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
		$('#wpforms-41-field_5').val("来自于广告的询盘");
		$('#wpforms-46-field_5').val("来自于广告的询盘");
		$('#wpforms-51-field_6').val("来自于广告的询盘");
		$('#wpforms-57-field_6').val("来自于广告的询盘");
	} else {
		$('#wpforms-41-field_5').val("来自于SEO的询盘");
		$('#wpforms-46-field_5').val("来自于SEO的询盘");
		$('#wpforms-51-field_6').val("来自于SEO的询盘");
		$('#wpforms-57-field_6').val("来自于SEO的询盘");
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
