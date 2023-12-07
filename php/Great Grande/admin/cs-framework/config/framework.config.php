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

	array(
		'name'     => 'banner',
		'title'    => '网站banner',
		'icon'     => '',
		'fields'   => array(

			array(
				'id'          => 'in_banner_products',
				'type'        => 'image',
				'title'       => '内页banner-Products',
				'add_title'   => '上传图片',
				'desc'        => '建议尺寸 1920*680',
			),
			array(
				'id'          => 'in_banner_about',
				'type'        => 'image',
				'title'       => '内页banner-About',
				'add_title'   => '上传图片',
				'desc'        => '建议尺寸 1920*680',
			),
			array(
				'id'          => 'in_banner_why',
				'type'        => 'image',
				'title'       => '内页banner-Why choose us',
				'add_title'   => '上传图片',
				'desc'        => '建议尺寸 1920*680',
			),
			array(
				'id'          => 'in_banner_pr',
				'type'        => 'image',
				'title'       => '内页banner-Partner Recruitment',
				'add_title'   => '上传图片',
				'desc'        => '建议尺寸 1920*680',
			),
			array(
				'id'          => 'in_banner_news',
				'type'        => 'image',
				'title'       => '内页banner-News',
				'add_title'   => '上传图片',
				'desc'        => '建议尺寸 1920*680',
			),
			array(
				'id'          => 'in_banner_case',
				'type'        => 'image',
				'title'       => '内页banner-Case',
				'add_title'   => '上传图片',
				'desc'        => '建议尺寸 1920*680',
			),
			
			array(
				'id'          => 'in_banner_contact',
				'type'        => 'image',
				'title'       => '内页banner-联系我们',
				'add_title'   => '上传图片',
				'desc'        => '建议尺寸 1920*680',
			),

		)
	),



		array(
			'name'     => 'index',
			'title'    => '首页设置',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'i_name',
					'type'        => 'text',
					'title'       => '公司全称',
				),
				array(
					'id'                 => 'i_why',
					'type'               => 'group',
					'title'              => 'Why customers choose us',
					'button_title'       => '添加原因',
					'accordion_title'    => '原因',
					'desc'               => '其他页面通用',
					'fields'             => array(
						array(
							'id'        => 'i_why_ico',
							'type'      => 'image',
							'title'     => '展示图标',
							'add_title' => '上传图标',
							'desc'        => '请用绿色图标',
						),
						array(
							'id'          => 'i_why_tit',
							'type'        => 'text',
							'title'       => '标题',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'i_why_txt',
							'type'        => 'textarea',
							'title'       => '描述',
							// 'desc'        => '提示说明文字--可删除',
						),
						
					)
				),
				

				array(
					'id'          => 'i_certy',
					'type'        => 'gallery',
					'title'       => '证书',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图集',
					'clear_title' => '全部删除',
					'desc'        => '其他页面通用',
				),
				array(
					'id'          => 'i_partner',
					'type'        => 'gallery',
					'title'       => '合作伙伴logo',
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
					'id'          => 'i_brochure',
					'type'        => 'upload',
					'title'       => '宣传册下载',
				),
				
				
				array(
					'id'          => 'i_video_link',
					'type'        => 'upload',
					'title'       => '首页视频链接',
					'desc'        => '上传视频或直接输入第三方链接',
					'settings'       => array(
						'button_title' => '上传视频',
						'frame_title'  => '选择视频',
						'insert_title' => '插入视频',
					),
				),


				array(
					'id'          => 'i_news',
					'type'        => 'gallery',
					'title'       => '首页新闻展示图',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图集',
					'clear_title' => '全部删除',
				),
				
		
			)
		),


		array(
			'name'     => 'in_why',
			'title'    => '内页-Why choose us',
			'icon'     => '',
			'fields'   => array(

				array(
					'id'          => 'in_ca',
					'type'        => 'wysiwyg',
					'title'       => '公司优势',
				),
				
				array(
					'id'          => 'in_ca_pic',
					'type'        => 'image',
					'title'       => '公司优势图',
					'add_title'   => '上传图片',
					'desc'        => '建议尺寸 800*560',
				),
				array(
					'id'          => 'in_pa',
					'type'        => 'wysiwyg',
					'title'       => '产品优势',
				),
				array(
					'id'          => 'in_pa_pic',
					'type'        => 'image',
					'title'       => '产品优势图',
					'add_title'   => '上传图片',
					'desc'        => '建议尺寸 800*560',
				),
				array(
					'id'          => 'in_sa',
					'type'        => 'wysiwyg',
					'title'       => '服务优势',
				),
				array(
					'id'          => 'in_sa_pic',
					'type'        => 'image',
					'title'       => '服务优势图',
					'add_title'   => '上传图片',
					'desc'        => '建议尺寸 800*560',
				),


			)
		),

		array(
			'name'     => 'in_pr',
			'title'    => '内页-Partner Recruitment',
			'icon'     => '',
			'fields'   => array(


				array(
					'id'                 => 'in_ad',
					'type'               => 'group',
					'title'              => 'Why customers choose us',
					'button_title'       => '添加优势',
					'accordion_title'    => '优势',
					'fields'             => array(
						array(
							'id'        => 'in_ad_ico',
							'type'      => 'image',
							'title'     => '优势展示图标',
							'add_title' => '上传图标',
						),
						array(
							'id'          => 'in_ad_tit',
							'type'        => 'text',
							'title'       => '标题',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'in_ad_txt',
							'type'        => 'textarea',
							'title'       => '描述',
							// 'desc'        => '提示说明文字--可删除',
						),
						
					)
				),



				array(
					'id'          => 'in_ad_pic',
					'type'        => 'gallery',
					'title'       => '优势展示图片',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图集',
					'clear_title' => '全部删除',
					'desc'        => '和上方优势数量保持统一',
				),
				array(
					'id'                 => 'in_p_r',
					'type'               => 'group',
					'title'              => 'Partner Recruitment',
					'button_title'       => '添加组',
					'accordion_title'    => '添加',
					'fields'             => array(
						array(
							'id'          => 'in_pr_tit',
							'type'        => 'text',
							'title'       => '标题',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'in_pr_tit2',
							'type'        => 'text',
							'title'       => '小标题',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'in_pr_txt',
							'type'        => 'textarea',
							'title'       => '描述',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'        => 'in_pr_pic',
							'type'      => 'image',
							'title'     => '展示图',
							'add_title' => '上传图',
						),
						
					)
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
					'id'          => 'in_brochure',
					'type'        => 'upload',
					'title'       => '宣传册下载',
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
				
				array(
					'id'          => 'in_a_pic',
					'type'        => 'image',
					'title'       => '视频背景图',
					'add_title'   => '上传图片',
				),

				array(
					'id'          => 'in_factory',
					'type'        => 'gallery',
					'title'       => '工厂图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),

			)
		),
	

		array(
			'name'     => 'in_contact',
			'title'    => '内页-Contact us',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'                 => 'faq',
					'type'               => 'group',
					'title'              => 'Faq',
					'button_title'       => '添加Faq',
					'accordion_title'    => 'Faq',
					'fields'             => array(
						array(
							'id'          => 'c_q',
							'type'        => 'text',
							'title'       => '问题',
						),
						array(
							'id'          => 'c_a',
							'type'        => 'textarea',
							'title'       => '描述',
							'desc'        => '换行请用&lt;br&gt;',
						),
						array(
							'id'          => 'c_pic',
							'type'        => 'image',
							'title'       => '展示图',
							'add_title'   => '上传图片',
						),
						
						
					)
				),



			)
		),

		array(
			'name'     => 'in_vr',
			'title'    => '内页-Vr Show',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'vr_link',
					'type'        => 'text',
					'title'       => 'Vr-Show',
					'desc'        => '请输入vr网址',
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
	//   array(
	// 	  'id'			=> 'consultation_linkedin_url',
	// 	  'type'			=> 'text',
	// 	  'title'			=> 'linkedin-链接',
	//   ),
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
