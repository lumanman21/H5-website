<?php

/*

Template Name: Case

*/

get_header();?>

   

<body>
  
<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>



<div class="top_content">

  <img src="<?php bloginfo('template_url'); ?>/static/images/pic_1672902042248.webp" alt="">

</div>



</div>



<!-- in_position -->

<div class="in_position">

  <div class="wrap container">

    <?php echo in_breadcrumbs(); ?>

  </div>

</div>



<div class="case_box wrap wow slideInUp">

  <ul id="case_list">

    <?php get_template_part( 'template-parts/case'); ?>

  </ul>

  <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

  <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

  <script>

    /*查看大图*/

    var image = new Viewer(document.getElementById('case_list'), {

          button: true,

          navbar: false,

          width: 660,

          title: true

        });

  </script>

</div>

<div class="wrap wow slideInUp"><?php echo do_shortcode( ' [wpforms id="41"] ' ); ?></div>









<!-- footer -->

<?php get_footer();?>





<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>





</body>

</html>