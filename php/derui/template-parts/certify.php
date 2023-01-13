<?php
$history = xintheme('banner_c');
if($history){
?>

	<?php foreach ( $history as $value ): ?>
        <li class="swiper-slide">
            <div class="img">
                <img src="<?php echo $value['banner_c_img'];?>" />
            </div>
            <h3><?php echo $value['banner_c_txt'];?></h3>
        </li>

	
	<?php endforeach;?>

<?php }?>