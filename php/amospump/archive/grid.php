<?php

$category_data = get_term_meta( $cat, 'category_options', true );

get_header(); ?>

<?php

   $this_category = get_the_category();

   $category_id = $this_category[0]->cat_ID;

   $category_name = get_cat_name($cat);  // 当前分类名称   

   $category_link = get_category_link( $cat ); // 当前分类链接

?>







<body>
  
<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>



<div class="top_content">

  <img src="<?php bloginfo('template_url'); ?>/static/images/p_banner.jpg" alt="">

</div>

<!-- in_position -->

<div class="in_position">

  <div class="wrap container">

    <?php echo in_breadcrumbs(); ?>

  </div>

</div>



<div class="left_menu_list wrap">
  <ul class="left_list">
    <?php
      $args=array(
      'child_of'=> 4,
      'parent' => 4,
      'hide_empty'=>'0',
      'orderby'=>'id',
      'order'=>'asc',
      );
      $categories=get_categories($args);
      foreach($categories as $category) {
      $category_data = get_term_meta( $category->term_id, 'category_options', true );
      $cat_term_id = get_category($category)->term_id;
      $cat_taxonomy = get_category($category)->taxonomy;
      // if ($upcategory_name==$category->name)
      // {
      //         $style1="current-category-parent";
      // }else{
      //         $style1="";
      // };

      if ($category_name==$category->name){
              $style2="active";
      }else{
              $style2="";
      }
      ?>

      <li class="<?php echo $style ?> <?php echo $style1 ?> <?php echo $style2 ?>">
          <a href="<?php echo get_category_link( $category->term_id ) ;?>">
              <?php echo $category->name;?>
          </a>
      </li>
  <?php } ?>
      <li>
          <a href="http://www.mcpumps.cn/">Pump</a>
      </li>

    <!-- <li><a href="#">CBB65 AC Motor Capacitor</a></li>

    <li><a href="#">CBB60 Pump Capacitor</a></li>

    <li><a href="#">CBB61 Fan Capacitor</a></li>

    <li><a href="#">CH85 Microwave Oven Capacitor</a></li>

    <li><a href="#">CD60 Starting Capacitor</a></li>

    <li><a href="#">Reticulate-MPP Capacitor</a></li> -->

  </ul>

   <!--

  <h5>Applications</h5>

  <ul class="left_list">

    <li><a href="#">CH85 Microwave Oven Capacitor</a></li>

    <li><a href="#">CD60 Starting Capacitor</a></li>

    <li><a href="#">Reticulate-MPP Capacitor</a></li>

  </ul>-->

</div> 

<div class="P_content2 wrap wow slideInUp">

  <ul class="img_container">



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

          </a>

      </li>

    <?php endwhile; ?>







      <!-- <li>

        <a href="#">

          <div class="img">

            <img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_1.webp" alt="" />

          </div>

          <p class="img_txt">

            CH85 Microwave Ovens Capacitor with TUV VED CQC Certifications

          </p>

        </a>

      </li>

      <li>

        <a href="#">

          <div class="img">

            <img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_1.webp" alt="" />

          </div>

          <p class="img_txt">

            CH85 Microwave Ovens Capacitor with TUV VED CQC Certifications

          </p>

        </a>

      </li> -->

  </ul>

</div>



<!-- page -->

<div class="inPage">

  <div class="in_page_box">

    <div class="in_page">

        <?php page_pagenavi(6); ?>

    </div>

  </div>

</div>







<div class="wrap wow slideInUp"><?php echo do_shortcode( ' [wpforms id="41"] ' ); ?></div>    

<!-- footer -->

<?php get_footer();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>





</body>

</html>