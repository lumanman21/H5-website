<?php if ( ! defined( 'ABSPATH' ) ) { die; } // 无法直接访问页面
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// 主题设置
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => '网站设置',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'xintheme',
  'menu_position'   => 100,//59
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'menu_icon'		=> 'dashicons-hammer',
  'framework_title' => ''.wp_get_theme().' <small>&nbsp;&nbsp;v '. wp_get_theme()->get( 'Version' ).' 版本</small><style>.cs-framework .cs-body {min-height: 700px;}#qt_head_code_toolbar,#qt_foot_code_toolbar,#qt_single_copyright_toolbar,#qt_footer_copyright_toolbar,#qt_full_ad_code_pc_toolbar,#qt_full_ad_code_mobile_toolbar,#qt_list_ad_code_pc_toolbar,#qt_list_ad_code_mobile_toolbar {display: none;}</style>',
);

//获取链接分类目录
$options_linkcats = array();
$options_linkcats_obj = get_terms('link_category');
foreach ( $options_linkcats_obj as $tag ) {
	$options_linkcats[$tag->term_id] = $tag->name;
}
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// 主题选项
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();



// ----------------------------------------
// 头部设置
// ----------------------------------------
$options[]      = array(
  'name'        => 'header',
  'title'       => '基础设置',
  'icon'        => 'iconfont icon-yemei',

  'fields'      => array(

    array(
      'id'        => 'favicon',
      'type'      => 'image',
      'title'     => '网站 Favicon图标',
      'desc'      => '上传网站 Favicon图标',
      'add_title' => '上传 Favicon',
    ),
  // 	array(
	// 	'id'        => 'logo',
	// 	'type'      => 'image',
	// 	'title'     => '网站 LOGO',
	// 	'desc'      => '上传网站 LOGO（224*80）',
	// 	'add_title' => '上传 LOGO',
	// ),
  // 	array(
	// 	'id'        => 'logo_mobile',
	// 	'type'      => 'image',
	// 	'title'     => '手机端 LOGO',
	// 	'desc'      => '上传手机端 LOGO（250*71）',
	// 	'add_title' => '上传手机端 LOGO',
	// ),
//	array(
//		'id'      => 'header_background',
//		'type'    => 'color_picker',
//		'title'   => '导航栏背景颜色',
//		'default' => '#F9F7F8',
//	),
//	array(
//		'id'      => 'menu_color',
//		'type'    => 'color_picker',
//		'title'   => '菜单字体颜色',
//		'default' => '#222222',
//	),
//	array(
//		'id'      => 'menu_current_color',
//		'type'    => 'color_picker',
//		'title'   => '菜单选中时 字体颜色',
//		'default' => '#2365ac',
//	),
//	array(
//		'id'      => 'search_header',
//		'type'    => 'switcher',
//		'title'   => '搜索框',
//		'default' => false
//	),

      array(
          'id'      => 'email1',
          'type'    => 'text',
          'title'   => '邮箱1',
      ),
	 
      array(
          'id'      => 'phone1',
          'type'    => 'text',
          'title'   => '联系方式1',
      ),
      array(
        'id'      => 'phone2',
        'type'    => 'text',
        'title'   => '联系方式2',
    ),
      array(
          'id'      => 'address',
          'type'    => 'text',
          'title'   => '公司地址',
      ),


  ),

);


// ------------------------------
// 首页设置
// ------------------------------
$options[]   = array(
  'name'     => 'index-setting',
  'title'    => '幻灯片设置',
  'icon'     => 'iconfont icon-mokuai',
  'sections' => array(

	
	// 添加幻灯片
    array(
      'name'     => 'banner_c',
      'title'    => '证书',
      'icon'     => '',
      'fields'   => array(
        array(
          'id'              => 'banner_c',
          'type'            => 'group',
          'title'           => '添加证书',
          'button_title'    => '添加证书',
          'accordion_title' => '添加证书',
          'fields'          => array(
            array(
              'id'          => 'banner_c_img',
              'type'        => 'upload',
              'title'       => '上传图像',
              'settings'       => array(
              'button_title' => '上传图像',
              'frame_title'  => '选择图像',
              'insert_title' => '插入图像',
              ),
            ),
          // array(
          //   'id'      => 'banner_v_text2',
          //   'type'    => 'text',
          //   'title'   => '简单介绍',
          // ),
          )
        )
      ),
      
    ),
    array(
      'name'     => 'banner_p',
      'title'    => '合作伙伴',
      'icon'     => '',
      'fields'   => array(
        array(
          'id'              => 'banner_p',
          'type'            => 'group',
          'title'           => '添加合作伙伴',
          'button_title'    => '添加合作伙伴',
          'accordion_title' => '添加合作伙伴',
          'fields'          => array(
            array(
              'id'          => 'banner_p_img',
              'type'        => 'upload',
              'title'       => '上传图像',
              'settings'       => array(
              'button_title' => '上传图像',
              'frame_title'  => '选择图像',
              'insert_title' => '插入图像',
              ),
            ),
          // array(
          //   'id'      => 'banner_v_text2',
          //   'type'    => 'text',
          //   'title'   => '简单介绍',
          // ),
          )
        )
      ),
      
    ),
    array(
      'name'     => 'banner_f',
      'title'    => 'FAQ',
      'icon'     => '',
      'fields'   => array(
        array(
          'id'              => 'banner_f',
          'type'            => 'group',
          'title'           => '添加问题',
          'button_title'    => '添加问题',
          'accordion_title' => '添加问题',
          'fields'          => array(
            array(
              'id'      => 'banner_fa',
              'type'    => 'text',
              'title'   => '问题',
            ),
            array(
              'id'      => 'banner_fq',
              'type'    => 'text',
              'title'   => '答案',
            ),
          )
        )
      ),
      
    ),
	
)
 
);


// ----------------------------------------
// 客服工具
// ----------------------------------------
$options[]      = array(
  'name'        => 'social',
  'title'       => '社交工具',
  'icon'        => 'iconfont icon-QQ',

  'fields'      => array(

//  	array(
//		'id'			=> 'consultation_weixin_img',
//		'type'			=> 'image',
//		'title'			=> '微信二维码',
//		'desc'			=> '上传您的微信二维码(165*165)。',
//		'add_title'		=> '上传二维码',
//	),
//    array(
//		'id'			=> 'consultation_weixin_txt',
//		'type'			=> 'text',
//		'title'			=> '微信二维码 - 描述',
//		'after'			=> '<p class="cs-text-muted">如：关注微信公众号</p>',
//    ),
//    array(
//		'id'			=> 'consultation_qq',
//		'type'			=> 'text',
//		'title'			=> '客服QQ号码',
//		'after'			=> '<p class="cs-text-muted">输入QQ号码，当用户点击QQ图标的时候会打开与您的QQ临时会话窗口。</p>',
//    ),
//    array(
//		'id'			=> 'consultation_weibo_url',
//		'type'			=> 'text',
//		'title'			=> '官方新浪微博',
//		'after'			=> '<p class="cs-text-muted">输入您的微博链接地址。</p>',
//    ),
//    array(
//		'id'			=> 'consultation_email_url',
//		'type'			=> 'text',
//		'title'			=> '邮箱咨询链接',
//		'after'			=> '<p class="cs-text-muted">输入您的电子邮箱咨询链接。</p>',
//    ),
//    array(
//		'id'			=> 'consultation_tel',
//		'type'			=> 'text',
//		'title'			=> '联系电话',
//		'after'			=> '<p class="cs-text-muted">输入您的联系电话。</p>',
//    ),


      // array(
      //     'id'			=> 'consultation_facebook_img',
      //     'type'			=> 'image',
      //     'title'			=> 'facebook-图标',
      //     'desc'			=> '上传您的facebook图标(165*165)。',
      //     'add_title'		=> '上传facebook图标',
      // ),
      array(
          'id'			=> 'consultation_facebook_url',
          'type'			=> 'text',
          'title'			=> 'facebook-链接',
      ),

      // array(
      //     'id'			=> 'consultation_linkedin_img',
      //     'type'			=> 'image',
      //     'title'			=> 'linkedin-图标',
      //     'desc'			=> '上传您的linkedin图标(165*165)。',
      //     'add_title'		=> '上传linkedin图标',
      // ),
      // array(
      //     'id'			=> 'consultation_linkedin_url',
      //     'type'			=> 'text',
      //     'title'			=> 'linkedin-链接',
      // ),
      // array(
      //     'id'			=> 'consultation_youtube_img',
      //     'type'			=> 'image',
      //     'title'			=> 'youtube-图标',
      //     'desc'			=> '上传您的youtube图标(165*165)。',
      //     'add_title'		=> '上传youtube图标',
      // ),
      // array(
      //     'id'			=> 'consultation_youtube_url',
      //     'type'			=> 'text',
      //     'title'			=> 'youtube-链接',
      // ),
      // array(
      //     'id'			=> 'consultation_twitter_img',
      //     'type'			=> 'image',
      //     'title'			=> 'twitter-图标',
      //     'desc'			=> '上传您的twitter图标(165*165)。',
      //     'add_title'		=> '上传twitter图标',
      // ),
      array(
          'id'			=> 'consultation_twitter_url',
          'type'			=> 'text',
          'title'			=> 'twitter-链接',
      ),


  ),

);


// ----------------------------------------
// 添加代码
// ----------------------------------------
$options[]      = array(
  'name'        => 'xintheme_add_code',
  'title'       => '添加代码',
  'icon'        => 'iconfont icon-programming__easyiconnet',

  'fields' => array(
	array(
	  'id'      => 'head_code',
	  'type'    => 'wysiwyg',
	  'title'   => '添加代码到头部',
	  'after'    => '<p class="cs-text-muted">出现在网站 head 中，主要用于验证网站...</p>',
      'settings' => array(
        'textarea_rows' => 5,
        'tinymce'       => false,
        'media_buttons' => false,
      )
	),
	array(
	  'id'      => 'foot_code',
	  'type'    => 'wysiwyg',
	  'title'   => '添加代码到页脚',
	  'after'    => '<p class="cs-text-muted">出现在网站底部 body 前，主要用于站长统计代码...</p>',
      'settings' => array(
        'textarea_rows' => 5,
        'tinymce'       => false,
        'media_buttons' => false,
      )
	),
  ),

);



CSFramework::instance( $settings, $options );
