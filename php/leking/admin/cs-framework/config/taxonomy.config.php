<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// TAXONOMY OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options     = array();

// -----------------------------------------
// Taxonomy Options                        -
// -----------------------------------------
$options[]   = array(
  'id'       => 'category_options',
  'taxonomy' => 'category', // category, post_tag or your custom taxonomy name
  'fields'   => array(

    	array(
			'id'     => 'cat_layout',
			'type'   => 'radio',
			'title'  => '布局样式',
            'class'  => 'horizontal',
		    'options'=> array(
				'grid'  => '产品列表',
                'news'  => '新闻列表',
		    ),
		    'default'   => 'grid',
    	),

        // array(
            // 'id'          => 'cat_banner_img',
            // 'type'        => 'upload',
            // 'title'       => '分类目录 - Banner图像',
            // 'settings'       => array(
                // 'button_title' => '上传图像',
                // 'frame_title'  => '选择图像',
                // 'insert_title' => '插入图像',
            // ),
        // ),

        array(
            'id'          => 'cat_thumbnail',
            'type'        => 'upload',
            'title'       => '产品分类缩略图',
            //'after'   => '<div class="cs-text-muted">在首页分类显示</div>',
            'settings'       => array(
                'button_title' => '上传图像',
                'frame_title'  => '选择图像',
                'insert_title' => '插入图像',
            ),
        ),

        array(
            'id'          => 'cat_ico',
            'type'        => 'upload',
            'title'       => '产品分类图标',
            //'after'   => '<div class="cs-text-muted">在内页产品列表显示</div>',
            'settings'       => array(
                'button_title' => '上传图标',
                'frame_title'  => '选择图标',
                'insert_title' => '插入图标',
            ),
        ),

        // array(
            // 'id'    => 'seo_custom_title',
            // 'type'  => 'text',
            // 'title' => '自定义标题',
            // 'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        // ),
        // array(
            // 'id'    => 'seo_custom_keywords',
            // 'type'  => 'text',
            // 'title' => '自定义关键词',
            // 'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        // ),
        // array(
            // 'id'    => 'seo_custom_desc',
            // 'type'  => 'textarea',
            // 'title' => '自定义描述',
			// 'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        // ),

  ),
);

// $options[]   = array(
    // 'id'       => 'tag_options',
    // 'taxonomy' => 'post_tag',
    // 'fields'   => array(


        // array(
            // 'id'    => 'seo_custom_title',
            // 'type'  => 'text',
            // 'title' => '自定义标题',
            // 'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        // ),
        // array(
            // 'id'    => 'seo_custom_keywords',
            // 'type'  => 'text',
            // 'title' => '自定义关键词',
            // 'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        // ),
        // array(
            // 'id'    => 'seo_custom_desc',
            // 'type'  => 'textarea',
            // 'title' => '自定义描述',
            // 'after'   => '<div class="cs-text-muted">留空则调用默认全局SEO设置</div>'
        // ),
    // ),
// );

CSFramework_Taxonomy::instance( $options );
