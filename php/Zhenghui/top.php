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
				<!-- Language -->
				<div class="top_language">
					<iconify-icon icon="uiw:global"></iconify-icon>
					<i class="far fa-globe-americas"></i>
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
	<!-- 导航下拉 -->
	<!-- products -->
	<!-- <div class="drop" id="products">
		<ul class="drop_ul">
			<li>
				<a href="">
					<div class="drop_img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/media/top1.jpg" alt="">
						<div class="post-image-mask"><span></span></div>
					</div>
					<div class="drop_text">
						<h2>Filter fabric</h2>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="drop_img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/media/top1.jpg" alt="">
						<div class="post-image-mask"><span></span></div>
					</div>
					<div class="drop_text">
						<h2>Filter fabric</h2>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="drop_img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/media/top1.jpg" alt="">
						<div class="post-image-mask"><span></span></div>
					</div>
					<div class="drop_text">
						<h2>Filter fabric</h2>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="drop_img">
						<img src="<?php bloginfo('template_url'); ?>/static/images/media/top1.jpg" alt="">
						<div class="post-image-mask"><span></span></div>
					</div>
					<div class="drop_text">
						<h2>Filter fabric</h2>
					</div>
				</a>
			</li>
		</ul>
	</div>
	<script>
		$('.i_nav li').eq(1).hover(function () {
			$('#products').stop().slideDown();
		}, function () {
			$('#products').stop().slideUp();
		})
		$('#products').hover(function () {
			$(this).stop().slideDown();
		}, function () {
			$(this).stop().slideUp();
		})
	</script> -->
</header>

<div class="top_search">
	<form role="search" method="get" id="searchform" action="/">
		<input class="top_search_ipt" type="text" placeholder="Search" value="" name="s" id="s">
		<input class="top_search_btn" type="submit" value="search">
	</form>
</div>
<script src="<?php bloginfo('template_url'); ?>/static/js/header.js"></script>

