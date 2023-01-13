<?php

define('THEME_DIR',	get_template_directory_uri());
include_once TEMPLATEPATH.'/admin/cs-framework/cs-framework.php';
include_once TEMPLATEPATH.'/public/zing-functions.php';
include_once TEMPLATEPATH.'/public/widget.php';
include_once TEMPLATEPATH.'/public/xintheme-seo.php';
include_once TEMPLATEPATH.'/public/comment.php';
include_once TEMPLATEPATH.'/admin/admin.php';
include_once("meta_boxe_wright.php");
if( xintheme('xintheme_simple_urls') ) :
	include_once TEMPLATEPATH.'/admin/simple-urls/simple-urls.php';
endif;
if( xintheme('xintheme_wp-clean-up') ) :
	include_once TEMPLATEPATH.'/admin/wp-clean-up/wp-clean-up.php';
endif;
if( xintheme('xintheme_sitemap') ) :
	include_once TEMPLATEPATH.'/admin/Sitemap/sitemap.php';
endif;


// 注册导航
register_nav_menus(array('language' => '语言导航'));
register_nav_menus(
    array(
        'main' => __( '主菜单导航' ), 'products_nav' => __( '产品分类导航' )
    )
);
// 分页
function page_pagenavi($range = 9){
	global $paged, $wp_query;
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
	if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend'> First </a>";}
	previous_posts_link(' Prev ');
if($max_page > $range){
			if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
			if($i==$paged)echo " class='current'";echo ">$i</a>";}}
elseif($paged >= ($max_page - ceil(($range/2)))){
			for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
			if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
			for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	next_posts_link(' Next ');
if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend'> End </a>";}}}



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
	$query->set('cat','5'); //分类的ID，前面加负号表示排除；如果直接写ID，则表示只在该ID中搜索
	}
	return $query;
	}
	add_filter('pre_get_posts','Bing_search_filter_category');







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
	add_meta_box( 'new-meta-boxes', '产品自定义模块', 'new_meta_boxes', 'post', 'normal', 'high' );
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
	

/**
 * 隐藏核心更新提示 WP 3.0+
 * 来自 https://wordpress.org/plugins/disable-wordpress-core-update/
 */

//修改后台显示更新的代码
add_filter('pre_site_transient_update_core', create_function('$a', "return null;"));//关闭核心提示
add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));//关闭插件提示
add_filter('pre_site_transient_update_themes', create_function('$a', "return null;"));//关闭主题提示
remove_action('admin_init', '_maybe_update_core'); //禁止 WordPress 检查更新
remove_action('admin_init', '_maybe_update_plugins'); //禁止 WordPress 更新插件
remove_action('admin_init', '_maybe_update_themes'); //禁止 WordPress 更新主题

add_filter('plupload_default_settings', function($defaults) {
    $defaults['webp_upload_error'] = false;
    return $defaults;
}, 10, 1);

add_filter('plupload_init', function($plupload_init) {
    $plupload_init['webp_upload_error'] = false;
    return $plupload_init;
}, 10, 1);

//Remove dashboard widgets
function remove_dashboard_widgets(){
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);//快速草稿
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

function remove_menus() {
    remove_submenu_page( 'index.php','update-core.php' );//移除仪表盘中更新
    remove_submenu_page( 'plugins.php','plugin-editor.php' );//移除插件中插件编辑
    remove_submenu_page( 'options-general.php','options-discussion.php' );//移除设置中讨论
    remove_submenu_page( 'options-general.php','options-media.php' );//移除设置中媒体
    remove_submenu_page( 'options-general.php','options-privacy.php' );//移除设置中隐私
    remove_menu_page( 'edit-comments.php' );//移除评论
    remove_menu_page( 'tools.php' );//移除工具
    remove_menu_page( 'link-manager.php' );//移除链接
    remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );//移除文章目录中的标签页面
}
add_action('admin_menu', 'remove_menus');


remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
add_filter( 'emoji_svg_url', '__return_false' );

add_action('admin_bar_menu',
    function($wp_toolbar){
        $wp_toolbar->remove_node('wp-logo'); //去掉Wordpress LOGO
        // $wp_toolbar->remove_node('site-name'); //去掉网站名称
        $wp_toolbar->remove_node('view-site'); //去掉查看站点
        $wp_toolbar->remove_node('updates'); //去掉更新提醒
        $wp_toolbar->remove_node('comments'); //去掉评论提醒
        $wp_toolbar->remove_node('new-content'); //去掉新建文件
        //$wp_toolbar->remove_node('top-secondary'); //用户信息
        $wp_toolbar->remove_node('trp_edit_translation');//去掉翻译提醒
    },999,2
);

function remove_dashboard_siteHealth() {
    remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );
}
add_action('wp_dashboard_setup', 'remove_dashboard_siteHealth' );


function remove_welcome_panel(){
	remove_action('welcome_panel', 'wp_welcome_panel');
}
add_action( 'load-index.php', 'remove_welcome_panel' );

//隐藏管理后台帮助按钮和版本更新提示
function hide_help() {
	echo'<style type="text/css">#contextual-help-link-wrap { display: none !important; } .update-nag{ display: none !important; } #footer-left, #footer-upgrade{ display: none !important; }#wp-admin-bar-wp-logo{display: none !important;}.default-header img{width:400px;}</style>';
}
add_action('admin_head', 'hide_help');


function custom_loginlogo() {
echo '<style type="text/css">
h1 a {background-image: url('.get_bloginfo('template_directory').'/static/images/admin/wordpress-logo.svg?ver=20131107) !important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');


function footerText () {
    return '';
}
add_filter('admin_footer_text', 'footerText', 9999);

//刪除控制台右下角的Wordpress 版本編號文字

function change_update_link() {
	return '';
}	
add_filter( 'update_footer', 'change_update_link', 9999);

function admin_mycss() {
    echo'<style type="text/css">
        #menu-settings .wp-submenu li:nth-last-child(2) {
        display: none;
        };
    </style>';

}
add_action('admin_head', 'admin_mycss');


