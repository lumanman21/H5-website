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
						// 'case'   => get_stylesheet_directory_uri() . '/static/images/admin/single-3.png',
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
					'clear_title' => '全部删除',
					'desc'      => '建议尺寸：800*800，或同比放大/缩小',
					'dependency'=> array('post_layout', 'any', 'grid' )
				),

				// array(
				// 	'id'        => 'download_file',
				// 	'type'      => 'upload',
				// 	'title'     => '上传文件',
				// 	'settings'      => array(
				// 			'button_title' => '上传文件',
				// 			'frame_title'  => '选择文件',
				// 			'insert_title' => '插入文件',
				// 	),
				// 	'dependency' => array('post_layout', 'any', 'grid' )
				// ),

				
			
				// array(
				// 	'id'		=> 'produc_min',
				// 	'type'		=> 'text',
				// 	'title'		=> '起订量',
				// 	'dependency' => array('post_layout', 'any', 'grid' )
				// ),
				array(
					'id'		=> 'produc_ms',
					'type'		=> 'wysiwyg',
					'title'		=> '产品图集右侧描述',
					'dependency' => array('post_layout', 'any', 'grid' )
				),
				array(
					'id'		=> 'produc_guige',
					'type'		=> 'wysiwyg',
					'title'		=> '产品规格',
					'dependency' => array('post_layout', 'any', 'grid' )
				),
				array(
					'id'		=> 'produc_video',
					'type'		=> 'wysiwyg',
					'title'		=> '产品视频',
					'desc'      => '请输入youtube第三方网址',
					'dependency' => array('post_layout', 'any', 'grid' )
				),
		
				array(
					'id'              => 'produc_faq',
					'type'            => 'group',
					'title'           => '产品优势',
					'button_title'    => '添加产品优势',
					'accordion_title' => '产品优势',
					'fields'          => array(
						array(
							'id'			=> 'produc_q',
							'type'			=> 'text',
							'title'			=> '标题',
						),
						array(
							'id'			=> 'produc_a',
							'type'			=> 'textarea',
							'title'			=> '描述',
							'desc'        => '换行请用&lt;br&gt;',
						),
					),
					'dependency' => array('post_layout', 'any', 'grid' )
				),


				
				


     		),
    	),


    )
);


CSFramework_Metabox::instance( $options );
