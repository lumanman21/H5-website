<?php

//禁止加载默认JQ
if ( !is_admin() ) { // 后台不禁止
    function xintheme_init_method() {
		wp_deregister_script( 'jquery' ); // 取消原有的 jquery 定义
    }
    add_action('init', 'xintheme_init_method');
}
wp_deregister_script( 'l10n' );

//载入JS\CSS
if ( ! function_exists( 'xintheme_scripts_method' ) ) {
    function xintheme_scripts_method() {
        
        //载入css
		wp_enqueue_style( 'style', get_bloginfo( 'stylesheet_url' ), array(), '1.0' );
		if( xintheme('data_animate') ){
			wp_enqueue_style( 'animate', get_template_directory_uri().'/static/css/animate.min.css', array(), '' );
		}
      	wp_enqueue_style( 'iconfont', get_template_directory_uri().'/static/font/iconfont.css', array(), '' );
      	wp_enqueue_style( 'line-awesome', get_template_directory_uri().'/static/line-awesome/css/line-awesome.min.css', array(), '' );

        //载入js
        wp_enqueue_script('jquery', get_template_directory_uri() . '/static/js/jquery-1.7.2.min.js', array(),false);
		/* wp_enqueue_script('script', get_template_directory_uri() . '/static/js/script.min.js', array('jquery'),false, true);
		wp_enqueue_script('xintheme', get_template_directory_uri() . '/static/js/xintheme.js', array(),false, true);
		wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() . '/static/js/theia-sticky-sidebar.js', array(),false, true);
		if( xintheme('data_animate') ){
			wp_enqueue_script('animate', get_template_directory_uri() . '/static/js/animate.min.js', array(),false);
			wp_localize_script('animate', 'xintheme', ['data_animate'=>'true']);
		}else{
			wp_localize_script('xintheme', 'xintheme', ['data_animate'=>'false']);
		}
		
		if (is_singular() && comments_open() && get_option('thread_comments')){
			wp_enqueue_script( 'comment-reply' );
		}
		wp_enqueue_script('carousel', get_template_directory_uri() . '/static/js/owl.carousel.min.js', array(),false, true); */
		
     }
}
add_action('wp_enqueue_scripts', 'xintheme_scripts_method');

//自定义配色 css
function xintheme_color_css() {
    echo "<style>
    .header-v4 .main-nav .sf-menu .current-menu-item a,.header-v4 .main-nav .sf-menu li a:hover,.header-v4 .main-nav .sf-menu .current-post-ancestor a {color: ".xintheme('menu_current_color')."}
    .header-v4 .main-nav .sf-menu a{color: ".xintheme('menu_color')."}
    </style>"; 
	if( xintheme('data_animate') ){
		echo '<style>.not-animated {opacity:0}</style>';
	}
	if( xintheme('xintheme_post_indent') ){
		echo '<style>#wzzt p {text-indent: 2em}</style>';
	}
}
add_action('wp_head', 'xintheme_color_css');

//判断是否开启模块加载动画
function data_animate(){
	if( xintheme('data_animate') ){
		return ' data-animate="fadeInUp" data-delay="200"';
	}
}

//直接去掉函数 comment_class() 和 body_class() 中输出的 "comment-author-" 和 "author-"
//避免 WordPress 登录用户名被暴露 
function xintheme_comment_body_class($content){
    $pattern = "/(.*?)([^>]*)author-([^>]*)(.*?)/i";
    $replacement = '$1$4';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}
add_filter('comment_class', 'xintheme_comment_body_class');
add_filter('body_class', 'xintheme_comment_body_class');

//删除wordpress默认相册样式
add_filter( 'use_default_gallery_style', '__return_false' );

/* 评论作者链接新窗口打开 */
add_filter('get_comment_author_link', function () {
	$url	= get_comment_author_url();
	$author = get_comment_author();
	if ( empty( $url ) || 'http://' == $url ){
		return $author;
	}else{
		return "<a target='_blank' href='$url' rel='external nofollow' class='url'>$author</a>";
	}
});

//去除加载的css和js后面的版本号
if( xintheme('xintheme_remove_script_version') ){
	function _remove_script_version( $src ){
		$parts = explode( '?', $src );
		return $parts[0];
	}
	add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
	add_filter( 'pre_option_link_manager_enabled', '__return_true' );
}

//搜索结果排除所有页面
function search_filter_page($query) {
    if ($query->is_search && !$query->is_admin) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts', 'search_filter_page');

/* 搜索关键词为空 */
add_filter( 'request', function ( $query_variables ) {
	if (isset($_GET['s']) && !is_admin()) {
		if (empty($_GET['s']) || ctype_space($_GET['s'])) {
			wp_redirect( home_url() );
			exit;
		}
	}
	return $query_variables;
} );
/**
 * WordPress 关闭 XML-RPC 的 pingback 端口
 */
if( xintheme('xintheme_pingback') ) :
add_filter( 'xmlrpc_methods', 'remove_xmlrpc_pingback_ping' );
function remove_xmlrpc_pingback_ping( $methods ) {
	unset( $methods['pingback.ping'] );
	return $methods;
}
endif;
//禁止头部加载s.w.org
add_filter( 'wp_resource_hints', function ( $hints, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		return array_diff( wp_dependencies_unique_hosts(), $hints );
	}
	return $hints;
}, 10, 2 );

//移除头部emoji.js加载
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//给文章图片自动添加alt和title信息
add_filter('the_content', function ($content) {
	global $post;
	$pattern		= "/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
	$replacement	= '<a$1href=$2$3.$4$5 alt="'.$post->post_title.'" title="'.$post->post_title.'"$6>';
	$content = preg_replace($pattern, $replacement, $content);
	return $content;
});

//修复 WordPress 找回密码提示“抱歉，该key似乎无效”
add_filter('retrieve_password_message', function ( $message, $key ) {
	if ( strpos($_POST['user_login'], '@') ) {
		$user_data = get_user_by('email', trim($_POST['user_login']));
	} else {
		$login = trim($_POST['user_login']);
		$user_data = get_user_by('login', $login);
	}
	
	$user_login = $user_data->user_login;
	$msg	= __('有人要求重设如下帐号的密码：'). "\r\n\r\n";
	$msg	.= network_site_url() . "\r\n\r\n";
	$msg	.= sprintf(__('用户名：%s'), $user_login) . "\r\n\r\n";
	$msg	.= __('若这不是您本人要求的，请忽略本邮件，一切如常。') . "\r\n\r\n";
	$msg	.= __('要重置您的密码，请打开下面的链接：'). "\r\n\r\n";
	$msg	.= network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login') ;

	return $msg;
}, null, 2);
//缩略图
function post_thumbnail($width=400, $height=200, $echo=1){

    $default_timthumb	= xintheme('timthumb');

    $timthumb_gallery	= explode( ',', $default_timthumb );
    $timthumb_num = count($timthumb_gallery)-1;

	$random				= mt_rand(0, $timthumb_num);
	$timthumb			= wp_get_attachment_image_src($timthumb_gallery[$random],'full')[0];
	
	$thumbnail = xintheme('thumbnail');
	
	$cdn_type = xintheme('cdn_type');
	$cdn_switch = xintheme('cdn_switch');
	global $post;
	$title = $post->post_title;
	$dir = get_bloginfo('template_directory');
	$post_img = '';
	if( has_post_thumbnail() ){
        $timthumb_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
		$src = $timthumb_src[0];
		if( $cdn_switch ){
			if( $cdn_type == 'qiniu' ){
				$post_img_src = "$src?imageView2/1/w/$width/h/$height/q/100";
			}elseif( $cdn_type == 'alioss' ){
				$post_img_src = "$src?x-oss-process=image/resize,m_fill,w_$width,h_$height";
			}
		}else{
			if ($thumbnail == 'timthumb') {
				$post_img_src = "$dir/timthumb.php&#63;src=$src&#38;w=$width&#38;h=$height&#38;zc=1&#38;q=100";
			} else {
				$post_img_src = "$src";
			}
		}
	}else{
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches ,PREG_SET_ORDER);
		$cnt = count( $matches );
		if($cnt>0){
			$src = $matches[0][1];
		}else{ // thumb
			
			$src = $timthumb;
		}
		if( $cdn_switch ){
			if( $cdn_type == 'qiniu' ){
				$post_img_src = "$src?imageView2/1/w/$width/h/$height/q/100";
			}elseif( $cdn_type == 'alioss' ){
				$post_img_src = "$src?x-oss-process=image/resize,m_fill,w_$width,h_$height";
			}
		}else{
			if ($thumbnail == 'timthumb') {
				$post_img_src = "$dir/timthumb.php&#63;src=$src&#38;w=$width&#38;h=$height&#38;zc=1&#38;q=100";
			} else {
				$post_img_src = "$src";
			}
		}
	}
	$post_img =$post_img_src;
	return $post_img;
	
}

//文章摘要
add_filter('the_excerpt',function($post_excerpt){
	global $post;
	$meta_data = get_post_meta(get_the_ID(), 'extend_info', true); 
	$post_abstract = isset($meta_data['post_abstract']) ?$meta_data['post_abstract'] : '';
	if(!empty($post_abstract)){
		return mb_strimwidth($post_abstract, 0, 120, '...');
	}else{
		return mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 120,"...");
	}
});

//文章浏览量统计
function record_visitors(){
    if (is_singular()) {global $post;
     $post_ID = $post->ID;
      if($post_ID) 
      {
          $post_views = (int)get_post_meta($post_ID, 'views', true);
          if(!update_post_meta($post_ID, 'views', ($post_views+1))) 
          {
            add_post_meta($post_ID, 'views', 1, true);
          }
      }
    }
}
add_action('wp_head', 'record_visitors');  

function post_views($before = '(点击 ', $after = ' 次)', $echo = 1)
{
  global $post;
  $post_ID = $post->ID;
  $views = (int)get_post_meta($post_ID, 'views', true);
  if ($echo) echo $before, number_format($views), $after;
  else return $views;
};
//使用v2ex镜像avatar头像
if( xintheme('xintheme_v2ex') ) :
	add_filter( 'get_avatar', function ($avatar) {
		return str_replace(['cn.gravatar.com/avatar', 'secure.gravatar.com/avatar', '0.gravatar.com/avatar', '1.gravatar.com/avatar', '2.gravatar.com/avatar'], 'cdn.v2ex.com/gravatar', $avatar);
	}, 10, 3 );
endif;
//去除分类标志代码
if( xintheme('xintheme_category') ) :
add_action( 'load-themes.php',  'no_category_base_refresh_rules');
add_action('created_category', 'no_category_base_refresh_rules');
add_action('edited_category', 'no_category_base_refresh_rules');
add_action('delete_category', 'no_category_base_refresh_rules');
function no_category_base_refresh_rules() {
	global $wp_rewrite;
	$wp_rewrite -> flush_rules();
}

// register_deactivation_hook(__FILE__, 'no_category_base_deactivate');
// function no_category_base_deactivate() {
// 	remove_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
// 	// We don't want to insert our custom rules again
// 	no_category_base_refresh_rules();
// }

// Remove category base
add_action('init', 'no_category_base_permastruct');
function no_category_base_permastruct() {
	global $wp_rewrite, $wp_version;
	if (version_compare($wp_version, '3.4', '<')) {
		// For pre-3.4 support
		$wp_rewrite -> extra_permastructs['category'][0] = '%category%';
	} else {
		$wp_rewrite -> extra_permastructs['category']['struct'] = '%category%';
	}
}

// Add our custom category rewrite rules
add_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
function no_category_base_rewrite_rules($category_rewrite) {
	//var_dump($category_rewrite); // For Debugging

	$category_rewrite = array();
	$categories = get_categories(array('hide_empty' => false));
	foreach ($categories as $category) {
		$category_nicename = $category -> slug;
		if ($category -> parent == $category -> cat_ID)// recursive recursion
			$category -> parent = 0;
		elseif ($category -> parent != 0)
			$category_nicename = get_category_parents($category -> parent, false, '/', true) . $category_nicename;
		$category_rewrite['(' . $category_nicename . ')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
		$category_rewrite['(' . $category_nicename . ')/page/?([0-9]{1,})/?$'] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
		$category_rewrite['(' . $category_nicename . ')/?$'] = 'index.php?category_name=$matches[1]';
	}
	// Redirect support from Old Category Base
	global $wp_rewrite;
	$old_category_base = get_option('category_base') ? get_option('category_base') : 'category';
	$old_category_base = trim($old_category_base, '/');
	$category_rewrite[$old_category_base . '/(.*)$'] = 'index.php?category_redirect=$matches[1]';

	//var_dump($category_rewrite); // For Debugging
	return $category_rewrite;
}


// Add 'category_redirect' query variable
add_filter('query_vars', 'no_category_base_query_vars');
function no_category_base_query_vars($public_query_vars) {
	$public_query_vars[] = 'category_redirect';
	return $public_query_vars;
}

// Redirect if 'category_redirect' is set
add_filter('request', 'no_category_base_request');
function no_category_base_request($query_vars) {
	//print_r($query_vars); // For Debugging
	if (isset($query_vars['category_redirect'])) {
		$catlink = trailingslashit(get_option('home')) . user_trailingslashit($query_vars['category_redirect'], 'category');
		status_header(301);
		header("Location: $catlink");
		exit();
	}
	return $query_vars;
}
endif;
//去除wordpress前台顶部工具条
show_admin_bar(false);
//移除顶部多余信息
if( xintheme('xintheme_wp_head') ) :
	remove_action( 'wp_head', 'feed_links', 2 ); //移除feed
	remove_action( 'wp_head', 'feed_links_extra', 3 ); //移除feed
	remove_action( 'wp_head', 'rsd_link' ); //移除离线编辑器开放接口
	remove_action( 'wp_head', 'wlwmanifest_link' );  //移除离线编辑器开放接口
	remove_action( 'wp_head', 'index_rel_link' );//去除本页唯一链接信息
	remove_action('wp_head', 'parent_post_rel_link', 10, 0 );//清除前后文信息
	remove_action('wp_head', 'start_post_rel_link', 10, 0 );//清除前后文信息
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'locale_stylesheet' );
	remove_action('publish_future_post','check_and_publish_future_post',10, 1 );
	remove_action( 'wp_head', 'noindex', 1 );
	remove_action( 'wp_head', 'wp_generator' ); //移除WordPress版本
	remove_action( 'wp_head', 'rel_canonical' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	remove_action( 'template_redirect', 'wp_shortlink_header', 11, 0 );
endif;
//禁止FEED
if( xintheme('xintheme_feed') ) :
	function digwp_disable_feed() {
	wp_die(__('<h1>Feed已经关闭, 请访问网站<a href="'.get_bloginfo('url').'">首页</a>!</h1>'));
	}
	add_action('do_feed', 'digwp_disable_feed', 1);
	add_action('do_feed_rdf', 'digwp_disable_feed', 1);
	add_action('do_feed_rss', 'digwp_disable_feed', 1);
	add_action('do_feed_rss2', 'digwp_disable_feed', 1);
	add_action('do_feed_atom', 'digwp_disable_feed', 1);
endif;
//禁止前台加载语言包
if( xintheme('xintheme_language') ) :
	add_filter( 'locale', 'xintheme_language' );
	function xintheme_language($locale) {
		$locale = ( is_admin() ) ? $locale : 'en_US';
		return $locale;
	}
endif;
//CDN加速储存
if (!is_admin() && xintheme('cdn_switch')) {
    add_action('wp_loaded', 'xintheme_ob_start');
    function xintheme_ob_start() {
        ob_start('xintheme_cdn_replace');
    }
    function xintheme_cdn_replace($html) {
        $local_host = home_url(); //博客域名
        $cdn_host = xintheme('cdn_url'); //CDN域名
        $cdn_exts = xintheme('cdn_file_format'); //扩展名（使用|分隔）
        $cdn_dirs = xintheme('cdn_mirror_folder'); //目录（使用|分隔）
        $cdn_dirs = str_replace('-', '\-', $cdn_dirs);
        if ($cdn_dirs) {
            $regex = '/' . str_replace('/', '\/', $local_host) . '\/((' . $cdn_dirs . ')\/[^\s\?\\\'\"\;\>\<]{1,}.(' . $cdn_exts . '))([\"\\\'\s\?]{1})/';
            $html = preg_replace($regex, $cdn_host . '/$1$4', $html);
        } else {
            $regex = '/' . str_replace('/', '\/', $local_host) . '\/([^\s\?\\\'\"\;\>\<]{1,}.(' . $cdn_exts . '))([\"\\\'\s\?]{1})/';
            $html = preg_replace($regex, $cdn_host . '/$1$3', $html);
        }
        return $html;
    }
}
//自动替换媒体库图片的域名
if (is_admin() && xintheme('cdn_url') && xintheme('admin_cdn')) {
    function xintheme_attachment_replace($text) {
        $replace = array(
            '' . home_url() . '' => '' . xintheme('cdn_url') . ''
        );
        $text = str_replace(array_keys($replace) , $replace, $text);
        return $text;
    }
    add_filter('wp_get_attachment_url', 'xintheme_attachment_replace');
}
//SMTP邮箱设置
if (xintheme('xintheme_smtp_switcher')) {
    function xintheme_mail_smtp($phpmailer) {
        $phpmailer->From = xintheme('xintheme_email'); //发件人地址
        $phpmailer->FromName = xintheme('xintheme_mailname'); //发件人昵称
        $phpmailer->Host = xintheme('xintheme_mailsmtp'); //SMTP服务器地址
        $phpmailer->Port = xintheme('xintheme_mailport'); //SMTP邮件发送端口
        if (xintheme('xintheme_smtpssl')) {
            $phpmailer->SMTPSecure = 'ssl';
        } else {
            $phpmailer->SMTPSecure = '';
        } //SMTP加密方式(SSL/TLS)没有为空即可
        $phpmailer->Username = xintheme('xintheme_mailuser'); //邮箱帐号
        $phpmailer->Password = xintheme('xintheme_mailpass'); //邮箱密码
        $phpmailer->IsSMTP();
        $phpmailer->SMTPAuth = true; //启用SMTPAuth服务

    }
    add_action('phpmailer_init', 'xintheme_mail_smtp');
}

//侧边栏分类
function get_category_root_id($cat)  
{  
$this_category = get_category($cat); // 取得当前分类  
while($this_category->category_parent) // 若当前分类有上级分类时，循环  
{  
$this_category = get_category($this_category->category_parent); // 将当前分类设为上级分类（往上爬）  
}  
return $this_category->term_id; // 返回根分类的id号  
}

//面包屑导航
function get_breadcrumbs()  {
    global $wp_query;
    if ( !is_home() ){
        // Start the UL
        //echo '<ul class="breadcrumb">'; 
        // Add the Home link  
        echo '<a href="'. get_settings('home') .'">HOME</a>';

        if ( is_category() )  {
            $catTitle = single_cat_title( "", false );
            $cat = get_cat_ID( $catTitle );
            echo '<a href="'. get_permalink($ancestor) .'">'.get_category_parents( $cat, TRUE, "" ) ."</a>";
        }
        elseif ( is_tag() )  {
            echo '<a href="'. get_permalink($ancestor) .'">'.single_cat_title($prefix,$display)."</a>";
        }
        elseif ( is_archive() && !is_category() )  {
            echo "Archives";
        }
        elseif ( is_search() ) {
            echo '<a>搜索结果（共搜索到 ' . $wp_query->found_posts . ' 篇文章）</a>';
        }
        elseif ( is_404() )  {
            echo "404 Not Found";
        }
        elseif ( is_single() )  {
            $category = get_the_category();
            if($category){
                $category_id = get_cat_ID( $category[0]->cat_name );
                echo '<a href="'. get_permalink($ancestor) .'">'.get_category_parents( $category_id, TRUE, "" ) ."</a>";
                echo '<a href="'. get_permalink($ancestor) .'">'.get_the_title().'</a>'; 
            }
        }
        elseif ( is_page() )  {
            $post = $wp_query->get_queried_object();
            if ( $post->post_parent == 0 ){
                echo '<a href="'. get_permalink($ancestor) .'">'.the_title('','', FALSE)."</a>";
            } else {
                $title = '<a href="'. get_permalink($ancestor) .'">'.the_title('','', FALSE)."</a>";
                $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
                array_push($ancestors, $post->ID);
    
                foreach ( $ancestors as $ancestor ){
                    if( $ancestor != end($ancestors) ){
                        echo '<a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a>'; 
                    } else {
                        echo '<a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a>';
                    }
                }
            }
        }
        // End the UL
        //echo "</ul>";
    }
}

//分页
function par_pagenavi($range = 9){ 
if ( is_singular() ) return;
global $wp_query, $paged;
$max_page = $wp_query->max_num_pages;
if ( $max_page == 1 ) return;
if ( empty( $paged ) ) $paged = 1;
echo ' ';
    global $paged, $wp_query;  
    if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}  
    if($max_page > 1){if(!$paged){$paged = 1;}  
    if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title=''> HOME </a>";}  
    previous_posts_link(' PREV ');  
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
    next_posts_link(' NEXT ');  
    if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title=''> END </a>";}}  
}
//修改搜索结果的链接
function xintheme_redirect_search() {
	if (is_search() && !empty($_GET['s'])) {
		wp_redirect(home_url("/search/").urlencode(get_query_var('s')));
		exit();
	}
}
add_action('template_redirect', 'xintheme_redirect_search' );

//移除WPjam插件的某些选项
if( defined('WPJAM_BASIC_PLUGIN_FILE') ){

	add_filter('wpjam_extends_setting', function($wpjam_setting){

		unset($wpjam_setting['fields']['related-posts.php']);//移除相关文章
		unset($wpjam_setting['fields']['wpjam-postviews.php']);//移除文章浏览量
		unset($wpjam_setting['fields']['mobile-theme.php']);//移除手机端主题选项
		unset($wpjam_setting['fields']['wpjam-rewrite.php']);//移除Rewrite 优化

		return $wpjam_setting;
	}, 99);
	
	$wpjam_extends	= get_option('wpjam-extends');
	if($wpjam_extends){
		$wpjam_extends_updated	= false;
		if(!empty($wpjam_extends['related-posts.php'])){
			unset($wpjam_extends['related-posts.php']);
			$wpjam_extends_updated	= true;
		}

		if(!empty($wpjam_extends['wpjam-postviews.php'])){
			unset($wpjam_extends['wpjam-postviews.php']);
			$wpjam_extends_updated	= true;
		}

		if(!empty($wpjam_extends['mobile-theme.php'])){
			unset($wpjam_extends['mobile-theme.php']);
			$wpjam_extends_updated	= true;
		}

		if($wpjam_extends_updated){
			update_option('wpjam-extends', $wpjam_extends);
		}
	}

}

// WordPress发布文章主动推送到百度，加快收录保护原创
if( xintheme('XinTheme_Baidu_Submit') ){
	if(!function_exists('XinTheme_Baidu_Submit') && function_exists('curl_init')) {
		function XinTheme_Baidu_Submit($post_ID) {
			$WEB_SITE = xintheme('Baidu_Submit_url'); //这里换成你的域名
			$WEB_TOKEN = xintheme('Baidu_Submit_token'); //这里换成你的网站的百度主动推送的token值
			//已成功推送的文章不再推送
			if(get_post_meta($post_ID,'Baidusubmit',true) == 1) return;
			$url = get_permalink($post_ID);
			$api = 'http://data.zz.baidu.com/urls?site='.$WEB_SITE.'&token='.$WEB_TOKEN;
			$ch = curl_init();
			$options = array(
				CURLOPT_URL => $api,
				CURLOPT_POST => true,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_POSTFIELDS => $url,
				CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
			);
			curl_setopt_array($ch, $options);
			$result = json_decode(curl_exec($ch),true);
			
			//如果推送成功则在文章新增自定义栏目Baidusubmit，值为1
			if (array_key_exists('success',$result)) {
				add_post_meta($post_ID, 'Baidusubmit', 1, true);
			}
		}
		add_action('publish_post', 'XinTheme_Baidu_Submit', 0);
	}
}
//WordPress API 方式自动推送到百度熊掌号
if( xintheme('XinTheme_Baidu_XZH_Submit') ){
	if(!function_exists('XinTheme_Baidu_XZH_Submit')){
		function XinTheme_Baidu_XZH_Submit($post_ID) {
			$WEB_APPID = xintheme('Baidu_XZH_appid'); //熊掌号ID
			$WEB_TOKEN = xintheme('Baidu_XZH_token'); //token
			//已成功推送的文章不再推送
			if(get_post_meta($post_ID,'BaiduXZHsubmit',true) == 1) return;
			$url = get_permalink($post_ID);
			$api = 'http://data.zz.baidu.com/urls?appid='.$WEB_APPID.'&token='.$WEB_TOKEN.'&type=realtime';//realtime    batch
			$request = new WP_Http;
			$result = $request->request( $api , array( 'method' => 'POST', 'body' => $url , 'headers' => 'Content-Type: text/plain') );
			$result = json_decode($result['body'],true);
			//如果推送成功则在文章新增自定义栏目BaiduXZHsubmit，值为1
			if (array_key_exists('success',$result)) {
				add_post_meta($post_ID, 'BaiduXZHsubmit', 1, true);
			}
		}
		add_action('publish_post', 'XinTheme_Baidu_XZH_Submit', 0);
	}
}

//熊掌号搜索出图
function Baidu_XZH_search_img() {

	if( xintheme('XinTheme_Baidu_XZH_search_img') ){
		if(is_single()||is_page()){
		echo '<script type="application/ld+json">{
		"@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
		"@id": "'.get_the_permalink().'",
		"appid": "'.xintheme('Baidu_XZH_appid').'",
		"title": "'.get_the_title().'",
		"images": ["'.post_thumbnail(260, 260).'"],
		"description": "'.mb_strimwidth(strip_tags($post->post_content),0,200,'...').'",
		"pubDate": "'.get_the_time('Y-m-d\TH:i:s').'"
		}</script>
		';}
	}

}
add_action('wp_head', 'Baidu_XZH_search_img');