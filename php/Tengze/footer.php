<section class="com_form p100">
		<div class="wrap">
			<div class="tit">
				<h2>Welcome to Contact and
					Cooperate with us!<iconify-icon icon="icon-park-solid:setting"></iconify-icon></h2>
				<h6>If you are interested in our products and want to know more details, please leave amessage here, we will reply you as soon as we can.</h6>
			</div>
			<?php echo do_shortcode( '[wpforms id="45"]' ); ?>
		</div>
</section>

<footer>
	<div class="f_cont wrap">
		<div class="f_contact">
			<div class="f_logo">
				<a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" /></a>
				<h5>Hefei Tengze Construction Machinery Co., LTD</h5>
				<h6>Believe in yourself, believe in partners, win-win cooperation!</h6>
			</div>
			<ul class="f_nav">
			<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
			</ul>
		</div>
		<div class="f_contact f_contact2">
			<ul class="f_info">
				<li>
					<iconify-icon icon="fluent:call-20-filled"></iconify-icon>
					<span>Whatsapp:</span>
					<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><?php echo xintheme('whatsapp'); ?></a>
				</li>
				<li>
					<iconify-icon icon="tabler:mail-filled"></iconify-icon>
					<span>E-mail:</span>
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
				</li>
				<li>
					<iconify-icon icon="ri:whatsapp-fill"></iconify-icon>
					<span>Tel:</span>
					<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><?php echo xintheme('whatsapp'); ?></a>
				</li>
				<li>
					<iconify-icon icon="mdi:address-marker"></iconify-icon>
					<span>Address:</span>
					<p><?php echo xintheme('address'); ?></p>
				</li>
			</ul>
				
			<ul class="f_media">
				<li><a href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/static/images/facebook1.png" alt=""></a></li>
				<li><a href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/static/images/linkedin1.png" alt=""></a></li>
				<li><a href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/static/images/twitter1.png" alt=""></a></li>
				<li><a href="" target="_blank"><img src="<?php bloginfo('template_url'); ?>/static/images/youtube1.png" alt=""></a></li>
			</ul>

		</div>
	</div>
	<div class="f_copy wrap">
		<p>
			&copy; 2023 Hefei Tengze Construction Machinery Co., LTD.Design by Anhuilingju.   
		</p>
		<a href="<?php echo get_permalink(3); ?>">Privacy Policy</a>
	</div>
	<!-- 侧边客服 -->
	<aside class="aside_right">
		<ul>
			<li>
				<a><em></em></a>
				<div class="side_tel_box">
					<h6>
						<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><?php echo xintheme('whatsapp'); ?></a>
					</h6>
				</div>
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
		<?php echo do_shortcode( '[wpforms id="50"]' ); ?>
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
		jQuery('#wpforms-45-field_4').val(current_url);
		jQuery('#wpforms-50-field_4').val(current_url);
		jQuery('#wpforms-53-field_6').val(current_url);
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
		$('#wpforms-45-field_5').val("来自于广告的询盘");
		$('#wpforms-50-field_5').val("来自于广告的询盘");
		$('#wpforms-53-field_7').val("来自于广告的询盘");
	} else {
		$('#wpforms-45-field_5').val("来自于SEO的询盘");
		$('#wpforms-50-field_5').val("来自于SEO的询盘");
		$('#wpforms-53-field_7').val("来自于SEO的询盘");
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
