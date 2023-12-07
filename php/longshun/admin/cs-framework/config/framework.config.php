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
		'id'        => 'logo2',
		'type'      => 'image',
		'title'     => '底部白色 LOGO',
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
		'id'      => 'email2',
		'type'    => 'text',
		'title'   => '邮箱2',
	),
	array(
		'id'      => 'address',
		'type'    => 'text',
		'title'   => '地址',
	),
  ),

);


// ------------------------------
// 网站设置
// ------------------------------
$options[]   = array(
  'name'     => 'index-setting',
  'title'    => '网站设置',
  'icon'     => 'iconfont icon-mokuai',
  'sections' => array(

		// array(
		// 	'name'     => 'banner',
		// 	'title'    => '网站banner',
		// 	'icon'     => '',
		// 	'fields'   => array(

		// 		array(
		// 			'id'          => 'i_banner_video',
		// 			'type'        => 'upload',
		// 			'title'       => '首页banner视频',
		// 			'settings'       => array(
		// 				'button_title' => '上传视频',
		// 				'frame_title'  => '选择视频',
		// 				'insert_title' => '插入视频',
		// 			),
		// 		),
		// 		array(
		// 			'id'          => 'in_banner_about',
		// 			'type'        => 'gallery',
		// 			'title'       => '内页banner-关于页',
		// 			'add_title'   => '选择图片',
		// 			'edit_title'  => '编辑图集',
		// 			'clear_title' => '全部删除',
		// 		),
		// 		array(
		// 			'id'          => 'in_banner_products',
		// 			'type'        => 'image',
		// 			'title'       => '内页banner-产品页',
		// 			'add_title'   => '上传图片',
		// 			'desc'        => '建议尺寸 1920*700',
		// 		),
		// 		array(
		// 			'id'          => 'in_banner_news',
		// 			'type'        => 'image',
		// 			'title'       => '内页banner-新闻页',
		// 			'add_title'   => '上传图片',
		// 			'desc'        => '建议尺寸 1920*700',
		// 		),
		// 		array(
		// 			'id'          => 'in_banner_cases',
		// 			'type'        => 'image',
		// 			'title'       => '内页banner-案例页',
		// 			'add_title'   => '上传图片',
		// 			'desc'        => '建议尺寸 1920*700',
		// 		),
		// 		array(
		// 			'id'          => 'in_banner_contact',
		// 			'type'        => 'image',
		// 			'title'       => '内页banner-联系我们',
		// 			'add_title'   => '上传图片',
		// 			'desc'        => '建议尺寸 1920*700',
		// 		),

		// 	)
		// ),

		array(
			'name'     => 'index',
			'title'    => '首页设置',
			'icon'     => '',
			'fields'   => array(

				array(
					'id'          => 'i_about_text',
					'type'        => 'wysiwyg',
					'title'       => '首页公司简介',
					'settings'    => array(
						'textarea_rows' => 8,
						'tinymce'       => true,
						'media_buttons' => false,
					)
				),

				array(
					'id'          => 'i_about_pic',
					'type'        => 'image',
					'title'       => '简介图片',
					'add_title'   => '上传图片',
				),
				array(
					'id'          => 'i_about_videos',
					'type'        => 'upload',
					'title'       => '公司简介视频',
					'desc'        => '可上传视频或直接输入第三方(如youtube)链接',
					'settings'       => array(
						'button_title' => '上传视频',
						'frame_title'  => '选择视频',
						'insert_title' => '插入视频',
					),
				),

				// array(
				// 	'id'                 => 'i_reason',
				// 	'type'               => 'group',
				// 	'title'              => 'Why Choose',
				// 	'button_title'       => '添加组',
				// 	// 'accordion_title'    => '数字组',
				// 	'desc'               => '页面布局限制3组，请勿再添加<br />可上下拖动改变顺序',
				// 	'fields'             => array(
				// 		array(
				// 			'id'         => 'i_reason_1',
				// 			'type'       => 'image',
				// 			'title'      => '图标',
				// 		),
				// 		array(
				// 			'id'         => 'i_reason_2',
				// 			'type'       => 'text',
				// 			'title'      => '标题',
				// 		),
				// 		array(
				// 			'id'         => 'i_reason_3',
				// 			'type'       => 'text',
				// 			'title'      => '描述',
				// 		),
				// 	)
				// ),

				array(
					'id'          => 'i_s',
					'type'        => 'textarea',
					'title'       => '首页服务宣言',
					// 'desc'        => '提示说明文字--可删除',
				),

			)
		),

		array(
			'name'     => 'in_about',
			'title'    => '内页-about',
			'icon'     => '',
			'fields'   => array(

				array(
					'id'          => 'in_about_text',
					'type'        => 'wysiwyg',
					'title'       => '公司简介',
					'settings'    => array(
						'textarea_rows' => 6,
						'tinymce'       => true,
						'media_buttons' => false,
					)
				),

				array(
					'id'          => 'in_about_pic',
					'type'        => 'image',
					'title'       => '简介图片',
					'add_title'   => '上传图片',
				),
			
				array(
					'id'          => 'in_about_videos',
					'type'        => 'upload',
					'title'       => '公司简介视频',
					'desc'        => '可上传视频或直接输入第三方(如youtube)链接',
					'settings'       => array(
						'button_title' => '上传视频',
						'frame_title'  => '选择视频',
						'insert_title' => '插入视频',
					),
				),

				
				array(
					'id'                 => 'ad',
					'type'               => 'group',
					'title'              => '企业优势',
					'button_title'       => '添加组',
					'accordion_title'    => '企业优势',
					'desc'        => '为了维护页面布局，请保持三组',
					'fields'             => array(
						array(
							'id'         => 'ad_txt',
							'type'       => 'textarea',
							'title'      => '描述',
						),
						array(
							'id'         => 'ad_pic',
							'type'       => 'image',
							'title'      => '图标',
						),
					)
				),
				

				array(
					'id'          => 'certy',
					'type'        => 'gallery',
					'title'       => '证书图集',
					'add_title'   => '添加证书',
					'edit_title'  => '编辑图集',
					'clear_title' => '全部删除',
					// 'desc'        => '提示说明文字--可删除',
				),

				array(
					'id'          => 'env',
					'type'        => 'gallery',
					'title'       => '环境图集',
					'add_title'   => '添加图片',
					'edit_title'  => '编辑图集',
					'clear_title' => '全部删除',
					// 'desc'        => '提示说明文字--可删除',
				),
			
				
				


			)
		),

		array(
			'name'     => 'Business',
			'title'    => '内页-Business',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'                 => 'oem1',
					'type'               => 'group',
					'title'              => 'Advanced quality management system',
					'button_title'       => '添加组',
					'accordion_title'    => '企业优势',
					// 'desc'        => '为了维护页面布局，请保持三组',
					'fields'             => array(
						array(
							'id'         => 'oem1_txt',
							'type'       => 'textarea',
							'title'      => '描述',
						),
						
					)
				),
				array(
					'id'                 => 'oem2',
					'type'               => 'group',
					'title'              => 'A quality product supply chain',
					'button_title'       => '添加组',
					'accordion_title'    => '企业优势',
					// 'desc'        => '为了维护页面布局，请保持三组',
					'fields'             => array(
						array(
							'id'         => 'oem2_txt',
							'type'       => 'textarea',
							'title'      => '描述',
						),
						
					)
				),
				array(
					'id'          => 's1',
					'type'        => 'textarea',
					'title'       => 'Fast delivery',
					// 'desc'        => '提示说明文字--可删除',
				),
				array(
					'id'          => 's2',
					'type'        => 'textarea',
					'title'       => 'Ancillary services',
					// 'desc'        => '提示说明文字--可删除',
				),



				array(
					'id'          => 'certy2',
					'type'        => 'gallery',
					'title'       => '证书图集',
					'add_title'   => '添加证书',
					'edit_title'  => '编辑图集',
					'clear_title' => '全部删除',
					// 'desc'        => '提示说明文字--可删除',
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
	'title'       => '社交链接',
	'icon'        => 'iconfont icon-QQ',
	'fields'      => array(

	  array(
		  'id'			=> 'consultation_facebook_url',
		  'type'			=> 'text',
		  'title'			=> 'facebook-链接',
	  ),
	  array(
		  'id'			=> 'consultation_twitter_url',
		  'type'			=> 'text',
		  'title'			=> 'twitter-链接',
	  ),
	  array(
		  'id'			=> 'consultation_linkedin_url',
		  'type'			=> 'text',
		  'title'			=> 'linkedin-链接',
	  ),
	  array(
		  'id'			=> 'consultation_youtube_url',
		  'type'			=> 'text',
		  'title'			=> 'youtube-链接',
	  ),
	  array(
		'id'			=> 'consultation_instagram_url',
		'type'			=> 'text',
		'title'			=> 'Instagram-链接',
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



// ----------------------------------------
// 底部内容
// ----------------------------------------
// $options[]      = array(
//   'name'        => 'footer',
//   'title'       => '底部内容',
//   'icon'        => 'iconfont icon-yemei',

//   'fields'      => array(

//     array(
//         'id'      => 'footer_cont',
//         'type'    => 'textarea',
//         'title'   => '底部内容',
//       ),

//   ),

// );



CSFramework::instance( $settings, $options );
