<div class="pre_head">
	<div class="top_wrap">
		<div class="pre_l">
			<a href="tel:<?php echo xintheme('tel'); ?>"><iconify-icon icon="ph:phone-call"></iconify-icon><?php echo xintheme('tel'); ?></a>
			<a href="mailto:<?php echo xintheme('email'); ?>"><iconify-icon icon="tabler:mail"></iconify-icon><?php echo xintheme('email'); ?></a>
		</div>
		<div class="pre_r">
			<!-- Language -->
			<div class="top_language">
				<iconify-icon icon="pajamas:earth"></iconify-icon>
				<div class="top_language_list">
					<ul class="sub-menu">
						<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
					</ul>
				</div>
			</div>
			<dl class="pre_media">
				<dt>
					<a href="<?php echo xintheme('consultation_facebook_url'); ?>" rel="nofollow" target="_blank"><iconify-icon icon="uil:facebook"></iconify-icon></a>
				</dt>
				<dt>
					<a href="javascript:;" rel="nofollow" target="_blank"><iconify-icon icon="ant-design:linkedin-filled"></iconify-icon></a>
				</dt>
				<dt>
					<a href="<?php echo xintheme('consultation_twitter_url'); ?>" rel="nofollow" target="_blank"><img src="<?php bloginfo('template_url'); ?>/static/images/twitter.svg" alt=""></a>
				</dt>
				<dt>
					<a href="<?php echo xintheme('consultation_youtube_url'); ?>" rel="nofollow" target="_blank"><iconify-icon icon="mingcute:youtube-fill"></iconify-icon></a>
				</dt>
			</dl>
		</div>
	</div>
</div>
<header>
	<div class="top_cont">
		<div class="top top_wrap">
			<!-- Logo -->
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</div>

			<!-- Nav -->
			<ul class="i_nav">
				<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
			</ul>

			<div class="top_r">
				<!-- Search -->
				<div class="top_search_ico"><iconify-icon icon="carbon:search"></iconify-icon></div>
			</div>

			<!-- Mobile nav button -->
			<div class="nav_menu"><i></i></div>

		</div>
	</div>
	<div class="top_search">
		<form role="search" method="get" id="searchform" action="/">
			<input class="top_search_ipt" type="text" placeholder="Search" value="" name="s" id="s">
			<input class="top_search_btn" type="submit" value="search">
		</form>
	</div>
</header>
<script src="<?php bloginfo('template_url'); ?>/static/js/header.js"></script>