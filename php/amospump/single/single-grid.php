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



<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/swiper.animate.min.js"></script>



<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>





<div class="top_content">

    <img src="<?php bloginfo('template_url'); ?>/static/images/pd_banner.webp" alt="">

</div>

<!-- in_position -->

<div class="in_position">

    <div class="wrap container">

        <?php echo in_breadcrumbs(); ?>

    </div>

</div>



<main>

    <div class="PD_content wrap wow slideInUp">

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

                            <!-- <li class="on"><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_1.webp" data-lsrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_1.webp" data-maxSrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_1.webp"></li>

                            <li><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" data-lsrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" data-maxSrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp"></li>

                            <li><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_3.webp" data-lsrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_3.webp" data-maxSrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_3.webp"></li>

                            <li><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" data-lsrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" data-maxSrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp"></li>

                            <li><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" data-lsrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" data-maxSrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp"></li>

                            <li><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" data-lsrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" data-maxSrc="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp"></li> -->

                        </ul>

                    </div>

                </div>

                <script src="<?php bloginfo('template_url'); ?>/static/js/magnifier.js"></script>



            </div>

            <div class="right_txt">

                <h3><?php the_title_attribute(); ?></h3>

                <div class="parameters">

                    <?php the_content(); ?>

                    <!-- Pump Size: 3~12inches

                    Max Flow: 940~9100 US GPM

                    Max Head: 120~440 feet

                    Solids Size: 0.43~3.75 inches

                    Optional vacuum system: VTR/VCM/EVP3L

                    Optional Power: Deutz /Cummins/Hatz... -->

                </div>

                <!-- <div class="com_button"><a href="/#contact">CONTACT US</a></div> -->

            </div>

        </div>

        

        <!-- ···Product details···· -->

        <div class="product_detail">

            <?php echo get_post_meta($post->ID , 'table_value', true); ?>

            <!-- <img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_table.webp" alt=""> -->

        </div>

        <div class="more_product wow slideInUp">

            <h3>Products Recommended</h3>

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

                                    </a>

                                </li>

                            <?php endwhile; else : ?>

                            <?php endif; wp_reset_query(); } ?>



                            <!-- <li class="swiper-slide">

                                <a href="#">

                                    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" alt=""></div>

                                    <p class="tit">Other type of pumps</p>

                                </a>

                            </li>

                            <li class="swiper-slide">

                                <a href="#">

                                    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_3.webp" alt=""></div>

                                    <p class="tit">Other type of pumps</p>

                                </a>

                            </li>

                            <li class="swiper-slide">

                                <a href="#">

                                    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_3.webp" alt=""></div>

                                    <p class="tit">Other type of pumps</p>

                                </a>

                            </li>

                            <li class="swiper-slide">

                                <a href="#">

                                    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_2.webp" alt=""></div>

                                    <p class="tit">Other type of pumps</p>

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



    <script>

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

            slidesPerGroup: 2

            },

            960: {

            slidesPerView: 2,

            spaceBetween: 20,

            slidesPerGroup: 2

            },

            1200: {

            slidesPerView: 4,

            spaceBetween: 20,

            slidesPerGroup: 1

            }

        }

        });

    </script>
<div class="wrap wow slideInUp"><?php echo do_shortcode( ' [wpforms id="41"] ' ); ?></div>
</main>







    

<!-- footer -->

<?php get_footer();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/back.js"></script>

</body>

</html>