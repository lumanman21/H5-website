<?php
$floor = xintheme('banner_v');
if($floor){
?>

	<?php foreach ( $floor as $value ): ?>
            <li class="swiper-slide">
                <div class="img">
                  <img src="<?php echo $value['banner_v_img'];?>" alt="">
                </div>
                <div class="imgtxt"><p><?php echo $value['banner_v_text'];?></p></div>
            </li>
	<?php endforeach;?>

<?php }?>