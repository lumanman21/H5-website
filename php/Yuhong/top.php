<header>
	<div class="pre_head">
		<div class="wrap">
			<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><iconify-icon icon="ph:phone-call"></iconify-icon><?php echo xintheme('tel'); ?></a>
			<a href="tel:<?php echo xintheme('tel2'); ?>" target="_blank" target="_blank"><?php echo xintheme('tel2'); ?></a>
			<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><iconify-icon icon="tabler:mail"></iconify-icon><?php echo xintheme('email'); ?></a>
		</div>
	</div>
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
				<!-- Language -->
				<div class="top_language">
					<p>Language</p>
					<div class="top_language_list">
						<ul class="sub-menu">
							<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
						</ul>
					</div>
				</div>
				<!-- Search -->
				<div class="top_search_ico">
					<iconify-icon icon="carbon:search"></iconify-icon>
				</div>
			</div>

			<!-- Mobile nav button -->
			<div class="nav_menu"><i></i></div>
		</div>
	</div>
	<div class="top_search">
		<form role="search" method="get" id="searchform" action="/">
			<input class="top_search_ipt" type="text" placeholder="Search" value="" name="s" id="s" />
			<input class="top_search_btn" type="submit" value="search" />
		</form>
	</div>
</header>
<script src="<?php bloginfo('template_url'); ?>/static/js/header.js"></script>