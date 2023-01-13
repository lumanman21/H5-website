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





<!-- top_content -->

<div class="about_banner">

  <img class="about_img" src="<?php bloginfo('template_url'); ?>/static/images/p_bc.webp" alt="">

  <div class="about_banner_text">

      <h1>product</h1>

      <!-- in_position -->

      <div class="in_position">

            <div class="container">

            <?php echo in_breadcrumbs(); ?>

            </div>

      </div>

  </div>

</div>

<main>

    <div class="P_content1 wrap">

        <div class="left_list">

            <div class="P_search">

                <form role="search" method="get" action="/">

                    <input class="P_search_ipt" type="text" placeholder="Search">

                    <input class="P_search_btn" type="submit" value="search">

                </form>

            </div>

            <h3>Product List</h3>

            <ul class="product_classify">

              



            <?php

                $args=array(

                'child_of'=> 2,

                'parent' => 2,

                'hide_empty'=>'0',

                'orderby'=>'id',

                'order'=>'asc',

                );

                $categories=get_categories($args);

                foreach($categories as $category) {

                $category_data = get_term_meta( $category->term_id, 'category_options', true );

                $cat_term_id = get_category($category)->term_id;

                $cat_taxonomy = get_category($category)->taxonomy;

                if ($category_name==$category->name)

                {

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



            





                <!-- <li><a href="">ALUMINUM  FOIL BARRIER BAG</a></li>

                <li><a href="">FFS PE</a></li>

                <li><a href="">Nano STRETCH FILM</a></li>

                <li><a href="">STRETCH HOOD</a></li> -->

            </ul>

        </div>

        <div class="right_list">

            <ul class="product_box">



            <?php while( have_posts() ): the_post(); ?>

              <li>

                <a href="<?php the_permalink(); ?>">

                  <div class="img">

                      <?php

                        $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);

                        $produc_img =  $post_meta['produc_img'];

                        $produc_img = explode( ',', $post_meta['produc_img'] );

                        $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );

                    ?>

                    <img src="<?php echo $produc_img_src[0];?>" />

                  </div>

                  <div class="txt">

                    <p class="tit">

                      <?php the_title_attribute(); ?>

                    </p>

                    <h6><?php $cz= get_post_meta($post->ID, 'extend_info', true);  echo $cz['produc_material']; ?></h6>

                  </div>

                </a>

              </li>

              <?php endwhile; ?>

              </ul>

              <!-- page -->

              <div class="in_page_box">

                <div class="in_page">

                  <?php page_pagenavi(6); ?>

                </div>

            </div>

        </div>

    </div>

</main>



    

<!-- footer -->

<?php get_footer();?>



</body>

</html>