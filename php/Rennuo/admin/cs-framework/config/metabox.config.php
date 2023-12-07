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
				array(
					'id'		=> 'produc_ms',
					'type'		=> 'wysiwyg',
					'title'		=> '价格区间',
					'desc'            => '列表页展示',
					'dependency' => array('post_layout', 'any', 'grid' )
				),
				array(
					'id'              => 'produc_para',
					'type'            => 'wysiwyg',
					'title'           => '价格描述',
					// 'desc'            => '提示说明文字--可删除',
					'dependency'      => array('post_layout', 'any', 'grid' )
				),
				
				// array(
				// 	'id'        => 'produc_video',
				// 	'type'      => 'upload',
				// 	'title'     => '上传视频',
				// 	'desc'      => '上传视频或直接输入第三方视频链接(保留http://)<br />若不上传视频，默认显示图集第一张',
				// 	'settings'      => array(
				// 		'button_title' => '上传视频',
				// 		'frame_title'  => '选择视频',
				// 		'insert_title' => '插入视频',
				// 	),
				// 	'dependency' => array('post_layout', 'any', 'grid' )
			    // ),
				
				// array(
				// 	'id'              => 'produc_adv',
				// 	'type'            => 'group',
				// 	'title'           => '产品优势',
				// 	'button_title'    => '添加产品优势',
				// 	'accordion_title' => '产品优势',
				// 	'fields'          => array(
				// 		array(
				// 			'id'			=> 'produc_adv_tit',
				// 			'type'			=> 'text',
				// 			'title'			=> '优势',
				// 		),
				// 	),
				// 	'dependency' => array('post_layout', 'any', 'grid' )
				// ),
				


     		),
    	),


    )
);


CSFramework_Metabox::instance( $options );
