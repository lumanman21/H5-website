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
					<div class="top_search_ico">
						<iconify-icon icon="iconamoon:search-bold"></iconify-icon>
					</div>
					<!-- Language -->
					<div class="top_language">
						<iconify-icon icon="pajamas:earth"></iconify-icon>
						<div class="top_language_list">
							<ul class="sub-menu">
								<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
							</ul>
						</div>
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