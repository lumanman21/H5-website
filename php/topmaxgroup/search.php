<?php
$category_data = get_term_meta( $cat, 'category_options', true );
$catid = $_GET['catid'];

get_header();?>

<body>
<?php echo xintheme('foot_code');?>
<!-- header -->
<?php get_template_part('top') ?>



<div class="serch">
      <form action="#" class="serch_input" role="search" method="get" action="/">
        <input type="text" placeholder="Search stay here" name="s" id="s" />
        <input class="search_input search_input2" type="submit" value=""></input>
      </form>
</div>

<ul class="Simg_container wrap">
    <?php while( have_posts() ): the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>" class="P_container">
          <div class="img">
            <?php
              $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
              $produc_img =  $post_meta['produc_img'];
              $produc_img = explode( ',', $post_meta['produc_img'] );
              $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
            ?>
            <img src="<?php echo $produc_img_src[0];?>" />
          </div>
          <p class="img_txt">
              <?php the_title_attribute(); ?>
          </p>
          <div class="more_but">View More</div>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>





<!-- footer -->
<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>



</body>
</html>