<?php

/*

Template Name: singleSpc

*/

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





<!-- 当前位置 -->

<div class="in_position wow slideInUp">

        <div class="wrap container">

          <?php echo in_breadcrumbs(); ?>

        </div>

    </div>

     <!-- 标题 title -->

     <div class="home_title home_spc">

        <p>Spc Floor</p>

        <span>

            In line with the concept of low carbon and environmental protection, it specializes in the research and development and production of new environmentally friendly materials.

            The product has the functions of waterproof, flame retardant, anti-deformation, anti-corrosion, anti-termite and other functions. It is a new type of environmentally friendly floor material and is widely used in home improvement tooling and garden landscape decoration.

        </span>

    </div>

    <!-- spc 内容 -->

    <div class="spc_floor">

        <img src="<?php bloginfo('template_url'); ?>/static/imgs/spc_title.jpg" alt="">

        <div class="over_btn spc_btn">

            <a>

                Inquire

            </a>

            <a href="<?php echo get_permalink(91); ?>">

                About us

            </a>

        </div>

        <ul class="spc_ul warp_vision">

            <li>

                <a href="<?php echo get_category_link(1); ?>" class="spc_black">

                    <img src="<?php bloginfo('template_url'); ?>/static/imgs/spc_floor1.jpg" alt="">

                    <p>Regular suit renderings and <br>

                        custom suits

                    </p>

                </a>

               

            </li>

            <li >

               <a href="<?php echo get_permalink(133); ?>">

                    <img src="<?php bloginfo('template_url'); ?>/static/imgs/spc_floor2.jpg" alt="">

                    <p>Product performance

                    </p>

               </a>

                <!-- 箭头 -->

                <div class="arrows-body">

                    <div class="arrow"></div>

                    <div class="arrow"></div>

                    <div class="arrow"></div>

                </div>

            </li>

        </ul>

    </div>

    

     <!-- detailed 内容上 -->

    <div class="Schematic">

       <p class="Schematic_title">Schematic diagram of SPC lock floor</p>

       <ul class="Schematic_ul">

           <li>

               <p>UV layer</p>

               <span>Water astringent and non-slip,

                Stains are easier to handle.</span>

           </li>

           <li>

                <p>Wear-resistant layer</p>

                <span>Made of transparent polymer technology,

                    Flooring is durable.</span>

           </li>

           <li>

                <p>Color filter layer</p>

                <span>Restore the real texture,

                    The floor is full of luxury.</span>

            </li>

            <li>

                <p>SPC layer</p>

                <span>High density structure,

                    Green.</span>

            </li>

       </ul>

    </div>

    <!-- detailed 内容中 -->

    <div class="uv">

        <div class="uv_img">

            <img src="<?php bloginfo('template_url'); ?>/static/imgs/uv.jpg" alt="">

        </div>

        <ul class="uv_ul">

            <li>

                <p><i>01</i> UV layer </p>

                <p class="uv_p">Enhance the wear resistance and scratch resistance of the floor surface，unify the surface gloss，and enhance the waterproof function and pollution resistance function。</p>

            </li>

            <li>

                <p><i>02</i> Transparent polymer wear resistant layer </p>

                <p class="uv_p">The number of revolutions reaches10000，up to the export standards of Europe and America。Protect the color and texture not be worn，solid and practical for endurable year round service。</p>

            </li>

            <li>

                <p><i>03</i> High definition color film</p>

                <p class="uv_p">High definition film ，distinct texture and realistic color ，make the floor more realistic。</p>

            </li>

            <li>

                <p><i>04</i>SPC material stabilizing the grassroots </p>

                <p class="uv_p">Upgrade and stabilize the base，effectively improve the wear resistance and anti-fouling performance，and extend the service life of the floor。</p>

            </li>

        </ul>

    </div>

    <!-- detailed 内容下 -->

    <div class="performance">

        <p class="Schematic_title">Product performance</p>

        <ul class="performance_ul">

            <li>

                <img src="<?php bloginfo('template_url'); ?>/static/imgs/products_1.jpg" alt="">

                <p class="performance_ul_p">Waterproof</p>

                <div class="performance_black">

                     <img src="<?php bloginfo('template_url'); ?>/static/imgs/icon1.png" alt="">

                     <p class="performance_ul_p performance_ul_p_color">Waterproof</p>

                     <span>It has the characteristics of environmental protection, sound insulation, moisture resistance, etc., and the family can have a quieter and more comfortable indoor environment. Quiet pads are sound-absorbing and sound-isolating. You can enjoy a comfortable life.</span>

                </div>

            </li>

            <li>

                <img src="<?php bloginfo('template_url'); ?>/static/imgs/products_2.jpg" alt="">

                <p class="performance_ul_p">Fireproof</p>

                <div class="performance_black">

                     <img src="<?php bloginfo('template_url'); ?>/static/imgs/icon2.png" alt="">

                     <p class="performance_ul_p performance_ul_p_color">Fireproof</p>

                     <span>An innovative coating and a moisture- and mildew-resistant primer have been added for a cleaner, healthier floor for everyone. Microorganisms cannot exist. 99% cleaner than SGS certified untreated floors. Guard your family around the clock.</span>

                </div>

            </li>

            <li>

                <img src="<?php bloginfo('template_url'); ?>/static/imgs/products_3.jpg" alt="">

                <p class="performance_ul_p">Wear-resistant</p>

                <div class="performance_black">

                     <img src="<?php bloginfo('template_url'); ?>/static/imgs/icon3.png" alt="">

                     <p class="performance_ul_p performance_ul_p_color">Wear-resistant</p>

                     <span>The SPC floor has a transparent wear-resistant layer, and its wear-resistant revolution is greater than 10,000 cycles.</span>

                </div>

            </li>

            <li>

                <img src="<?php bloginfo('template_url'); ?>/static/imgs/products_4.jpg" alt="">

                <p class="performance_ul_p">Environmentally friendly</p>

                <div class="performance_black">

                     <img src="<?php bloginfo('template_url'); ?>/static/imgs/icon4.png" alt="">

                     <p class="performance_ul_p performance_ul_p_color">Environmentally friendly</p>

                     <span>SPC flooring uses unique raw materials and manufacturing techniques to provide you with superior impact resistance. You don't have to worry when you walk on them in your new heels, or drop your heavy suitcase on the ground after a trip.</span>

                </div>

            </li>

            <li>

                <img src="<?php bloginfo('template_url'); ?>/static/imgs/products_5.jpg" alt="">

                <p class="performance_ul_p">Antibacterial</p>

                <div class="performance_black">

                     <img src="<?php bloginfo('template_url'); ?>/static/imgs/icon5.png" alt="">

                     <p class="performance_ul_p performance_ul_p_color">Antibacterial</p>

                     <span>SPC floor is a new type of floor material that is 100% waterproof; the raw material such as stone powder itself does not absorb moisture and is waterproof.</span>

                </div>

            </li>

            <li>

                <img src="<?php bloginfo('template_url'); ?>/static/imgs/products_6.jpg" alt="">

                <p class="performance_ul_p">Stain resistance</p>

                <div class="performance_black">

                     <img src="<?php bloginfo('template_url'); ?>/static/imgs/icon6.png" alt="">

                     <p class="performance_ul_p performance_ul_p_color">Stain resistance</p>

                     <span>It has passed the fire test and has a fire rating of B1, which automatically extinguishes when it leaves the fire source to ensure life safety.</span>

                </div>

            </li>

            <li>

                <img src="<?php bloginfo('template_url'); ?>/static/imgs/products_7.jpg" alt="">

                <p class="performance_ul_p">Anti-scratch</p>

                <div class="performance_black">

                     <img src="<?php bloginfo('template_url'); ?>/static/imgs/icon7.png" alt="">

                     <p class="performance_ul_p performance_ul_p_color">Anti-scratch</p>

                     <span>All materials used in the product are safe and environmentally friendly, have no impact on the human environment, and do not contain any radioactive elements.</span>

                </div>

            </li>

            <li>

                <img src="<?php bloginfo('template_url'); ?>/static/imgs/products_8.jpg" alt="">

                <p class="performance_ul_p">Impact resistance</p>

                <div class="performance_black">

                     <img src="<?php bloginfo('template_url'); ?>/static/imgs/icon8.png" alt="">

                     <p class="performance_ul_p performance_ul_p_color">Impact resistance</p>

                     <span>The special double UV paint guarantees the super stain resistance of Ayalen SPC floors, and the common stains on it are easy to clean: coffee, any type of sauce, any type of oil, vinegar, any other stains A wet mop is enough to wipe clean.</span>

                </div>

            </li>

            <li>

                <img src="<?php bloginfo('template_url'); ?>/static/imgs/products_9.jpg" alt="">

                <p class="performance_ul_p">Slip resistance</p>

                <div class="performance_black">

                     <img src="<?php bloginfo('template_url'); ?>/static/imgs/icon9.png" alt="">

                     <p class="performance_ul_p performance_ul_p_color">Slip resistance</p>

                     <span>Compared with ordinary UV coatings, the scratch resistance is greatly improved.</span>

                </div>

            </li>

            <li>

                <img src="<?php bloginfo('template_url'); ?>/static/imgs/products_10.jpg" alt="">

                <p class="performance_ul_p">Noise reduction</p>

                <div class="performance_black">

                     <img src="<?php bloginfo('template_url'); ?>/static/imgs/icon10.png" alt="">

                     <p class="performance_ul_p performance_ul_p_color">Noise reduction</p>

                     <span>The surface is a high-density special structure wood grain pattern. It is more astringent when in contact with water and does not slip. Home paving can alleviate the safety concerns of the elderly and children, and its characteristics are unmatched by stone and ceramic tiles.</span>

                </div>

            </li>

        </ul>

    </div>

    <!-- spc弹框 -->

    <!-- <div class="spc_form">

        <div class="contact_send spc_inquer" style="margin: 0 auto;">

            <i class="tc_from_close"></i>

            <p>send your message</p>

            <input type="text" placeholder="Your name">

            <input type="text" placeholder="Your email">

            <input type="text" placeholder="Your number">

            <input type="text" placeholder="Your company">

            <textarea name="" id="" cols="30" rows="5"  placeholder="Your message"></textarea>

            <a href="">SUBMIT</a>

        </div>

    </div> -->

    <!-- spc弹框 -->

    <div class="spc_form">

        <div class="contact_send spc_189 spc_inquer" style="margin: 0 auto;">

            <i class="tc_from_close"></i>

            <p>send your message</p>

            <?php echo do_shortcode( ' [wpforms id="189"] ' ); ?>

        </div>

    </div>

    <script>

        $('.spc_btn a:eq(0)').click(function(){

            $('.spc_form').css('display','block')

        });

        $('.tc_from_close').click(function(){

            $('.spc_form').css('display','none')

        })

    </script>







<!-- footer -->

<?php get_footer();?>





</body>

</html>