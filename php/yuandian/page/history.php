<?php

/*

Template Name: history

*/

get_header();?>

   

<body>
<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>



<!-- top_content -->

<div class="about_banner">

  <img class="about_img" src="<?php bloginfo('template_url'); ?>/static/images/History_1.jpg" alt="">

  <div class="about_banner_text">

      <h1>history</h1>

     <!-- in_position -->

     <div class="in_position">

            <div class="container">

            <?php echo in_breadcrumbs(); ?>

            </div>

        </div>

  </div>

</div>







<main>

    <!-- 标题 -->

    <div class="history_title">

          <h1>Our history</h1>

          <p>Committed to providing high-quality load stability solutions</p>

    </div>

    <!-- history -->

    <div class="history">

         <!-- <div class="history_img">

             <img src="<?php bloginfo('template_url'); ?>/static/images/history1.png" alt="">

         </div> -->

         <ul class="history_ul">

            <?php get_template_part( 'template-parts/history'); ?>

             <!-- <li>

                 <div class="history_li_text">

                      <h4>Established in 2017</h4>

                      <h5>Headquartered in Huangshan

                        The main products are: nano winding film, FFS packaging bag</h5>

                 </div>

                 <div class="history_li_right">

                     <div class="history_li_img">

                         <img src="<?php bloginfo('template_url'); ?>/static/images/history3.jpg" alt="">

                     </div>

                 </div>

             

                 <i class="history_i">

                       <p>2017</p>

                 </i>

             </li> -->



         </ul>

    </div>

    <script>

          $('.history_ul li').hover(function(){

            $('.history_ul li').removeClass('history_active')

            $(this).children('i').toggleClass('history_active')

          })

          $('.history_ul li i').hover(function(){

            $('.history_ul li').removeClass('history_active')

            $(this).toggleClass('history_active')

          })

          $('.history_ul li i p').hover(function(){

            $('.history_ul li').removeClass('history_active')

            $(this).parent().toggleClass('history_active')

          })

    </script>

</main>







<!-- footer -->

<?php get_footer();?>







</body>

</html>