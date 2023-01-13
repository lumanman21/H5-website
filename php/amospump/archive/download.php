<?php



get_header(); ?>



<body>
  
<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>





<div class="top_content">

  <img src="<?php bloginfo('template_url'); ?>/static/images/pic_1672802381487.webp" alt="">

</div>


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

      <a href="<?php echo get_category_link(15); ?>" class="on">Download</a>

      <a href="<?php echo get_category_link(24); ?>">Technical Support</a>

    </div>

    <div class="s_container">

      <ul class="menu_tit">



      <?php

        $args=array(

        'child_of'=> 15,

        'parent' => 15,

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















        <!-- <li><a href="#">Applications</a></li>

        <li><a href="#">Dewatering Truck</a></li>

        <li>

          <a href="#">Pump Station</a>

          <ul>

            <li>

              <a href="#">Skid mounted sound attenuated pump station</a>

            </li>

            <li>

              <a href="#">Skid mounted sound attenuated pump station</a>

            </li>

            <li>

              <a href="#">Skid mounted sound attenuated pump station</a>

            </li>

            <li>

              <a href="#">Skid mounted sound attenuated pump station</a>

            </li>

            

          </ul>

        </li> -->

      </ul>

      <script>

        $(function(){

          $('.menu_tit>li').hover(function(){

            $(this).children('ul').stop().slideToggle()

          })

        })

      </script>

      <ul class="download_list">



      <?php while( have_posts() ): the_post(); ?>

          <li>

              <a href="<?php $download_file= get_post_meta($post->ID, 'extend_info', true); echo $download_file['download_file']; ?>" class="P_container">

                <div class="txt"><?php the_title_attribute(); ?></div>

                <div class="data"><?php the_time('Y-m-d') ?></div>

              </a>

          </li>

      <?php endwhile; ?>





        <!-- <li><a href="#">

          <p>MH100C14_4H50TIC_Skid Mounted_HATZ_AMOS</p>

          <p class="data"><?php the_time('Y-m-d') ?></p>

        </a></li>

        <li><a href="#">

          <p>MH100C14_4H50TIC_Skid Mounted_HATZ_AMOS</p>

          <p class="data">2020-7-8</p>

        </a></li>

        <li><a href="#">

          <p>MH100C14_4H50TIC_Skid Mounted_HATZ_AMOS</p>

          <p class="data">2020-7-8</p>

        </a></li>

        <li><a href="#">

          <p>MH100C14_4H50TIC_Skid Mounted_HATZ_AMOS</p>

          <p class="data">2020-7-8</p>

        </a></li>

        <li><a href="#">

          <p>MH100C14_4H50TIC_Skid Mounted_HATZ_AMOS</p>

          <p class="data">2020-7-8</p>

        </a></li> -->

      </ul>

    </div>



  </div>

  <div class="wrap wow slideInUp"><?php echo do_shortcode( ' [wpforms id="41"] ' ); ?></div>

</main>











<!-- footer -->

<?php get_footer();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>





</body>

</html>