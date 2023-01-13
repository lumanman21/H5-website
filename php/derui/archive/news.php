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

<div class="top_banner ceo_banner">
  <img src="<?php bloginfo('template_url'); ?>/static/images/n_banner.webp" alt="">
  <h2>news Center</h2>
</div>
<main class="n_main">
  <!-- in_position -->
  <div class="in_position">
    <div class="wrap container">
    <?php echo in_breadcrumbs(); ?>
    </div>
  </div>


  <ul class="new_box wrap wow slideInUp">
    <?php while( have_posts() ): the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
        <div class="top">
          <div class="img">
            <?php if ( has_post_thumbnail()):?>
              <?php the_post_thumbnail( 'full-post-thumb'); ?>
              <?php else : ?>
              <img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" /> 
              <?php  endif; ?>
          </div>
          <div class="txt">
            <h2><?php the_title_attribute(); ?></h2>
            <div class="text"><?php echo mb_strimwidth(strip_tags($post->post_content),0,540,'...');?></div>
          </div>
        </div>
        <div class="bottom">
          <div class="data"><?php the_time('Y-m-d') ?></div>
          <div class="but"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_hpl_right.png" alt=""></div>
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

  
  
  

</main>
<div class="bottom_form wow slideInUp">
  <div class="com_tit">
    <div class="tit_bc">Contact us for a quote</div>
    <h1>Contact us for a quote</h1>
    <div class="line"></div>
    <div class="liner"></div>
  </div>
  <?php echo do_shortcode( ' [wpforms id="22"] ' ); ?>
</div>




<!-- footer -->
<?php get_footer();?>



</body>
</html>