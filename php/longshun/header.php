<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="renderer" content="webkit"/>
<meta name="force-rendering" content="webkit"/>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
<?php if( xintheme_img('favicon','') ) { ?>
<link rel="shortcut icon" href="<?php echo xintheme_img('favicon','');?>"/>
<?php }else{ ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png"/>
<?php }?>
<meta name="keywords" content="" />
<meta name="description" content="" />

<?php wp_head(); ?>
<script>
	jQuery(document).ready(function($) {
		$("link[href*='getwid']").remove();
	});
</script>

<link href="<?php echo get_template_directory_uri(); ?>/static/css/animate.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/static/css/public.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/static/css/font.all.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=2.0" type="text/css" />

<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/static/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/static/js/swiper.animate.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/static/js/rem.js"></script>

<?php echo xintheme('head_code');?>

</head>

<body>
<?php echo xintheme('foot_code');?>


