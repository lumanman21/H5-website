<?php
$history = xintheme('banner_c');
if($history){
?>

	<?php foreach ( $history as $value ): ?>
        <div class="swiper-slide">
            <img src="<?php echo $value['banner_c_img'];?>" />
        </div>

	
	<?php endforeach;?>

<?php }?>