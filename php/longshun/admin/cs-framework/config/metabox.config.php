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
						// 'cases'   => get_stylesheet_directory_uri() . '/static/images/admin/single-3.png',
				    ),
				    'default'   => 'grid',
				    'radio'     => true,
				    'attributes'   => array(
						'data-depend-id' => 'post_layout',
					),
		    	),

				// array(
				// 	'id'        => 'produc_img',
				// 	'type'      => 'gallery',
				// 	'title'     => '产品图集',
				// 	'add_title' => '选择产品图',
				// 	'edit_title'=> '编辑图集',
				// 	'clear_title' => '全部删除',
				// 	'desc'      => '建议尺寸：800*800，或同比放大/缩小',
				// 	'dependency'=> array('post_layout', 'any', 'grid' )
				// ),

				array(
					'id'              => 'p_gallery',
					'type'            => 'group',
					'title'           => '添加图集',
					'button_title'    => '添加图集',
					'accordion_title' => '产品图集',
					'desc'      => '每组颜色对应一个图集',
					'fields'          => array(
						array(
							'id'              => 'p_gallery_cont',
							'type'            => 'gallery',
							'title'           => '图集',
							'add_title'       => '选择图片',
							'edit_title'      => '编辑图集',
							'clear_title'     => '全部删除',
						),
					),
					'dependency'      => array('post_layout', 'any', 'grid' )
				),

				array(
					'id'		=> 'produc_tx',
					'type'		=> 'wysiwyg',
					'title'		=> '产品简介',
					'dependency' => array('post_layout', 'any', 'grid' )
					
				),

				array(
					'id'		=> 'produc_brief',
					'type'		=> 'textarea',
					'title'		=> '产品说明',
					'dependency' => array('post_layout', 'any', 'grid' )
				),

				array(
					'id'		=> 'produc_para',
					'type'		=> 'wysiwyg',
					'title'		=> '产品参数（首页展示）',
					'dependency' => array('post_layout', 'any', 'grid' )
				),

				

				// array(
				// 	'id'        => 'produc_file',
				// 	'type'      => 'upload',
				// 	'title'     => '产品文档',
				// 	'settings'      => array(
				// 		'button_title' => '上传文档',
				// 		'frame_title'  => '选择文档',
				// 		'insert_title' => '插入文档',
				// 	),
				// 	'dependency' => array('post_layout', 'any', 'grid' )
			    // ),


     		),
    	),


    )
);


CSFramework_Metabox::instance( $options );
