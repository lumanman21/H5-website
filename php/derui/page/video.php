<?php
/*
Template Name: video
*/
get_header();?>


<body>
<?php echo xintheme('foot_code');?>


<!-- header -->
<?php get_template_part('top') ?>
<!-- 当前位置 -->
<div class="in_position wow slideInUp">
   <div class="wrap container">
      <?php echo in_breadcrumbs(); ?>
   </div>
</div>
 <!-- 内容 video-->

<!-- footer -->
<?php get_footer();?>

</body>
</html>