<?php 
$category_data = get_term_meta( $cat, 'category_options', true );
$category_type = isset($category_data['cat_layout']) ?$category_data['cat_layout'] : '';
get_header();
if($category_type == 'grid'){
	get_template_part( 'archive/grid' );
}elseif($category_type == 'news'){
	get_template_part( 'archive/news' );
}elseif($category_type == 'download'){
	get_template_part( 'archive/download' );
}elseif($category_type == 'support'){
	get_template_part( 'archive/support' );
}
get_footer();?>