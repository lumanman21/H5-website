<!-- Footer -->
<footer>
	<div class="f_form">
		<div class="wrap">
			<div class="f_form_t">
				<p>Welcome to contact message</p>
				<h6 class="fz18">If you are interested in our products and want to know more details, please contact us or leave messace here</h6>
			</div>
			<?php echo do_shortcode( '[wpforms id="45"]' ); ?>
		</div>
	</div>
	<div class="f_cont_box p80">
		<div class="f_cont wrap">
			<div class="f_coantact">
				<div class="f_logo">
					<img src="<?php bloginfo('template_url'); ?>/static/images/logo.png" />
					<p>xiangjue <br>engineering machinery</p>
				</div>
				<dl class="f_contact_list">
					<dt>
						<span>
							<iconify-icon icon="ri:whatsapp-fill"></iconify-icon>
							<b>Whatsapp/Tel</b>
						</span>
						<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
					</dt>
					<dt>
						<span>
							<iconify-icon icon="ic:baseline-email"></iconify-icon>
							<b>Email</b>
						</span>
						<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
					</dt>
					<dt>
						<span>
							<iconify-icon icon="icon-park-solid:local-two"></iconify-icon>
							<b>Address</b>
						</span>
						<p><?php echo xintheme('address'); ?></p>
					</dt>
				</dl>
			</div>
			<dl class="f_nav">
				<dt>
					<!-- <div class="f_tit"><p>QUICK LINK</p></div> -->
					<ul>
						<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
					</ul>
				</dt>
				<dt>
					<!-- <div class="f_tit"><a href="javascript:;">Products</a></div> -->
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
								<?php echo esc_html( $cat->name ); ?> 
							</a>
						</li>
						<?php } ?>
						
					</ul>
				</dt>
				<dt>
					<div class="f_tit"><p>Follow Us</p></div>
					<div class="f_media">
						<a href="<?php echo xintheme('consultation_facebook_url'); ?>" target="_blank" rel="nofollow"><iconify-icon icon="fe:facebook"></iconify-icon></a>
						<a href="<?php echo xintheme('consultation_youtube_url'); ?>" target="_blank" rel="nofollow"><iconify-icon icon="bi:youtube"></iconify-icon></a>
						<a href="<?php echo xintheme('consultation_twitter_url'); ?>" target="_blank" rel="nofollow"><iconify-icon icon="ri:twitter-x-line"></iconify-icon></a>
						<a href="<?php echo xintheme('consultation_linkedin_url'); ?>" target="_blank" rel="nofollow"><iconify-icon icon="uil:linkedin"></iconify-icon></a>
					</div>
				</dt>
			</dl>
		</div>
	</div>
	<div class="f_cr">
		<div class="wrap">
			<p>&copy;2023 xiangjue Construction Machinery Co.Ltd.Design by Anhuilingju.</p>
			<a href="<?php echo get_permalink(3); ?>">Privacy Policy</a>
		</div>
	</div>
</footer>


<!-- 侧边客服 -->
<aside class="aside_right">
	<ul>
		<li>
			<a><em></em></a>
		<div class="side_tel_box">
			<h6>
				<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
			</h6>
		</div>
		</li>
		<li>
			<!-- <a><em></em></a>
			<div class="side_tel_box">
				<h6>
					<a href="tel:+86 551 62831031">+86 551 62831031</a>
				</h6>
			</div> -->
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
	<?php echo do_shortcode( '[wpforms id="48"]' ); ?>
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




<!-- 表单获取提交时链接 -->
<script>
	jQuery(document).ready(function() {
		var current_url = window.location.href;
		jQuery('#wpforms-45-field_4').val(current_url);
		jQuery('#wpforms-48-field_4').val(current_url);
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
		$('#wpforms-48-field_5').val("来自于广告的询盘");
		$('#wpforms-53-field_7').val("来自于广告的询盘");
	} else {
		$('#wpforms-45-field_5').val("来自于SEO的询盘");
		$('#wpforms-48-field_5').val("来自于SEO的询盘");
		$('#wpforms-53-field_7').val("来自于广告的询盘");
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
