<?php
$floor = xintheme('banner_b');
if($floor){
?>

	<?php foreach ( $floor as $value ): ?>

              <li class="swiper-slide">
                  <div class="img">
                    <img src="<?php echo $value['banner_b_img'];?>" alt="">
                  </div>
              </li>
	<?php endforeach;?>

<?php }?>