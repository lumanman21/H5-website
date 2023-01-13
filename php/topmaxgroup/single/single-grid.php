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



<body>
<?php echo xintheme('foot_code');?>


<!-- header -->
<?php get_template_part('top') ?>

<main>
<div class="top_banner">
  <img src="<?php bloginfo('template_url'); ?>/static/images/p_banner.webp" alt="">
</div>
<!-- in_position -->
<div class="in_position wrap">
  <div class="container">
    <?php echo in_breadcrumbs(); ?>
  </div>
</div>

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
          <div class="com_button" onclick="asfrom()">inquire</div>
      </div>
  </div>
</div>

<div class="P_content2 wrap wow slideInUp">
  <div class="products_left">
    <p class="search_tit">SEARCH</p>
    <div class="P_search">
      <form role="search" method="get" action="/">
          <input class="P_search_ipt" type="text" placeholder="ENTER KEYWORDS HERE" name="s" id="s" >
          <input class="P_search_btn" type="submit" value="search">
      </form>
    </div>
    <ul class="products_left_ul">

      <?php
      $args=array(
      'child_of'=> 2,
      'parent' => 2,
      'hide_empty'=>'0',
      'orderby'=>'id',
      'order'=>'asc',
      );
      $categories=get_categories($args);
      foreach($categories as $category) {
      $category_data = get_term_meta( $category->term_id, 'category_options', true );
      $cat_term_id = get_category($category)->term_id;
      $cat_taxonomy = get_category($category)->taxonomy;
      $upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
      $category_name = get_cat_name($cat);  // 当前分类名称
      if ($category_name==$category->name)
      {
              $style1="products_active";
      }else{
              $style1="";

      };
      if ($upcategory_name==$category->name)
      {
              $style2="products_active";
      }else{
              $style2="";
      }
      ?>
      <li class="<?php echo $style1 ?> <?php echo $style2 ?>">
      <a href="<?php echo get_category_link( $category->term_id ) ;?>">
              <?php echo $category->name;?>
      </a>
      <ul>
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
                    if ($category_name==$categoryzi->name)
                    {
                            $style3="select_active2";
                    }else{
                            $style3="";
                    }
                    echo '<li class="'.$style3.'"><a href="' . get_category_link( $categoryzi->term_id ) . '" >' . $categoryzi->name.'</a></li>';
                  }
          ?>
      </ul>
      <i></i>
      </li>
      <?php } ?>
    </ul>
  </div>
  <script>

            // 选中展开
            $('.select_active2').parent().parent().addClass('products_active')
            $(".products_active").children('ul').css('display','block')
            $(".products_active").children('i').addClass('products_i')
            $('.products_left_ul>li>i').click(function(){
                if($(this).siblings('ul').length !== 0){
                    $(this).siblings('ul').stop().slideToggle()
                    $(this).parent().siblings('li').children('ul').stop().slideUp()
                    $(this).parent().siblings('li').removeClass('products_li')
                    $(this).parent().siblings('li').children('i').removeClass('products_i')
                    $(this).toggleClass('products_i')
                    $(this).parent().toggleClass('products_li')
                    $(this).parent().siblings('li').css('padding','13px 0')
                }
            })
            // 初始化 去除下padding
            // console.log();
            var dd = document.querySelectorAll('.products_active>ul>li').length
            if(dd !== 0){
              $('.products_active').css('padding','13px 0 0 0')
            }
            $(".products_active i").click(function(){
                $(this).parent().toggleClass("products_li")
                // 根据i 加号减号状态控制padding
                if($(this).attr('class') === 'products_i'){
                    $(this).parent().css('padding','13px 0 0 0')
                }else{
                    $(this).parent().css('padding','13px 0')
                }
            })
			      var ab  = $('.products_left_ul>li')
            $.each( ab, function(i, n){
                // console.log( n.children[1].childElementCount);
                if(n.children[1].childElementCount === 0) {
                    $('.products_left_ul>li').eq(i).children('i').css('display','none')
                }
            });

  </script>
  <!-- ···Product details···· -->
  <div class="product_detail">
    <div class="detail">
        <?php echo get_post_meta($post->ID , 'table_value', true); ?>
      <!-- <img src="<?php bloginfo('template_url'); ?>/static/images/other/pd_1.webp" alt=""> -->
    </div>
    <div class="introduce">
      <h2>We can offer you personalized ODM service for<br>all of our products and package.</h2>
      <div class="intro_contain">
        <div class="left">
          <div class="top">
            <img src="<?php bloginfo('template_url'); ?>/static/images/pd_1.webp" alt="">
            <div class="txt">
              <h5>ONE ODM</h5>
              <p>Package for our<span>shoes:</span></p>
              <p>We can offer you personalized ODM service for all of our products and package.</p>
            </div>
          </div>
          <div class="bottom"><img src="<?php bloginfo('template_url'); ?>/static/images/pd_2.webp" alt=""></div>
        </div>
        <div class="right">
          <img src="<?php bloginfo('template_url'); ?>/static/images/pd_3.webp" alt="">
        </div>
      </div>
      <div class="intro_contain">
        <div class="left">
          <div class="top">
            <img src="<?php bloginfo('template_url'); ?>/static/images/pd_1.1.webp" alt="">
            <div class="txt">
              <h5>ONE ODM</h5>
              <p>Package for our<span>shoes:</span></p>
              <p>We can offer you personalized ODM service for all of our products and package.</p>
            </div>
          </div>
          <div class="bottom"><img src="<?php bloginfo('template_url'); ?>/static/images/pd_2.2.webp" alt=""></div>
        </div>
        <div class="right">
          <img src="<?php bloginfo('template_url'); ?>/static/images/pd_3.3.webp" alt="">
        </div>
      </div>
    </div>
    <div class="faq">
      <h2>Can't find the answer you're looking for?<br>We'd like to share some frequently asked question with you.</h2>
      <ul class="answer_list">
        <?php get_template_part('template-parts/faq'); ?>
        
      </ul>
      <script>
        $('.answer_list').find('li').find('.answer_tit').each(function(i){
        $(this).click(function(){
          if($(this).hasClass('liNow')){
            $('.answer_list').find('li').find('.answer_tit').removeClass('liNow');
             $('.answer_list').find('li').removeClass('liNow');
            $('.answer_list').find('.answer_txt').slideUp(300);
            }else{
              $('.answer_list').find('li').find('.answer_tit').removeClass('liNow');
              $('.answer_list').find('li').removeClass('liNow');
              $('.answer_list').find('.answer_txt').slideUp(300);
              $(this).addClass('liNow');
              $('.answer_list').find('li').eq(i).addClass('liNow');
              $('.answer_list').find('.answer_txt').eq(i).slideToggle(300);
            }
          })
        })
      </script>
    </div>
    <div class="p_form">
      <h2>CONTACT US</h2>
      <div class="form_box">
        <h3>Leave A Message</h3>
        <h4>If you are interested in our products and want to know more details, please leave a message here, we will reply you as soon as we can.</h4>
        <?php echo do_shortcode( ' [wpforms id="676"] ' ); ?>
      </div>
    </div>
  </div>
</div>


</main>




    
<!-- footer -->
<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/back.js"></script>
</body>
</html>