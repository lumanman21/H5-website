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





<div class="top_content">

  <img src="<?php bloginfo('template_url'); ?>/static/images/n_banner.webp" alt="">

</div>



<!-- in_position -->

<div class="in_position">

  <div class="wrap container">

    <?php echo in_breadcrumbs(); ?>

  </div>

</div>



<ul class="New_container wrap wow slideInUp">

  <?php while( have_posts() ): the_post(); ?>

    <li>

      <a href="<?php the_permalink(); ?>">

        <div class="left_img">

            <?php if ( has_post_thumbnail()):?>

            <?php the_post_thumbnail( 'full-post-thumb'); ?>

            <?php else : ?>

            <img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" /> 

            <?php  endif; ?>

        </div>

        <div class="right_txt">

          <h1 class="tit"><?php the_title_attribute(); ?></h1>

          <p class="tit_data"><i></i><span><?php the_time('Y-m-d') ?></span></p>

          <p class="txt"><?php echo mb_strimwidth(strip_tags($post->post_content),0,540,'...');?></p>

          <div class="new_but">View More</div>

        </div>

      </a>

    </li>

  <?php endwhile; ?>

</ul>



<!-- page -->

<div class="inPage">

  <div class="in_page_box">

    <div class="in_page">

      <?php page_pagenavi(6); ?>

    </div>

  </div>

</div>











<!-- footer -->

<?php get_footer();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>





</body>

</html>