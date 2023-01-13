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

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

<body>

<?php echo xintheme('foot_code');?>



<!-- header -->

<?php get_template_part('top') ?>





<div class="com_content1">

  <img src="<?php bloginfo('template_url'); ?>/static/images/grid_top.png" alt="">

</div>



<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

      <?php echo in_breadcrumbs(); ?>

    </div>

</div>



<div class="P_content2 wrap wow slideInUp">

    <ul class="left_list">













    <li class="tit"><span>CATEGORIES</span><img src="<?php bloginfo('template_url'); ?>/static/images/media/caidan.svg" alt=""></li>







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







        

        <!-- <li><a href="#">CBB65 AC Motor Capacitor</a></li>

        <li><a href="#">CBB60 Pump Capacitor</a></li>

        <li><a href="#">CBB61 Fan Capacitor</a></li>

        <li><a href="#">CH85 Microwave Oven Capacitor</a></li>

        <li><a href="#">CD60 Starting Capacitor</a></li>

        <li><a href="#">Reticulate-MPP Capacitor</a></li>

        <li><a href="#">Self-Healing Low Voltage Shunt Power Capacitor</a></li>

        <li><a href="#">Speical Capacitor for Welding Machine</a></li> -->

        

    </ul>

    <ul class="img_container">

      <?php while( have_posts() ): the_post(); ?>

        <li>

          <a href="<?php the_permalink(); ?>">

            <div class="img_box">

              <div class="img">

                  <?php if ( has_post_thumbnail()):?>

                <?php the_post_thumbnail( 'full-post-thumb'); ?>

                <?php else : ?>

                <img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" /> 

                <?php  endif; ?>

              </div>

            </div>

            <p class="img_txt">

              <?php the_title_attribute(); ?>

            </p>

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

<script>

  //引入wow动画效果

  wow = new WOW({

    animateClass: 'animated',

    offset: 100,

    mobile: false,

  });

  wow.init();

</script>



</body>

</html>