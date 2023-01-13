<?php
$history = xintheme('banner_f');
if($history){
?>

	<?php foreach ( $history as $value ): ?>
		<li class="swiper-slide">
			<div class="img">
				<img src="<?php echo $value['banner_f_img'];?>" />
			</div>
		</li>
	
		
	
	
	<?php endforeach;?>

<?php }?>