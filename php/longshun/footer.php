<footer>
	<div class="wrap p80">
		<div class="f_contact">
			<div class="f_logo">
				<a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/static/images/f_logo.png" /></a>
			</div>
			<ul class="f_contact_list">
				<li>
					<i class="fas fa-map-marker-alt fa-fw"></i>
					<p>
						<b>Address:</b> <?php echo xintheme('address'); ?>
					</p>
				</li>
				<li>
					<i class="fas fa-phone-alt fa-fw"></i>
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><b>Tel:</b><?php echo xintheme('tel'); ?></a>
				</li>
				<li>
					<i class="fas fa-envelope fa-fw"></i>
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
					<a href="mailto:<?php echo xintheme('email2'); ?>" target="_blank"><?php echo xintheme('email2'); ?></a>
				</li>
			</ul>
			<dl class="f_media">
				<dt>
					<a href="<?php echo xintheme('consultation_facebook_url'); ?>"><i class="fab fa-facebook fa-fw"></i></a>
				</dt>
				<dt>
					<a href="<?php echo xintheme('consultation_twitter_url'); ?>"><i class="fab fa-twitter fa-fw"></i></a>
				</dt>
				<dt>
					<a href="<?php echo xintheme('consultation_linkedin_url'); ?>"><i class="fab fa-linkedin fa-fw"></i></a>
				</dt>
				<dt>
					<a href="<?php echo xintheme('consultation_youtube_url'); ?>"><i class="fab fa-youtube fa-fw"></i></a>
				</dt>
				<dt>
					<a href="<?php echo xintheme('consultation_instagram_url'); ?>"><i class="fab fa-instagram fa-fw"></i></a>
				</dt>
			</dl>
		</div>
		<ul class="f_nav">
			<li>
				<a href="<?php echo get_category_link(2); ?>">Products</a>
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
							$cat_thumbnail_url = $category_data['cat_thumbnail'];
							$cat_thumbnail_id = attachment_url_to_postid($cat_thumbnail_url);
							$cat_thumbnail_alt = get_post_meta($cat_thumbnail_id, '_wp_attachment_image_alt', true);
							if ( empty($cat_thumbnail_alt) ) {
								$cat_thumbnail_alt = $cat->name;
							}
					?>
					<dt>
						<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" title="<?php echo esc_attr( $cat->name ); ?>"><?php echo esc_html( $cat->name ); ?> </a>  
					</dt>
					<?php } ?>

				</dl>
			</li>
			<li>
				<a href="<?php echo get_permalink(2); ?>">About Us</a>
				<dl>
					<dt><a href="<?php echo get_permalink(2); ?>">Corporate advantage</a></dt>
					<dt><a href="<?php echo get_permalink(2); ?>">Our certificate</a></dt>
					<dt><a href="<?php echo get_permalink(2); ?>">Our enviroment</a></dt>
				</dl>
			</li>
			<li>
				<a href="<?php echo get_permalink(7); ?>">Bussiness</a>
				<dl>
					<dt><a href="<?php echo get_permalink(7); ?>">OEM-Top Quality Products</a></dt>
					<dt><a href="<?php echo get_permalink(7); ?>">Service</a></dt>
				</dl>
			</li>
			<li>
				<a href="<?php echo get_permalink(9); ?>">Contact</a>
				<dl>
					<dt><a href="<?php echo get_permalink(9); ?>">Contact</a></dt>
					<dt><a href="<?php echo get_permalink(9); ?>">map</a></dt>
				</dl>
			</li>
			<!-- <li>
				<a href="javascript:;">About Us</a>
				<dl>
					<dt><a href="javascript:;">Profile</a></dt>
					<dt><a href="javascript:;">History</a></dt>
					<dt><a href="javascript:;">Environment</a></dt>
					<dt><a href="javascript:;">Honors</a></dt>
					<dt><a href="javascript:;">Partner</a></dt>
				</dl>
			</li> -->
		</ul>
	</div>
	<div class="f_copy wrap">
		<p>
			&copy; 2023 Anhui Longshun Design by <a href="https://www.ljglobal.cn/">LJGLOBAL.</a>
		</p>
		<a class="pp" href="<?php echo get_permalink(13); ?>">Privacy Policy</a>
	</div>
	 <!-- aside -->
	 <aside class="aside_right">
		<ul>
		  <!-- <li>
			<a><img src="<?php echo get_template_directory_uri(); ?>/static/images/aside_ico_whatsapp.svg" /></a>
		  </li> -->
		  <li>
			<a><img src="<?php echo get_template_directory_uri(); ?>/static/images/aside_ico_tel.svg" /></a>
			<div class="side_tel_box">
			  <h6>
				<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
			  </h6>
			</div>
		  </li>
		  <li onclick="asfrom()">
			<a href="javascript:void(0)" ><img src="<?php echo get_template_directory_uri(); ?>/static/images/aside_ico_email.svg" /></a>
		  </li>
		  <li onClick="goTop()"><a><div><img src="<?php echo get_template_directory_uri(); ?>/static/images/aside_ico_up.svg" /></div></a></li>
		</ul>
	  </aside>
	
	  <div id="aside_mask_bg"></div>
	  <div id="aside_sc_from">
	  <div class="tit">
		<h1>Free To Contact Us</h1>
	  </div>
	  <!-- Pop_form -->
	  <?php echo do_shortcode( '[wpforms id="29"]' ); ?>
	  <a class="close" href="javascript:;" onclick="asclosescxz()"></a>
</footer>



<!-- 表单获取提交时链接 -->
<script>
        jQuery(document).ready(function() {
                var current_url = window.location.href;
                jQuery('#wpforms-26-field_4').val(current_url);
                jQuery('#wpforms-29-field_4').val(current_url);
                jQuery('#wpforms-36-field_4').val(current_url);
				
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
		// console.log('来自广告');
		$('#wpforms-26-field_5').val("来自于广告的询盘");
		$('#wpforms-29-field_5').val("来自于广告的询盘");
		$('#wpforms-36-field_5').val("来自于广告的询盘");
		
		
    } else {
		// console.log('来自seo');
		$('#wpforms-26-field_5').val("来自于seo的询盘");
		$('#wpforms-29-field_5').val("来自于seo的询盘");
		$('#wpforms-36-field_5').val("来自于seo的询盘");
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
<script src="<?php echo get_template_directory_uri(); ?>/static/js/wow.min.js"></script>
<script>
	wow = new WOW({
        animateClass: 'animated',
        offset: 100,
		mobile: false,
	});
    wow.init();
</script>