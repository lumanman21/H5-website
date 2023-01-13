<?php
$factory = xintheme('banner_v');
if($factory){
?>

	<?php foreach ( $factory as $value ): ?>

		<div class="swiper-slide">
			<img src="<?php echo $value['banner_v_img'];?>" />
        </div>

	
	
	<?php endforeach;?>

<?php }?>