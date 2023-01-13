<?php
$history = xintheme('banner_h');
if($history){
?>

	<?php foreach ( $history as $value ): ?>


		<li>
			<div class="history_li_text">
				<h4><?php echo $value['banner_h_text'];?></h4>
				<h5><?php echo $value['banner_h_text2'];?></h5>
			</div>
			<div class="history_li_right">
				<div class="history_li_img">
					<img src="<?php echo $value['banner_h_img'];?>">
				</div>
			</div>
			<!-- 中间 -->
			<i class="history_i">
				<p><?php echo $value['banner_h_age'];?></p>
			</i>
        </li>


	<?php endforeach;?>

<?php }?>