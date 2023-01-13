<?php
$history = xintheme('banner_v');
if($history){
?>

	<?php foreach ( $history as $value ): ?>

	
	<li class="swiper-slide">
		<div class="img">
			<img src="<?php echo $value['banner_v_img'];?>" />
		</div>
    </li>
	
	
	<?php endforeach;?>

<?php }?>