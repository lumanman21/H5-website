<?php

get_header();

?>



<body>
<?php echo xintheme('foot_code');?>


<!-- header -->

<?php get_template_part('top') ?>







<div class="H_content1">

  <h1>CHINA'S FAMOUS NATURAL</h1>

  <h2>MINT PRODUCT MANUFACTURER</h2>

  <h3>PASSED U.S. FDA, CHINA GMP, ISO9001, ISO14001, ISO22000 AND OTHER SYSTEM CERTIFICATIONS</h3>

  <div class="but">

    <a href="<?php echo get_category_link(5); ?>" class="com_button">PRODUCT</a>

    <a href="<?php echo get_permalink(10); ?>" class="com_button">COMPANY</a>

  </div>

</div>

<div class="H_form_box">

  <div class="H_form wrap">

    <p class="tit">WELCOME TO<span>CONSULT</span></p>

    <div class="img"><img src="<?php bloginfo('template_url'); ?>/static/images/icon_inquire.svg" alt=""></div>

    <?php echo do_shortcode( ' [wpforms id="26"] ' ); ?>

  </div>

</div>

<!-- H_content2 -->

<p class="com_tit wow slideInLeft">OUR PRODUCTS</p>

<div class="tit_bc"><img src="<?php bloginfo('template_url'); ?>/static/images/tit_bc.webp" alt=""></div>

<ul class="H_content2 wrap">































<?php $posts = get_posts("numberposts=2&post_type=any&include=101,129,90"); if($posts) : foreach( $posts as $post ) : setup_postdata( $post ); ?>

  

    <li>

      <div class="left_img wow slideInRight">

          <?php if ( has_post_thumbnail()):?>

          <?php the_post_thumbnail( 'full-post-thumb'); ?>

          <?php else : ?>

          <img src="<?php echo catch_that_image() ?>"/> 

          <?php  endif; ?>

      </div>

      <div class="right_txt wow slideInRight">

        <div class="tit">

          <div class="num"><p></p></div>

          <h1><?php the_title_attribute(); ?></h1>

        </div>

        <p class="introduct">

          <?php echo mb_strimwidth(strip_tags($post->post_content),0,340,'...');?>

        </p>

        <div class="recommend">

          <span>

            <?php

							$yf= get_post_meta($post->ID, 'extend_info', true);

							echo $yf['produc_material'];

						?>

          </span>

          <a href="<?php echo get_category_link(5); ?>"></a>

        </div>

      </div>

    </li>

    <?php endforeach; endif; ?>

  <!-- <li>

    <div class="right_txt wow slideInLeft">

      <div class="tit">

        <div class="num"><p>02</p></div>

        <h1><p>PEPPERMINT OIL</p><p>DMO</p></h1>

      </div>

      <p class="introduct">"Fengle brand" peppermint oil DMO is processed by unique technology and has good quality, pure flavor and clear color.</p>

      <div class="recommend"><span>CP/BP/FCC TOTAL MENTHOL: 50%,65%</span><i></i></div>

      <a href="#" class="com_button">read more</a>

    </div>

    <div class="left_img wow slideInRight"><img src="static/images/H_02.webp" alt=""></div>

  </li> -->

</ul>



<div class="H_slogan">

  <img src="<?php bloginfo('template_url'); ?>/static/images/H_banner2.webp" alt="">

  <h1 class="wow slideInLeft">Devote in human health.</h1>

  <h2 class="wow slideInLeft">Bring fragrance into the life.</h2>

</div>



<!-- H_content3 -->

<div class="H_content3 wrap">

  <p class="com_tit">ABOUT US</p>

  <div class="tit_bc"><img src="<?php bloginfo('template_url'); ?>/static/images/tit_bc.webp" alt=""></div>

  <div class="bc_img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_3_bc.webp" alt=""></div>

  <div class="txt wow slideInLeft">

    <?php echo mb_strimwidth(get_page(10)->post_content,0,900); ?>......

  </div>

</div>



<!-- H_content4 -->

<ul class="H_content4 wrap">

  <li>

    <div class="bc_img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_4_bc1.webp" alt=""></div>

    <div class="img wow slideInLeft"><img src="<?php bloginfo('template_url'); ?>/static/images/H_4_1.webp" alt=""></div>

    <h1 class="wow slideInLeft">Production Capacity</h1>

    <p class="wow slideInLeft">Mint products annual production capacity is 3000 tons Synthetic cooling agent products annual production capacity is 100 tons.</p>

  </li>

  <li>

    <div class="bc_img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_4_bc2.webp" alt=""></div>

    <div class="img wow slideInRight"><img src="<?php bloginfo('template_url'); ?>/static/images/H_4_2.webp" alt=""></div>

    <h1 class="wow slideInRight">R&D Capability</h1>

    <p class="wow slideInRight">Identified as Anhui province enterprise technology center, Anhui province spice engineering technology research center. Established extensive scientific cooperation relationship with domestic first-class research institutes. Chaired or participated in 18 national standards and industry standards’ establishment. Has 10 authorized invention patents.</p>

  </li>

  <li>

    <div class="bc_img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_4_bc3.webp" alt=""></div>

    <div class="img wow slideInLeft"><img src="<?php bloginfo('template_url'); ?>/static/images/H_4_3.webp" alt=""></div>

    <h1 class="wow slideInLeft">Management System</h1>

    <p class="wow slideInLeft">The only enterprise in the industry passes ISO9001 quality management system, ISO22000 food safety management system, ISO14001,OHSAS18001,U.S. FDA certification, GMP certification, CGMP, HALAL, AAAA standardization good behavior confirmation and other systems certification at the same time.</p>

  </li>

  <li>

    <div class="bc_img"><img src="<?php bloginfo('template_url'); ?>/static/images/H_4_bc4.webp" alt=""></div>

    <div class="img wow slideInRight"><img src="<?php bloginfo('template_url'); ?>/static/images/H_4_4.webp" alt=""></div>

    <h1 class="wow slideInRight">Marketing Services</h1>

    <p class="wow slideInRight">Has stable customer group and sales network covers 30 countries & areas around the world.Establish good cooperation relationship with international & domestic well-known daily-use, food & pharmaceutical enterprises like Berje, O'real, Unilever, Kraft, Narcissus Pharmaceutical, Koshiro Company Ltd, Baiyunshan pharmaceutical.</p>

  </li>

</ul>



<!-- footer -->

<footer>

	<?php get_footer();?>

</footer>



<script src="<?php bloginfo('template_url'); ?>/static/js/wow.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>



</body>

</html>

