<?php
$history = xintheme('banner_a');
if($history){
?>

	<?php foreach ( $history as $value ): ?>

		<li>
			<div class="img">
				<img src="<?php echo $value['banner_a_img'];?>" />
			</div>
            <h5><?php echo $value['banner_a_text'];?></h5>
            <p><?php echo $value['banner_a_text2'];?></p>
        </li>

	<?php endforeach;?>

<?php }?>