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

        </ul>

    </div>

    <div class="PD_right_list wow slideInRight">

        <div class="PD_detail">

            <div class="left_box">

                <h1><?php the_title_attribute(); ?></h1>

                <div class="introduce"><?php the_content(); ?></div>

            </div>

            <div class="right_box">

                <?php if ( has_post_thumbnail()):?>

                <?php the_post_thumbnail( 'full-post-thumb'); ?>

                <?php else : ?>

                <img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" /> 

                <?php  endif; ?>

                <!-- <img src="<?php bloginfo('template_url'); ?>/static/images/P_right.webp" alt=""> -->

            </div>

        </div>

        <div><?php  echo get_post_meta($post->ID , 'table_value', true); ?></div>

        <div class="field_but">APPLICATION FIELD</div>

        <ul class="field">

            <li>Pharmaceutical industry</li>

            <li>Food Industry</li>

            <li>Cosmetic</li>

            <li>Daily chemical industry</li>

            <li>Flavors and fragrances</li>

        </ul>

        <ul class="PD_figure">

            <li class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/PD_1.webp" alt=""></li>

            <li class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/PD_1.webp" alt=""></li>

            <li class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/PD_1.webp" alt=""></li>

        </ul>

        <div class="PD_form">

            <h1>Online Consultation</h1>

            <?php echo do_shortcode( ' [wpforms id="84"] ' ); ?>

        </div>

    </div>

</div>







    

<!-- footer -->

<?php get_footer();?>





<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

</body>

</html>