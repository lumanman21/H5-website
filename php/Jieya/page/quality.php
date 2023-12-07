<?php
/*
Template Name: quality
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>
<?php
	$current_page_id = get_queried_object_id(); 
	$current_page_title = get_the_title( $current_page_id ); 
?>


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

	<section class="in_content wrap m60">
		<div class="i_tit"><h2>Quality</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<div class="txt">
			<?php echo xintheme('qua_txt'); ?>
		</div>
		<div class="img m50"><img class="center" src="<?php echo xintheme_img('qua_pic',''); ?>" alt=""></div>
		<div class="txt">
			<h5>Here are a few of the steps we take to ensure we develop, manufacture and deliver premium quality wet wipes:</h5>
			<ul>
				<?php
					$steps = xintheme('steps');
					if($steps){
					foreach($steps as $value):
				?>
				<li>
					<?php echo $value['qua_txt'] ?>
				</li>
				<?php endforeach; } ?>
			</ul>
		</div>
		
	</section>


	
	
</div>

</main>



<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>





<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>