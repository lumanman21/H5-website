
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
<?php if( xintheme_img('favicon','') ) { ?>
<link rel="shortcut icon" href="<?php echo xintheme_img('favicon','');?>"/>
<?php }else{ ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png"/>
<?php }?>

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/iconfont.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/animate.min.css" />
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/swiper.min.css" />

<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>




    <?php wp_head(); ?>
    <?php echo xintheme('head_code');?>
  </head>