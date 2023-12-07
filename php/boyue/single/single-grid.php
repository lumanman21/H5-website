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
		<?php 
			$thumbnail_id = $category_data['cat_thumbnail_banner'];
			$thumbnail_alt = get_cat_name($value);
			?>
		<?php if( !empty ($thumbnail_id ) ){ ?>
			<img <?php echo get_category_thumbnail($thumbnail_id, $thumbnail_alt); ?> />
		<?php }else { ?>
			<img src="<?php bloginfo('template_url'); ?>/static/images/banner_p.webp" alt="">
		<?php } ?>
	</div>
	<div class="in_b_text">
		<h2><?php the_title(); ?></h2>
		<p>Let customers find satisfactory products is our ultimate pursuit</p>
	</div>
	
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>

<main>

	<section class="p_info_box p80">
		<div class="wrap">
			<div class="p_info">

				<div class="p_atlas">
					<div class="p_atlas_list swiper-container" id="p_atlas_list">
						<ul class="swiper-wrapper">
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
								<li class="swiper-slide">
									<img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />
								</li>
								<?php endforeach;endif ?>
						</ul>
					</div>
					<div class="pr">
						<div class="p_thumbnail_list swiper-container">
							<ul class="swiper-wrapper">
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
								<li class="swiper-slide">
									<img src="<?php echo $produc_img_src[0];?>" data-lsrc="<?php echo $produc_img_src[0];?>" data-maxSrc="<?php echo $produc_img_src[0];?>" />
								</li>
								<?php endforeach;endif ?>
							</ul>
						</div>
						<div class="thumbnail-prev"><iconify-icon icon="uiw:left"></iconify-icon></div>
						<div class="thumbnail-next"><iconify-icon icon="uiw:right"></iconify-icon></div>
					</div>
					<div class="thumbnail-pagination"></div>
				</div>

				<div class="p_info_cont">
					<h1><?php the_title(); ?></h1>
					<div class="txt">
						<?php echo $article_data['produc_ms']; ?>
					</div>
					<div class="tag mt40">
						<p>Tag:</p>
						<?php
							$tags = wp_get_post_tags($post->ID);
							if ( $tags ) {
						?>
						
						<?php foreach ( $tags as $tag ) { ?>
						<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ) ?>" target="_blank"><?php echo esc_html( $tag->name ); ?></a>
						<?php } ?>
						
						<?php } ?>
							
					</div>
					<div class="pd_share mt50">
						<div class="i_more_list m30">
							<a href="https://wa.me/<?php echo xintheme('whatsapp'); ?>" target="_blank" class="i_more i_more_f"><b>INQUIRE NOW</b></a>
							<a href="mailto:<?php echo xintheme('email'); ?>" target="_blank" class="i_more i_more_f"><b>email us</b></a>
						</div>
						<div class="share">
							<p>share:</p>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank" rel="nofollow">
								<iconify-icon icon="ic:baseline-facebook"></iconify-icon>
							</a>
							<a href="https://www.linkedin.com/shareArticle?url=<?php echo the_permalink(); ?>&title=<?php echo the_title_attribute(); ?>" target="_blank" rel="nofollow">
								<iconify-icon icon="uil:linkedin"></iconify-icon>
							</a>
							<a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>" target="_blank" rel="nofollow">
								<iconify-icon icon="bi:twitter-x"></iconify-icon>
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="detail_box p80">
			<div class="wrap" data-sticky-container>
				<div class="detail">
					<div class="pd_menu">
						<h2><p>INTRODUCTIN LIST</p><iconify-icon icon="memory:menu-down-fill"></iconify-icon></h2>
						<ul class="pd_menu_list">
							<li>Product Description</li>
							<li>Specification</li>
							<li>video</li>
							<li>Company Profile</li>
							<li>faq</li>
						</ul>
					</div>
					<div class="pd_content">
						<article>
							<?php if( get_the_content() ){ ?>
								<?php the_content(); ?>
							<?php } ?>
						</article>
						<article>
							<?php echo $article_data['produc_guige']; ?>
						</article>
						<article id="p_video">
							<?php echo $article_data['produc_video']; ?>
						</article>
						<article><?php echo xintheme('p_company'); ?></article>
						<article>
							<ul class="pd_faq_list">
								<?php
									$article_data = get_post_meta(get_the_ID(), 'extend_info', true);
									$produc_faq = $article_data['produc_faq'];
									if( !empty($produc_faq) ){
									foreach($produc_faq as $article_data){
								?>
								
								<li>
									<div class="txt">
										<h3><?php echo $article_data['produc_q'] ?><i></i></h3>
										<p><?php echo $article_data['produc_a'] ?></p>
									</div>
								</li>
								<?php } } ?>
							
							</ul>
						</article>
					</div>
					<script>
						document.addEventListener("DOMContentLoaded", function() {
							var pVideo = document.getElementById("p_video");
							if (pVideo.querySelector("video")) {
								var divWrapper = document.createElement("div");
								divWrapper.classList.add("video_wrapper"); 
								divWrapper.innerHTML = pVideo.innerHTML;
								pVideo.innerHTML = "";
								pVideo.appendChild(divWrapper);
							}
						});
					</script>
					<script>
						if(screen.width < 1025){
							$(function(){
								$(".pd_menu h2").click(function () {
									$(this).toggleClass("on");
									$(".pd_menu_list").stop().slideToggle();
								});
							});
						}
					</script>
					
	
				</div>
				<div class="pd_form" data-sticky data-margin-top="100" data-sticky-for="1023">
					<div class="pd_form_box">
						<h2>Get in touch with us</h2>
						<?php echo do_shortcode( '[wpforms id="52"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/static/js/jquery.tabso_yeso.js"></script>
	<script>
		$(".pd_menu_list").tabso({
			cntSelect: ".pd_content",
			tabEvent: "click",
			tabStyle: "normal"
		});
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



	<section class="related p60">
		<div class="wrap">

			<div class="i_tit">
				<h2>Relevant Accessories</h2>
			</div>
	
			<div class="related_box mt60">
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
								<h6><?php the_title(); ?></h6>
							</a>
						</li>
						<?php endwhile; wp_reset_postdata(); ?>
						
					</ul>
					<?php endif; } ?>					
				</div>
				<div class="r-pagination"></div>
			</div>
			<div class="r-button-next"><iconify-icon icon="mingcute:left-line"></iconify-icon>></div>
			<div class="r-button-prev"><iconify-icon icon="mingcute:right-line"></iconify-icon></div>
		</div>
	</section>


</main>
<script src="<?php bloginfo('template_url'); ?>/static/js/sticky.min.js"></script>
<script>
	var sticky = new Sticky('[data-sticky]', {});
</script>
<link href="<?php bloginfo('template_url'); ?>/static/css/viewer.min.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/static/js/viewer.min.js"></script>
<script>
	var swiper = new Swiper(".p_thumbnail_list", {
		spaceBetween: '4%',
		slidesPerView: 4,
		//loop: true,
		watchSlidesProgress: true,
		autoplay: {
			delay: 5000,
			pauseOnMouseEnter:true,
			disableOnInteraction: false,
		},
		roundLengths: true,
		on: {
			init: function() {
			if (this.slides.length > this.params.slidesPerView) {
				this.$el.find('.swiper-wrapper').css({
				'justify-content': 'flex-start'
				});
			}
			},
			resize: function() {
			if (this.slides.length <= this.params.slidesPerView) {
				this.$el.find('.swiper-wrapper').css({
				'justify-content': 'center'
				});
			} else {
				this.$el.find('.swiper-wrapper').css({
				'justify-content': 'flex-start'
				});
			}
			}
		},
		observer: true,
		observeParents: true,
	});
	var swiper2 = new Swiper(".p_atlas_list", {
		slidesPerView: 1,
		spaceBetween: 0,
		slidesPerGroup: 1,
		effect: "fade",
		centeredSlides: true,
		pagination: {
          	el: ".thumbnail-pagination",
          	type: "fraction",
        },
		//loop: true,
		navigation: {
			nextEl: ".thumbnail-next",
			prevEl: ".thumbnail-prev",
		},
		autoplay: {
			delay: 5000,
			pauseOnMouseEnter:true,
			disableOnInteraction: false,
		},
		thumbs: {
			swiper: swiper,
		},
		observer: true,
		observeParents: true,
	});
	/*View Pic*/
	var image = new Viewer(document.getElementById('p_atlas_list'), {
		button: true,
		navbar: false,
		width: 660,
		title: false
	});
</script>
<script>
	var rwiper = new Swiper('.related_box .swiper-container', {
		// loop: true,
		// loopFillGroupWithBlank: true,
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
			560: {
			slidesPerView: 3,
			spaceBetween: 20,
			slidesPerGroup: 1
			}
		}
	});
</script>






<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>