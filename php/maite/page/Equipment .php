<?php

/*

Template Name: Equipment 

*/

get_header();?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/animate.min.css" />

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>

<body>

<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>





<div class="com_content1">

    <img src="<?php bloginfo('template_url'); ?>/static/images/Equipment_bc.png" alt="">

</div>



<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

        <?php echo in_breadcrumbs(); ?>

    </div>

</div>

    

<div class="E_content1 wrap wow slideInUp">

    <p class="com_tit tit">EQUIPMENT PROCESS FLOW</p>

    <p class="process_txt">Mascotop has passed ISO9001 quality system certification, ISO14001 environmental system certification and safety production standardization. The main products are: CBB series metallized film capacitors; ch85 series high voltage microwave oven capacitors; other special capacitors. The products have passed CQC, UL, CE, TUV, VDE, CSA, ISI certification at home and abroad, and obtained a number of national patents. Striving to "become a world-class capacitor manufacturer" has always been the goal of Mascotop company, and insisting on reform and innovation is the power source of sustainable development of the company. </p>

    <ul class="E_img_container wow slideInUp" id="equip_list">

        <?php get_template_part( 'template-parts/equipment'); ?>

    </ul>

    <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

    <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

    <script>

    var image = new Viewer(document.getElementById('equip_list'), {

        button: true,

        navbar: false,

        width:800,

        title: false

    });

    </script>

</div>





<!-- footer -->

<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>

<script>

  //引入wow动画效果

  wow = new WOW({

    animateClass: 'animated',

    offset: 100,

    mobile: false,

  });

  wow.init();

</script>

</body>

</html>