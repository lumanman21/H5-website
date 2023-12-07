
<section class="com_form pt100 pb60">
	<div class="wrap wow slideInUp">
		<div class="i_tit m40">
			<h2>Welcomes Your Consultation</h2>
		</div>
		<h6>If you have any questions or would like to request a quote, please leave us a message. Our experts will get back to you within 24 hours and help you choose the right product.</h6>
		<?php echo do_shortcode( '[wpforms id="40"]' ); ?>
	</div>
</section>

<!-- Footer -->
<footer>
	<div class="f_box wrap p60">
		
		<ul class="f_nav">
			<li>
				<h6 class="f_tit">PRODUCTS</h6>
				<dl class="f_category">
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
					
					<dt>
						<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
							<?php echo esc_html( $cat->name ); ?> 
						</a>
					</dt>
					<?php } ?>

				</dl>
			</li>
			<li>
				<h6 class="f_tit">MENU</h6>
				<dl>
					<dt><a href="<?php echo get_permalink(2); ?>">About Us</a></dt>
					<dt><a href="<?php echo get_category_link(3); ?>">News</a></dt>
					<dt><a href="<?php echo get_permalink(13); ?>">Contact Us</a></dt>
				</dl>
			</li>
			
			
		</ul>
		<div class="f_contact">
			<div class="f_logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</div>
			<ul class="f_contact_list">
				<li>
					<iconify-icon icon="fluent:call-20-filled"></iconify-icon>
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank">Tel:<?php echo xintheme('tel'); ?></a>
				</li>
				<li>
					<iconify-icon icon="ri:whatsapp-fill"></iconify-icon>
					<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank">whatsapp:<?php echo xintheme('whatsapp'); ?></a>
				</li>
				<li>
					<iconify-icon icon="tabler:mail-filled"></iconify-icon>
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank">E-mail: <?php echo xintheme('email'); ?></a>
				</li>
				
				<li>
					<iconify-icon icon="mdi:address-marker"></iconify-icon>
					<p>Address:<?php echo xintheme('address'); ?></p>
				</li>
			</ul>
		</div>
		<div class="f_more mt40">
			<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank" rel="nofollow" class="i_more i_more_f">
				<b>Talk directly with us<iconify-icon icon="bi:arrow-right"></iconify-icon></b>
			</a>
			<dl class="f_media">
				<dt><a href="<?php echo xintheme('consultation_facebook_url'); ?>" target="_blank" rel="nofollow"><iconify-icon icon="ic:baseline-facebook"></iconify-icon></a></dt>
				<dt><a href="<?php echo xintheme('consultation_linkedin_url'); ?>" target="_blank" rel="nofollow"><iconify-icon icon="uil:linkedin"></iconify-icon></a></dt>
				<dt><a href="<?php echo xintheme('consultation_twitter_url'); ?>" target="_blank" rel="nofollow"><iconify-icon icon="bi:twitter-x"></iconify-icon></a></dt>
				<dt><a href="<?php echo xintheme('consultation_youtube_url'); ?>" target="_blank" rel="nofollow"><iconify-icon icon="ri:youtube-fill"></iconify-icon></a></dt>
			</dl>
		</div>
	</div>
	<div class="f_copy">
		<div class="wrap">
			<a href="javascript:;">©  2023 Wuhu Boyue Import and Export Trading Co., Ltd. Design by Anhuilingju. </a>
			<a href="<?php echo get_permalink(3); ?>">Privacy Policy</a>
		</div>
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
				<!-- <a><em></em></a>
				<div class="side_tel_box">
					<h6>
						<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
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
		<?php echo do_shortcode( '[wpforms id="45"]' ); ?>
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
		jQuery('#wpforms-40-field_6').val(current_url);
		jQuery('#wpforms-45-field_4').val(current_url);
		jQuery('#wpforms-48-field_5').val(current_url);
		jQuery('#wpforms-52-field_5').val(current_url);
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
		$('#wpforms-40-field_7').val("来自于广告的询盘");
		$('#wpforms-45-field_5').val("来自于广告的询盘");
		$('#wpforms-48-field_6').val("来自于广告的询盘");
		$('#wpforms-52-field_6').val("来自于广告的询盘");
	} else {
		$('#wpforms-40-field_7').val("来自于SEO的询盘");
		$('#wpforms-45-field_5').val("来自于SEO的询盘");
		$('#wpforms-48-field_6').val("来自于SEO的询盘");
		$('#wpforms-52-field_6').val("来自于广告的询盘");
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
