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

        <li><a href="#">CBB65 AC Motor Capacitor</a></li>

        <li><a href="#">CBB60 Pump Capacitor</a></li>

        <li><a href="#">CBB61 Fan Capacitor</a></li>

        <li><a href="#">CH85 Microwave Oven Capacitor</a></li>

        <li><a href="#">CD60 Starting Capacitor</a></li>

        <li><a href="#">Reticulate-MPP Capacitor</a></li>

    </ul>

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

                            <li >

                                <img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />

                            </li>

                            <?php endforeach;endif ?>

                        </ul>

                    </div>

                </div>



                <!-- 图片查看区 -->

                <!-- <div id="MagnifierWrap2">

                    <div class="MagnifierMain">

                    </div>

                    <span class="spe_leftBtn"></span>

                    <span class="spe_rightBtn"></span>

                    <div class="spec-items"> 

                        <ul>

                        </ul>

                    </div>

                </div> -->

                <script src="<?php bloginfo('template_url'); ?>/static/js/magnifier.js"></script>



            </div>



            <div class="right_txt">

                <p class="line1">PRODUCT NAME</p>

                <p class="line2"><?php the_title_attribute(); ?></h1>

                <p class="line3">Introduction</p>

                <p class="line4">MOQ 2000</p>

                <a href="<?php echo get_permalink(27); ?>" class="line5"><button class="co_button">Become our global agent</button></a>
                <div id="PD_form" class="inquire">inquire</div>

                <p class="line6">NO MIDDLEMAN, DIRECTLY FROM MASCOTOP !</p>

                <div class="line7"></div>

                <p class="line8">Anhui Mascotop Electronic Co., Ltd.</p>

            </div>

        </div>

        

        <!-- ···Product details···· -->

        <h1>DESCRIPTION</h1>

        <h3 class="tit_co">PRODUCT INTRODUCTION</h3>

        <p class="txt_co"><?php the_content(); ?></p>

        <div class="img_co"><img src="<?php $yfl= get_post_meta($post->ID, 'extend_info', true);  echo $yfl['produc_imgj']; ?>" alt=""></div>

        <div><?php  echo get_post_meta($post->ID , 'table_value', true); ?></div>

        

        <h3 class="tit_co">EQUIPEMENT PROCESS FLOW</h3>

        <div class="img_co"><img src="<?php bloginfo('template_url'); ?>/static/images/P_D_2.webp" alt=""></div>

        

        <h3 class="tit_co">Packing & Delivery</h3>

        <p class="txt_co">We use through-hole packaging, and the capacitors will be covered with PP bags to maximize the safety of the products. We support sea and air transportation, and the products can also be shipped to any port specified by you.</p>

        <div class="img_co"><img src="<?php bloginfo('template_url'); ?>/static/images/P_D_3.webp" alt=""></div>

        <div class="img_co"><img src="<?php bloginfo('template_url'); ?>/static/images/P_D_4.webp" alt=""></div>



        <h3 class="show"><strong>EXHIBITION</strong></h3>

        <div class="img_co"><img src="<?php bloginfo('template_url'); ?>/static/images/P_D_5.webp" alt=""></div>



        <h3 class="contact">WHY CHOOSE US</h3>

        <p class="text">* In strict accordance with the UL810, IEC60252, GB/T3667.1-2005 standards, etc. Regularly test the capacitor life, to ensure that product life and safety performance meet customer requirements.</p>

        <p class="text">* Strictly follow high standard process flow, use automatic oil treatment equipment, automatic production line, to control product consistency.</p>

        <p class="text">* Select high quality raw materials, take strict inspection of incoming materials, and reasonable storage.</p>

        <p class="text">* Professional design and service team, inquiry and consulting support,free samples.</p>

        <p class="text">* Strong professional marketing and logistics support team.</p>

        <p class="text">* Healthy financial ecology, stable vendor cooperation.</p>





    </div>

</div>



<!-- ···form···· -->

<div class="PD_form">

    <p class="tit">LEAVE A MESSAGE</p>

    <img src="<?php bloginfo('template_url'); ?>/static/images/bc_form.webp" alt="">

    <p class="futit">

        If you are interested in our products and want to know more detail, please leave a message here, we will reply you as soon as we can. 

    </p>

    <div class="PD_formbox">

        <?php echo do_shortcode( ' [wpforms id="65"] ' ); ?>

        <!-- <section>

          <input type="text" placeholder="WhatsApp/Phone" />

        </section>

        <section>

          <input type="email" placeholder="Email Address" />

        </section>

        <section>

          <textarea

            cols="100"

            rows="4"

            placeholder="Leave a message"

          ></textarea>

        </section>

        <a href="#" class="but"><p>SEND</p></a> -->

    </div>

</div>








    <!-- the poping form -->

    <div class="pop_form" id="pop_form">

        <p class="p_tit">Contact Us</p>

          <?php echo do_shortcode( ' [wpforms id="68"] ' ); ?>

        <img id="form_back" src="<?php bloginfo('template_url'); ?>/static/images/ico-cha.svg" alt="">

    </div>
    

<!-- footer -->

<?php get_footer();?>



<script src="<?php bloginfo('template_url'); ?>/static/js/back.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script>
    $('#PD_form').click(function(){

        $('#pop_form').show()

    })
    $('#form_back').click(function(event){
        var adDiv = document.getElementById("pop_form");
        adDiv.style.display="none";
        window.clearInterval(time);
    })

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