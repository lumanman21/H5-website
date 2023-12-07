
<header>

	<div class="header_top">
		<div class="wrap_top header_top_top">
			<ul class="header_top_ul">
				<li class="header_top_li1">
					WELCOME TO “WOOVO” 丨 Mutually Beneficial and Win-Win, Creating the Future Together 丨 <a href="<?php echo get_permalink(13); ?>" rel="nofollow">contact US</a>
				</li>
				<li class="header_top_li2">WELCOME TO “WOOVO”</li>
			</ul>
		</div>
	</div>
	<div class="top_cont">
		<div class="top wrap">

			<!-- Logo -->
			<div class="logo_all">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
				<div class="top_search logo_search">
					<form role="Suchen" method="get" id="searchform" action="/">
						<input class="top_search_btn" type="submit" value="Keywords">
						<input class="top_search_ipt" type="text" placeholder="Keywords" value="" name="s" id="s">
					</form>
				</div>
			</div>
			<!-- Nav -->
			<ul class="i_nav">
				<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'main')); ?>
			</ul>

			</ul>

			<div class="top_r">
				<!-- Search -->
				<div class="top_search_ico"><iconify-icon icon="carbon:search"></iconify-icon></div>
				<!-- Language -->
				<div class="top_language">
					<iconify-icon icon="iconoir:language"></iconify-icon>
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








</header>

<div class="top_search">
	<form role="Suchen" method="get" id="searchform" action="/">
		<input class="top_search_ipt" type="text" placeholder="Suchen" value="" name="s" id="s">
		<input class="top_search_btn" type="submit" value="Suchen">
	</form>
</div>

<script src="<?php bloginfo('template_url'); ?>/static/js/header.js"></script>