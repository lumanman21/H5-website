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

   $category_name = get_cat_name($cat);  // 当前分类名称

    $category_link = get_category_link( $cat ); // 当前分类链接

    $upcategory_id= tx_wp_get_category_root_id( $cat );

    $upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称

    $upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接

    $up_upcategory_id= tx_wp_get_category_root_id( $upcategory_id );

        $up_upcategory_name= get_cat_name($up_upcategory_id);  // 上级的上级分类名称

        $up_upcategory_link = get_category_link( $up_upcategory_id ); // 上级的上级分类链接

?>



<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>







<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>



<div class="PD_top"></div>

<!-- in_position -->

<div class="in_position wrap">

  <div class="container">

  <?php echo in_breadcrumbs(); ?>

  </div>

</div>



<div class="P_content wrap">

<div class="P_left_list">

    <ul class="topnav">

        <li><a href="#" class="tit">CATEGORIES<i class="iconfont icon-caidan"></i></a></li>

    </ul>

    <ul id="top_nav" class="top_nav">

            <?php

                    $args=array(

                    'child_of'=> 3,

                    'parent' => 3,

                    'hide_empty'=>'0',

                    'orderby'=>'id',

                    'order'=>'asc',

                    );

                    $categories=get_categories($args);

                    foreach($categories as $category) {

                    $category_data = get_term_meta( $category->term_id, 'category_options', true );

                    $cat_term_id = get_category($category)->term_id;

                    $cat_taxonomy = get_category($category)->taxonomy;

                    // 判断是否有下级，有则添加menu-item-has-children

                    if(sizeof(get_term_children($cat_term_id,$cat_taxonomy)) != 0){

                            $style="menu-item-has-children";

                    }else{

                            $style="";

                    };

                    if ($up_upcategory_name==$category->name) { $style1="current-category-parent"; } else { $style1=""; };

                    if ($upcategory_name==$category->name) { $style2="current-category-parent"; } else { $style2=""; };

                    if ($category_name==$category->name) { $style3="current-menu-item"; } else { $style3=""; }

            ?>

            <li class="<?php echo $style ?> <?php echo $style1 ?> <?php echo $style2 ?> <?php echo $style3 ?>">

                    <a href="<?php echo get_category_link( $category->term_id ) ;?>">

                            <b><?php echo $category->name;?></b>

                    </a>

                    <i class="arrow"></i>

                    <ul class="sub-menu">

                            <?php

                                    $argszi=array(

                                    'child_of'=> $category->term_id,

                                    'parent' => $category->term_id,

                                    'hide_empty'=>'0',

                                    'orderby'=>'id',

                                    'order'=>'asc',

                                    );

                                    $categorieszi=get_categories($argszi);

                                    foreach($categorieszi as $categoryzi) {

                                            $category_data = get_term_meta( $categoryzi->term_id, 'category_options', true );

                                            $cat_term_id = get_category($categoryzi)->term_id;

                                            $cat_taxonomy = get_category($categoryzi)->taxonomy;

                                            if(sizeof(get_term_children($cat_term_id,$cat_taxonomy)) != 0){

                                                    $style4="menu-item-has-children2";

                                            }else{

                                                    $style4="";

                                            };

                                            if ($upcategory_name==$categoryzi->name) { $style5="current-category-parent"; } else { $style5=""; };

                                            if ($category_name==$categoryzi->name) { $style6="current-menu-item"; } else { $style6=""; }

                            ?>

                                    <li class="<?php echo $style4 ?> <?php echo $style5 ?> <?php echo $style6 ?>">

                                            <a href="<?php echo get_category_link( $categoryzi->term_id ) ?>" >

                                                    <b><?php echo $categoryzi->name ?></b>

                                            </a>

                                            <i class="arrow2"></i>

                                            <dl>

                                            

                                                    <?php

                                                            $argszi2=array(

                                                            'child_of'=> $categoryzi->term_id,

                                                            'parent' => $categoryzi->term_id,

                                                            'hide_empty'=>'0',

                                                            );

                                                            $categorieszi2=get_categories($argszi2);

                                                            foreach($categorieszi2 as $categoryzi2) {

                                                            if ($category_name==$categoryzi2->name) { $style7="current-menu-item"; } else { $style7=""; }

                                                    ?>

                                                    <dt class="<?php echo $style7 ?>"><?php echo '<a href="' . get_category_link( $categoryzi2->term_id ) . '" >' . $categoryzi2->name.'</a>' ?></dt>

                                                    <?php } ?>

                                                    

                                            </dl>

                                    </li>

                            <?php } ?>

                    </ul>

            </li>

            <?php } ?>

    </ul>

    <script src="<?php bloginfo('template_url'); ?>/static/js/Multi-layer_fold.js"></script>





      <div class="P_img_content">

          <a href="#" class="contact"><img src="<?php bloginfo('template_url'); ?>/static/images/ico_tongxun.svg" alt=""></a>

          <h1>WHY CHOOSE US?</h1>

          <p class="txt">You can contact us any way that is convenient for you.We are available 24/7 via email or telephone.</p>

          <div href="#" class="quote_but">CONTACT US<i class="iconfont icon-youxiang1"></i></div>

          <p class="txt1">NEW PRODUCTS</p>

      </div>

        <!-- shoes_swiper -->

        <div class="p_partner_box">

          <div class="p_partner">

              <div class="p_partner_list swiper-container">

                  <ul class="swiper-wrapper">



                    <?php query_posts('cat=3&showposts=6&orderby=rand'); ?>

                        <?php while (have_posts()) : the_post(); ?>

                        <li class="swiper-slide">

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                                <div class="img">

                                <?php

                                    $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);

                                    $produc_img =  $post_meta['produc_img'];

                                    $produc_img = explode( ',', $post_meta['produc_img'] );

                                    $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );

                                ?>

                                <img src="<?php echo $produc_img_src[0];?>" />

                                </div>

                            </a>

                        </li>

                        <?php endwhile; wp_reset_query(); ?>

                      <!--<li class="swiper-slide">

                          <div class="img"><img src="/static/images/p_1.webp" /></div>

                      </li> -->

                  </ul>				

              </div>

              <div class="pt-pagination"></div>

              <div class="pt-button-next"></div>

              <div class="pt-button-prev"></div>

          </div>

      </div>





  </div>

  <!-- ········The right column········· -->

  <div class="PD_R_box">

    <div class="PD_img_box">

        <div class="left_img">



            <!-- 图片查看区 -->

            <div id="MagnifierWrap2">

                <div class="MagnifierMain">

                    <?php

                        $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);

                        $produc_img =  $post_meta['produc_img'];

                        $produc_img = explode( ',', $post_meta['produc_img'] );

                        $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );

                    ?>

                    <img class="MagTargetImg" src="<?php echo $produc_img_src[0];?>" data-src="<?php echo $produc_img_src[0];?>" /> 

                </div>

                <span class="spe_leftBtn"></span>

                <span class="spe_rightBtn"></span>

                <div class="spec-items"> 

                    <ul>

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

                        <li>

                            <img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />

                        </li>

                        <?php endforeach;endif ?>

                    </ul>

                </div>

                <script src="<?php bloginfo('template_url'); ?>/static/js/magnifier.js"></script>

            </div>

        </div>

        <div class="right_txt">

            <p class="line1"><?php the_title_attribute(); ?></p>

            <div class="shoe_txt">

                <?php echo get_post_meta($post->ID , 'jieshao_value', true); ?>

            </div>



            <a href="#" class="quote_but">GET A FREE QUOTE</a>

        </div>

    </div>

    

    <!-- ···Product details···· -->

    <h1>Describe</h1>

    <div class="shoe_detail">

        <div class="introduce"><?php the_content(); ?></div>

    </div>





    <div class="more_shoe">

        <h3>Related Products</h3>

        <!-- more_shoes -->

        <div class="PD_partner_box">

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

                                    <div class="com_but PD_but">see more</div>

                                </a>

                            </li>

                        <?php endwhile; else : ?>

                        <?php endif; wp_reset_query(); } ?>



                        

                        <!-- <li class="swiper-slide">

                            <a href="#">

                                <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/P_1.webp" alt=""></div>

                                <p class="tit">BW0506 NORNETEK Unisex Canvas Low Top Sneaker Non Slip Casual Shoes Canvas Shoes Loafers Lace up Fashion Men and Women Sneaker</p>

                                <div class="com_but PD_but">see more</div>

                            </a>

                        </li>

                        <li class="swiper-slide">

                            <a href="#">

                                <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/P_1.webp" alt=""></div>

                                <p class="tit">BW0506 NORNETEK Unisex Canvas Low Top Sneaker Non Slip Casual Shoes Canvas Shoes Loafers Lace up Fashion Men and Women Sneaker</p>

                                <div class="com_but PD_but">see more</div>

                            </a>

                        </li> -->

                    </ul>				

                </div>

                <div class="pt-pagination"></div>

                <div class="pt-button-next"></div>

                <div class="pt-button-prev"></div>

            </div>

        </div>

    </div>

  </div>

</div>



<script>

  //shoe_swiper

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

    breakpoints: {

        0: {

        slidesPerView: 1,

        spaceBetween: 20,

        slidesPerGroup: 3

        },

        960: {

        slidesPerView: 1,

        spaceBetween: 20,

        slidesPerGroup: 6

        },

        1200: {

        slidesPerView: 1,

        spaceBetween: 30,

        slidesPerGroup: 1

        }

    }

  });

  //more_shoe_swiper

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

        slidesPerGroup: 3

        },

        960: {

        slidesPerView: 4,

        spaceBetween: 20,

        slidesPerGroup: 6

        },

        1200: {

        slidesPerView: 4,

        spaceBetween: 30,

        slidesPerGroup: 1

        }

    }

  });

//点击邮箱表单弹出

$('.quote_but').click(function(){

  $('#pop_form').show()

})





</script>



    

<!-- footer -->

<?php get_footer();?>









</body>

</html>