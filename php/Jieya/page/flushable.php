<?php
/*
Template Name: flushable
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_sus3.webp" />
	</div>
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>
<!-- anchor -->
<?php get_template_part('sus_list') ?>

<main class="sus" >
	<section class="in_content wrap">
		<div class="i_tit m60"><h2>FLUSHABLE WIPES</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<h6 class="com_tit">FLUSHABLE WIPES MANUFACTURER</h6>
		<div class="txt">
			<?php echo xintheme('flush_txt'); ?>
		</div>
		<div class="img m30"><img class="center" src="<?php echo xintheme_img('flush_pic',''); ?>" alt=""></div>
		<h6 class="com_tit">moist toilet paper</h6>
		<div class="txt">
			<?php echo xintheme('flush_txt2'); ?>
		</div>
		
	</section>


</main>
<div style="margin-top: -1rem;"></div>


<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>





<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>