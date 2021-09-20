<?php
/**
 * Xpand Blog Theme Options Panel
 */
$wp_customize->add_panel('xpand_blog_theme_options', array(
    'title' => __('Xpand Blog Settings', 'xpand-blog') ,
    'priority' => 1,
));

//Header Search Icon Section
$wp_customize->add_section('xpand_blog_header_search_icon_section', array(
    'title' => __('Xpand Blog Header Search Display Setting', 'xpand-blog') ,
    'panel' => 'xpand_blog_theme_options',
    'priority' => 10
));
// Top Header Menu Social Icon Display Control
$wp_customize->add_setting('xpand_blog_header_search_icon_display', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_header_search_icon_display', array(
    'label' => esc_html__('Display Search Icon', 'xpand-blog') ,
    'section' => 'xpand_blog_header_search_icon_section',
    'priority' => 4,
    'type' => 'checkbox'
));

//Header Socail Icon Section
$wp_customize->add_section('xpand_blog_header_social_icon_section', array(
    'title' => __('Xpand Blog Social Icon setting', 'xpand-blog') ,
    'panel' => 'xpand_blog_theme_options',
    'priority' => 10
));

// Top Header Menu Social Icon Display Control
$wp_customize->add_setting('xpand_blog_left_header_social_icon_display', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_left_header_social_icon_display', array(
    'label' => esc_html__('Display Left Header Social Icons', 'xpand-blog') ,
    'section' => 'xpand_blog_header_social_icon_section',
    'priority' => 4,
    'type' => 'checkbox'
));

$wp_customize->add_setting(new Xpand_Blog_Repeater_Setting($wp_customize, 'social_links', array(
    'default' => '',
    'sanitize_callback' => array(
        'Xpand_Blog_Repeater_Setting',
        'sanitize_repeater_setting'
    ) ,
)));

$wp_customize->add_control(new Xpand_Blog_Control_Repeater($wp_customize, 'social_links', array(
    'section' => 'xpand_blog_header_social_icon_section',
    'label' => __('Social Links', 'xpand-blog') ,
    'active_callback' => 'xpand_blog_header_social_active_callback',
    'fields' => array(
        'font' => array(
            'type' => 'font',
            'label' => __('Font Awesome Icon', 'xpand-blog') ,
            'description' => __('Example: fa fa-facebook', 'xpand-blog') ,
        ) ,
        'link' => array(
            'type' => 'url',
            'label' => __('Link', 'xpand-blog') ,
            'description' => __('Example: https://facebook.com', 'xpand-blog') ,
        )
    ) ,
    'row_label' => array(
        'type' => 'field',
        'value' => __('links', 'xpand-blog') ,
        'field' => 'link'
    ) ,
    'choices' => array(
        'limit' => 5
    )
)));

//Slider Section
$wp_customize->add_section('xpand_blog_slider_section', array(
    'title' => __('Xpand Blog Slider Setting', 'xpand-blog') ,
    'panel' => 'xpand_blog_theme_options',
    'priority' => 10
));

$wp_customize->add_setting('xpand_blog_slider_display', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_slider_display', array(
    'label' => esc_html__('Display Slider', 'xpand-blog') ,
    'section' => 'xpand_blog_slider_section',
    'priority' => 2,
    'type' => 'checkbox',

));

//category wise post
$categories = get_categories();

$cats = array();
$i = 0;
foreach ($categories as $category)
{
    if ($i == 0)
    {
        $default = $category->slug;
        $i++;
    }
    $cats[$category
        ->slug] = $category->name;
}

$wp_customize->add_setting('xpand_blog_featured_category', array(
    'default' => $default,
    'sanitize_callback' => 'xpand_blog_sanitize_select',
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'xpand_blog_featured_category', array(
    'label' => 'Select category vise post',
    'description' => '',
    'section' => 'xpand_blog_slider_section',
    'settings' => 'xpand_blog_featured_category',
    'priority' => 4,
    'type' => 'select',
    'choices' => $cats,
    'active_callback' => 'xpand_blog_slider_callback'
)));

// Number of post
$wp_customize->add_setting('xpand_blog_number_of_post', array(
    'default' => 10,
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('xpand_blog_number_of_post', array(
    'label' => esc_html__('Number of Post', 'xpand-blog') ,
    'section' => 'xpand_blog_slider_section',
    'priority' => 7,
    'type' => 'number',
    'active_callback' => 'xpand_blog_slider_callback'
));

/*Blog Post Options Section*/
$wp_customize->add_section('xpand_blog_general_options', array(
    'title' => __('Xpand Blog Read More and Excerpt Options', 'xpand-blog') ,
    'panel' => 'xpand_blog_theme_options',
    'priority' => 10,
    'description' => esc_html__('Personalize the settings of your theme.', 'xpand-blog') ,
));

// Read More Label
$wp_customize->add_setting('xpand_blog_read_more_label', array(
    'default' => esc_html__('continue reading', 'xpand-blog') ,
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('xpand_blog_read_more_label', array(
    'label' => esc_html__('Read More Label', 'xpand-blog') ,
    'section' => 'xpand_blog_general_options',
    'priority' => 1,
    'type' => 'text',
));

// Excerpt Length
$wp_customize->add_setting('xpand_blog_excerpt_length', array(
    'default' => esc_html__('55', 'xpand-blog') ,
    'sanitize_callback' => 'absint',
));

$wp_customize->add_control('xpand_blog_excerpt_length', array(
    'label' => esc_html__('Excerpt Length', 'xpand-blog') ,
    'description' => esc_html__('0 will not show the excerpt.', 'xpand-blog') ,
    'section' => 'xpand_blog_general_options',
    'priority' => 2,
    'type' => 'number',
));

/*Blog Post Options*/
$wp_customize->add_section('xpand_blog_archive_content_options', array(
    'title' => __('Xpand Blog Blog Post Options', 'xpand-blog') ,
    'panel' => 'xpand_blog_theme_options',
    'priority' => 10,
    'description' => esc_html__('Setting will also apply on archieve and search page.', 'xpand-blog') ,
));

/*======================*/

// Post Author Display Control
$wp_customize->add_setting('xpand_blog_archive_co_post_author', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_archive_co_post_author', array(
    'label' => esc_html__('Display Author', 'xpand-blog') ,
    'section' => 'xpand_blog_archive_content_options',
    'priority' => 2,
    'type' => 'checkbox',
));

// Post Date Display Control
$wp_customize->add_setting('xpand_blog_archive_co_post_date', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_archive_co_post_date', array(
    'label' => esc_html__('Display Date', 'xpand-blog') ,
    'section' => 'xpand_blog_archive_content_options',
    'priority' => 3,
    'type' => 'checkbox',
));

// Featured Image Archive Control
$wp_customize->add_setting('xpand_blog_archive_co_featured_image', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_archive_co_featured_image', array(
    'label' => esc_html__('Display Featured Image', 'xpand-blog') ,
    'section' => 'xpand_blog_archive_content_options',
    'priority' => 5,
    'type' => 'checkbox',
));

/*Blog Page Pagination Options*/
$wp_customize->add_section('xpand_blog_pagination_section', array(
    'title' => __('Xpand Blog Pagination Option', 'xpand-blog') ,
    'panel' => 'xpand_blog_theme_options',
    'priority' => 10
));

// Choose Pagination Option
$wp_customize->add_setting('xpand_blog_pagination_options', array(
    'default' => esc_html__('loadmore', 'xpand-blog') ,
    'sanitize_callback' => 'xpand_blog_sanitize_select',
));

$wp_customize->add_control('xpand_blog_pagination_options', array(
    'label' => esc_html__('Choose Pagination Option', 'xpand-blog') ,
    'section' => 'xpand_blog_pagination_section',
    'priority' => 2,
    'type' => 'select',
    'choices' => array(
        'number' => esc_html__('Number', 'xpand-blog') ,
        'loadmore' => esc_html__('Load More', 'xpand-blog') ,
    ) ,
));

/*Single Post Options*/
$wp_customize->add_section('xpand_blog_single_content_options', array(
    'title' => __('Xpand Blog Single Post Options', 'xpand-blog') ,
    'panel' => 'xpand_blog_theme_options',
    'priority' => 10,
    'description' => esc_html__('Setting will apply on the content of single posts.', 'xpand-blog') ,
));

// Post Author Display Control
$wp_customize->add_setting('xpand_blog_single_co_post_author', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_single_co_post_author', array(
    'label' => esc_html__('Display Author', 'xpand-blog') ,
    'section' => 'xpand_blog_single_content_options',
    'priority' => 2,
    'type' => 'checkbox',
));

// Post Date Display Control
$wp_customize->add_setting('xpand_blog_single_co_post_date', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_single_co_post_date', array(
    'label' => esc_html__('Display Date', 'xpand-blog') ,
    'section' => 'xpand_blog_single_content_options',
    'priority' => 3,
    'type' => 'checkbox',
));

// Single Post Tags Display Control
$wp_customize->add_setting('xpand_blog_single_co_post_tags', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_single_co_post_tags', array(
    'label' => esc_html__('Display Tags', 'xpand-blog') ,
    'section' => 'xpand_blog_single_content_options',
    'priority' => 5,
    'type' => 'checkbox',
));

// Single Post Category Display Control
$wp_customize->add_setting('xpand_blog_single_co_post_category', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_single_co_post_category', array(
    'label' => esc_html__('Display Category', 'xpand-blog') ,
    'section' => 'xpand_blog_single_content_options',
    'priority' => 5,
    'type' => 'checkbox',
));

// Featured Image Post Display Control
$wp_customize->add_setting('xpand_blog_single_co_featured_image_post', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_single_co_featured_image_post', array(
    'label' => esc_html__('Display Featured Image', 'xpand-blog') ,
    'section' => 'xpand_blog_single_content_options',
    'priority' => 7,
    'type' => 'checkbox',
));

// Social Share Icon Display Control
$wp_customize->add_setting('xpand_blog_single_social_share_icon', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_single_social_share_icon', array(
    'label' => esc_html__('Social Share Icon Display', 'xpand-blog') ,
    'section' => 'xpand_blog_single_content_options',
    'priority' => 7,
    'type' => 'checkbox',
));

//Sidebar Section
$wp_customize->add_section('xpand_blog_sidebar_section', array(
    'title' => __('Xpand Blog Sidebar Setting', 'xpand-blog') ,
    'panel' => 'xpand_blog_theme_options',
    'priority' => 10
));

// Main Sidebar Position
$wp_customize->add_setting('xpand_blog_sidebar_position', array(
    'default' => esc_html__('grid', 'xpand-blog') ,
    'sanitize_callback' => 'xpand_blog_sanitize_select',
));

$wp_customize->add_control('xpand_blog_sidebar_position', array(
    'label' => esc_html__('Sidebar Position', 'xpand-blog') ,
    'section' => 'xpand_blog_sidebar_section',
    'priority' => 2,
    'type' => 'select',
    'choices' => array(
        'right' => esc_html__('Right Sidebar', 'xpand-blog') ,
        'left' => esc_html__('Left Sidebar', 'xpand-blog') ,
        'no' => esc_html__('No Sidebar', 'xpand-blog') ,
        'grid' => esc_html__('Grid Layout', 'xpand-blog')
    ) ,
));

//Footer Section
$wp_customize->add_section('xpand_blog_footer_section', array(
    'title' => __('Xpand Blog Footer Setting', 'xpand-blog') ,
    'panel' => 'xpand_blog_theme_options',
    'priority' => 10
));

//Footer bottom Copyright Display Control
$wp_customize->add_setting('xpand_blog_footer_copyright_display', array(
    'default' => true,
    'sanitize_callback' => 'xpand_blog_sanitize_checkbox',
));

$wp_customize->add_control('xpand_blog_footer_copyright_display', array(
    'label' => esc_html__('Display Copyright Footer', 'xpand-blog') ,
    'section' => 'xpand_blog_footer_section',
    'priority' => 1,
    'type' => 'checkbox',
));

// Copyright Control
$wp_customize->add_setting('xpand_blog_copyright', array(
    'default' => esc_html__('Proudly Powered By WordPress', 'xpand-blog') ,
    'sanitize_callback' => 'wp_kses_post',
));

$wp_customize->add_control('xpand_blog_copyright', array(
    'label' => esc_html__('Copyright', 'xpand-blog') ,
    'section' => 'xpand_blog_footer_section',
    'priority' => 2,
    'type' => 'textarea',
    'active_callback' => 'xpand_blog_footer_copyright_callback'
));