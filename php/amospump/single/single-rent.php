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
  <div class="r_container wrap wow slideInUp">
    <div class="r_left">
      <div class="img">
       <?php
        $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
        $rent_img =  $post_meta['rent_img'];
        $rent_img = explode( ',', $post_meta['rent_img'] );
        $rent_img_src = wp_get_attachment_image_src( $rent_img[0], 'full' );
        ?>
        <img src="<?php echo $rent_img_src[0];?>" data-src="<?php echo $rent_img_src[0];?>" /> 
      </div>
      <div class="com_button" onclick="asfrom()">Rent Equipment</div>
    </div>
    <div class="r_right">
      <h4><?php the_title_attribute(); ?></h4>
      <ul>
        <li><p>Discharge Flange</p><p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_a'];	?></p></li>
        <li><p>Dry Weight</p><p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_b'];	?></p></li>
        <li><p>Footprint</p><p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_c'];	?></p></li>
        <li><p>Fuel Capacity</p><p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_d'];	?></p></li>
        <li><p>Impeller Diameter</p><p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_e'];	?></p></li>
        <li><p>Max Flow</p><p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_f'];	?></p></li>
        <li><p>Max Head</p><p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_g'];	?></p></li>
        <li><p>Priming Method</p><p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_h'];	?></p></li>
        <li><p>Pump Size</p><p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_i'];	?></p></li>
        <li><p>Solids</p><p><?php $bl= get_post_meta($post->ID, 'extend_info', true);	echo $bl['rent_param_j'];	?></p></li>
      </ul>
    </div>
  </div>

  <div class="r_detail_box wrap wow slideInUp">
    <div class="r_d_left">
      <div class="intro">
        <?php the_content(); ?>
      </div>
      <ul class="tab_list">
        <li class="feat tab_list_active">FEATURES</li>
        <li class="acces">ACCESSORIES</li>
        <li class="spec">SPECS</li>
      </ul>
      <ul class="tab_txt">
        <li class="featTxt">
        <?php  echo get_post_meta($post->ID , 'features_value', true); ?>
        </li>
        <li class="accesTxt">
        <?php  echo get_post_meta($post->ID , 'accessories_value', true); ?>
        </li>
        <li class="specTxt">
        <?php  echo get_post_meta($post->ID , 'specs_value', true); ?>
        </li>
      </ul>
    </div>
    <!-- <div class="r_d_right"></div> -->
  </div>
  <script>
    $('.feat').click(function(){
      $('.feat').addClass('tab_list_active')
      $('.feat').siblings().removeClass('tab_list_active')
      $('.featTxt').show()
      $('.accesTxt').hide()
      $('.specTxt').hide()
    })
    $('.acces').click(function(){
      $('.acces').addClass('tab_list_active')
      $('.acces').siblings().removeClass('tab_list_active')
      $('.featTxt').hide()
      $('.accesTxt').show()
      $('.specTxt').hide()
    })
    $('.spec').click(function(){
      $('.spec').addClass('tab_list_active')
      $('.spec').siblings().removeClass('tab_list_active')
      $('.featTxt').hide()
      $('.accesTxt').hide()
      $('.specTxt').show()
    })
  </script>
</main>




    
<!-- footer -->
<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>
</body>
</html>