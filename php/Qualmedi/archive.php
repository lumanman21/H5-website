<?php
$category_data = get_term_meta( $cat, 'category_options', true );
$category_type = isset($category_data['cat_layout']) ?$category_data['cat_layout'] : '';
get_header();
if($category_type == 'grid'){
	get_template_part( 'archive/grid' );
}else if($category_type === 'news'){
	get_template_part( 'archive/news' );
}else if($category_type === 'case'){
	get_template_part( 'archive/case' );
}else{
	get_template_part( 'archive/grid' );
}
get_footer();?>