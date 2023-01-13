<?php
$history = xintheme('banner_z');
if($history){
?>

	<?php foreach ( $history as $value ): ?>
	
	
	
	<li>
        <iframe width="100%" height="200" src="<?php echo $value['banner_z_url'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    </li>
	
	
	<?php endforeach;?>

<?php }?>