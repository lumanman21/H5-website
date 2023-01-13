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

    <div class="PD_content wrap wow slideInUp">

        <div class="pd_intro">

            <h4><?php the_title_attribute(); ?></h4>

            <h5><?php $cz= get_post_meta($post->ID, 'extend_info', true);  echo $cz['produc_material']; ?></h5>

            <!-- <h6>Product introduction</h6> -->

            <?php the_content(); ?>

        </div>

        <div class="pd_img">

            <div class="p_partner">

              <div class="p_partner_list swiper-container">

                  <ul class="swiper-wrapper" id="pd_list">



                        <?php

                            $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);

                            $produc_img =  $post_meta['produc_img'];

                        ?>

                        <?php

                            if( !empty( $produc_img ) ) :

                            $produc_img = explode( ',', $post_meta['produc_img'] );

                            foreach ( $produc_img as $id ) :

                            $produc_img_src = wp_get_attachment_image_src( $id, 'full' );

                        ?>

                        <li class="swiper-slide">

                            <div class="img">

                                <img src="<?php echo $produc_img_src[0];?>" />

                            </div>

                        </li>

                        <?php endforeach;endif ?>





                      <!-- <li class="swiper-slide">

                          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_1.webp" alt=""></div>

                      </li>

                      <li class="swiper-slide">

                          <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/p_1.webp" /></div>

                      </li> -->

                  </ul>				

              </div>

              <div class="pt-pagination"></div>

              <div class="pt-button-next"></div>

              <div class="pt-button-prev"></div>

          </div>
          <link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />

            <script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
          <script>
            var image = new Viewer(document.getElementById('pd_list'), {
                button: true,
                navbar: false,
                width: 800,
                title: true
            });
        </script>
          </script>

        </div>

    </div>

    <div class="PD_menubox wow slideInUp">

        <ul class="PD_menu wrap">

            
            <li><a href="#tit3">Product Feature </a></li>
            <li><a href="#tit1">SPECIFICATIONS </a></li>
            
            <li><a href="#tit2">Customizing Options</a></li>


            <li><a href="<?php echo get_permalink(85); ?>">FAQ</a></li>

        </ul>

    </div>

    <div class="PD_content1 wow slideInUp">

      <div class="P_content1 wrap">

          <div class="left_list">

              <div class="P_search">

                  <form role="search" method="get" action="/">

                      <input class="P_search_ipt" type="text" placeholder="Search" name='s' id='s'>

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

                  

              </ul>

              <!-- form -->

              <h3>request Quotation</h3>

              <?php echo do_shortcode( ' [wpforms id="61"] ' ); ?>

          </div>

          <div class="right_list">

              <div class="pd_rightList">

                  <div class="line1" id="tit1">

                      <p class="line_tit">SPECIFICATIONS</p>

                      <div class="txt">
                          <?php  echo get_post_meta($post->ID , 'table_value', true); ?>
                      </div>

                      <!-- <table class=" alignleft" style="height: 96px; border-collapse: collapse; background-color: #eeeeee;">

                        <tbody>

                          <tr style="height: 50px;">

                          <td style="width: 260px; height: 50px;background-color: #3d3d3d; border-bottom: 1px solid #fff;"><span style="color: #fafafa;">Thickness（μm）</span></td>

                          <td style="width: 260px; height: 50px; border-bottom: 1px solid #fff;"><span style="color: #878787;">110 - 250</span></td>

                          </tr>

                          <tr style="height: 50px;">

                          <td style="width: 260px; height: 50px;background-color: #3d3d3d; border-bottom: 1px solid #fff;"><span style="color: #fafafa;">Width（mm）</span></td>

                          <td style="width: 260px; height: 50px; border-bottom: 1px solid #fff;"><span style="color: #878787;">260 - 650</span></td>

                          </tr>

                          <tr style="height: 50px;">

                          <td style="width: 260px; height: 50px;background-color: #3d3d3d; border-bottom: 1px solid #fff;"><span style="color: #fafafa;">Bag length（mm</span></td>

                          <td style="width: 260px; height: 50px; border-bottom: 1px solid #fff;"><span style="color: #878787;">400 - 900</span></td>

                          </tr>

                          <tr style="height: 50px;">

                          <td style="width: 260px; height: 50px;background-color: #3d3d3d; border-bottom: 1px solid #fff;"><span style="color: #fafafa;">Gusset depth（mm）</span></td>

                          <td style="width: 260px; height: 50px; border-bottom: 1px solid #fff;"><span style="color: #878787;">45-110</span></td>

                          </tr>

                        </tbody>

                      </table> -->

                  </div>

                  <div class="line2" id="tit2">

                      <p class="line_tit">Customizing Options</p>

                      <!-- <ul id="tit2">

                          <li><img src="<?php bloginfo('template_url'); ?>/static/images/font_bc1.png" alt=""><p>Form</p></li>

                          <li><img src="<?php bloginfo('template_url'); ?>/static/images/font_bc2.png" alt=""><p>Fill</p></li>

                          <li><img src="<?php bloginfo('template_url'); ?>/static/images/font_bc3.png" alt=""><p>Seal</p></li>

                      </ul> -->
                      <div class="txt">
                      <?php  echo get_post_meta($post->ID , 'customizing_value', true); ?>
                      </div>

                  </div>

                  <div class="line3" id="tit3">

                      <p class="line_tit">Product Feature</p>

                      <div class="txt">

                        <?php  echo get_post_meta($post->ID , 'feature_value', true); ?>

                      </div>

                  </div>
                  <div class="line4">

                      <div class="txt">

                        <?php  echo get_post_meta($post->ID , 'other_value', true); ?>

                      </div>

                  </div>

              </div>

          </div>

      </div>

    </div>

    <div class="pd_content2 wrap wow slideInUp">

        <h2>Related Products</h2>

        <div class="PD_partner">

          <div class="PD_partner_list swiper-container">

              <ul class="swiper-wrapper">







                <?php

                        $cats = wp_get_post_categories($post->ID);

                        if ($cats) {

                        $cat = get_category( $cats[0] );

                        $first_cat = $cat->cat_ID;

                        $args = array(

                            'category__in' => array($first_cat),

                            'post__not_in' => array($post->ID),

                            'showposts' => 8,

                            'caller_get_posts' => 1

                                );

                        query_posts($args);



                        if (have_posts()) :

                        while (have_posts()) : the_post(); update_post_caches($posts);?>

                            <li class="swiper-slide ">

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

                                    <p class="tit"><?php the_title_attribute(); ?></p>

                                </a>

                            </li>

                        <?php endwhile; else : ?>

                        <?php endif; wp_reset_query(); } ?>









                  <!-- <li class="swiper-slide">

                      <a href="#">

                        <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/pd_2.1.jpg" alt=""></div>

                        <p>ALUMINUM  FOIL BARRIER BAG</p>

                      </a>

                  </li>

                  <li class="swiper-slide">

                    <a href="#">

                      <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/pd_2.1.jpg" alt=""></div>

                      <p>ALUMINUM  FOIL BARRIER BAG</p>

                    </a>

                </li>

                <li class="swiper-slide">

                  <a href="#">

                    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/pd_2.1.jpg" alt=""></div>

                    <p>ALUMINUM  FOIL BARRIER BAG</p>

                  </a>

              </li> -->

                  

              </ul>				

          </div>

          <div class="pt-pagination"></div>

          <div class="pt-button-next"></div>

          <div class="pt-button-prev"></div>

      </div>

    </div>



    <div class="H_content1 H_content3 wow slideInRight">

      <div class="left_txt wow slideInRight">

        <h6>CONTACT US</h6>

        <h1>Quotation Request</h1>

            <?php echo do_shortcode( ' [wpforms id="42"] ' ); ?>

      </div>

      <div class="right_img wow slideInRight form_img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_3.webp" alt=""></div>

    </div>



    <script>



      var pswiper = new Swiper('.p_partner_list', {

      loop: true,

      loopFillGroupWithBlank: true,

      navigation: {

          nextEl: '.pt-button-next',

          prevEl: '.pt-button-prev',

      },

      pagination: {

          el: '.pt-pagination',

          clickable: true,

      },

      autoplay: {

          delay: 3500,

          disableOnInteraction: false,

      },

      observer: true,

      observeParents: true,


    });



    var pswiper = new Swiper('.PD_partner_list', {

      loop: true,

      loopFillGroupWithBlank: true,

      navigation: {

          nextEl: '.pt-button-next',

          prevEl: '.pt-button-prev',

      },

      pagination: {

          el: '.pt-pagination',

          clickable: true,

      },

      autoplay: {

          delay: 3500,

          disableOnInteraction: false,

      },

      observer: true,

      observeParents: true,

      breakpoints: {

          0: {

          slidesPerView: 2,

          spaceBetween: 20,

          slidesPerGroup: 1

          },

          960: {

          slidesPerView: 4,

          spaceBetween: 20,

          slidesPerGroup: 2

          },

          1200: {

          slidesPerView: 4,

          spaceBetween: 30,

          slidesPerGroup: 1

          }

      }

    });

  </script>

</main>







    

<!-- footer -->

<?php get_footer();?>

</body>

</html>