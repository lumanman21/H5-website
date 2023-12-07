<?php
/*
Template Name: design
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>





<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_capabilty.webp" />
	</div>
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>
<!-- anchor -->
<?php get_template_part('capability_list') ?>


<main>

	<section class="design in_content wrap m60">
		<div class="i_tit"><h2>Design</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<?php echo xintheme('des_txt'); ?>
		<div class="img m50"><img class="center" src="<?php echo xintheme_img('des_pic',''); ?>" alt=""></div>
	</section>


	
	
</div>

</main>



<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>





<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>