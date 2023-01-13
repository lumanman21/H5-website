<?php
$factory = xintheme('banner_v2');
if($factory){
?>

	<?php foreach ( $factory as $value ): ?>

		<div class="swiper-slide">
			<img src="<?php echo $value['banner_v2_img'];?>" />
        </div>

	
	
	<?php endforeach;?>

<?php }?>