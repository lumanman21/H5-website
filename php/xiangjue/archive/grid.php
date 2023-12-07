<?php get_header(); ?>
<?php
	$category_id = $cat;

	$category_name = get_cat_name($category_id);  // 当前分类名称
	$category_link = get_category_link( $category_id ); // 当前分类链接

	$upcategory_id= tx_wp_get_category_root_id( $category_id );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>


<!-- <?php
	if(strpos($upcategory_name,'Products') !== false){
		$current_category_id =  $category_id;
	}else{
		$current_category_id =  $upcategory_id;
	}
?> -->



<!-- header -->
<?php get_template_part('top') ?>


<div class="in_banner">
  <div class="img">
    <img src="<?php bloginfo('template_url'); ?>/static/images/banner_p.webp" />
  </div>
  <div class="wrap">
    <h2>Products</h2>
  </div>
</div>
<div class="in_position">
  <div class="wrap container">
    <?php echo in_breadcrumbs(); ?>
  </div>
</div>


<section class="in_products wrap m100">
  <div class="p_nav">
    <div class="p_nav_tit">
      <h2>Product classification</h2>
    </div>
    <ul class="p_men_list">
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
					if ($category_name==$category->name)
					{
							$style1="active";
					}else{
							$style1="";
					};
					?>
				<li class="<?php echo $style1 ?>">
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
											$style2="active";
									}else{
											$style2="";
									}
									echo '<li class="' . $style2 . '"><i></i><a href="' . get_category_link($categoryzi->term_id) . '">' . $categoryzi->name . '</a></li>';
								}
						?>
					</ul>
				</li>
				<?php } ?>
    </ul>
		<script src='https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js'></script>
    <script src="<?php bloginfo('template_url'); ?>/static/js/Multi-layer_fold.js"></script>
    <script>
      $(document).ready(function() {
        $(".p_men_list").accordion({
          accordion:false,
          speed: 500,
          closedSign: '<iconify-icon icon="mingcute:down-line"></iconify-icon>',
          openedSign: '<iconify-icon icon="mingcute:up-line"></iconify-icon>'
        });
      });
      if(screen.width < 1025){
        $(function(){
          $(".p_nav_tit").click(function () {
            $(this).toggleClass("on");
            $(".p_men_list").stop().slideToggle();
          });
        });
      }
    </script>
  </div>

  <div class="in_p_r">
    <ul class="in_p_list">
      <?php while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <div class="img">
          <?php
              $article_data = get_post_meta(get_the_ID(), 'extend_info', true);
              $produc_img = explode( ',', $article_data['produc_img'] );
              $thumbnail_id = $produc_img[0];
              $thumbnail_alt = get_the_title();
          ?>
          <img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
        </div>
        <div class="txt">
         <p>
              <?php
                  $categories = get_the_category();
                  if (!empty($categories)) {
                      echo esc_html($categories[0]->name);
                  }
              ?>
          </p>
          <h6><?php the_title(); ?></h6>
          <span class="i_btn"><iconify-icon icon="ep:right"></iconify-icon>View More</span>
        </div>
      </a></li>
      <?php endwhile; wp_reset_postdata(); ?>


      
    </ul>

    <!-- Number of pages -->
    <div class="in_page_box wow slideInUp">
      <ul class="in_page">
        <?php zdy_paging(); ?>
      </ul>
    </div>
  </div>
</section>



<!-- Footer -->
<?php get_footer(); ?>


</body>
</html>