<div class="pre_head">
	<div class="wrap">
		<div class="pre_l">
			<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><i class="fal fa-phone-volume"></i><?php echo xintheme('tel'); ?></a>
			<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><i class="fal fa-envelope"></i><?php echo xintheme('email'); ?></a>
		</div>
		<div class="pre_r">
			<!-- Language -->
			<div class="top_language">
				<i class="fal fa-globe"></i>
				<div class="top_language_list">
					<ul class="sub-menu">
						<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
					</ul>
				</div>
			</div>
			<dl class="pre_media">
				<dt>
					<a href="<?php echo xintheme('consultation_facebook_url'); ?>"><i class="fab fa-facebook fa-fw"></i></a>
				</dt>
				<dt>
					<a href="<?php echo xintheme('consultation_linkedin_url'); ?>"><i class="fab fa-linkedin fa-fw"></i></a>
				</dt>
				<dt>
					<a href="<?php echo xintheme('consultation_twitter_url'); ?>"><i><img src="<?php bloginfo('template_url'); ?>/static/images/twitter.svg" alt=""></i></a>
				</dt>
				<dt>
					<a href="<?php echo xintheme('consultation_youtube_url'); ?>"><i class="fab fa-youtube fa-fw"></i></a>
				</dt>
			</dl>
		</div>
	</div>
</div>
<header>
	<div class="top_cont">
		<div class="top wrap">
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
				<div class="top_search_ico"><i class="far fa-search"></i></div>
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
<div class="full_header"></div>