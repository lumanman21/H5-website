<?php

get_header(); 

$category = get_the_category();

if($category[0]){

    $catid = $category[0]->term_id;

} 

$category_data = get_term_meta( $catid, 'category_options', true );

$post_extend = get_post_meta( get_the_ID(), 'extend_info', true );

$no_sidebar	= isset($post_extend['no_sidebar']) ?$post_extend['no_sidebar'] : '';

$no_sidebar_all = xintheme('post_no_sidebar_all');

?>

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

  <img class="about_img" src="<?php bloginfo('template_url'); ?>/static/images/History_1.jpg" alt="">

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



<div class="New_D_container wrap wow slideInUp">

  <h1>In 2020, our company hold the Year-End Commendation, conference to summarize the past and look forward to the future</h1>

  <h2><?php the_time('Y-m-d') ?></h2>

  <div class="introduce">

    <?php the_content(); ?>

  </div>

  <div class="page_queue">

    <p>Previous page：<?php if (get_previous_post($categoryIDS)) { previous_post_link('%link','%title',true);} else { echo "No article";} ?></p>

    <p>Next page：<?php if (get_next_post($categoryIDS)) { next_post_link('%link','%title',true);} else { echo "No article";} ?></p>

  </div>

</div>









<!-- footer -->

<?php get_footer();?>









</body>

</html>