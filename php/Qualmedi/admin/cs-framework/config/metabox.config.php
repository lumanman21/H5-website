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
						'case'   => get_stylesheet_directory_uri() . '/static/images/admin/single-5.png',
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
					'id'		=> 'produc_pieces',
					'type'		=> 'text',
					'title'		=> '起订量',
					'dependency' => array('post_layout', 'any', 'grid' )
				),

				array(
					'id'		=> 'produc_ms',
					'type'		=> 'wysiwyg',
					'title'		=> '产品描述',
					'dependency' => array('post_layout', 'any', 'grid' )
				),

				
				array(
					'id'              => 'product_adv',
					'type'            => 'group',
					'title'           => '产品优势',
					'button_title'    => '添加产品优势',
					'accordion_title' => '产品优势',
					'desc'            => '列表页展示',
					'fields'          => array(
						array(
							'id'			=> 'produc_adv_tit',
							'type'			=> 'text',
							'title'			=> '优势',
						),
					),
					'dependency' => array('post_layout', 'any', 'grid' )
				),

				array(
					'id'              => 'product_acc',
					'type'            => 'group',
					'title'           => '产品配件',
					'button_title'    => '添加产品配件',
					'accordion_title' => '产品配件',
					'fields'          => array(
						array(
							'id'			=> 'product_acc_tit',
							'type'			=> 'text',
							'title'			=> '配件',
						),
						array(
							'id'			=> 'product_acc_txt',
							'type'			=> 'textarea',
							'title'			=> '描述',
						),
						array(
							'id'              => 'product_acc_pic',
							'type'            => 'image',
							'title'           => '图片',
							'add_title'       => '添加图片',
							// 'desc'            => '提示说明文字--可删除',
						),
						
					),
					'dependency' => array('post_layout', 'any', 'grid' )
				),


				array(
					'id'              => 'product_faq',
					'type'            => 'group',
					'title'           => '产品faq',
					'button_title'    => '添加产品faq',
					'accordion_title' => '产品faq',
					'fields'          => array(
						array(
							'id'			=> 'p_f',
							'type'			=> 'text',
							'title'			=> '配件',
						),
						array(
							'id'			=> 'p_a',
							'type'			=> 'textarea',
							'title'			=> '描述',
						),
						
					),
					'dependency' => array('post_layout', 'any', 'grid' )
				),

				array(
					'id'		=> 'case_link',
					'type'		=> 'text',
					'title'		=> '视频链接',
					'dependency' => array('post_layout', 'any', 'case' )
				),



				
				


     		),
    	),


    )
);


CSFramework_Metabox::instance( $options );
