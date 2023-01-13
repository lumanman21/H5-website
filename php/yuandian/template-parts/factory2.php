<?php
$history = xintheme('banner_f2');
if($history){
?>

	<?php foreach ( $history as $value ): ?>
	
		<li class="swiper-slide">
			<div class="img"><img src="<?php echo $value['banner_f2_img'];?>" /></div>
			<p><?php echo $value['banner_f2_txt'];?></p>
        </li>
	<?php endforeach;?>

<?php }?>