<?php
/*
Template Name: products
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_p.webp" />
	</div>
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<a href="index.html">HOME</a>
			<a href="#">PRODUCTS</a>
		</div>
	</div>
</div>

<main>
	<div class="i_tit m50"><h2>products</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
	<ul class="ip_list mt80 wrap">
		<li><a href="./detail.html">
			<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.png" alt=""></div>
			<h6>BABY WIPES</h6>
		</a></li>
		<li><a href="./detail.html">
			<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p2.png" alt=""></div>
			<h6>HEALTH CARE & MEDIACL CARE WIPES</h6>
		</a></li>
		<li><a href="./detail.html">
			<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p3.png" alt=""></div>
			<h6>BABY WIPES</h6>
		</a></li>
		<li><a href="./detail.html">
			<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/p1.png" alt=""></div>
			<h6>BABY WIPES</h6>
		</a></li>
	</ul>
	<!-- Number of pages -->
	<div class="in_page_box wow slideInUp">
		<ul class="in_page">
			<li class="active_page"><span>1</span></li>
			<li><a href='http://lj106.com/category/news/page/2/'>2</a></li>
			<li><a href='http://lj106.com/category/news/page/3/'>3</a></li>
			<li><a href='http://lj106.com/category/news/page/3/'>END</a></li>
			<i>3 pages in total</i>
		</ul>
	</div>
</main>







<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>