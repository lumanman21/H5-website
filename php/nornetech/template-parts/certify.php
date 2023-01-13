<?php
$floor = xintheme('banner_q');
if($floor){
?>

	<?php foreach ( $floor as $value ): ?>
            <li class="swiper-slide">
                <div class="img">
                  <img src="<?php echo $value['banner_q_img'];?>" alt="">
                </div>
            </li>
	<?php endforeach;?>

<?php }?>