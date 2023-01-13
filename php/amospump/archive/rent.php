<?php

get_header(); ?>

<body>
<?php echo xintheme('foot_code');?>


<!-- header -->
<?php get_template_part('top') ?>


<div class="top_content">
  <img src="<?php bloginfo('template_url'); ?>/static/images/s_banner.webp" alt="">
</div>
<!-- in_position -->
<div class="in_position">
  <div class="wrap container">
    <?php echo in_breadcrumbs(); ?>
  </div>
</div>

<main>
  <div class="rentTxt wrap wow slideInUp">
    <p>AMOS' complete line of rental pumps ,pump vehicles and dredging system provide high head, high flow, sound attenuation and everything in between. Designed to withstand the wear and tear of the toughest jobsite, you can count on these pumps and equipment to work when you need them.</p>
    <br><p>We have a unique assortment of trash and sewage pumps, high head pumps, flood dewatering pumps, pumping vehicles, dredging systems and provide nationwide pumping and dredging system rentals for a variety of industrial and municipal pumping needs.</p>
    <br><p>Our pumps, pumping vehicles and dredging system meet the needs of temporary dewatering, flood relief, backup support and dredging operation. Ask how our experts can help you when selecting a pump or equipment for your jobsite application.</p>
  </div>
  <div class="rentBox wrap wow slideInUp">
    <ul class="param_list">
      <div class="img"><img src="static/images/other/pd_3.webp" alt=""></div>
      <h3>111</h3>
      <li>Discharge Flange</li>
      <li>Dry Weight</li>
      <li>Footprint</li>
      <li>Fuel Capacity</li>
      <li>Impeller Diameter</li>
      <li>Max Flow</li>
      <li>Max Head</li>
      <li>Priming Method</li>
      <li>Pump Size</li>
      <li>Solids</li>
    </ul>
    <ul class="rent_list">


    <?php while( have_posts() ): the_post(); ?>
    <li><a href="<?php the_permalink(); ?>">
        <div class="img">
         <?php
          $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
          $rent_img =  $post_meta['rent_img'];
          $rent_img = explode( ',', $post_meta['rent_img'] );
          $rent_img_src = wp_get_attachment_image_src( $rent_img[0], 'full' );
          ?>
          <img src="<?php echo $rent_img_src[0];?>" data-src="<?php echo $rent_img_src[0];?>" /> 
        </div>
        <h3><?php the_title_attribute(); ?></h3>
        <div class="r_txt">
          <p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_a'];	?></p>
          <p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_b'];	?></p>
          <p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_c'];	?></p>
          <p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_d'];	?></p>
          <p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_e'];	?></p>
          <p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_f'];	?></p>
          <p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_g'];	?></p>
          <p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_h'];	?></p>
          <p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_i'];	?></p>
          <p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_j'];	?></p>
        </div>
        <div class="com_button">More</div>
      </a></li>

    <?php endwhile; ?>




     
    </ul>
  </div>
  <!-- page -->

  <div class="inPage">
    <div class="in_page_box">
      <div class="in_page">
          <?php page_pagenavi(6); ?>
      </div>
    </div>
  </div>

  <div class="C_form wrap wow slideInRigh">

      <?php echo do_shortcode( ' [wpforms id="41"] ' ); ?>

    </div>

</main>




<!-- footer -->
<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>


</body>
</html>