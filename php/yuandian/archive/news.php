<?php

$category_data = get_term_meta( $cat, 'category_options', true );

get_header(); ?>

<?php

   $this_category = get_the_category();

   $category_id = $this_category[0]->cat_ID;

?>





<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>



<!-- top_content -->

<div class="about_banner">

  <img class="about_img" src="<?php bloginfo('template_url'); ?>/static/images/n_bc.webp" alt="">

  <div class="about_banner_text">

      <h1>news</h1>

      <!-- in_position -->

      <div class="in_position">

            <div class="container">

            <?php echo in_breadcrumbs(); ?>

            </div>

        </div>

  </div>

</div>





<main>

<dl class="in_news">



    <?php while( have_posts() ): the_post(); ?>

    <li class="in_news_item">

        <a href="<?php the_permalink(); ?>">

            <p><?php the_time('Y-m-d') ?></p>

            <h2><?php the_title_attribute(); ?></h2>

        </a>

    <li>

    <?php endwhile; ?>



    

</dl>

</main>

<div class="in_page_box">

        <div class="in_page">

            <?php page_pagenavi(6); ?>

        </div>

</div>

<script>

    $(document).ready(function(){               

        var lis = $(".in_news_item");

        for(var i = 0; i < lis.length; i+=3) {

            lis.slice(i, i+3).wrapAll("<dt class='abc'><div class='wrap'><ul class='in_news_list'></ul></div></dt>");

        }

    });

</script>





<!-- <main>

    <div class="N_content1">

        <div class="left_txt n_left wow slideInRight">

                <p class="top_tit">News</p>

                <h1>News stories</h1>

                <?php while( have_posts() ): the_post(); ?>

                <div class="new_list">

                    <a href="<?php the_permalink(); ?>">

                        <p class="data"><?php the_time('Y-m-d') ?></p>

                        <h2><?php the_title_attribute(); ?></h2>

                    </a>

                </div>

                <?php endwhile; ?>





                <div class="in_page_box">

                        <div class="in_page">

                            <?php page_pagenavi(6); ?>

                        </div>

                </div>



            </div>

            

        <div class="right_img wow slideInRight"><img src="<?php bloginfo('template_url'); ?>/static/images/H_1.webp" alt=""></div>

    </div>

</main> -->



<!-- <main>

    <div class="H_content1">

        <div class="left_txt wow slideInRight">

            <p class="top_tit">News</p>

            <h1>News stories</h1>

            

            

            <?php while( have_posts() ): the_post(); ?>

            <div class="new_list">

                <a href="<?php the_permalink(); ?>">

                    <p class="data"><?php the_time('F jS, Y') ?></p>

                    <h2><?php the_title_attribute(); ?></h2>

                </a>

            </div>

            <?php endwhile; ?>



        </div>

        <div class="right_img wow slideInRight"><img src="<?php bloginfo('template_url'); ?>/static/images/H_1.webp" alt=""></div>

    </div>

    <div class="H_content1 N_content1">

      <div class="right_img wow slideInLeft"><img src="<?php bloginfo('template_url'); ?>/static/images/n_1.png" alt=""></div>

      <div class="left_txt wow slideInLeft">

          <p class="top_tit">News</p>

          <h1>News stories</h1>



          <?php $count = 1; ?>

            <?php if (have_posts()) : ?>

            <?php while( have_posts() ): the_post(); ?>

            <?php if(($count == 4||$count == 5||$count == 6)) :?>

            <div class="new_list">

                <a href="<?php the_permalink(); ?>">

                    <p class="data"><?php the_time('F jS, Y') ?></p>

                    <h2><?php the_title_attribute(); ?></h2>

                </a>

            </div>

            <?php endif; $count++; ?>

            <?php endwhile; ?>

            <?php endif; ?>



      </div>

    </div>

    <div class="H_content1">

      <div class="left_txt wow slideInRight">

          <p class="top_tit">News</p>

          <h1>News stories</h1>



          <?php $count = 1;?>

            <?php if (have_posts()) : ?>

            <?php while( have_posts() ): the_post(); ?>

            <?php if(($count == 7||$count == 8||$count == 9)) : ?>

            <div class="new_list">

                <a href="<?php the_permalink(); ?>">

                    <p class="data"><?php the_time('F jS, Y') ?></p>

                    <h2><?php the_title_attribute(); ?></h2>

                </a>

            </div>

            <?php endif; $count++; ?>

            <?php endwhile; ?>

            <?php endif; ?>



      </div>

      <div class="right_img wow slideInRight"><img src="<?php bloginfo('template_url'); ?>/static/images/H_1.webp" alt=""></div>

    </div>

</main> -->







<!-- footer -->

<?php get_footer();?>







</body>

</html>