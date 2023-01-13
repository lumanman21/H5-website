<?php
$modular_title = $id['modular_title_7'];
$modular_subtitle = $id['modular_subtitle_7'];?>
<div class="<?php if( $id['modular_no_mobile'] ){ ?>mobile_modular_no <?php } ?>icon-boxes icon-box--four">
	<div class="module-full-screen-title not-animated"<?php echo data_animate();?>>
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
	<div class="page-width">
		<div class="row">
			<?php foreach ( xintheme('add_feature') as $value ): $i++; ?>
			<div class="col-lg-4 col-md-6 not-animated"<?php echo data_animate();?>>
				<div class="icon-box-four d-flex">
					<div class="box-icon">
						<span class="icon-rounded-sm"><i class="<?php echo $value['feature_icon'];?>"></i></span>
					</div>
					<div class="box-content">
						<h6><?php echo $value['feature_title'];?></h6>
						<p>
							<?php echo $value['feature_describe'];?>
						</p>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</div>