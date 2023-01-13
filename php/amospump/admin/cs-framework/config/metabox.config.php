<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
	'id'        => 'extend_info',
	'title'     => '扩展选项',
	'post_type' => 'post',
	'context'   => 'normal',
	'priority'  => 'high',
	'sections'  => array(

    	array(
			'name'  => 'post_layout_box',
			'title' => '布局设置',
			'icon'  => 'iconfont icon-buju',
     		'fields' => array(
				array(
					'id'    => 'post_layout',
					'type'  => 'image_select',
					'title' => '文章页样式',
				    'options' => array(
						'grid'   => get_stylesheet_directory_uri() . '/static/images/admin/single-1.png',
						'news'   => get_stylesheet_directory_uri() . '/static/images/admin/single-2.png',
						'download'   => get_stylesheet_directory_uri() . '/static/images/admin/single-3.png',
						'support'   => get_stylesheet_directory_uri() . '/static/images/admin/single-4.png',
						'rent'   => get_stylesheet_directory_uri() . '/static/images/admin/single-5.png',

				    ),
				    'default'   => 'grid',
				    'radio'     => true,
				    'attributes'   => array(
						'data-depend-id' => 'post_layout',
					),
		    	),
				
		    	array(
					'id'        => 'produc_img',
					'type'      => 'gallery',
					'title'     => '产品图集',
					'add_title' => '选择产品图',
					'edit_title'=> '编辑图集',
					'dependency'=> array('post_layout', 'any', 'grid' )
				),
					// array(
					// 	'id'        => 'produc_imgj',
					// 	'type'      => 'upload',
					// 	'title'     => '产品介绍图片',
					// 	// 'desc'      => '建议尺寸：500*500，或同比放大/缩小',
					// 	'add_title' => '选择图片',
					// 	'edit_title'=> '编辑图片',
					// 	'dependency' => array('post_layout', 'any', 'grid' )
					// ),
				
				

				//    array(
				// 	'id'        => 'produc_img',
				// 	'type'      => 'gallery',
				// 	'title'     => '产品图集',
				// 	// 'desc'      => '建议尺寸：500*500，或同比放大/缩小',
				// 	'add_title' => '选择产品图',
				// 	'edit_title'=> '编辑图集',
				// 	'dependency'=> array('post_layout', 'any', 'grid' )
				// ),
				
				
				// download
				// 下载页
				array(
					'id'        => 'download_file',
					'type'      => 'upload',
					'title'     => '上传文件',
					'settings'      => array(
							'button_title' => '上传文件',
							'frame_title'  => '选择文件',
							'insert_title' => '插入文件',
					),
					'dependency' => array('post_layout', 'any', 'download' )
				),
				
				
				// 租赁
				array(
					'id'        => 'rent_img',
					'type'      => 'gallery',
					'title'     => '租赁图集',
					'add_title' => '选择产品图',
					'edit_title'=> '编辑图集',
					'dependency'=> array('post_layout', 'any', 'rent' )
				),
				array(
					'id'        => 'rent_param_a',
					'type'      => 'text',
					'title'     => 'Discharge Flange',
					'dependency' => array('post_layout', 'any', 'rent' )
				),
				array(
					'id'        => 'rent_param_b',
					'type'      => 'text',
					'title'     => 'Dry Weight',
					'dependency' => array('post_layout', 'any', 'rent' )
				),
				array(
					'id'        => 'rent_param_c',
					'type'      => 'text',
					'title'     => 'Footprint',
					'dependency' => array('post_layout', 'any', 'rent' )
				),
				array(
					'id'        => 'rent_param_d',
					'type'      => 'text',
					'title'     => 'Fuel Capacity',
					'dependency' => array('post_layout', 'any', 'rent' )
				),
				array(
					'id'        => 'rent_param_e',
					'type'      => 'text',
					'title'     => 'Impeller Diameter',
					'dependency' => array('post_layout', 'any', 'rent' )
				),
				array(
					'id'        => 'rent_param_f',
					'type'      => 'text',
					'title'     => 'Max Flow',
					'dependency' => array('post_layout', 'any', 'rent' )
				),
				array(
					'id'        => 'rent_param_g',
					'type'      => 'text',
					'title'     => 'Max Head',
					'dependency' => array('post_layout', 'any', 'rent' )
				),
				array(
					'id'        => 'rent_param_h',
					'type'      => 'text',
					'title'     => 'Priming Method',
					'dependency' => array('post_layout', 'any', 'rent' )
				),
				array(
					'id'        => 'rent_param_i',
					'type'      => 'text',
					'title'     => 'Pump Size',
					'dependency' => array('post_layout', 'any', 'rent' )
				),
				array(
					'id'        => 'rent_param_j',
					'type'      => 'text',
					'title'     => 'Solids',
					'dependency' => array('post_layout', 'any', 'rent' )
				),





				
                




                // 新闻 


                

				// array(
				// 	'id'      	=> 'no_sidebar',
				// 	'type'   	 => 'switcher',
				// 	'title'   	=> '启用单栏模式',
				// 	'dependency'=> array( 'post_layout', 'any', 'news' ),
				// 	'default' 	=> false
				// ),
				/*
				array(
					'id'      => 'sidebar-doc',
					'type'    => 'switcher',
					'title'   => '开启文章目录',
					'after'   => '<br><br><p class="cs-text-muted">自动获取文章内H2标签作为文章目录，显示在文章右侧栏第一个位置</p>',
					'default' => false
				),
				*/
     		),
    	),
		
		/*
		array(
			'name'  => 'post_abstract_box',
			'title' => '文章摘要',
			'icon'  => 'iconfont icon-yinyong',
     		'fields' => array(

				array(
				  'id'				=> 'post_subtitle',
				  'type'			=> 'text',
				  'title'			=> '文章副标题',
				  'after'			=> '<p class="cs-text-muted">显示在文章标题下面，留空则不显示</p>',
				  'attributes'		=> array(
					'style'			=> 'width: 100%;'
				  ),
				),
				array(
				  'id'				=> 'post_abstract',
				  'type'			=> 'textarea',
				  'title'			=> '文章摘要',
				  'after'			=> '<p class="cs-text-muted">自定义文章摘要，如留空，则自动调用文章首段文字...</p>',
				),
			
     		),
    	),
		
		array(
			'name'  => 'single_copyright',
			'title' => '文章版权',
			'icon'  => 'iconfont icon-tishi1',
     		'fields' => array(
			
				array(
				  'id'				=> 'single_source',
				  'type'			=> 'textarea',
				  'title'			=> '文章来源',
				  'after'			=> '<p class="cs-text-muted">文章来源，显示在文章页标题下面，留空则不显示，可使用html...</p>',
				),

				array(
				  'id'				=> 'single_copyright',
				  'type'			=> 'textarea',
				  'title'			=> '自定义文章版权',
				  'after'			=> '<p class="cs-text-muted">自定义文章版权，如留空，则调用默认版权信息（可在主题设置 - 文章页面设置中关闭显示版权信息）...</p>',
				),
			
     		),
    	),
    	*/
		
		// array(
		// 	'name'  => 'post_seo_box',
		// 	'title' => 'SEO设置',
		// 	'icon'  => 'iconfont icon-wz-seo',
     	// 	'fields' => array(

        //         array(
        //             'id'    => 'seo_custom_title',
        //             'type'  => 'text',
        //             'title' => '自定义标题',
        //             'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        //         ),
        //         array(
        //             'id'    => 'seo_custom_keywords',
        //             'type'  => 'text',
        //             'title' => '自定义关键词',
        //             'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        //         ),
        //         array(
        //             'id'    => 'seo_custom_desc',
        //             'type'  => 'textarea',
        //             'title' => '自定义描述',
        //             'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        //         ),
			
     	// 	),
    	// ),
		
		
    )
);


CSFramework_Metabox::instance( $options );
