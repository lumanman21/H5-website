<?php
$factory = xintheme('banner_a');
if($factory){
?>

	<?php foreach ( $factory as $value ): ?>
	
	<li>
		<div class="img">
			<img src="<?php echo $value['banner_a_img'];?>" />
		</div>
		<p><p class="img_txt"><?php echo $value['banner_a_text'];?></p></p>
    </li>
	
	<?php endforeach;?>

<?php }?>