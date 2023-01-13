<?php
/*
Template Name: contact_us
*/
get_header();?>
<link href="<?php bloginfo('template_url'); ?>/static/css/contact.css" rel="stylesheet" type="text/css">

<body>

<!-- header -->
<?php get_template_part('top') ?>


<!-- 视频 -->
<div class="vid">
   
   <img src="<?php bloginfo('template_url'); ?>/static/imgs/welCome.jpg" alt="">
   <div class="vid_text">
	   <div><h2>contact us</h2></div>
	   <div><p>Feel Free To Contact us</p></div>
	   
   </div>
   <!-- 动态图标 -->
   <!-- <div class="mouse"></div> -->
	<!-- 圆 -->
	<div class="circle"></div>
	<!-- 遮罩层 -->
   <div class="optiac"></div>
</div>


<!-- 首页第一 -->
    <div class="welcome_frist">
        <div class="welcome">
            <ul>
                <li>Welcome to contact us</li>
                <li>Contact us to enjoy the wholesale price</li>
                <li></li>
            </ul>
        </div>
        <div class="welcome_text wrap">
            <div>
                <div>
                    <ul class="wel_text">
                        <li>
                            <img src="<?php bloginfo('template_url'); ?>/static/imgs/welcome1.png" alt="" style="margin-top: 10px;">
                            <p><?php echo xintheme('address'); ?></p>
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_url'); ?>/static/imgs/welcome4.png" alt="">
                            <p><a href="tel:<?php echo xintheme('phone'); ?>"><?php echo xintheme('phone'); ?></a></p>
                        </li>
                        <li>
                            <img src="<?php bloginfo('template_url'); ?>/static/imgs/welcome3.png" alt="">
                            <p><a href="mailto:<?php echo xintheme('email'); ?>"><?php echo xintheme('email'); ?></a></p>
                        </li>
                    </ul>
                    <!-- 地图 -->
                    <div class="welcome_map">
						<?php echo do_shortcode( ' [simpleMapNoApi] ' ); ?>
                    </div>
                </div>
                <div></div>
            </div>
            <!-- 表单 -->
            <div class="welcome_form">
                <div>
                    <div class="wpforms-container wpforms-container-full" id="wpforms-268"><form id="wpforms-form-268" class="wpforms-validate wpforms-form wpforms-ajax-form" data-formid="268" method="post" enctype="multipart/form-data" action="/?wpforms_form_preview=268&amp;new_window=1" data-token="c2251ae6414e0d6e2ec45f93113d8abb" novalidate="novalidate"><noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript><div class="wpforms-field-container"><div id="wpforms-268-field_1-container" class="wpforms-field wpforms-field-name" data-field-id="1"><label class="wpforms-field-label" for="wpforms-268-field_1">Name <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-268-field_1" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][1]" placeholder="Name" required=""></div><div id="wpforms-268-field_2-container" class="wpforms-field wpforms-field-phone" data-field-id="2"><label class="wpforms-field-label" for="wpforms-268-field_2">Phone <span class="wpforms-required-label">*</span></label><input type="tel" id="wpforms-268-field_2" class="wpforms-field-medium wpforms-field-required" data-rule-int-phone-field="true" name="wpforms[fields][2]" placeholder="Phone" required=""></div><div id="wpforms-268-field_3-container" class="wpforms-field wpforms-field-email" data-field-id="3"><label class="wpforms-field-label" for="wpforms-268-field_3">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-268-field_3" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][3]" placeholder="Email" required=""></div><div id="wpforms-268-field_4-container" class="wpforms-field wpforms-field-textarea" data-field-id="4"><label class="wpforms-field-label" for="wpforms-268-field_4">Message <span class="wpforms-required-label">*</span></label><textarea id="wpforms-268-field_4" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][4]" placeholder="Message" required=""></textarea></div></div><div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="268">			<input type="hidden" name="wpforms[nonce]" value="8d44d40768">
			<input type="hidden" name="wpforms[author]" value="1"><button type="submit" name="wpforms[submit]" id="wpforms-submit-268" class="wpforms-submit" data-alt-text="sending…" data-submit-text="send" aria-live="assertive" value="wpforms-submit">send</button><img src="http://lj106.com/wp-content/plugins/wpforms/assets/images/submit-spin.svg" class="wpforms-submit-spinner" style="display: none;" width="26" height="26" alt=""></div></form></div>
                </div>
                <!-- send -->
                <!-- <div class="Send">send</div> -->
            </div>
        </div>
    </div>


<!-- footer -->
<?php get_footer();?>


<script src="<?php bloginfo('template_url'); ?>/static/js/home.js"></script>
<!-- 引入wow动画效果 -->
<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>
<script>
wow = new WOW({
	animateClass: 'animated',
	offset: 100,
	mobile: false,
});
wow.init();
</script>
	
	
</body>
</html>