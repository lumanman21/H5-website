<?php
$history = xintheme('banner_f');
if($history){
?>

	<?php foreach ( $history as $value ): ?>

        <li>
          <div class="answer_tit">
            <img src="<?php bloginfo('template_url'); ?>/static/images/faq.png" alt="">
            <p><?php echo $value['banner_fa'];?></p>
          </div>
          <div class="answer_txt">
            <?php echo $value['banner_fq'];?>
          </div>
        </li>
	
	<?php endforeach;?>

<?php }?>