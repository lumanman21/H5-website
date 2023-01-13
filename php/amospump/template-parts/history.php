<?php
$history = xintheme('banner_c');
if($history){
?>

	<?php foreach ( $history as $value ): ?>


		<li class="swiper-slide">
            <h4><?php echo $value['banner_c_age'];?></h4>
            <p><?php echo $value['banner_c_txt'];?></p>
        </li>
	
	<?php endforeach;?>

<?php }?>