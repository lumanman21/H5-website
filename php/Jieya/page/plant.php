<?php
/*
Template Name: plant
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_sus2.webp" />
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
	<section class="in_content design wrap">
		<div class="i_tit m60"><h2>PLANT BASED WIPES</h2><img src="static/images/di.png" alt=""></div>
		<div class="txt">
			<?php echo xintheme('plant_txt'); ?>
		</div>
		<h6>Advantage</h6>
		<div class="txt">
			<ul>
				<?php
					$plant_adv = xintheme('plant_adv');
					if($plant_adv){
					foreach($plant_adv as $value):
				?>
				<li><?php echo $value['qua_txt'] ?></li>
				<?php endforeach; } ?>
				
			</ul>
		</div>
		<div class="img m30"><img class="center" src="<?php bloginfo('template_url'); ?>/static/images/plant.webp" alt=""></div>
	</section>


</main>
<div style="margin-top: -1rem;"></div>


<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>



<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>