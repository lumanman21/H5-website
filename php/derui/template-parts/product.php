<?php
$history = xintheme('banner_x');
if($history){
?>

	<?php foreach ( $history as $value ): ?>

    <div class="swiper-slide">
      <h3><?php echo $value['banner_x_tit'];?></h3>
      <div class="txt">
        <p><?php echo $value['banner_x_txt1'];?></p><br>
        <p><?php echo $value['banner_x_txt2'];?></p><br>
        <p><?php echo $value['banner_x_txt3'];?></p><br>
        
      </div>
      <div class="com_button"><a href="<?php echo get_category_link(3); ?>">View Details</a></div>
    </div>


	<?php endforeach;?>

<?php }?>