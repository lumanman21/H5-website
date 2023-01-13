<?php
$history = xintheme('banner_g');
if($history){
?>

	<?php foreach ( $history as $value ): ?>
	
	
	<li>
		<div class="img_box">
			<div class="img">
				<img src="<?php echo $value['banner_g_img'];?>" />
			</div>
		</div>
		<p class="img_txt"><?php echo $value['banner_g_text2'];?></p>
    </li>
	
	
	<?php endforeach;?>

<?php }?>