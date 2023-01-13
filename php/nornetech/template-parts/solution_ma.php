<?php
$floor = xintheme('banner_ma');
if($floor){
?>

	<?php foreach ( $floor as $value ): ?>
        <li><a href="#">
            <div class="img">
              <img src="<?php echo $value['banner_ma_img'];?>" alt="">
            </div>
            <p class="tit"><?php echo $value['banner_ma_text'];?></p>
            <p class="text"><?php echo $value['banner_ma_text2'];?></p>
        </a></li>

	<?php endforeach;?>

<?php }?>