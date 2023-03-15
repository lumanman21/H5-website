<?php

define('THEME_DIR',	get_template_directory_uri());
include_once TEMPLATEPATH.'/admin/cs-framework/cs-framework.php';
include_once TEMPLATEPATH.'/public/ljtheme-seo.php';

if( xintheme('xintheme_simple_urls') ) :
	include_once TEMPLATEPATH.'/admin/simple-urls/simple-urls.php';
endif;
if( xintheme('xintheme_wp-clean-up') ) :
	include_once TEMPLATEPATH.'/admin/wp-clean-up/wp-clean-up.php';
endif;
if( xintheme('xintheme_sitemap') ) :
	include_once TEMPLATEPATH.'/admin/Sitemap/sitemap.php';
endif;

//添加自定义编辑器
include_once("meta_boxe_wright.php");

//去除wordpress前台顶部工具条
show_admin_bar(false);


// 注册导航
register_nav_menus(
    array(
        'main' => __( '主菜单导航' ), 'language' => __( '语言导航' )
    )
);



// 调用特色图片 并判断没有自动获取文章第一张 支持外链缩略图
if(function_exists('add_theme_support'))
add_theme_support('post-thumbnails');
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	if(empty($first_img)){ //Defines a default image
		$first_img = bloginfo('template_url'). '/images/default-thumb.jpg';
	}
	return $first_img;
}



add_filter( 'pre_option_link_manager_enabled', '__return_true' );

function xintheme_img ($id,$default){
    $cs_id= xintheme($id);
    if (!empty($cs_id )){
        $id_url= wp_get_attachment_image_src( $cs_id, 'full' );
        return $id_url[0];
    }
    elseif (empty($cs_id )){
        return $default;
    }
};



// 分页
function zdy_paging() {
    $p = 2;
    if ( is_singular() ) return;
    global $wp_query, $paged;
    $max_page = $wp_query->max_num_pages;
    if ( $max_page == 1 ) return;
    //echo '<div class="pagination"><ul>';
    if ( empty( $paged ) ) $paged = 1;
    // echo '<span class="pages">Page: ' . $paged . ' of ' . $max_page . ' </span> ';
    if ( $paged > 1 ) p_link( 1, 'First' );

    // echo '<li class="prev_page">';
    // previous_posts_link('Prev');
    // echo '</li>';

    //if ( $paged > $p + 1 ) p_link( 1 );
    //if ( $paged > $p + 2 ) echo "<li><span>···</span></li>";
    for ( $i = $paged - $p; $i <= $paged + $p; $i++ ) {
        if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<li class=\"active_page\"><span>{$i}</span></li>" : p_link( $i );
    }
    //if ( $paged < $max_page - $p - 1 ) echo "<li><span> ... </span></li>";
    //if ( $paged < $max_page - $p ) p_link( $max_page);

    // echo '<li class="next_page">';
    // next_posts_link('Next');
    // echo '</li>';

    if ( $paged < $max_page ) p_link( $max_page, 'End' );

    echo '<i>'.$max_page.' pages in total</i>';
    //echo '</ul></div>';
}
function p_link( $i, $title = '' ) {
    if ( $title == '' ) $title = "{$i}";
    echo "<li><a href='", esc_html( get_pagenum_link( $i ) ), "'>{$title}</a></li>";
}
function p_curr_link( $i) {
    echo '<li><span class="page-numbers current">'.$i.'</span></li>';
}



// 不同分类显示不同文章个数
function custom_posts_per_page($query){
	if(is_search()){
		$query->set('posts_per_page',-1);//搜索页显示所有匹配的文章，不分页
	}
	if(is_category()){
		$query->set('posts_per_page',12);
	}
	if(is_category(array(3))){
		$query->set('posts_per_page',6);
	}
}
add_action('pre_get_posts','custom_posts_per_page');




// 获取顶级分类名称
function salong_category_top_parent_id ($current_cat_ID) {
    while ($current_cat_ID) {
        $cat = get_category($current_cat_ID); // get the object for the catid
        $current_cat_ID = $cat->category_parent; // assign parent ID (if exists) to $current_cat_ID
        // the while loop will continue whilst there is a $current_cat_ID
        // when there is no longer a parent $current_cat_ID will be NULL so we can assign our $catParent
        $catParent = $cat->cat_name;
    }
    return $catParent;
};


// 获取上级分类名称
function tx_wp_get_category_root_id($cat)
{
    $this_category = get_category($cat);//获取当前分类的对象
    //循环往上获得获得父级分类id
        $this_category = get_category($this_category->category_parent);
    return $this_category->term_id;
};



// 当前位置 面包屑导航
function in_breadcrumbs(){
	global $wp_query;
	if (!is_home()) {
		echo '<a href="' . get_settings('home') . '">HOME</a>';
		if (is_category()) {
			$cat_ID = get_query_var('cat');
			echo get_category_parents($cat_ID, TRUE, "");
		} elseif (is_single()) {
			$category = get_the_category();
			$category_id = $category[0]->term_id;
			echo get_category_parents($category_id, TRUE, "").'<a href='.get_permalink().'>';
			echo the_title().'</a>';
		} elseif (is_search()) {
			echo '<a>Search results（A total of ' . $wp_query->found_posts . ' articles were found）</a>';
		} elseif (is_404()) {
			echo '<a>';
			echo "404 Not Found";
			echo '</a>';
		} else {
			echo '<a href='.get_permalink().'>';
			echo the_title();
			echo '</a>';
		}
	}
};


// 搜索指定分类
function Bing_search_filter_category( $query) {
	if ( !$query->is_admin && $query->is_search) {
	$query->set('cat','-44,-39'); //分类的ID，前面加负号表示排除；如果直接写ID，则表示只在该ID中搜索
	}
	return $query;
}
add_filter('pre_get_posts','Bing_search_filter_category');


add_filter('register_post_type_args', function($args, $post_type){
	if($post_type == 'page'){
		$args['exclude_from_search'] = true;
	}
	return $args;
}, 10, 2);




// 自定义模块
function new_meta_boxes() {
global $post, $new_meta_boxes;

foreach($new_meta_boxes as $meta_box) {
$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);

if($meta_box_value == "")
$meta_box_value = $meta_box['std'];

echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';

// 自定义字段标题
echo'<h4>'.$meta_box['title'].'</h4>';

wp_editor( $meta_box_value, $meta_box['name'].'_value' );

}

}

function create_meta_box() {
global $theme_name;

if ( function_exists('add_meta_box') ) {
add_meta_box( 'new-meta-boxes', '自定义模块', 'new_meta_boxes', 'post', 'normal', 'high' );
}
}

function save_postdata( $post_id ) {
global $post, $new_meta_boxes;

foreach($new_meta_boxes as $meta_box) {
if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
return $post_id;
}

if ( 'page' == $_POST['post_type'] ) {
if ( !current_user_can( 'edit_page', $post_id ))
return $post_id;
}
else {
if ( !current_user_can( 'edit_post', $post_id ))
return $post_id;
}

$data = $_POST[$meta_box['name'].'_value'];

if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
update_post_meta($post_id, $meta_box['name'].'_value', $data);
elseif($data == "")
delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
}
}add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');




/* 后台显示id */
// Prepend the new column to the columns array
function ssid_column($cols) {
	$cols['ssid'] = 'ID';
	return $cols;
}
// Echo the ID for the new column
function ssid_value($column_name, $id) {
	if ($column_name == 'ssid')
		echo $id;
}
function ssid_return_value($value, $column_name, $id) {
	if ($column_name == 'ssid')
		$value = $id;
	return $value;
}
// Output CSS for width of new column
function ssid_css() {
?>
<style type="text/css">
	#ssid {width:50px}
</style>
<?php
}
// Actions/Filters for various tables and the css output
function ssid_add() {
	add_action('admin_head', 'ssid_css');
	add_filter('manage_posts_columns', 'ssid_column');
	add_action('manage_posts_custom_column', 'ssid_value', 10, 2);
	add_filter('manage_pages_columns', 'ssid_column');
	add_action('manage_pages_custom_column', 'ssid_value', 10, 2);
	add_filter('manage_media_columns', 'ssid_column');
	add_action('manage_media_custom_column', 'ssid_value', 10, 2);
	add_filter('manage_link-manager_columns', 'ssid_column');
	add_action('manage_link_custom_column', 'ssid_value', 10, 2);
	add_action('manage_edit-link-categories_columns', 'ssid_column');
	add_filter('manage_link_categories_custom_column', 'ssid_return_value', 10, 3);
	foreach ( get_taxonomies() as $taxonomy ) {
		add_action("manage_edit-${taxonomy}_columns", 'ssid_column');
		add_filter("manage_${taxonomy}_custom_column", 'ssid_return_value', 10, 3);
	}
	add_action('manage_users_columns', 'ssid_column');
	add_filter('manage_users_custom_column', 'ssid_return_value', 10, 3);
	add_action('manage_edit-comments_columns', 'ssid_column');
	add_action('manage_comments_custom_column', 'ssid_value', 10, 2);
}
add_action('admin_init', 'ssid_add');
