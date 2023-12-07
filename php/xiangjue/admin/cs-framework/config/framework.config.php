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
		'id'      => 'whatsapp',
		'type'    => 'text',
		'title'   => 'WhatsApp',
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
		// 			'id'          => 'in_banner_products',
		// 			'type'        => 'image',
		// 			'title'       => '内页banner-Products',
		// 			'add_title'   => '上传图片',
		// 			'desc'        => '建议尺寸 1920*500',
		// 		),
		// 		array(
		// 			'id'          => 'in_banner_service',
		// 			'type'        => 'image',
		// 			'title'       => '内页banner-service',
		// 			'add_title'   => '上传图片',
		// 			'desc'        => '建议尺寸 1920*500',
		// 		),
		// 		array(
		// 			'id'          => 'in_banner_about',
		// 			'type'        => 'image',
		// 			'title'       => '内页banner-About',
		// 			'add_title'   => '上传图片',
		// 			'desc'        => '建议尺寸 1920*500',
		// 		),

		// 		array(
		// 			'id'          => 'in_banner_news',
		// 			'type'        => 'image',
		// 			'title'       => '内页banner-News',
		// 			'add_title'   => '上传图片',
		// 			'desc'        => '建议尺寸 1920*500',
		// 		),

		// 		array(
		// 			'id'          => 'in_banner_contact',
		// 			'type'        => 'image',
		// 			'title'       => '内页banner-联系我们',
		// 			'add_title'   => '上传图片',
		// 			'desc'        => '建议尺寸 1920*500',
		// 		),

		// 	)
		// ),



		array(
			'name'     => 'index',
			'title'    => '首页设置',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'i_brand',
					'type'        => 'gallery',
					'title'       => '合作伙伴',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图集',
					'clear_title' => '全部删除',
				),

				array(
					'id'          => 'i_about',
					'type'        => 'wysiwyg',
					'title'       => '首页简介文案',
				),
				
				
				array(
					'id'          => 'i_video_link',
					'type'        => 'upload',
					'title'       => '首页视频链接',
					'desc'        => '请输入第三方链接',
					'settings'       => array(
						'button_title' => '上传视频',
						'frame_title'  => '选择视频',
						'insert_title' => '插入视频',
					),
				),

				array(
					'id'          => 'i_video_bc',
					'type'        => 'image',
					'title'       => '首页视频背景图',
					'add_title'   => '上传图片',
					'desc'        => '建议尺寸800*550',
				),

				array(
					'id'          => 'i_factory',
					'type'        => 'gallery',
					'title'       => '工厂图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图集',
					'clear_title' => '全部删除',
				),
				

				array(
					'id'          => 'in_partner',
					'type'        => 'gallery',
					'title'       => '合作品牌上排',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),
				array(
					'id'          => 'in_partner2',
					'type'        => 'gallery',
					'title'       => '合作品牌下排',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),


				
				
		
			)
		),


		array(
			'name'     => 'in_about',
			'title'    => '内页-About us',
			'icon'     => '',
			'fields'   => array(

				array(
					'id'          => 'in_about_t',
					'type'        => 'wysiwyg',
					'title'       => '公司简介',
				),
				
				array(
					'id'          => 'in_video_link',
					'type'        => 'upload',
					'title'       => 'about页视频链接',
					'desc'        => '上传视频或直接输入第三方链接',
					'settings'       => array(
						'button_title' => '上传视频',
						'frame_title'  => '选择视频',
						'insert_title' => '插入视频',
					),
				),
				
				// array(
				// 	'id'          => 'in_a_pic',
				// 	'type'        => 'image',
				// 	'title'       => '视频背景图',
				// 	'add_title'   => '上传图片',
				// ),

				array(
					'id'          => 'in_factory',
					'type'        => 'gallery',
					'title'       => '工厂图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),
				array(
					'id'          => 'in_product',
					'type'        => 'gallery',
					'title'       => '产品图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),
				array(
					'id'          => 'in_company',
					'type'        => 'gallery',
					'title'       => '公司图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),

			)
		),

		array(
			'name'     => 'in_custom',
			'title'    => '内页-Custom',
			'icon'     => '',
			'fields'   => array(

				array(
					'id'                 => 'in_custom',
					'type'               => 'group',
					'title'              => '定制',
					'button_title'       => '添加组',
					'accordion_title'    => '定制',
					// 'desc'               => '提示说明文字--可删除',
					'fields'             => array(
						array(
							'id'          => 'in_cus_tit',
							'type'        => 'text',
							'title'       => '标题',
						),
						array(
							'id'          => 'in_cus_txt',
							'type'        => 'textarea',
							'title'       => '描述',
						),
						array(
							'id'          => 'in_cus_pic',
							'type'        => 'image',
							'title'       => '定制图',
							'add_title'   => '上传图片',
							'desc'        => '建议尺寸800*550',
						),
						array(
							'id'          => 'in_cus_gallery',
							'type'        => 'gallery',
							'title'       => '图集',
							'add_title'   => '选择图片',
							'edit_title'  => '编辑图片',
							'clear_title' => '全部删除',
						),
						
					)
				),

			)
		),


		array(
			'name'     => 'in_service',
			'title'    => '内页-Service',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'                 => 'in_service',
					'type'               => 'group',
					'title'              => '服务(第一组)',
					'button_title'       => '添加服务',
					'accordion_title'    => '服务',
					'fields'             => array(
						
						array(
							'id'          => 'in_service_tit',
							'type'        => 'text',
							'title'       => '服务',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'in_service_txt',
							'type'        => 'textarea',
							'title'       => '描述',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'in_service_pic',
							'type'        => 'image',
							'title'       => '展示图',
							'add_title'   => '上传图片',
						),
						
					)
				),
				array(
					'id'                 => 'in_service3',
					'type'               => 'group',
					'title'              => '服务(第二组)',
					'button_title'       => '添加服务',
					'accordion_title'    => '服务',
					'fields'             => array(
						
						array(
							'id'          => 'in_service_tit3',
							'type'        => 'text',
							'title'       => '服务',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'in_service_txt3',
							'type'        => 'textarea',
							'title'       => '描述',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'in_service_pic3',
							'type'        => 'image',
							'title'       => '展示图',
							'add_title'   => '上传图片',
						),
						
					)
				),
				array(
					'id'                 => 'in_service2',
					'type'               => 'group',
					'title'              => '服务(第三组)',
					'button_title'       => '添加服务',
					'accordion_title'    => '服务',
					'fields'             => array(
						
						array(
							'id'          => 'in_service_tit2',
							'type'        => 'text',
							'title'       => '服务',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'in_service_txt2',
							'type'        => 'textarea',
							'title'       => '描述',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'in_service_pic2',
							'type'        => 'image',
							'title'       => '展示图',
							'add_title'   => '上传图片',
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
	//   array(
	// 	'id'			=> 'consultation_instagram_url',
	// 	'type'			=> 'text',
	// 	'title'			=> 'Instagram-链接',
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
