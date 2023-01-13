<?php
/*
Template Name: thanks
*/
get_header();?>
<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>

<body>
<?php echo xintheme('foot_code');?>


<!-- header -->
<?php get_template_part('top') ?>

<div style="margin-top:180px"></div>

<!-- in_position -->
<div class="in_position">
    <div class="wrap container">
      <?php echo in_breadcrumbs(); ?>
    </div>
</div>

<!-- 内容 thanks-->

<div class="thanks">
	<h2>Thank you for your submission！</h2>
	<a href="/">HOME</a>
</div>


<!-- footer -->
<?php get_footer();?>
<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>
</body>
</html>