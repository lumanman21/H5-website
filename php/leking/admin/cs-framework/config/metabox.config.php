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
					'dependency'=> array('post_layout', 'any', 'grid' )
				),

				array(
					'id'        => 'produc_txt',
					'type'      => 'text',
					'title'     => '产品内容',
					'dependency'=> array('post_layout', 'any', 'grid' )
				),
				array(
					'id'        => 'produc_tit',
					'type'      => 'text',
					'title'     => '产品详情标题',
					'dependency'=> array('post_layout', 'any', 'grid' )
				),
				

				array(
					'id'        => 'spec_pic',
					'type'      => 'upload',
					'title'     => '产品规格左侧展示图',
					'settings'      => array(
						'button_title' => '上传图片',
						'frame_title'  => '选择图片',
						'insert_title' => '插入图片',
					),
					'dependency' => array('post_layout', 'any', 'grid' )
			    ),
				array(
					'id'        => 'i_spec_pic',
					'type'      => 'upload',
					'title'     => '首页推荐产品图',
					'settings'      => array(
						'button_title' => '上传图片',
						'frame_title'  => '选择图片',
						'insert_title' => '插入图片',
					),
					'desc'	=> '(首页展示)',
					'dependency' => array('post_layout', 'any', 'grid' )
			    ),

				array(
					'id'              => 'produc_ad',
					'type'            => 'group',
					'title'           => '产品优势',
					'button_title'    => '添加产品优势',
					'accordion_title' => '产品优势',
					'fields'          => array(

						array(
							'id'        => 'produc_ad_img',
							'type'      => 'upload',
							'title'     => '优势图标',
							'settings'      => array(
								'button_title' => '上传图片',
								'frame_title'  => '选择图片',
								'insert_title' => '插入图片',
							),
						),
						array(
							'id'			=> 'produc_ad_txt',
							'type'			=> 'text',
							'title'			=> '优势',
						),
					),
					'dependency' => array('post_layout', 'any', 'grid' )
				),

				

     		),
    	),


    )
);


CSFramework_Metabox::instance( $options );
