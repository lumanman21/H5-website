<?php

/*

Template Name: service

*/

get_header();?>





<!-- header -->

<?php get_template_part('top') ?>



<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/imgs/banner_s.webp" />
	</div>
</div>
<div class="in_position in_position_bc">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>


<main>
	<section class="dq wrap m80">
		<div class="dq_box wow slideInLeft">
			<h6>DESIGN&QUALITY</h6>
			<div class="txt"><?php echo xintheme('in_ser_1'); ?></div>
			<a href="<?php echo get_category_link(3); ?>" class="i_more mt30"><b>products</b></a>
		</div>
		<ul class="dq_list">
			<?php
				if( xintheme('dq_gallery') ){
				$dq_gallery = explode(',', xintheme('dq_gallery'));
				foreach ( $dq_gallery as $id ) :
				$img_src = wp_get_attachment_image_src( $id, 'full' );
				$img_caption = wp_get_attachment_caption($id);
			?>
			<li>
				<img src="<?php echo $img_src[0]; ?>" />
			</li>
			<?php endforeach; } ?>
		</ul>
		<script>
			$('.dq_list li').hover(function(){
			  $(this).addClass('on')
			  $(this).siblings().removeClass('on')
			})
		  </script>
	</section>

	<section class="sa m60 p60">
		<div class="wrap">
			<div class="img">
				<img src="<?php echo xintheme_img('spa_pic',''); ?>" alt="">
			</div>
			<div class="dq_box wow slideInRight">
				<h6>SPARE PARTS & ACCESSORIES</h6>
				<div class="txt"><?php echo xintheme('in_ser_2'); ?></div>
				<a href="<?php echo get_category_link(3); ?>" class="i_more mt30"><b>products</b></a>
			</div>
		</div>
	</section>

	<section class="contact_info wrap m60">
		<ul class="contact_list wow slideInUp">
			<li>
				<h6>Contact number</h6>
				<div class="txt">
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank"><?php echo xintheme('tel'); ?></a>
				</div>
			</li>
			<li>
				<h6>Enterprise mailbox</h6>
				<div class="txt">
					<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank"><?php echo xintheme('email'); ?></a>
				</div>
			</li>
			<li>
				<h6>Our address</h6>
				<div class="txt"><?php echo xintheme('address'); ?></div>
			</li>
		</ul>
	</section>


</main>












<?php get_template_part('cooperate_form') ?>





<!-- Footer -->

<?php get_footer(); ?>





</body>

</html>