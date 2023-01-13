<?php $history = xintheme('banner_q'); if($history){ ?>
		<?php foreach ( $history as $value ): ?>
			<li class="faq_list">
			<div class="faq_tit">
			<p><?php echo $value['banner_q_text'];?></p>
			<img class="open_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jia.svg" alt="">
			<img class="close_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jian.svg" alt="">
			</div>
			<div class="faq_txt">
			<?php echo $value['banner_q_text2'];?>
			</div>
		</li>
		<?php endforeach;?>
<?php }?>