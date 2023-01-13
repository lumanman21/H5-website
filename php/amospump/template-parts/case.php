<?php
$history = xintheme('banner_b');
if($history){
?>

	<?php foreach ( $history as $value ): ?>

	<li>
		<div class="img_box">
			<div class="img">
				<img src="<?php echo $value['banner_b_img'];?>" />
			</div>
		</div>
      	<p><?php echo $value['banner_b_txt'];?></p>
    </li>
	
	
	<?php endforeach;?>

<?php }?>