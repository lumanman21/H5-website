
	<!-- Footer -->
<footer>
	<div class="f_box wrap">
		<div class="f_form">
			<div class="tit">Send Us A Message</div>
			<?php echo do_shortcode( '[wpforms id="44"]' ); ?>
		</div>
		<div class="f_cont_box">
			<div class="f_logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
				</a>
				<ul class="f_media">
					<li>
						<a href="<?php echo xintheme('consultation_facebook_url'); ?>" target="_blank">
							<i class="fab fa-facebook fa-fw"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo xintheme('consultation_twitter_url'); ?>" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/static/images/twitter.svg" alt="">
						</a>
					</li>
					<li>
						<a href="<?php echo xintheme('consultation_instagram_url'); ?>" target="_blank">
							<i class="fab fa-instagram fa-fw"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo xintheme('consultation_linkedin_url'); ?>" target="_blank">
							<i class="fab fa-linkedin fa-fw"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo xintheme('consultation_youtube_url'); ?>" target="_blank">
							<i class="fab fa-youtube fa-fw"></i>
						</a>
					</li>
				</ul>
			</div>
			<dl class="f_cont">
				<dt class="f_contact">
					<h2 class="f_tit"><span> Contact</span></h2>
					<ul>
						<li>
							<i class="fab fa-whatsapp fa-fw"></i>
							<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><?php echo xintheme('whatsapp'); ?></a>
						</li>
						<li>
							<i class="fas fa-phone-alt fa-fw"></i>
							<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
						</li>
						<li>
							<i class="fas fa-envelope fa-fw"></i>
							<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
						</li>
						<li>
							<i class="fas fa-map-marker-alt fa-fw"></i>
							<p><?php echo xintheme('address'); ?></p>
						</li>
						<li><img src="<?php echo xintheme_img('qr',''); ?>" alt=""></li>
					</ul>
				</dt>
				<dt class="f_nav">
					<h2 class="f_tit"><span>Follow us</span> </h2>
					<ul>
						<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
					</ul>
				</dt>
				<dt class="f_nav">
					<h2 class="f_tit"><span>Products</span> </h2>
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
								$thumbnail_id = $category_data['cat_thumbnail'];
								$thumbnail_alt = $cat->name;
						?>
						<li>
							<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
								<?php echo esc_html( $cat->name ); ?>                                          <!-- 名称 -->
							</a> 
						</li>
						<?php } ?>
					</ul>
				</dt>
				
			</dl>
		</div>
		

	</div>
	
	
	<div class="f_copy">
		<div class="f_copy_cont wrap">
			<p>&copy; 2023 Anhui Rennuo Construction Machinery Co.,Ltd.Design by LJGLOBAL.</p>
			<a href="javascript:;">Privacy Policy</a>
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
		<?php echo do_shortcode( '[wpforms id="49"]' ); ?>
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
			jQuery('#wpforms-37-field_2').val(current_url);
			jQuery('#wpforms-44-field_4').val(current_url);
			jQuery('#wpforms-49-field_4').val(current_url);
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
			$('#wpforms-37-field_3').val("来自于广告的询盘");
			$('#wpforms-44-field_5').val("来自于广告的询盘");
			$('#wpforms-49-field_5').val("来自于广告的询盘");
			$('#wpforms-53-field_7').val("来自于广告的询盘");
		} else {
			$('#wpforms-37-field_3').val("来自于SEO的询盘");
			$('#wpforms-44-field_5').val("来自于SEO的询盘");
			$('#wpforms-49-field_5').val("来自于SEO的询盘");
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
