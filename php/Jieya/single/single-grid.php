<?php get_header(); ?>
<?php
	$this_category = get_the_category();
	$category_id = $this_category[0]->cat_ID;
	$category_name = get_cat_name($category_id);  // 当前分类名称
	$category_link = get_category_link( $category_id ); // 当前分类链接
	$upcategory_id= tx_wp_get_category_root_id( $category_id );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>
<?php
	$article_data = get_post_meta($post->ID, 'extend_info', true);
?>
<!-- header -->
<?php get_template_part('top') ?>




<div class="in_banner">
  <div class="img">
    <img src="<?php bloginfo('template_url'); ?>/static/images/banner_p.webp" />
  </div>
  <!-- 当前位置 -->
  <div class="in_position wow slideInUp">
    <div class="wrap container">
      <?php echo in_breadcrumbs(); ?>
    </div>
  </div>
</div>

<main>
  <div class="in_products wrap m100"  data-sticky-container>
    <div class="p_nav" data-sticky data-margin-top="100" data-sticky-for="1023">
      <div class="i_tit">
        <h2><span>products</span></h2>
      </div>
      <ul class="p_men_list">
		<?php
			$cat_id = 2; // 指定分类 ID
			$query_args = array(
				'cat' => $cat_id, // 查询指定分类
				'posts_per_page' => 7, // 显示多少篇文章
				'orderby' => 'date', // 按日期排序
				'order' => 'DESC', // 按降序排列
			);
			$all_posts = new WP_Query( $query_args );
			if ( $all_posts->have_posts() ) {
				while ( $all_posts->have_posts() ) {
					$all_posts->the_post();
					?>
					
					<li class="<?php if (is_single(get_the_ID())) echo 'active'; ?>">
						<a rel="nofollow" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</li>
					<?php
				}
				wp_reset_postdata();
			}
		?>

		
        <li class="<?php if($category_id==6){ echo 'active'; }  ?>">
          <a href="javascript:;"><?php echo get_cat_name(6); ?></a>
          <ul>
			<?php
				$cat_id = 6; // 指定分类 ID
				$query_args = array(
					'cat' => $cat_id, // 查询指定分类
					'posts_per_page' => 6, // 显示多少篇文章
					'orderby' => 'date', // 按日期排序
					'order' => 'DESC', // 按降序排列
				);
				$all_posts = new WP_Query( $query_args );
				if ( $all_posts->have_posts() ) {
					
					while ( $all_posts->have_posts() ) {
						$all_posts->the_post();
						?>
					
						<li class="<?php if (is_single(get_the_ID())) echo 'active'; ?>">
							<i></i><a rel="nofollow" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</li>
						<?php
					}
					wp_reset_postdata();
				}
			?>
           
          </ul>
        </li>
      </ul>
      <div class="img">
        <img src="<?php bloginfo('template_url'); ?>/static/images/bc_p_menu.png" alt="" />
      </div>
	  <script src="https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/static/js/Multi-layer_fold.js"></script>
      <script>
        $(document).ready(function () {
          $(".p_men_list").accordion({
            accordion: false,
            speed: 500,
            closedSign:'<iconify-icon icon="mingcute:down-line"></iconify-icon>',
            openedSign:'<iconify-icon icon="mingcute:up-line"></iconify-icon>',
          });
        });
      </script>
    </div>

    <div class="in_p_r">
      <div class="d_content">
        <h1><?php the_title_attribute(); ?></h1>
		<article>
			<?php if( get_the_content() ){ ?>
				<?php the_content(); ?>
			<?php } ?>
		</article>
        <div class="i_more_list m40">
          <a href="mailto:<?php echo xintheme('email'); ?>" target="_blank" rel="nofollow" class="i_more i_more_color">INQUIRE NOW</a>
          <button onclick="asfrom()" href="" class="i_more i_more_color">ASK FOR A SAMPLE</button>
        </div>
        <section class="advantage m70">
    		<h2>Our ADVANTAGE</h2>
            <ul class="advantage_list m30">
				<?php
					$p_ad = xintheme('p_ad');
					if($p_ad){
					foreach($p_ad as $value):
				?>
				<li>
					<div class="txt">
					<h3><?php echo $value['p_ad_tit'] ?><i></i></h3>
					<p><?php echo $value['p_ad_txt'] ?></p>
					</div>
				</li>
				
				<?php endforeach; } ?>

              
            </ul>
			<script>
				var faqList = $(".advantage_list li");
				faqList.find("h3").click(function () {
				var parentLi = $(this).parent();
				var p = parentLi.find("p");
				if (p.is(":hidden")) {
				faqList.find("p").slideUp("fast");
				faqList.find("h3").removeClass("curr");
				p.slideDown("fast");
				$(this).addClass("curr");
				} else {
				p.slideUp("fast");
				$(this).removeClass("curr");
				}
				});
			</script>
        </section>
  
		<h2>Our Products</h2>
		<ul class="in_p_list">
			<?php
				$article_data = get_post_meta($post->ID, 'extend_info', true);
				$product_c = $article_data['product_c'];
				if( !empty($product_c) ){
				foreach($product_c as $article_data){
					// $pic_id = $article_data['product_c_pic'];
					// $pic_url = wp_get_attachment_image_src($pic_id,'full');
			?>
			<li>
				<!-- <div class="img"><img src="<?php echo $pic_url[0]; ?>" alt=""></div> -->
				<a href=""><?php echo $article_data['product_c_txt'] ?></a>
			</li>
			<?php } } ?>
		</ul>
      </div>
    </div>
  </div>
</main>
<script src="<?php bloginfo('template_url'); ?>/static/js/sticky.min.js"></script>
<script>
  var sticky = new Sticky('[data-sticky]', {});
</script>








<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>