<?php
$floor = xintheme('banner_de');
if($floor){
?>

	<?php foreach ( $floor as $value ): ?>
        <li><a href="#">
            <div class="img">
              <img src="<?php echo $value['banner_de_img'];?>" alt="">
            </div>
            <p class="tit"><?php echo $value['banner_de_text'];?></p>
            <p class="text"><?php echo $value['banner_de_text2'];?></p>
        </a></li>

	<?php endforeach;?>

<?php }?>