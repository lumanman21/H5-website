<?php
$category_data = get_term_meta( $cat, 'category_options', true );
get_header(); ?>
<?php
	$this_category = get_the_category();
	$category_id = $this_category[0]->cat_ID;
	$category_name = get_cat_name($cat);  // 当前分类名称
	$category_link = get_category_link( $cat ); // 当前分类链接
	$upcategory_id= tx_wp_get_category_root_id( $cat );
	$upcategory_name= get_cat_name($upcategory_id);  // 上级分类名称
	$upcategory_link = get_category_link( $upcategory_id ); // 上级分类链接
?>
<!-- header -->
<?php get_template_part('top') ?>





<div class="in_banner">
	<div class="img">
		<img src="<?php echo xintheme_img('in_banner_news',''); ?>" />
	</div>
	<div class="in_b_text">
		<div class="wrap">
			<h2>News</h2>
			<div class="breadcrumbs">
			<?php echo in_breadcrumbs(); ?>
			</div>
		</div>
	</div>
</div>

<main>
	<!-- news -->
	<section class="news wrap m80">
		<div class="i_tit">
			<h2><span>NEWS</span></h2>
		</div>
		
		<ul class="news_ul">
			
			<?php while (have_posts()) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<div class="news_ul_img">
					<?php display_post_image(); ?>
					</div>
					<div class="news_ul_text">
						<h3><?php the_title(); ?> </h3>
						<h4><?php echo mb_strimwidth(strip_tags($post->post_content),0,240,'...'); ?></h4>
						<h5><?php echo the_time('Y.m.d') ?></h5>
					</div>
				</a>
			</li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>


		

		<!-- 页数 -->
		<div class="in_page_box">
			<ul class="in_page wow slideInRight">
				<?php zdy_paging(); ?>
			</ul>
		</div>
	</section>



	<section class="pd_faq pt80 p140">
		<div class="wrap">
			<div class="i_tit">
				<h2><span>FAQ</span></h2>
			</div>

			<ul class="pd_faq_list">
				<?php
					$faq = xintheme('faq');
					if($faq){
					foreach($faq as $value):
				?>
				<li>
					<div class="txt">
						<h3><?php echo $value['n_q'] ?><i></i></h3>
						<p><?php echo $value['n_a'] ?></p>
					</div>
				</li>
				<?php endforeach; } ?>

			</ul>

			<a href="javascript:;" onclick="asfrom()" class="i_more m40"><b>Contact us for accurate response<i></i></b></a>
			
		</div>
	</section>
	<script>
		var faqList = $('.pd_faq_list li');
		faqList.find('h3').click(function() {
			var parentLi = $(this).parent();
			var p = parentLi.find('p');
			if (p.is(':hidden')) {
				faqList.find('p').slideUp('fast');
				faqList.find('h3').removeClass('curr');
				p.slideDown('fast');
				$(this).addClass('curr');
			} else {
				p.slideUp('fast');
				$(this).removeClass('curr');
			}
		});

	</script>
</main>







<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>
