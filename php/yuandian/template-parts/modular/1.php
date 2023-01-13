<?php
$cat_id = $id['modular_1_category'];
$modular_title = $id['modular_title_1'];
$modular_subtitle = $id['modular_subtitle_1'];?>
<div class="<?php if( $id['modular_no_mobile'] ){ ?>mobile_modular_no <?php } ?>module-full-screen module-full-1">
	<div class="module-inner not-animated"<?php echo data_animate();?>>
		<div class="page-width">

			<div class="module-full-screen-title">
				<?php if( $modular_title ){?>
				<h2 style="color: <?php echo $txt_color;?>;"><?php echo $modular_title; ?></h2>
				<?php }else{ ?>
				<h2 style="color: <?php echo $txt_color;?>;"><?php $cat = get_category($cat_id);echo $cat->name; ?></h2>
				<?php }?>
				<div class="module-title-content">
					<i class="mark-left" style="background-color: <?php echo $txt_color;?>; opacity: 0.5;"></i>
					<h3 style="color: <?php echo $txt_color;?>; opacity: 0.8;"><?php echo $modular_subtitle;?></h3>
					<i class="mark-right" style="background-color: <?php echo $txt_color;?>; opacity: 0.5;"></i>
				</div>
			</div>

			<div class="qhd-module">
				<div class="column">
					<div class="module-default module">
						<div class="entry-list-time-hl-col entry-list-time-hl">
						<ul class="column marg-per5 clearfix">
							<?php
							query_posts( 'cat='.$cat_id.'&posts_per_page=6,&ignore_sticky_posts=1' );
							while( have_posts() ): the_post(); ?>
							<li class="col-2-1 not-animated"<?php echo data_animate();?>>
								<div class="entry-item">
									<div class="time">
										<p class="time-day"><?php the_time('d') ?></p>
										<p class="time-date"><?php the_time('Y-m') ?></p>
									</div>
									<div class="entry-title">
										<h2><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h2>
									</div>
									<div class="entry-summary">
										<div class="qhd-content">
											<p><?php echo mb_strimwidth(strip_tags($post->post_content),0,110,'...');?></p>
										</div>
									</div>
								</div>
							</li>
							<?php endwhile; wp_reset_query(); ?>
							<div class="module-full-screen-more">
								<a href="<?php echo get_category_link( $cat_id ); ?>" style="color: <?php echo $txt_color;?>;border-color: <?php echo $txt_color;?>;">查看更多</a>
							</div>
						</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>