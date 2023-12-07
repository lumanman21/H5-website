<?php
/*
Template Name: enviroment
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_sus.webp" />
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
	<section class="in_content txt_b wrap">
		<div class="i_tit m60"><h2>ENVIRONMENT & HEALTH</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<div class="txt">
			<?php echo xintheme('env_txt'); ?>
		</div>
		<div class="img m30"><img class="center" src="<?php echo xintheme_img('env_pic',''); ?>" alt=""></div>
	</section>

	<section class="env wrap m50">
		<div class="txt">
			<h6>WATER SUSTAINABILITY</h6>
			<p>Reuse of 6% discharge water from secondary stage.</p>
			<h6>ENERGY SUSTAINABILITY</h6>
			<p>100% solar electricity with 30% surplus power.</p>
			<p>We produce enough electricity to power 700 homes.</p>
		</div>
		<div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/env1.webp" alt=""></div>
	</section>

</main>
<div style="margin-top: -1rem;"></div>


<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>




<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>