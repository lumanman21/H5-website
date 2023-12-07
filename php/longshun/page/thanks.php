<?php
/*
Template Name: Thanks
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" name="viewport" id="viewport">
<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
<?php if( xintheme_img('favicon','') ) { ?>
<link rel="shortcut icon" href="<?php echo xintheme_img('favicon','');?>"/>
<?php }else{ ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png"/>
<?php }?>
<title>Thanks</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/static/css/public.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/rem.js"></script>
<?php echo xintheme('head_code');?>
</head>

<body>
<?php echo xintheme('foot_code');?>



<div class="thanks">
	<a class="thanks_logo" href="<?php bloginfo('url'); ?>">
		<img src="<?php echo xintheme_img('logo','');?>" alt="<?php bloginfo('name'); ?>">
	</a>
	<h2>Thank you for your submission！</h2>
	<a class="thanks_link" href="/">HOME</a>
</div>


</body>
</html>