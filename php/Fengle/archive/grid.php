<?php

$category_data = get_term_meta( $cat, 'category_options', true );

get_header(); ?>

<?php

   $this_category = get_the_category();

   $category_id = $this_category[0]->cat_ID;

   $category_name = get_cat_name($cat);  // 当前分类名称   

   $category_link = get_category_link( $cat ); // 当前分类链接

?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/animate.min.css" />

<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>

<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>





<div class="com_content1 PD_content">

  <img src="<?php bloginfo('template_url'); ?>/static/images/P_banner.webp" alt="">

  <p>BECOME A GLOBAL PROFESSIONAL</p>

  <p>SUPPLIER OF COOLING RAW MATERIALS AND</p>

  <p>HIGH-END FRAGRANCE RAW MATERIALS</p>

</div>



<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

      <?php echo in_breadcrumbs(); ?>

    </div>

</div>



<div class="P_content2 wrap">

    <div class="left_list wow slideInLeft">

        <div class="img wow slideInLeft"><img src="<?php bloginfo('template_url'); ?>/static/images/P_left.webp" alt=""></div>

        <ul>

            <?php

                $args=array(

                'child_of'=> 5,

                'parent' => 5,

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





            <!-- <li><a href="#">Menthol crystals</a></li>

            <li><a href="#">Menthol crystals</a></li>

            <li><a href="#">Menthol crystals</a></li>

            <li><a href="#">Menthol crystals</a></li> -->

        </ul>

    </div>

    <ul class="img_container wow slideInRight">

        <?php while( have_posts() ): the_post(); ?>

        <li>

            <a href="<?php the_permalink(); ?>" class="P_container">

                <div class="left_box">

                    <!-- <img src="static/images/P_right.webp" alt=""> -->

                    <?php if ( has_post_thumbnail()):?>

                    <?php the_post_thumbnail( 'full-post-thumb'); ?>

                    <?php else : ?>

                    <img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" /> 

                    <?php  endif; ?>

                </div>

                <div class="right_box">

                    <h1><?php the_title_attribute(); ?></h1>

                    <div class="txt">

                        <?php the_content(); ?>

                        <!-- Honored as Anhui famous brand, “Fengle brand”Peppermint oil DMO is processed by unique technology and has good quality, pure flavor and clear color. -->

                    </div>

                    <div class="field_but">APPLICATION FIELD</div>

                    <ul class="field">

                        <li>Pharmaceutical industry</li>

                        <li>Food Industry</li>

                        <li>Cosmetic</li>

                        <li>Daily chemical industry</li>

                        <li>Flavors and fragrances</li>

                    </ul>

                </div>

            </a>

        </li>

        <?php endwhile; ?>

    </ul>

</div>





<!-- page -->

<div class="in_page_box">

  <div class="in_page">

    <?php page_pagenavi(6); ?>

  </div>

</div>



    

<!-- footer -->

<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>



</body>

</html>