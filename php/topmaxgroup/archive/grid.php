<?php
$category_data = get_term_meta( $cat, 'category_options', true );
get_header(); ?>
<?php
   $this_category = get_the_category();
   $category_id = $this_category[0]->cat_ID;
   $category_name = get_cat_name($cat);  // 当前分类名称   
   $category_link = get_category_link( $cat ); // 当前分类链接
?>


<body>
<?php echo xintheme('foot_code');?>


<!-- header -->
<?php get_template_part('top') ?>

<main>
<div class="tit">
  <div class="tit_bc">product</div>
  <h1>product</h1>
  <!-- in_position -->
  <div class="in_position wrap">
    <div class="container">
      <?php echo in_breadcrumbs(); ?>
    </div>
  </div>
</div>

<div class="P_content2 wrap wow slideInUp">
  <div class="products_left">
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

  <ul class="img_container">
    <?php while( have_posts() ): the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>" class="P_container">
          <div class="img">
            <?php
              $post_meta = get_post_meta(get_the_ID(), 'extend_info', true);
              $produc_img =  $post_meta['produc_img'];
              $produc_img = explode( ',', $post_meta['produc_img'] );
              $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
            ?>
            <img src="<?php echo $produc_img_src[0];?>" />
          </div>
          <p class="img_txt">
              <?php the_title_attribute(); ?>
          </p>
          <div class="more_but">View More</div>
        </a>
      </li>
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
</main>


    
<!-- footer -->
<?php get_footer();?>

<script src="<?php bloginfo('template_url'); ?>/static/js/main.js"></script>


</body>
</html>