<?php
$banner_ba = xintheme('banner_ba');
if($banner_ba){
?>

	<?php foreach ( $banner_ba as $value ): ?>

		<li class="swiper-slide">
			<div class="img">
				<img src="<?php echo $value['banner_ba_img'];?>" />
			</div>
    	</li>
	
	
	<?php endforeach;?>

<?php }?>