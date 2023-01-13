<?php
$history = xintheme('banner_he');
if($history){
?>

	<?php foreach ( $history as $value ): ?>
    <div class="swiper-slide">
      <div class="img"><img src="<?php echo $value['banner_he_img'];?>" /></div>
      <div class="right">
        <h2><?php echo $value['banner_he_age'];?></h2>
        <h3>Forethought</h3>
        <div class="event">
          <?php echo $value['banner_he_event'];?>
        </div>
      </div>
    </div>


	<?php endforeach;?>

<?php }?>