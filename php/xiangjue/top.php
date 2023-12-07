<!-- header -->
<header>

	<!-- Logo -->
	<div class="logo wrap_l">
		<a href="<?php bloginfo('url'); ?>">
			<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
		</a>
	</div>

	<div class="top_line">
		<div class="wrap">
			<ul class="top_contact">
				<li>
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank" rel="nofollow">
						<b>Email:</b>
						<p><?php echo xintheme('email'); ?></p>
					</a>
				</li>
				<li>
					<a  href="tel:<?php echo xintheme('tel'); ?>" target="_blank" rel="nofollow">
						<b>Tel:</b>
						<p><?php echo xintheme('tel'); ?></p>
					</a>
				</li>
				<li>
					<a href="javascript:;" rel="nofollow">
						<b>Location:</b>
						<p><?php echo xintheme('address'); ?></p>
					</a>
				</li>
			</ul>
			<ul class="top_media">
				<li><a href="<?php echo xintheme('consultation_facebook_url'); ?>" rel="nofollow" target="_blank"><iconify-icon icon="uil:facebook"></iconify-icon></a></li>
				<li><a href="<?php echo xintheme('consultation_twitter_url'); ?>" rel="nofollow" target="_blank"><iconify-icon icon="ri:twitter-x-fill"></iconify-icon></a></li>
				<li><a href="<?php echo xintheme('consultation_linkedin_url'); ?>" rel="nofollow" target="_blank"><iconify-icon icon="uil:linkedin"></iconify-icon></a></li>
				<li><a href="<?php echo xintheme('consultation_youtube_url'); ?>" rel="nofollow" target="_blank"><iconify-icon icon="ri:youtube-fill"></iconify-icon></a></li>
			</ul>
		</div>
	</div>

	<div class="top_cont">
		<div class="top wrap">

			<!-- Nav -->
			<ul class="i_nav">
				<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
			</ul>

			<div class="top_r">

				<!-- Search -->
				<div class="top_search">
					<form role="search" method="get" id="searchform" action="/">
						<input class="top_search_ipt" type="text" placeholder="Search" value="" name="s" id="s">
						<input class="top_search_btn" type="submit" value="search">
					</form>
				</div>

				<!-- Language -->
				<div class="top_language">
					<div class="top_language_btn"><iconify-icon icon="ri:global-line"></iconify-icon></div>
					<ul class="language_list">
						<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
					</ul>
				</div>

			</div>

			<!-- Mobile nav button -->
			<div class="nav_menu"><i></i></div>

		</div>
	</div>

</header>

<script src="<?php bloginfo('template_url'); ?>/static/js/header.js"></script>
<div class="clear"></div>

<div class="full_header"></div>