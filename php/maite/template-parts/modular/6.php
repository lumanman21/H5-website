<?php
$modular_title = $id['modular_title_6'];
$modular_subtitle = $id['modular_subtitle_6'];?>
<div class="<?php if( $id['modular_no_mobile'] ){ ?>mobile_modular_no <?php } ?>module-full-screen module-full-6">
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
								$index_modular = xintheme('index_modular');
								if(is_array($index_modular)):foreach($index_modular as $id):
									$theme_img =  $id['modular_6_logo'];
									if( ! empty( $theme_img ) ) :
									$theme_img = explode( ',', $id['modular_6_logo'] );
									foreach ( $theme_img as $id ) :
									$modular_6_logo = wp_get_attachment_image_src( $id, 'full' );
								?>
								<li>
									<img src="<?php echo $modular_6_logo[0];?>" alt="" class="img-thumbnail client-15">
								</li>
								<?php endforeach;endif;?>
								<?php endforeach;endif;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>