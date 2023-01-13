<?php
$floor = xintheme('banner_e');
if($floor){
?>

	<?php foreach ( $floor as $value ): ?>
            <li class="swiper-slide">
                <div class="img">
                  <img src="<?php echo $value['banner_e_img'];?>" alt="">
                </div>
                <div class="imgtxt"><p><?php echo $value['banner_e_text'];?></p></div>
            </li>
	<?php endforeach;?>

<?php }?>