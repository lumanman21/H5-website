<?php

if( !defined('WPJAM_BASIC_PLUGIN_FILE') ){
	//在后台文章列表增加一列数据
	add_filter( 'manage_posts_columns', 'xintheme_customer_posts_columns' );
	function xintheme_customer_posts_columns( $columns ) {
	$columns['views'] = '浏览次数';
	return $columns;
	}
	//输出浏览次数
	add_action('manage_posts_custom_column', 'xintheme_customer_columns_value', 10, 2);
	function xintheme_customer_columns_value($column, $post_id){
	if($column=='views'){
	$count = get_post_meta($post_id, 'views', true);
	if(!$count){
	$count = 0;
	}
	echo $count;
	}
	return;
	}
}
//自定义后台版权信息
add_filter('admin_footer_text', function  () {
	echo '';
});
//去掉后台Wordpress LOGO
function my_edit_toolbar($wp_toolbar) {
	$wp_toolbar->remove_node('wp-logo'); 
}
add_action('admin_bar_menu', 'my_edit_toolbar', 999);
//彻底关闭WordPress生成默认尺寸的缩略图
if( xintheme('xintheme_option_thumbnail') ) :
	add_filter('pre_option_thumbnail_size_w',	'__return_zero');
	add_filter('pre_option_thumbnail_size_h',	'__return_zero');
	add_filter('pre_option_medium_size_w',		'__return_zero');
	add_filter('pre_option_medium_size_h',		'__return_zero');
	add_filter('pre_option_large_size_w',		'__return_zero');
	add_filter('pre_option_large_size_h',		'__return_zero');
endif;
//WordPress替换登陆后跳转的后台默认首页
if( xintheme('xintheme_article') ) :
	function my_login_redirect($redirect_to, $request){
	if( empty( $redirect_to ) || $redirect_to == 'wp-admin/' || $redirect_to == admin_url() )
	return home_url("/wp-admin/edit.php");
	else
	return $redirect_to;
	}
	add_filter("login_redirect", "my_login_redirect", 10, 3);
endif;
//去json*
if( xintheme('xintheme_api') ) :
	add_filter('rest_enabled', '_return_false');
	add_filter('rest_jsonp_enabled', '_return_false');
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
	//禁用REST API、移除wp-json链接
	add_filter('rest_enabled', '_return_false');
	add_filter('rest_jsonp_enabled', '_return_false');
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
endif;
//彻底删除后台隐私相关设置
if( xintheme('xintheme_privacy') ) :
add_action('admin_menu', function (){

	global $menu, $submenu;

	unset($submenu['options-general.php'][45]);

	// Bookmark hooks.
	remove_action( 'admin_page_access_denied', 'wp_link_manager_disabled_message' );

	// Privacy tools
	remove_action( 'admin_menu', '_wp_privacy_hook_requests_page' );
	// Privacy hooks
	remove_filter( 'wp_privacy_personal_data_erasure_page', 'wp_privacy_process_personal_data_erasure_page', 10, 5 );
	remove_filter( 'wp_privacy_personal_data_export_page', 'wp_privacy_process_personal_data_export_page', 10, 7 );
	remove_filter( 'wp_privacy_personal_data_export_file', 'wp_privacy_generate_personal_data_export_file', 10 );
	remove_filter( 'wp_privacy_personal_data_erased', '_wp_privacy_send_erasure_fulfillment_notification', 10 );

	// Privacy policy text changes check.
	remove_action( 'admin_init', array( 'WP_Privacy_Policy_Content', 'text_change_check' ), 100 );

	// Show a "postbox" with the text suggestions for a privacy policy.
	remove_action( 'edit_form_after_title', array( 'WP_Privacy_Policy_Content', 'notice' ) );

	// Add the suggested policy text from WordPress.
	remove_action( 'admin_init', array( 'WP_Privacy_Policy_Content', 'add_suggested_content' ), 1 );

	// Update the cached policy info when the policy page is updated.
	remove_action( 'post_updated', array( 'WP_Privacy_Policy_Content', '_policy_page_updated' ) );
},9);
endif;
//禁用日志修订功能
if( xintheme('xintheme_revision') ) :
	add_action('wp_print_scripts',function() {wp_deregister_script('autosave');});
	define('WP_POST_REVISIONS', false);
	remove_action('pre_post_update', 'wp_save_post_revision' );
	// 自动保存设置为10个小时
	define('AUTOSAVE_INTERVAL', 36000 );
endif;
//删除文章时删除图片附件
if( xintheme('xintheme_delete_post_attachments') ) :
function xintheme_delete_post_and_attachments($post_ID) {
    global $wpdb;
    //删除特色图片
    $thumbnails = $wpdb->get_results( "SELECT * FROM $wpdb->postmeta WHERE meta_key = '_thumbnail_id' AND post_id = $post_ID" );
    foreach ( $thumbnails as $thumbnail ) {
    wp_delete_attachment( $thumbnail->meta_value, true );
    }
    //删除图片附件
    $attachments = $wpdb->get_results( "SELECT * FROM $wpdb->posts WHERE post_parent = $post_ID AND post_type = 'attachment'" );
    foreach ( $attachments as $attachment ) {
    wp_delete_attachment( $attachment->ID, true );
    }
    $wpdb->query( "DELETE FROM $wpdb->postmeta WHERE meta_key = '_thumbnail_id' AND post_id = $post_ID" );
}
add_action('before_delete_post', 'xintheme_delete_post_and_attachments');
endif;
//删除后台外观 编辑选项
function remove_submenu() {   
	// 删除"外观"下面的子菜单"编辑"   
	remove_submenu_page( 'themes.php', 'theme-editor.php' );   
}   

if ( is_admin() ) {   
add_action('admin_init','remove_submenu');   
}
function custom_menu_css() {  
    $custom_menu_css = '<style type="text/css">  
        #wp-admin-bar-custom_menu img { margin:0 0 -4px 0; } /** moves icon over */  
        #wp-admin-bar-custom_menu { width:75px; } /** sets width of custom menu */  
		#wp-admin-bar-custom_menu {width:92px;}
		.wp-first-item.wp-not-current-submenu.wp-menu-separator,.hide-if-no-customize{display: none;}
    </style>';  
    echo $custom_menu_css;  
}  
add_action( 'admin_head', 'custom_menu_css' );
//移除后台标题后缀 - WordPress
add_filter('admin_title', 'xintheme_custom_admin_title', 10, 2);
function xintheme_custom_admin_title($admin_title, $title){
	return $title.' &lsaquo; '.get_bloginfo('name');
}
//上传图片使用日期重命名
if( xintheme('xintheme_upload_img_rename') ) :
	function uazoh_wp_upload_filter($file){  
	$time=date("YmdHis");  
	$file['name'] = $time."".mt_rand(1,100).".".pathinfo($file['name'] , PATHINFO_EXTENSION);  
	return $file;  
	}  
	add_filter('wp_handle_upload_prefilter', 'uazoh_wp_upload_filter'); 
endif;

//禁用古腾堡编辑器
if( xintheme('xintheme_no_gutenberg') ) :
	add_filter('use_block_editor_for_post_type', '__return_false');
endif;