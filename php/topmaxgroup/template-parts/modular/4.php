<?php
$modular_title = $id['modular_title_4'];
$modular_subtitle = $id['modular_subtitle_4'];
$cat_id = $id['modular_4_category'];
$bg_color = $id['modular_4_bg_color'];
$bg_color = $id['modular_4_bg_color'];
$txt_color = $id['modular_4_txt_color'];?>


<!-- 首页产品展示 只在移动端显示（屏幕小于等于959px） -->
<div class="i_porducts wrap">

	<div class="Center tw-flex-col tw-gap-2 tw-my-3 md:tw-mt-10">
		<h2 class="md:tw-text-5xl tw-text-xl tw-font-bold">Our products</h2>
		<img src="https://img.bjyyb.net/sites/68500/68506/20220216101731626.webp" alt="">
	</div>

	<ul class="i_pro_list">
		<?php 	query_posts( 'cat='.$cat_id.'&posts_per_page=8,&ignore_sticky_posts=1' );
	while( have_posts() ): the_post(); ?>
		<li>
			<a href="#">
				<div class="img">
					<img src="<?php echo post_thumbnail(260, 260); ?>" alt="<?php the_title(); ?>"/>
				</div>
				<div class="txt">
					<h2>
						<?php 
						$category = get_the_category();//默认获取当前所属分类
						echo $category[0]->cat_name; //输出分类 id(); 
						?>
					</h2>
					<p>
						<?php
							$shuzi= get_post_meta($post->ID, 'extend_info', true);
							echo $shuzi['produc_specification'];
						?>
					</p>
				</div>
			</a>
		</li>
		<?php endwhile; wp_reset_query(); ?> 
	</ul>
</div>


	<div class="i_factory">
		<div class="wrap">
			<p>We Control Quality & Inspect Carefully in Every Step.</p>
			<a href="/profile/factory-profile">OUR FACTORY</a>
		</div>
	</div>


    