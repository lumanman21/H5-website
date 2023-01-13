<?php
$banner_ch = xintheme('banner_ch');
if($banner_ch){
?>

	<?php foreach ( $banner_ch as $value ): ?>

		<li class="swiper-slide">
			<div class="img">
				<img src="<?php echo $value['banner_ch_img'];?>" />
			</div>
    	</li>
	
	
	<?php endforeach;?>

<?php }?>