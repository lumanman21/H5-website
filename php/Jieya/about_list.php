<!-- anchor -->
<div class="mao_box">
	<div class="in_nav">
	<div class="in_nav_tit">
		<h6>About list</h6>
	</div>
	<ul class="menu_list">
	<?php
	$args = array(
		'child_of'     => 2,
		'parent'       => 2,
		'sort_column'  => 'menu_order',
		'sort_order'   => 'ASC',
	);
	$pages = get_pages( $args );
	foreach ( $pages as $page ) {
	?>
		<li class="list <?php if (is_page($page->ID)) echo 'active'; ?>">
			<a href="<?php echo esc_url( get_permalink( $page->ID ) ); ?>" title="<?php echo esc_attr( $page->post_title ); ?>" rel="nofollow">
				<?php echo esc_html( $page->post_title ); ?>
			</a>
		</li>
	<?php } ?>

	
	</ul>
	</div>
</div>