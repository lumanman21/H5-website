<?php

/*

Template Name: solution_S

*/

get_header();?>



<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>



<div class="com_content1">

    <img src="<?php bloginfo('template_url'); ?>/static/images/s_banner.webp" alt="">

</div>



<div class="S_container wrap">

    <!-- in_position -->

    <div class="in_position">

        <div class="wrap container">

        <?php echo in_breadcrumbs(); ?>

        </div>

    </div>

    <ul class="title_list">

      <li><a href="<?php echo get_permalink(19); ?>">Development</a></li>

      <li><a href="<?php echo get_permalink(21); ?>">Manufacture</a></li>

      <li style="background-color: var(--i_color);"><a style="color: #fff; href="<?php echo get_permalink(23); ?>">Shipping</a></li>

    </ul>



    <div class="sm_content">

        <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/S_3.webp" alt=""></div>

        <div class="right_box">

            <h1>Shipping</h1>

            <p class="sm_txt">

                We provide a variety of modes of transportation with the purpose of reasonable price and high efficiency.

                <br> For FCL we will calculate the maximum loading scheme, for LCL we will arrange fastest route.

                <br>For air shipment we can export from Guangzhou, Shenzhen and Shanghai airport, etc. Our forwarder will provide the most appropriate price and best service.

                <br>For express we can provide DHL, FEDEX, TNT service. In addition, we are a long-term customer of the International Department of China Post which can get the lowest price and the best service.

            </p>

        </div>

    </div>

</div>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>







<!-- footer -->

<?php get_footer();?>



	

	

</body>

</html>