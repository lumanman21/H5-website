<?php
$category_data = get_term_meta( $cat, 'category_options', true );
get_header(); ?>
<?php
	$this_category = get_the_category();
	$category_id = $this_category[0]->cat_ID;
	$category_name = get_cat_name($cat);  // 当前分类名称
	$category_link = get_category_link( $cat ); // 当前分类链接
	$upcategory_id= tx_wp_get_category_root_id( $cat );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>
<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
  <div class="img">
    <img src="<?php bloginfo('template_url'); ?>/static/images/banner_n.webp" />
  </div>
  <div class="wrap">
    <h2>News</h2>
  </div>
</div>
<div class="in_position">
  <div class="wrap container">
    <?php echo in_breadcrumbs(); ?>
  </div>
</div>

<section class="wrap m80">
  <div class="i_tit center">
    <span>news & events</span>
    <h2>Company news and latest<br> information</h2>
  </div>
  <ul class="n_list m80 wow slideInUp">
    <?php while (have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <div class="img"><?php display_post_image(); ?></div>
      <div class="n_date m30"><iconify-icon icon="formkit:time"></iconify-icon><b><?php echo the_time('Y-m-d') ?></b></div>
      <h6><?php the_title(); ?></h6>
      <p>
        <?php echo mb_strimwidth(strip_tags($post->post_content),0,140,'...'); ?> 
      </p>
      
    </a></li>
    <?php endwhile; wp_reset_postdata(); ?>


  </ul>

  

  <!-- Number of pages -->
  <div class="in_page_box wow slideInUp">
    <ul class="in_page">
     <?php zdy_paging(); ?>
    </ul>
  </div>
</section>








<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>
