<?php



get_header(); ?>



<body>
  
<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>





<div class="top_content">

  <img src="<?php bloginfo('template_url'); ?>/static/images/s_banner.webp" alt="">

</div>

<!-- in_position -->

<div class="in_position">

  <div class="wrap container">

    <?php echo in_breadcrumbs(); ?>

  </div>

</div>

<main>

  <div class="s_content wrap wow slideInUp">

    <h1>Download</h1>

    <div class="line"></div>

    <div class="tit">

      <a href="<?php echo get_category_link(15); ?>">Download</a>

      <a href="<?php echo get_category_link(24); ?>" class="on">Technical Support</a>

    </div>

    <div class="s_container">

      <ul class="menu2_tit">

      <?php

        $args=array(

        'child_of'=> 24,

        'parent' => 24,

        'hide_empty'=>'0',

        'orderby'=>'id',

        'order'=>'asc',

        );

        $categories=get_categories($args);

        foreach($categories as $category) { 

        $category_data = get_term_meta( $category->term_id, 'category_options', true ); ?>

        <li>

            <a href="<?php echo get_category_link( $category->term_id ) ;?>"><?php echo $category->name;?></a>

            <ul>

                <?php

                    $argszi=array(

                    'child_of'=> $category->term_id,

                    'parent' => $category->term_id,

                    'hide_empty'=>'0',

                    );

                    $categorieszi=get_categories($argszi);

                    foreach($categorieszi as $categoryzi) {

                        echo '<li><a href="' . get_category_link( $categoryzi->term_id ) . '" >' . $categoryzi->name.'</a></li>';

                    }

                ?>

            </ul>

        </li>

        <?php } ?>

        <!-- <li><a href="#">Pump</a></li>

        <li><a href="#">Diesel Engine</a></li>

        <li><a href="#">Controller</a></li>

        <li><a href="#">Other Problems</a></li> -->

      </ul>

      <ul class="answer_list">







        <?php while( have_posts() ): the_post(); ?>

            <li>

              <div class="answer_tit">

                <img class="open_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jia.svg" alt="">

                <img class="close_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jian.svg" alt="">

                <p><?php the_title_attribute(); ?></p>

              </div>

    

              <div class="answer_txt">

                <?php the_content(); ?>

              </div>

            </li>

        <?php endwhile; ?>















        <!-- <li>

          <div class="answer_tit">

            <img class="open_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jia.svg" alt="">

            <img class="close_ico" src="<?php bloginfo('template_url'); ?>/static/images/ico_jian.svg" alt="">

            <p>1.No liquid delivered？</p>

          </div>

          <div class="answer_txt">

            1.Pump is not primed：Check the priming system.

            2.Speed too low：Check the engine is running at the required power/speed.

            3.Sum of suction and discharge head greater than rated head of pump：Check the total head requirements against pump performance curve.

            4.Impeller completely plugged：Clean any debris out of the impeller.

            5.Suction piping or strainer plugged and/or leaking air：Clean any debris out of the suction hose and strainer. Repair any leaks in suction hose.

            6.Worn impeller and/or wear rings：Inspect and replace as necessary.

            7.Worn mechanical seal：Inspect and replace as necessary.

          </div>

        </li>-->

      </ul>

    </div>

    <script>

      $('.answer_list').find('li').find('.answer_tit').each(function(i){

      $(this).click(function(){

        if($(this).hasClass('liNow')){

          $('.answer_list').find('li').find('.answer_tit').removeClass('liNow');

           $('.answer_list').find('li').removeClass('liNow');

          $('.answer_list').find('.answer_txt').slideUp(300);

          }else{

            $('.answer_list').find('li').find('.answer_tit').removeClass('liNow');

            $('.answer_list').find('li').removeClass('liNow');

            $('.answer_list').find('.answer_txt').slideUp(300);

            $(this).addClass('liNow');

            $('.answer_list').find('li').eq(i).addClass('liNow');

            $('.answer_list').find('.answer_txt').eq(i).slideToggle(300);

          }

        })

      })

    </script>



  </div>
  <div class="wrap wow slideInUp"><?php echo do_shortcode( ' [wpforms id="41"] ' ); ?></div>

</main>











<!-- footer -->

<?php get_footer();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>





</body>

</html>