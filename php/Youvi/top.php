<div class="pre_head">
	<p>WELCOME TO INQUIRE US
		<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank">Tel:<?php echo xintheme('tel'); ?> </a>or
		<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
	</p>
</div>
<!-- header -->
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
				<!-- Language -->
				<div class="top_language">
					<iconify-icon icon="uiw:global"></iconify-icon>
					<div class="top_language_list">
						<ul class="sub-menu">
							<?php wp_nav_menu(array('container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'language')); ?>
						</ul>
					</div>
				</div>
				<!-- Search -->
				<div class="top_search_ico"><iconify-icon icon="carbon:search"></iconify-icon></div>
			</div>

			<!-- Mobile nav button -->
			<div class="nav_menu"><i></i></div>

		</div>
	</div>

	<!-- 导航下拉 -->
	<!-- products -->
	<div class="drop" id="products">
		<ul class="drop_ul">
		<?php
			$args = array(
				'child_of'     => 2,
				'parent'       => 2,
				'hide_empty'   => 0,
				'orderby'      => 'id',
				'order'        => 'ASC',
			);
			$categories = get_categories($args);

			foreach ($categories as $cat) {
				$category_data = get_term_meta($cat->term_id, 'category_options', true);
				$cat_thumbnail = isset($category_data['cat_thumbnail2']) ? $category_data['cat_thumbnail2'] : '';
				$cat_thumbnail_url = wp_get_attachment_image_src($cat_thumbnail, 'full');
				?>
				<li>
					<a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" title="<?php echo esc_html($cat->name); ?>">
						<div class="drop_img">
							<?php if ($cat_thumbnail_url) { ?>
								<img src="<?php echo $cat_thumbnail_url[0]; ?>" />
							<?php } ?>
							<div class="post-image-mask"><span></span></div>
						</div>
						<div class="drop_text">
							<h2><?php echo esc_html($cat->name); ?></h2>
						</div>
					</a>
				</li>
			<?php } ?>

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
		
	</script>
</header>

<div class="top_search">
	<form role="search" method="get" id="searchform" action="/">
		<input class="top_search_ipt" type="text" placeholder="Search" value="" name="s" id="s">
		<input class="top_search_btn" type="submit" value="search">
	</form>
</div>

<script src="<?php bloginfo('template_url'); ?>/static/js/header.js"></script>
<div class="clear"></div>