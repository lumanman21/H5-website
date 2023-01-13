<?php

/*

Template Name: faq

*/

get_header();?>

   

<body>
<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>



<!-- top_content -->

<div class="about_banner">

  <img class="about_img" src="<?php bloginfo('template_url'); ?>/static/images/f_bc.webp" alt="">

  <div class="about_banner_text">

      <h1>faq</h1>

      <!-- in_position -->

      <div class="in_position">

            <div class="container">

            <?php echo in_breadcrumbs(); ?>

            </div>

        </div>

  </div>

</div>

<main>

    <div class="H_content1 F_content1 wow slideInRight">

        <div class="left_txt">

            <p class="top_tit">FAQ</p>

            <h1>Answering questions</h1>

            <ul class="faq_list_box">

              <?php get_template_part( 'template-parts/faq'); ?>

            </ul>

        </div>

        <div class="right_img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_1.webp" alt=""></div>

    </div>

    <div class="H_content1 F_content2 wow slideInLeft">

      <div class="right_img"><img src="<?php bloginfo('template_url'); ?>/static/images/n_1.png" alt=""></div>

        <div class="left_txt">

            <p class="top_tit">FAQ</p>

            <h1>Answering questions</h1>

            <ul class="faq_list_box">

              <?php get_template_part( 'template-parts/faq2'); ?>

            </ul>

        </div>

    </div>



    <script>

	$('.faq_list_box').find('li').find('.faq_tit').each(function(i){

	$(this).click(function(){

		if($(this).hasClass('liNow')){

			$('.faq_list_box').find('li').find('.faq_tit').removeClass('liNow');

			 $('.faq_list_box').find('li').removeClass('liNow');

			$('.faq_list_box').find('.faq_txt').slideUp(300);

			}else{

				$('.faq_list_box').find('li').find('.faq_tit').removeClass('liNow');

				$('.faq_list_box').find('li').removeClass('liNow');

				$('.faq_list_box').find('.faq_txt').slideUp(300);

				$(this).addClass('liNow');

				$('.faq_list_box').find('li').eq(i).addClass('liNow');

				$('.faq_list_box').find('.faq_txt').eq(i).slideToggle(300);

			}

		})

	})

</script>







    <!-- <div class="H_content1 F_content2 wow slideInLeft">

      <div class="right_img"><img src="<?php bloginfo('template_url'); ?>/static/images/n_1.png" alt=""></div>

      <div class="left_txt">

          <p class="top_tit">News</p>

          <h1>Answering questions</h1>

          <div class="faq_list">

            <div class="faq_tit">

              <p>HOMPAK’s FENG-CHOU factory founded</p>

              <img class="open_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jia.svg" alt="">

              <img class="close_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jian.svg" alt="">

            </div>

            <div class="faq_txt">

              Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.

            </div>

          </div>

          <div class="faq_list">

            <div class="faq_tit">

              <p>HOMPAK’s FENG-CHOU factory founded</p>

              <img class="open_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jia.svg" alt="">

              <img class="close_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jian.svg" alt="">

            </div>

            <div class="faq_txt">

              Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.

            </div>

          </div>

          <div class="faq_list">

            <div class="faq_tit">

              <p>HOMPAK’s FENG-CHOU factory founded</p>

              <img class="open_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jia.svg" alt="">

              <img class="close_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jian.svg" alt="">

            </div>

            <div class="faq_txt">

              Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.

            </div>

          </div>

      </div>

    </div> -->

    

  

    <!-- <script>

      $('.open_ico').click(function(){

        $(this).parent().siblings().stop().slideToggle()

        $(this).toggle()

        $(this).siblings('.close_ico').toggle()

      })

      $('.close_ico').click(function(){

        $(this).parent().siblings().stop().slideToggle()

        $(this).toggle()

        $(this).siblings('.open_ico').toggle()

      })

    </script> -->

</main>







<!-- footer -->

<?php get_footer();?>







</body>

</html>