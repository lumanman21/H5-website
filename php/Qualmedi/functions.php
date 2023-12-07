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


//去除wordpress前台顶部工具条
show_admin_bar(false);


// 注册导航
register_nav_menus(
    array(
        'main' => __( '主菜单导航' ), 'language' => __( '语言导航' )
    )
);



// 调用指定id的图片
function wpimg($attachment_id) {
    $image_attributes = wp_get_attachment_image_src($attachment_id, 'full');
    $oss_image_url = $image_attributes[0];
    $oss_image_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);

    $image_data = 'src="' . $oss_image_url . '" alt="' . $oss_image_alt . '"';
    return $image_data;
}


// 调用特色图片 并判断没有自动获取文章第一张 支持外链缩略图
if(function_exists('add_theme_support'))
add_theme_support('post-thumbnails');
function get_post_image() {
    if ( has_post_thumbnail() ) {
        return get_the_post_thumbnail_url();
    } else {
        $content = get_the_content();
        $first_image = preg_match('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $content, $matches);
        return $matches[1];
    }
}
// 根据上方调用特色图片 进一步封装 获取图片alt 判断是否有图 并输出
function display_post_image() {
    $post_image_url = get_post_image();
    if ( !empty($post_image_url) ) {
        $post_image_id = attachment_url_to_postid($post_image_url);
        $post_image_alt = get_post_meta($post_image_id, '_wp_attachment_image_alt', true);
        if ( empty($post_image_alt) ) {
            $post_image_alt = get_the_title();
        }
        ?>
        <img src="<?php echo $post_image_url; ?>" alt="<?php echo $post_image_alt; ?>">
        <?php
    } else {
        ?>
        <img src="<?php echo get_template_directory_uri(); ?>/static/images/public/nopic.png" alt="<?php the_title_attribute(); ?>">
        <?php
    }
}
// 调用分类缩略图
function get_category_thumbnail($thumbnail_id, $thumbnail_alt) {
    $cat_thumbnail_info = wp_get_attachment_image_src($thumbnail_id, 'full');
    $cat_thumbnail_url = $cat_thumbnail_info[0];
    $cat_thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

    if (empty($cat_thumbnail_alt)) {
        $cat_thumbnail_alt = $thumbnail_alt;
    }

        $img_attributes = 'src="' . esc_attr($cat_thumbnail_url) . '" alt="' . esc_attr($cat_thumbnail_alt) . '"';
    return $img_attributes;
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





// 封装函数 调用文章自定义字段上传图片的链接
function get_extended_image($key) {
    $post_extend = get_post_meta(get_the_ID(), 'extend_info', true);
    $image_id = $post_extend[$key];
    $image_url = wp_get_attachment_image_src($image_id, 'full');
    return $image_url[0];
}





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
function filter_pre_get_posts( $query ){
	if ( $query->is_main_query() && !is_admin() ){
	  $num = '';
	  if ( is_search() ){ $num = -1; }
	  if ( is_tag() ){ $num = 12; }
	  if ( is_category() ){ $num = 2; }
	  if ( is_category(2) ){ $num = 8; }
	  if ( is_category(3) ){ $num = 4; }
	  if ( is_category(4) ){ $num = 6; }
	  if ( '' != $num ){ $query->set( 'posts_per_page', $num ); }
	}
	return $query;
  }
  add_action('pre_get_posts', 'filter_pre_get_posts');




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



// 获取分类下所有文章数量
function ludou_get_cat_postcount($id) {
	// 获取当前分类信息
	$cat= get_category($id);   // 当前分类文章数
	$count = (int) $cat->count;
	// 获取当前分类所有子孙分类
	$tax_terms = get_terms('category',array('child_of' => $id));

	foreach ($tax_terms as $tax_term) {
	// 子孙分类文章数累加
	$count +=$tax_term->count;
	}
	return $count;
}



// 当前位置 面包屑导航
function in_breadcrumbs(){
	global $wp_query;
	if (!is_home()) {
		echo '<a href="' . get_settings('home') . '">Home</a>';
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
	$query->set('cat',''); //分类的ID，前面加负号表示排除；如果直接写ID，则表示只在该ID中搜索
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
    remove_submenu_page( 'themes.php','widgets.php' );//移除外观-小工具
    remove_submenu_page( 'themes.php','themes.php' );//移除外观-主题
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
        $wp_toolbar->remove_node('view-site'); //去掉查看站点
        $wp_toolbar->remove_node('updates'); //去掉更新提醒
        $wp_toolbar->remove_node('comments'); //去掉评论提醒
        $wp_toolbar->remove_node('new-content'); //去掉新建文件
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

function custom_loginlogo_url($url) {
return 'https://www.ljglobal.cn';
}
add_filter( 'login_headerurl', 'custom_loginlogo_url' );

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
        #menu-settings .wp-submenu li:nth-last-child(1) {
        display: none;
        };
    </style>';

}
add_action('admin_head', 'admin_mycss');

//支持外链缩略图
if ( function_exists('add_theme_support') )
 add_theme_support('post-thumbnails'); // 若有错误删掉上面两行
function catch_first_image() 
{
  global $post, $posts;$first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
  //判断图片是否过小
  if(!empty($first_img))
  {
    $image_size = getimagesize($first_img);
    $image_width = $image_size[0];
  }
  //如果第一张图不存在或过小，则返回随机图片.如果不需要默认第一张图的话把上面的代码以及if都去掉即可
  if(empty($first_img) || $image_width<50){
    $first_img = '';
    //从图片目录中随机选择，可根据自己的图片数量设置
    $random = mt_rand(1,12);//设置可选取的图片数量和总量，这里指的是每次从12张图片当中选择一张做为文章列表缩略图。
    echo get_bloginfo ( 'stylesheet_directory' );
    echo '/assets/img/random/'.$random.'.jpg';
    }
  return $first_img;
}

if ( !function_exists('fb_AddThumbColumn') && function_exists('add_theme_support') ) {

// 在文章列表页与页面列表页添加缩略图列表
add_theme_support('post-thumbnails', array( 'post', 'page' ) );

function fb_AddThumbColumn($cols) {

$cols['thumbnail'] = __('Thumbnail');

return $cols;
}

function fb_AddThumbValue($column_name, $post_id) {

$width = (int) 100;
$height = (int) 100;

if ( 'thumbnail' == $column_name ) {
// thumbnail of WP 2.9
$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
// image from gallery
$attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
if ($thumbnail_id)
$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
elseif ($attachments) {
    $post_meta = get_post_meta($post_id, 'extend_info', true);
    $produc_img =  $post_meta['produc_img'];
    $produc_img = explode( ',', $post_meta['produc_img'] );
    $produc_img_src = wp_get_attachment_image_src( $produc_img[0], 'full' );
    $thumb = '<img src='.$produc_img_src[0].' width='.$width.'  height='.$height.'>';
}
if ( isset($thumb) && $thumb ) {
echo $thumb;
} else {
echo __('None');
}
}
}

// 文章页调用
add_filter( 'manage_posts_columns', 'fb_AddThumbColumn' );
add_action( 'manage_posts_custom_column', 'fb_AddThumbValue', 10, 2 );

// 页面调用
add_filter( 'manage_pages_columns', 'fb_AddThumbColumn' );
add_action( 'manage_pages_custom_column', 'fb_AddThumbValue', 10, 2 );
}