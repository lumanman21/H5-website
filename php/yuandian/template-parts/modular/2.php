<?php
$modular_title = $id['modular_title_2'];
$modular_subtitle = $id['modular_subtitle'];
$cat_id = $id['modular_2_category'];
$bg_color = $id['modular_2_bg_color'];
$bg_color = $id['modular_2_bg_color'];
$txt_color = $id['modular_2_txt_color'];?>
<script>
$(function(){
	$('#owl-<?php echo md5($modular_title);?>').owlCarousel({
		items: 4,
		//autoPlay:true,
		//scrollPerPage:true,
		pagination:false,
		itemsMobile:false,
		navigation: true,
		navigationText: ["<i class='la la-angle-left'></i>","<i class='la la-angle-right'></i>"]
	});
});
</script>
<div class="<?php if( $id['modular_no_mobile'] ){ ?>mobile_modular_no <?php } ?>module-full-screen module-full-screen-hl case" style="background-color: <?php echo $bg_color;?>">
	<div class="module-inner not-animated"<?php echo data_animate();?>>
		<div class="page-width">
			<div class="module-full-screen-title">
				<?php if( $modular_title ){?>
				<h2 style="color: <?php echo $txt_color;?>;"><?php echo $modular_title; ?></h2>
				<?php }else{ ?>
				<h2 style="color: <?php echo $txt_color;?>;"><?php $cat = get_category($cat_id);echo $cat->name; ?></h2>
				<?php }?>
				<div class="module-title-content">
					<i class="mark-left" style="background-color: <?php echo $txt_color;?>; opacity: 0.2;"></i>
					<h3 style="color: <?php echo $txt_color;?>; opacity: 0.8;"><?php echo $modular_subtitle;?></h3>
					<i class="mark-right" style="background-color: <?php echo $txt_color;?>; opacity: 0.2;"></i>
				</div>
			</div>
			<div class="module-full-screen-content">
				<div class="scrollable carousel product-scrollable product-set clearfix">
					<ul id="owl-<?php echo md5($modular_title);?>" class="clearfix">
						<?php 	query_posts( 'cat='.$cat_id.'&posts_per_page=20,&ignore_sticky_posts=1' );
						while( have_posts() ): the_post(); ?>
						<li>
						<div class="scrollable-item">
							<p class="scrollable-img">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo post_thumbnail(260, 260); ?>" alt="<?php the_title(); ?>"/></a>
							</p>
							<h2><a href="<?php the_permalink(); ?>" style="color: <?php echo $txt_color;?> !important;"><?php the_title_attribute(); ?></a></h2>
						</div>
						</li>
						<?php endwhile; wp_reset_query(); ?> 
					</ul>
				</div>
			</div>
			<div class="module-full-screen-more">
				<a href="<?php echo get_category_link( $cat_id ); ?>" style="color: <?php echo $txt_color;?>;border-color: <?php echo $txt_color;?>;">查看更多</a>
			</div>
		</div>
	</div>
</div>