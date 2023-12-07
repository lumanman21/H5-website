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


<div class="in_banner p_banner">
		<div class="img">
			<img src="<?php bloginfo('template_url'); ?>/static/images/banner_2.webp" />
		</div>
		<div class="p_search">
			<form role="search" method="get" id="searchform" action="/">
				<input class="p_search_ipt" type="text" placeholder="Please enter the equipment query..." value="" name="s" id="s">
				<input class="p_search_btn" type="submit" value="search">
			</form>
		</div>
	</div>
	<div class="in_position in_position_bc">
		<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
		</div>
	</div>


<main>

	<section class="pd_content pt40">
	
		<div class="pd_box wrap">
			<div class="pd_img_box">
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
					</ul>
					</div>
				</div>
				<script src="<?php bloginfo('template_url'); ?>/static/js/magnifier.js"></script>
			</div>
	
			<!---------- pd_txt ------------>
			<div class="pd_txt">
				<h1>
					<?php the_title(); ?>
				</h1>
	
				<?php if( !empty ($article_data['produc_para']) ){ ?>
				<article class="p_brief">
						<?php echo $article_data['produc_para']; ?>
				</article>
				<?php } ?>
	
				<div class="i_more_list">
					<a href="javascript:;" class="i_more" onclick="asfrom()"><b>inquiry</b></a>
					<a href="tel:<?php echo xintheme('tel'); ?>" target="_blank" class="i_more i_more_2" onclick="asfrom()"><b><i class="fas fa-phone-alt fa-fw"></i><?php echo xintheme('tel'); ?></b></a>
				</div>
				
				<!-- tag -->
				<div class="tags mt40">
					<h6>Tags:</h6>
					<ul>
						<?php
							$tags = wp_get_post_tags($post->ID);
							if ( $tags ) {
						?>
						
						<?php foreach ( $tags as $tag ) { ?>
						<li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ) ?>" target="_blank"><?php echo esc_html( $tag->name ); ?></a></li>
						<?php } ?>
						
						<?php } ?>
					</ul>
				</div>

			</div>
		</div>
	
	
		<div class="detail_box bor p100 mt70">
			<div class="wrap">
				<article>
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	
		<div class="related p60">
			<div class="i_tit i_tit_c">
				<h2>You may also like</h2>
			</div>
	
			<div class="related_box wrap mt60">
				<div class="swiper-container">
				<?php
					$post_id = get_the_ID();
					$cats = wp_get_post_categories($post_id);
					if (!empty($cats)) {
						$first_cat_id = $cats[0];
						$args = array(
							'category__in' => array($first_cat_id),
							'post__not_in' => array($post_id),
							'posts_per_page' => 6,           //显示数量
							'orderby' => 'rand',             //随机排序
							'ignore_sticky_posts' => true    //排除置顶
						);
						$query = new WP_Query($args);
						if ($query->have_posts()) :
				?>
				<ul class="swiper-wrapper related_list">
				
					<?php
						while ($query->have_posts()) : $query->the_post();
						$article_data = get_post_meta($post_id, 'extend_info', true);
						$produc_img = isset($article_data['produc_img']) ? explode(',', $article_data['produc_img']) : array();
						$produc_img_src = '';
						if (count($produc_img) > 0) {
							$produc_img_src = wp_get_attachment_image_src($produc_img[0], 'full');
							$produc_img_id = attachment_url_to_postid($produc_img_src[0]);
							$produc_img_alt = get_post_meta($produc_img_id, '_wp_attachment_image_alt', true);
							if (empty($produc_img_alt)) {
								$produc_img_alt = get_the_title($post_id);
							}
						}
					?>
					<li class="swiper-slide">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<div class="img">
								<img src="<?php echo $produc_img_src[0]; ?>" alt="<?php echo $produc_img_alt; ?>" />
							</div>
							<p><?php the_title(); ?></p>
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
				
				</ul>
				<?php endif; } ?>			
				</div>
				<div class="r-pagination"></div>
			</div>
			<div class="r-button-next"><i class="fal fa-angle-right"></i></div>
			<div class="r-button-prev"><i class="fal fa-angle-left"></i></div>
		</div>

		<div class="p_case p60">
			<div class="i_tit i_tit_c">
				<h2>Success Cases</h2>
			</div>
			<div class="wrap">
				<img src="<?php echo xintheme_img('in_case_pic',''); ?>" alt="">
				<p><?php echo xintheme('in_case_txt'); ?></p>
			</div>
	
		</div>

		<div class="p_faq p60">
			<div class="i_tit i_tit_c">
				<h2>Faq</h2>
			</div>
			<ul class="faq_list wrap">
				<?php
					$faq = xintheme('faq');
					if($faq){
					foreach($faq as $value):
				?>
				<li>
					<h3><?php echo $value['p_q'] ?><i class="far"></i></h3>
					<p><?php echo $value['p_a'] ?></p>
				</li>
				<?php endforeach; } ?>

			</ul>
		</div>
		<script>
			var faqList = $('.faq_list li');
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


	
	</section>

</main>
<script>
	var rwiper = new Swiper('.related_box .swiper-container', {
		loop: true,
		loopFillGroupWithBlank: true,
		navigation: {
			nextEl: '.r-button-next',
			prevEl: '.r-button-prev',
		},
		pagination: {
			el: '.r-pagination',
			clickable: true,
		},
		autoplay: {
			delay: 3500,
			disableOnInteraction: false,
		},
		observer: true,
		observeParents: true,
		breakpoints: {
			0: {
			slidesPerView: 2,
			spaceBetween: 20,
			slidesPerGroup: 2
			},
			960: {
			slidesPerView: 4,
			spaceBetween: 20,
			slidesPerGroup: 4
			},
			1200: {
			slidesPerView: 4,
			spaceBetween: 20,
			slidesPerGroup: 2
			}
		}
	});
</script>





<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>