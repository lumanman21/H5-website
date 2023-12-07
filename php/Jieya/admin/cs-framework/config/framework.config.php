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
		'id'      => 'tel2',
		'type'    => 'text',
		'title'   => '电话2',
	),
	// array(
	// 	'id'      => 'whatsapp',
	// 	'type'    => 'text',
	// 	'title'   => 'WhatsApp',
	// ),
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
		'id'      => 'fax',
		'type'    => 'text',
		'title'   => 'fax',
	),
	array(
		'id'      => 'fax2',
		'type'    => 'text',
		'title'   => 'fax2',
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
//banner
// $options[]   = array(
// 	'name'     => 'banner-setting',
// 	'title'    => '网站banner设置',
// 	'icon'     => 'iconfont icon-mokuai',
// 	'fields' => array(
// 		array(
// 			'id'          => 'in_banner_products',
// 			'type'        => 'image',
// 			'title'       => '内页banner-Products',
// 			'add_title'   => '上传图片',
// 			'desc'        => '建议尺寸 1920*650',
// 		),
// 		array(
// 			'id'          => 'in_banner_pd',
// 			'type'        => 'image',
// 			'title'       => '内页banner-Detail',
// 			'add_title'   => '上传图片',
// 			'desc'        => '建议尺寸 1920*650',
// 		),
		
// 		array(
// 			'id'          => 'in_banner_about',
// 			'type'        => 'image',
// 			'title'       => '内页banner-About',
// 			'add_title'   => '上传图片',
// 			'desc'        => '建议尺寸 1920*650',
// 		),
// 		array(
// 			'id'          => 'in_banner_service',
// 			'type'        => 'image',
// 			'title'       => '内页banner-service',
// 			'add_title'   => '上传图片',
// 			'desc'        => '建议尺寸 1920*650',
// 		),
// 		array(
// 			'id'          => 'in_banner_news',
// 			'type'        => 'image',
// 			'title'       => '内页banner-News',
// 			'add_title'   => '上传图片',
// 			'desc'        => '建议尺寸 1920*650',
// 		),
// 		array(
// 			'id'          => 'in_banner_contact',
// 			'type'        => 'image',
// 			'title'       => '内页banner-Contact',
// 			'add_title'   => '上传图片',
// 			'desc'        => '建议尺寸 1920*650',
// 		),
// 	),
// );



$options[]   = array(
	'name'     => 'index-setting',
	'title'    => '首页设置',
	'icon'     => 'iconfont icon-mokuai',
	'fields' => array(
		array(
			'id'          => 'i_videos',
			'type'        => 'upload',
			'title'       => '公司banner视频',
			'desc'        => '视频宽高请保持1110*540比例',
			'settings'       => array(
				'button_title' => '上传视频',
				'frame_title'  => '选择视频',
				'insert_title' => '插入视频',
			),
		),
		array(
			'id'          => 'i_m_link',
			'type'        => 'text',
			'title'       => 'banner视频跳转链接',
	  	),
		array(
			'id'          => 'i_company',
			'type'        => 'text',
			'title'       => '公司全称',
	  	),
		array(
			'id'          => 'i_banner_txt',
			'type'        => 'wysiwyg',
			'title'       => 'banner文案',
	  	),
		array(
			'id'          => 'i_brand',
			'type'        => 'gallery',
			'title'       => '顶部品牌图集',
			'add_title'   => '选择图片',
			'edit_title'  => '编辑图片',
			'clear_title' => '全部删除',
		),
		array(
			'id'          => 'i_pack',
			'type'        => 'gallery',
			'title'       => '包装图集',
			'add_title'   => '选择图片',
			'edit_title'  => '编辑图片',
			'clear_title' => '全部删除',
		),
		array(
			'id'          => 'in_brand',
			'type'        => 'gallery',
			'title'       => '底部品牌图集',
			'add_title'   => '选择图片',
			'edit_title'  => '编辑图片',
			'clear_title' => '全部删除',
		),
	),
);

$options[]   = array(
	'name'     => 'detail-setting',
	'title'    => 'detail页面设置',
	'icon'     => 'iconfont icon-mokuai',
	'fields' => array(
		array(
			'id'                 => 'p_ad',
			'type'               => 'group',
			'title'              => '产品优势',
			'button_title'       => '添加优势',
			'accordion_title'    => '优势',
			'fields'             => array(
				array(
					'id'          => 'p_ad_tit',
					'type'        => 'text',
					'title'       => '优势',
				),
				array(
					'id'          => 'p_ad_txt',
					'type'        => 'textarea',
					'title'       => '描述',
				),
			)
		),
		
	),
);




//内页
$options[]   = array(
	'name'     => 'index-setting',
	'title'    => 'about设置',
	'icon'     => 'iconfont icon-mokuai',
	'sections' => array(
  
	  	array(
		  'name'     => 'index',
		  'title'    => '内页-Story',
		  'icon'     => '',
		  'fields'   => array(
				array(
					'id'          => 'story_txt',
					'type'        => 'wysiwyg',
					'title'       => 'story简介文案',
				),
				array(
					'id'          => 'story_gallery',
					'type'        => 'gallery',
					'title'       => '工厂图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),
	  
			)
		),
		
		array(
			'name'     => 'in_team',
			'title'    => '内页-Team',
			'icon'     => '',
			'fields'   => array(
	
				array(
					'id'          => 'in_team_t',
					'type'        => 'wysiwyg',
					'title'       => '公司简介',
				),
				array(
					'id'          => 'team_gallery',
					'type'        => 'gallery',
					'title'       => '团队图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),
	  
				
				
	
			)
		),

		array(
			'name'     => 'in_culture',
			'title'    => '内页-Culture',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'                 => 'cul',
					'type'               => 'group',
					'title'              => '文化',
					'button_title'       => '添加文化',
					'accordion_title'    => '文化',
					// 'desc'        => '请上传3组',
					'fields'             => array(
						array(
							'id'          => 'cul_tit',
							'type'        => 'text',
							'title'       => '标题',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'cul_txt',
							'type'        => 'textarea',
							'title'       => '描述',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'        => 'cul_ico',
							'type'      => 'image',
							'title'     => '图标',
							'add_title' => '上传图标',
						),
						array(
							'id'        => 'cul_pic',
							'type'      => 'image',
							'title'     => '展示图',
							'add_title' => '上传图片',
						),
						
					)
				),
	  
				
				
	
			)
		),
	
	),
);


$options[]   = array(
	'name'     => 'oem-setting',
	'title'    => 'oem&odm设置',
	'icon'     => 'iconfont icon-mokuai',
	'sections' => array(
  
	  	array(
		  'name'     => 'in_oem',
		  'title'    => '内页-OEM',
		  'icon'     => '',
		  'fields'   => array(
				array(
					'id'          => 'oem_txt',
					'type'        => 'wysiwyg',
					'title'       => 'oem简介文案',
				),
				array(
					'id'          => 'oem_gallery',
					'type'        => 'gallery',
					'title'       => 'oem图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),
	  
			)
		),
		array(
			'name'     => 'in_odm',
			'title'    => '内页-ODM',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'odm_txt',
					'type'        => 'wysiwyg',
					'title'       => 'odm简介文案',
				),
				array(
					'id'          => 'odm_gallery',
					'type'        => 'gallery',
					'title'       => 'odm图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),

				array(
					'id'                 => 'odm',
					'type'               => 'group',
					'title'              => '发展过程',
					'button_title'       => '添加发展过程',
					'accordion_title'    => '发展过程',
					// 'desc'        => '请上传3组',
					'fields'             => array(
						array(
							'id'          => 'odm_tit',
							'type'        => 'text',
							'title'       => '步骤',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'odm_txt',
							'type'        => 'text',
							'title'       => '描述',
							// 'desc'        => '提示说明文字--可删除',
						),
					)
				),
		
			  )
		  ),
		
	),
);



$options[]   = array(
	'name'     => 'capabilities-setting',
	'title'    => 'capabilities设置',
	'icon'     => 'iconfont icon-mokuai',
	'sections' => array(
		
	  	array(
		  'name'     => 'in_facilities',
		  'title'    => '内页-Facilities',
		  'icon'     => '',
		  'fields'   => array(
				array(
					'id'          => 'facility',
					'type'        => 'wysiwyg',
					'title'       => 'Facilities文案',
				),
				array(
					'id'          => 'facility_gallery',
					'type'        => 'gallery',
					'title'       => 'facility图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),
				array(
					'id'          => 'f_ad',
					'type'        => 'wysiwyg',
					'title'       => '优势文案',
				),
				array(
					'id'                 => 'f_ad_list',
					'type'               => 'group',
					'title'              => '发展过程',
					'button_title'       => '添加发展过程',
					'accordion_title'    => '发展过程',
					'fields'             => array(
						array(
							'id'          => 'f_ad_tit',
							'type'        => 'text',
							'title'       => '步骤',
						),
						array(
							'id'          => 'f_ad_txt',
							'type'        => 'text',
							'title'       => '描述',
						),
					)
				),

				array(
					'id'          => 'w_fac',
					'type'        => 'wysiwyg',
					'title'       => 'Warehouse facility文案',
				),
				array(
					'id'        => 'w_fac_pic',
					'type'      => 'image',
					'title'     => '展示图',
					'add_title' => '上传图片',
				),
				array(
					'id'          => 'bio',
					'type'        => 'wysiwyg',
					'title'       => 'Bio-pharma Design Liquid Processing Infrastructure文案',
				),
				array(
					'id'        => 'bio_pic',
					'type'      => 'image',
					'title'     => '展示图',
					'add_title' => '上传图片',
				),
				array(
					'id'          => 'eco',
					'type'        => 'wysiwyg',
					'title'       => 'Eco-Friendly Practices文案',
				),
				array(
					'id'          => 'eco_gallery',
					'type'        => 'gallery',
					'title'       => 'Eco-Friendly Practices图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),
			)
		),

	

		array(
			'name'     => 'in_rd',
			'title'    => '内页-R&D',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'                 => 'in_npd',
					'type'               => 'group',
					'title'              => 'NPD Process',
					'button_title'       => '添加Process',
					'accordion_title'    => 'NPD Process',
					'fields'             => array(
						array(
							'id'          => 'npd_tit',
							'type'        => 'text',
							'title'       => '标题',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'          => 'npd_txt',
							'type'        => 'text',
							'title'       => '描述',
							// 'desc'        => '提示说明文字--可删除',
						),
						array(
							'id'        => 'npd_pic',
							'type'      => 'image',
							'title'     => '展示图',
							'add_title' => '上传图片',
						),
						
						)
				),
				array(
					'id'          => 'n_rd',
					'type'        => 'gallery',
					'title'       => 'New R&D图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),
					
			  )
		),
		array(
			'name'     => 'in_quality',
			'title'    => '内页-Quality',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'qua_txt',
					'type'        => 'wysiwyg',
					'title'       => 'qualit文案',
				),
				array(
					'id'        => 'qua_pic',
					'type'      => 'image',
					'title'     => '展示图',
					'add_title' => '上传图片',
				),
				array(
					'id'                 => 'steps',
					'type'               => 'group',
					'title'              => 'steps',
					'button_title'       => '添加steps',
					'accordion_title'    => 'steps',
					'fields'             => array(
						array(
							'id'          => 'qua_txt',
							'type'        => 'text',
							'title'       => 'steps',
							// 'desc'        => '提示说明文字--可删除',
						),
					)
				),

			)
		),
		array(
			'name'     => 'in_design',
			'title'    => '内页-Design',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'des_txt',
					'type'        => 'wysiwyg',
					'title'       => 'design文案',
				),
				array(
					'id'        => 'des_pic',
					'type'      => 'image',
					'title'     => '展示图',
					'add_title' => '上传图片',
				),
				
			  )
		),
		array(
			'name'     => 'in_pack',
			'title'    => '内页-Packaging Options',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'pac_txt',
					'type'        => 'wysiwyg',
					'title'       => 'Packaging文案',
				),
				array(
					'id'        => 'pac_pic',
					'type'      => 'image',
					'title'     => '展示图',
					'add_title' => '上传图片',
				),
				
			  )
		),
		array(
			'name'     => 'in_certifications-licenses',
			'title'    => '内页-Certifications licenses',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'certy_list',
					'type'        => 'gallery',
					'title'       => '证书图集',
					'add_title'   => '选择图片',
					'edit_title'  => '编辑图片',
					'clear_title' => '全部删除',
				),
				
			)
		),
	  
  	),
);




$options[]   = array(
	'name'     => 'Sustainability-setting',
	'title'    => 'Sustainability设置',
	'icon'     => 'iconfont icon-mokuai',
	'sections' => array(
		array(
			'name'     => 'in_Environment-Health',
			'title'    => '内页-Environment Health',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'env_txt',
					'type'        => 'wysiwyg',
					'title'       => 'Environment & Health文案',
				),
				array(
					'id'        => 'env_pic',
					'type'      => 'image',
					'title'     => '展示图',
					'add_title' => '上传图片',
				),
				
			  )
		),
		array(
			'name'     => 'in_Plant-base-wipes',
			'title'    => '内页-Plant base wipes',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'plant_txt',
					'type'        => 'wysiwyg',
					'title'       => 'Environment & Health文案',
				),
				array(
					'id'        => 'plant_pic',
					'type'      => 'image',
					'title'     => '展示图',
					'add_title' => '上传图片',
				),
				array(
					'id'                 => 'plant_adv',
					'type'               => 'group',
					'title'              => '优势',
					'button_title'       => '添加优势',
					'accordion_title'    => '优势',
					'fields'             => array(
						array(
							'id'          => 'qua_txt',
							'type'        => 'text',
							'title'       => '优势',
							// 'desc'        => '提示说明文字--可删除',
						),
					)
				),
				
			  )
		),


		array(
			'name'     => 'in_Flushable-wipes',
			'title'    => '内页-Flushable wipes',
			'icon'     => '',
			'fields'   => array(
				array(
					'id'          => 'flush_txt',
					'type'        => 'wysiwyg',
					'title'       => 'FLUSHABLE WIPES MANUFACTURER文案',
				),
				array(
					'id'        => 'flush_pic',
					'type'      => 'image',
					'title'     => '展示图',
					'add_title' => '上传图片',
				),
				array(
					'id'          => 'flush_txt2',
					'type'        => 'wysiwyg',
					'title'       => 'moist toilet paper文案',
				),
				
			  )
		),
		
	  
  	),
);


$options[]   = array(
	'name'     => 'news-setting',
	'title'    => 'news页面设置',
	'icon'     => 'iconfont icon-mokuai',
	'fields' => array(
		array(
			'id'                 => 'n_faq',
			'type'               => 'group',
			'title'              => 'faq',
			'button_title'       => '添加faq',
			'accordion_title'    => 'faq',
			'fields'             => array(
				array(
					'id'          => 'n_q',
					'type'        => 'text',
					'title'       => '问',
				),
				array(
					'id'          => 'n_a',
					'type'        => 'text',
					'title'       => '答',
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
		  'id'			=> 'consultation_google_url',
		  'type'			=> 'text',
		  'title'			=> 'google-链接',
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
