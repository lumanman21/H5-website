<?php
/*
Template Name: certification
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_about',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>About us</h2>
			<div class="breadcrumbs">
			<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>

<!-- anchor -->
<div class="mao_box wrap bc_black">
	<div class="in_nav">
	  <div class="in_nav_tit">
		<h6>About list</h6>
	  </div>
	  <ul class="menu_list">
		<li class="list"><a href="<?php echo get_permalink(2); ?>">About Us</a></li>
		<li class="list active"><a href="<?php echo get_permalink(12); ?>">Certification</a></li>
		<li class="list"><a href="<?php echo get_permalink(14); ?>">patent</a></li>
	  </ul>
	</div>
</div>

<section class="m80">
	<div class="wrap">
		<div class="i_tit i_tit_c wrap wow slideInUp">
			<h2>Certification</h2>
		</div>
		<ul class="certy_list mt50">
			<?php
				if( xintheme('in_certy') ){
				$in_certy = explode(',', xintheme('in_certy'));
				foreach ( $in_certy as $id ) :
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
	</div>
</section>
<script>
	$(document).ready(function() {
		var $picList = $('.certy_list');
		var $picItems = $picList.find('li');
		var itemNum = $picItems.length;

		if (itemNum <= 4) {
			$picList.next('.expand_btn').hide();
		} else {
			$picItems.filter(':gt(3)').hide();
			$picList.next('.expand_btn').on('click', function() {
			$picItems.show();
			$(this).hide();
			});
		}
	});
</script>

	


	

<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>







<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>