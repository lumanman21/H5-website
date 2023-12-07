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
                'case'  => '案例列表',
		    ),
		    'default'   => 'grid',
    	),

       
        array(
            'id'              => 'cat_thumbnail',
            'type'            => 'image',
            'title'           => '分类缩略图',
            'add_title'       => '添加图片',
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
