<?php
$hot = xintheme('banner_q2');
if($hot){
?>

	<?php foreach ( $hot as $value ): ?>
        <li class="swiper-slide ">
            <div class="img">
                <img src="<?php echo $value['banner_q2_img'];?>" />
            </div>
        </li>
	
	<?php endforeach;?>

<?php }?>