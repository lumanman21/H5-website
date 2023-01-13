<?php 
$category_data = get_term_meta( $cat, 'category_options', true );
$category_type = isset($category_data['cat_layout']) ?$category_data['cat_layout'] : '';
get_header();
if($category_type == 'grid'){
	get_template_part( 'archive/grid' );
}elseif($category_type == 'news'){
	get_template_part( 'archive/news' );
}elseif($category_type == 'project'){
	get_template_part( 'archive/project' );
}elseif($category_type == 'solution'){
	get_template_part( 'archive/solution' );
}
get_footer();?>