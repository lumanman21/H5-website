<?php
$category_data = get_term_meta( $cat, 'category_options', true );
$category_type = isset($category_data['cat_layout']) ?$category_data['cat_layout'] : '';
get_header();
if($category_type == 'grid'){
	get_template_part( 'archive/grid' );
}else{
	get_template_part( 'archive/news' );
}
get_footer();?>