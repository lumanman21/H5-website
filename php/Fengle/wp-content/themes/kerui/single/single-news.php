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

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/new.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/adapt.css" />
<body>

<!-- header -->
<?php get_template_part('top') ?>

<div style="margin-top:130px"></div>
<!-- 小图标 -->
<div class="in_position wrap">
  <div class="container">
    <?php echo in_breadcrumbs(); ?>
  </div>
</div>


<div class="NEW_D_txt wrap">
  <div class="tit">
  <?php the_title_attribute(); ?>
  </div>
  <div class="futit"><?php the_time('Y-m-d') ?></div>
  <div class="txt">
    <?php the_content(); ?>
  </div>

  <?php
            $categories = get_the_category();
    $categoryIDS = array();
    foreach ($categories as $category) {
        array_push($categoryIDS, $category->term_id);
    }
    $categoryIDS = implode(",", $categoryIDS);
    ?>

  <div class="line1_txt">
    <span>previous：<?php if (get_previous_post($categoryIDS)) { previous_post_link('%link','%title',true);} else { echo "No article";} ?></span>
  </div>
  <div class="line2_txt">
    <span>next：<?php if (get_next_post($categoryIDS)) { next_post_link('%link','%title',true);} else { echo "No article";} ?></span>
  </div>
</div>

</div>




<!-- footer -->
<?php get_footer();?>




</body>
</html>