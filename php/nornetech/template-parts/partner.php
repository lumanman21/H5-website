<?php
$floor = xintheme('banner_z');
if($floor){
?>

	<?php foreach ( $floor as $value ): ?>
            <li class="swiper-slide">
                <div class="img">
                  <img src="<?php echo $value['banner_z_img'];?>" alt="">
                </div>
            </li>
	<?php endforeach;?>

<?php }?>