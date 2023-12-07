<?php
/*
Template Name: capabilty
*/
get_header();?>


<!-- header -->
<?php get_template_part('top') ?>
<?php
	$current_page_id = get_queried_object_id(); 
	$current_page_title = get_the_title( $current_page_id ); 
?>

<div class="in_banner">
	<div class="img">
		<img src="<?php bloginfo('template_url'); ?>/static/images/banner_capabilty.webp" />
	</div>
	<!-- 当前位置 -->
	<div class="in_position wow slideInUp">
		<div class="wrap container">
			<?php echo in_breadcrumbs(); ?>
		</div>
	</div>
</div>
<!-- anchor -->
<div class="mao_box">
	<div class="in_nav">
	<div class="in_nav_tit">
		<h6>capabilities list</h6>
	</div>
	<ul class="menu_list wrap">
		<?php
		$args = array(
			'child_of'     => 22,
			'parent'       => 22,
			'sort_column'  => 'post_title',
			'sort_order'   => 'DESC',
		);
		$pages = get_pages( $args );
		foreach ( $pages as $page ) {
			$style1 = ($current_page_title == $page->post_title) ? "active" : "";
		?>
			<li class="list <?php echo $style1 ?>">
				<a href="<?php echo esc_url( get_permalink( $page->ID ) ); ?>" title="<?php echo esc_attr( $page->post_title ); ?>" rel="nofollow">
					<?php echo esc_html( $page->post_title ); ?>
				</a>
			</li>
		<?php } ?>
	</ul>
	</div>
</div>


<main style="background: linear-gradient(to bottom,transparent, rgba(20, 139, 199, 0.2));">
	<section class="core wrap">
		<div class="i_tit m60"><h2>Supply Chain</h2><img src="<?php bloginfo('template_url'); ?>/static/images/di.png" alt=""></div>
		<h6 class="com_tit">Building A Zero Kilometer Supply Chain</h6>
		<div class="core_cricle">
			<div class="core_area">
				<img src="<?php bloginfo('template_url'); ?>/static/images/sup_logo.png" alt="">
			</div>
			<ul class="core_ul">
				<li class="core_li1">
					<img src="<?php bloginfo('template_url'); ?>/static/images/sup_ico.png" alt="">
					<h6>Supplier</h6>
					<p>Plastic parts</p>
				</li>
				<li class="core_li2">
					<img src="<?php bloginfo('template_url'); ?>/static/images/sup_ico.png" alt="">
					<h6>Supplier</h6>
					<p>Plastic films</p>
				</li>
				<li class="core_li3">
					<img src="<?php bloginfo('template_url'); ?>/static/images/sup_ico.png" alt="">
					<h6>Supplier</h6>
					<p>N/W fabrics</p>
				</li>
				<li class="core_li4">
					<img src="<?php bloginfo('template_url'); ?>/static/images/sup_ico.png" alt="">
					<h6>Supplier</h6>
					<p>Cartons</p>
				</li>
				
			</ul>
		</div>
	</section>
	<script>
		$('.core_ul li').hover(function(){
			$(this).siblings().removeClass('core_lia')
			$(this).addClass('core_lia')
		},function(){
		})
	</script>
</main>

<div style="margin-top: -1rem;"></div>


<script src="<?php bloginfo('template_url'); ?>/static/js/hScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/anchor.js"></script>






<!-- Footer -->
<?php get_footer(); ?>
 
</body>
</html>