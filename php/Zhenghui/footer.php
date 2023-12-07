
<section class="i_partnets">
	<div class="i_tit">
		<h2><span>Partner</span></h2>
	</div>
	<div class="logo_list swiper-container wrap m80">
			<ul class="swiper-wrapper">
				<?php
					if( xintheme('i_partner') ){
					$i_partner = explode(',', xintheme('i_partner'));
					foreach ( $i_partner as $id ) :
					$img_src = wp_get_attachment_image_src( $id, 'full' );
					$img_caption = wp_get_attachment_caption($id);
				?>
				<li class="swiper-slide">
					<img src="<?php echo $img_src[0]; ?>" />
					<!-- <div class="txt"><p><?php echo $value['i_partner_2'] ?></p></div> -->
				</li>
				<?php endforeach; } ?>


			</ul>
			<div class="logo-prev"><iconify-icon icon="mingcute:left-line"></iconify-icon></div>
			<div class="logo-next"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
		</div>
		<script>
			var swiper = new Swiper('.logo_list', {
				loop: true,
				//loopFillGroupWithBlank: true,
				//roundLengths: true,
				//centeredSlides: true,
				pagination: {
					el: '.logo-pagination',
					clickable: true,
				},
				navigation: {
					prevEl: '.logo-prev',
					nextEl: '.logo-next',
				},
				autoplay: {
					delay: 3000,
					pauseOnMouseEnter:true,
					disableOnInteraction: false,
				},
				observer: true,
				observeParents: true,
				breakpoints: {
					0: {
						slidesPerView: 2,
						spaceBetween: '15',
						slidesPerGroup: 1,
					},
					769: {
						slidesPerView: 4,
						spaceBetween: '20',
						slidesPerGroup: 2,
					},
				},
			});
		</script>
</section>
<section class="i_form_bac mt60">
	<ul class="i_form wrap">
		<li class="i_form_left">
			<div class="i_form_title">
				<img src="<?php bloginfo('template_url'); ?>/static/images/kefu.png" alt="">
				<h2>Welcomes Your Consultation</h2>
			</div>
			<h3>
				If you have any questions or would like to request a quote, please leave us a message. Our experts will get back to you within 24 hours and help you choose the right product.
			</h3>
			<dl class="i_form_dl"> 
				<dt class="wow flipInY">
					<img src="<?php bloginfo('template_url'); ?>/static/images/form_icon1.png" alt="">
					<p>Online-Service</p>
				</dt>
				<dt class="wow flipInY" data-wow-delay=".1s">
					<img src="<?php bloginfo('template_url'); ?>/static/images/form_icon2.png" alt="">
					<p>technical support</p>
				</dt>
				<dt class="wow flipInY" data-wow-delay=".2s">
					<img src="<?php bloginfo('template_url'); ?>/static/images/form_icon3.png" alt="">
					<p>Remote debugging</p>
				</dt>
			</dl>
		</li>
		<li class="i_form_right">
			<?php echo do_shortcode( '[wpforms id="30"]' ); ?>
		</li>
	</ul>
</section>
<!-- Footer -->
<footer>
	<div class="f_box wrap">
		<div class="f_contact">
			<div class="f_logo mb30">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</div>
			<ul class="f_contact_list">
				<li>
					<iconify-icon icon="mdi:address-marker"></iconify-icon>
					<p><?php echo xintheme('address'); ?></p>
				</li>
				<li>
					<iconify-icon icon="fluent:call-20-filled"></iconify-icon>
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
				</li>
				<li>
					<iconify-icon icon="tabler:mail-filled"></iconify-icon>
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
					<a href="mailto:<?php echo xintheme('email2'); ?>" target="_blank"><?php echo xintheme('email2'); ?></a>
				</li>
				<li>
					<iconify-icon icon="ri:whatsapp-fill"></iconify-icon>
					<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank"><?php echo xintheme('whatsapp'); ?></a>
				</li>
				
			</ul>
		</div>
		<ul class="f_nav">
			<li>
				<h6 class="f_tit">QUICK LINK</h6>
				<ul>
					<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
				</ul>
			</li>
			<li>
				<h6 class="f_tit">PRODUCTS</h6>
				<dl>
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
					<dt>
						<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>">
							<?php echo esc_html( $cat->name ); ?>
						</a>
					</dt>
					<?php } ?>
					
				</dl>
			</li>
		</ul>
		<dl class="f_media">
			<dt><a href="<?php echo xintheme('consultation_google_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/google.png" alt=""></a></dt>
			<dt><a href="<?php echo xintheme('consultation_facebook_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media/facebook.svg" alt=""></a></dt>
			<dt><a href="<?php echo xintheme('consultation_instagram_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media/instagram.svg" alt=""></a></dt>
			<dt><a href="<?php echo xintheme('consultation_twitter_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media/twitter.svg" alt=""></a></dt>
			<dt><a href="<?php echo xintheme('consultation_youtube_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/static/images/media/Youtube.svg" alt=""></a></dt>
		</dl>
	</div>
	<div class="f_copy wrap">
		<a href="javascript:;">© 2023 All Rights reserved Chuzhou Zhenghui Technology Co. , Ltd.  Design by Anhuilingju</a>
		<a href="<?php echo get_permalink(3); ?>">Privacy Policy</a>
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
		<?php echo do_shortcode( '[wpforms id="34"]' ); ?>
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
		jQuery('#wpforms-30-field_6').val(current_url);
		jQuery('#wpforms-34-field_4').val(current_url);
		jQuery('#wpforms-37-field_4').val(current_url);
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
		$('#wpforms-30-field_7').val("来自于广告的询盘");
		$('#wpforms-34-field_5').val("来自于广告的询盘");
		$('#wpforms-37-field_5').val("来自于广告的询盘");
	} else {
		$('#wpforms-30-field_7').val("来自于SEO的询盘");
		$('#wpforms-34-field_5').val("来自于SEO的询盘");
		$('#wpforms-37-field_5').val("来自于SEO的询盘");
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
