<?php
$history = xintheme('banner_z');
if($history){
?>

	<?php foreach ( $history as $value ): ?>
		<div class="swiper-slide"><img src="<?php echo $value['banner_z_img'];?>" /></div>
	
		
	
	
	<?php endforeach;?>

<?php }?>