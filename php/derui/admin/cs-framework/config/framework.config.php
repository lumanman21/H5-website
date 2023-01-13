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
        'id'      => 'email2',
        'type'    => 'text',
        'title'   => '邮箱2',
      ),
	 
      array(
          'id'      => 'phone1',
          'type'    => 'text',
          'title'   => 'mob1',
      ),
      array(
        'id'      => 'phone2',
        'type'    => 'text',
        'title'   => 'mob2',
      ),
      array(
        'id'      => 'phone3',
        'type'    => 'text',
        'title'   => 'tel',
      ),
      array(
        'id'      => 'fax1',
        'type'    => 'text',
        'title'   => 'fax',
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
    'name'     => 'banner_x',
    'title'    => '生产线',
    'icon'     => '',
    'fields'   => array(
      array(
        'id'              => 'banner_x',
        'type'            => 'group',
        'title'           => '添加描述',
        'button_title'    => '添加描述',
        'accordion_title' => '添加描述',
        'fields'          => array(
        array(
          'id'      => 'banner_x_tit',
          'type'    => 'text',
          'title'   => '名称',
          ),
        array(
          'id'      => 'banner_x_txt1',
          'type'    => 'text',
          'title'   => '描述1',
          ),
        array(
          'id'      => 'banner_x_txt2',
          'type'    => 'text',
          'title'   => '描述2',
          ),
        array(
          'id'      => 'banner_x_txt3',
          'type'    => 'text',
          'title'   => '描述3',
          ),
        )
      )
    ),
  ),
  array(
    'name'     => 'banner_z',
    'title'    => '产品图',
    'icon'     => '',
    'fields'   => array(
      array(
        'id'              => 'banner_z',
        'type'            => 'group',
        'title'           => '添加产品图',
        'button_title'    => '添加产品图',
        'accordion_title' => '添加产品图',
        'fields'          => array(
          array(
            'id'          => 'banner_z_img',
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
      'title'    => '工厂图',
      'icon'     => '',
      'fields'   => array(
        array(
          'id'              => 'banner_f',
          'type'            => 'group',
          'title'           => '添加工厂图',
          'button_title'    => '添加工厂图',
          'accordion_title' => '添加工厂图',
          'fields'          => array(
            array(
              'id'          => 'banner_f_img',
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
            array(
              'id'      => 'banner_c_txt',
              'type'    => 'text',
              'title'   => '证书名称',
            ),
          )
        )
      ),
      
    ),
   
    
    array(
      'name'     => 'banner_h',
      'title'    => '历史',
      'icon'     => '',
      'fields'   => array(
        array(
          'id'              => 'banner_h',
          'type'            => 'group',
          'title'           => '添加年份',
          'button_title'    => '添加年份',
          'accordion_title' => '添加年份',
          'fields'          => array(
            array(
              'id'      => 'banner_h_age',
              'type'    => 'text',
              'title'   => '年份',
            ),
          )
        )
      ),
      
    ),
    array(
      'name'     => 'banner_he',
      'title'    => '历史事件',
      'icon'     => '',
      'fields'   => array(
        array(
          'id'              => 'banner_he',
          'type'            => 'group',
          'title'           => '添加历史事件',
          'button_title'    => '添加历史事件',
          'accordion_title' => '添加历史事件',
          'fields'          => array(
            array(
              'id'          => 'banner_he_img',
              'type'        => 'upload',
              'title'       => '上传图像',
              'settings'       => array(
              'button_title' => '上传图像',
              'frame_title'  => '选择图像',
              'insert_title' => '插入图像',
              ),
            ),
            array(
              'id'      => 'banner_he_age',
              'type'    => 'text',
              'title'   => '年份',
            ),
            array(
              'id'      => 'banner_he_event',
              'type'    => 'text',
              'title'   => '事件',
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


        array(
            'id'			=> 'consultation_youtube_url',
            'type'			=> 'text',
            'title'			=> 'youtube-链接',
        ),
        
        array(
          'id'			=> 'consultation_linkedin_url',
          'type'			=> 'text',
          'title'			=> 'linkedin-链接',
        ),
        array(
          'id'			=> 'consultation_twitter_url',
          'type'			=> 'text',
          'title'			=> 'twitter-链接',
        ),
        array(
          'id'			=> 'consultation_facebook_url',
          'type'			=> 'text',
          'title'			=> 'facebook-链接',
        ),
        
        array(
          'id'			=> 'consultation_ins_url',
          'type'			=> 'text',
          'title'			=> 'ins-链接',
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
