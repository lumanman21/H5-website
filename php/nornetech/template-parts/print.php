<?php
$floor = xintheme('banner_print');
if($floor){
?>

	<?php foreach ( $floor as $value ): ?>
            <li class="swiper-slide">
                <div class="img">
                  <img src="<?php echo $value['banner_print_img'];?>" alt="">
                </div>
                <div class="imgtxt"><p><?php echo $value['banner_print_text'];?></p></div>
            </li>
	<?php endforeach;?>

<?php }?>