<?php

/*

Template Name: About_cetify

*/

get_header();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>





<body>

<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>



<div class="com_content1">

    <img src="<?php bloginfo('template_url'); ?>/static/images/About_bc.webp" alt="">

</div>



<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

      <?php echo in_breadcrumbs(); ?>

    </div>

</div>





<p class="com_tit tit">Quality Certification</p>

<div class="com_imgtit">

    <img src="<?php bloginfo('template_url'); ?>/static/images/bcg_title.png" alt="" />

</div>



<div class="paragraph wrap">

    <p>Mascotop has passed ISO9001 quality system certification, ISO14001 environmental system certification and safety production standardization. The main products are: CBB series metallized film capacitors; ch85 series high voltage microwave oven capacitors; other special capacitors. The products have passed CQC, UL, CE, TUV, VDE, CSA , ISI certification at home and abroad, and obtained a number of national patents. Striving to "become a world-class capacitor manufacturer" has always been the goal of Mascotop company, and insisting on reform and innovation is the power source of sustainable development of the company. The company has strong R & D center and experienced technical service team. Relying on the first-class production and testing equipment, the company ensures the excellent quality and high-quality service of Mascotop capacitor, which is widely recognized and praised by domestic and foreign customers.</p>

</div>







<ul class="A_cetify wrap wow slideInUp" id="certify_list">

    <?php get_template_part( 'template-parts/quality'); ?>

</ul>







<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

<script>

    var image = new Viewer(document.getElementById('certify_list'), {

    button: true,

    navbar: false,

    width: 800,

    title: false

});

</script>



<!-- footer -->

<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>



</body>

</html>