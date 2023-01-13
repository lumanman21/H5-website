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
						'grid'   => get_stylesheet_directory_uri() . '/static/images/admin/single-2.png',
						'news'   => get_stylesheet_directory_uri() . '/static/images/admin/single-1.png',
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
					// 'desc'      => '建议尺寸：500*500，或同比放大/缩小',
					'add_title' => '选择产品图',
					'edit_title'=> '编辑图集',
					'dependency'=> array('post_layout', 'any', 'grid' )
				),
     		),
    	),
		
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
