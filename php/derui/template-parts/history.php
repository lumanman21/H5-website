<?php
$history = xintheme('banner_h');
if($history){
?>

	<?php foreach ( $history as $value ): ?>
    <div class="swiper-slide">
      <p><?php echo $value['banner_h_age'];?></p>
      <i class="yuan"></i>
    </div>	
	<?php endforeach;?>

<?php }?>