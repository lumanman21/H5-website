<?php
/*
Template Name: service
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>


<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_a.webp" />
	</div>
	<div class="b_txt">
		<h6>service</h6>
		<p>Believe in yourself, believe in partners, win-win cooperation!</p>
	</div>
</div>
<!-- 当前位置 -->
<div class="in_position wow slideInUp">
	<div class="wrap container">
		<?php echo in_breadcrumbs(); ?>
	</div>
</div>
<main class="p_box">
	<section class="wrap m30">
		<div class="i_tit">
			<h2>Advantage of Service<iconify-icon icon="icon-park-solid:setting"></iconify-icon></h2>
			<h6>we are a well-known domestic trading company specializing in the import and export of construction
				machinery. The companyhas</br> been adhering to the concept of integrity management, products across
				the world, customers from all over the world</h6>
		</div>
		<ul class="s_list m70">
			<?php
				$ad_service = xintheme('ad_service');
				if($ad_service){
				foreach($ad_service as $value):
				$img_id = $value['ad_service_ico'];
				$img_src = wp_get_attachment_image_src( $img_id, 'full' );
				$img_id_2 = $value['ad_service_pic'];
				$img_src_2 = wp_get_attachment_image_src( $img_id_2, 'full' );
			?>
			<li>
				<div class="img"><img src="<?php echo $img_src_2[0]; ?>" /></div>
				<div class="s_txt">
					<div class="tit">
						<div class="ico"><img src="<?php echo $img_src[0]; ?>" /></div>
						<h6><?php echo $value['ad_service_tit'] ?></h6>
					</div>
					<p><?php echo $value['ad_service_txt'] ?></p>
				</div>
			</li>
			<?php endforeach; } ?>


		</ul>
	</section>
	<section class="cus p70">
		<div class="wrap">
			<div class="i_tit i_tit_c i_tit_w">
				<h2>custom process</h2>
				<h6>Welcome to consult us, contact and cooperate with us</h6>
			</div>
			<ul class="cus_list m100">
			<?php
				$in_cus = xintheme('in_cus');
				if($in_cus){
					$num = 1;
					foreach($in_cus as $value):
						$img_id = $value['cus_pic'];
						$img_src = wp_get_attachment_image_src( $img_id, 'full' );
			?>
				<li>
					<div class="img"><img src="<?php echo $img_src[0]; ?>" /></div>
					<span><?php echo $num; ?></span>
					<h6><?php echo $value['cus_tit'] ?></h6>
					<p><?php echo $value['cus_txt'] ?></p>
				</li>
			<?php $num++; endforeach; } ?>

				
				
			</ul>
		</div>
	</section>
	<section class="global m100">
		<div class="wrap">
			<div class="txt">
				<div class="i_tit">
					<h2>global partnership<iconify-icon icon="icon-park-solid:setting"></iconify-icon></h2>
					<h6>Partners all over the world, more than 20 cooperative brands.</h6>
				</div>
				<article>
					<?php echo xintheme('gp_txt'); ?>
				</article>
			</div>
			<div class="in_ab_p">
				<img src="<?php bloginfo('template_url'); ?>/static/images/ab_map.png">
				<div class="in_c_dian dian1">
					<div class="round"></div>
				</div>
				<div class="in_c_dian dian2">
					<div class="round"></div>
				</div>
				<!-- <div class="in_c_dian dian3">
					<div class="round"></div>
				</div>
				<div class="in_c_dian dian4">
					<div class="round"></div>
				</div> -->
				<!-- <div class="in_c_dian dian5">
					<div class="round"></div>
				</div> -->
				<!-- <div class="in_c_dian dian6">
					<div class="round"></div>
				</div> -->
				<!-- <div class="in_c_dian dian7">
					<div class="round"></div>
				</div> -->
				<div class="in_c_dian dian8">
					<div class="round"></div>
				</div>
				<!-- <div class="in_c_dian dian9">
					<div class="round"></div>
				</div>
				<div class="in_c_dian dian10">
					<div class="round"></div>
				</div>-->
				<div class="in_c_dian dian11">
					<div class="round"></div>
				</div> 
				<div class="in_c_dian dian12">
					<div class="round"></div>
				</div>
				<div class="in_c_dian dian13">
					<div class="round"></div>
				</div>
				<div class="in_c_dian dian14">
					<div class="round"></div>
				</div>
			</div>
			
		</div>
	</section>
</main>






<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>