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
  <!-- 当前位置 -->
  <div class="in_position wow slideInUp">
    <div class="wrap container">
      <?php echo in_breadcrumbs(); ?>
    </div>
  </div>
</div>

<main style="background: linear-gradient(to bottom,transparent 70%, rgba(20, 139, 199, 0.1));">
  <section class="wrap m60">
    <div class="i_tit">
      <h2>NEWS</h2>
      <img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt="" />
    </div>
    <ul class="n_list m50">
      <?php while (have_posts()) : the_post(); ?>
      <li class="wow slideInUp">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <div class="img">
            <?php display_post_image(); ?>
          </div>
          <h2><?php the_title(); ?></h2>
          <h3><?php echo the_time('Y.m.d') ?></h3>
          <h4><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?></h4>
          <h5>MORE</h5>
        </a>
      </li>
      <?php endwhile; wp_reset_postdata(); ?>

     
    </ul>

    <!-- Number of pages -->
    <div class="in_page_box wow slideInUp">
      <ul class="in_page">
        <?php zdy_paging(); ?>
      </ul>
    </div>
  </section>

  <section class="wrap mt80 mb140">
<div class="i_tit">
  <h2>FAQ</h2>
  <img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt="" />
</div>
<ul class="n_faq_list">
  <?php
      $n_faq = xintheme('n_faq');
      if($n_faq){
      foreach($n_faq as $value):
  ?>
  <li>
    <div class="txt">
      <h3>Q: <?php echo $value['n_q'] ?><i></i></h3>
      <p> A: <?php echo $value['n_a'] ?></p>
    </div>
  </li>
  <?php endforeach; } ?>
</ul>
  </section>
  <script>
    var faqList = $(".n_faq_list li");
    faqList.find("h3").click(function () {
      var parentLi = $(this).parent();
      var p = parentLi.find("p");
      if (p.is(":hidden")) {
        faqList.find("p").slideUp("fast");
        faqList.find("h3").removeClass("curr");
        p.slideDown("fast");
        $(this).addClass("curr");
      } else {
        p.slideUp("fast");
        $(this).removeClass("curr");
      }
    });
  </script>
</main>
<div style="margin-top: -1rem;"></div>







<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>
