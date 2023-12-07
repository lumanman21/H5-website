<?php
get_header();
?>



<div class="in_search wrap box_mg m100">
	<div class="wrap">
		<div class="search_back" onClick="window.location.href = window.document.referrer;">
			<iconify-icon icon="flat-color-icons:left"></iconify-icon>
		</div>

		<div class="y_tit" style="text-align: left;">
			<h2>SEARCH RESULTS</h2>
			<p style="margin:.16rem 0 .26rem; font-size:.16rem"><?php echo 'A total of ' . $wp_query->found_posts . ' articles were found'; ?></p>
		</div>

		<ul class="in_search_list">

			<?php
				while( have_posts() ): the_post();
				$category = get_the_category();
				$catid = $category[0]->term_id;
				$category_name = get_cat_name($catid);
				$category_data = get_post_meta($post->ID, 'extend_info', true);
				$produc_img = explode( ',', $category_data['produc_img'] );
				$produc_img2 = explode( ',', $category_data['videos_img'] );
				$produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
				$produc_img_src2 = wp_get_attachment_image_src( $produc_img2[0], 'full' );
			?>
			<li class="wow slideInUp">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" target="_blank">
					<div class="img">

						<?php if( !empty ($produc_img_src[0]) ){ ?>
							<img src="<?php echo $produc_img_src[0];?>" />
						<?php } elseif( !empty ( $produc_img_src2[0] ) ){ ?>
							<img src="<?php echo $produc_img_src2[0];?>" />
						<?php } elseif( !empty ( get_post_image() ) ){ ?>
							<img src="<?php echo esc_url( get_post_image() ); ?>" alt="<?php the_title_attribute(); ?>">
						<?php } else{?>
							<img src="<?php bloginfo('template_url'); ?>/static/images/public/nopic.png">
						<?php } ?>

					</div>

					<div class="txt">
						<h2><?php the_title_attribute(); ?></h2>
						<h6><?php echo mb_strimwidth(strip_tags($post->post_content),0,320,'...');?></h6>
						<i>Classification: <?php echo $category_name ?></i>
					</div>
				</a>
			</li>
			<?php endwhile; ?>

		</ul>

	</div>
</div>




</body>
</html>