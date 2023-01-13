<?php
$history = xintheme('banner_f1');
if($history){
?>

	<?php foreach ( $history as $value ): ?>
	
		<li class="swiper-slide">
			<div class="img"><img src="<?php echo $value['banner_f1_img'];?>" /></div>
			<p><?php echo $value['banner_f1_txt'];?></p>
        </li>
	<?php endforeach;?>

<?php }?>