<?php
$hot = xintheme('banner_q');
if($hot){
?>

	<?php foreach ( $hot as $value ): ?>
        <li class="swiper-slide ">
            <div class="img">
                <img src="<?php echo $value['banner_q_img'];?>" />
            </div>
            <p class="img_txt"><?php echo $value['banner_q_text'];?></p>
        </li>
	
	<?php endforeach;?>

<?php }?>