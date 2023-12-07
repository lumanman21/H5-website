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
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png"/>
    <?php }?>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

        <link href="<?php bloginfo('template_url'); ?>/static/css/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('template_url'); ?>/static/css/public.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=1.0" type="text/css" />

        <script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
        <script src="<?php bloginfo('template_url'); ?>/static/js/swiper-bundle.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/static/js/rem.js"></script>

    <?php wp_head(); ?>
    <?php echo xintheme('head_code');?>
    <script>
            jQuery(document).ready(function($) {
                    $("link[href*='getwid']").remove();
            });
    </script>

</head>

<body>
    <?php echo xintheme('foot_code');?>