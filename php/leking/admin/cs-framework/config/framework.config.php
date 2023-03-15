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
		'id'        => 'logo',
		'type'      => 'image',
		'title'     => '网站 LOGO',
		'add_title' => '上传 LOGO',
	),
	array(
		'id'        => 'favicon',
		'type'      => 'image',
		'title'     => '网站 Favicon图标',
		'add_title' => '上传 Favicon',
	),
	array(
		'id'      => 'tel',
		'type'    => 'text',
		'title'   => '电话',
	),
	array(
		'id'      => 'email',
		'type'    => 'text',
		'title'   => '邮箱',
	),
	array(
		'id'      => 'address',
		'type'    => 'textarea',
		'title'   => '地址',
	),

  ),

);


// ------------------------------
// 首页设置
// ------------------------------
$options[]   = array(
  'name'     => 'index-setting',
  'title'    => '网站设置',
  'icon'     => 'iconfont icon-mokuai',
  'sections' => array(



	
	// 优势
    array(
		'name'     => 'i_ad',
		'title'    => '优势',
		'icon'     => '',
		'fields'   => array(

			array(
				'id'              => 'i_ad',
				'type'            => 'group',
				'title'           => '公司优势',
				'button_title'    => '添加优势',
				'accordion_title' => '公司优势',
				'fields'          => array(
					array(
						'id'          => 'i_ad_bc',
						'type'        => 'upload',
						'title'       => '背景图',
						'settings'       => array(
						  'button_title' => '上传图片',
						  'frame_title'  => '选择图片',
						  'insert_title' => '插入图片',
						),
					),
					array(
						'id'          => 'i_ad_img',
						'type'        => 'upload',
						'title'       => '图标',
						'settings'       => array(
						  'button_title' => '上传图片',
						  'frame_title'  => '选择图片',
						  'insert_title' => '插入图片',
						),
					),
					array(
						'id'      => 'i_ad_tit',
						'type'    => 'text',
						'title'   => '优势',
						'desc'	=> '换行请加&lt;br &gt;',
					),
					array(
						'id'      => 'i_ad_txt',
						'type'    => 'textarea',
						'title'   => '描述',
						'desc'	=> '换行请加&lt;br &gt;',
					),
				)
			),


		)
    ),

	//合作伙伴
	array(
		'name'     => 'i_part',
		'title'    => '合作伙伴',
		'icon'     => '',
		'fields'   => array(

			array(
				'id'              => 'i_part',
				'type'            => 'group',
				'title'           => '合作伙伴',
				'button_title'    => '添加图片',
				'accordion_title' => '合作伙伴',
				'fields'          => array(
					array(
						'id'          => 'i_part_img',
						'type'        => 'upload',
						'title'       => '合作伙伴-灰',
						'settings'       => array(
						  'button_title' => '上传图片',
						  'frame_title'  => '选择图片',
						  'insert_title' => '插入图片',
						),
					),
					array(
						'id'          => 'i_part_active',
						'type'        => 'upload',
						'title'       => '合作伙伴',
						'settings'       => array(
						  'button_title' => '上传图片',
						  'frame_title'  => '选择图片',
						  'insert_title' => '插入图片',
						),
					),

				)
			),


		)
    ),

	// 关于我们
    array(
		'name'     => 'about',
		'title'    => '关于我们',
		'icon'     => '',
		'fields'   => array(
			
			array(
				'id'              => 'history',
				'type'            => 'group',
				'title'           => '发展历程',
				'button_title'    => '添加发展历程',
				'accordion_title' => '发展历程',
				'fields'          => array(
				  array(
					'id'      => 'history_year',
					'type'    => 'text',
					'title'   => '年份',
				  ),
				  array(
					'id'      => 'history_cont',
					'type'    => 'textarea',
					'title'   => '事件',
				  ),
				)
			),
			array(
				'id'              => 'honor',
				'type'            => 'group',
				'title'           => '荣誉证书',
				'button_title'    => '添加证书',
				'accordion_title' => '荣誉证书',
				'fields'          => array(
					array(
						'id'      => 'honor_tit',
						'type'    => 'text',
						'title'   => '证书名称',
					),
					array(
						'id'          => 'honor_pic',
						'type'        => 'upload',
						'title'       => '证书图片',
						'settings'       => array(
						  'button_title' => '上传证书',
						  'frame_title'  => '选择图片',
						  'insert_title' => '插入图片',
						),
					),

				)
			),

		)
    ),

	// 生产车间
	array(
		'name'     => 'work_line',
		'title'    => '生产线',
		'icon'     => '',
		'fields'   => array(

			array(
				'id'              => 'work_line',
				'type'            => 'group',
				'title'           => '合作伙伴',
				'button_title'    => '添加图片',
				'accordion_title' => '合作伙伴',
				'fields'          => array(
					array(
						'id'          => 'workshop_img',
						'type'        => 'upload',
						'title'       => '生产图',
						'settings'       => array(
						  'button_title' => '上传图片',
						  'frame_title'  => '选择图片',
						  'insert_title' => '插入图片',
						),
					),
					array(
						'id'      => 'workshop_txt',
						'type'    => 'text',
						'title'   => '描述',
					),

				)
			),


		)
    ),


	// 技术
    array(
		'name'     => 'technology',
		'title'    => '净化技术中心',
		'icon'     => '',
		'fields'   => array(
			
			array(
				'id'              => 'technology',
				'type'            => 'group',
				'title'           => '净化技术',
				'button_title'    => '添加',
				'accordion_title' => '净化技术',
				'fields'          => array(
					array(
						'id'          => 'technology_pic',
						'type'        => 'upload',
						'title'       => '技术图标',
						'settings'       => array(
						  'button_title' => '上传图片',
						  'frame_title'  => '选择图片',
						  'insert_title' => '插入图片',
						),
					),
					array(
						'id'      => 'technology_tit',
						'type'    => 'text',
						'title'   => '技术',
					),
					array(
						'id'      => 'technology_txt',
						'type'    => 'textarea',
						'title'   => '描述',
					),

				)
			),

		)
    ),



  ),
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
		'id'			=> 'consultation_facebook_url',
		'type'			=> 'text',
		'title'			=> 'Facebook-链接',
	),
	array(
		'id'			=> 'consultation_twitter_url',
		'type'			=> 'text',
		'title'			=> 'Twitter-链接',
	),
	array(
		'id'			=> 'consultation_instagram_url',
		'type'			=> 'text',
		'title'			=> 'Instagram-链接',
	),
	array(
		'id'			=> 'consultation_linkedin_url',
		'type'			=> 'text',
		'title'			=> 'Linkedin-链接',
	),
	// array(
	// 	'id'			=> 'consultation_youtube_url',
	// 	'type'			=> 'text',
	// 	'title'			=> 'Youtube-链接',
	// ),


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



// ----------------------------------------
// 底部内容
// ----------------------------------------
$options[]      = array(
  'name'        => 'footer',
  'title'       => '底部内容',
  'icon'        => 'iconfont icon-yemei',

  'fields'      => array(

    array(
        'id'      => 'footer_cont',
        'type'    => 'textarea',
        'title'   => '底部内容',
      ),

  ),

);



CSFramework::instance( $settings, $options );
