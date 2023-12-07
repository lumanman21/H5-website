<?php
/*
Template Name: certy
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

	<section class="in_content wrap m60">
		<div class="i_tit"><h2>CERTIFICATIONS & LICENSES </h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<ul class="certy_list mt50">
			<?php
				if( xintheme('certy_list') ){
				$certy_list = explode(',', xintheme('certy_list'));
				foreach ( $certy_list as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li>
				<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
				<p><?php echo $img_caption; ?></p>
			</li>
			<?php endforeach; } ?>
			
		</ul>

		<div class="expand_btn">
			<p>Load more</p>
			<div class="arrow">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</section>
	<script>
		$(document).ready(function() {
			var $picList = $('.certy_list');
			var $picItems = $picList.find('li');
			var itemNum = $picItems.length;
	
			if (itemNum <= 8) {
				$picList.next('.expand_btn').hide();
			} else {
				$picItems.filter(':gt(7)').hide();
				$picList.next('.expand_btn').on('click', function() {
				$picItems.show();
				$(this).hide();
				});
			}
		});
	</script>


	
	
</div>

</main>



<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>




<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>