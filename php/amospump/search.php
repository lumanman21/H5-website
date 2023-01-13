<?php
$category_data = get_term_meta( $cat, 'category_options', true );
$catid = $_GET['catid'];

get_header();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>
<body>

<!-- header -->
<?php get_template_part('top') ?>



<div class="serch">
      <form action="#" class="serch_input" role="search" method="get" action="/">
        <input type="text" placeholder="Search stay here" name="s" id="s" />
        <input class="search_input search_input2" type="submit" value=""></input>
      </form>
</div>

<ul class="S_img_container wrap">
<?php while( have_posts() ): the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <div class="img_box">
          <div class="img">
              <?php if ( has_post_thumbnail()):?>
            <?php the_post_thumbnail( 'full-post-thumb'); ?>
            <?php else : ?>
            <img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" /> 
            <?php  endif; ?>
          </div>
        </div>
        <p class="img_tit">
          <?php the_title_attribute(); ?>
        </p>
        <p class="img_txt">
          <?php echo mb_strimwidth(strip_tags($post->post_content),0,340,'...');?>
        </p>
      </a>
    </li>
<?php endwhile; ?>

 

</ul>





<!-- footer -->
<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>



</body>
</html>