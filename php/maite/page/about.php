<?php

/*

Template Name: About Us

*/

get_header();?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/animate.min.css" />

    

    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>



   

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

    

<div class="A_content2 wow slideInUp">

    <p class="com_tit tit">A focused technology company</p>

    <div class="com_imgtit">

      <img src="<?php bloginfo('template_url'); ?>/static/images/bcg_title.png" alt="" />

    </div>



    <!-- video -->

    <div class="videobox wrap">

        <div class="video">

            <iframe width="100%" height="500" src="https://www.youtube.com/embed/RlBn8jQSnnA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

        </div>

    </div>

    <div class="paragraph wrap">

        <p><?php the_content(); ?></p>

    </div>

</div>



<div class="A_content3 wow slideInUp">

    <p class="com_tit tit">Good reputation</p>

    <div class="com_imgtit">

      <img src="<?php bloginfo('template_url'); ?>/static/images/bcg_title.png" alt="" />

    </div>



    <!-- honor -->

    <div class="i_partner_box wrap wow slideInUp">

        <div class="i_partner">

            <div class="i_partner_list swiper-container">

                <ul class="swiper-wrapper" id="honor_list">

                

                    <?php get_template_part( 'template-parts/floor'); ?>

                    

                </ul>				

            </div>

            <div class="pt-pagination"></div>

            <div class="pt-button-next"></div>

            <div class="pt-button-prev"></div>

        </div>

        

        <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

        <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>

        <script>

            // about honor滚动

            var pswiper = new Swiper('.i_partner_list', {

                loop: true,

                loopFillGroupWithBlank: true,

                navigation: {

                    nextEl: '.pt-button-next',

                    prevEl: '.pt-button-prev',

                },

                pagination: {

                    el: '.pt-pagination',

                    clickable: true,

                },

                autoplay: {

                    delay: 3500,

                    disableOnInteraction: false,

                },

                observer: true,

                observeParents: true,

                breakpoints: {

                    0: {

                    slidesPerView: 2,

                    spaceBetween: 20,

                    slidesPerGroup: 3

                    },

                    960: {

                    slidesPerView: 4,

                    spaceBetween: 20,

                    slidesPerGroup: 6

                    },

                    1200: {

                    slidesPerView: 4,

                    spaceBetween: 30,

                    slidesPerGroup: 1

                    }

                }

            });

            //查看大图

            var image = new Viewer(document.getElementById('honor_list'), {

                button: true,

                navbar: false,

                width: 660,

                title: true

            });

            $('.i_partner_list').hover(function(){

                fswiper.autoplay.stop();

            },function(){

                fswiper.autoplay.start();

            });

        </script>



    </div>



    <div class="paragraph wrap  wow slideInUp">

        <p>Along the way, by virtue of its outstanding scientific research achievements and good reputation in the industry, Mascotop has made one gratifying achievement after another: "one kind of capacitor active filler mixing system" and "a capacitor welding machine and welding method" have obtained national invention patent; 110 ℃ high temperature wave cutting safety film capacitor, high heat resistance, high unit capacity ratio composite Dielectric capacitors were awarded high-tech products in Anhui Province; the company was awarded "high-tech enterprise" by the Provincial Department of science and technology in 2013; the "MASCOTOP" brand capacitor was awarded the title of Anhui famous brand; from 2013 to 2015, it was awarded the "trustworthy and heavy contract" enterprise by Xuancheng market supervision and Administration Bureau; and "key backbone enterprise" in electronic industry base of Ningguo Economic and Technological Development Zone.</p>

        <p>A series of independent brands based on "MASCOTOP" have become the golden lettered signboards including the intellectual property rights, corporate culture and corporate reputation. As an enterprise with a high sense of social responsibility, Mascotop always regards the interests and development of employees as the foundation of the enterprise, pays attention to the construction of corporate culture, enriches the staff's life through the evaluation of excellent employees, festival gatherings, skill competitions, singing competitions, new year's games and other activities, so as to enhance the employees' sense of identity and mission for the enterprise. In addition, Mascotop has also given back to the society in many ways. By donating money and materials to children's fund, the poor in society and schools, Mascotop has been highly praised in the industry.</p>

    </div>





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